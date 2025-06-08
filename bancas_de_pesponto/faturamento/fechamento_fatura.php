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
<title>Faturamento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
.style1 {color: #FFFFFF}
.style4 {color: #000000}
.style5 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';


?>

<?

$num_fatura_fechar = $_POST['num_fatura_fechar'];
$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];
$codigo_cliente = $_POST['codigo_cliente'];

$datafechamento = $_POST['datafechamento'];
$horafechamento = $_POST['horafechamento'];
$diafechamento = $_POST['diafechamento'];
$mesfechamento = $_POST['mesfechamento'];
$anofechamento = $_POST['anofechamento'];
$recebimento = $_POST['recebimento'];

$quant_parc = $_POST['quant_parc'];
$intervalo = $_POST['intervalo'];

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];

?>

<body>
<table width="100%" bgcolor="#ffffff"  border="0">
        <tr valign="top">
          <td width="36%" height="23">
<?
$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); 

}
?>
</td>
          <td width="37%" valign="middle"><div align="center">          </div></td>
          <td width="27%" height="23">&nbsp;</td>
        </tr>
      </table>
      <p>      <form name="form1" method="post" action="../index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$nome_operador = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}
?>
      </form>
<p><strong></strong></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%"><span class="style5">Faturamento N&ordm; <? echo $num_fatura_fechar; ?></span></td>
    <td width="27%">&nbsp;</td>
    <td width="40%"><strong><strong><strong> TOTAL DESTA FATURA
      <?


$sql = "select sum(total_geral) as total_orcamentos from orcamentos where num_fatura = '$num_fatura_fechar'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_orcamentos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
}
else{
echo "R$ ".$valor_total_formatado;
}

?>
    </strong></strong></strong></td>
  </tr>
</table>
<?


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`faturamento` set `num_fatura` = '$num_fatura_fechar',`nfantasia` = '$nfantasia_cliente',`cnpj` = '$cnpj_cliente',`operador` = '$nome_operador',`status` = 'Fechado',`total_fatura` = '$valor_total',`codigo_cliente` = '$codigo_cliente',`datafechamento` = '$datafechamento',`horafechamento` = '$horafechamento',`diafechamento` = '$diafechamento',`mesfechamento` = '$mesfechamento',`anofechamento` = '$anofechamento',`recebimento` = '$recebimento' where `faturamento`. `num_fatura` = '$num_fatura_fechar' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao fechar esse faturamento....Tente novamente!");

echo "Faturamento fechado com sucesso!<br><br>";



$sql = "SELECT * FROM faturamento where num_fatura = '$num_fatura_fechar'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_fatura_fechado = $linha[0];
$status = $linha[1];
$razaosocial = $linha[2];
$nfantasia_cliente = $linha[3];

$endereco = $linha[4];
$numero = $linha[5];
$bairro = $linha[6];
$cidade = $linha[7];
$estado = $linha[8];
$cep = $linha[9];
$cnpj_cliente = $linha[10];
$inscr_est = $linha[11];

$data_fechamento = $linha[20];
$hora_fechamento = $linha[21];
$diafechamento = $linha[22];
$mesfechamento = $linha[23];
$anofechamento = $linha[24];

}


?>


<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_gerente = $linha[1];
$email_gerente = $linha[20];
$funcao_gerente = $linha[43];

$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}

	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	//$email_ivan   =   "digicompras@digicompras.com.br";
	$email_suporte1   =   $email_empresa;
	//$email_suporte2   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! O(A) $nome_gerente!   \n";
	$mens  .=  "Você finalizpu uma fatura confira as informações abaixo! \n\n";
	
	$mens  .=  "Nº da Fatura: ".$num_fatura_fechado."                                                       \n";
	$mens  .=  "Data do fechamento: ".$data_fechamento."                                                    \n";
	$mens  .=  "Hora do fechamento: ".$hora_fechamento."                                                    \n\n";
	
	$mens  .=  "Cliente: ".$nfantasia_cliente."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_cliente."                                                    \n";
	$mens  .=  "Telefone: ".$tel_cliente."                                                    \n";
	$mens  .=  "E-Mail: ".$email_cliente."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_empresa, "Faturamento Nº ".$num_fatura_fechado." finalizado! Verifique no sistema!",$mens,"From:".$email_empresa);

