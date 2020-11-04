<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioInvitado extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ( !empty($this->session->userdata('sesion')) && $this->session->userdata('sesion')['tipo']=='invitado') {
			return false;
		}else{
			redirect('Inicio','refresh');
		}
	}

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/inicio_invitado');
		$this->load->view('layouts/footer');
		}

}
