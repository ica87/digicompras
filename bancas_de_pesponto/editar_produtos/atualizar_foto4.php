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
$foto4 = $_FILES['foto4']['name'];

$uploaddir = '../../imagens4/';
$uploadfile = $uploaddir. $_FILES['foto4']['name'];

if(move_uploaded_file($_FILES['foto4']['tmp_name'], $uploaddir . $_FILES['foto4']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Erro no envio da foto Nº 4";
}

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`produtos` set `foto4` = '$foto4' where `produtos`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao gravar foto Nº 4");

echo "Nova foto Nº 4 do produto alterada com sucesso";
?>

<?
mysql_close($conexao);
?>

<p><a href="menu_edit.php">Voltar</a></p>
</body>
</html>
