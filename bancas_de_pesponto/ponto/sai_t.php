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


$codigo_ponto = $_POST['codigo_ponto'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$sai_t = $_POST['sai_t'];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`ponto` set `sai_t` = '$sai_t' where `ponto`. `codigo` = '$codigo_ponto' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar sua saída no fim do período da tarde, tente novamente!");

echo "Ponto marcado com com sucesso!<br><br> Bom descanso!";

?>

<?
mysql_close($conexao);
?>

<form action="javascript:window.close()" method="post" name="form1" target="_top">
  <input type="submit" name="Submit" value="Encerrar sess&atilde;o">
</form>
<p>&nbsp;</p>
</body>
</html>
