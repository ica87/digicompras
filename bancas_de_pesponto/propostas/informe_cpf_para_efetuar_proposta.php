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



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
<form action="efetuar_proposta.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">
  <table width="100%"  border="0">
    <tr>
      <td>Qual o tipo dessa proposta? </td>
      <td><select name="tipo" id="tipo">
        <option>MUNICIPAL</option>
        <option>ESTADUAL</option>
        <option>FEDERAL</option>
        <option>INSS</option>
        <option>PREFEITURA</option>
        <option>CORREIOS</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="35%">Informe o CPF do cliente a ser alterado <br></td>
      <td width="10%"><input name="cpf" type="text" id="cpf"></td>
      <td width="55%"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Efetuar Proposta"></td></tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
