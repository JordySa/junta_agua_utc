<?php
   class Ruta extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("ruta",$datos);
     }
     //Funcion que consulta todos los rutas de la bdd
     public function obtenerTodos(){
        $rutas=$this->db->get("ruta");
        if ($rutas->num_rows()>0) {
          return $rutas;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un rutas se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_rut",$id);
        return $this->db->delete("ruta");
     }
     //Consultando el ruta por su id
     public function obtenerPorId($id){
        $this->db->where("id_rut",$id);
        $ruta=$this->db->get("ruta");
        if($ruta->num_rows()>0){
          return $ruta->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de rutas
     public function actualizar($id,$datos){
       $this->db->where("id_rut",$id);
       return $this->db->update("ruta",$datos);
     }

   }//Cierre de la clase (No borrar)














//
