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
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisição");
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
<p>Escolha o nome do funcion&aacute;rio e o m&ecirc;s de refer&ecirc;ncia para gerar o cart&atilde;o de ponto </p>
<form action="listar_cartao_de_ponto_por_funcionario.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o funcion&aacute;rio para gerar o cart&atilde;o de ponto </td>
      <td width="10%"><select name="nome" id="select6">
        <option selected></option>
        <?


    $sql = "select * from operadores order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
      </select></td>
      <td width="55%">&nbsp;        </td></tr>
    <tr>
      <td>Informe o m&ecirc;s que deseja desse funcion&aacute;rio </td>
      <td><input name="mes_ano" type="text" id="mes_ano" size="5" maxlength="5">
      mm-aa</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Gerar cart&atilde;o de ponto"></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
