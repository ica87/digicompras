<?
session_start();


$senha=$_POST['senha'];
$data_hoje=$_POST['data_hoje'];

require 'conect/conect.php';

$user= "select * from operadores_for where senha='$senha'";
$result=mysql_query($user,$conexao) or die("Falha ao efetuar a conexão");
$nome = $linha[1];

if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}


else{

	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	Header("Location: fornecedores/index.php");

}

?> 