?>
<table width="100%"  border="1">
  <tr bgcolor="ffffff">
    <td><div align="center"><span class="style3">N&ordm; Or&ccedil;amento </span></div></td>
    <td><div align="center" class="style3">Cliente </div></td>
    <td><div align="center" class="style3">CNPJ / CPF</div></td>
    <td><div align="center" class="style3">Valor </div></td>
    <td><div align="center" class="style3">Prazo</div></td>
  </tr>
  <?
			  
			  
$sql = "SELECT * FROM orcamentos where num_fatura = '$num_fatura_fechar' order by codigo_orcamento asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_orcamento = $linha[0];
$nfantasia_cliente = $linha[3];
$cnpj_cliente = $linha[188];
$total_geral_cliente = $linha[123];
$prazo_cliente = $linha[125];
$operador_cliente = $linha[158];
$num_fatura = $linha[181];



?>
  <tr>
    <td width="7%"><div align="center" class="style3">
      <form name="form2" method="post" action="borderos.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? echo $codigo_orcamento; ?>
        <input name="num_bordero_suporte" type="hidden" id="num_bordero_suporte" value="<? echo $num_fatura; ?>">
        <strong><font color="#0000FF"> </font></strong>
      </form>
    </div></td>
    <td width="18%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
    <td width="11%"><div align="center" class="style3"><? echo $cnpj_cliente;?> </div></td>
    <td width="10%"><div align="center" class="style3"><? echo "R$ ".$total_geral_cliente;?> </div></td>
    <td width="3%"><div align="center" class="style3"><? echo $prazo_cliente; ?> </div></td>
    <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
    <? } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="33%"><div align="center">
      <table width="100%"  border="1">
        <tr>
          <td width="44%">Data do Faturamento </td>
          <td width="56%"><div align="center"><? echo $datafechamento;?> </div></td>
        </tr>
        <tr>
          <td colspan="2">Respons&aacute;vel pelo Faturamento</td>
        </tr>
        <tr>
          <td colspan="2"><? echo $nome_gerente; ?></td>
        </tr>
        <tr>
          <td colspan="2">Assinatura respons&aacute;vel pelo Faturamento </td>
        </tr>
        <tr>
          <td height="57" colspan="2">&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="33%">&nbsp;</td>
    <td width="34%"><div align="center"></div></td>
  </tr>
</table>

<?
$mensalidade = bcdiv($valor_total,$quant_parc,2);

$vencto1 = "$dia"."/"."$mes"."/"."$ano";


?>
<?
if($quant_parc>=1){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto1','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','1','$dia','$mes','$ano','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 01º parcela no contas a receber!");

}
?>

<?
$somadia2 = bcadd($dia,$intervalo);
if($somadia2>30){
$dia2 = bcsub($somadia2,30);
}else{
$dia2 = $somadia2;
}

$soma_vencto2 = bcadd($mes,1);

if($somadia2>30){

if($soma_vencto2>12){
$mes2 = "1";
}else{
$mes2 = $soma_vencto2;
}
}
else{
if($somadia2<=30){
$mes2 = $mes;
}
else{
$mes2 = $soma_vencto2;
}
}


if($soma_vencto2>12){
$ano2 = bcadd($ano,1);
}else{
$ano2 = $ano;
}
$vencto2 = "$dia2"."/"."$mes2"."/"."$ano2";

if($quant_parc>=2){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto2','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','2','$dia2','$mes2','$ano2','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 02º mensalidade no contas a receber!");

}
?>

<?
$somadia3 = bcadd($dia2,$intervalo);
if($somadia3>30){
$dia3 = bcsub($somadia3,30);
}else{
$dia3 = $somadia3;
}

