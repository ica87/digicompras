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
<title>TELA DE IMPRESS&Atilde;O DE PROPOSTAS</title>
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

<?

$sql = "SELECT * FROM logo";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>



<form name="form1" method="post" action="javascript:window.close()">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Fechar">
</form>
<?
$num_proposta = $_POST['num_proposta'];
//$cpf = $_POST['cpf'];

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];
$nome_operador = $linha[1];
$tipo = $linha[2];
$estabelecimento_proposta = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$estadocivil = $linha[6];
$cpf = $linha[7];
$rg = $linha[8];
$orgao = $linha[9];
$emissao = $linha[10];
$data_nasc = $linha[11];
$pai = $linha[12];
$mae = $linha[13];
$endereco = $linha[14];
$numero = $linha[15];
$bairro = $linha[16];
$complemento = $linha[17];
$cidade = $linha[18];
$estado = $linha[19];
$cep = $linha[20];
$telefone = $linha[21];
$celular = $linha[22];
$email = $linha[23];
$num_beneficio = $linha[24];
$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];
$valor_credito = $linha[25];
$quant_parc = $linha[26];
$parcela = $linha[27];
$banco_pagto = $linha[28];
$num_banco = $linha[29];
$agencia = $linha[30];
$conta = $linha[31];
$operador = $linha[32];
$cel_operador = $linha[33];
$email_operador = $linha[34];
$estabelecimento = $linha[35];
$cidade_estabelecimento = $linha[36];
$tel_estabelecimento = $linha[37];
$email_estabelecimento = $linha[38];
$obs = $linha[39];
$dataproposta = $linha[40];
$horaproposta = $linha[41];
$dataalteracao = $linha[42];
$horaalteracao = $linha[43];
$operador_alterou = $linha[44];
$cel_operador_alterou = $linha[45];
$email_operador_alterou = $linha[46];
$estabelecimento_alterou = $linha[47];
$cidade_estabelecimento_alterou = $linha[48];
$tel_estabelecimento_alterou = $linha[49];
$email_estabelecimento_alterou = $linha[50];
$status = $linha[51];

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

$parc1 = $linha[52];
$banco1 = $linha[53];
$vencto1 = $linha[54];
$compra1 = $linha[55];

$parc2 = $linha[56];
$banco2 = $linha[57];
$vencto2 = $linha[58];
$compra2 = $linha[59];

$parc3 = $linha[60];
$banco3 = $linha[61];
$vencto3 = $linha[62];
$compra3 = $linha[63];

$parc4 = $linha[64];
$banco4 = $linha[65];
$vencto4 = $linha[66];
$compra4 = $linha[67];

$parc5 = $linha[68];
$banco5 = $linha[69];
$vencto5 = $linha[70];
$compra5 = $linha[71];

$parc6 = $linha[72];
$banco6 = $linha[73];
$vencto6 = $linha[74];
$compra6 = $linha[75];

$parc7 = $linha[76];
$banco7 = $linha[77];
$vencto7 = $linha[78];
$compra7 = $linha[79];
$tipo_proposta = $linha[83];
$bco_operacao = $linha[86];
$valor_liberado = $linha[97];
$obs2 = $linha[102];
$tabela = $linha[109];
$valor_total = $linha[113];
$valor_liquido_cliente = $linha[115];

}
?>
<?
$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$matricula = $linha[0];

}


?>
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
<form name="form1" method="post" action="">

