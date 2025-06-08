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
<title>Baixa de T&iacute;tulos</title>
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
$estabelecimento_op = $linha[44];
$cidade_estabelecimento_op = $linha[45];
$tel_estabelecimento_op = $linha[46];
$email_estabelecimento_op = $linha[47];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}


?>


<?
// dados do cliente
$num_contas_a_receber = $_POST['num_contas_a_receber'];

$sql = "SELECT * FROM contas_a_receber where codigo = '$num_contas_a_receber' order by num_fatura,num_mensalidade asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$codigo_cliente = $linha[1];
$datacadastro = $linha[2];
$horacadastro = $linha[3];
$nfantasia_cliente = $linha[4];
$razaosocial = $linha[5];
$cnpj = $linha[6];
$inscr_est = $linha[7];
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
$mensalidade = $linha[11];
$vencto = $linha[12];
$quant_parc = $linha[13];
$modo_pagto = $linha[14];
$juros_diarios = $linha[15];
$valor_recebido = $linha[16];
$quitacao = $linha[17];
$operador = $linha[18];
$historico = $linha[34];
$num_mensalidade = $linha[35];
$num_fatura = $linha[42];
$num_boleto = $linha[44];
$num_agrupamento = $linha[45];


}


?>




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
  <span class="style3">... <span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="contas_a_receber_agrupamento_de_mensalidades.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="nfantasia_cliente" type="hidden" id="codigo_aluno3" value="<? echo $nfantasia_cliente; ?>">
  <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj; ?>">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_cx_entradas_mensalidade.php">
  <table width="100%"  border="0">
    <tr>
      <td width="17%">C&oacute;digo do Cliente </td>
      <td width="1%">&nbsp;</td>
      <td width="17%"><? echo $codigo_cliente; ?>
      <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>"></td>
      <td width="14%">&nbsp;</td>
      <td width="11%">N&ordm; do T&iacute;tulo</td>
      <td width="11%"><? echo $codigo; ?>
      <input name="num_contas_a_receber" type="hidden" id="num_contas_a_receber" value="<? echo $num_contas_a_receber; ?>"></td>
      <td width="29%">Parcela N&ordm; <? echo $num_mensalidade; ?> de <? echo $quant_parc; ?>
      <input name="num_mensalidade" type="hidden" id="num_mensalidade" value="<? echo $num_mensalidade; ?>">
      <input name="quant_parc" type="hidden" id="quant_parc" value="<? echo $quant_parc; ?>"></td>
    </tr>
    <tr>
      <td>Raz&atilde;o Social</td>
      <td>&nbsp;</td>
      <td><? echo $razaosocial; ?>
      <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial; ?>"></td>
      <td>&nbsp;</td>
      <td>N&ordm; Fatura</td>
      <td colspan="2"><? echo $num_fatura; ?>
      <input name="num_fatura" type="hidden" id="num_fatura" value="<? echo $num_fatura; ?>"></td>
    </tr>
    <tr>
      <td>Nome Fantasia</td>
      <td>&nbsp;</td>
      <td><? echo $nfantasia_cliente; ?>
      <input name="nfantasia_cliente" type="hidden" id="nfantasia_cliente" value="<? echo $nfantasia_cliente; ?>"></td>
      <td>&nbsp;</td>
      <td>N&ordm; Agrupamento</td>
      <td colspan="2"><? echo $num_agrupamento; ?>
      <input name="num_agrupamento" type="hidden" id="num_agrupamento" value="<? echo $num_agrupamento; ?>"></td>
    </tr>
    <tr>
      <td>CNPJ/CPF</td>
      <td>&nbsp;</td>
      <td><? echo $cnpj; ?>
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>"></td>
      <td>&nbsp;</td>
      <td>Inscr. Estadual</td>
      <td colspan="2"><? echo $inscr_est; ?>
      <input name="inscr_est" type="hidden" id="inscr_est" value="<? echo $inscr_est; ?>"></td>
    </tr>
    <tr>
      <td>Valor Original</td>
      <td>&nbsp;</td>
      <td><? echo "R$ ".$mensalidade; ?>
      <input name="mensalidade" type="hidden" id="mensalidade" value="<? echo $mensalidade; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Vencimento</td>
      <td>&nbsp;</td>
      <td><? echo $vencto; ?>
      <input name="vencto" type="hidden" id="vencto" value="<? echo $vencto; ?>"></td>
      <td>&nbsp;</td>
      <td>N&ordm; Boleto</td>
      <td colspan="2"><? echo $num_boleto; ?>
        <input name="num_boleto" type="hidden" id="num_boleto" value="<? echo $num_boleto; ?>"></td>
    </tr>
    <tr>
      <td>Valor Recebido </td>
      <td>&nbsp;</td>
      <td><input name="valor_recebido" type="text" id="valor_recebido">
      <input name="quitacao" type="hidden" id="quitacao" value="<? echo "Pago"; ?>"></td>
      <td>&nbsp;</td>
      <td>Modo Pagto</td>
      <td colspan="2"><select name="modo_pagto" id="modo_pagto">
        <option selected>Dinheiro</option>
        <option>Dinheiro+Cheque</option>
        <option>Cheque</option>
      </select>      </td>
    </tr>
    <tr>
      <td>Hist&oacute;rico</td>
      <td colspan="6" rowspan="3"><textarea name="historico" cols="60" rows="6" id="historico"></textarea>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Confirmar Recebimento"></td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
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