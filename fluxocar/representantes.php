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
	
	background-image: url(imagens/logo_reticula_png.png);	
}
-->
</style>
</HEAD>
<BODY link="#999999" leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<p></p><p><img src="imagens/barra_nossos_representeantes.png" width="991" height="50"></p>
<table width="100%" height="159"  border="0">
  <tr>
    <td height="74" align="center"><?

require 'conect/conect.php';


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM representantes";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
      <div align="center"><font color="#FFFFFF"><? printf("$linha[1] - "); ?></font>
	  <font color="#FFFFFF"><? printf("$linha[2]<br><p>"); ?></font>
          <?
if($reg==1){
//echo "</tr><tr>";
$reg=0;
}
?>
          <? } ?>
      </div>  
  </tr>
  <tr>
    <td align="center">&nbsp; </td>
  </tr>
</table>



</BODY></HTML>