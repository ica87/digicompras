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
$vg = $_GET['chamar'];
$foto = $_GET['imagem'];


$referencia = $vg;
$imagem = $foto;
	  
$sql = "select * from produtos where referencia = '$referencia'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<img src='<? echo $imagem; ?>' border='0' width='420' height='290'>

      </p>
      <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
      <? } ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</body>
</html>
