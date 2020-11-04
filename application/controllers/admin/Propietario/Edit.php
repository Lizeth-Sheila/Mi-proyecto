<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Prop_model");
	}
	
	public function index($idPropietario)
	{   
		$data = $this->Prop_model->getProp($idPropietario);
		$vista = $this->load->view('admin/propietario/edit', $data, TRUE);
		$this->getTemplateAdmin($vista);
	}
	
	public function update($idPropietario)
	{
		$nombres         = $this->input->post("nombres");
		$primerApellido  = $this->input->post("primerApellido");
		$segundoApellido = $this->input->post("segundoApellido");
		$telefono        = $this->input->post("telefono");
		$direccion       = $this->input->post("direccion");
		$ci              = $this->input->post("ci");
		$cantidadInmueble  = $this->input->post("cantidadInmueble");

		$data = $this->Prop_model->getProp($idPropietario);

        $this->form_validation->set_rules('nombres', 'Nombres', 'required', array('required' => 'El campo %s es requerido'));
		$this->form_validation->set_rules('primerApellido', 'Primer Apellido','required');
		$this->form_validation->set_rules('segundoApellido', 'Segundo Apellido', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'required');
		$this->form_validation->set_rules('direccion', 'Direccion', 'required');
		$this->form_validation->set_rules('ci', 'CI', 'required');
		$this->form_validation->set_rules('cantidadInmueble', 'Cantidad Inmueble', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->index($idPropietario);
		}else {
			$data = array(
				"nombres"        =>$nombres,
				"primerApellido" =>$primerApellido,
				"segundoApellido"=>$segundoApellido,
				"telefono"       =>$telefono,
				"direccion"      =>$direccion,
				"ci"             =>$ci,
				"cantidadInmueble" =>$cantidadInmueble
			);
			
			$this->Prop_model->update($data,$idPropietario);
			$this->session->set_flashdata('success', 'Los datos actualizaron correctamente');
			redirect(base_url()."admin/Propietario/Lista");
		}
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
