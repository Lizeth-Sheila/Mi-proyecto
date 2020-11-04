<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ( !empty($this->session->userdata('sesion')) && $this->session->userdata('sesion')['tipo']=='admin') {
			return false;
		}else{
			redirect('Inicio','refresh');
		}
	}

	public function index(){
		$vista = $this->load->view('admin/perfil_admin', '', TRUE);
        $this->getTemplateAdmin($vista);
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
