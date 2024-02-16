<?php
   class Recaudacion extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("recaudacion",$datos);
     }
     //Funcion que consulta todos los recaudacions de la bdd
     public function obtenerTodos(){
        $recaudaciones=$this->db->get("recaudacion");
        if ($recaudaciones->num_rows()>0) {
          return $recaudaciones;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un recaudacions se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_rec",$id);
        return $this->db->delete("recaudacion");
     }
     //Consultando el recaudacion por su id
     public function obtenerPorId($id){
        $this->db->where("id_rec",$id);
        $recaudacion=$this->db->get("recaudacion");
        if($recaudacion->num_rows()>0){
          return $recaudacion->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de recaudacions
     public function actualizar($id,$datos){
       $this->db->where("id_rec",$id);
       return $this->db->update("recaudacion",$datos);
     }

   }//Cierre de la clase (No borrar)














//
