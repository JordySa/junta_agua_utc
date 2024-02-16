<?php
      class Lecturas extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("lectura");
            $this->load->model("historialpropietario");
            $this->load->model("ConsumoModel");

            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoLecturas"]=$this->lectura->consultarTodos();
          $this->load->view("header");
          $this->load->view("lecturas/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $data["listadoHistorialPropietarios"]=$this->historialpropietario->consultarTodos();
          $data["listadoConsumos"]=$this->consumo->consultarTodos();
          $this->load->view("header");
          $this->load->view("lecturas/nuevo",$data);
          $this->load->view("footer");
        }

        public function editar($id_lec){
          $data["listadoHistorialPropietarios"]=$this->historialpropietario->consultarTodos();
          $data["listadoConsumos"]=$this->consumo->consultarTodos();
          $data["lectura"]=$this->lectura->consultarPorId($id_lec);
          $this->load->view("header");
          $this->load->view("lecturas/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_lec=$this->input->post("id_lec");
            $datosLecturaEditado=array(
                "anio_lec"=>$this->input->post("anio_lec"),
                "mes_lec"=>$this->input->post("mes_lec"),
                "estado_lec"=>$this->input->post("estado_lec"),
                "lectura_anterior_lec"=>$this->input->post("lectura_anterior_lec"),
                "lectura_actual_lec"=>$this->input->post("lectura_actual_lec"),
                "fecha_creacion_lec"=>$this->input->post("fecha_creacion_lec"),
                "fecha_actualizacion_lec"=>$this->input->post("fecha_actualizacion_lec"),
                "fk_id_his"=>$this->input->post("fk_id_his"),
                "fk_id_consumo"=>$this->input->post("fk_id_consumo")

            );
            if($this->lectura->actualizar($id_lec,$datosLecturaEditado)){
                //echo "INSERCION EXITOSA";
                redirect("lecturas/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarLectura(){
            $datosNuevoLectura=array(
                "anio_lec"=>$this->input->post("anio_lec"),
                "mes_lec"=>$this->input->post("mes_lec"),
                "estado_lec"=>$this->input->post("estado_lec"),
                "lectura_anterior_lec"=>$this->input->post("lectura_anterior_lec"),
                "lectura_actual_lec"=>$this->input->post("lectura_actual_lec"),
                "fecha_creacion_lec"=>$this->input->post("fecha_creacion_lec"),
                "fecha_actualizacion_lec"=>$this->input->post("fecha_actualizacion_lec"),
                "fk_id_his"=>$this->input->post("fk_id_his"),
                "fk_id_consumo"=>$this->input->post("fk_id_consumo")

            );
            if($this->lectura->insertar($datosNuevoLectura)){
                $this->session->set_flashdata("confirmacion",
                 "Lectura insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("lecturas/index");
        }

        public function procesarEliminacion($id_lec){
            if($this->lectura->eliminar($id_lec)){
                redirect("lecturas/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>