<?php
    class Historial extends CI_Model{
      public function __construct(){
        parent::__construct();
      }
      //funcion para insertar
      public function insertar($datos){
          return $this->db->insert("historial_propietario",$datos);
      }
      //funcion para actualizar
      public function actualizar($id_his,$datos){
        $this->db->where("id_his",$id_his);
        return $this->db->update("historial_propietario",$datos);
      } 
      //funcion para sacar el detalle de un excedente
      public function consultarPorId($id_his){
        $this->db->where("id_his",$id_his);
        $this->db->join("medidor","medidor.id_med=historial_propietario.fk_id_med");
        $this->db->join("socio","socio.id_soc=historial_propietario.fk_id_soc");
        $historial_propietario=$this->db->get("historial_propietario");
        if($historial_propietario->num_rows()>0){
          return $historial_propietario->row();//cuando SI hay excedentes
        }else{
          return false;//cuando NO hay excedentes
        }
      }
      //funcion para consultar todos lo excedentes
      public function consultarTodos(){
        $this->db->join("medidor","medidor.id_med=historial_propietario.fk_id_med");
        $this->db->join("socio","socio.id_soc=historial_propietario.fk_id_soc");
          $listadoHistorialPropietarios=$this->db->get("historial_propietario");
          if($listadoHistorialPropietarios->num_rows()>0){
            return $listadoHistorialPropietarios;//cuando SI hay excedentes
          }else{
            return false;//cuando NO hay excedentes
          }
      }

      public function eliminar($id_his){
        $this->db->where("id_his",$id_his);
        return $this->db->delete("historial_propietario");
      }


   }//cierre de la clase



   //
 ?>
