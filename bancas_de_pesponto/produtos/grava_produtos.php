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
<?
error_reporting(E_ALL);

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
?>
<?
printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<form name="form1" method="post" action="produtos_insert.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?

$foto = $_FILES['foto']['name'];
//$foto2 = $_FILES['foto2']['name'];
//$foto3 = $_FILES['foto3']['name'];
//$foto4 = $_FILES['foto4']['name'];

$referencia = $_POST['referencia'];
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
$data_hora = $_POST['data_hora'];

$uploaddir = '../../imagens/';
$uploadfile = $uploaddir. $_FILES['foto']['name'];

if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $_FILES['foto']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Foto não foi enviada! Essa é obrigatória";
}
?>
<br><br>
<?
//$uploaddir = '../../imagens2/';
//$uploadfile = $uploaddir. $_FILES['foto2']['name'];

//if(move_uploaded_file($_FILES['foto2']['tmp_name'], $uploaddir . $_FILES['foto2']['name'])){
//echo "Arquivo enviado com sucesso!";
//} else {
//echo "Foto Nº 2 não foi enviada!";
//}
?>
<br><br>
<?
//$uploaddir = '../../imagens3/';
//$uploadfile = $uploaddir. $_FILES['foto3']['name'];

//if(move_uploaded_file($_FILES['foto3']['tmp_name'], $uploaddir . $_FILES['foto3']['name'])){
//echo "Arquivo enviado com sucesso!";
//} else {
//echo "Foto Nº 3 não foi enviada!";
//}
?>
<br><br>
<?
//$uploaddir = '../../imagens4/';
//$uploadfile = $uploaddir. $_FILES['foto4']['name'];

//if(move_uploaded_file($_FILES['foto4']['tmp_name'], $uploaddir . $_FILES['foto4']['name'])){
//echo "Arquivo enviado com sucesso!";
//} else {
//echo "Foto Nº 4 não foi enviada!";
//}
?>
<br><br>
<?

$comando = "insert into produtos(referencia,foto,material,cor,sola,forro,numeracao,categoria,sub_categoria,descricao,preco,oferta,preco_oferta,data_hora) values('$referencia','$foto','$material','$cor','$sola','$forro','$numeracao','$categoria','$sub_categoria','$descricao','$preco','$oferta','$preco_oferta','$data_hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Produto inserido no banco de dados com sucesso<br>";


?>

<?
mysql_close($conexao);
?>