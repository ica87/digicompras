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
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {color: #FF0000}
.style4 {color: #0000FF; font-weight: bold; }
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

</p>
<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit22" value="Voltar ao menu principal">
</form>
<p>
  <?
$sql = "select * from visitas order by codigo desc limit 10";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
echo "<tr>";
$reg++;
?>
</p>
<td>
<br>
<span class="style1"><span class="style4">Número do visitante </span>:</span> <? printf("$linha[0]<br>"); ?>
<span class="style1"><span class="style4">Visita em </span>:</span> <? printf("$linha[1]<br>"); ?>
<span class="style1"><span class="style4">Horário da visita </span>:</span> <? printf("$linha[2]<br>"); ?>


</td>
<?
if($reg==1){
echo "</tr><br><br><tr>";
$reg=0;
}
?>

<? } ?>

<p>&nbsp;</p>
</body>
</html>
