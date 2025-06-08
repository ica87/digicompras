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
<p>        <?
require '../../conect/conect.php';


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
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
