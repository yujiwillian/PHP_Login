<?php
session_start();
include ('conexao.php');

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

if (empty($usuario) || empty($senha))
{
	header('Location:index.php');
	exit();
}

$comando="SELECT * FROM login WHERE usuario='$usuario' AND senha=md5('{$senha}')";
$resulta=mysqli_query($conexao,$comando);
$linha=mysqli_num_rows($resulta);

if($linha==1)
{
	$_SESSION['usuario']=$usuario;
	header('Location:painel.php');
	exit();
	
}
else
{
	echo "<script>history.go(-1);alert('Usuário ou senha incorretos!')</script>";
	
}

?>