$soma_vencto3 = bcadd($mes2,1);

if($somadia3>30){

if($soma_vencto3>12){
$mes3 = "1";
}else{
$mes3 = $soma_vencto3;
}
}
else{
if($somadia3<=30){
$mes3 = $mes2;
}
else{
$mes3 = $soma_vencto3;
}
}



if($soma_vencto3>12){
$ano3 = bcadd($ano2,1);
}else{
$ano3 = $ano2;
}
$vencto3 = "$dia3"."/"."$mes3"."/"."$ano3";

if($quant_parc>=3){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto3','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','3','$dia3','$mes3','$ano3','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 03º mensalidade no contas a receber!");

}
?>

<?
$somadia4 = bcadd($dia3,$intervalo);
if($somadia4>30){
$dia4 = bcsub($somadia4,30);
}else{
$dia4 = $somadia4;
}

$soma_vencto4 = bcadd($mes3,1);

if($somadia4>30){

if($soma_vencto4>12){
$mes4 = "1";
}else{
$mes4 = $soma_vencto4;
}
}
else{
if($somadia4<=30){
$mes4 = $mes3;
}
else{
$mes4 = $soma_vencto4;
}
}



if($soma_vencto4>12){
$ano4 = bcadd($ano3,1);
}else{
$ano4 = $ano3;
}
$vencto4 = "$dia4"."/"."$mes4"."/"."$ano4";

if($quant_parc>=4){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto4','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','4','$dia4','$mes4','$ano4','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 04º mensalidade no contas a receber!");

}
?>

<?
$somadia5 = bcadd($dia4,$intervalo);
if($somadia5>30){
$dia5 = bcsub($somadia5,30);
}else{
$dia5 = $somadia5;
}

$soma_vencto5 = bcadd($mes4,1);

if($somadia5>30){

if($soma_vencto5>12){
$mes5 = "1";
}else{
$mes5 = $soma_vencto5;
}
}
else{
if($somadia5<=30){
$mes5 = $mes4;
}
else{
$mes5 = $soma_vencto5;
}
}



if($soma_vencto5>12){
$ano5 = bcadd($ano4,1);
}else{
$ano5 = $ano4;
}
$vencto5 = "$dia5"."/"."$mes5"."/"."$ano5";

if($quant_parc>=5){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto5','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','5','$dia5','$mes5','$ano5','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 05º mensalidade no contas a receber!");

}
?>

<?
$somadia6 = bcadd($dia5,$intervalo);
if($somadia6>30){
$dia6 = bcsub($somadia6,30);
}else{
$dia6 = $somadia6;
}

$soma_vencto6 = bcadd($mes5,1);

if(somadia6>30){

if($soma_vencto6>12){
$mes6 = "1";
}else{
$mes6 = $soma_vencto6;
}
}
else{
if($somadia6<=30){
$mes6 = $mes5;
}
else{
$mes6 = $soma_vencto6;
}
}



if($soma_vencto6>12){
$ano6 = bcadd($ano5,1);
}else{
$ano6 = $ano5;
}
$vencto6 = "$dia6"."/"."$mes6"."/"."$ano6";

if($quant_parc>=6){
$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,mensalidade,vencto,quant_parc,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano,num_fatura,intervalo) values('$codigo_cliente','$datacadastro','$horacadastro','$nfantasia_cliente','$razaosocial','$cnpj_cliente','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$mensalidade','$vencto6','$quant_parc','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','6','$dia6','$mes6','$ano6','$num_fatura_fechar','$intervalo')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 06º mensalidade no contas a receber!");

}
?>

<?

if($mes6<=9){
$soma_vencto7 = bcadd($mes6,1);
}
else{
$soma_vencto7 = bcadd($mes6,1);
}
if($soma_vencto7>12){
$mes7 = "1";
}else{
$mes7 = $soma_vencto7;
}
if($soma_vencto7>12){
$ano7 = bcadd($ano6,1);
}else{
$ano7 = $ano6;
}
$vencto7 = "$dia"."/"."$mes7"."/"."$ano7";

