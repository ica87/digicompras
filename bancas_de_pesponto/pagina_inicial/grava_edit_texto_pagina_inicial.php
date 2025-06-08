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

error_reporting(E_ALL);



//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");

require '../../conect/conect.php';



$texto = $_POST['texto'];
$texto2 = $_POST['texto2'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`pag_inicial` set `texto` = '$texto',`texto2` = '$texto2' where `pag_inicial`. `codigo` = '0' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao gravar dados");





echo "Texto da página inicial alterado com sucesso<br>";





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

  <input type="submit" name="Submit" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>