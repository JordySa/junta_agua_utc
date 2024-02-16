<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carga el modelo de configuracion
        $this->load->model('ConfiguracionModel');
    }


    public function index() {
        // Carga las configuraciones desde el modelo
        $data['configuraciones'] = $this->ConfiguracionModel->get_configuraciones();
        // Carga la vista index
        $this->load->view('header');
        $this->load->view('configuracion/index', $data);
        $this->load->view('footer');
    }

    public function nuevo() {
        // Carga la vista nuevo
        $this->load->view('header');
        $this->load->view('configuracion/nuevo');
        $this->load->view('footer');
    }

    public function editar($id) {
        // Obtiene la configuracion a editar desde el modelo
        $data['configuracion'] = $this->ConfiguracionModel->get_configuracion($id);
        // Carga la vista editar
        $this->load->view('header');
        $this->load->view('configuracion/editar', $data);
        $this->load->view('footer');
    }

    public function guardar() {
        // Captura los datos del formulario
        $data = array(
            'nombre_con' => $this->input->post('nombre_con'),
            'ruc_con' => $this->input->post('ruc_con'),
            'logo_con' => $this->input->post('logo_con'),
            'telefono_con' => $this->input->post('telefono_con'),
            'direccion_con' => $this->input->post('direccion_con'),
            'email_con' => $this->input->post('email_con'),
            'servidor_con' => $this->input->post('servidor_con'),
            'puerto_con' => $this->input->post('puerto_con'),
            'password_con' => $this->input->post('password_con'),
            'anio_inicial_con' => $this->input->post('anio_inicial_con'),
            'mes_inicial_con' => $this->input->post('mes_inicial_con')
        );
        // Guarda la nueva configuracion en la base de datos
        if($this->ConfiguracionModel->guardar_configuracion($data)) {
            redirect('configuracion/index');
        } else {
            // Manejo de error
            redirect('configuracion/nuevo');
        }
    }

    public function actualizar($id) {
        // Captura los datos del formulario
        $data = array(
            'nombre_con' => $this->input->post('nombre_con'),
            'ruc_con' => $this->input->post('ruc_con'),
            'logo_con' => $this->input->post('logo_con'),
            'telefono_con' => $this->input->post('telefono_con'),
            'direccion_con' => $this->input->post('direccion_con'),
            'email_con' => $this->input->post('email_con'),
            'servidor_con' => $this->input->post('servidor_con'),
            'puerto_con' => $this->input->post('puerto_con'),
            'password_con' => $this->input->post('password_con'),
            'anio_inicial_con' => $this->input->post('anio_inicial_con'),
            'mes_inicial_con' => $this->input->post('mes_inicial_con')
        );
        // Actualiza la configuracion en la base de datos
        if($this->ConfiguracionModel->actualizar_configuracion($id, $data)) {
            redirect('configuracion/index');
        } else {
            // Manejo de error
            redirect('configuracion/editar/'.$id);
        }
    }

    public function eliminar($id) {
        // Elimina la configuracion de la base de datos
        if($this->ConfiguracionModel->eliminar_configuracion($id)) {
            redirect('configuracion/index');
        } else {
            // Manejo de error
            redirect('configuracion/index');
        }
    }
}
?>
