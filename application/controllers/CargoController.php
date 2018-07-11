<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargoController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CargosModel');
	}

	public function index()
	{
		$data = array(
			'title' => 'Lista dos cargos',
			'cargos' => $this->CargosModel->listaCargos()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('cargo/index-cargo');
		$this->load->view('template/final');
	}

	public function add()
	{
		$data = array(
			'title' => 'Adicionar novo cargo'
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('cargo/add-cargo');
		$this->load->view('template/final');
	}


	public function dadoFormCargo()
	{
		$data = $this->input->post();
		$resultado = $this->CargosModel->addCargo($data);
		if ( $resultado == TRUE) {
			echo "Cargo inserido com sucesso";
		}
	}
	

}