<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsistenciaModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Carga la base de datos
        $this->load->database();
    }

    public function get_asistencias() {
        // Obtener asistencias desde la base de datos
        $query = $this->db->get('asistencia');
        return $query->result();
    }

    public function get_asistencia($id) {
        // Obtener una asistencia específica desde la base de datos
        $this->db->where('id_asi', $id);
        $query = $this->db->get('asistencia');
        return $query->row();
    }

    public function guardar_asistencia($data) {
        // Guarda una nueva asistencia en la base de datos
        return $this->db->insert('asistencia', $data);
    }

    public function actualizar_asistencia($id, $data) {
        // Actualiza una asistencia existente en la base de datos
        $this->db->where('id_asi', $id);
        return $this->db->update('asistencia', $data);
    }

    public function eliminar_asistencia($id) {
        // Elimina una asistencia de la base de datos
        $this->db->where('id_asi', $id);
        return $this->db->delete('asistencia');
    }
}
?>
