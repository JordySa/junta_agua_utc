<?php
      class Perfiles extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("perfil");
            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoPerfiles"]=$this->perfil->consultarTodos();
          $this->load->view("header");
          $this->load->view("perfiles/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $this->load->view("header");
          $this->load->view("perfiles/nuevo");
          $this->load->view("footer");
        }

        public function editar($id_per){
          $data["perfil"]=$this->perfil->consultarPorId($id_per);
          $this->load->view("header");
          $this->load->view("perfiles/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_per=$this->input->post("id_per");
            $datosPerfilEditado=array(
                "nombre_per"=>$this->input->post("nombre_per"),
                "descripcion_per"=>$this->input->post("descripcion_per"),
                "estado_per"=>$this->input->post("estado_per"),
                "creacion_per"=>$this->input->post("creacion_per"),
                "actualizacion_per"=>$this->input->post("actualizacion_per")



            );
            if($this->perfil->actualizar($id_per,$datosPerfilEditado)){
                //echo "INSERCION EXITOSA";
                redirect("perfiles/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarPerfil(){
            $datosNuevoPerfil=array(
                "nombre_per"=>$this->input->post("nombre_per"),
                "descripcion_per"=>$this->input->post("descripcion_per"),
                "estado_per"=>$this->input->post("estado_per"),
                "creacion_per"=>$this->input->post("creacion_per"),
                "actualizacion_per"=>$this->input->post("actualizacion_per")

 );
            if($this->perfil->insertar($datosNuevoPerfil)){
                $this->session->set_flashdata("confirmacion",
                 "Perfil insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("perfiles/index");
        }

        public function procesarEliminacion($id_per){
            if($this->perfil->eliminar($id_per)){
                redirect("perfiles/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>
