<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["data_hoje"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["dia"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["mes"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["ano"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["mes_ano"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["num_cartao"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["calculo"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["valor_compra"] == true) //verifica se a variável "senha" é verdadeira...
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
//require("conexao.php"); or die("erro na requisição");
require '../conect/conect.php';

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$data_compra = $_SESSION['data_hoje'];
$data_hoje = $_SESSION['data_hoje'];
$dia = $_SESSION['dia'];
$mes = $_SESSION['mes'];
$ano = $_SESSION['ano'];
$mes_ano = $_SESSION['mes_ano'];

$num_cartao = $_SESSION['num_cartao'];
$codigo = $_POST['num_cartao'];
$calculo = $_SESSION['calculo'];
$valor_compra = $_SESSION['valor_compra'];
$operador_realizou = $_SESSION['operador_realizou'];
//$estab_pertence_com = $_SESSION['estab_pertence_com'];
$hora_compra = date('H:i:s');



$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>" 
<? } ?>

<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="../background/<? //printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>


<?
// dados do operador

$sql = "SELECT * FROM estabelecimentos where cnpj = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$codigo = $linha[0];
$razaosocial = $linha[1];
$nfantasia_estab_pertence_com = $linha[2];
$cnpj = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$complemento = $linha[8];
$cep = $linha[9];
$cidade_estab_pertence_com = $linha[10];
$estado = $linha[11];
$telefone_estab_pertence_com = $linha[12];
$fax = $linha[13];
$email_estab_pertence_com = $linha[14];
$site = $linha[15];
$proprietario = $linha[16];
$cpf = $linha[17];
$rg = $linha[18];
$operador = $linha[24];
$cel_operador = $linha[25];
$email_operador = $linha[26];
$estabelecimento = $linha[27];
$cidade_estabelecimento = $linha[28];
$tel_estabelecimento = $linha[29];
$email_estabelecimento = $linha[30];
$obs = $linha[19];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$dataalteracao = $linha[22];
$horaalteracao = $linha[23];
$operador_alterou = $linha[31];
$cel_operador_alterou = $linha[32];
$email_operador_alterou = $linha[33];
$estabelecimento_alterou = $linha[34];
$cidade_estabelecimento_alterou = $linha[35];
$tel_estabelecimento_alterou = $linha[36];
$email_estabelecimento_alterou = $linha[37];
$operador_atendente = $linha[41];
$banco = $linha[42];
$agencia = $linha[43];
$conta = $linha[44];
$categoria = $linha[45];
$foto = $linha[46];
$aliquota = $linha[47];
$usuario = $linha[48];
$senha = $linha[49];
$status = $linha[50];
}
?>

<?
//Dados do usuário

$sql = "SELECT * FROM usuarios where codigo = '$num_cartao'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$nome = $linha[1];
$sexo = $linha[2];
$estadocivil = $linha[3];
$cpf = $linha[4];
$rg = $linha[5];
$orgao = $linha[6];
$emissao = $linha[7];
$data_nasc = $linha[8];
$pai = $linha[9];
$mae = $linha[10];
$endereco = $linha[11];
$numero = $linha[12];
$bairro = $linha[13];
$complemento = $linha[14];
$cidade = $linha[15];
$estado = $linha[16];
$cep = $linha[17];
$telefone = $linha[18];
$celular = $linha[19];
$email = $linha[20];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$obs = $linha[28];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$senha = $linha[40];
$funcao = $linha[41];
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$tel_estab_pertence = $linha[44];
$email_estab_pertence = $linha[45];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];
$operador_atende = $linha[49];
}
?>
<?
$comissao_digicompras = bcmul($valor_compra,$aliquota)/100;
?>


<?


if($valor_compra>$calculo){

echo "<br><br>ATENÇÃO!!! $nome_op VOCÊ INFORMOU UM VALOR MAIOR QUE O SALDO DISPONÍVEL!<br><br> CLIQUE EM VOLTAR E CORRIJA O VALOR!";
}else{

$comando = "insert into compras(nome,cpf,endereco,numero,bairro,cep,telefone,celular,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,valor_compra,data_compra,hora_compra,dia,mes,ano,mes_ano,num_cartao,estab_pertence_com,tel_estab_pertence_com,cidade_estab_pertence_com,email_estab_pertence_com,operador_atende,operador_realizou,cel_operador_realizou,email_operador_realizou,comissao_digicompras) 

values('$nome','$cpf','$endereco','$numero','$bairro','$cep','$telefone','$celular','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$valor_compra','$data_compra','$hora_compra','$dia','$mes','$ano','$mes_ano','$num_cartao','$nfantasia_estab_pertence_com','$telefone_estab_pertence_com','$cidade_estab_pertence_com','$email_estab_pertence_com','$operador_atendente','$nfantasia','$fax','$email','$comissao_digicompras')";

mysql_query($comando,$conexao) or die("Erro ao concluir a venda! Tente novamente");


echo "Venda concluída com sucesso!<br> Foi enviado um e-mail ao usuário avisando ele da compra efetuada com o cartão Digicompras e uma cópia a empresa onde ele trabalha! <br><br>";

?>

<?
$sql = "select sum(valor_compra) as total from compras where num_cartao = '$num_cartao' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
//if($valor_total==0){
//echo "0.00";
//}else{
//echo "".$valor_total;
//}
?>


<?
$sql = "SELECT * FROM usuarios where codigo = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$saldo = bcsub($limite, $valor_total, 2); 
printf("Nº do cartão do usuário: $linha[0]<br><br>");
printf("Nome do usuário: $linha[1]<br><br>");
printf("Status: $linha[46]<br><br>");
printf("Limite do cartão: R$ $linha[48]<br><br>");
printf("Saldo disponível: R$ $saldo<br><br>");



$codigo = $linha[0];
$nome = $linha[1];
$cpf = $linha[4];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$email_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[44];
$senha = $linha[40];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];



?>

<? } ?>

<?
$sql = "SELECT * FROM compras order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$saldo = bcsub($limite, $valor_total, 2); 
printf("Nº da compra: $linha[0]<br><br>");


$codigo = $linha[0];
$nome = $linha[1];
$cpf = $linha[2];
$endereco = $linha[3];
$numero = $linha[4];
$bairro = $linha[5];
$cep = $linha[6];
$telefone = $linha[7];
$celular = $linha[8];
$estab_pertence = $linha[9];
$cidade_estab_pertence = $linha[10];
$tel_estab_pertence = $linha[11];
$email_estab_pertence = $linha[12];
$valor_compra = $linha[13];
$data_compra = $linha[14];
$hora_compra = $linha[15];
$num_cartao = $linha[20];
$estab_pertence_com = $linha[21];
$tel_estab_pertence_com = $linha[22];
$cidade_estab_pertence_com = $linha[23];
$email_estab_pertence_com = $linha[24];
$operador_realizou = $linha[26];
$cel_operador_realizou = $linha[27];
$email_operador_realizou = $linha[28];


?>

<? } ?>



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
	$mens   =  "Olá! $nome você efetuou uma compra com o cartão $nfantasia!   \n";
	$mens  .=  "Utilize-o sempre com responsabilidade! \n";
	$mens  .=  "Nosso site para você visualizar seu saldo,extrato e nos enviar sugestoes é $site \n\n";
	
	$mens  .=  "Nº do seu cartão: ".$num_cartao."                                                       \n";	
	$mens  .=  "Status do seu cartão: ".$status."                                                       \n";	
	$mens  .=  "Empresa conveniada: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n\n";	
	
	$mens  .=  "Estabelecimento da compra: ".$estab_pertence_com."                                                       \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence_com."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence_com."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estab_pertence_com."                                                    \n";
	$mens  .=  "Nº da compra: ".$codigo."                                                    \n";
	$mens  .=  "Valor da compra: R$ ".$valor_compra."                                                    \n";
	$mens  .=  "Data da compra: ".$data_compra."                                                    \n";
	$mens  .=  "Hora da compra: ".$hora_compra."                                                    \n\n";
	


	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "$nome comprou na $estab_pertence_op em ".$data_compra, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_estab_pertence_com, "$nome comprou na $estab_pertence_op em ".$data_compra, $mens,"From:".$email_dest);
	
}
?>




<form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit2" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <strong><font color="#0000FF">
  <input name="codigo" type="hidden" id="codigo" value="<? echo $num_cartao; ?>">
  </font></strong>
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>