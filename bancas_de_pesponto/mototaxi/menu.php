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
<title>SOLICITA&Ccedil;&Atilde;O DE MOTOTAXI</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>

</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77%"><strong><font color="#0000FF" size="4">Solicita&ccedil;&otilde;es de mototaxi?</font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar ao menu principal">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="informe_num_para_alterar_status_da_solicitacao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Altera&ccedil;&atilde;o de status de solicita&ccedil;&atilde;o de mototaxi">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Relet&oacute;rio peri&oacute;dico para acerto de mototaxi </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form2" method="post" action="relatorio_periodico.php">
        Data inicial
        <input name="datainicial" type="text" id="datainicial" size="10" maxlength="10"> 
        Data final 
        <input name="datafinal" type="text" id="datafinal" size="10" maxlength="10">
        <input type="submit" name="Submit" value="Gerar relat&oacute;rio">      
            </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
