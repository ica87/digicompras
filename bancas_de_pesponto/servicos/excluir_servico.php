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
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);

require '../../conect/conect.php';

$codigo = $_POST['codigo'];

$comando = "delete from `servicos` where `servicos`. `codigo` = '$codigo' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir produto"); ?>

<? echo "Serviço excluído com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<p><a href="menu.php">Voltar</a></p>
</body>
</html>
