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
      <td width="76%"><strong><font color="#0000FF" size="4">Alterar cores de qual sess&atilde;o voc&ecirc; deseja?</font></strong></td>
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
      <td><form name="form2" method="post" action="cabecalho/index_atualiza_cor_de_fundo_topo.php">
        <input type="submit" name="Submit2" value="Alterar cor de fundo do cabe&ccedil;alho ">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form3" method="post" action="b_superior/index_atualizar.php">
        <input type="submit" name="Submit3" value="Alterar cor da Barra superior ">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form4" method="post" action="intermediaria/index_atualiza_cor_de_fundo_intermediaria.php">
        <input type="submit" name="Submit4" value="Alterar cor de fundo da faixa intermedi&aacute;ria">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form5" method="post" action="pagina_central_de_navegacao/index_atualiza_cor_de_fundo_navegacao.php">
        <input type="submit" name="Submit5" value="Alterar cor de fundo da p&aacute;gina central de navega&ccedil;&atilde;o ">
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
  </table>
<p>&nbsp; </p>
</body>
</html>
