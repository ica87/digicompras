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




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
<span class="style3">... <span class="style4">Voc&ecirc; est&aacute; prestes a dar sa&iacute;da no caixa..... </span></span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="../caixa/menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_alterar_lancamento_saida.php">
  <table width="100%"  border="0">
    <tr>
      <td>C&oacute;digo</td>
      <td colspan="2"><? echo $codigo; ?>
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">Loja</td>
      <td width="4%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>
      <td width="26%"><select name="nfantasia" id="select6">
        <option selected><? echo $nfantasia; ?></option>
        <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
      </select></td>
      <td width="15%">Categoria despesa </td>
      <td width="35%"><select name="categoria_conta" id="categoria_conta">
        <option selected><? echo $categoria_conta_saida; ?></option>
        <?


    $sql = "select * from categorias_despesas order by categoria asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['categoria']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr>
      <td>Valor</td>
      <td><div align="center"><strong>R$</strong></div></td>
      <td><input name="valor" type="text" id="valor" value="<? echo $valor_saida; ?>"> 
        0000.00 </td>
      <td>N&ordm; 7.1 </td>
      <td><input name="num_sete_um" type="text" id="num_sete_um" value="<? echo $codigo; ?>" readonly="true"></td>
    </tr>
    <tr>
      <td>Historico</td>
      <td colspan="2" rowspan="4"><textarea name="historico" cols="40" rows="6" id="historico"><? echo $historico_saida; ?></textarea>      </td>
      <td valign="top">Modo Pagto </td>
      <td valign="top"><select name="modo_pagto" id="modo_pagto">
        <option selected><? echo $modo_pagto; ?></option>
        <?


    $sql = "select * from modo_pagto order by modopagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['modopagto']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">N&ordm; Cheque </td>
      <td valign="top"><input name="num_cheque" type="text" id="num_cheque" value="<? echo $num_cheque; ?>"></td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td valign="top">Banco</td>
      <td valign="top"><select name="banco" id="banco">
        <option selected><? echo $banco; ?></option>
        <option>Bradesco</option>
        <option>Nossa Caixa</option>
      </select></td>
    </tr>
    <tr>
      <td valign="top">Conta</td>
      <td valign="top"><select name="conta" id="conta">
        <option selected><? echo $conta; ?></option>
        <option>33875-2</option>
        <option>34100-2</option>
        <option>17540-0</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="3">        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Confirmar Altera&ccedil;&atilde;o"></td>
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