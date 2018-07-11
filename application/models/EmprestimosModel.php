<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmprestimosModel extends CI_Model {


	public function listarEmprestimosAll()
	{
		$sql = "
		select 
		emprestimos.idEmprestimo, 
		equipamentos.idEquipamento,
		emprestimos.statusEmprestimo,
		funcionarios.nomeFuncionario, 
		funcionarios.cpfFuncionario, 
		equipamentos.nomeEquipamento 
		from emprestimos
		join funcionarios
		on funcionarios.idFucionario = emprestimos.funcionarioId
		join equipamentos
		on equipamentos.idEquipamento = emprestimos.equipamentoId";
		$resultado = $this->db->query($sql)->result();
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