<?
session_start();


$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$data_hoje=$_POST['data_hoje'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ano=$_POST['ano'];
$mes_ano=$_POST['mes_ano'];


require 'conect/conect.php';

$user= "select * from estabelecimentos where cnpj = '$usuario' and senha = '$senha' and status = 'Ativo'";
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	$_SESSION['dia'] = $dia;
	$_SESSION['mes'] = $mes;
	$_SESSION['ano'] = $ano;
	$_SESSION['mes_ano'] = $mes_ano;


	Header("Location: estabelecimentos/index.php");

}

?> 
