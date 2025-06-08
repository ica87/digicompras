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
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>

<body>
<p>        
<?



require '../conect/conect.php';

?>
</p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);

$codigo = $_POST['codigo'];
$foto = $_FILES['foto']['name'];
$foto_deletar = $_POST['foto_deletar'];
$pasta = $_POST['pasta'];


$uploaddir = "../admgeral/estabelecimentos/$pasta/";
$uploadfile = $uploaddir. $_FILES['foto']['name'];

if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $_FILES['foto']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Erro no envio da foto ";
}

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`estabelecimentos` set `foto` = '$foto' where `estabelecimentos`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar foto");

echo "Nova foto do estabelecimento alterada com sucesso";
?>
<?php
if(is_file("$pasta/$foto_deletar")) {
unlink("$pasta/$foto_deletar");
}
?>
<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="foto.php">
  <input type="submit" name="Submit" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<p>&nbsp;</p>
</body>
</html>
