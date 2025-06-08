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
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
//SE CONECTA AO BANCO DE DADOS DIGICOMPRAS
require '../../conect/conect.php';
?>

</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Tela de Edi&ccedil;&atilde;o de categoria!</font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#FF0000">Aten&ccedil;&atilde;o!</font></strong></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong></strong></font></td>
      <td><strong><font color="#FF0000">A mudan&ccedil;a de nome de categoria afetar&aacute; todos os produtos que estiverem relacionados a ela, devendo ser atualizado todos os </font></strong></td>
    </tr>
    <tr> 
      <td width="11%"><font color="#0000FF"><strong></strong></font></td>
      <td width="89%"><strong><font color="#FF0000">produtos para o novo nome da categoria! </font></strong></td>
    </tr>
  </table>
  <form action="selecione_codigo_categoria_edicao.php" method="post" enctype="multipart/form-data" name="form1">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    <input type="submit" name="Submit" value="Alterar nome de Categoria">
      </form>
<p>&nbsp; </p>
</body>
</html>
