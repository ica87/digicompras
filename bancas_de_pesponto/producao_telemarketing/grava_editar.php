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
$codigo = $_POST['codigo'];
$operador = $_POST['operador'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$veiculo_produto = $_POST['veiculo_produto'];
$valor = $_POST['valor'];
$plano_pp = $_POST['plano_pp'];
$data_pagto = $_POST['data_pagto'];
$bco_operacao = $_POST['bco_operacao'];
$loja_origem = $_POST['loja_origem'];
$loja_destino = $_POST['loja_destino'];
$retorno_origem = $_POST['retorno_origem'];
$retorno_destino = $_POST['retorno_destino'];
$obs = $_POST['obs'];
$categoria_veiculo = $_POST['categoria_veiculo'];


$data_pagamento = $data_pagto;
$data_pagamento2 = explode("-", $data_pagamento);

$dia_pagto = $data_pagamento2[0];
$mes_pagto = $data_pagamento2[1];
$ano_pagto = $data_pagamento2[2];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fechamento_mes` set `codigo` = '$codigo',`operador` = '$operador',`nome` = '$nome',`cpf` = '$cpf',`veiculo_produto` = '$veiculo_produto',`valor` = '$valor',`plano_pp` = '$plano_pp',`data_pagto` = '$data_pagto',`bco_operacao` = '$bco_operacao',`loja_origem` = '$loja_origem',`loja_destino` = '$loja_destino',`retorno_origem` = '$retorno_origem',`retorno_destino` = '$retorno_destino',`obs` = '$obs',`dia_pagto` = '$dia_pagto',`mes_pagto` = '$mes_pagto',`ano_pagto` = '$ano_pagto',`categoria_veiculo` = '$categoria_veiculo' where `fechamento_mes`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse lançamento");


echo "Dados do lançamento alterados no banco de dados com sucesso<br>";
?>



<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
