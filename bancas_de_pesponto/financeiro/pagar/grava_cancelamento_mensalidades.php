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
</head>
<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

<?
$codigo_contas_a_receber = $_POST['codigo_contas_a_receber'];
$codigo_aluno = $_POST['codigo_aluno'];
$curso = $_POST['curso'];
$obs = $_POST['obs'];



//dados do operador que alterou
$dataalteracao =  date('d-m-Y');
$horaalteracao = date('H:i:s');
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que alterou
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];




?>





<?
$sql = "SELECT * FROM contas_a_receber where codigo = '$codigo_contas_a_receber'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {





$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$codigo_contas_a_receber',`obs` = '$obs',`quitacao` = 'Cancelado',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `contas_a_receber`. `codigo` = '$codigo_contas_a_receber'";
}

mysql_query($comando,$conexao) or die("Erro ao cancelar as mensalidades do aluno matriculado");



}
echo "Mensalidade cancelada com sucesso<br>";

?>


<body>
<form name="form1" method="post" action="cancela_mensalidades.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
  <input type="submit" name="Submit2" value="Voltar">
</form>
</body>
</html>
