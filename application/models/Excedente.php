<?php
    class Excedente extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("excedente",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_ex,$datos){
        $this->db->where("id_ex",$id_ex);
        return $this->db->update("excedente",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_ex){
        $this->db->where("id_ex",$id_ex);
        $this->db->join("tarifa","tarifa.id_tar=excedente.id_tar");
        $excedente=$this->db->get("excedente");
        if($excedente->num_rows()>0){
          return $excedente->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar todos lo excedentes
      public function consultarTodos(){
        $this->db->join("tarifa","tarifa.id_tar=excedente.id_tar");
          $listadoExcedentes=$this->db->get("excedente");
          if($listadoExcedentes->num_rows()>0){
            return $listadoExcedentes;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_ex){
        $this->db->where("id_ex",$id_ex);
        return $this->db->delete("excedente");
      }


   }//cierre de la clase



   //
 ?>
