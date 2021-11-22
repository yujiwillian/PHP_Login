<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilo_registrese.css">
<meta charset="UTF-8">
<title>Projeto - Registre-se</title>
</head>

<body>
	<center>
	<h1>REGISTRE-SE</h1>
		<br><br>
		<form action="registrar.php" name="registrar" method="post">
			USUARIO
			<br>
			<input type="text" name="usuario">
			<br>
			NOME
			<br>
			<input type="text" name="nome">
			<br>
			E-MAIL
			<br>
			<input type="email" name="email">
			<br>
			SENHA
			<br>
			<input type="password" name="senha">
			<br>
			<button type="submit" name="registrar">REGISTRAR</button>
		</form>
		<br><br><br>
		<h2>Já possui acesso? Faça o login clicando <a href="index.php">AQUI</a>.</h2>
	</center>
</body>
</html>