<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Minmueble");
	}

	public function index()
	{	
		$data = array("data"=>$this->Minmueble->getInmueble());
		$vista = $this->load->view('admin/inmueble/main', $data, TRUE);
        $this->getTemplateAdmin($vista);
	}

	public function delete($id){
		$this->Minmueble->delete($id);
		$this->session->set_flashdata('success', 'El inmueble se eliminó correctamente');
		redirect(base_url()."admin/Inmueble/Main");
	}
	
	public function getTemplateAdmin($view) {
        $data = array(
            'header' => $this->load->view('layouts/header', '', TRUE), //retorna como cadena
            'aside' => $this->load->view('layouts/aside', '', TRUE),
            'contenido' => $view,
            'footer' => $this->load->view('layouts/footer', '', TRUE),
        );
        //devuelve como string
        $this->load->view('layouts/inicio_admin', $data);
    }
}
