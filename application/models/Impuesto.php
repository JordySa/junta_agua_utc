<?php
    class Impuesto extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("impuesto",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_imp,$datos){
        $this->db->where("id_imp",$id_imp);
        return $this->db->update("impuesto",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_imp){
        $this->db->where("id_imp",$id_imp);
        $impuesto=$this->db->get("impuesto");
        if($impuesto->num_rows()>0){
          return $impuesto->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar todos lo excedentes
      public function consultarTodos(){
          $listadoImpuestos=$this->db->get("impuesto");
          if($listadoImpuestos->num_rows()>0){
            return $listadoImpuestos;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_imp){
        $this->db->where("id_imp",$id_imp);
        return $this->db->delete("impuesto");
      }


   }//cierre de la clase



   //
 ?>
