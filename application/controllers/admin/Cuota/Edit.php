<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cuota_Model");
	}
	
	public function index($idCuota)
	{   
		$data = $this->Cuota_Model->getCuot($idCuota);
		$vista = $this->load->view('admin/Cuota/edit', $data, TRUE);
		$this->getTemplateAdmin($vista);
	}
	
	public function update($idCuota)
	{

		 
		 $valor       = $this->input->post("valor");
	    $nombre       = $this->input->post("nombre");
	    $fechaPago         = $this->input->post("fechaPago");	
	   

		$data = $this->Cuota_Model->getCuota($idCuota);

       $this->form_validation->set_rules('valor', 'Precio a Pagar', 'required');
       $this->form_validation->set_rules('nombre', 'nombre del Cliente ','required');
       $this->form_validation->set_rules('fechaPago', 'fecha De Pago ', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->index($idCuota);
		}else {
			$data = array(
				"valor"=>$valor,
				"nombre"=>$nombre,
				"fechaPago"=>$fechaPago,
				
				);
			
			$this->Cuota_Model->update($data,$idCuota);
			$this->session->set_flashdata('success', 'Los datos actualizaron correctamente');
			redirect(base_url()."admin/Cuota/Lista");
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
