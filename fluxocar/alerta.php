<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-size: 18px}
.style3 {color: #FFFF00}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {
	font-size: 24px;
	color: #0000FF;
}
.style5 {color: #0000FF}
-->
</style>
</head>
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
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style1 style4"><strong>ATEN&Ccedil;&Atilde;O!!</strong></p>
<p align="center" class="style2 style5"><strong>USERNAME E/OU PASSWORD INCORRETOS OU </strong></p>
<p align="center" class="style2 style5"><strong>VOC&Ecirc; N&Atilde;O &Eacute; UM USU&Aacute;RIO DEVIDAMENTE AUTORIZADO!</strong></p>
<p align="center" class="style2 style5"><strong>  PARA ACESSAR A &Aacute;REA QUE EST&Aacute; TENTANDO!</strong></p>
<p align="center" class="style2 style5"><strong>VERIFIQUE SUA SENHA !</strong></p>
<form name="form1" method="post" action="navegacao.php">
  <div align="center">
    <input type="submit" name="Submit" value="Tentar novamente">
  </div>
</form>
<p align="center" class="style3"><strong></strong></p>


</body>
</html>