if($quant_parc>=7){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto7','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','7','$dia','$mes7','$ano7')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 07º mensalidade no contas a receber!");

}
?>

<?

if($mes7<=9){
$soma_vencto8 = bcadd($mes7,1);
}
else{
$soma_vencto8 = bcadd($mes7,1);
}
if($soma_vencto8>12){
$mes8 = "1";
}else{
$mes8 = $soma_vencto8;
}
if($soma_vencto8>12){
$ano8 = bcadd($ano7,1);
}else{
$ano8 = $ano7;
}
$vencto8 = "$dia"."/"."$mes8"."/"."$ano8";

if($quant_parc>=8){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto8','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','8','$dia','$mes8','$ano8')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 08º mensalidade no contas a receber!");

}
?>

<?

if($mes8<=9){
$soma_vencto9 = bcadd($mes8,1);
}
else{
$soma_vencto9 = bcadd($mes8,1);
}
if($soma_vencto9>12){
$mes9 = "1";
}else{
$mes9 = $soma_vencto9;
}
if($soma_vencto9>12){
$ano9 = bcadd($ano8,1);
}else{
$ano9 = $ano8;
}
$vencto9 = "$dia"."/"."$mes9"."/"."$ano9";

if($quant_parc>=9){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto9','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','9','$dia','$mes9','$ano9')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 09º mensalidade no contas a receber!");

}
?>

<?

if($mes9<=9){
$soma_vencto10 = bcadd($mes9,1);
}
else{
$soma_vencto10 = bcadd($mes9,1);
}
if($soma_vencto10>12){
$mes10 = "1";
}else{
$mes10 = $soma_vencto10;
}
if($soma_vencto10>12){
$ano10 = bcadd($ano9,1);
}else{
$ano10 = $ano9;
}
$vencto10 = "$dia"."/"."$mes10"."/"."$ano10";

if($quant_parc>=10){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto10','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','10','$dia','$mes10','$ano10')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 10º mensalidade no contas a receber!");

}
?>

<?

if($mes10<=9){
$soma_vencto11 = bcadd($mes10,1);
}
else{
$soma_vencto11 = bcadd($mes10,1);
}
if($soma_vencto11>12){
$mes11 = "1";
}else{
$mes11 = $soma_vencto11;
}
if($soma_vencto11>12){
$ano11 = bcadd($ano10,1);
}else{
$ano11 = $ano10;
}
$vencto11 = "$dia"."/"."$mes11"."/"."$ano11";

if($quant_parc>=11){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto11','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','11','$dia','$mes11','$ano11')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 11º mensalidade no contas a receber!");

}
?>

<?

if($mes11<=9){
$soma_vencto12 = bcadd($mes11,1);
}
else{
$soma_vencto12 = bcadd($mes11,1);
}
if($soma_vencto12>12){
$mes12 = "1";
}else{
$mes12 = $soma_vencto12;
}
if($soma_vencto12>12){
$ano12 = bcadd($ano11,1);
}else{
$ano12 = $ano11;
}
$vencto12 = "$dia"."/"."$mes12"."/"."$ano12";

if($quant_parc>=12){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto12','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','12','$dia','$mes12','$ano12')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 12º mensalidade no contas a receber!");

}
?>

<?

if($mes12<=9){
$soma_vencto13 = bcadd($mes12,1);
}
else{
$soma_vencto13 = bcadd($mes12,1);
}
if($soma_vencto13>12){
$mes13 = "1";
}else{
$mes13 = $soma_vencto13;
}
if($soma_vencto13>12){
$ano13 = bcadd($ano12,1);
}else{
$ano13 = $ano12;
}
$vencto13 = "$dia"."/"."$mes13"."/"."$ano13";

if($quant_parc>=13){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto13','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','13','$dia','$mes13','$ano13')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 13º mensalidade no contas a receber!");

}
?>

