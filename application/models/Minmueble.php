<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minmueble extends CI_Model {

    public function save($data){
        $this->db->query("ALTER TABLE inmueble AUTO_INCREMENT 1");
        $this->db->insert("inmueble",$data);
    }

    public function getInmueble(){
        $this->db->select("*");
        $this->db->from("inmueble");
        $results=$this->db->get();
        return $results->result();
    }

    public function getInmu($idInmueble){
        $this->db->select("i.idInmueble,i.tipoInmueble, i.nroDocumento, i.numManzano, i.precio, i.areaTerreno");
        $this->db->from("inmueble i");
        $this->db->where("i.idInmueble",$idInmueble);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$idInmueble){
        $this->db->where("idInmueble",$idInmueble);
        $this->db->update("inmueble",$data);
    }

    public function delete($id){
        $this->db->where("idInmueble",$id);
        $this->db->delete("inmueble");
    }

    public function getInmueblePorIDPropietario($idPropietario) {
        $this->db->select("*");
        $this->db->from("inmueble i");
        $this->db->where("i.idPropietario", $idPropietario);
        $this->db->join('propietario p', 'p.idPropietario = i.idPropietario');
        $results=$this->db->get();
        return $results->result();
    }
    
}
