<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>

<html>
<head>
<title>CAMPANHA ATUALIZADA</title>
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
$campanha = $_POST['campanha'];
$status = $_POST['status'];
$data_inicio = $_POST['data_inicio'];
$data_final = $_POST['data_final'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`campanhas` set `campanha` = '$campanha',`status` = '$status',`data_inicio` = '$data_inicio',`data_final` = '$data_final' where `campanhas`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar campanha");

echo "As novas informações sobre a campanha foram alteradas com sucesso";
?>


<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>