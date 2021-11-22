<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estilo_registrese.css">
<meta charset="UTF-8">
<title>Projetin - Painel</title>
</head>

<body>
	
	<center>
	<h1>PAINEL</h1>
		<br><br>
	<?php
	session_start();
	include('conexao.php');
	
	$usuario=$_SESSION['usuario'];
	
	echo "Bem-vindo ".$usuario.".";
		
	echo "<br><br><br>";
		
	echo "<h2>Você deseja:</h2>";
		
	$comando="SELECT * FROM login WHERE usuario='$usuario'";
	$resulta=mysqli_query($conexao,$comando);

while($linha=mysqli_fetch_array($resulta))
{
	
	echo "<form action='funcoes.php' name='funcoes' method='post'>";
	echo "<input type='hidden' name='cod' value=$linha[0]>";
	echo "Usuário";
	echo "<br><input type='text' name='usuario' value=$linha[4]>";
	echo "<br>Senha";
	echo "<br><input type='password' name='senha' value=$linha[2]>";
	echo "<br>Nome";
	echo "<br><input type='text' name='nome' value=$linha[1]>";
	echo "<br>E-mail";
	echo "<br><input type='email' name='email' value=$linha[3]>";
	echo "<br><button type='submit' name='deletar' value='deletar'>DELETAR</button>";
	echo "<button type='submit' name='alterar' value='alterar'>ALTERAR</button>";
	echo "</form>";
	
}
		echo "<form action='logout.php' name='sair' method='post'>";
		echo "<button type='submit' name='sair'>SAIR</button>";	
		echo "</form>";

	?>
	</center>
</body>
</html>