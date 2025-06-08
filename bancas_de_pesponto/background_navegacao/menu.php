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
//SE CONECTA AO BANCO DE DADOS DIGICOMPRAS
require '../../conect/conect.php';
?>

</td>
    </tr>
    <tr>
      <td width="25%">&nbsp;</td>
      <td width="75%"><strong><font color="#0000FF" size="4">Oque deseja fazer com o background da p&aacute;gina de navega&ccedil;&atilde;o?</font></strong></td>
    </tr>
    <tr>
      <td><form name="form4" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit4" value="Voltar ao menu principal">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form1" method="post" action="inserir_background_navegacao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Inserir Background na p&aacute;gina de navega&ccedil;&atilde;o">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form2" method="post" action="alterar_background_navegacao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Editar Background da p&aacute;gina de navega&ccedil;&atilde;o">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="confirma_exclusao_background.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Excluir Background da p&aacute;gina de navega&ccedil;&atilde;o">
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
