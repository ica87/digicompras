<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
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
//require("conect/conect.php"); or die("erro na requisi��o");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>


		  
		  
		  <?
//$codigo = $_POST['codigo'];
$status = $_POST['status'];

$total = count($_POST['codigo']); 
for($i = 0; $i < $total; $i++){ 
$status = $_POST['status'][$i]; 
$id = $_POST['codigo'][$i]; 


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = mysql_query("update `$linha[1]`.`usuarios` set codigo` = '$id',`status` = '$status' where `usuarios`. `codigo` = '$id'");
}
}
mysql_query($comando,$conexao) or die("Erro ao alterar informa��es dessa empresa conveniada");


echo "Usu�rios Inativados da empresa conveniada com sucesso<br>";
?>

 
 
</body>
</html>
<?
mysql_close($conexao);
?>
