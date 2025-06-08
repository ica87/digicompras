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
$data = $_POST['data'];

$sql = "SELECT * FROM malote where data = '$data' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$operador = $linha[1];
$cel_operador = $linha[2];
$email_operador = $linha[3];
$estabelecimento = $linha[4];
$cidade_estabelecimento = $linha[5];
$tel_estabelecimento = $linha[6];
$email_estabelecimento = $linha[7];

$operador_alterou = $linha[8];
$cel_operador_alterou = $linha[9];
$email_operador_alterou = $linha[10];
$estabelecimento_alterou = $linha[11];
$cidade_estabelecimento_alterou = $linha[12];
$tel_estabelecimento_alterou = $linha[13];
$email_estabelecimento_alterou = $linha[14];
$dataalteracao = $linha[15];
$horaalteracao = $linha[16];


$dia = $linha[17];
$mes = $linha[18];
$ano = $linha[19];
$data = $linha[20];
$hora = $linha[21];
$num_lacre_banco = $linha[22];
$num_lacre_empresa = $linha[23];
$protocolos = $linha[24];
$obs = $linha[25];



}
?>




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
<span class="style3">... <span class="style4">Voc&ecirc; est&aacute; editando uma ocorr&ecirc;ncia de malote..... </span></span></span></p>
<p align="center" class="style1"><span class="style2"><span class="style3"><span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_alterar_malote.php">
  <table width="100%"  border="0">
    <tr>
      <td>N&ordm; do Registro de malote </td>
      <td><strong></strong></td>
      <td><strong><font color="#0000FF"><? echo $codigo; ?>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">Data</td>
      <td width="4%">&nbsp;</td>
      <td width="26%"><strong><font color="#0000FF"><? echo $data; ?></font></strong> </td>
      <td width="15%">Hora</td>
      <td width="35%"><strong><font color="#0000FF"><? echo $hora; ?></font></strong></td>
    </tr>
    <tr>
      <td>N&ordm; do Lacre BV </td>
      <td><div align="center"></div></td>
      <td><input name="num_lacre_banco" type="text" id="num_lacre_banco" value="<? echo $num_lacre_banco; ?>"> 
      </td>
      <td>N&ordm; Lacre Allcred </td>
      <td><input name="num_lacre_empresa" type="text" id="num_lacre_empresa" value="<? echo $num_lacre_empresa; ?>"></td>
    </tr>
    <tr>
      <td>Protocolos</td>
      <td colspan="2" rowspan="4"><textarea name="protocolos" cols="40" rows="6" id="protocolos"><? echo $protocolos; ?></textarea>      </td>
      <td valign="top">Observa&ccedil;&otilde;es</td>
      <td rowspan="4" valign="top"><textarea name="obs" cols="40" rows="6" id="obs"><? echo $obs; ?></textarea></td>
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
      <td colspan="3">        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Gravar altera&ccedil;&atilde;o no  Registro de Malote"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro sendo alterado por <br>
    </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_op; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $celular_op; ?> </font><font color="#0000FF"> </font></strong></td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento_op; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento_op; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento_op; ?> </font></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>