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
<title>Recibo de quita&ccedil;&atilde;o de t&iacute;tulo</title>
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
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-size: 14px}
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
  
<p>
  <? } ?>
  <?
// dados do aluno
$num_contas_a_receber = $_POST['num_contas_a_receber'];

$codigo_cliente = $_POST['codigo_cliente'];

$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$razaosocial = $_POST['razaosocial'];
$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj = $_POST['cnpj'];
$mensalidade = $_POST['mensalidade'];
$vencto = $_POST['vencto'];
$juros_ativos = $_POST['juros_ativos'];
$descontos_concedidos = $_POST['descontos_concedidos'];

$valor_recebido = $mensalidade+$juros_ativos-$descontos_concedidos;
$historico = $_POST['historico'];
$num_fatura = $_POST['num_fatura'];
$num_agrupamento = $_POST['num_agrupamento'];
$inscr_est = $_POST['inscr_est'];
$num_boleto = $_POST['num_boleto'];
$modo_pagto = $_POST['modo_pagto'];
$num_mensalidade = $_POST['num_mensalidade'];
$quant_parc = $_POST['quant_parc'];
$quitacao = $_POST['quitacao'];


//dados do operador

$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];






?>
  
  <?

$comando = "insert into cx_entradas(num_contas_a_receber,codigo_cliente,datacadastro,horacadastro,dia,mes,ano,razaosocial,nfantasia_cliente,cnpj,mensalidade,vencto,juros_ativos,descontos_concedidos,valor_recebido,historico,num_fatura,num_agrupamento,inscr_est,num_boleto,modo_pagto,num_mensalidade,quant_parc,quitacao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou) values('$num_contas_a_receber','$codigo_cliente','$dataalteracao','$horaalteracao','$dia','$mes','$ano','$razaosocial','$nfantasia_cliente','$cnpj','$mensalidade','$vencto','$juros_ativos','$descontos_concedidos','$valor_recebido','$historico','$num_fatura','$num_agrupamento','$inscr_est','$num_boleto','$modo_pagto','$num_mensalidade','$quant_parc','$quitacao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou')";

mysql_query($comando,$conexao) or die("Erro ao registrar a entrada no Caixa!... Tente novamente");

echo "Entrada no caixa registrada com sucesso!<br><br>";



$sql = "SELECT * FROM cx_entradas order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_cx = $linha[0];
$num_contas_a_receber = $linha[1];
$razaosocial = $linha[2];
$nfantasia_cliente = $linha[3];
$datacadastro = $linha[4];
$horacadastro = $linha[5];
$codigo_cliente = $linha[6];
$cnpj = $linha[7];
$inscr_est = $linha[8];
$num_fatura = $linha[9];
$num_agrupamento = $linha[10];
$num_boleto = $linha[11];
$mensalidade = $linha[12];
$vencto = $linha[13];
$quant_parc = $linha[14];
$modo_pagto = $linha[15];
$juros_diarios = $linha[16];
$valor_recebido = $linha[17];
$quitacao = $linha[18];
$historico = $linha[35];
$dia = $linha[37];
$mes = $linha[38];
$ano = $linha[39];

$num_mensalidade = $linha[41];



$operador_alterou = $linha[28];
$cel_operador_alterou = $linha[29];
$email_operador_alterou = $linha[30];
$estabelecimento_alterou = $linha[31];
$cidade_estabelecimento_alterou = $linha[32];
$tel_estabelecimento_alterou = $linha[33];
$email_estabelecimento_alterou = $linha[34];


$juros_ativos = $linha[42];
$descontos_concedidos = $linha[43];


}
?>
  
  
  
  
  <?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$cidade_empresa = $linha[10];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Foi registrado uma entrada no caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";
	
	$mens  .=  "Código do Cliente : ".$codigo_cliente."                                                    \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia_cliente."                                                       \n";
	$mens  .=  "Nº Título : ".$num_contas_a_receber."                                                    \n";
	$mens  .=  "Nº da Parcela : ".$num_mensalidade." de ".$quant_parc."                                                    \n";
	$mens  .=  "Valor Original : R$ ".$mensalidade."                                                    \n";
	$mens  .=  "Vencimento: ".$vencto."                                                    \n";
	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";
	$mens  .=  "Quitação : ".$quitacao."                                                    \n";
	$mens  .=  "Historico: ".$historico."                                                       \n";
	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";
	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";
	
	$mens  .=  "Operador que efetuou o cadastro: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Entrada no caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>
  
  
  
  
  
  <?
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$num_contas_a_receber',`valor_recebido` = '$valor_recebido',`quitacao` = '$quitacao',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`historico` = '$historico' where `contas_a_receber`. `codigo` = '$num_contas_a_receber' limit 1 ";
}

