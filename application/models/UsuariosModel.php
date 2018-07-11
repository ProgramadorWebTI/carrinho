<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosModel extends CI_Model {


	public function login($emailUsuario,$senhaUsuario)
	{
		$this->db->where('loginUsuario', $emailUsuario);
		$this->db->where('senhaUsuario', $senhaUsuario);
		$resultado = $this->db->get('usuarios')->result();
		if($resultado > 0)
		{
			return $resultado;
		}
		else
		{
			return [];
		}
	}


}

