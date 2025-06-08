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


$referencia = $_POST['referencia'];

$comando = "delete from `produtos` where `produtos`. `referencia` = '$referencia' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir produto"); ?>

<? echo "Produto excluído com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<p><a href="../produtos/menu.php">Voltar</a></p>
</body>
</html>