<?

if($mes13<=9){
$soma_vencto14 = bcadd($mes13,1);
}
else{
$soma_vencto14 = bcadd($mes13,1);
}
if($soma_vencto14>12){
$mes14 = "1";
}else{
$mes14 = $soma_vencto14;
}
if($soma_vencto14>12){
$ano14 = bcadd($ano13,1);
}else{
$ano14 = $ano13;
}
$vencto14 = "$dia"."/"."$mes14"."/"."$ano14";

if($quant_parc>=14){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto14','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','14','$dia','$mes14','$ano14')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 14º mensalidade no contas a receber!");

}
?>

<?

if($mes14<=9){
$soma_vencto15 = bcadd($mes14,1);
}
else{
$soma_vencto15 = bcadd($mes14,1);
}
if($soma_vencto15>12){
$mes15 = "1";
}else{
$mes15 = $soma_vencto15;
}
if($soma_vencto15>12){
$ano15 = bcadd($ano14,1);
}else{
$ano15 = $ano14;
}
$vencto15 = "$dia"."/"."$mes15"."/"."$ano15";

if($quant_parc>=15){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto15','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','15','$dia','$mes15','$ano15')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 15º mensalidade no contas a receber!");

}
?>

<?

if($mes15<=9){
$soma_vencto16 = bcadd($mes15,1);
}
else{
$soma_vencto16 = bcadd($mes15,1);
}
if($soma_vencto16>12){
$mes16 = "1";
}else{
$mes16 = $soma_vencto16;
}
if($soma_vencto16>12){
$ano16 = bcadd($ano15,1);
}else{
$ano16 = $ano15;
}
$vencto16 = "$dia"."/"."$mes16"."/"."$ano16";

if($quant_parc>=16){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto16','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','16','$dia','$mes16','$ano16')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 16º mensalidade no contas a receber!");

}
?>

<?

if($mes16<=9){
$soma_vencto17 = bcadd($mes16,1);
}
else{
$soma_vencto17 = bcadd($mes16,1);
}
if($soma_vencto17>12){
$mes17 = "1";
}else{
$mes17 = $soma_vencto17;
}
if($soma_vencto17>12){
$ano17 = bcadd($ano16,1);
}else{
$ano17 = $ano16;
}
$vencto17 = "$dia"."/"."$mes17"."/"."$ano17";

if($quant_parc>=17){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto17','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','17','$dia','$mes17','$ano17')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 17º mensalidade no contas a receber!");

}
?>

<?

if($mes17<=9){
$soma_vencto18 = bcadd($mes17,1);
}
else{
$soma_vencto18 = bcadd($mes17,1);
}
if($soma_vencto18>12){
$mes18 = "1";
}else{
$mes18 = $soma_vencto18;
}
if($soma_vencto18>12){
$ano18 = bcadd($ano17,1);
}else{
$ano18 = $ano17;
}
$vencto18 = "$dia"."/"."$mes18"."/"."$ano18";

if($quant_parc>=18){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto18','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','18','$dia','$mes18','$ano18')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 18º mensalidade no contas a receber!");

}
?>

<?

if($mes18<=9){
$soma_vencto19 = bcadd($mes18,1);
}
else{
$soma_vencto19 = bcadd($mes18,1);
}
if($soma_vencto19>12){
$mes19 = "1";
}else{
$mes19 = $soma_vencto19;
}
if($soma_vencto19>12){
$ano19 = bcadd($ano18,1);
}else{
$ano19 = $ano18;
}
$vencto19 = "$dia"."/"."$mes19"."/"."$ano19";

if($quant_parc>=19){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto19','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','19','$dia','$mes19','$ano19')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 19º mensalidade no contas a receber!");

}
?>

<?

