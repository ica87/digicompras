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
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Confirma&ccedil;&atilde;o de exclus&atilde;o de produto</title>
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style5 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
.style8 {color: #000000}
-->
</style>
</head>

<body topmargin="0" leftmargin="0">

<p>
  <?

require '../../conect/conect.php';

?>
</p>
<p align="left">
  <?
  $vg = $_GET['chamar'];


$codigo = $vg;

  
	  
$sql = "select * from publicidade";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
  <span class="style5">Confirma&ccedil;&atilde;o de exclus&atilde;o da arte publicit&aacute;ria! <span class="style1"></span></span></p>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><?
	  printf("<a href='../../publicidade/$linha[1]' target='_blank'><img src='../../publicidade/$linha[1]' border='0' width='500' height='75'></a>");
	  ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="57%">Voc&ecirc; tem certeza que deseja excluir permanentemente a arte publicit&aacute;ria? </td>
    <td width="19%"><form name="form1" method="post" action="excluir_arte.php">
      <input type="submit" name="Submit" value="Sim! Excluir">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    </form></td>
    <td width="24%"><form name="form2" method="post" action="menu.php">
      <input type="submit" name="Submit2" value="N&atilde;o! Cancelar A&ccedil;&atilde;o">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    </form></td>
  </tr>
</table>
	  	<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>
          <p><br>
</p>
</body>

</html>
