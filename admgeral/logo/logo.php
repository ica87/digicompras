<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 18px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<p>        <?
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

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<p class="style1">Editar logotipo - (Substitui logotipo na parte superior do site) </p>
<p><a href="menu.php">Voltar</a></p>
<form action="atualizar_logo.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="27%">Selecione o novo logotipo </td>
      <td width="24%"><input name="logo" type="file" id="logo"></td>
      <td width="49%"><input type="submit" name="Submit" value="Atualizar"></td>
    </tr>
  </table>
</form>
<p class="style1">Alterar tamanho do logotipo? especifique a largura e altura em pixels! </p>
<form action="atualizar_tamanho_logo.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="27%">Largura do logotipo </td>
      <td width="24%"><input name="largura_logo" type="text" id="largura_logo"></td>
      <td width="49%"><input type="submit" name="Submit2" value="Atualizar"></td>
    </tr>
  </table>
</form>

<? 
$sql = "SELECT * FROM logo where codigo = '0'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<?
printf("Largura em Pixels $linha[2]<br>");
printf("Altura padrão em Pixels $linha[3]"); 

?>
<br><br>
<?

printf("<a href='http://www.digicompras.com.br/imagens/$linha[1]' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0' width='$linha[2]' height='$linha[3]'></a>"); 

?>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>


</body>
</html>
