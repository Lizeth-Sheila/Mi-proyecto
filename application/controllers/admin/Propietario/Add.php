<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Prop_model");
	}

	public function index()
	{
		$vista = $this->load->view('admin/propietario/add', '', true);
        $this->getTemplateAdmin($vista);
	}

	public function save() {
		$nombres         = $this->input->post("nombres");
		$primerApellido  = $this->input->post("primerApellido");
		$segundoApellido = $this->input->post("segundoApellido");
		$telefono        = $this->input->post("telefono");
		$direccion       = $this->input->post("direccion");
		$ci              = $this->input->post("ci");
		$cantidadInmueble    = $this->input->post("cantidadInmueble");

		$this->form_validation->set_rules('nombres', 'Nombre completo','required|min_length[3]');
		$this->form_validation->set_rules('primerApellido', 'Primer Apellido','required|min_length[3]');
		$this->form_validation->set_rules('segundoApellido', 'Segundo Apellido','required|min_length[5]');
		$this->form_validation->set_rules('telefono', 'Telefono', 'required|min_length[8]');
		$this->form_validation->set_rules('direccion', 'Direccion', 'required|min_length[5]');
		$this->form_validation->set_rules('ci', 'CI', 'required|min_length[7]');
		$this->form_validation->set_rules('cantidadInmueble', 'Cantidad Inmueble', 'required|max_length[3]');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/propietario/add');
		}else{
			$data = array(
				"nombres"=>$nombres,
				"primerApellido"=>$primerApellido,
				"segundoApellido"=>$segundoApellido,
				"telefono"=>$telefono,
				"direccion"=>$direccion,
				"ci"=>$ci,
				"cantidadInmueble"=>$cantidadInmueble,
			);
			
			$this->Prop_model->save($data);
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			redirect(base_url()."admin/Propietario/Lista");
		}
	}

	public function getTemplateAdmin($view) {
        $data = array(
            'header' => $this->load->view('layouts/header', '', TRUE), //retorna como cadena toda la vista
            'aside' => $this->load->view('layouts/aside', '', TRUE),
            'contenido' => $view,
            'footer' => $this->load->view('layouts/footer', '', TRUE),
        );
        $this->load->view('layouts/inicio_admin', $data);
    }
}
