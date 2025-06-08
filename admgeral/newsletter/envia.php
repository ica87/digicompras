<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit2" value="Voltar">
</form>
A Listagem dos E-Mails abaixo foi processada! <br>
<br>
<?

require '../../conect/conect.php';

?>
<?
$data_hora = $_POST['data_hora'];
$assunto = $_POST['assunto'];
$informativo = $_POST['informativo'];
$foto = $_FILES['foto']['name'];

$uploaddir = '../../img_newsletter/';
$uploadfile = $uploaddir. $_FILES['foto']['name'];

if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $_FILES['foto']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Imagem não foi enviada!";
}

$comando = "insert into newsletter(data_hora,assunto,informativo,foto) values('$data_hora','$assunto','$informativo','$foto')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");
?>

<?

$sql = "SELECT * FROM newsletter order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$assunto = $linha[2];
$informativo = $linha[3];
$foto = $linha[4];

?>
<? } ?>


<?
$empresa = "digicompras@digicompras.com.br";


$sql = "SELECT * FROM clientes order by email asc";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<?
$email = $linha[11];
$nfantasia = $linha[3];

?><br><br>




<?
	//PREPARA O PEDIDO
	$mens   =  "<html>

<head>
<title>Informativo Digicompras</title>
</head>

<body>

<p>$informativo</p>
<p>
<img border='0' src='http://www.digicompras.com.br/img_newsletter/$foto'></p>

</body>

</html>
 \n";
 ?>


<?
//DISPARA O EMAIL
$envia  =  mail($email, "$nfantasia ".$assunto, $mens,"From:".$empresa."\r\nBcc:".$email);
printf("$reg   -   $email");


?>

          <? } ?>


          <p><br>
  
        </p>
          <form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
