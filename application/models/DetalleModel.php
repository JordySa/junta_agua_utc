<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetalleModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_detalles() {
        return $this->db->get('detalle')->result();
    }

    public function guardar_detalle($data) {
        $this->db->insert('detalle', $data);
        return $this->db->insert_id();
    }

    public function get_detalle($id) {
        return $this->db->get_where('detalle', array('id_det' => $id))->row();
    }

    public function actualizar_detalle($id, $data) {
        $this->db->where('id_det', $id);
        $this->db->update('detalle', $data);
    }

    public function eliminar_detalle($id) {
        $this->db->where('id_det', $id);
        $this->db->delete('detalle');
    }
}
