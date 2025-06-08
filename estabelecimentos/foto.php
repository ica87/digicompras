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
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<?



require '../conect/conect.php';

?>
<br>
<?
$vg = $_GET['chamar'];

$codigo = $vg;
 

 ?></p>
<form name="form1" method="post" action="index.php">
  <input type="submit" name="Submit3" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form action="atualizar_foto.php" method="post" enctype="multipart/form-data" name="form1">
<?
$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$cnpj = $linha[3];
$foto_deletar = $linha[46];
$foto_deletar2 = $linha[53];
$foto_deletar3 = $linha[54];
$foto_deletar4 = $linha[55];


?>
  <table width="100%"  border="0">
    <tr>
      <td width="34%">Refer&ecirc;ncia selecionada para altera&ccedil;&atilde;o foi </td>
      <td width="48%"><font color="#666666"><? echo $codigo; ?></font>
      <font color="#666666">
      <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>">
      </font></td>
      <td width="18%" rowspan="4"><div align="center">
	  </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 1</td>
      <td><input name="foto" type="file" id="foto"></td>
    </tr>
    <tr>
      <td colspan="2"><?
	  printf("<a href='../admgeral/estabelecimentos/$cnpj/$linha[46]' target='_blank'><img src='../admgeral/estabelecimentos/$cnpj/$linha[46]' border='0' width='300'></a>");
	  ?></td>
    </tr>
    <tr>
      <td><input name="pasta" type="hidden" id="pasta" value="<? echo $cnpj; ?>">
      <input name="foto_deletar" type="hidden" id="foto_deletar2" value="<? echo $foto_deletar; ?>"></td>
      <td><input type="submit" name="Submit" value="Atualizar">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
    </tr>

  </table>
      <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
    <? } ?>

</form>
<form action="atualizar_foto2.php" method="post" enctype="multipart/form-data" name="form1">
  <?
$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$cnpj = $linha[3];
$foto_deletar = $linha[46];

?>
  <table width="100%"  border="0">
    <tr>
      <td width="34%">Refer&ecirc;ncia selecionada para altera&ccedil;&atilde;o foi </td>
      <td width="48%"><font color="#666666"><? echo $codigo; ?></font> <font color="#666666">
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>">
      </font></td>
      <td width="18%" rowspan="4"><div align="center"> </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 2</td>
      <td><input name="foto2" type="file" id="foto2"></td>
    </tr>
    <tr>
      <td colspan="2"><?
	  printf("<a href='../admgeral/estabelecimentos/$cnpj/$linha[53]' target='_blank'><img src='../admgeral/estabelecimentos/$cnpj/$linha[53]' border='0' width='300'></a>");
	  ?></td>
    </tr>
    <tr>
      <td><input name="pasta" type="hidden" id="pasta" value="<? echo $cnpj; ?>">
          <input name="foto_deletar2" type="hidden" id="foto_deletar2" value="<? echo $foto_deletar2; ?>"></td>
      <td><input type="submit" name="Submit2" value="Atualizar">
          <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span></td>
    </tr>
  </table>
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  <? } ?>
</form>
<form action="atualizar_foto3.php" method="post" enctype="multipart/form-data" name="form1">
  <?
$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$cnpj = $linha[3];
$foto_deletar = $linha[46];

?>
  <table width="100%"  border="0">
    <tr>
      <td width="34%">Refer&ecirc;ncia selecionada para altera&ccedil;&atilde;o foi </td>
      <td width="48%"><font color="#666666"><? echo $codigo; ?></font> <font color="#666666">
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>">
      </font></td>
      <td width="18%" rowspan="4"><div align="center"> </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 3</td>
      <td><input name="foto3" type="file" id="foto3"></td>
    </tr>
    <tr>
      <td colspan="2"><?
	  printf("<a href='../admgeral/estabelecimentos/$cnpj/$linha[54]' target='_blank'><img src='../admgeral/estabelecimentos/$cnpj/$linha[54]' border='0' width='300'></a>");
	  ?></td>
    </tr>
    <tr>
      <td><input name="pasta" type="hidden" id="pasta" value="<? echo $cnpj; ?>">
          <input name="foto_deletar3" type="hidden" id="foto_deletar3" value="<? echo $foto_deletar3; ?>"></td>
      <td><input type="submit" name="Submit4" value="Atualizar">
          <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span></td>
    </tr>
  </table>
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  <? } ?>
</form>
<form action="atualizar_foto4.php" method="post" enctype="multipart/form-data" name="form1">
  <?
$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$cnpj = $linha[3];
$foto_deletar = $linha[46];

?>
  <table width="100%"  border="0">
    <tr>
      <td width="34%">Refer&ecirc;ncia selecionada para altera&ccedil;&atilde;o foi </td>
      <td width="48%"><font color="#666666"><? echo $codigo; ?></font> <font color="#666666">
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>">
      </font></td>
      <td width="18%" rowspan="4"><div align="center"> </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 4</td>
      <td><input name="foto4" type="file" id="foto4"></td>
    </tr>
    <tr>
      <td colspan="2"><?
	  printf("<a href='../admgeral/estabelecimentos/$cnpj/$linha[55]' target='_blank'><img src='../admgeral/estabelecimentos/$cnpj/$linha[55]' border='0' width='300'></a>");
	  ?></td>
    </tr>
    <tr>
      <td><input name="pasta" type="hidden" id="pasta" value="<? echo $cnpj; ?>">
          <input name="foto_deletar4" type="hidden" id="foto_deletar4" value="<? echo $foto_deletar4; ?>"></td>
      <td><input type="submit" name="Submit5" value="Atualizar">
          <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span></td>
    </tr>
  </table>
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  <? } ?>
</form>
<p>&nbsp;</p>
</body>
</html>
