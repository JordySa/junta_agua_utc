<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComunicadoModel extends CI_Model {
    
    function __construct() 
    {
        parent::__construct();
    }

    // Método para obtener todos los comunicados
    public function obtenerTodos() {
        $query = $this->db->get('comunicado');
        return $query->result();
    }
    
    // Método para insertar un nuevo comunicado
    public function insertar($datos) {
        return $this->db->insert('comunicado', $datos);
    }

    // Método para eliminar un comunicado por su ID
    public function eliminarPorId($id) {
        $this->db->where('id_com', $id);
        return $this->db->delete('comunicado');
    }

    // Método para obtener un comunicado por su ID
    public function obtenerPorId($id) {
        $this->db->where('id_com', $id);
        return $this->db->get('comunicado')->row();
    }

    // Método para actualizar un comunicado
    public function actualizar($id, $datos) {
        $this->db->where('id_com', $id);
        return $this->db->update('comunicado', $datos);
    }
}
?>
