<?php
   class Socio extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("socio",$datos);
     }
     //Funcion que consulta todos los socios de la bdd
     public function obtenerTodos(){
        $socios=$this->db->get("socio");
        if ($socios->num_rows()>0) {
          return $socios;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un socios se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_soc",$id);
        return $this->db->delete("socio");
     }
     //Consultando el socio por su id
     public function obtenerPorId($id){
        $this->db->where("id_soc",$id);
        $socio=$this->db->get("socio");
        if($socio->num_rows()>0){
          return $socio->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de socios
     public function actualizar($id,$datos){
       $this->db->where("id_soc",$id);
       return $this->db->update("socio",$datos);
     }

   }//Cierre de la clase (No borrar)














//
