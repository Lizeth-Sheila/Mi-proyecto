<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("CuentaCobrar_Model");
	}

	public function index()
	{
		$vista = $this->load->view('admin/CuentaXCobrar/Add', '', TRUE);
		$this->getTemplateAdmin($vista);
	}

	public function save()
	{
		$montoTotal = $this->input->post("montoTotal");
		$fechaCobro = $this->input->post("fechaCobro");
		$idInmuebleSeleccionado = $this->input->post("inmueblePropietario");
		$idPropietario = $this->input->post("idPropietario");

		$this->form_validation->set_rules('montoTotal', 'Precio a Cobrar', 'required');
		$this->form_validation->set_rules('propietario', 'CI del Cliente', 'required');
		$this->form_validation->set_rules('fechaCobro', 'Fecha De Cobro', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/CuentaCobrar/Add');
		} else {
			$data = array(
				"montoTotal" => $montoTotal,
                "mes" => $fechaCobro,
                "estado" => 0, //por defecto con valor cero
                "idInmueble" => $idInmuebleSeleccionado,
                "idPropietario" => $idPropietario
			);

			$this->CuentaCobrar_Model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url() . "admin/CuentaCobrar/Lista");
		}
	}

	/**
	 * Buscar el propietario y datos de inmuebles
	 */
	public function buscarPropietario()
	{
		$ci = "";
		$this->load->model('Prop_model');
		$this->load->model('Minmueble');
		if ($this->input->post("ciPropietario")) {
			$ci = $this->input->post("ciPropietario");
		}
		$data = $this->Prop_model->getPropietarioPorCi($ci);
		if (count($data) > 0) {
			$inmuebles = $this->Minmueble->getInmueblePorIDPropietario($data->idPropietario);
			echo json_encode($inmuebles);
		}
		else {
			echo json_encode(array());
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
