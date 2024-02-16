<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_eventos() {
        $query = $this->db->get('evento');
        return $query->result();
    }

    public function get_evento($id) {
        $this->db->where('id_eve', $id);
        $query = $this->db->get('evento');
        return $query->row();
    }

    public function guardar_evento($data) {
        return $this->db->insert('evento', $data);
    }

    public function actualizar_evento($id, $data) {
        $this->db->where('id_eve', $id);
        return $this->db->update('evento', $data);
    }

    public function eliminar_evento($id) {
        $this->db->where('id_eve', $id);
        return $this->db->delete('evento');
    }

}
