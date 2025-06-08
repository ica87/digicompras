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
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 16px;
}
.style2 {font-size: 18px; color: #0000FF;}
-->
</style>
</head>

<body>
<p>        <?
require '../../../conect/conect.php';
?>

</p>
<form action="../menu.php" method="post" name="form1" target="_top">
  <input type="submit" name="Submit" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p class="style1">Inseir cor pela 1&ordm; vez do fundo da p&aacute;gina central de navega&ccedil;&atilde;o! insira o codigo hexadecimal ex: 0000ff.<br>
   Escolha na tabela abaixo, copie, cole e clique em atualizar
<form action="grava_cor_de_fundo_navegacao.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="33%">Cor de fundo da p&aacute;gina central de navega&ccedil;&atilde;o </td>
      <td width="18%"><input name="cor_fundo_navegacao" type="text" id="cor_fundo_navegacao"></td>
      <td width="49%"><input type="submit" name="Submit2" value="Atualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
