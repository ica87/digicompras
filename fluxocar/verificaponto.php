<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>
<?

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

require 'conect/conect.php';

$user= "select * from operadores where usuario='$usuario' and  senha='$senha'";
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
if(mysql_num_rows($result)==0){

	Header("Location: alerta.php");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	Header("Location: sistem/ponto.php");

}

?> 
