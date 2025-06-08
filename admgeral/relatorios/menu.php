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
      <td colspan="2"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>


</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77%"><strong><font color="#0000FF" size="4">Gerar relat&oacute;rios </font></strong></td>
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
      <td>&nbsp;</td>
      <td><form name="form5" method="post" action="informe_empresa_conveniada.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Cart&otilde;es para produ&ccedil;&atilde;o por empresa conveniada">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="informe_empresa_conveniada_lista_todos_usuarios.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit23" value="Listar todos os usuarios da empresa">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="relatorio_de_faturamento_mensal_todas_empresas_sintetico.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="mes_ano" type="text" id="mes_ano" size="7" maxlength="7">
        <input type="submit" name="Submit2" value="Relat&oacute;rio de vendas geral sint&eacute;tico">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