<table width="100%" border="1" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4"> IMPRESS&Atilde;O DE PROPOSTA N&ordm; <? echo $num_proposta; ?></font></strong></div>        <div align="right"><strong></strong></div></td>
      <td><div align="center"><font size="5"><strong><font color="#0000FF" size="4">MATRICULA </font><font color="#0000FF"><? echo $matricula; ?></font></strong></font></div></td>
    </tr>
    <tr>
      <td>Perfil do cliente </td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $tipo; ?></font></strong></td>
      <td>Tipo da proposta </td>
      <td><strong><font color="#0000FF"><? echo $tipo_proposta; ?></font></strong></td>
    </tr>
    <tr> 
      <td>Tabela</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $tabela; ?>
      </font></strong></td>
      <td>Data da Proposta </td>
      <td>      <strong><font color="#0000FF"><? echo $dataproposta; ?></font></strong> Hora proposta <strong><font color="#0000FF"><? echo $horaproposta; ?></font></strong> </td>
    </tr>
    <tr>
      <td>Operador</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $nome_operador; ?>
      </font></strong></td>
      <td>Status</td>
      <td><strong><font color="#0000FF"><? echo $status; ?> </font></strong></td>
    </tr>
    <tr>
      <td>Estabelecimento</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?> </font></strong> </td>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF"> </font></strong></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></td>
      <td>CPF</td>
      <td>      <strong><font color="#0000FF"><? echo $cpf; ?></font></strong></td>
    </tr>
    <tr> 
      <td>N&ordm; Benef&iacute;cio </td>
      <td colspan="2">      <strong><font color="#0000FF"><? echo $num_beneficio; ?></font></strong></td>
      <td>N&ordm; Benef&iacute;cio 2 </td>
      <td><strong><font color="#0000FF"><? echo $num_beneficio2; ?></font> </strong>        </td>
    </tr>
    <tr>
      <td>N&ordm; Benef&iacute;cio 3 </td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $num_beneficio3; ?></font></strong></td>
      <td>N&ordm; Benef&iacute;cio 4 </td>
      <td><strong><font color="#0000FF"><? echo $num_beneficio4; ?></font></strong></td>
    </tr>
    <tr>
      <td>Data Nasc</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $data_nasc; ?></font></strong></td>
      <td>RG</td>
      <td><strong><font color="#0000FF"><? echo $rg; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="14%">&Oacute;rg&atilde;o</td>
      <td colspan="2">      <strong><font color="#0000FF"><? echo $orgao; ?></font></strong></td>
      <td width="21%">Emiss&atilde;o</td>
      <td width="33%">        </font><strong><font color="#0000FF"><? echo $emissao; ?></font></strong></td>
    </tr>
    <tr>
      <td>Pai</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $pai; ?></font></strong></td>
      <td>M&atilde;e</td>
      <td><strong><font color="#0000FF"><? echo $mae; ?></font></strong></td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $endereco; ?></font></strong></td>
      <td>N&uacute;mero</td>
      <td><strong><font color="#0000FF"><? echo $numero; ?></font></strong></td>
    </tr>
    <tr>
      <td>Bairro</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $bairro; ?></font></strong></td>
      <td>Complemento</td>
      <td><strong><font color="#0000FF"><? echo $complemento; ?></font></strong></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cidade; ?></font></strong></td>
      <td>Estado</td>
      <td>      <strong><font color="#0000FF"><? echo $estado; ?></font></strong></td>
    </tr>
    <tr>
      <td>Cep</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cep; ?></font></strong></td>
      <td>Sexo</td>
      <td><strong><font color="#0000FF"><? echo $sexo; ?></font></strong></td>
    </tr>
    <tr>
      <td>Estado Civil </td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $estadocivil; ?></font></strong></td>
      <td>Telefone</td>
      <td><strong><font color="#0000FF"><? echo $telefone; ?></font></strong></td>
    </tr>
    <tr>
      <td>Celular</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $celular; ?></font></strong></td>
      <td>E-Mail</td>
      <td><strong><font color="#0000FF"><? echo $email; ?></font></strong></td>
    </tr>
    <tr>
      <td><strong>Credito Solicitado </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo "R$ ". $valor_credito; ?></font></strong></td>
      <td><strong>Valor bruto da opera&ccedil;&atilde;o </strong></td>
      <td> <font color="#0000FF">
      <strong><font color="#0000FF"><? echo "R$ ".$valor_total; ?></font></strong> </font></td>
    </tr>
    <tr>
      <td><strong>Valor Lid cliente </strong></td>
      <td colspan="2"><strong><font color="#0000FF"><? echo "R$ ". $valor_liquido_cliente; ?></font></strong></td>
      <td><strong>Valor liberado </strong></td>
      <td><font color="#0000FF"><? echo "R$ ".$valor_liberado; ?></font></td>
    </tr>
    <tr>
      <td>Quant de parcelas </td>
      <td colspan="2"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $quant_parc; ?></font></strong></font></strong></td>
      <td>Valor parcela </td>
      <td><strong><font color="#0000FF"><? echo $parcela; ?></font></strong></td>
    </tr>
    <tr>
      <td>Banco Pgto </td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $banco_pagto; ?></font></strong></td>
      <td>N&ordm; Banco </td>
      <td><strong><font color="#0000FF"><? echo $num_banco; ?></font></strong></td>
    </tr>
    <tr>
      <td>Ag&ecirc;ncia</td>
      <td width="11%"><strong><font color="#0000FF"><? echo $agencia; ?></font></strong></td>
      <td width="21%"><div align="left">N&ordm; Conta <strong><font color="#0000FF"><? echo $conta; ?></font></strong></div></td>
      <td>Banco Opera&ccedil;&atilde;o </td>
      <td><strong><font color="#000000"><? echo $bco_operacao; ?></font></strong></td>
    </tr>
    <tr>
      <td><div align="center">Valor Parcela </div></td>
      <td colspan="2"><div align="center">Banco</div></td>
      <td><div align="center">Vencimento do contrato </div></td>
      <td><div align="center">Previs&atilde;o de compra em </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc1; ?></font></strong> </div></td>
      <td colspan="2">
        <div align="center"><strong><font color="#0000FF"><? echo $banco1; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto1; ?></font></strong> </div></td>
      <td>
        <div align="center"><strong><font color="#0000FF"><? echo $compra1; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><p align="center">
        <strong><font color="#0000FF"><? echo $parc2; ?></font></strong> </p></td>
      <td colspan="2">
        <div align="center"><strong><font color="#0000FF"><? echo $banco2; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto2; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $compra2; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc3; ?></font></strong> </div></td>
      <td colspan="2"><div align="center">
        <strong><font color="#0000FF"><? echo $banco3; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto3; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $compra3; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc4; ?></font></strong> </div></td>
      <td colspan="2"><div align="center">
        <strong><font color="#0000FF"><? echo $banco4; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto4; ?></font></strong> </div></td>
      <td>
        <div align="center"><strong><font color="#0000FF"><? echo $compra4; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc5; ?></font></strong> </div></td>
      <td colspan="2"><div align="center">
        <strong><font color="#0000FF"><? echo $banco5; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto5; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $compra5; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc6; ?></font></strong> </div></td>
      <td colspan="2"><div align="center">
        <strong><font color="#0000FF"><? echo $banco6; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto6; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $compra6; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $parc7; ?></font></strong> </div></td>
      <td colspan="2"><div align="center">
        <strong><font color="#0000FF"><? echo $banco7; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $vencto7; ?></font></strong> </div></td>
      <td><div align="center">
        <strong><font color="#0000FF"><? echo $compra7; ?></font></strong> </div></td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Parecer de Cr&eacute;dito</td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $obs2; ?></font></strong></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
