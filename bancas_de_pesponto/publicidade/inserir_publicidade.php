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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<form action="grava_publicidade.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td width="31%">&nbsp;</td>
      <td width="69%">

<?



require '../../conect/conect.php';

$tipo_veiculo = $_POST['tipo_veiculo'];

?>

<br>
<strong><font color="#0000FF" size="4">Inserir arte da publicidade !</font></strong></td>
    
    <tr> 
      <td><font color="#0000FF"><strong>Insira a arte da publicidade! </strong></font></td>
      <td><input name="publicidade" type="file" id="arquivo2"> 
        <font color="#0000FF" size="4">&nbsp;</font></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar Arte">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
