<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carga el modelo de asistencia
        $this->load->model('AsistenciaModel');
    }

    public function index() {
        // Carga las asistencias desde el modelo
        $data['asistencias'] = $this->AsistenciaModel->get_asistencias();
        // Carga la vista index
        $this->load->view('header');
        $this->load->view('asistencia/index', $data);  // Pasamos $data al vista
        $this->load->view('footer');
    }

    public function nuevo() {
        // Carga la vista nuevo
        $this->load->view('header');
        $this->load->view('asistencia/nuevo');
        $this->load->view('footer');
    }

    public function editar($id) {
        // Obtiene la asistencia a editar desde el modelo
        $data['asistencia'] = $this->AsistenciaModel->get_asistencia($id);
        // Carga la vista editar
        $this->load->view('header');
        $this->load->view('asistencia/editar', $data);
        $this->load->view('footer');
    }

    public function guardar() {
        // Captura los datos del formulario
        $data = array(
            'fk_id_eve' => $this->input->post('fk_id_eve'),
            'fk_id_soc' => $this->input->post('fk_id_soc'),
            'tipo_asi' => $this->input->post('tipo_asi'),
            'valor_asi' => $this->input->post('valor_asi'),
            'atraso_asi' => $this->input->post('atraso_asi'),
            'valor_atraso_asi' => $this->input->post('valor_atraso_asi')
        );
        // Guarda la nueva asistencia en la base de datos
        if($this->AsistenciaModel->guardar_asistencia($data)) {
            redirect('asistencia/index');
        } else {
            redirect('asistencia/nuevo'); // Redirige al formulario de nuevo
        }
    }

    public function actualizar($id) {
        // Captura los datos del formulario
        $data = array(
            'fk_id_eve' => $this->input->post('fk_id_eve'),
            'fk_id_soc' => $this->input->post('fk_id_soc'),
            'tipo_asi' => $this->input->post('tipo_asi'),
            'valor_asi' => $this->input->post('valor_asi'),
            'atraso_asi' => $this->input->post('atraso_asi'),
            'valor_atraso_asi' => $this->input->post('valor_atraso_asi')
        );
        // Actualiza la asistencia en la base de datos
        if($this->AsistenciaModel->actualizar_asistencia($id, $data)) {
            redirect('asistencia/index');
        } else {
            redirect('asistencia/editar/'.$id); // Redirige de nuevo al formulario de edición
        }
    }

    public function eliminar($id) {
        // Elimina la asistencia de la base de datos
        if($this->AsistenciaModel->eliminar_asistencia($id)) {
            redirect('asistencia/index');
        } else {
            // Manejo de error
            redirect('asistencia/index'); // Por ahora simplemente redirige al índice
        }
    }
}
?>
