<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("usuario");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoUsuarios"]=
		$this->usuario->obtenerTodos();
		$this->load->view('header');
		$this->load->view('usuarios/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('usuarios/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarUsuario(){
		$datosNuevoUsuario=array(
      "apellido_usu"=>$this->input->post('apellido_usu'),
      "nombre_usu"=>$this->input->post('nombre_usu'),
			"email_usu"=>$this->input->post('email_usu'),
			"password_usu"=>$this->input->post('password_usu'),
      "estado_usu"=>$this->input->post('estado_usu')


		);

		print_r($datosNuevoUsuario);
		if($this->usuario->insertar($datosNuevoUsuario)){
				$this->session
				->set_flashdata('confirmacion',
			 'Usuario insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('usuarios/index');
	}
	//funcion para eliminar
	public function borrar($id_usu ){
		if ($this->usuario->eliminarPorId($id_usu)){
			$this->session
			->set_flashdata('confirmacion',
		 'Usuario ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('usuarios/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["usuarioEditar"]=
			$this->usuario->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("usuarios/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosUsuarioEditado=array(
      "apellido_usu"=>$this->input->post('apellido_usu'),
      "nombre_usu"=>$this->input->post('nombre_usu'),
      "email_usu"=>$this->input->post('email_usu'),
      "password_usu"=>$this->input->post('password_usu'),
      "estado_usu"=>$this->input->post('estado_usu')
		);
	 $id=$this->input->post("id_usu");
		if($this->usuario->actualizar($id,$datosUsuarioEditado)){
			redirect('usuarios/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
