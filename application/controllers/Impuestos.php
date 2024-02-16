<?php
      class Impuestos extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("impuesto");
            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoImpuestos"]=$this->impuesto->consultarTodos();
          $this->load->view("header");
          $this->load->view("impuestos/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $this->load->view("header");
          $this->load->view("impuestos/nuevo");
          $this->load->view("footer");
        }

        public function editar($id_imp){
          $data["impuesto"]=$this->impuesto->consultarPorId($id_imp);
          $this->load->view("header");
          $this->load->view("impuestos/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_imp=$this->input->post("id_imp");
            $datosImpuestoEditado=array(
                "nombre_imp"=>$this->input->post("nombre_imp"),
                "descripcion_imp"=>$this->input->post("descripcion_imp"),
                "porcentaje_imp"=>$this->input->post("porcentaje_imp"),
                "retencion_imp"=>$this->input->post("retencion_imp"),
                "estado_imp"=>$this->input->post("estado_imp"),
                "creacion_imp"=>$this->input->post("creacion_imp"),
                "actualizacion_imp"=>$this->input->post("actualizacion_imp")


            );
            if($this->impuesto->actualizar($id_imp,$datosImpuestoEditado)){
                //echo "INSERCION EXITOSA";
                redirect("impuestos/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarImpuesto(){
            $datosNuevoImpuesto=array(
                "nombre_imp"=>$this->input->post("nombre_imp"),
                "descripcion_imp"=>$this->input->post("descripcion_imp"),
                "porcentaje_imp"=>$this->input->post("porcentaje_imp"),
                "retencion_imp"=>$this->input->post("retencion_imp"),
                "estado_imp"=>$this->input->post("estado_imp"),
                "creacion_imp"=>$this->input->post("creacion_imp"),
                "actualizacion_imp"=>$this->input->post("actualizacion_imp")
            );
            if($this->impuesto->insertar($datosNuevoImpuesto)){
                $this->session->set_flashdata("confirmacion",
                 "Impuesto insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("impuestos/index");
        }

        public function procesarEliminacion($id_imp){
            if($this->impuesto->eliminar($id_imp)){
                redirect("impuestos/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>
