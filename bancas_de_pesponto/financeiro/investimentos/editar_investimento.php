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
$codigo = $_POST['codigo'];

$sql = "SELECT * FROM investimentos where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$nfantasia = $linha[1];
$banco = $linha[2];
$valor = $linha[3];
$datacadastro = $linha[4];
$horacadastro = $linha[5];
$dia = $linha[6];
$mes = $linha[7];
$ano = $linha[8];
$data_investimento = $linha[9];
$data_prev_resgate = $linha[10];
$resgatado = $linha[11];
$data_resgate = $linha[12];
$valor_resgatado = $linha[13];
$historico = $linha[14];

$operador = $linha[15];
$cel_operador = $linha[16];
$email_operador = $linha[17];
$estabelecimento = $linha[18];
$cidade_estabelecimento = $linha[19];
$tel_estabelecimento = $linha[20];
$email_estabelecimento = $linha[21];

$conta = $linha[31];

}
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
<form name="form2" method="post" action="grava_alterar_investimentos.php">
  <table width="100%"  border="0">
    <tr>
      <td>C&oacute;digo do lan&ccedil;amento </td>
      <td colspan="2"><span class="style9"><? echo $codigo; ?>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">Loja</td>
      <td width="4%">&nbsp;</td>
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
      <td width="22%">Valor <strong>R$</strong></td>
      <td width="28%"><strong><font color="#0000FF">
        <input name="valor" type="text" id="valor2" value="<? echo $valor; ?>">
      0000.00       </font></strong></td>
    </tr>
    <tr>
      <td>Banco</td>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF">
        <select name="banco" id="select5">
          <option selected><? echo $banco; ?></option>
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
      <td><input name="conta" type="text" id="conta" value="<? echo $conta; ?>"></td>
    </tr>
    <tr>
      <td>Data do lan&ccedil;amento </td>
      <td><div align="center"></div></td>
      <td><span class="style9"><? echo $datacadastro; ?></span> Hora <span class="style9"><? echo $horacadastro; ?></span>
        <input name="dataalteracao" type="hidden" id="dataalteracao2" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao2" value="<? echo date('H:i:s'); ?>"></td>
      <td>Data do investimento </td>
      <td><input name="data_investimento" type="text" id="data_investimento" value="<? echo $data_investimento; ?>"></td>
    </tr>
    <tr>
      <td>Historico</td>
      <td colspan="2" rowspan="5"><textarea name="historico" cols="40" rows="6" id="historico"><? echo $historico; ?></textarea>      </td>
      <td valign="top">Data prevista do Resgate </td>
      <td valign="top"><input name="data_prev_resgate" type="text" id="data_prev_resgate2" value="<? echo $data_prev_resgate; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">Resgatado</td>
      <td valign="top"><select name="resgatado" id="select2">
        <option selected><? echo $resgatado; ?></option>
        <option>Sim</option>
        <option>N&atilde;o</option>
      </select></td>
    </tr>
    <tr>
      <td rowspan="3">&nbsp;</td>
      <td valign="top"><p>Data do resgate</p>      </td>
      <td valign="top"><input name="data_resgatado" type="text" id="data_resgatado" value="<? echo $data_resgatado; ?>"></td>
    </tr>
    <tr>
      <td valign="top">Valor Resgatado </td>
      <td valign="top"><input name="valor_resgatado" type="text" id="valor_resgatado2" value="<? valor_resgatado; ?>"></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
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
      <input type="submit" name="Submit" value="Alterar investimento"></td>
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