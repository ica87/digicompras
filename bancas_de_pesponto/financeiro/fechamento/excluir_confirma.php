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
.style11 {color: #000000}
-->
</style></head>

<?

require '../../../conect/conect.php';



$codigo = $_POST['codigo'];

			
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
//where mes = '$mes' and ano = '$ano' order by codigo asc
			
$sql = "SELECT * FROM fechamento where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$datacadastro = $linha[1];
$horacadastro = $linha[2];

$banco = $linha[22];
$inss = $linha[23];
$exercito = $linha[24];
$prefeitura = $linha[25];
$obs = $linha[26];

}
?>




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
<span class="style3">... <span class="style4">Voc&ecirc; est&aacute; alterando  um lan&ccedil;amento de fechamento de m&ecirc;s..... </span></span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="excluir_lancamento.php">
  <table width="100%"  border="0">
    <tr>
      <td>Data do lan&ccedil;amento </td>
      <td colspan="2"><span class="style9"><? echo $datacadastro; ?></span>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
        <input name="dataalteracao" type="hidden" id="datacadastro2" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horacadastro2" value="<? echo date('H:i:s'); ?>">
        <input name="dia_alteracao" type="hidden" id="dia2" value="<? echo date('d'); ?>">
        <input name="mes_alteracao" type="hidden" id="mes2" value="<? echo date('m'); ?>">
      <input name="ano_alteracao" type="hidden" id="ano2" value="<? echo date('Y'); ?>"></td>
      <td>Hora do lan&ccedil;amento </td>
      <td><span class="style9"><? echo $horacadastro; ?></span></td>
    </tr>
    <tr>
      <td width="20%">Banco</td>
      <td width="4%">&nbsp;</td>
      <td width="26%"><select name="banco" id="select6">
        <option selected><? echo $banco; ?></option>
        <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
      </select></td>
      <td width="22%">INSS</td>
      <td width="28%" class="style11">
      R$ 
        <input name="inss" type="text" id="inss" value="<? echo $inss; ?>">
      </td>
    </tr>
    <tr>
      <td>Ex&eacute;rcito</td>
      <td><div align="center">R$</div></td>
      <td><input name="exercito" type="text" id="exercito" value="<? echo $exercito; ?>"> 
      </td>
      <td>Prefeitura</td>
      <td>R$ 
        <input name="prefeitura" type="text" id="prefeitura" value="<? echo $prefeitura; ?>"></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="2" rowspan="5"><textarea name="obs" cols="40" rows="6" id="obs"><? echo $obs; ?></textarea>      </td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="3">&nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Confirmar Exclus&atilde;o">
      ATEN&Ccedil;&Atilde;O! Essa opera&ccedil;&atilde;o n&atilde;o &eacute; poss&iacute;vel recuperar os dados! </td>
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