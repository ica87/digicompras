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
$ent_t = $_POST['ent_t'];
$nome = $_POST['nome'];
$data = $_POST['data'];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`ponto` set `ent_t` = '$ent_t' where `ponto`. `codigo` = '$codigo_ponto' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar sua entrada no período da tarde, tente novamente!");

echo "Ponto marcado com com sucesso!<br><br> Bom trabalho!";
?>

<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
  <input type="submit" name="Submit" value="Voltar ao menu principal">
</form>
<p>&nbsp;</p>
</body>
</html>
