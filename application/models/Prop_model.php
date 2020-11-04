<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prop_model extends CI_Model {

    public function save($data){
        $this->db->query("ALTER TABLE propietario AUTO_INCREMENT 1");
        $this->db->insert("propietario",$data);
    }

    public function getPropietario(){
        $this->db->select("*");
        $this->db->from("propietario");
        $this->db->where("estado", 1);
        $results=$this->db->get();
        return $results->result();
    }

    public function getProp($idPropietario){
        $this->db->select("p.idPropietario, p.nombres, p.primerApellido, p.segundoApellido, p.telefono, p.direccion, p.ci, p.fechaRegistro, p.cantidadInmueble");
        $this->db->from("propietario p");
        $this->db->where("p.idPropietario",$idPropietario);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$idPropietario){
        $this->db->where("idPropietario",$idPropietario);
        $this->db->update("propietario",$data);
    }

    public function delete($id, $data){
        $this->db->where('idPropietario', $id);
        $this->db->update('propietario', $data);
    }

    public function getPropietarioPorCi($ci) {
        $this->db->select("p.idPropietario, p.nombres, p.primerApellido, p.segundoApellido");
        $this->db->from("propietario p");
        $this->db->where("p.ci", $ci);
        $result=$this->db->get();
        return $result->row();
    }

    function searchPropietario($ci) {
        $response = array();
        $this->db->select('*');
        $this->db->where("ci like '%".$ci."%' ");

        $records = $this->db->get('propietario')->result();

        foreach($records as $row ) {
            $nombreCompletoPropietario = "(".$row->nombres . " ".$row->primerApellido." ".$row->segundoApellido.")";
            $response[] = array("value"=>$row->idPropietario, "label" => $row->ci.$nombreCompletoPropietario);
        }
        return $response;
    }
}
