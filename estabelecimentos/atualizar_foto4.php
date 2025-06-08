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
$foto4 = $_FILES['foto4']['name'];
$foto_deletar4 = $_POST['foto_deletar4'];
$pasta = $_POST['pasta'];


$uploaddir = "../admgeral/estabelecimentos/$pasta/";
$uploadfile = $uploaddir. $_FILES['foto4']['name'];

if(move_uploaded_file($_FILES['foto4']['tmp_name'], $uploaddir . $_FILES['foto4']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Erro no envio da foto 4 ";
}

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`estabelecimentos` set `foto4` = '$foto4' where `estabelecimentos`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar foto 4");

echo "Nova foto 4 do estabelecimento alterada com sucesso";
?>
<?php
if(is_file("admgeral/estabelecimentos/$pasta/$foto_deletar4")) {
unlink("admgeral/estabelecimentos/$pasta/$foto_deletar4");
}
?>
<?
mysql_close($conexao);
?>

<form name="form1" method="get" action="foto.php">
  <input type="submit" name="Submit" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
  <input name="chamar" type="hidden" id="chamar" value="<? echo $codigo; ?>">
</form>
<p>&nbsp;</p>
</body>
</html>
