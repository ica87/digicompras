<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");



?>



<html>

<head>

<title>Processamento de arquivos</title>

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

</style></head>



<body>

<p>        <?

require '../../conect/conect.php';



?>

</p>

<p>&nbsp;</p>





<?

error_reporting(E_ALL);




$nfantasia = $_POST['nfantasia'];
$codigo = $_POST['codigo'];



$comando = "delete from `modelos` where `modelos`. `codigo` = '$codigo' and `nfantasia` = '$nfantasia' limit 1 ";



mysql_query($comando,$conexao) or die("Erro ao excluir modelo"); ?>



<? echo "Modelo exclu�do com sucesso:"; ?> 





<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

