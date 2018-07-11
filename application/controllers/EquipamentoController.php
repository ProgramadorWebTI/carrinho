<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipamentoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('EquipamentosModel');
		
	}

	public function index()
	{
		$data = array(
			'title' => 'Listar dos Equipamentos',
			'equipamentos' => $this->EquipamentosModel->listaEquipamentos()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('equipamento/index-equipamento');
		$this->load->view('template/final');
	}

}