if($mes19<=9){
$soma_vencto20 = bcadd($mes19,1);
}
else{
$soma_vencto20 = bcadd($mes19,1);
}
if($soma_vencto20>12){
$mes20 = "1";
}else{
$mes20 = $soma_vencto20;
}
if($soma_vencto20>12){
$ano20 = bcadd($ano19,1);
}else{
$ano20 = $ano19;
}
$vencto20 = "$dia"."/"."$mes20"."/"."$ano20";

if($quant_parc>=20){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto20','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','20','$dia','$mes20','$ano20')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 20º mensalidade no contas a receber!");

}
?>

<?

if($mes20<=9){
$soma_vencto21 = bcadd($mes20,1);
}
else{
$soma_vencto21 = bcadd($mes20,1);
}
if($soma_vencto21>12){
$mes21 = "1";
}else{
$mes21 = $soma_vencto21;
}
if($soma_vencto21>12){
$ano21 = bcadd($ano20,1);
}else{
$ano21 = $ano20;
}
$vencto21 = "$dia"."/"."$mes21"."/"."$ano21";

if($quant_parc>=21){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto21','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','21','$dia','$mes21','$ano21')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 21º mensalidade no contas a receber!");

}
?>

<?

if($mes21<=9){
$soma_vencto22 = bcadd($mes21,1);
}
else{
$soma_vencto22 = bcadd($mes21,1);
}
if($soma_vencto22>12){
$mes22 = "1";
}else{
$mes22 = $soma_vencto22;
}
if($soma_vencto22>12){
$ano22 = bcadd($ano21,1);
}else{
$ano22 = $ano21;
}
$vencto22 = "$dia"."/"."$mes22"."/"."$ano22";

if($quant_parc>=22){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto22','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','22','$dia','$mes22','$ano22')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 22º mensalidade no contas a receber!");

}
?>

<?

if($mes22<=9){
$soma_vencto23 = bcadd($mes22,1);
}
else{
$soma_vencto23 = bcadd($mes22,1);
}
if($soma_vencto23>12){
$mes23 = "1";
}else{
$mes23 = $soma_vencto23;
}
if($soma_vencto23>12){
$ano23 = bcadd($ano22,1);
}else{
$ano23 = $ano22;
}
$vencto23 = "$dia"."/"."$mes23"."/"."$ano23";

if($quant_parc>=23){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto23','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','23','$dia','$mes23','$ano23')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 23º mensalidade no contas a receber!");

}
?>

<?

if($mes23<=9){
$soma_vencto24 = bcadd($mes23,1);
}
else{
$soma_vencto24 = bcadd($mes23,1);
}
if($soma_vencto24>12){
$mes24 = "1";
}else{
$mes24 = $soma_vencto24;
}
if($soma_vencto24>12){
$ano24 = bcadd($ano23,1);
}else{
$ano24 = $ano23;
}
$vencto24 = "$dia"."/"."$mes24"."/"."$ano24";

if($quant_parc>=24){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto24','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','24','$dia','$mes24','$ano24')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 24º mensalidade no contas a receber!");

}
?>

<?

if($mes24<=9){
$soma_vencto25 = bcadd($mes24,1);
}
else{
$soma_vencto25 = bcadd($mes24,1);
}
if($soma_vencto25>12){
$mes25 = "1";
}else{
$mes25 = $soma_vencto25;
}
if($soma_vencto25>12){
$ano25 = bcadd($ano24,1);
}else{
$ano25 = $ano24;
}
$vencto25 = "$dia"."/"."$mes25"."/"."$ano25";

if($quant_parc>=25){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto25','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','25','$dia','$mes25','$ano25')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 25º mensalidade no contas a receber!");

}
?>

<?

if($mes25<=9){
$soma_vencto26 = bcadd($mes25,1);
}
else{
$soma_vencto26 = bcadd($mes25,1);
}
if($soma_vencto26>12){
$mes26 = "1";
}else{
$mes26 = $soma_vencto26;
}
if($soma_vencto26>12){
$ano26 = bcadd($ano25,1);
}else{
$ano26 = $ano25;
}
$vencto26 = "$dia"."/"."$mes26"."/"."$ano26";

