<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipamentosModel extends CI_Model {

	public function listaEquipamentos()
	{
		$resultado = $this->db->get('equipamentos')->result();
		if ($resultado) 
		{
			return $resultado;
		}
		else
		{
			return [];
		}
	}


	public function listaEquipamentoId()
	{

		foreach ($_SESSION['lista'] as $key => $value) {

			$this->db->where('idEquipamento', $value);
			$resultado[] = $this->db->get('equipamentos')->result();	
		}

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