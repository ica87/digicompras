<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
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
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisi��o");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
<form action="lista_de_propostas.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="41%">Informe o CPF do cliente para ver as propostas dele <br></td>
      <td width="21%"><input name="cpf" type="text" id="cpf"></td>
      <td width="38%"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Verificar Propostas "></td></tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