if($quant_parc>=26){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto26','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','26','$dia','$mes26','$ano26')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 26º mensalidade no contas a receber!");

}
?>

<?

if($mes26<=9){
$soma_vencto27 = bcadd($mes26,1);
}
else{
$soma_vencto27 = bcadd($mes26,1);
}
if($soma_vencto27>12){
$mes27 = "1";
}else{
$mes27 = $soma_vencto27;
}
if($soma_vencto27>12){
$ano27 = bcadd($ano26,1);
}else{
$ano27 = $ano26;
}
$vencto27 = "$dia"."/"."$mes27"."/"."$ano27";

if($quant_parc>=27){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto27','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','27','$dia','$mes27','$ano27')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 27º mensalidade no contas a receber!");

}
?>

<?

if($mes27<=9){
$soma_vencto28 = bcadd($mes27,1);
}
else{
$soma_vencto28 = bcadd($mes27,1);
}
if($soma_vencto28>12){
$mes28 = "1";
}else{
$mes28 = $soma_vencto28;
}
if($soma_vencto28>12){
$ano28 = bcadd($ano27,1);
}else{
$ano28 = $ano27;
}
$vencto28 = "$dia"."/"."$mes28"."/"."$ano28";

if($quant_parc>=28){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto28','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','28','$dia','$mes28','$ano28')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 28º mensalidade no contas a receber!");

}
?>

<?

if($mes28<=9){
$soma_vencto29 = bcadd($mes28,1);
}
else{
$soma_vencto29 = bcadd($mes28,1);
}
if($soma_vencto29>12){
$mes29 = "1";
}else{
$mes29 = $soma_vencto29;
}
if($soma_vencto29>12){
$ano29 = bcadd($ano28,1);
}else{
$ano29 = $ano28;
}
$vencto29 = "$dia"."/"."$mes29"."/"."$ano29";

if($quant_parc>=29){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto29','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','29','$dia','$mes29','$ano29')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 29º mensalidade no contas a receber!");

}
?>

<?

if($mes29<=9){
$soma_vencto30 = bcadd($mes29,1);
}
else{
$soma_vencto30 = bcadd($mes29,1);
}
if($soma_vencto30>12){
$mes30 = "1";
}else{
$mes30 = $soma_vencto30;
}
if($soma_vencto30>12){
$ano30 = bcadd($ano29,1);
}else{
$ano30 = $ano29;
}
$vencto30 = "$dia"."/"."$mes30"."/"."$ano30";

if($quant_parc>=30){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade,dia,mes,ano) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto30','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','30','$dia','$mes30','$ano30')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 30º mensalidade no contas a receber!");

}
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="30%"><form action="duplicatas.php" method="post" name="form2" target="_blank">
      <input name="num_fatura" type="hidden" id="num_fatura" value="<? echo $num_fatura_fechar; ?>">
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj_cliente; ?>">
      <input type="submit" name="Submit5" value="Emitir Duplicatas">
    </form></td>
    <td width="64%">&nbsp;</td>
  </tr>
</table>

  <?
			  
			  
$sql = "SELECT * FROM orcamentos where num_fatura = '$num_fatura_fechar' order by codigo_orcamento asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_orcamento = $linha[0];
$nfantasia_cliente = $linha[3];
$cnpj_cliente = $linha[188];
$total_geral_cliente = $linha[123];
$prazo_cliente = $linha[125];
$operador_cliente = $linha[158];
$num_fatura = $linha[181];



$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$comando = "update `$linha[1]`.`orcamentos` set `codigo_orcamento` = '$codigo_orcamento',`status_fatura` = 'Faturado',`data_fatura` = '$datafechamento',`dia_fatura` = '$diafechamento',`mes_fatura` = '$mesfechamento',`ano_fatura` = '$anofechamento',`hora_fatura` = '$horafechamento' where `orcamentos`. `codigo_orcamento` = '$codigo_orcamento'";

mysql_query($comando,$conexao);
}


}
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
