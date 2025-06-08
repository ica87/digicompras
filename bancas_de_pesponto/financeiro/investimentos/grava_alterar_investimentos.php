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
// dados do investimento
$codigo = $_POST['codigo'];

$nfantasia = $_POST['nfantasia'];
$banco = $_POST['banco'];
$valor = $_POST['valor'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$data_investimento = $_POST['data_investimento'];
$data_prev_resgate = $_POST['data_prev_resgate'];
$resgatado = $_POST['resgatado'];
$data_resgatado = $_POST['data_resgatado'];
$valor_resgatado = $_POST['valor_resgatado'];
$historico = $_POST['historico'];
$conta = $_POST['conta'];

//dados do operador

$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];





$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`investimentos` set `codigo` = '$codigo',`nfantasia` = '$nfantasia',`banco` = '$banco',`valor` = '$valor',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`data_investimento` = '$data_investimento',`data_prev_resgate` = '$data_prev_resgate',`resgatado` = '$resgatado',`data_resgatado` = '$data_resgatado',`valor_resgatado` = '$valor_resgatado',`historico` = '$historico',`conta` = '$conta',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',
`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `investimentos`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse lançamento de saída");


echo "Lançamento de saída alterado com sucesso<br><br>";
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
