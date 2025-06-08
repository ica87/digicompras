<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>

<html>
<head>
<title>Lista de E-Mails processados!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit2" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
A Listagem dos E-Mails abaixo foi processada! <br>
<br>
<?

require '../../../conect/conect.php';

?>
<?
$data_hora = $_POST['data_hora'];
$assunto = $_POST['assunto'];
$informativo = $_POST['informativo'];
$foto = $_FILES['foto']['name'];

$uploaddir = '../../../img_newsletter/';
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
$empresa = "allcred@allcredfinanceira.com.br";


$sql = "SELECT * FROM operadores";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<?
$email = $linha[20];
$nome = $linha[1];

?><br><br>




<?
	//PREPARA O PEDIDO
	$mens   =  "Informativo Allcred Financeira   \n\n";
	$mens  .=  "$foto \n\n";
	$mens  .=  "$informativo \n";

 ?>


<?
//DISPARA O EMAIL
$envia  =  mail($email, "$nome ".$assunto, $mens,"From:".$empresa."\r\nBcc:".$email);
printf("$reg   -   $email");


?>

          <? } ?>


          <p><br>
  
        </p>
          <form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
          </form>
<p>&nbsp;</p>
</body>
</html>
