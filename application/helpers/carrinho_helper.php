<?php

function setCarrinho($valor=null)
{	
	$lista = array();
	$lista = $valor;
	$_SESSION['lista'][] += $lista;
	return $_SESSION['lista'];
}

function removeItemSession($idItem=null)
{
	try
	{
		unset($_SESSION['lista'][$idItem]);
		return true;
		exit();
	}
	catch(Exeption $e)
	{
		return false;
		exit();
	}
}
