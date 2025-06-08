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
.style1 {
	color: #0000FF;
	font-size: 24px;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {color: #FF0000}
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
<form name="form1" method="post" action="escolha_tipo_relatorio.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p align="center"><strong><span class="style1">Comiss&otilde;es a receber</span></strong></p>
<p>&nbsp;</p>
<form action="relatorio_geral_de_comissao_mensal_allcred_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><span class="style2">Para gerar o relat&oacute;rio mensal a receber &eacute; necess&aacute;rio informar o Banco o m&ecirc;s e ano! </span></td>
    </tr>
    <tr>
      <td width="31%">Informe o m&ecirc;s e ano de refer&ecirc;ncia </td>
      <td width="45%"><input name="mes_ano" type="text" id="mes_ano" size="7" maxlength="7">
        mm-aaaa</td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit4" value="Gerar Relat&oacute;rio mensal de comiss&otilde;es de todos os bancos"></td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<form action="relatorio_geral_de_comissao_mensal_allcred_a_receber_por_cpf.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><span class="style2">Para gerar o relat&oacute;rio mensal a receber por <span class="style3">CPF</span> &eacute; necess&aacute;rio informar o <span class="style3">CPF</span> ! </span></td>
    </tr>
    <tr>
      <td width="31%">Informe o cpf a ser pesquisado </td>
      <td width="45%"><input name="cpf" type="text" id="cpf">
        (11111111111)</td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit43" value="Gerar Relat&oacute;rio mensal por CPF de comiss&otilde;es de todos os bancos"></td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<form action="relatorio_geral_de_comissao_periodico_todos_bancos_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><span class="style2">Para gerar o relat&oacute;rio peri&oacute;dico a receber de todos os bancos &eacute; necess&aacute;rio informar o  m&ecirc;s, ano e as datas inicial e final do per&iacute;odo que deseja! </span></td>
    </tr>
    <tr>
      <td width="31%">Informe o per&iacute;odo que deseja </td>
      <td width="45%">De
        <input name="data_inicial" type="text" id="data_inicial" size="10" maxlength="10">
at&eacute;
<input name="data_final" type="text" id="data_final" size="10" maxlength="10">
dd-mm-aaaa</td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit42" value="Gerar Relat&oacute;rio peri&oacute;dico de comiss&otilde;es de todos os bancos"></td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<form action="relatorio_de_comissao_mensal_por_banco_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><span class="style2">Para gerar o relat&oacute;rio mensal a receber &eacute; necess&aacute;rio informar o Banco o m&ecirc;s e ano! </span></td>
    </tr>
    <tr>
      <td width="34%">Informe o banco que foi efetuada a opera&ccedil;&atilde;o <br></td>
      <td width="37%"><strong><font color="#0000FF">
        <select name="bco_operacao" id="select3">
          <option selected><? echo $bco_operacao; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td width="29%">&nbsp;        </td></tr>
    <tr>
      <td>Informe o m&ecirc;s e ano de refer&ecirc;ncia </td>
      <td><input name="mes_ano" type="text" id="mes_ano" size="7" maxlength="7">
      mm-aaaa</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Gerar Relat&oacute;rio mensal por banco"></td>
      <td>&nbsp;      </td>
    </tr>
  </table>
</form>
<form action="relatorio_periodico_por_banco_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><span class="style2">Para gerar o relat&oacute;rio peri&oacute;dico a receber &eacute; necess&aacute;rio informar o Banco a data inicial e a data final do per&iacute;odo que voc&ecirc; deseja! </span></td>
    </tr>
    <tr>
      <td width="35%">Informe o banco que foi efetuada a opera&ccedil;&atilde;o <br></td>
      <td width="32%"><strong><font color="#0000FF">
        <select name="bco_operacao" id="bco_operacao">
          <option selected><? echo $bco_operacao; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td width="33%">&nbsp; </td>
    </tr>
    <tr>
      <td>Informe o per&iacute;odo que deseja </td>
      <td>De
        <input name="data_inicial" type="text" id="data_inicial" size="10" maxlength="10">
at&eacute; <input name="data_final" type="text" id="data_final" size="10" maxlength="10">     
dd-mm-aaaa</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit3" value="Gerar Relat&oacute;rio Peri&oacute;dico por banco"></td>
      <td>&nbsp; </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
