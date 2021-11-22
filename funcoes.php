<?php

session_start();
	include('conexao.php');
	
	$usuario=$_SESSION['usuario'];
	$usuario2=$_POST['usuario'];
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$cod=$_POST['cod'];
	$alterar=$_POST['alterar'];
	$deletar=$_POST['deletar'];
	$comando="UPDATE login SET nome='$nome',usuario='$usuario2',email='$email',senha=md5('".$senha."') WHERE cod_login=$cod";
	$comando2="DELETE FROM login WHERE cod_login=$cod";

	if($alterar=="alterar")
	{
	$resulta=mysqli_query($conexao,$comando);
	if($resulta!=0)
{
	echo "<script>history.go(-1);alert('Foi alterado com sucesso!')</script>";
}
else
{
	echo "<script>history.go(-1);alert('Não foi alterado!')</script>";
	
}
	}

if($deletar=="deletar")
{
	$resulta=mysqli_query($conexao,$comando2);
	if($resulta!=0)
{
	echo "<script>history.go(-1);alert('Deletado com sucesso!')</script>";
}
else
{
	echo "<script>history.go(-1);alert('Não foi deletado!')</script>";
	
}
}
?>