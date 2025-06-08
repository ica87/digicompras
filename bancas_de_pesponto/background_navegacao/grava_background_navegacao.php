<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>

<?
error_reporting(E_ALL);

require '../../conect/conect.php';

$imagem = $_FILES['imagem']['name'];

$comando = "insert into background(imagem) values('$imagem')";

mysql_query($comando,$conexao) or die("Erro ao gravar background");


echo "Background da página central de navegação inserido com sucesso pela 1º vez no sistema!<br>A partir de agora utilize apenas a opção Editar background da página central de navegação";


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