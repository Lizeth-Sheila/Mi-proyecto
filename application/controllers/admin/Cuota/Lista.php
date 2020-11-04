<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cuota_Model");
	}

	public function index()
	{	
		$data = array("data"=>$this->Cuota_Model->getcuota());
		$vista = $this->load->view('admin/Cuota/view', $data, true);
        $this->getTemplateAdmin($vista);
	}

	public function delete($idCuota){
		$data['estado'] = 0;
		$this->Cuota_Model->delete($idCuota, $data);
		$this->session->set_flashdata('success', 'La Cuota  se eliminó correctamente');
		redirect(base_url().'admin/Cuota/Lista');
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

