<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<?

//require("conect/conect.php"); or die("erro na requisição");

require '../../../conect/conect.php';

error_reporting(E_ALL);








?>


		  

		  

		  <?

$codigo = $_POST['codigo'];

$mensagem_folha_pagto = $_POST['mensagem_folha_pagto'];




$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`cad_empresa` set `codigo` = '$codigo',`mensagem_folha_pagto` = '$mensagem_folha_pagto' where `cad_empresa`. `codigo` = '$codigo' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar mensagem da folha de pagto");





echo "Mensagem da folha de pagto alterada com sucesso<br>";

?>








<body>

<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>






</body>

</html>

<?

mysql_close($conexao);

?>

