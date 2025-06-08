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
<title>Processamento de arquivos</title>
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

<body>
<p>        <?
require '../../conect/conect.php';
?>

</p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);


$codigo = $_POST['codigo'];
$horas_inicio = $_POST['horas_inicio'];
$minutos_inicio = $_POST['minutos_inicio'];
$segundos_inicio = $_POST['segundos_inicio'];
$horas_termino = $_POST['horas_termino'];
$minutos_termino = $_POST['minutos_termino'];
$segundos_termino = $_POST['segundos_termino'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`hora_encerramento` set `horas_inicio` = '$horas_inicio',`minutos_inicio` = '$minutos_inicio',`segundos_inicio` = '$segundos_inicio',`horas_termino` = '$horas_termino',`minutos_termino` = '$minutos_termino',`segundos_termino` = '$segundos_termino' where `hora_encerramento`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar horário de encerramento do sistema!");

echo "Novos horários de inicio e encerramento do sistema alterado com sucesso!";
?>

<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="hora_encerramento.php">
  <input type="submit" name="Submit" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>&nbsp;</p>
</body>
</html>
