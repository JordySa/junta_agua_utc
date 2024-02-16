<?php
      class HistorialPropietarios extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("historialpropietario");
            $this->load->model("medidor");
            $this->load->model("socio");
            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoHistorialPropietarios"]=$this->historialpropietario->consultarTodos();
          $this->load->view("header");
          $this->load->view("historialpropietarios/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $data["listadoMedidores"]=$this->medidor->consultarTodos();
          $data["listadoSocios"]=$this->socio->consultarTodos();
          $this->load->view("header");
          $this->load->view("historialpropietarios/nuevo",$data);
          $this->load->view("footer");
        }

        public function editar($id_his){
          $data["listadoMedidores"]=$this->medidor->consultarTodos();
          $data["listadoSocios"]=$this->socio->consultarTodos();
          $data["historial_propietario"]=$this->historialpropietario->consultarPorId($id_his);
          $this->load->view("header");
          $this->load->view("historialpropietarios/editar",$data);
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
            if($this->historialpropietario->actualizar($id_his,$datosHistorialPropietarioEditado)){
                //echo "INSERCION EXITOSA";
                redirect("historialpropietarios/index");
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
            if($this->historialpropietario->insertar($datosNuevoHistorialPropietario)){
                $this->session->set_flashdata("confirmacion",
                 "Historial del Nuevo Propietario insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("historialpropietarios/index");
        }

        public function procesarEliminacion($id_his){
            if($this->historialpropietario->eliminar($id_his)){
                redirect("historialpropietarios/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>