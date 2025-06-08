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





//$codigo = $_POST['codigo'];

$cidade_old = $_POST['cidade_old'];

$cidade = $_POST['cidade'];

//$estado = $_POST['estado'];




//ATUALIZA CADASTRO DE CLIENTES


$sql = "SELECT * FROM clientes where cidade = '$cidade_old' order by codigo asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros_cli = mysql_num_rows($res);





$codigo = $linha[0];








$sql2 = "select * from db";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {





$comando = "update `$linha[1]`.`clientes` set `codigo` = '$codigo',`cidade` = '$cidade' where `clientes`. `codigo` = '$codigo'";

}



mysql_query($comando,$conexao);



}



?>





<?


//ATUALIZA CADASTRO DE PROPOSTAS

$sql3 = "SELECT * FROM propostas where cidade = '$cidade_old' order by num_proposta asc";

$res3 = mysql_query($sql3);

while($linha=mysql_fetch_row($res3)) {

$registros_prop = mysql_num_rows($res3);





$num_proposta = $linha[0];








$sql4 = "select * from db";

$res4 = mysql_query($sql4);

while($linha=mysql_fetch_row($res4)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`cidade` = '$cidade' where `propostas`. `num_proposta` = '$num_proposta'";

}



mysql_query($comando,$conexao);



}



?>




<?

if(empty($registros_prop)){
$registros_prop = 0;}



echo "Foram alterados ".$registros_cli." registros de clientes e ".$registros_prop." registros de propostas!";

mysql_close($conexao);

?>



<form name="form1" method="post" action="selecione_codigo_para_edicao.php">

  <input type="submit" name="Submit" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>

