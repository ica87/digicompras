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
-->
</style></head>

<body>
<p>        
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);


$codigo = $_POST['codigo'];
$marca = $_POST['marca'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;

?>
<?


$comando = "update `$linha[1]`.`marca` set `marca` = '$marca' where `marca`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar dados");

echo "As novas informa��es sobre a nomenclatura da marca foram alteradas com sucesso";
?>

<?
mysql_close($conexao);
?>

<p><a href="editar_marca.php">Voltar</a></p>
</body>
</html>
<?
mysql_close($conexao);
?>