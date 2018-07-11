<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UsuariosModel');
	}

	public function index()
	{		
		$this->load->view('login/index');
	}


	public function capituraDadosFormularioLogin()
	{
		$emailUsuario = $this->input->post('email');
		$senhaUsuario = md5($this->input->post('password'));

		$logando = $this->UsuariosModel->login($emailUsuario,$senhaUsuario);
		if( $logando )
		{
			$_SESSION['usuario'] = $logando;
			$_SESSION['autenticado'] = 1;
			redirect(base_url('/'));
		}
	}
	

}