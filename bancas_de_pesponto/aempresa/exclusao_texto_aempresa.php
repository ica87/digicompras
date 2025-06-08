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
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p><?
require '../../conect/conect.php';
?>

</p>
<p><strong><font color="#0000FF" size="4">Tem certeza que deseja exlcuir o texto da p&aacute;gina inicial do site? </font></strong></p>
<table width="100%"  border="0">
  <tr>
    <td width="9%"><form name="form2" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="N&atilde;o">
    </form></td>
    <td width="91%"><form action="excluir_texto_aempresa.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="100%"  border="0">
        <tr>
          <td>
              <div align="left">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input type="submit" name="Submit" value="Sim">
              </div></td>
        </tr>
      </table>
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
<p>&nbsp;</p>
</body>
</html>
