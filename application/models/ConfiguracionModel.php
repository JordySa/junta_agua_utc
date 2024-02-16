<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfiguracionModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Carga la base de datos
        $this->load->database();
    }

    public function get_configuraciones() {
        // Obtener configuraciones desde la base de datos
        $query = $this->db->get('configuracion');
        return $query->result();
    }

    public function get_configuracion($id) {
        // Obtener una configuracion específica desde la base de datos
        $this->db->where('id_con', $id);
        $query = $this->db->get('configuracion');
        return $query->row();
    }

    public function guardar_configuracion($data) {
        // Guarda una nueva configuracion en la base de datos
        return $this->db->insert('configuracion', $data);
    }

    public function actualizar_configuracion($id, $data) {
        // Actualiza una configuracion existente en la base de datos
        $this->db->where('id_con', $id);
        return $this->db->update('configuracion', $data);
    }

    public function eliminar_configuracion($id) {
        // Elimina una configuracion de la base de datos
        $this->db->where('id_con', $id);
        return $this->db->delete('configuracion');
    }
}
?>
