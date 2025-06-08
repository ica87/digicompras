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
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
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
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>

<body>
<p>        
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit32" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
  <?
error_reporting(E_ALL);



$comando = "delete from `publicidade` where `publicidade`. `codigo` = '0' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir arte publicitária"); ?>

  <? echo "Arte publicitária excluída com sucesso:"; ?> 


  <?
mysql_close($conexao);
?>
</form>
<p>&nbsp;</p>
</body>
</html>
