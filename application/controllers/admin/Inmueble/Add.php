<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Minmueble");
	}

	public function index()
	{
		$vista = $this->load->view('admin/inmueble/add', '', TRUE);
		$this->getTemplateAdmin($vista);
	}

	public function save()
	{
		$tipoInmueble      = $this->input->post("tipoInmueble");
		$nroDocumento      = $this->input->post("nroDocumento");
		$numManzano        = $this->input->post("numManzano");
		$precio            = $this->input->post("precio");
		$areaTerreno       = $this->input->post("areaTerreno");
		$idPropietario =  $this->input->post("idPropietario");


		$this->form_validation->set_rules('tipoInmueble', 'Tipo Inmueble', 'required');
		$this->form_validation->set_rules('nroDocumento', 'Numero Documento', 'required');
		$this->form_validation->set_rules('numManzano', 'Numero Manzano', 'required');

		$this->form_validation->set_rules('precio', 'Precio', 'required');
		$this->form_validation->set_rules('areaTerreno', 'Area Terreno', 'required');
		$this->form_validation->set_rules('idPropietario', 'id Propietario', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/inmueble/add');
		} else {
			$data = array(
				"nroDocumento" => $nroDocumento,
				"numManzano" => $numManzano,
				"tipoInmueble" => $tipoInmueble,
				"precio" => $precio,
				"areaTerreno" => $areaTerreno,
				"idPropietario"=> $idPropietario
			);

			$this->Minmueble->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url() . "admin/Inmueble/Main");
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

	public function getAutocomplete()
	{
		$ci = $this->input->post('search');
		if (isset($ci)) {
			$this->load->model("Prop_model");
			$data = $this->Prop_model->searchPropietario($ci);
			echo json_encode($data);
		}
	}
}
