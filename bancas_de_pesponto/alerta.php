<?

require '../conect/conect.php';


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='index.php' target='_top'><img src='../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
<html>
<head>
<title>Alerta de usu&aacute;rio n&atilde;o permitido!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-size: 18px}
.style3 {color: #FFFF00}
-->
</style>
</head>
<?



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
<p align="center" class="style2 style1"><strong>ATEN&Ccedil;&Atilde;O!!</strong></p>
<p align="center" class="style2 style1">&nbsp;</p>
<p align="center" class="style2 style1"><strong>VOC&Ecirc; N&Atilde;O &Eacute; UM USU&Aacute;RIO DEVIDAMENTE AUTORIZADO!</strong></p>
<p align="center" class="style2 style1"><strong>  PARA ACESSAR A &Aacute;REA QUE EST&Aacute; TENTANDO!</strong></p>
<p align="center" class="style2 style1"><strong>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA</strong></p>
<p align="center" class="style1 style2"><strong>S&Oacute; ELE PARA DAR A PERMISS&Atilde;O! </strong></p>
<p align="center" class="style3 style1 style2">&nbsp;</p>
<form name="form1" method="post" action="index.php">
  <div align="center">
    <input type="submit" name="Submit" value="Voltar">
  </div>
</form>
<p align="center" class="style3"><strong></strong></p>


</body>
</html>
