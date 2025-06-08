<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
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
<?

require 'conect/conect.php';
$sql = "SELECT * FROM fundo_navegacao";
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





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
      </p>
            <table width="100%"  border="0">
              <tr>
                <td><?
$sql = "select * from publicidade";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

printf("<img src='publicidade/$linha[1]' border='0' width='1000' height='150'></a>");
}
?></td>
              </tr>
            </table>            
            <?
$categoria = $_POST['categoria'];
$sub_categoria = $_POST['sub_categoria'];

$sql = "SELECT * FROM produtos where categoria = '$categoria' and sub_categoria = '$sub_categoria'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

            <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>Foto</td>
          <td>Refer&ecirc;ncia</td>
          <td width="12%">Material</td>
          <td width="14%">Numera&ccedil;&atilde;o</td>
          <td>Pre&ccedil;o</td>
        </tr>
		
        <tr>
          <td width="10%"><input name="codigo" type="hidden" id="codigo2" value="<? echo $linha[0]; ?>">
              <? printf("<a href='detalhes_produtos.php?chamar=$linha[0]' ><img src='imagens/$linha[1]' border='2' width='67' height='56'></a>"); ?> </td>
          <td width="18%"><? printf("<a href='detalhes_produtos.php?chamar=$linha[0]' >$linha[0]</a> ");?></td>
          <td><? printf("$linha[2]"); ?></td>
          <td><? printf("$linha[6]"); ?></td>
          <td width="19%"><? printf("R$ $linha[10]"); ?></td>
		  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
      </table>

          

<p>&nbsp;</p>
</body>
</html>
