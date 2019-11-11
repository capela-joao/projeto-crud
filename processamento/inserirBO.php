<?php

	include 'inserirDAO.php';

	function inserirBO($nome, $sobrenome, $email){
		$nome = strtoupper($nome);
		$sobrenome = strtoupper($sobrenome);

		inserirDAO($nome, $sobrenome, $email);
	}

	function loginBO($nome, $email){
		return loginDAO($nome, $email);
	}
?>