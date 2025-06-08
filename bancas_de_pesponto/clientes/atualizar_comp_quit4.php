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
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>

<body>
<p>        
<?

require '../../conect/conect.php';

?>
</p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);


$codigo = $_POST['codigo'];
$comp_quit4 = $_FILES['comp_quit4']['name'];
$cpf = $_POST['cpf'];

$uploaddir = "../../$cpf/";
$uploadfile = $uploaddir. $_FILES['comp_quit4']['name'];

if(move_uploaded_file($_FILES['comp_quit4']['tmp_name'], $uploaddir . $_FILES['comp_quit4']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Erro no envio do arquivo";
}

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`clientes` set `comp_quit4` = '$comp_quit4' where `clientes`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar arquivo");

echo "Arquivo alterado com sucesso";
?>

<?
mysql_close($conexao);
?>

<form name="form2" method="post" action="editar_cliente.php">
  <input type="submit" name="Submit3" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <strong>
  <strong>
  <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
  </strong>  </strong> </span>
</form>
<p>&nbsp;</p>
</body>
</html>
