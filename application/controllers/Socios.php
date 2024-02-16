<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("socio");
	}
	//renderiza la vista index
	public function index()
	{
		$data["listadoSocios"]=
		$this->socio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('socios/index',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('socios/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarSocio(){
		$datosNuevoSocio=array(
			"tipo_soc"=>$this->input->post('ttipo_soc'),
			"identificacion_soc"=>$this->input->post('identificacion_soc'),
      "primer_apellido_soc"=>$this->input->post('primer_apellido_soc'),
      "segundo_apellido_soc"=>$this->input->post('segundo_apellido_soc'),
      "nombres_soc"=>$this->input->post('nombres_soc'),
      "email_soc"=>$this->input->post('email_soc'),
      "foto_soc"=>$this->input->post('foto_soc'),
      "telefono_soc"=>$this->input->post('telefono_soc'),
      "direccion_soc"=>$this->input->post('direccion_soc'),
      "fecha_nacimiento_soc"=>$this->input->post('fecha_nacimiento_soc'),
      "discapacidad_soc"=>$this->input->post('discapacidad_soc'),
      "estado_soc"=>$this->input->post('estado_soc')
		);
    //Inicio del proceso de subida  de fotografia
  $this->load->library("upload");//Activando la libreria de subida de archivos
  $new_name = "foto_". time() . "_" . rand(1, 50000);//generando un nombre aleatorio
  $config['file_name'] = $new_name;
  $config['upload_path'] = FCPATH .'uploads/socios/';//ruta de subida
  $config['allowed_types'] = 'jpg|png|jpeg';  //pdf|docx
  $config['max_size'] = 2*1024; //5MB
  $this->upload->initialize($config);//Inicializar la configuracion
  //Validando la subida de archivo
  if ($this->upload->do_upload("foto_soc")) {
    //Que si se subio con exito
    $dataSubida = $this->upload->data();
    $datosNuevoSocio["foto_soc"] = $dataSubida['file_name'];
  }else{
    print_r ($this->upload->display_errors());
  }

		print_r($datosNuevoSocio);
		if($this->socio->insertar($datosNuevoSocio)){
				$this->session
				->set_flashdata('confirmacion',
			 'Socio insertado exitosamente');
		}else{
			$this->session
			->set_flashdata('error',
		 'Error al insertar, verifique e intente de nuevo');
		}
		redirect('socios/index');
	}
	//funcion para eliminar
	public function borrar($id_soc ){
		if ($this->socio->eliminarPorId($id_soc)){
			$this->session
			->set_flashdata('confirmacion',
		 'Socio ELIMINADO exitosamente');
		} else {
			$this->session
			->set_flashdata('error',
		 'Error al ELIMINAR, verifique e intente de nuevo');
		}
		redirect('socios/index');
	}
	//Funcion para renderizar el formulario de
	//actualizacion
	public function actualizar($id){
		  $data["socioEditar"]=
			$this->socio->obtenerPorId($id);
			$this->load->view("header");
			$this->load->view("socios/actualizar",$data);
			$this->load->view("footer");
	}

	public function procesarActualizacion(){
		$datosSocioEditado=array(
      "tipo_soc"=>$this->input->post('ttipo_soc'),
			"identificacion_soc"=>$this->input->post('identificacion_soc'),
      "primer_apellido_soc"=>$this->input->post('primer_apellido_soc'),
      "segundo apellido_soc"=>$this->input->post('segundo apellido_soc'),
      "nombres_soc"=>$this->input->post('nombres_soc'),
      "email_soc"=>$this->input->post('email_soc'),
      "foto_soc"=>$this->input->post('foto_soc'),
      "teledono_soc"=>$this->input->post('teledono_soc'),
      "direccion_soc"=>$this->input->post('direccion_soc'),
      "fecha_nacimiento_soc"=>$this->input->post('fecha_nacimiento_soc'),
      "discapacidad_soc"=>$this->input->post('discapacidad_soc'),
      "estado_soc"=>$this->input->post('estado_soc')
		);
	 $id=$this->input->post("id_soc");
		if($this->socio->actualizar($id,$datosSocioEditado)){
			redirect('socios/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}// cierre de la clase (No borrar)




//
