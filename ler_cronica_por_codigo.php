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
$codigo = $_POST['codigo'];


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM cronicas where codigo = '$codigo' order by codigo desc limit 1";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$titulo = $linha[1];
$cronica = $linha[2];
$aprovado = $linha[3];

?>
<td align="left"  vAlign=top >

  <div align="center">
    <form action="ler_cronicas.php" method="post" name="form1" target="navegacao">
      <font color="#000000">
      <input type="submit" name="button" id="button" value="Voltar">
      <? echo " <br>".$titulo."<br><br>".$cronica; ?></font>
            </form>
    </div>
  </TBODY></td> 

<?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>

</TABLE>



</body>
</html>
