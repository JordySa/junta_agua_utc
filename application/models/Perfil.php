<?php
    class Perfil extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("perfil",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_per,$datos){
        $this->db->where("id_per",$id_per);
        return $this->db->update("perfil",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_per){
        $this->db->where("id_per",$id_per);
        $perfil=$this->db->get("perfil");
        if($perfil->num_rows()>0){
          return $perfil->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar toperfilos lo excedentes
      public function consultarTodos(){
          $listadoPerfiles=$this->db->get("perfil");
          if($listadoPerfiles->num_rows()>0){
            return $listadoPerfiles;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_per){
        $this->db->where("id_per",$id_per);
        return $this->db->delete("perfil");
      }


   }//cierre de la clase



   //
 ?>
