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
<title>&Aacute;REA RESTRITA DE ADMINISTRA&Ccedil;&Atilde;O DO SITE! - SUPORTE 16-9739-1418 COM IVAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<table width="100%"  border="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td colspan="5"><div align="center" class="style1">
    &Aacute;rea Administrativa do site! </div></td>
    <td width="19%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="25%"><form action="estabelecimentos/menu.php" method="post" name="form3">
      <div align="center">
        <input type="submit" name="Submit33" value="Estabelecimentos comerciais">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span> </div>
    </form></td>
    <td width="3%">&nbsp;</td>
    <td width="27%"><form action="categorias/menu.php" method="post" name="form3">
      <div align="center">
        <input type="submit" name="Submit332" value="Categorias">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span> </div>
    </form></td>
    <td width="3%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
