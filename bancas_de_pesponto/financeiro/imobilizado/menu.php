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
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?
require '../../../conect/conect.php';
error_reporting(E_ALL);
?>
<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>" 
<? } ?>
leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">


</td>
    </tr>
    <tr>
      <td width="19%">&nbsp;</td>
      <td><p><strong><font color="#0000FF" size="4">O que deseja fazer com os investimentos</font></strong><strong><font color="#0000FF" size="4">?</font></strong></p>      </td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../principal.php">
        <input type="submit" name="Submit" value="Voltar ao menu principal">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="inserir.php" method="post" name="form2">
        <input type="submit" name="Submit2" value="Registrar Objeto">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="relatorio_imobilizado.php">
        <select name="nfantasia" id="select6">
          <option selected></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
        </select>
        <input type="submit" name="Submit3" value="Gerar Relat&oacute;rio de Imobilizado por loja">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="editar_por_cod_objeto.php" method="post" name="form2">
        <p>Informe o c&oacute;digo do objeto
          <input name="cod_objeto" type="text" id="cod_objeto">        
          <input type="submit" name="Submit22" value="Editar Objeto por codigo">
          <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span>        </p>
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
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
