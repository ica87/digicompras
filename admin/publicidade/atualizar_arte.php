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
</form>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);


$publicidade = $_FILES['publicidade']['name'];

$uploaddir = '../../publicidade/';
$uploadfile = $uploaddir. $_FILES['publicidade']['name'];

if(move_uploaded_file($_FILES['publicidade']['tmp_name'], $uploaddir . $_FILES['publicidade']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Erro no envio da arte";
}

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`publicidade` set `publicidade` = '$publicidade' where `publicidade`. `codigo` = '0' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar arte");

echo "Nova arte insrida com sucesso!";
?>

<?
mysql_close($conexao);
?>

<p>&nbsp;</p>
</body>
</html>
