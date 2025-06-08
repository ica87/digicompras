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
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

		  
		  
		  <?

// dados da proposta
$num_proposta = $_POST['num_proposta'];
$recebido = $_POST['recebido'];
$data_recebimento = $_POST['data_recebimento'];
$hora_baixa = $_POST['hora_baixa'];
$bco_operacao = $_POST['bco_operacao'];
$mes_ano = $_POST['mes_ano'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];


//dados do operador


$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];

//dados do estabelecimento

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`recebido` = '$recebido',`data_recebimento` = '$data_recebimento',`hora_baixa` = '$hora_baixa' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse cadastro");


echo "Comissão a receber baixada com sucesso<br><br>";
?>

<?
$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$num_proposta = $linha[0];
$recebido = $linha[88];
$data_recebimento = $linha[89];
$hora_baixa = $linha[91];
$nome = $linha[4];
$cpf = $linha[7];
$dataalteracao = $linha[42];
$horaalteracao = $linha[43];
$status = $linha[51];
$operador_alterou = $linha[44];
$cel_operador_alterou = $linha[45];
$email_operador_alterou = $linha[46];
$estabelecimento_alterou = $linha[47];
$cidade_estabelecimento_alterou = $linha[48];
$tel_estabelecimento_alterou = $linha[49];
$email_estabelecimento_alterou = $linha[50];

?>

<? } ?>

<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$email_allcred = $linha[14];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_allcred;
	
	//PREPARA O PEDIDO
	$mens   =  "Confira abaixo o Nº da proposta a qual se refere a comissão baixada!   \n";
	$mens  .=  "Nº da Proposta: ".$num_proposta."                                                    \n";
	$mens  .=  "Data da baixa: ".$data_recebimento."                                                    \n";
	$mens  .=  "Hora da baixa: ".$hora_baixa."                                                    \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Comissão a receber baixada em ".$data_recebimento, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_alterou);
	//$envia  =  mail($email_operador_alterou, "Proposta Nº ".$num_proposta.", ".$operador_alterou."! Confira os dados no sistema!",$mens,"From:".$email_dest);

?>


<body>
<form name="form1" method="post" action="relatorio_periodico_por_banco_a_receber.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
  <input name="bco_operacao" type="hidden" id="bco_operacao" value="<? echo $bco_operacao; ?>">
  <input name="data_inicial" type="hidden" id="data_inicial" value="<? echo $data_inicial; ?>">
  <input name="data_final" type="hidden" id="data_final" value="<? echo $data_final; ?>">
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
