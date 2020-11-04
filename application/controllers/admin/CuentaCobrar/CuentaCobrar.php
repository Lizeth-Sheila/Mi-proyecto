<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CuentaCobrar extends CI_Controller {

    public function __construct(){
    parent::__construct();
        if(!$this->session->userdata("login")){
            redirect(base_url());
        }
  
    $this->load->model("cuentaCobrar_model");
}

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('container');
        $this->load->view('layouts/footer');
    }
    public function listaCuentaCobrar()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $data['cuentaporcobrar']=$this->CuentaCobrar_model->retornarCuentaCobrar();        
        $this->load->view('admin/cuentacobrar/list',$data);
        $this->load->view('layouts/footer');
    }    
     
    public function agregar()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $data['paciente']=$this->Historial_model->retornarPaciente();
        $this->load->view('admin/cuentacobrar/add',$data);
        $this->load->view('layouts/footer');
    }

    public function agregardb()
    {
        $pagoTotal=$_POST['pagoTotal'];
        $data['pagoTotal']=$pagoTotal;

        $descuento=$_POST['descuento'];
        $data['descuento']=$descuento;
        
        $idTratamiento= 3;//$_POST['idTratamiento'];
        $data['idTratamiento']=$idTratamiento;

        $idPaciente=$_POST['idPaciente'];
        $data['idPaciente']=$idPaciente;
        
  
        $this->cuentacobrar_model->agregarCuentaCobrar($data);
        redirect('paciente/cuentacobrar/listaCuentaCobrar','refresh');
        


    }
    public function modificar()
    {
        $idCuentaPorCobrar=$_POST['idCuentaPorCobrar'];

        $data['pagoTotal']=$this->cuentacobrar_model->recuperarCuentaCobrar($idCuentaPorCobrar);
        $data['descuento']=$this->cuentacobrar_model->recuperarCuentaCobrar($idCuentaPorCobrar);
        // $data['idTratamiento']=$this->cuentacobrar_model->recuperarCuentaCobrar($idCuentaPorCobrar);
        // $data['idPaciente']=$this->cuentacobrar_model->recuperarCuentaCobrar($idCuentaPorCobrar);
            


        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/cuentacobrar/edit',$data);
        $this->load->view('layouts/footer');
    }




    public function modificardb()
    {
        $idCuentaPorCobrar=$_POST['idCuentaPorCobrar'];

        $pagoTotal=$_POST['pagoTotal'];
        $data['pagoTotal']=$pagoTotal;
        
        $descuento=$_POST['descuento'];
        $data['descuento']=$descuento;          
        
    

        $this->cuentacobrar_model->modificarCuentaCobrar($idCuentaPorCobrar,$data);
        redirect('paciente/cuentacobrar/listaCuentaCobrar','refresh');    
        
    }

    public function eliminardb()
    {
        $idCuentaPorCobrar=$_POST['idCuentaPorCobrar'];

        $pagoTotal=$_POST['pagoTotal'];
        $data['pagoTotal']=$pagoTotal;
        
        $descuento=$_POST['descuento'];
        $data['descuento']=$descuento;        
      
        $estado=0;
        $data['estado']=$estado;
        
        
         $this->cuentacobrar_model->eliminarCuentaCobrar($idCuentaPorCobrar,$data);
          redirect('paciente/cuentacobrar/listaCuentaCobrar','refresh');  
    }

    //     $this->cuentacobrar_model->eliminarCuentaCobrar($idCuentaPorCobrar,$data);
            

    // }


    //  public function view(){
    //     $idPago = $this->input->post("idPago");

    //     $this->load->view("admin/pagos/view");
    // }


    // public function eliminardb($idCuentaPorCobrar){
    //     $data = array(
    //         'estado' => "0",
    //     );
    //     $this->cuentacobrar_model->eliminarCuentaCobrar($idCuentaPorCobrar,$data);
    //     echo "paciente/CuentaCobrar";
    // }
}