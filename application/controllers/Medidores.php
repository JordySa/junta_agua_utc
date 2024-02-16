<?php
      class Medidores extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("medidor");
            $this->load->model("ruta");
            $this->load->model("tarifa");

            //validando si alguien esta conectado

        }

        public function index(){
          $data["listadoMedidores"]=$this->medidor->consultarTodos();
          $this->load->view("header");
          $this->load->view("medidores/index",$data);
          $this->load->view("footer");
        }
        public function nuevo(){
          $data["listadoRutas"]=$this->ruta->obtenerTodos();
          $data["listadoTarifas"]=$this->tarifa->obtenerTodos();
          $this->load->view("header");
          $this->load->view("medidores/nuevo",$data);
          $this->load->view("footer");
        }

        public function editar($id_med){
          $data["listadoRutas"]=$this->ruta->obtenerTodos();
          $data["listadoTarifas"]=$this->tarifa->obtenerTodos();
          $data["medidor"]=$this->medidor->consultarPorId($id_med);
          $this->load->view("header");
          $this->load->view("medidores/editar",$data);
          $this->load->view("footer");
        }

        public function procesarActualizacion(){
            $id_med=$this->input->post("id_med");
            $datosMedidorEditado=array(
                "fk_id_rut"=>$this->input->post("fk_id_rut"),
                "fk_id_tar"=>$this->input->post("fk_id_tar"),
                "numero_med"=>$this->input->post("numero_med"),
                "serie_med"=>$this->input->post("serie_med"),
                "marca_med"=>$this->input->post("marca_med"),
                "observacion_med"=>$this->input->post("observacion_med"),
                "estado_med"=>$this->input->post("estado_med"),
                "creacion_med"=>$this->input->post("creacion_med"),
                "actualizacion_med"=>$this->input->post("actualizacion_med"),
                "lectura_inicial_med"=>$this->input->post("lectura_inicial_med")

            );
                        //Logica de Negocio necesaria para subir la FOTOGRAFIA del cliente
                        $this->load->library("upload");//carga de la libreria de subida de archivos
                        $nombreTemporal="foto_med_".time()."_".rand(1,5000);
                        $config["file_name"]=$nombreTemporal;
                        $config["upload_path"]=APPPATH.'../uploads/medidores/';
                        $config["allowed_types"]="jpeg|jpg|png";
                        $config["max_size"]=2*1024; //2MB
                        $this->upload->initialize($config);
                        //codigo para subir el archivo y guardar el nombre en la BDD
                        if($this->upload->do_upload("foto_med")){
                          $dataSubida=$this->upload->data();
                          $datosMedidorEditado["foto_med"]=$dataSubida["file_name"];
                        }


            if($this->medidor->actualizar($id_med,$datosMedidorEditado)){
                //echo "INSERCION EXITOSA";
                redirect("medidores/index");
            }else{
                echo "ERROR AL ACTUALIZAR";
            }
        }

        public function guardarMedidor(){
            $datosNuevoMedidor=array(
                "fk_id_rut"=>$this->input->post("fk_id_rut"),
                "fk_id_tar"=>$this->input->post("fk_id_tar"),
                "numero_med"=>$this->input->post("numero_med"),
                "serie_med"=>$this->input->post("serie_med"),
                "marca_med"=>$this->input->post("marca_med"),
                "observacion_med"=>$this->input->post("observacion_med"),
                "estado_med"=>$this->input->post("estado_med"),
                "creacion_med"=>$this->input->post("creacion_med"),
                "actualizacion_med"=>$this->input->post("actualizacion_med"),
                "lectura_inicial_med"=>$this->input->post("lectura_inicial_med")

            );
                        //Logica de Negocio necesaria para subir la FOTOGRAFIA del cliente
                        $this->load->library("upload");//carga de la libreria de subida de archivos
                        $nombreTemporal="foto_med_".time()."_".rand(1,5000);
                        $config["file_name"]=$nombreTemporal;
                        $config["upload_path"]=APPPATH.'../uploads/medidores/';
                        $config["allowed_types"]="jpeg|jpg|png";
                        $config["max_size"]=2*1024; //2MB
                        $this->upload->initialize($config);
                        //codigo para subir el archivo y guardar el nombre en la BDD
                        if($this->upload->do_upload("foto_med")){
                          $dataSubida=$this->upload->data();
                          $datosNuevoMedidor["foto_med"]=$dataSubida["file_name"];
                        }
            if($this->medidor->insertar($datosNuevoMedidor)){
                $this->session->set_flashdata("confirmacion",
                 "Medidor insertado exitosamente.");
            }else{
               $this->session->set_flashdata("error",
               "Error al procesar, intente nuevamente.");
            }
            redirect("medidores/index");
        }

        public function procesarEliminacion($id_med){
            if($this->medidor->eliminar($id_med)){
                redirect("medidores/index");
            }else{
                echo "ERROR AL ELIMINAR";
            }

        }

    }//cierre de la clase
?>