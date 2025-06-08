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
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

		  
		  
		  <?

// dados da proposta
$codigo = $_POST['codigo'];
$pago = $_POST['pago'];
$datapagto = $_POST['datapagto'];
$horapagto = $_POST['horapagto'];
$totalgeral = $_POST['totalgeral'];
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


$comando = "update `$linha[1]`.`mototaxi` set `codigo` = '$codigo',`pago` = '$pago',`datapagto` = '$datapagto',`horapagto` = '$horapagto',`totalgeral` = '$totalgeral',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `mototaxi`. `codigo` = '$codigo' ";
}

mysql_query($comando,$conexao) or die("Erro ao baixar títulos selecionados");


echo "Títulos baixados com sucesso<br><br>";
?>

<?
$sql = "SELECT * FROM mototaxi where pago = 'Sim' and datapagto = '$datapagto'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
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
$dataalteracao = $linha[34];
$horaalteracao = $linha[35];
$pago = $linha[36];
$datapagto = $linha[37];
$horapagto = $linha[38];


?>

<? } ?>

<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$email_allcred = $linha[14];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   "digicompras@digicompras.com.br";
	
	//PREPARA O PEDIDO $email_allcred
	$mens   =  "Olá! Abaixo a relação dos títulos baixados de mototaxi na Allcred Financeira!   \n";
	$mens  .=  "Confira por favor! \n\n";
	
	$mens  .=  "Solicitação Nº: ".$codigo."                                                       \n";
	$mens  .=  "Cliente/Fornecedor: ".$clifor."                                                       \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";
	$mens  .=  "Data da Solicitação: ".$data."                                     \n";
	$mens  .=  "Hora da solicitação: ".$hora."                             \n\n";
	
	$mens  .=  "Sua solicitação está: ".$status."                                                       \n";	
	$mens  .=  "Data da Resposta: ".$dataalteracao."                                     \n";
	$mens  .=  "Hora da Resposta: ".$horaalteracao."                             \n";

	$mens  .=  "Total da solicitação: ".$total."                                                       \n";	
	$mens  .=  "Data do pagto: ".$datapagto."                                     \n";
	$mens  .=  "Hora do pagto: ".$horapagto."                             \n";

	$mens  .=  "Diretor/Gerente que respondeu: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n\n";
	
	$mens  .=  "--------------------------------------------------------------------------------------           \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Resposta da Solicitação Nº ".$codigo, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_solicitante);
	$envia  =  mail($email_operador_alterou, "Solicitação Nº ".$codigo.", respondida ".$operador_alterou."! Verifique!",$mens,"From:".$email_dest);

?>


<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
