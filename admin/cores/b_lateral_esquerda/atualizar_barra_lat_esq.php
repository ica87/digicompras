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

$barra_lat_esq = $_POST['barra_lat_esq'];



$comando = "update `dc_loja`.`b_lat_esq` set `barra_lat_esq` = '$barra_lat_esq' where `b_lat_esq`. `codigo` = '0' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");

echo "Cor da barra lateral esquerda alterada com sucesso";
?>

<?
mysql_close($conexao);
?>

<p><a href="../menu.php" target="navegacao">Voltar</a></p>
</body>
</html>
