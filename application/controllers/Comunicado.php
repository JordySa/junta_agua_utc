<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicado extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("ComunicadoModel");
    }

    public function index() {
        $data["listadoComunicados"] = $this->ComunicadoModel->obtenerTodos(); // Obtener todos los comunicados
        $this->load->view('header');
        $this->load->view('comunicado/index', $data);
        $this->load->view('footer');
    }
    
    public function nuevo() {
        $this->load->view('header');
        $this->load->view('comunicado/nuevo');
        $this->load->view('footer');
    }

    public function guardar() {
        $datosNuevoComunicado = array(
            "fecha_com" => $this->input->post('fecha'),
            "mensaje_com" => $this->input->post('mensaje'),
            "creacion_com" => date('Y-m-d H:i:s'),
            "actualizacion_com" => date('Y-m-d H:i:s')
        );
        if ($this->ComunicadoModel->insertar($datosNuevoComunicado)) {
            $this->session->set_flashdata('confirmacion', 'Comunicado insertado exitosamente');
        } else {
            $this->session->set_flashdata('error', 'Error al insertar, verifique e intente de nuevo');
        }
        redirect('comunicado/index');
    }

    public function eliminar($id) {
        if ($this->ComunicadoModel->eliminarPorId($id)) {
            $this->session->set_flashdata('confirmacion', 'Comunicado eliminado exitosamente');
        } else {
            $this->session->set_flashdata('error', 'Error al eliminar, verifique e intente de nuevo');
        }
        redirect('comunicado/index');
    }

    public function actualizar($id) {
        $data["comunicadoEditar"] = $this->ComunicadoModel->obtenerPorId($id);
        $this->load->view("header");
        $this->load->view("comunicado/actualizar", $data);
        $this->load->view("footer");
    }

    public function procesar_actualizacion() {
        $datosComunicadoEditado = array(
            "fecha_com" => $this->input->post('fecha'),
            "mensaje_com" => $this->input->post('mensaje'),
            "actualizacion_com" => date('Y-m-d H:i:s')
        );
        $id = $this->input->post("id_com");
        if ($this->ComunicadoModel->actualizar($id, $datosComunicadoEditado)) {
            redirect('comunicado/index');
        } else {
            echo "<h1>ERROR</h1>";
        }
    }
}
?>
