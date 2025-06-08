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
require '../../../conect/conect.php';
error_reporting(E_ALL);

?>

		  
		  
		  <?

// dados do lancamento
$codigo = $_POST['codigo'];
$nfantasia = $_POST['nfantasia'];
$categoria_conta = $_POST['categoria_conta'];
$valor = $_POST['valor'];
$num_sete_um = $_POST['num_sete_um'];
$historico = $_POST['historico'];
$modo_pagto = $_POST['modo_pagto'];
$num_cheque = $_POST['num_cheque'];
$banco = $_POST['banco'];
$conta = $_POST['conta'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];



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


$comando = "update `$linha[1]`.`cx_saidas` set `codigo` = '$codigo',`nfantasia` = '$nfantasia',`categoria_conta` = '$categoria_conta',`valor` = '$valor',`num_sete_um` = '$num_sete_um',`historico` = '$historico',`modo_pagto` = '$modo_pagto',`num_cheque` = '$num_cheque',`banco` = '$banco',`conta` = '$conta',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',
`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao' where `cx_saidas`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse lançamento de saída");


echo "Lançamento de saída alterado com sucesso<br><br>";
?>



<body>
<form name="form1" method="post" action="../caixa/menu.php">
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
