<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<p><p><p>        <?
require '../../conect/conect.php';



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
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
<?
printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form action="atualizar_foto.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">
	  <?
	  $codigo = $_POST['codigo'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM representantes where codigo = '$codigo'";
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
<TD align="right" width="100" vAlign=top >


			
<? printf("<a href='../../imagens/$linha[17]' target='_blank'><img src='../../imagens/$linha[17]' border='0' width='80' height='96'></a>"); ?>
<input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
	  </td>
      <td width="43%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
    </tr>
    <tr>
      <td>Selecione a nova foto</td>
      <td><input name="foto" type="file" id="foto"></td>
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
<p>&nbsp;</p>
</body>
</html>
