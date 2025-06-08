<?
session_start();


$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$data_hoje=$_POST['data_hoje'];

require 'conect/conect.php';

$user= "select * from operadores where usuario='$usuario' and  senha='$senha'";
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	Header("Location: sistem/index.php");

}

?> 
