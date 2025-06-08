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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
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




<TABLE width="100%" border=0 cellPadding=0 cellSpacing=0>
  <!--DWLayoutTable-->
  <TBODY>
            <?


$categoria = $_POST['categoria'];
$sub_categoria = $_POST['sub_categoria'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where categoria = '$categoria' and sub_categoria = '$sub_categoria'";
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


<TD align="right" width="160" vAlign=top >


  <div align="center"><font color="#000000">Código-</font><font color="#000000"><? printf("$linha[0]"); ?></font><br>
  
    <? printf("<a href='../imagens/$linha[1]' target='_blank'><img src='../imagens/$linha[1]' border='0' width='80' height='96'></a>"); ?>
  

      <br>
  </div></td>
<td align="left" width="300"  vAlign=top >

<br>
<font color="#000000">Produto: </font><font color="#000000"><? printf("$linha[2]<br>"); ?></font> 
              <font color="#000000">Descrição: </font><font color="#000000"><? printf("$linha[5]<br>"); ?></font>
			  <font color="#000000">Preço: </font><font color="#000000"><? printf("$linha[6]<br>"); ?></font>
			  
			  

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

 
</td>            
          
	  

  </TBODY>
</TABLE>
</BODY></HTML>
<? 
mysql_close($conexao);
?>