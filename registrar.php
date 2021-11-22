<?php

include('conexao.php');

$usuario=$_POST['usuario'];
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];

$comando="INSERT INTO login (nome,senha,email,usuario) VALUES ('$nome',md5('".$senha."'),'$email','$usuario')";
$resulta=mysqli_query($conexao,$comando);

if($resulta!=0)
{
	echo "<script>alert('Foi cadastrado com sucesso!')</script>";
	header("Location:index.php");
}
else
{
	echo "<script>history.go(-1);alert('Não foi cadastrado!')</script>";
	
}


?>