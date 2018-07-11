<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogountController extends MY_Controller {

	public function index()
	{
		if(isset($_SESSION['autenticado']) == 1)
		{
			unset($_SESSION['autenticado']);
			unset($_SESSION['usuario']);
			unset($_SESSION['lista']);
			redirect(base_url('login'));
		}
	}

}