<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_models extends CI_Model {

	function validarDatos($nombre, $password){
		$consulta = "SELECT * FROM usuario WHERE nombreUsuario ='$nombre' AND password ='$password'";
		$resultado = $this->db->query($consulta);

		if ($resultado->num_rows() != 0) {
			return true;
		}else{
			return false;
		}
	}

	function getDatosUsuario($nombre, $password){
		$consulta = "SELECT nombreUsuario, tipo FROM usuario WHERE nombreUsuario ='$nombre' AND password ='$password' ";
		$resultado = $this->db->query($consulta);

		return $resultado->row_array();
	}

}
