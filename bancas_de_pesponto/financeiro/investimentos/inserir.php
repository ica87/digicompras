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
.style9 {font-size: 14px; font-weight: bold; }
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
<span class="style3">... <span class="style4">Voc&ecirc; est&aacute; prestes a dar sa&iacute;da no caixa..... </span></span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_investimentos.php">
  <table width="100%"  border="0">
    <tr>
      <td width="20%">Loja</td>
      <td width="4%">&nbsp;</td>
      <td width="26%"><select name="nfantasia" id="select6">
        <option selected></option>
        <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
      </select></td>
      <td width="22%">Valor <strong>R$</strong></td>
      <td width="28%"><strong><font color="#0000FF">
        <input name="valor" type="text" id="valor2">
      0000.00       </font></strong></td>
    </tr>
    <tr>
      <td>Banco</td>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF">
        <select name="banco" id="select5">
          <option selected><? echo $banco_pagto; ?></option>
          <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td>Conta</td>
      <td><input name="conta" type="text" id="conta"></td>
    </tr>
    <tr>
      <td>Data do lan&ccedil;amento </td>
      <td><div align="center"></div></td>
      <td><span class="style9"><? echo date('d-m-Y'); ?></span>
        <input name="datacadastro" type="hidden" id="datacadastro2" value="<? echo date('d-m-Y'); ?>">
        <input name="horacadastro" type="hidden" id="horacadastro2" value="<? echo date('H:i:s'); ?>">
        <input name="dia" type="hidden" id="dia2" value="<? echo date('d'); ?>">
        <input name="mes" type="hidden" id="mes2" value="<? echo date('m'); ?>">
        <input name="ano" type="hidden" id="ano2" value="<? echo date('Y'); ?>"></td>
      <td>Data do investimento </td>
      <td><input name="data_investimento" type="text" id="data_investimento"></td>
    </tr>
    <tr>
      <td>Historico</td>
      <td colspan="2" rowspan="5"><textarea name="historico" cols="40" rows="6" id="historico"></textarea>      </td>
      <td valign="top">Data prevista do Resgate </td>
      <td valign="top"><input name="data_prev_resgate" type="text" id="data_prev_resgate2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">Resgatado</td>
      <td valign="top"><select name="resgatado" id="select2">
        <option>Sim</option>
        <option selected>N&atilde;o</option>
      </select></td>
    </tr>
    <tr>
      <td rowspan="3">&nbsp;</td>
      <td valign="top"><p>Data do resgate</p>      </td>
      <td valign="top"><input name="data_resgatado" type="text" id="data_resgatado"></td>
    </tr>
    <tr>
      <td valign="top">Valor Resgatado </td>
      <td valign="top"><input name="valor_resgatado" type="text" id="valor_resgatado2"></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
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
      <input type="submit" name="Submit" value="Registrar Investimento"></td>
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