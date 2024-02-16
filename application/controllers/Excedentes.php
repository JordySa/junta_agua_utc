<?php
      class Excedentes extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("excedente");
            $this->load->model("tarifa");
            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoExcedentes"]=$this->excedente->consultarTodos();
          $this->load->view("header");
          $this->load->view("excedentes/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $data["listadoTarifas"]=$this->tarifa->consultarTodos();
          $this->load->view("header");
          $this->load->view("excedentes/nuevo",$data);
          $this->load->view("footer");
        }

        public function editar($id_ex){
          $data["listadoTarifas"]=$this->tarifa->consultarTodos();
          $data["excedente"]=$this->excedente->consultarPorId($id_ex);
          $this->load->view("header");
          $this->load->view("excedentes/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_ex=$this->input->post("id_ex");
            $datosExcedenteEditado=array(
                "limite_minimo_ex"=>$this->input->post("limite_minimo_ex"),
                "limite_maximo_ex"=>$this->input->post("limite_maximo_ex"),
                "tarifa_ex"=>$this->input->post("tarifa_ex"),
                "fecha_creacion_ex"=>$this->input->post("fecha_creacion_ex"),
                "fecha_actualizacion_ex"=>$this->input->post("fecha_actualizacion_ex"),
                "id_tar"=>$this->input->post("id_tar")
            );
            if($this->excedente->actualizar($id_ex,$datosExcedenteEditado)){
                //echo "INSERCION EXITOSA";
                redirect("excedentes/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarExcedente(){
            $datosNuevoExcedente=array(
                "limite_minimo_ex"=>$this->input->post("limite_minimo_ex"),
                "limite_maximo_ex"=>$this->input->post("limite_maximo_ex"),
                "tarifa_ex"=>$this->input->post("tarifa_ex"),
                "fecha_creacion_ex"=>$this->input->post("fecha_creacion_ex"),
                "fecha_actualizacion_ex"=>$this->input->post("fecha_actualizacion_ex"),
                "id_tar"=>$this->input->post("id_tar")
            );
            if($this->excedente->insertar($datosNuevoExcedente)){
                $this->session->set_flashdata("confirmacion",
                 "Excedente insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("excedentes/index");
        }

        public function procesarEliminacion($id_ex){
            if($this->excedente->eliminar($id_ex)){
                redirect("excedentes/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>
