<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cuota_Model");
	}

	public function index()
	{
		$vista = $this->load->view('admin/Cuota/Add', '', TRUE);
		$this->getTemplateAdmin($vista);
	}

	public function save()
	{
		$valor      = $this->input->post("valor");
		$nombre      = $this->input->post("nombre");
		$fechaPago        = $this->input->post("fechaPago");



		$this->form_validation->set_rules('valor', 'Precio a Pagar', 'required');
		$this->form_validation->set_rules('nombre', 'nombre del Cliente', 'required');
		$this->form_validation->set_rules('fechaPago', 'fecha De Pago', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/Cuota/Add');
		} else {
			$data = array(
				"valor" => $valor,
				"nombre" => $nombre,
				"fechaPago" => $fechaPago,

			);

			$this->Cuota_Model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url() . "admin/Cuota/Lista");
		}
	}

	public function getTemplateAdmin($view)
	{
		$data = array(
			'header' => $this->load->view('layouts/header', '', TRUE), //retorna como cadena toda la vista
			'aside' => $this->load->view('layouts/aside', '', TRUE),
			'contenido' => $view,
			'footer' => $this->load->view('layouts/footer', '', TRUE),
		);

		$this->load->view('layouts/inicio_admin', $data);
	}
}
