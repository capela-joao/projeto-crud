<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<main>
		<div>
			<h2>Efetue o Login</h2>
			<form action="index.php" method="POST">

				<label>Nome:</label><br>
				<input type="text" name="nome" required><br>

				<label>E-mail:</label><br>
				<input type="text" name="email" required><br>
				
				<button type="submit" name="entrar" value="acessar">Entrar</button>


			</form>
		</div>

		<footer>
			<a href="form-cadastro.php"><h4>Não possui um cadastro? faça um agora!</h4></a>
			<h4>Esqueceu sua senha?</h4>
		</footer>
	</main>
</body>
</html>