<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Minmueble");
	}
	
	public function index($idInmueble)
	{   
		$data = $this->Minmueble->getInmu($idInmueble);
		$vista = $this->load->view('admin/inmueble/edit', $data, TRUE);
		$this->getTemplateAdmin($vista);
	}
	
	public function update($idInmueble)
	{
		 
		 $tipoInmueble       = $this->input->post("tipoInmueble");
	    $nroDocumento       = $this->input->post("nroDocumento");
	    $numManzano         = $this->input->post("numManzano");	
	    $precio             = $this->input->post("precio");
	    $areaTerreno        = $this->input->post("areaTerreno");

		$data = $this->Minmueble->getInmu($idInmueble);

       $this->form_validation->set_rules('tipoInmueble', 'Tipo Inmueble', 'required');
       $this->form_validation->set_rules('nroDocumento', 'Numero Documento','required');
       $this->form_validation->set_rules('numManzano', 'Numero Manzano', 'required');
	   $this->form_validation->set_rules('precio', 'Precio', 'required');
	   $this->form_validation->set_rules('areaTerreno', 'AreaTerreno', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->index($idInmueble);
		}else {
			$data = array(
				"tipoInmueble"=>$tipoInmueble,
				"nroDocumento"=>$nroDocumento,
				"numManzano"=>$numManzano,
				"precio"=>$precio,
				"areaTerreno"=>$areaTerreno,
				);
			
			$this->Minmueble->update($data,$idInmueble);
			$this->session->set_flashdata('success', 'Los datos actualizaron correctamente');
			redirect(base_url()."admin/Inmueble/Main");
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
