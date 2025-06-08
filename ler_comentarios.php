<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
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
</style>
</head>

			<?
			
require 'conect/conect.php';
			
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

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM comentarios where aprovado = 'Sim' order by codigo desc";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>

<td align="left" width="33%"  vAlign=top >

<br><br>

<font color="#000000">Nome - </font><font color="#000000"><? printf("$linha[1]<br>"); ?></font>
<font color="#000000">Cidade - </font><font color="#000000"><? printf("$linha[2]<br>"); ?></font> 
              <font color="#000000">Comentário - </font><font color="#000000"><? printf("$linha[3]<br><br>"); ?></font>
 
</td> 

<td align="left" width="3%"  vAlign=top ></td>           

  <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>

</TBODY>
</TABLE>



</body>
</html>
