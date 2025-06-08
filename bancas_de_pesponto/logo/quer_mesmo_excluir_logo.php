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
<p>        <?
require '../../conect/conect.php';
?>

</p>
<p><strong><font color="#0000FF" size="4">Tem certeza que deseja exlcuir o logotipo? </font></strong></p>
<table width="100%"  border="0">
  <tr>
    <td width="7%"><form name="form2" method="post" action="menu.php">
      <input type="submit" name="Submit2" value="N&atilde;o">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    </form></td>
    <td width="93%"><form action="excluir_logo_permanente.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="100%"  border="0">
        <tr>
          <td>              <div align="left">
                <input type="submit" name="Submit" value="Sim">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
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
