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
-->
</style></head>

<?

require '../../../conect/conect.php';

$dia = date('d');
$mes = date('m');
$ano = date('Y');


			
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
// dados do aluno

$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];
$valor_recebido = $_POST['valor_recebido'];
$categoria_conta = $_POST['categoria_conta'];

//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$historico = $_POST['historico'];


// Observações





?>

<?

$comando = "insert into cx_entradas(nfantasia_cliente,datacadastro,horacadastro,horaabertura,valor_recebido,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,historico,dia,mes,ano,categoria_conta,num_mensalidade,quant_parc) values('$estabelecimento','$datacadastro','$horacadastro','$horacadastro','$valor_recebido','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$historico','$dia','$mes','$ano','$categoria_conta','1','1')";

mysql_query($comando,$conexao) or die("Erro ao abrir o Caixa!... Tente novamente");

echo "Abertura de caixa registrada com sucesso!<br><br> Tenha um òtimo dia de trabalho $operador";



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
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá Alessandra! Foi aberto o caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";

	$mens  .=  "Data de abertura: ".$datacadastro."                                                       \n";	
	$mens  .=  "Valor de abertura: ".$valor_recebido."                                                    \n";
	$mens  .=  "hora de abertura: ".$horaabertura."                                                       \n";
	
	$mens  .=  "Operador que abriu o caixa hoje: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Abertura de caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>


<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="23%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>