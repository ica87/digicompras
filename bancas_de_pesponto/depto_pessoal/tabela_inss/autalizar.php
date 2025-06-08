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

$de = $_POST['de'];

$ate = $_POST['ate'];

$aliquota = $_POST['aliquota'];

$mes = $_POST['mes'];

$ano = $_POST['ano'];






$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`tabela_inss` set `de` = '$de',`ate` = '$ate',`aliquota` = '$aliquota',`mes` = '$mes',`ano` = '$ano' where `tabela_inss`. `codigo` = '$codigo' limit 1 ";

}

mysql_query($comando,$conexao) or die("Erro ao alterar tabela do INSS do sistema!");



echo "Novos valores da tabela do INSS alterados no sistema com sucesso!";

?>



<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="tabela.php">

  <input type="submit" name="Submit" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>

