<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsumoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Carga la base de datos
        $this->load->database();
    }

    public function get_consumos() {
        // Obtener consumos desde la base de datos
        $query = $this->db->get('consumo');
        return $query->result();
    }

    public function get_consumo($id) {
        // Obtener un consumo específico desde la base de datos
        $this->db->where('id_consumo', $id);
        $query = $this->db->get('consumo');
        return $query->row();
    }

    public function guardar_consumo($data) {
        // Guardar un nuevo consumo en la base de datos
        return $this->db->insert('consumo', $data);
    }

    public function actualizar_consumo($id, $data) {
        // Actualizar un consumo existente en la base de datos
        $this->db->where('id_consumo', $id);
        return $this->db->update('consumo', $data);
    }

    public function eliminar_consumo($id) {
        // Eliminar un consumo de la base de datos
        $this->db->where('id_consumo', $id);
        return $this->db->delete('consumo');
    }
}
?>
