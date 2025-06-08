<?
error_reporting(E_ALL);


include '../../conect/logo_digicompras.php';


//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$referencia = $_POST['referencia'];
$referencia_nova = $_POST['referencia_nova'];
$material = $_POST['material'];
$cor = $_POST['cor'];
$sola = $_POST['sola'];
$forro = $_POST['forro'];
$numeracao = $_POST['numeracao'];
$categoria = $_POST['categoria'];
$sub_categoria = $_POST['sub_categoria'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$oferta = $_POST['oferta'];
$preco_oferta = $_POST['preco_oferta'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;



$comando = "update `$linha[1]`.`produtos` set `referencia` = '$referencia_nova',`material` = '$material',`cor` = '$cor',`sola` = '$sola',`forro` = '$forro',`numeracao` = '$numeracao',`categoria` = '$categoria',`sub_categoria` = '$sub_categoria',`descricao` = '$descricao',`preco` = '$preco',`oferta` = '$oferta',`preco_oferta` = '$preco_oferta' where `produtos`. `referencia` = '$referencia' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Produto alterado no banco de dados com sucesso<br>";


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
<p><a href="menu_edit.php">Voltar</a> 
</p>
</body>
</html>
<?
mysql_close($conexao);
?>