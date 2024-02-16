<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("evento");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoEventos"]=
		$this->evento->obtenerTodos();
		$this->load->view('header');
		$this->load->view('eventos/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('eventos/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarEvento(){
		$datosNuevoEvento=array(
			"nombre_te"=>$this->input->post('nombre_te'),
			"estado_te"=>$this->input->post('estado_te'),
      "creacion_te"=>$this->input->post('creacion_te'),
      "actualizacion_te"=>$this->input->post('actualizacion_te')


		);

		print_r($datosNuevoEvento);
		if($this->evento->insertar($datosNuevoEvento)){
				$this->session
				->set_flashdata('confirmacion',
			 'Evento insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('eventos/index');
	}
	//funcion para eliminar
	public function borrar($id_te ){
		if ($this->evento->eliminarPorId($id_te)){
			$this->session
			->set_flashdata('confirmacion',
		 'evento ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('eventos/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["eventoEditar"]=
			$this->evento->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("eventos/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosEventoEditado=array(
      "nombre_te"=>$this->input->post('nombre_te'),
			"estado_te"=>$this->input->post('estado_te'),
      "creacion_te"=>$this->input->post('creacion_te'),
      "actualizacion_te"=>$this->input->post('actualizacion_te')

		);
	 $id=$this->input->post("id_te");
		if($this->evento->actualizar($id,$datosEventoEditado)){
			redirect('eventos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
