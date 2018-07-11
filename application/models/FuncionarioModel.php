<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model {

	public function listaFuncionarios()
	{
		$resultado = $this->db->get('funcionarios')->result();
		if ($resultado) 
		{
			return $resultado;
		}
		else
		{
			return [];
		}
	}
	

}