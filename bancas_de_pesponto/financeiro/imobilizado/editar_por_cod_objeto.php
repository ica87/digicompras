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
.style10 {color: #000000}
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
$cod_objeto = $_POST['cod_objeto'];

$sql = "SELECT * FROM imobilizado where cod_objeto = '$cod_objeto'";
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

$nfantasia = $linha[15];
$objeto = $linha[16];
$descricao = $linha[17];
$datacadastro = $linha[18];
$horacadastro = $linha[19];
$data_aquisicao = $linha[20];
$valor = $linha[21];
$tempo_vida_util = $linha[22];
$depreciacao_mensal = $linha[23];
$data_saida = $linha[24];
$hora_saida = $linha[25];
$motivo_saida = $linha[26];
$valor_saida = $linha[27];
$obs = $linha[28];
$cod_objeto = $linha[39];


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
<form name="form2" method="post" action="grava_editar.php">
  <table width="100%"  border="0">
    <tr>
      <td>N&ordm; do registro </td>
      <td><span class="style9"><? echo $codigo; ?>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data do lan&ccedil;amento </td>
      <td><span class="style9"><? echo $datacadastro; ?></span>      </td>
      <td>Hora do Lan&ccedil;amento </td>
      <td><span class="style9"><? echo $horacadastro; ?></span></td>
    </tr>
    <tr>
      <td width="20%">Loja</td>
      <td><select name="nfantasia" id="select6">
          <option selected><?  echo $nfantasia; ?></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
      </select></td>
      <td width="18%">C&oacute;digo do Objeo </td>
      <td width="32%"><strong><font color="#0000FF">
        <input name="cod_objeto" type="text" id="cod_objeto" value="<? echo $cod_objeto; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td rowspan="5"><textarea name="descricao" cols="40" rows="6" id="textarea"><? echo $descricao; ?></textarea></td>
      <td>Objeto</td>
      <td><strong><font color="#0000FF">
        <input name="objeto" type="text" id="objeto2" value="<? echo $objeto; ?>" size="40">
      </font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Data da Aquisi&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF">
        <input name="data_aquisicao" type="text" id="data_aquisicao" value="<? echo $data-aquisicao; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Valor <strong>R$</strong></td>
      <td><strong><font color="#0000FF">
        <input name="valor" type="text" id="valor2" value="<? echo $valor; ?>">
</font></strong><span class="style10">0000.00 </span><strong><font color="#0000FF">
      </font></strong> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tempo de vida &uacute;til </td>
      <td><strong><font color="#0000FF">
        <input name="tempo_vida_util" type="text" id="tempo_vida_util" value="<? echo $tempo_vida_util; ?>" size="3" maxlength="2">
      </font> </strong><span class="style10">em meses </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Deprecia&ccedil;&atilde;o mensal </td>
      <td><span class="style9"><? echo "R$ ".$depreciacao_mensal; ?></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data  da Sa&iacute;da </td>
      <td><div align="left"><span class="style9">
        <input name="data_saida" type="text" id="data_saida" value="<? echo $data_saida; ?>"> 
      </span></div></td>
      <td>Hora da Sa&iacute;da </td>
      <td><span class="style9">
        <input name="hora_saida" type="text" id="hora_saida" value="<? echo $hora_saida; ?>">
      </span></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td rowspan="5"><textarea name="obs" cols="40" rows="6" id="textarea2"><? echo $obs; ?></textarea></td>
      <td valign="top">Motivo da Sa&iacute;da </td>
      <td valign="top"><select name="motivo_saida" id="select">
          <option select><? echo $motivo_saida;  ?></option>
          <option>Doado</option>
          <option>Emprestado</option>
          <option>Locado</option>
          <option>Vendido</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td valign="top">Valor Sa&iacute;da </td>
      <td valign="top"><input name="valor_saida" type="text" id="valor_saida2" value="<? echo $valor_saida; ?>">
      0000.00 </td>
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
      <td colspan="2">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
        <span class="style9">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao2" value="<? echo date('H:i:s'); ?>">
        <input name="dia_saida" type="hidden" id="dia_saida2" value="<? echo date('d'); ?>">
        <input name="mes_saida" type="hidden" id="mes_saida2" value="<? echo date('m'); ?>">
        <input name="ano_saida" type="hidden" id="ano_saida2" value="<? echo date('Y'); ?>">
        <input name="mes_ano_saida" type="hidden" id="mes_ano_saida2" value="<? echo date('m-Y'); ?>">
        </span>        <input type="submit" name="Submit" value="Alterar Registro do Objeto"></td>
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