<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CuentaCobrar_model extends CI_Model
{

    public function retornarCuentaCobrar()
    {
        $this->db->select('p.*,cc.*,pa.*');
        $this->db->from('cuentaporcobrar cc');
        $this->db->join('paciente pa', 'cc.idPaciente=pa.idPaciente');
        $this->db->join('persona p', 'p.idPersona = pa.idPaciente');
        $this->db->join('tratamiento t', 't.idTratamiento = cc.idTratamiento');
        $this->db->where('cc.estado', 1);
        // $this->db->where('t.idTratamiento',$id);       
        // $this->db->join('pago pg', 'pg.idCuentaPorCobrar = cc.idCuentaPorCobrar');          

        return $this->db->get();
    }


    public function retornarTratamiento($id)
    {
        $this->db->select('t.*,cc.*');
        $this->db->from('tratamiento t ');
        $this->db->join('cuentaporcobrar cc', 'cc.idTratamiento = t.idTratamiento');
        $this->db->where('t.idTratamiento', $id);
        $this->db->where('estado' <> '0');
        return $this->db->get();
    }


    public function agregarCuentaCobrar($data)
    {
        $this->db->insert('cuentaporcobrar', $data);
    }

    public function recuperarCuentaCobrar($idCuentaPorCobrar)
    {
        $this->db->select('*');
        $this->db->from('cuentaporcobrar');
        $this->db->where('idCuentaPorCobrar', $idCuentaPorCobrar);
        return $this->db->get();
    }

    public function modificarCuentaCobrar($idCuentaPorCobrar, $data)
    {
        $this->db->where('idCuentaPorCobrar', $idCuentaPorCobrar);
        $this->db->update('cuentaporcobrar', $data);
    }

    public function eliminarCuentaCobrar($idCuentaPorCobrar, $data)
    {
        $this->db->where('idCuentaPorCobrar', $idCuentaPorCobrar);
        $this->db->update('cuentaporcobrar', $data);
    }
    
    /**
     * Lista de cuentas por cobrar
     */
    public function getCuentaCobrar()
    {
        $this->db->select("cc.montoTotal, cc.mes, cc.estado, p.nombres, p.primerApellido, p.segundoApellido, i.tipoInmueble, i.nroDocumento, i.numManzano");
        $this->db->from("cuentaxCobrar cc");
        $this->db->join('propietario p', 'p.idPropietario=cc.idPropietario');
        $this->db->join('inmueble i', 'i.idInmueble=cc.idInmueble');
        //$this->db->where('cc.estado', 0);
        $results=$this->db->get();
        return $results->result();
    }

    /**
     * Guardar cuentas por cobrar
     */
    public function save($data){
        $this->db->query("ALTER TABLE cuentaxCobrar AUTO_INCREMENT 1");
        $this->db->insert("cuentaxCobrar", $data);
    }
}
