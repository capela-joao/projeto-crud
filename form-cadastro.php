<!DOCTYPE html>
<html>j
<head>
	<meta charset="utf-8">
	<title>cadastro</title>
</head>
<body>

	<main>
		<div>
			<form action="processamento/processacadastro.php" method="POST">
				<label>Nome</label><br>
				<input type="text" name="nome" required><br>
				<label>Sobrenome</label><br>
				<input type="text" name="sobrenome" required><br>
				<label>E-mail</label><br>
				<input type="text" name="email" required><br>
				<button name="botao" value="cadastrar">cadastro</button>
			</form>
		</div>
	</main>

</body>
</html>