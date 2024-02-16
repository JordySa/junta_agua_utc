<?php
    class Lectura extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("lectura",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_lec,$datos){
        $this->db->where("id_lec",$id_lec);
        return $this->db->update("lectura",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_lec){
        $this->db->where("id_lec",$id_lec);
        $this->db->join("historial_propietario","historial_propietario.id_his=lectura.fk_id_his");
        $this->db->join("consumo","consumo.id_consumo=lectura.fk_id_consumo");
        $lectura=$this->db->get("lectura");
        if($lectura->num_rows()>0){
          return $lectura->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar todos lo excedentes
      public function consultarTodos(){
        $this->db->join("historial_propietario","historial_propietario.id_his=lectura.fk_id_his");
        $this->db->join("consumo","consumo.id_consumo=lectura.fk_id_consumo");
          $listadoLecturas=$this->db->get("lectura");
          if($listadoLecturas->num_rows()>0){
            return $listadoLecturas;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_lec){
        $this->db->where("id_lec",$id_lec);
        return $this->db->delete("lectura");
      }


   }//cierre de la clase



   //
 ?>
