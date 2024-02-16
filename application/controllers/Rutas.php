<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rutas extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("ruta");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoRutas"]=
		$this->ruta->obtenerTodos();
		$this->load->view('header');
		$this->load->view('rutas/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('rutas/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarRuta(){
		$datosNuevoRuta=array(
			"nombre_rut"=>$this->input->post('nombre_rut'),
			"descripcion_rut"=>$this->input->post('descripcion_rut'),
      "estado_rut"=>$this->input->post('estado_rut')


		);

		print_r($datosNuevoRuta);
		if($this->ruta->insertar($datosNuevoRuta)){
				$this->session
				->set_flashdata('confirmacion',
			 'Ruta insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('rutas/index');
	}
	//funcion para eliminar
	public function borrar($id_rut ){
		if ($this->ruta->eliminarPorId($id_rut)){
			$this->session
			->set_flashdata('confirmacion',
		 'Ruta ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('rutas/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["rutaEditar"]=
			$this->ruta->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("rutas/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosRutaEditado=array(
      "nombre_rut"=>$this->input->post('nombre_rut'),
			"descripcion_rut"=>$this->input->post('descripcion_rut'),
      "estado_rut"=>$this->input->post('estado_rut')
		);
	 $id=$this->input->post("id_rut");
		if($this->ruta->actualizar($id,$datosRutaEditado)){
			redirect('rutas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
