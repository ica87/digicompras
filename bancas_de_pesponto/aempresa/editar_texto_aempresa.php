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
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit22" value="Voltar">
</form>
<form action="grava_edit_texto_aempresa.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
require '../../conect/conect.php';
?>

</td>
    </tr>
    <tr>
	<?
$sql = "SELECT * FROM a_empresa";
$res = mysql_query($sql);
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

?>
      <td width="11%">&nbsp;</td>
      <td width="89%"><p><strong><font color="#0000FF" size="4">Editar texto da p&aacute;gina A Empresa </font></strong><strong><font color="#0000FF" size="4">!</font></strong></p>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Descri&ccedil;&atilde;o:</strong></font></td>
      <td><textarea name="texto" cols="50" rows="10" wrap="PHYSICAL" id="texto"><? echo $linha[1]; ?></textarea></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
