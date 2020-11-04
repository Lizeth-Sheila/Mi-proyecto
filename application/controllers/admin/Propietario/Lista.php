<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Prop_model");
	}

	public function index()
	{	
		$data = array("data"=>$this->Prop_model->getPropietario());
		$vista = $this->load->view('admin/propietario/lista', $data, true);
        $this->getTemplateAdmin($vista);
	}

	public function delete($idPropietario){
		$data['estado'] = 0;
		$this->Prop_model->delete($idPropietario, $data);
		$this->session->set_flashdata('success', 'El usuario se eliminó correctamente');
		redirect(base_url().'admin/Propietario/Lista');
	}

	public function getTemplateAdmin($view) {
        $data = array(
            'header' => $this->load->view('layouts/header', '', TRUE), //retorna como cadena
            'aside' => $this->load->view('layouts/aside', '', TRUE),
            'contenido' => $view,
            'footer' => $this->load->view('layouts/footer', '', TRUE),
        );
        $this->load->view('layouts/inicio_admin', $data);
    }
}

