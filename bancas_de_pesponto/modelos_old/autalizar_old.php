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




$codigo = $_POST['codigo'];
$modelo = $_POST['modelo'];
$preco_empresa = $_POST['preco_empresa'];
$preco_pespontador = $_POST['preco_pespontador'];
$preco_coladeira1 = $_POST['preco_coladeira1'];
$preco_coladeira2 = $_POST['preco_coladeira2'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`modelos` set `modelo` = '$modelo',`preco_empresa` = '$preco_empresa',`preco_pespontador` = '$preco_pespontador',`preco_coladeira1` = '$preco_coladeira1',`preco_coladeira2` = '$preco_coladeira2' where `modelos`. `codigo` = '$codigo' limit 1 ";

}

mysql_query($comando,$conexao) or die("Erro ao alterar modelo");



echo "As novas informações sobre o modelo foi alterada com sucesso";

?>



<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

