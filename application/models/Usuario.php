<?php
   class Usuario extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     public function insertar($datos){
        return $this->db->insert("usuario",$datos);
     }
     //Funcion que consulta todos los usuarios de la bdd
     public function obtenerTodos(){
        $usuarios=$this->db->get("usuario");
        if ($usuarios->num_rows()>0) {
          return $usuarios;
        } else {
          return false;//cuando no hay datos
        }
     }
     //funcion para eliminar un usuarios se recibe el id
     public function eliminarPorId($id){
        $this->db->where("id_usu",$id);
        return $this->db->delete("usuario");
     }
     //Consultando el usuario por su id
     public function obtenerPorId($id){
        $this->db->where("id_usu",$id);
        $usuario=$this->db->get("usuario");
        if($usuario->num_rows()>0){
          return $usuario->row();//xq solo hay uno
        }else{
          return false;
        }
     }
     //Proceso de actualizacion de usuarios
     public function actualizar($id,$datos){
       $this->db->where("id_usu",$id);
       return $this->db->update("usuario",$datos);
     }

   }//Cierre de la clase (No borrar)














//
