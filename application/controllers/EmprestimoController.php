<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmprestimoController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EmprestimosModel');
	}

	public function index()
	{
		
		$data = array(
			'title' => 'Lista dos Emprestimos',
			'emprestimos' => $this->EmprestimosModel->listarEmprestimosAll()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('emprestimo/index-emprestimo');
		$this->load->view('template/final');
	}

}
