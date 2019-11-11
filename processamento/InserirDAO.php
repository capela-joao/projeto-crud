<?php
	
	include 'conexao.php';

	function inserirDAO($nome, $sobrenome, $email){

		$bd = conexao();

		try{

			$cadastro = "insert into usuario(nome, sobrenome, email) values('$nome', '$sobrenome', '$email')";

			$bd->exec($cadastro);
		}
		catch(Exception $e){
			echo "Erro encontrado: " .$e->getMessage();
		}
	}

	function loginDAO($nome, $email){
		$bd = conexao();

		try{
			$consulta = "select * from usuario where nome, email = ". $nome, $email;

			return $bd->query($consulta);
		}
		catch(Exception $e){
			echo "Erro encontrado: " . $e->getMessage();
		}
	}

?>