<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DetalleModel');
    }

    public function index() {
        // Carga los detalles desde el modelo
        $data['detalles'] = $this->DetalleModel->get_detalles();
        // Carga la vista index
        $this->load->view('header');
        $this->load->view('detalle/index', $data); // Asegúrate de pasar $data aquí
        $this->load->view('footer');
    }
    
    public function nuevo() {
        $this->load->view('header');
        $this->load->view('detalle/nuevo');
        $this->load->view('footer');
    }

    public function guardar() {
        $data = array(
            'fk_id_lec' => $this->input->post('fk_id_lec'),
            'fk_id_rec' => $this->input->post('fk_id_rec'),
            'cantidad_det' => $this->input->post('cantidad_det'),
            'detalle_det' => $this->input->post('detalle_det'),
            'valor_unitario_det' => $this->input->post('valor_unitario_det'),
            'subtotal_det' => $this->input->post('subtotal_det'),
            'iva_det' => $this->input->post('iva_det')
        );
        $this->DetalleModel->guardar_detalle($data);
        redirect('detalle');
    }

    public function editar($id) {
        $data['detalle'] = $this->DetalleModel->get_detalle($id);
        $this->load->view('header');
        $this->load->view('detalle/editar', $data);
        $this->load->view('footer');
    }

    public function actualizar($id) {
        $data = array(
            'fk_id_lec' => $this->input->post('fk_id_lec'),
            'fk_id_rec' => $this->input->post('fk_id_rec'),
            'cantidad_det' => $this->input->post('cantidad_det'),
            'detalle_det' => $this->input->post('detalle_det'),
            'valor_unitario_det' => $this->input->post('valor_unitario_det'),
            'subtotal_det' => $this->input->post('subtotal_det'),
            'iva_det' => $this->input->post('iva_det')
        );
        $this->DetalleModel->actualizar_detalle($id, $data);
        redirect('detalle');
    }

    public function eliminar($id) {
        $this->DetalleModel->eliminar_detalle($id);
        redirect('detalle');
    }
}
