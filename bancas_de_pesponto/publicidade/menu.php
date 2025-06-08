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
      <td colspan="2">       
<?



require '../../conect/conect.php';

?>
</td>
    </tr>
    <tr>
      <td width="24%"><form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit222" value="Voltar ao menu principal">
      </form></td>
      <td width="76%"><strong><font color="#0000FF" size="4">O que deseja fazer com a arte publicit&aacute;ria de seu site?</font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form1" method="post" action="inserir_publicidade.php">
        <input type="submit" name="Submit" value="Inserir Arte">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form2" method="post" action="ediar_arte.php">
        <input type="submit" name="Submit2" value="Trocar Arte">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="excluir_arte_confirma.php">
        <input type="submit" name="Submit3" value="Excluir Arte">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
</table>
<p>&nbsp; </p>
</body>
</html>
