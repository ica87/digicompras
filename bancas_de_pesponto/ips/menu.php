<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>
<html>
<head>
<title>ZONA DE IP's</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">
        <?
require '../../conect/conect.php';

?>	  </td>
    </tr>
    <tr>
      <td width="24%">&nbsp;</td>
      <td width="76%"><strong><font color="#0000FF" size="4">O que deseja fazer na sess&atilde;o de IP's?</font></strong></td>
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
      <td><form name="form1" method="post" action="inserir.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="cadastrar IP">
        </form></td>
    </tr>
    
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="informe_ip_para_exclusao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="ExcluirIP">
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
