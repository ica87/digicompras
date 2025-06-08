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
// dados da proposta
$operador = $_POST['operador'];
$data_lanc = $_POST['data_lanc'];
$hora_lanc = $_POST['hora_lanc'];
$dia_lanc = $_POST['dia_lanc'];
$mes_lanc = $_POST['mes_lanc'];
$ano_lanc = $_POST['ano_lanc'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$categoria_veiculo = $_POST['categoria_veiculo'];
$veiculo_produto = $_POST['veiculo_produto'];
$valor = $_POST['valor'];

$plano_pp = $_POST['plano_pp'];
$data_pagto = $_POST['data_pagto'];

$data_pagamento = $data_pagto;
$data_pagamento2 = explode("-", $data_pagamento);

$dia_pagto = $data_pagamento2[0];
$mes_pagto = $data_pagamento2[1];
$ano_pagto = $data_pagamento2[2];

$bco_operacao = $_POST['bco_operacao'];
$loja_origem = $_POST['loja_origem'];
$loja_destino = $_POST['loja_destino'];
$retorno_origem = $_POST['retorno_origem'];
$retorno_destino = $_POST['retorno_destino'];
$obs = $_POST['obs'];
$categoria_veiculo = $_POST['categoria_veiculo'];




$comando = "insert into fechamento_mes(operador,data_lanc,hora_lanc,dia_lanc,mes_lanc,ano_lanc,nome,cpf,veiculo_produto,valor,plano_pp,data_pagto,dia_pagto,mes_pagto,ano_pagto,bco_operacao,loja_origem,loja_destino,retorno_origem,retorno_destino,obs,categoria_veiculo) 

values('$operador','$data_lanc','$hora_lanc','$dia_lanc','$mes_lanc','$ano_lanc','$nome','$cpf','$veiculo_produto','$valor','$plano_pp','$data_pagto','$dia_pagto','$mes_pagto','$ano_pagto','$bco_operacao','$loja_origem','$loja_destino','$retorno_origem','$retorno_destino','$obs','$categoria_veiculo')";


mysql_query($comando,$conexao);


echo "Lançamento efetuado com sucesso!<br><br>";

?>


<?
$sql = "SELECT * FROM fechamento_mes order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$codigo = $linha[0];
$operador = $linha[1];
$nome = $linha[2];
$cpf = $linha[3];
$veiculo_produto = $linha[4];
$valor = $linha[5];
$plano_pp = $linha[6];
$data_pagto = $linha[7];
$bco_operacao = $linha[8];
$origem_destino = $linha[9];
$retorno = $linha[10];
$dia_pagto = $linha[11];
$mes_pagto = $linha[12];
$ano_pagto = $linha[13];
$data_lanc = $linha[14];
$hora_lanc = $linha[15];
$dia_lanc = $linha[16];
$mes_lanc = $linha[17];
$ano_lanc = $linha[18];
$obs = $linha[19];

?>

<? } ?>

<?
printf("O número dlançamento é: $codigo");

?>





<p>&nbsp;</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>