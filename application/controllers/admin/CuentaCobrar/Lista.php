<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model("CuentaCobrar_Model");
	}

	public function index()
	{	
		$data = array("data"=>$this->CuentaCobrar_Model->getCuentaCobrar());
		$vista = $this->load->view('admin/CuentaXCobrar/view', $data, true);
        $this->getTemplateAdmin($vista);
	}

	public function delete($idCuota){
		$data['estado'] = 0;
		$this->Cuota_Model->delete($idCuota, $data);
		$this->session->set_flashdata('success', 'La Cuota  se eliminó correctamente');
		redirect(base_url().'admin/CuentaCobrar/Lista');
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

