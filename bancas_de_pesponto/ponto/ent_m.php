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

//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$codigo_ponto = $_POST['codigo_ponto'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$ent_m = $_POST['ent_m'];
$mes_ano = $_POST['mes_ano'];


$sql = "SELECT * FROM ponto where nome = '$nome' and data = '$data'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$nome = $linha[1];
$data = $linha[2];
}
?>
  <?
if($reg==0){
$comando = "insert into ponto(nome,data,ent_m,mes_ano) values('$nome','$data','$ent_m','$mes_ano')";

mysql_query($comando,$conexao) or die("Erro ao marcar seu ponto!<br><br> Tente novamente!");


echo "Ponto marcado com sucesso!<br><br> Hoje � um novo dia, que ele seja cheio de b�n�aos para voc�!<br><br>";
$reg=0;
}
else
{
echo "Voc� j� marcou sua entrada de manh�!<br><br> Voc� deve marcar sua sa�da do per�odo da manh�!";
}



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
<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
  <input type="submit" name="Submit" value="Ir para o menu principal">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>