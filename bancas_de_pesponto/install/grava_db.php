<?
error_reporting(E_ALL);


include '../../conect/logo_digicompras.php';


//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$db = $_POST['db'];


$comando = "insert into db(db) values('$db')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Nome do DB gravado com sucesso<br>";


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
<?
mysql_close($conexao);
?>
</p>
<p><a href="../navegacao.php">Voltar</a> 
</p>
</body>
</html>
