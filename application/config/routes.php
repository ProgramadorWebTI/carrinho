<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'EquipamentoController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// rota usuario 
$route['login'] = 'LoginController/index';

// login
$route['Logount'] = 'LogountController/index';

// rota cargos
$route['cargo'] = 'CargoController/index';
$route['cargo/add'] = 'CargoController/add';
$route['cargo/dadoFormCargo'] = 'CargoController/dadoFormCargo';

// rota funcionario
$route['funcionario'] = 'FuncionarioController/index';

// rota equipamento
$route['equipamento'] = 'EquipamentoController/index';

// rota emprestimo
$route['emprestimo'] = 'EmprestimoController/index';

// rota carinho
$route['carrinho/lista'] = 'CarrinhoController/lista';
$route['carrinho/sessao/(:any)'] = 'CarrinhoController/add/$1';