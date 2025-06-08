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
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">        <?
require '../../conect/conect.php';
?>

</td>
    </tr>
    <tr>
      <td width="24%">&nbsp;</td>
      <td width="76%"><strong><font color="#0000FF" size="4">A qual p&uacute;blico deseja enviar newsletter? </font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../principal.php">
        <input type="submit" name="Submit" value="Voltar ao menu principal">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form2" method="post" action="index.php">
        <input type="submit" name="Submit2" value="Newsletter para Clientes">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form3" method="post" action="newsletter_correspondentes/index.php">
        <input type="submit" name="Submit3" value="Newsletter para Correspondentes">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form4" method="post" action="newsletter_operadores/index.php">
        <input type="submit" name="Submit4" value="Newsletter para Operadores">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
