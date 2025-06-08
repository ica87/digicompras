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

$comando = "delete from `marca` where `marca`. `codigo` = '$codigo' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir marca"); ?>

<? echo "Marca excluída com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<p><a href="selecione_codigo_exclusao_marca.php">Voltar</a></p>
</body>
</html>
