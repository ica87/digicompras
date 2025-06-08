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
<title>SOLICITA&Ccedil;&Atilde;O DE MOTOTAXI - APROVA&Ccedil;&Atilde;O/RECUSA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>




<form name="form1" method="post" action="informe_num_para_alterar_status_da_solicitacao.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?
$codigo = $_POST['codigo'];


$sql = "SELECT * FROM mototaxi where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$cpf = $linha[1];
$data = $linha[2];
$hora = $linha[3];
$mes_ano = $linha[4];
$cod_cli = $linha[5];
$clifor = $linha[6];
$endereco = $linha[7];
$numero = $linha[8];
$bairro = $linha[9];
$complemento = $linha[10];
$cidade = $linha[11];
$estado = $linha[12];
$motivo = $linha[13];
$quant = $linha[14];
$valor = $linha[15];
$total = $linha[16];
$obs = $linha[17];
$operador_solicitante = $linha[18];
$cel_operador_solicitante = $linha[19];
$email_operador_solicitante = $linha[20];
$estabelecimento_operador_solicitante = $linha[21];
$cidade_estabelecimento_solicitante = $linha[22];
$tel_estabelecimento_solicitante = $linha[23];
$email_estabelecimento_solicitante = $linha[24];
$operador_alterou = $linha[25];
$cel_operador_alterou = $linha[26];
$email_operador_alterou = $linha[27];
$estabelecimento_alterou = $linha[28];
$cidade_estabelecimento_alterou = $linha[29];
$tel_estabelecimento_alterou = $linha[30];
$email_estabelecimento_alterou = $linha[31];
$status = $linha[32];


?>
<? } ?>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];


?>
<? } ?>
<form name="form1" method="post" action="grava_alterar_status_da_solicitacao.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">ALLCRED FINANCEIRA - SOLICITA&Ccedil;&Atilde;O DE SERVI&Ccedil;O DE MOTOTAXI </font></strong></div></td>
    </tr>
    <tr>
      <td width="16%">N&ordm; Solicita&ccedil;&atilde;o </td>
      <td width="31%"><strong><font color="#0000FF"><? echo $codigo; ?>
            <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
</font></strong></td>
      <td width="22%">&nbsp;</td>
      <td width="31%"><strong><font color="#0000FF">
      </font></strong></td>
    </tr>
    <tr> 
      <td>Data da Solicita&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $data; ?>
      </font></strong></td>
      <td>Hora da Solicita&ccedil;&atilde;o </td>
      <td>                <strong></strong>
        <strong><font color="#0000FF"><? echo $hora; ?></font></strong>
        <strong><font color="#0000FF">
          </font></strong></td>
    </tr>
    <tr>
      <td>C&oacute;digo do cliente </td>
      <td><strong><font color="#0000FF"><? echo $cod_cli; ?>
</font></strong></td>
      <td>Status</td>
      <td><strong><font color="#0000FF">
        <select name="status" id="select2">
          <option><? echo $status; ?></option>
          <option>Aprovada</option>
          <option>Recusada</option>
        </select>
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="mes_ano_status" type="hidden" id="mes_ano_status" value="<? echo date('m-Y'); ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><strong><font color="#0000FF"><? echo $clifor; ?></font></strong>      </td>
      <td>CPF</td>
      <td><strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><strong><font color="#0000FF"><? echo $endereco; ?></font></strong></td>
      <td>N&uacute;mero</td>
      <td><strong><font color="#0000FF"><? echo $numero; ?></font></strong></td>
    </tr>
    <tr>
      <td>Bairro</td>
      <td><strong><font color="#0000FF"><? echo $bairro; ?></font></strong></td>
      <td>Complemento</td>
      <td><strong><font color="#0000FF"><? echo $complemento; ?></font></strong></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><strong><font color="#0000FF"><? echo $cidade; ?></font></strong></td>
      <td>Estado</td>
      <td><strong><font color="#0000FF"><? echo $estado; ?></font></strong></td>
    </tr>
    <tr>
      <td>Motivo da Solicita&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $motivo; ?></font></strong> </td>
      <td>Quantidade de corridas </td>
      <td><strong><font color="#0000FF"><? echo $quant; ?></font></strong></td>
    </tr>
    <tr>
      <td>Valor da corrida R$ </td>
      <td><strong><font color="#0000FF"><? echo $valor; ?></font></strong></td>
      <td>Total</td>
      <td><strong><font color="#0000FF"><? echo $total; ?></font></strong></td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Concluir efetiva&ccedil;&atilde;o da solicita&ccedil;&atilde;o"> 
          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong>Operador Solicitante<br>
      </strong><strong><font color="#0000FF"><? echo $operador_solicitante; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_solicitante;; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_solicitante; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_operador_solicitante;; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_solicitante; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_solicitante; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_solicitante; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>
      <td>&nbsp;</td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
