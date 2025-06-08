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
.style1 {font-size: 24px;
	font-weight: bold;
}
.style10 {font-size: 14px}
.style4 {font-size: 18px;
	font-weight: bold;
}
.style5 {font-size: 18px}
.style9 {font-size: 14px; font-weight: bold; }
-->
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../../conect/conect.php';
error_reporting(E_ALL);

?>

		  
		  
		  <?

// dados do lancamento
$codigo = $_POST['codigo'];
$num_lacre_banco = $_POST['num_lacre_banco'];
$num_lacre_empresa = $_POST['num_lacre_empresa'];
$protocolos = $_POST['protocolos'];
$obs = $_POST['obs'];
$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');

//dados do operador que alterou


$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];

//dados do estabelecimento que alterou

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`malote` set `codigo` = '$codigo',`num_lacre_banco` = '$num_lacre_banco',`num_lacre_empresa` = '$num_lacre_empresa',`protocolos` = '$protocolos',`obs` = '$obs',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',
`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`dataalteracao`= '$dataalteracao',`horaalteracao`= '$horaalteracao' where `malote`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse registro de malote");


echo "Registro de malote alterado com sucesso<br><br>";
?>



<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<table width="100%"  border="1">
<?
$sql = "SELECT * FROM malote where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo2 = $linha[0];
$operador2 = $linha[1];
$cel_operador2 = $linha[2];
$email_operador2 = $linha[3];
$estabelecimento2 = $linha[4];
$cidade_estabelecimento2 = $linha[5];
$tel_estabelecimento2 = $linha[6];
$email_estabelecimento2 = $linha[7];

$operador_alterou2 = $linha[8];
$cel_operador_alterou2 = $linha[9];
$email_operador_alterou2 = $linha[10];
$estabelecimento_alterou2 = $linha[11];
$cidade_estabelecimento_alterou2 = $linha[12];
$tel_estabelecimento_alterou2 = $linha[13];
$email_estabelecimento_alterou2 = $linha[14];
$dataalteracao2 = $linha[15];
$horaalteracao2 = $linha[16];


$dia2 = $linha[17];
$mes2 = $linha[18];
$ano2 = $linha[19];
$data2 = $linha[20];
$hora2 = $linha[21];
$num_lacre_banco2 = $linha[22];
$num_lacre_empresa2 = $linha[23];
$protocolos2 = $linha[24];
$obs2 = $linha[25];



}
?>

  <tr>
    <td colspan="4"><div align="center" class="style1">Registro de Malote n&ordm; <? echo $codigo2; ?></div></td>
  </tr>
  <tr>
    <td width="21%"><span class="style4">Data do registro </span></td>
    <td width="20%"><span class="style9"><? echo $data2; ?></span></td>
    <td width="23%"><span class="style4">Hora do registro </span></td>
    <td width="36%"><span class="style9"><? echo $hora2; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>N&ordm; Lacre BV </strong></span></td>
    <td><span class="style9"><? echo $num_lacre_banco2; ?></span></td>
    <td><span class="style5"><strong>N&ordm; Lacre Allcred </strong></span></td>
    <td><span class="style9"><? echo $num_lacre_empresa2; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Protocolos</strong></span></td>
    <td colspan="3"><textarea name="protocolos" cols="40" rows="6" readonly="readonly" id="protocolos"><? echo $protocolos2; ?></textarea></td>
  </tr>
  <tr>
    <td><span class="style4">Observa&ccedil;&otilde;es</span></td>
    <td><textarea name="obs" cols="40" rows="6" readonly="readonly" id="obs"><? echo $obs2; ?></textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro efetuado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento2; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento2; ?> </font></strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Data do Registro </strong></td>
    <td><strong><font color="#0000FF"><? echo $data2; ?></font></strong></td>
    <td><strong>Hora do Registro </strong></td>
    <td><strong><font color="#0000FF"><? echo $hora2; ?></font></strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro  alterado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador_alterou2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador_alterou2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador_alterou2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento_alterou2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento_alterou2; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento_alterou2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento_alterou2; ?> </font></strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Data da Altera&ccedil;&atilde;o </strong></td>
    <td><strong><font color="#0000FF"><? echo $dataalteracao; ?></font></strong></td>
    <td><strong>Hora da Altera&ccedil;&atilde;o </strong></td>
    <td><strong><font color="#0000FF"><? echo $horaalteracao; ?></font></strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
mysql_close($conexao);
?>
