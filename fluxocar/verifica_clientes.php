<?
session_start();


$cpf=$_POST['cpf'];
$data_hoje=$_POST['data_hoje'];

require 'conect/conect.php';

$user= "select * from clientes where cpf='$cpf'";
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
$nome = $linha[1];

if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}


else{

	$_SESSION['cpf'] = $cpf;
	$_SESSION['data_hoje'] = $data_hoje;
	Header("Location: clientes/index.php");

}

?> 