mysql_query($comando,$conexao);



?>
</p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="34%"><form name="form1" method="post" action="../ch_recebidos/registro_ch_recebidos.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="num_contas_a_receber" type="hidden" id="num_contas_a_receber" value="<? echo $num_contas_a_receber; ?>">
      <? if($modo_pagto<>Dinheiro){ echo "<input type='submit' name='Submit' value='Registrar Cheques recebidos'>"; } ?>
    </form></td>
    <td width="31%"><form name="form1" method="post" action="contas_a_receber_agrupamento_de_mensalidades.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="nfantasia_cliente" type="hidden" id="codigo_aluno3" value="<? echo $nfantasia_cliente; ?>">
      <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj; ?>">
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="35%">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="1">
  <tr>
    <td colspan="4">
<?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); ?>
<?
if($reg==1){
echo "</tr>";
$reg=0;
}
}
?>	</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><strong>RECIBO DE PAGAMENTO DE T&Iacute;TULO N&ordm; <? echo $codigo_cx; ?></strong></div></td>
  </tr>
  <tr>
    <td width="16%"><span class="style1">C&oacute;digo do Cliente</span></td>
    <td width="31%"><span class="style1"><? echo $codigo_cliente; ?></span></td>
    <td width="17%"><span class="style1">N&ordm; do Titulo</span></td>
    <td width="36%"><span class="style1"><? echo $num_contas_a_receber; ?></span></td>
  </tr>
  <tr>
    <td><span class="style1">Raz&atilde;o Social</span></td>
    <td><span class="style1"><? echo $razaosocial; ?></span></td>
    <td><span class="style1">N&ordm; Fatura</span></td>
    <td><span class="style1"><? echo $num_fatura; ?></span></td>
  </tr>
  <tr>
    <td><span class="style1">Nome Fantasia</span></td>
    <td><span class="style1"><? echo $nfantasia_cliente; ?></span></td>
    <td><span class="style1">N&ordm; Agrupamento</span></td>
    <td><span class="style1"><? echo $num_agrupamento; ?></span></td>
  </tr>
  <tr>
    <td><span class="style1">CNPJ/CPF</span></td>
    <td><span class="style1"><? echo $cnpj; ?></span></td>
    <td><span class="style2"><strong>N&ordm; Boleto</strong></span></td>
    <td><span class="style1"><? echo $num_boleto; ?></span></td>
  </tr>
  <tr>
    <td><span class="style2"><strong>Valor original do documento </strong></span></td>
    <td><span class="style2"><strong><? echo $mensalidade; ?></strong></span></td>
    <td><span class="style1">Inscr Estadual</span></td>
    <td><span class="style2"><strong><? echo $inscr_est; ?></strong></span></td>
  </tr>
  <tr>
    <td><span class="style1">Vencimento</span></td>
    <td><span class="style2"><strong><? echo $vencto; ?></strong></span></td>
    <td><span class="style2"><strong>Modo Pagto</strong></span></td>
    <td><span class="style2"><strong><? echo $modo_pagto; ?></strong></span></td>
  </tr>
  <tr>
    <td><strong>Juros Ativos</strong></td>
    <td><strong><strong><? echo $juros_ativos; ?></strong></strong></td>
    <td><strong>Parcela</strong></td>
    <td><span class="style2"><strong><? echo $num_mensalidade; ?></strong><strong> de <? echo $quant_parc; ?></strong></span></td>
  </tr>
  <tr>
    <td><strong>Descontos Concedidos</strong></td>
    <td><strong><strong><? echo $descontos_concedidos; ?></strong></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style1">Valor Recebido</span></td>
    <td><span class="style2"><strong><strong><? echo $valor_recebido; ?></strong></strong></span></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><strong><? echo "$cidade_empresa "."$dia "."do "."$mes"."de "."$ano"; ?></strong></div></td>
    <td colspan="2"><div align="center">___________________________________________</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="center"><? echo $operador_alterou; ?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>