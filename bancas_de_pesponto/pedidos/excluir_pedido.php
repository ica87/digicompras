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


$num_pedido = $_POST['num_pedido'];

$comando = "delete from `pedidos` where `pedidos`. `num_pedido` = '$num_pedido' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir pedido"); ?>

<? echo "Pedido excluído com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
