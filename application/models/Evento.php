<?php
   class Evento extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("tipo_evento",$datos);
     }
     //Funcion que consulta todos los eventos de la bdd
     public function obtenerTodos(){
        $eventos=$this->db->get("tipo_evento");
        if ($eventos->num_rows()>0) {
          return $eventos;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un eventos se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_te",$id);
        return $this->db->delete("tipo_evento");
     }
     //Consultando el evento por su id
     public function obtenerPorId($id){
        $this->db->where("id_te",$id);
        $evento=$this->db->get("tipo_evento");
        if($evento->num_rows()>0){
          return $evento->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de eventos
     public function actualizar($id,$datos){
       $this->db->where("id_te",$id);
       return $this->db->update("tipo_evento",$datos);
     }

   }//Cierre de la clase (No borrar)














//
