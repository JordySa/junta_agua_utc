<?php
      class Historiales extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("historial");
            $this->load->model("medidor");
            $this->load->model("socio");
            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoHistorialPropietarios"]=$this->historial->consultarTodos();
          $this->load->view("header");
          $this->load->view("historiales/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $data["listadoMedidores"]=$this->medidor->consultarTodos();
          $data["listadoSocios"]=$this->socio->consultarTodos();
          $this->load->view("header");
          $this->load->view("historiales/nuevo",$data);
          $this->load->view("footer");
        }

        public function editar($id_his){
          $data["listadoMedidores"]=$this->medidor->consultarTodos();
          $data["listadoSocios"]=$this->socio->consultarTodos();
          $data["historial_propietario"]=$this->historial->consultarPorId($id_his);
          $this->load->view("header");
          $this->load->view("historiales/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_his=$this->input->post("id_his");
            $datosHistorialPropietarioEditado=array(
                "fk_id_med"=>$this->input->post("fk_id_med"),
                "fk_id_soc"=>$this->input->post("fk_id_soc"),
                "actualizacion_his"=>$this->input->post("actualizacion_his"),
                "estado_his"=>$this->input->post("estado_his"),
                "observacion_his"=>$this->input->post("observacion_his"),
                "fecha_cambio_his"=>$this->input->post("fecha_cambio_his"),
                "creacion_his"=>$this->input->post("creacion_his"),
                "propietario_actual_his"=>$this->input->post("propietario_actual_his")

            );
            if($this->historial->actualizar($id_his,$datosHistorialPropietarioEditado)){
                //echo "INSERCION EXITOSA";
                redirect("historiales/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarHistorialPropietario(){
            $datosNuevoHistorialPropietario=array(
                "fk_id_med"=>$this->input->post("fk_id_med"),
                "fk_id_soc"=>$this->input->post("fk_id_soc"),
                "actualizacion_his"=>$this->input->post("actualizacion_his"),
                "estado_his"=>$this->input->post("estado_his"),
                "observacion_his"=>$this->input->post("observacion_his"),
                "fecha_cambio_his"=>$this->input->post("fecha_cambio_his"),
                "creacion_his"=>$this->input->post("creacion_his"),
                "propietario_actual_his"=>$this->input->post("propietario_actual_his")

            );
            if($this->historial->insertar($datosNuevoHistorialPropietario)){
                $this->session->set_flashdata("confirmacion",
                 "Historial del Nuevo Propietario insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("historiales/index");
        }

        public function procesarEliminacion($id_his){
            if($this->historial->eliminar($id_his)){
                redirect("historiales/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>