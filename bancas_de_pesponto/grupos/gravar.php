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



//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");

require '../../conect/conect.php';



$grupo = $_POST['grupo'];





$comando = "insert into grupos(grupo) values('$grupo')";



mysql_query($comando,$conexao) or die("Erro ao gravar banco");





echo "Grupo gravado com sucesso<br>";





?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

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

</p>

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

<?

mysql_close($conexao);

?>