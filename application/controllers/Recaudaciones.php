Recaudaciones<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaudaciones extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("recaudacion");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoRecaudaciones"]=
		$this->recaudacion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('recaudaciones/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('recaudaciones/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarRecaudacion(){
		$datosNuevoRecaudacion=array(
			"numero_factura_rec"=>$this->input->post('numero_factura_rec'),
			"numero_autorizacion_rec"=>$this->input->post('numero_autorizacion_rec'),
      "fecha_hora_autorizacion_rec"=>$this->input->post('fecha_hora_autorizacion_rec'),
      "ambiente_rec"=>$this->input->post('ambiente_rec'),
      "emision_rev"=>$this->input->post('emision_rev'),
      "clave_acceso_rec"=>$this->input->post('clave_acceso_rec'),
      "email_rec"=>$this->input->post('email_rec'),
      "observacion_rec"=>$this->input->post('observacion_rec'),
      "nombre_rec"=>$this->input->post('nombre_rec'),
      "identificacion_rec"=>$this->input->post('identificacion_rec'),
      "direccion_rec"=>$this->input->post('direccion_rec'),
      "estado_rec"=>$this->input->post('estado_rec'),
      "fecha_emision_rec"=>$this->input->post('fecha_emision_rec'),
      "fecha_creacion_rec"=>$this->input->post('fecha_creacion_rec'),
      "fecha_actualizacion_rec"=>$this->input->post('fecha_actualizacion_rec')


		);

		print_r($datosNuevoRecaudacion);
		if($this->recaudacion->insertar($datosNuevoRecaudacion)){
				$this->session
				->set_flashdata('confirmacion',
			 'Recaudacion insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('recaudaciones/index');
	}
	//funcion para eliminar
	public function borrar($id_rec ){
		if ($this->recaudacion->eliminarPorId($id_rec)){
			$this->session
			->set_flashdata('confirmacion',
		 'Recaudacion ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('recaudaciones/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["recaudacionEditar"]=
			$this->recaudacion->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("recaudaciones/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosRecaudacionEditado=array(
      "numero_factura_rec"=>$this->input->post('numero_factura_rec'),
      "numero_autorizacion_rec"=>$this->input->post('numero_autorizacion_rec'),
      "fecha_hora_autorizacion_rec"=>$this->input->post('fecha_hora_autorizacion_rec'),
      "ambiente_rec"=>$this->input->post('ambiente_rec'),
      "emision_rev"=>$this->input->post('emision_rev'),
      "clave_acceso_rec"=>$this->input->post('clave_acceso_rec'),
      "email_rec"=>$this->input->post('email_rec'),
      "observacion_rec"=>$this->input->post('observacion_rec'),
      "nombre_rec"=>$this->input->post('nombre_rec'),
      "identificacion_rec"=>$this->input->post('identificacion_rec'),
      "direccion_rec"=>$this->input->post('direccion_rec'),
      "estado_rec"=>$this->input->post('estado_rec'),
      "fecha_emision_rec"=>$this->input->post('fecha_emision_rec'),
      "fecha_creacion_rec"=>$this->input->post('fecha_creacion_rec'),
      "fecha_actualizacion_rec"=>$this->input->post('fecha_actualizacion_rec')
		);
	 $id=$this->input->post("id_rec");
		if($this->recaudacion->actualizar($id,$datosRecaudacionEditado)){
			redirect('recaudaciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
