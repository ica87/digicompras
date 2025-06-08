<?
error_reporting(E_ALL);


include '../../conect/logo_digicompras.php';


//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$marca = $_POST['marca'];
$tipo_veiculo = $_POST['tipo_veiculo'];


$comando = "insert into marca(marca,tipo_veiculo) values('$marca','$tipo_veiculo')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Dados gravados com sucesso<br>";


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
</p>
<p><a href="inserir_marca.php">Voltar</a> 
</p>
</body>
</html>
<?
mysql_close($conexao);
?>