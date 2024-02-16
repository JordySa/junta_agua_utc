<?php
    class Medidor extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("medidor",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_med,$datos){
        $this->db->where("id_med",$id_med);
        return $this->db->update("medidor",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_med){
        $this->db->where("id_med",$id_med);
        $this->db->join("ruta","ruta.id_rut=medidor.fk_id_rut");
        $this->db->join("tarifa","tarifa.id_tar=medidor.fk_id_tar");
        $medidor=$this->db->get("medidor");
        if($medidor->num_rows()>0){
          return $medidor->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar todos lo excedentes
      public function consultarTodos(){
        $this->db->join("ruta","ruta.id_rut=medidor.fk_id_rut");
        $this->db->join("tarifa","tarifa.id_tar=medidor.fk_id_tar");
          $listadoMedidores=$this->db->get("medidor");
          if($listadoMedidores->num_rows()>0){
            return $listadoMedidores;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_med){
        $this->db->where("id_med",$id_med);
        return $this->db->delete("medidor");
      }


   }//cierre de la clase



   //
 ?>
