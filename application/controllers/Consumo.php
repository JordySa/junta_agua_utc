<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ConsumoModel');
    }

    public function index() {
        $data['consumos'] = $this->ConsumoModel->get_consumos();
        $this->load->view('header');
        $this->load->view('consumo/index', $data);
        $this->load->view('footer');
    }

    public function nuevo() {
        $this->load->view('header');
        $this->load->view('consumo/nuevo');
        $this->load->view('footer');
    }

    public function editar($id) {
        $data['consumo'] = $this->ConsumoModel->get_consumo($id);
        if (!$data['consumo']) {
            show_error('El consumo solicitado no existe.', 404);
        }
        $this->load->view('header');
        $this->load->view('consumo/editar', $data);
        $this->load->view('footer');
    }

    public function guardar() {
        $data = array(
            'anio_consumo' => $this->input->post('anio_consumo'),
            'mes_consumo' => $this->input->post('mes_consumo'),
            'estado_consumo' => $this->input->post('estado_consumo'),
            'numero_mes_consumo' => $this->input->post('numero_mes_consumo'),
            'fecha_vencimiento_consumo' => $this->input->post('fecha_vencimiento_consumo')
        );
        if($this->ConsumoModel->guardar_consumo($data)) {
            redirect('consumo/index');
        } else {
            show_error('Ocurrió un error al guardar el consumo.');
        }
    }

    public function actualizar($id) {
        $data = array(
            'anio_consumo' => $this->input->post('anio_consumo'),
            'mes_consumo' => $this->input->post('mes_consumo'),
            'estado_consumo' => $this->input->post('estado_consumo'),
            'numero_mes_consumo' => $this->input->post('numero_mes_consumo'),
            'fecha_vencimiento_consumo' => $this->input->post('fecha_vencimiento_consumo')
        );
        if($this->ConsumoModel->actualizar_consumo($id, $data)) {
            redirect('consumo/index');
        } else {
            show_error('Ocurrió un error al actualizar el consumo.');
        }
    }
    public function eliminar($id) {
        if($this->ConsumoModel->eliminar_consumo($id)) {
            redirect('consumo/index');
        } else {
            show_error('Ocurrió un error al eliminar el consumo.');
        }
    }
    
}
?>
