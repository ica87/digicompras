<?
session_start();


$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

require '../conect/conect.php';

$user= "select * from admin where usuario='$usuario' and senha='$senha'";
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	Header("Location: principal.php");

}

?> 
