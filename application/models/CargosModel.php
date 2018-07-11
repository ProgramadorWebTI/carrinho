<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargosModel extends CI_Model {

	
	public function listaCargos()
	{
		$resultado = $this->db->get('cargos')->result();
		if ($resultado) 
		{
			return $resultado;
		}
		else
		{
			return [];
		}
	}


	public function addCargo($data)
	{
		$resultado = $this->db->insert('cargos', $data);
		if ( $resultado ) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	

}
