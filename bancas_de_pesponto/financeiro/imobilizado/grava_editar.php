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
// dados do investimento
$codigo = $_POST['codigo'];
$cod_objeto = $_POST['cod_objeto'];

$nfantasia = $_POST['nfantasia'];
$objeto = $_POST['objeto'];
$descricao = $_POST['descricao'];
$data_aquisicao = $_POST['data_aquisicao'];
$valor = $_POST['valor'];
$tempo_vida_util = $_POST['tempo_vida_util'];
$depreciacao_mensal = bcdiv($valor,$tempo_vida_util,2);
$data_saida = $_POST['data_saida'];
$hora_saida = $_POST['hora_saida'];
$obs = $_POST['obs'];
$motivo_saida = $_POST['motivo_saida'];
$valor_saida = $_POST['valor_saida'];
$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');
$dia_saida = date('d');
$mes_saida = date('m');
$ano_saida = date('Y');
$mes_ano_saida = date('m-Y');



//dados do operador

$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];





$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`imobilizado` set `codigo` = '$codigo',`cod_objeto` = '$cod_objeto',`nfantasia` = '$nfantasia',`objeto` = '$objeto',`descricao` = '$descricao',`data_aquisicao` = '$data_aquisicao',`valor` = '$valor',`tempo_vida_util` = '$tempo_vida_util',`data_saida` = '$data_saida',`hora_saida` = '$hora_saida',`obs` = '$obs',`motivo_saida` = '$motivo_saida',`valor_saida` = '$valor_saida',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`dia_saida` = '$dia_saida',`mes_saida` = '$mes_saida',`ano_saida` = '$ano_saida',`mes_ano_saida` = '$mes_ano_saida',`depreciacao_mensal` = '$depreciacao_mensal',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',
`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `imobilizado`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse lançamento de imobilizado");


echo "Lançamento de imobilizado alterado com sucesso<br><br>";
?>



<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>
<?
$sql = "SELECT * FROM imobilizado where cod_objeto = '$cod_objeto' limit 1";
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

$nfantasia2 = $linha[15];
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
</p>
<table width="100%"  border="1">
  <tr>
    <td colspan="4"><div align="center" class="style1">Registro de objeto no Imobilizado n&ordm; <? echo $codigo; ?></div></td>
  </tr>
  <tr>
    <td width="21%"><span class="style4">Data do lan&ccedil;amento </span></td>
    <td width="20%"><span class="style9"><? echo $datacadastro; ?></span></td>
    <td width="23%"><span class="style4">Hora do lan&ccedil;amento </span></td>
    <td width="36%"><span class="style9"><? echo $horacadastro; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Loja</strong></span></td>
    <td><span class="style9"><? echo $nfantasia2; ?></span></td>
    <td><span class="style4">Objeto</span></td>
    <td><span class="style9"><? echo $objeto; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">C&oacute;digo do Objeto </span></td>
    <td><span class="style10"><span class="style9"><? echo $cod_objeto; ?></span></span></td>
    <td><span class="style5"><strong>Descri&ccedil;&atilde;o</strong></span></td>
    <td><span class="style9"><? echo $descricao; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">Data da Aquisi&ccedil;&atilde;o</span></td>
    <td><span class="style10"><span class="style9"><? echo $data_aquisicao; ?></span></span></td>
    <td><span class="style5"><strong>Valor</strong></span></td>
    <td><span class="style10"><span class="style9"><? echo "R$ ".$valor; ?></span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">Tempo de vida &uacute;til</span></td>
    <td><span class="style10"><span class="style9"><? echo $tempo_vida_util; ?></span></span></td>
    <td><span class="style5"><strong>Deprecia&ccedil;&atilde;o mensal </strong></span></td>
    <td><span class="style10"><span class="style9"><? echo "R$ ".$depreciacao_mensal; ?></span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Observa&ccedil;&otilde;es</strong></span></td>
    <td colspan="3"><span class="style9"><? echo $obs; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro efetuado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador; ?> </font><font color="#0000FF"> </font></strong></td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
  </tr>
  <tr>
    <td><strong>Data do Registro </strong><br>
      <strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>
    <td><strong>Hora do registro </strong><br>
      <strong><font color="#0000FF"><? echo $horacadastro; ?></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro alterado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
  </tr>
  <tr>
    <td><strong>Data da altera&ccedil;&atilde;o</strong><br>
    <strong><font color="#0000FF"><? echo $dataalteracao; ?></font></strong><br>    </td>
    <td><strong>Hora da altera&ccedil;&atilde;o</strong><br>
      <strong><font color="#0000FF"><? echo $horaalteracao; ?></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
</body>
</html>
<?
mysql_close($conexao);
?>
