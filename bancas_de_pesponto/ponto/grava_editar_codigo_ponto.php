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
$ent_m = $_POST['ent_m'];
$sai_m = $_POST['sai_m'];
$ent_t = $_POST['ent_t'];
$sai_t = $_POST['sai_t'];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`ponto` set `ent_m` = '$ent_m',`sai_m` = '$sai_m',`ent_t` = '$ent_t',`sai_t` = '$sai_t' where `ponto`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao atualizar as novas informações, tente novamente!");

echo "Ponto atualizado com com sucesso!<br><br>";
?>

<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
