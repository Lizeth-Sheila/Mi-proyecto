<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index(){
		$this->load->view('inicio_sesion');
	}

	public function validarDatosLogin(){
		if ( empty($_POST) ) {
			$this->load->view('inicio_sesion');
		}else{
			// Cargar variables con datos del POST
			$nombre = $this->input->post('nombreUsuario');
			$password = $this->input->post('password');

			// Preguntar en la base de datos, si los datos son correctos
			$this->load->model('Usuarios_models');

			if ($this->Usuarios_models->validarDatos($nombre,$password)) {
				// Eliminar sesiones existentes
				$this->session->unset_userdata('sesion');

				// Crear la sesion - Cargar los datos en sesion
				$datos_sesion = $this->Usuarios_models->getDatosUsuario($nombre,$password);
				$this->session->set_userdata('sesion', $datos_sesion);
				
				// Redireccionar a la vista correspondiente (Ingresar)
				if ( $datos_sesion['tipo'] == 'admin' ) {
					redirect('admin/InicioAdmin','refresh');
				}
				if ( $datos_sesion['tipo'] == 'invitado' ) {
					redirect('Invitado/InicioInvitado','refresh');
				}
			}else{
				// Redireccionar a la vista correspondiente (Error)
				$datos["ErrorEnvioPost"] = "OK";
				$datos["datoError"] = "USUARIO Y/O CONTRASEÑA NO COINCIDE";
				$this->load->view('inicio_sesion', $datos);
			}
		}
	}

	public function cerrarSesion(){
		$this->session->unset_userdata('educate_adsi_session');
		$this->load->view('inicio_sesion');
	}

	

}
