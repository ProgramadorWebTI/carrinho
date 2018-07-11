<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarrinhoController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('EquipamentosModel');
		
	}


	public function removerIdSessao()
	{
		$id = $this->uri->segment(3);
		removeItemSession($id);
		redirect('carrinho/lista');	
	}
	

	public function index()
	{
		
	}

	public function add()
	{
		$iquipamentoId = $this->uri->segment(3);
		setCarrinho($iquipamentoId);
		redirect('/');
	}


	public function lista()
	{
		$data = array(
			'title' => 'Equipamentos listados no carrinho',
			'equipamentoLista' => $this->EquipamentosModel->listaEquipamentoId()
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('equipamento/lista-equipamento');
		$this->load->view('template/final');
	}
	

}

