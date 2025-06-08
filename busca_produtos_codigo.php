<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://china-plastic-injection-molding.com/ -->
<HTML><HEAD><TITLE>Busca de produtos</TITLE>

<META 
content=" " 
name=description>
<META 
content=" " 
name=keywords>
<META 
content="" 
name=abstract>
<META content=index,follow name=ROBOTS>
<META content="Microsoft FrontPage 5.0" name=GENERATOR>
<META content=FrontPage.Editor.Document name=ProgId>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META http-equiv=EXPIRES content="Mon, 25 Dec 2009 00:00:01 PST">
<META content=General name=RATING>
<META content="24 days" name=REVISIT-AFTER><LINK 
type=text/css rel=stylesheet>


<style type="text/css">
<!--
body {
}
-->
</style>
</HEAD>

			<?
			
require 'conect/conect.php';
			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>

            <?


$codigo = $_POST['codigo'];

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
    <td>&nbsp;</td>
    <td><center>
	<font color="#0000ff">Esse produto se encontra na categoria <? printf("$linha[3], "); ?>Sub-categoria <? printf("$linha[4]<br>"); ?>
Onde também poderás conferir outros produtos!  </font><br><br>
</center>
</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="25%">&nbsp;</td>
    <td width="50%"><div align="center">
      <p><font color="#000000">Código pesquizado ( </font><font color="#000000"><? printf("$linha[0]"); ?> ) </font></p><br>
      <p><? printf("<a href='../imagens/$linha[1]' target='_blank'><img src='../imagens/$linha[1]' border='0' width='80' height='96'></a>"); ?></p>
      </div></td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"> <font color="#000000">Produto: </font><font color="#000000"><? printf("$linha[2]<br>"); ?></font> <font color="#000000">Descrição: </font><font color="#000000"><? printf("$linha[5]<br>"); ?></font> <font color="#000000">Preço: </font><font color="#000000"><? printf("$linha[6]<br>"); ?></font>
        <?


if($linha[7]=="Sim"){
printf("Preço de Oferta R$ $linha[8]<br><br><br>");
$linha[7]="Não";
}
?>
        <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>
        <? } ?>
</div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY></HTML>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>