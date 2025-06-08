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
<title>Relat&oacute;rio de Produ&ccedil;&atilde;o</title>
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
<p><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';

$bco_operacao = $_POST['bco_operacao'];

error_reporting(E_ALL);
?>


</p>
<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
<p>Qual o tipo de relat&oacute;rio pretende gerar? </p>
<form action="informe_bco_operacao_para_gerar_relatorio_mensal_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="31%">&nbsp;</td>
      <td width="45%"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit4" value="Comiss&otilde;es a Receber"></td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;          </td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<form action="informe_bco_operacao_para_gerar_relatorio_mensal.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="31%">&nbsp;</td>
      <td width="40%"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Comiss&otilde;es J&aacute; Recebidas"></td>
      <td width="29%">&nbsp;      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
