Tarifas<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifas extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("tarifa");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoTarifas"]=
		$this->tarifa->obtenerTodos();
		$this->load->view('header');
		$this->load->view('tarifas/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('tarifas/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarTarifa(){
		$datosNuevoTarifa=array(
			"nombre_tar"=>$this->input->post('nombre_tar'),
			"descripcion_tar"=>$this->input->post('descripcion_tar'),
      "estado_tar"=>$this->input->post('estado_tar'),
      "m3_maximo_tar"=>$this->input->post('m3_maximo_tar'),
      "tarifa_basica_tar"=>$this->input->post('tarifa_basica_tar'),
      "tarifa_excedente_tar"=>$this->input->post('tarifa_excedente_tar'),
      "valor_mora_tar"=>$this->input->post('valor_mora_tar')


		);

		print_r($datosNuevoTarifa);
		if($this->tarifa->insertar($datosNuevoTarifa)){
				$this->session
				->set_flashdata('confirmacion',
			 'Tarifa insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('tarifas/index');
	}
	//funcion para eliminar
	public function borrar($id_tar ){
		if ($this->tarifa->eliminarPorId($id_tar)){
			$this->session
			->set_flashdata('confirmacion',
		 'Tarifa ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('tarifas/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["tarifaEditar"]=
			$this->tarifa->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("tarifas/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosTarifaEditado=array(
      "nombre_tar"=>$this->input->post('nombre_tar'),
			"descripcion_tar"=>$this->input->post('descripcion_tar'),
      "estado_tar"=>$this->input->post('estado_tar'),
      "m3_maximo_tar"=>$this->input->post('m3_maximo_tar'),
      "tarifa_basica_tar"=>$this->input->post('tarifa_basica_tar'),
      "tarifa_excedente_tar"=>$this->input->post('tarifa_excedente_tar'),
      "valor_mora_tar"=>$this->input->post('valor_mora_tar')
		);
	 $id=$this->input->post("id_tar");
		if($this->tarifa->actualizar($id,$datosTarifaEditado)){
			redirect('tarifas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
