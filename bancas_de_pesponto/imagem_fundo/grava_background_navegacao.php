<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>

<?
error_reporting(E_ALL);

require '../../conect/conect.php';

$imagem = $_FILES['imagem']['name'];

$comando = "insert into background(imagem) values('$imagem')";

mysql_query($comando,$conexao) or die("Erro ao gravar background");


echo "Background da p�gina central de navega��o inserido com sucesso pela 1� vez no sistema!<br>A partir de agora utilize apenas a op��o Editar background da p�gina central de navega��o";


?>
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
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
</p>
<form action="menu.php" method="post" name="form1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>