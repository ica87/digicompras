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

$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
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
			
$codigo = $_POST['codigo'];

$sql = "SELECT * FROM cx_saidas where codigo = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$nfantasia = $linha[22];
$historico_saida = $linha[23];
$categoria_conta_saida = $linha[24];
$valor_saida = $linha[25];
$modo_pagto = $linha[27];
$num_cheque = $linha[28];
$banco = $linha[29];
$conta = $linha[30];

}
?>




<p align="center" class="style1">Ol&aacute;! <span class="style2">
  <? echo $nome_op; ?> 
<span class="style3">...</span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Voc&ecirc; est&aacute; Re-imprimindo documento de lan&ccedil;amento de sa&iacute;da </span></span></span></p>
<form name="form1" method="post" action="../caixa/menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_alterar_lancamento_saida.php">
  <table width="100%"  border="1">
    <tr>
      <td>C&oacute;digo</td>
      <td><? echo $codigo; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">Loja</td>
      <td><? echo $nfantasia; ?></td>
      <td width="15%">Categoria despesa </td>
      <td width="35%"><? echo $categoria_conta_saida; ?></td>
    </tr>
    <tr>
      <td>Valor</td>
      <td><div align="left"><? echo "R$ ".$valor_saida; ?></div></td>
      <td>N&ordm; 7.1 </td>
      <td><? echo $codigo; ?></td>
    </tr>
    <tr>
      <td>Historico</td>
      <td rowspan="4"><textarea name="historico" cols="40" rows="6" readonly="readonly" id="historico"><? echo $historico_saida; ?></textarea>      </td>
      <td valign="top">Modo Pagto </td>
      <td valign="top"><? echo $modo_pagto; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">N&ordm; Cheque </td>
      <td valign="top"><? echo $num_cheque; ?></td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td valign="top">Banco</td>
      <td valign="top"><? echo $banco; ?></td>
    </tr>
    <tr>
      <td valign="top">Conta</td>
      <td valign="top"><? echo $conta; ?></td>
    </tr>
    <tr>
      <td colspan="2">        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      </td>
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