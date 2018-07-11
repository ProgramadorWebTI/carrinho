<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('FuncionarioModel');
		
	}

	public function index()
	{
		$data = array(
			'title' => 'Listar dos Funcionários',
			'funcionarios' => $this->FuncionarioModel->listaFuncionarios()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('funcionario/index-funcionario');
		$this->load->view('template/final');
	}

}
