<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuota_Model extends CI_Model {

    public function save($data){
        $this->db->query("ALTER TABLE cuota AUTO_INCREMENT 1");
        $this->db->insert("cuota", $data);
    }

    public function getcuota(){
        $this->db->select("*");
        $this->db->from("cuota");
        $this->db->where("estado", 1);
        $results=$this->db->get();
        return $results->result();
    }

    public function getCuot($idCuota){
        $this->db->select("c.idCuota, c.valor, c.nombre, c.fechaPago");
        $this->db->from("cuota c");
        $this->db->where("c.idCuota",$idCuota);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$idCuota){
        $this->db->where("idCuota",$idCuota);
        $this->db->update("cuota",$data);
    }

    public function delete($id, $data){
        $this->db->where('idCuota', $id);
        $this->db->update('cuota', $data);    }
    
}
