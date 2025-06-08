<?
error_reporting(E_ALL);



require '../../conect/conect.php';



$texto = $_POST['texto'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

?>
<?


$comando = "update `$linha[1]`.`a_empresa` set `texto` = '$texto' where `a_empresa`. `codigo` = '0' limit 1 ";
}
?>
<?
mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Texto da página A Empresa alterado com sucesso<br>";


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
<p>
<?

include '../../conect/logo_digicompras.php';
?>
</p>
<p><a href="menu.php">Voltar</a> 
</p>
</body>
</html>
<? 
mysql_free_result($res);
?>