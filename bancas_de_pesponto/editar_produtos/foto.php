<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
<br>
<? 
$codigo = $_POST['codigo'];




 ?></p>
<p><a href="menu_edit.php">Voltar</a></p>
<form action="atualizar_foto.php" method="post" enctype="multipart/form-data" name="form1">
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
  <table width="100%"  border="0">
    <tr>
      <td width="57%">C&oacute;digo selecionado para altera&ccedil;&atilde;o foi </td>
      <td width="25%"><font color="#666666"><? echo $codigo ?></font>
      <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>"></td>
      <td width="18%" rowspan="3"><div align="center">
	  <?
	  printf("<a href='../../imagens/$linha[1]' target='_blank'><img src='../../imagens/$linha[1]' border='0' width='80' height='96'></a>");
	  ?></div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 1 </td>
      <td><input name="foto" type="file" id="foto"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Atualizar"></td>
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
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>

  <table width="100%"  border="0">
    <tr>
      <td width="57%">&nbsp;</td>
      <td width="25%">
          <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>"></td>
      <td width="18%" rowspan="3"><div align="center">
          <?
	  printf("<a href='../../imagens2/$linha[9]' target='_blank'><img src='../../imagens2/$linha[9]' border='0' width='80' height='96'></a>");
	  ?>
      </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 2 </td>
      <td><input name="foto2" type="file" id="foto2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit2" value="Atualizar"></td>
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
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>

  <table width="100%"  border="0">
    <tr>
      <td width="57%">&nbsp;</td>
      <td width="25%">
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>"></td>
      <td width="18%" rowspan="3"><div align="center">
          <?
	  printf("<a href='../../imagens3/$linha[10]' target='_blank'><img src='../../imagens3/$linha[10]' border='0' width='80' height='96'></a>");
	  ?>
      </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 3 </td>
      <td><input name="foto3" type="file" id="foto3"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit22" value="Atualizar"></td>
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
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>

  <table width="100%"  border="0">
    <tr>
      <td width="57%">&nbsp;</td>
      <td width="25%">
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>"></td>
      <td width="18%" rowspan="3"><div align="center">
          <?
	  printf("<a href='../../imagens4/$linha[11]' target='_blank'><img src='../../imagens4/$linha[11]' border='0' width='80' height='96'></a>");
	  ?>
      </div></td>
    </tr>
    <tr>
      <td>Selecione a nova foto 4 </td>
      <td><input name="foto4" type="file" id="foto23"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit23" value="Atualizar"></td>
    </tr>
    <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
    <? } ?>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
