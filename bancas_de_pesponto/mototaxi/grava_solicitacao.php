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
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>
<?
// dados da solicitacao
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$mes_ano = $_POST['mes_ano'];
$cod_cli = $_POST['cod_cli'];
$clifor = $_POST['clifor'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$motivo = $_POST['motivo'];
$quant = $_POST['quant'];
$valor = $_POST['valor'];
$total = bcmul($quant,$valor,2);
$obs = $_POST['obs'];
$operador_solicitante = $_POST['operador_solicitante'];
$cel_operador_solicitante = $_POST['cel_operador_solicitante'];
$email_operador_solicitante = $_POST['email_operador_solicitante'];
$estabelecimento_operador_solicitante = $_POST['estabelecimento_operador_solicitante'];
$cidade_estabelecimento_solicitante = $_POST['cidade_estabelecimento_solicitante'];
$tel_estabelecimento_solicitante  = $_POST['tel_estabelecimento_solicitante'];
$email_estabelecimento_solicitante = $_POST['email_estabelecimento_solicitante'];
$status = $_POST['status'];

//dados do operador


$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];

//dados do estabelecimento

$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



//
//

$comando = "insert into mototaxi(cpf,data,hora,mes_ano,cod_cli,clifor,endereco,numero,bairro,complemento,cidade,estado,motivo,quant,valor,total,obs,operador_solicitante,cel_operador_solicitante,email_operador_solicitante,estabelecimento_operador_solicitante,cidade_estabelecimento_solicitante,tel_estabelecimento_solicitante,email_estabelecimento_solicitante,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_operador_alterou,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,status) values('$cpf','$data','$hora','$mes_ano','$cod_cli','$clifor','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$motivo','$quant','$valor','$total','$obs','$operador_solicitante','$cel_operador_solicitante','$email_operador_solicitante','$estabelecimento_operador_solicitante','$cidade_estabelecimento_solicitante','$tel_estabelecimento_solicitante','$email_estabelecimento_solicitante','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_operador_alterou','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$status')";


mysql_query($comando,$conexao);


echo "Solicitação de mototaxi efetuada com sucesso!<br><br>";

?>


<?
$sql = "SELECT * FROM mototaxi order by codigo desc limit 1";
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
$estabelecimento_operador_alterou = $linha[28];
$cidade_estabelecimento = $linha[29];
$tel_estabelecimento = $linha[30];
$email_estabelecimento = $linha[31];
$status = $linha[32];

?>

<? } ?>

<?
printf("O número da solicitação é: $codigo");

?>

<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$email_allcred = $linha[14];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_allcred;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Sua solicitação de mototaxi foi efetivada com sucesso na Allcred Financeira!   \n";
	$mens  .=  "Em breve a diretoria lhe enviará uma resposta sobre o assunto, verifique seu e-mail \n\n";
	
	$mens  .=  "Operador Solicitante: ".$operador_solicitante."                                                       \n";
	$mens  .=  "Celular: ".$cel_operador_solicitante."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_solicitante."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_operador_solicitante."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_solicitante."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_solicitante."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_solicitante."                                                    \n\n";

	$mens  .=  "Cliente/Fornecedor: ".$clifor."                                                    \n";
	$mens  .=  "Endereço: ".$endereco."                                                    \n";
	$mens  .=  "Número: ".$numero."                                                    \n";
	$mens  .=  "Bairro: ".$bairro."                                                    \n";
	$mens  .=  "Complemento: ".$complemento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade."                                                    \n";
	$mens  .=  "Estado: ".$estado."                                                    \n";
	$mens  .=  "Motivo: ".$motivo."                                                    \n";
	$mens  .=  "Quantidade de corridas: ".$quant."                                                    \n";
	$mens  .=  "Valor por corrida: ".$valor."                                                    \n";
	$mens  .=  "Total: ".$total."                                                    \n";
	$mens  .=  "Observação: ".$obs."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Solicitação Nº ".$codigo." efetuada no sistema em ".$data, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_operador_solicitante, "Solicitação Nº ".$codigo.", ".$operador_solicitante."! Aguarde a resposta automática",$mens,"From:".$email_dest);

?>




<p>&nbsp;</p>
<form action="imprimir_solicitacao.php" method="post" name="form1" target="_blank">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Imprimir Solicita&ccedil;&atilde;o">
  <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
</form>
<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>