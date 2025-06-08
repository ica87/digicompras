<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://china-plastic-injection-molding.com/ -->
<HTML><HEAD><TITLE>Mult - Seg Equipamentos de Seguran&ccedil;a - 16-3721-2061</TITLE>

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
<BODY link="#999999">



<TABLE width="100%" border=0 cellPadding=0 cellSpacing=0>
  <!--DWLayoutTable-->
  <TBODY>
            <?

require 'conect/conect.php';

$categoria = $_POST['categoria'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where categoria='$categoria'";
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

<TD align="right" width="150" vAlign=top >


			<font color="#000000">Código-</font><font color="#000000"><? printf("$linha[0]<br>"); ?></font>
<? printf("<a href='../imagens/$linha[1]' target='_blank'><img src='../imagens/$linha[1]' border='0' width='112' height='96'></a>"); ?><br>
</td>
<td align="left" vAlign=top >
<br>
<font color="#000000">Produto: </font><font color="#000000"><? printf("$linha[2]<br>"); ?></font> 
              <font color="#000000">Categoria: </font><font color="#000000"><? printf("$linha[3]<br>"); ?></font> 
              <font color="#000000">Sub-categoria: </font><font color="#000000"><? printf("$linha[4]<br>"); ?></font> 
              <font color="#000000">Descrição: </font><font color="#000000"><? printf("$linha[5]<br>"); ?></font> 
</td>            
          
          <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>
	  

    </TR>
    <!--
	<tr>
		 <td colspan="5"><img src="img/px.gif" width="1" height="5" /></td>
	</tr>
	-->
  </TBODY>
</TABLE>
</BODY></HTML>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>