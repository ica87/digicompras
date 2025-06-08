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
error_reporting(E_ALL ^ E_NOTICE);
?>

		  
		  
		  <?
$codigo_ficha = $_POST['codigo_ficha'];
$codigo_cliente = $_POST['codigo_cliente'];		  
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$fone = $_POST['fone'];
$comprador = $_POST['comprador'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cep = $_POST['cep'];



//dados do orçamento
$dia_alteracao = $_POST['dia_alteracao'];
$mes_alteracao = $_POST['mes_alteracao'];
$ano_alteracao = $_POST['ano_alteracao'];
$hora_alteracao = $_POST['hora_alteracao'];

$dia_envio = $_POST['dia_envio'];
$mes_envio = $_POST['mes_envio'];
$ano_envio = $_POST['ano_envio'];

$data_envio = "$ano_envio-$mes_envio-$dia_envio";


$dia_termino_producao = $_POST['dia_termino_producao'];
$mes_termino_producao = $_POST['mes_termino_producao'];
$ano_termino_producao = $_POST['ano_termino_producao'];

$data_termino_producao = "$ano_termino_producao-$mes_termino_producao-$dia_termino_producao";



//dados da Ficha
$status = $_POST['status'];
$status_producao = $_POST['status_producao'];

$num_plano = $_POST['num_plano'];
$num_ficha = $_POST['num_ficha'];
$grupo = $_POST['grupo'];
$pespontador = $_POST['pespontador'];
$coladeira1 = $_POST['coladeira1'];
$coladeira2 = $_POST['coladeira2'];

$quant_pares = $_POST['quant_pares'];
$metal_entregue = "Não";
$modelo = $_POST['modelo'];
$nivel_dificuldade = $_POST['nivel_dificuldade'];
$valor_pespontador = $_POST['valor_pespontador'];
$total_pespontador = $_POST['total_pespontador'];
$valor_coladeira1 = $_POST['valor_coladeira1'];
$total_coladeira1 = $_POST['total_coladeira1'];
$valor_coladeira2 = $_POST['valor_coladeira2'];
$total_coladeira2 = $_POST['total_coladeira2'];

$valor_costura_manual = $_POST['valor_costura_manual'];
$total_costura_manual = $_POST['total_costura_manual'];
$valor_trice = $_POST['valor_trice'];
$total_trice = $_POST['total_trice'];



$total_ficha = $_POST['total_ficha'];
$valor_unit_empresa = $_POST['valor_unit_empresa'];
$total_ficha_empresa = $_POST['total_ficha_empresa'];
$saldo = $_POST['saldo'];
$obs = $_POST['obs'];
$caixa = $_POST['caixa'];
$justificativa = $_POST['justificativa'];


//dados do operador que registoru o orçamento
$operador_alterou= $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que registrou o orçamento
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



?>


<?
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `num_plano` = '$num_plano',`num_ficha` = '$num_ficha',`quant_pares` = '$quant_pares',`modelo` = '$modelo',`nivel_dificuldade` = '$nivel_dificuldade',`grupo` = '$grupo',`pespontador` = '$pespontador',`coladeira1` = '$coladeira1',`coladeira2` = '$coladeira2',`valor_pespontador` = '$valor_pespontador',`total_pespontador` = '$total_pespontador',`valor_coladeira1` = '$valor_coladeira1',`total_coladeira1` = '$total_coladeira1',`valor_coladeira2` = '$valor_coladeira2',`total_coladeira2` = '$total_coladeira2',`total_ficha` = '$total_ficha',`valor_unit_empresa` = '$valor_unit_empresa',`total_ficha_empresa` = '$total_ficha_empresa',`saldo` = '$saldo',`caixa` = '$caixa',`justificativa` = '$justificativa',`status` = '$status',`status_producao` = '$status_producao',`dia_envio` = '$dia_envio',`mes_envio` = '$mes_envio',`ano_envio` = '$ano_envio',`data_envio` = '$data_envio',`dia_termino_producao` = '$dia_termino_producao',`mes_termino_producao` = '$mes_termino_producao',`ano_termino_producao` = '$ano_termino_producao',`data_termino_producao` = '$data_termino_producao',`valor_costura_manual` = '$valor_costura_manual',`total_costura_manual` = '$total_costura_manual',`valor_trice` = '$valor_trice',`total_trice` = '$total_trice' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa ficha");

echo "Alteração Pós-Envio da Ficha alteradas com sucesso!<br><br>";

?>

<?

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `num_plano` = '$num_plano',`num_ficha` = '$num_ficha',`quant_pares` = '$quant_pares',`modelo` = '$modelo',`grupo` = '$grupo',`valor_pespontador` = '$valor_pespontador',`total_pespontador` = '$total_pespontador',`valor_coladeira1` = '$valor_coladeira1',`total_coladeira1` = '$total_coladeira1',`valor_coladeira2` = '$valor_coladeira2',`total_coladeira2` = '$total_coladeira2',`total_ficha` = '$total_ficha',`valor_unit_empresa` = '$valor_unit_empresa',`total_ficha_empresa` = '$total_ficha_empresa',`saldo` = '$saldo',`caixa` = '$caixa',`justificativa` = '$justificativa' where `contas_a_receber`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao atualizar o Contas a Receber");

echo "Atualização no Contas a Receber realizada com sucesso!<br><br>";

?>


<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Nova ficha gravada na $nfantasia_empresa!   \n";
	$mens  .=  " \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "Data: ".$dia."-".$mes."-".$ano."                                                    \n";
	$mens  .=  "Hora: ".$hora."                                                    \n\n";
	
	$mens  .=  "Nº do Plano: ".$num_plano."                                                    \n";
	$mens  .=  "Nº da ficha: ".$num_ficha."                                                    \n";
	$mens  .=  "Modelo: ".$modelo."                                                    \n";
	$mens  .=  "Metal Entregue? ".$metal_entregue."                                                    \n\n";
	
	$mens  .=  "Operador que efetuou a alteração da ficha: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Ficha alterada em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	//$envia  =  mail($email_operador, "Ficha alterada em ".$datacadastro, $mens,"From:".$email_dest);

?>


<?


			
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
<form name="form1" method="post" action="">
</form>
<form name="form2" method="post" action="../relatorios/menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Voltar">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
