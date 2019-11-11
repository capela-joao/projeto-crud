<?php

	include 'inserirBO.php';

		if ($_POST["botao"] == "cadastrar") {


			if (!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["email"])) {
					
				$nome = $_POST["nome"];
				$sobrenome = $_POST["sobrenome"];
				$email = $_POST["email"];

				inserirBO($nome, $sobrenome, $email);

				header('location:login.php');
					
			}	

			else{
				echo "<script>alert('Volte e preencha todos os campos');</script>";	
			}
			
		}

		if($_POST["entrar"] == "acessar"){

			$nome = $_POST["nome"];
			$email = $_POST["email"];

			if (!empty($_POST["nome"]) && !empty($_POST["email"])) {
				
				$consulta = loginBO($nome, $email);

				if ($consulta->RowCount() == 1) {
					
					header('location:index.php');
				}

				else{
					echo "<script>alert('verifique se nome e email estão corretos')</script>";
				}

			}
		}

?>