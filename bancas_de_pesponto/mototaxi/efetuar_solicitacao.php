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
<title>SOLICITA&Ccedil;&Atilde;O DE MOTOTAXI</title>
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




<form name="form1" method="post" action="informe_cpf_para_solicitacao.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?
$cpf = $_POST['cpf'];


$sql = "SELECT * FROM clientes where cpf = '$cpf'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo_cli = $linha[0];
$nome_cli = $linha[1];
$sexo_cli = $linha[2];
$estadocivil_cli = $linha[3];
//$cpf_cli = $linha[4];
$rg_cli = $linha[5];
$orgao_cli = $linha[6];
$emissao_cli = $linha[7];
$data_nasc_cli = $linha[8];
$pai_cli = $linha[9];
$mae_cli = $linha[10];
$endereco_cli = $linha[11];
$numero_cli = $linha[12];
$bairro_cli = $linha[13];
$complemento_cli = $linha[14];
$cidade_cli = $linha[15];
$estado_cli = $linha[16];
$cep_cli = $linha[17];
$telefone_cli = $linha[18];
$celular_cli = $linha[19];
$email_cli = $linha[20];
$operador_cli = $linha[21];
$cel_operador_cli = $linha[22];
$email_operador_cli = $linha[23];
$estabelecimento_cli = $linha[24];
$cidade_estabelecimento_cli = $linha[25];
$tel_estabelecimento_cli = $linha[26];
$email_estabelecimento_cli = $linha[27];
$obs_cli = $linha[28];
$datacadastro_cli = $linha[29];
$horacadastro_cli = $linha[30];
$dataalteracao_cli = $linha[31];
$horaalteracao_cli = $linha[32];
$operador_alterou_cli = $linha[33];
$cel_operador_alterou_cli = $linha[34];
$email_operador_alterou_cli = $linha[35];
$estabelecimento_alterou_cli = $linha[36];
$cidade_estabelecimento_alterou_cli = $linha[37];
$tel_estabelecimento_alterou_cli = $linha[38];
$email_estabelecimento_alterou_cli = $linha[39];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];
$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];


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


$nome = $linha[1];
$celular = $linha[19];
$email = $linha[20];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];

?>
<? } ?>
<form name="form1" method="post" action="grava_solicitacao.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">ALLCRED FINANCEIRA - SOLICITA&Ccedil;&Atilde;O DE SERVI&Ccedil;O DE MOTOTAXI </font></strong></div></td>
    </tr>
    <tr>
      <td width="16%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Data da Solicita&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo date('d-m-Y'); ?>
        <input name="data" type="hidden" id="dataproposta3" value="<? echo date('d-m-Y'); ?>">
      </font></strong></td>
      <td>Hora da Solicita&ccedil;&atilde;o </td>
      <td>                <strong></strong>
        <strong><font color="#0000FF"><? echo date('H:i:s'); ?></font></strong>
        <input name="hora" type="hidden" id="horaproposta3" value="<? echo date('H:i:s'); ?>">
        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-Y'); ?>">        
        <strong><font color="#0000FF">
          </font></strong></td>
    </tr>
    <tr>
      <td>C&oacute;digo do cliente </td>
      <td><strong><font color="#0000FF"><? echo $codigo_cli; ?>
            <input name="cod_cli" type="hidden" id="data" value="<? echo $codigo_cli; ?>">
</font></strong></td>
      <td>Status</td>
      <td><strong><font color="#0000FF"><? echo Aguardando_Aprovação; ?>
            <input name="status" type="hidden" id="status2" value="<? echo Aguardando_Aprovação; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="clifor" type="text" id="clifor" value="<? echo $nome_cli; ?>" size="50" maxlength="50"></td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>"></td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco2" value="<? echo $endereco_cli; ?>" size="50" maxlength="50"></td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero" value="<? echo $numero_cli; ?>" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>Bairro</td>
      <td><input name="bairro" type="text" id="bairro2" value="<? echo $bairro_cli; ?>" size="50" maxlength="50"></td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="complemento" value="<? echo $complemento_cli; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade2" value="<? echo $cidade_cli; ?>" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><input name="estado" type="text" id="estado" value="<? echo $estado_cli; ?>"></td>
    </tr>
    <tr>
      <td>Motivo da Solicita&ccedil;&atilde;o </td>
      <td><input name="motivo" type="text" id="cep2" size="50" maxlength="50">
      </td>
      <td>Quantidade de corridas </td>
      <td><input name="quant" type="text" id="quant" size="10"></td>
    </tr>
    <tr>
      <td>Valor da corrida R$ </td>
      <td><input name="valor" type="text" id="valor"></td>
      <td>Total</td>
      <td>Ser&aacute; calculado ap&oacute;s a conclus&atilde;o </td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador_solicitante" type="hidden" id="operador3" value="<? echo $nome; ?>">
        <input name="cel_operador_solicitante" type="hidden" id="cel_operador_solicitante" value="<? echo $celular; ?>">
        <input name="email_operador_solicitante" type="hidden" id="email_operador_solicitante" value="<? echo $email; ?>">
        <input name="estabelecimento_operador_solicitante" type="hidden" id="estabelecimento_operador_solicitante" value="<? echo $estabelecimento; ?>">
        <input name="cidade_estabelecimento_solicitante" type="hidden" id="cidade_estabelecimento_solicitante" value="<? echo $cidade_estabelecimento; ?>">
        <input name="tel_estabelecimento_solicitante" type="hidden" id="tel_estabelecimento_solicitante" value="<? echo $tel_estabelecimento; ?>">
        <input name="email_estabelecimento_solicitante" type="hidden" id="email_estabelecimento_solicitante" value="<? echo $email_estabelecimento; ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou">
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
      <td colspan="2"><strong>Operador Solicitante: <br>
      </strong><strong><font color="#0000FF"><? echo $nome; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
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
