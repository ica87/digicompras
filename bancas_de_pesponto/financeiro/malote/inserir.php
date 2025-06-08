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
<title>Untitled Document</title>
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
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style2 {color: #0000FF}
.style3 {color: #FF0000}
.style4 {font-size: 18px}
-->
</style></head>

<?

require '../../../conect/conect.php';

			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>

<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}


?>


<?
// dados do aluno
$codigo_contas_a_receber = $_POST['codigo_contas_a_receber'];

$codigo_aluno = $_POST['codigo_aluno'];
$nome_aluno = $_POST['nome_aluno'];

$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');
$nome = $_POST['nome'];
$nome_resp = $_POST['nome'];
$cpf_resp = $_POST['cpf_resp'];
$curso = $_POST['curso'];
$modulos = $_POST['modulos'];
$duracao = $_POST['duracao'];
$mensalidade = $_POST['mensalidade'];
$vencto = $_POST['vencto'];
$quant_parc = $_POST['quant_parc'];
$modo_pagto = $_POST['modo_pagto'];
$juros_diarios = $_POST['juros_diarios'];
$quitacao = $_POST['quitacao'];
$categoria_conta = $_POST['categoria_conta'];
$num_mensalidade = $_POST['num_mensalidade'];

//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$historico = $_POST['historico'];


// Observações

$obs = $_POST['obs'];




?>




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
<span class="style3">... <span class="style4">Voc&ecirc; est&aacute; registrando uma ocorr&ecirc;ncia de malote..... </span></span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_malote.php">
  <table width="100%"  border="0">
    <tr>
      <td width="20%">Data</td>
      <td width="4%">&nbsp;</td>
      <td width="26%"><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
      <input name="dia" type="hidden" id="data" value="<? echo date('d'); ?>">
      <input name="mes" type="hidden" id="data2" value="<? echo date('m'); ?>">
      <input name="ano" type="hidden" id="data3" value="<? echo date('Y'); ?>">
      <input name="data" type="hidden" id="data4" value="<? echo date('d-m-Y'); ?>">
      <input name="hora" type="hidden" id="hora" value="<? echo date("H:i:s"); ?>"></td>
      <td width="15%">&nbsp;</td>
      <td width="35%">&nbsp;</td>
    </tr>
    <tr>
      <td>N&ordm; do Lacre BV </td>
      <td><div align="center"></div></td>
      <td><input name="num_lacre_banco" type="text" id="num_lacre_banco"> 
      </td>
      <td>N&ordm; Lacre Allcred </td>
      <td><input name="num_lacre_empresa" type="text" id="num_lacre_empresa"></td>
    </tr>
    <tr>
      <td>Protocolos</td>
      <td colspan="2" rowspan="4"><textarea name="protocolos" cols="40" rows="6" id="protocolos"></textarea>      </td>
      <td valign="top">Observa&ccedil;&otilde;es</td>
      <td rowspan="4" valign="top"><textarea name="obs" cols="40" rows="6" id="obs"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">        <input name="operador" type="hidden" id="operador" value="<? echo $nome_op; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Gravar Registro de Malote"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>