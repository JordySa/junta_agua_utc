<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('EventoModel');
    }

    public function index() {
        $data['eventos'] = $this->EventoModel->get_eventos();
        $this->load->view('header');
        $this->load->view('evento/index', $data);
        $this->load->view('footer');
    }

    public function nuevo() {
        $this->load->view('header');
        $this->load->view('evento/nuevo');
        $this->load->view('footer');
    }

    public function editar($id) {
        $data['evento'] = $this->EventoModel->get_evento($id);
        $this->load->view('header');
        $this->load->view('evento/editar', $data);
        $this->load->view('footer');
    }

    public function guardar() {
        $data = array(
            'descripcion_eve' => $this->input->post('descripcion_eve'),
            'fecha_hora_eve' => $this->input->post('fecha_hora_eve'),
            'lugar_eve' => $this->input->post('lugar_eve'),
            'fk_id_te' => $this->input->post('fk_id_te')
        );
        $this->EventoModel->guardar_evento($data);
        redirect('evento');
    }

    public function actualizar() {
        $id = $this->input->post('id_eve');
        $data = array(
            'descripcion_eve' => $this->input->post('descripcion_eve'),
            'fecha_hora_eve' => $this->input->post('fecha_hora_eve'),
            'lugar_eve' => $this->input->post('lugar_eve'),
            'fk_id_te' => $this->input->post('fk_id_te')
        );
        $this->EventoModel->actualizar_evento($id, $data);
        redirect('evento');
    }

    public function eliminar($id) {
        $this->EventoModel->eliminar_evento($id);
        redirect('evento');
    }

}
