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
<title>Lgoin</title>
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
</style></head>
			<?
			
			
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

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="verifica.php">
  <table width="60%" border="0" align="center">
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="password" id="senha2"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="22%">&nbsp;</td>
      <td width="52%">        <input type="submit" name="Submit" value="Conectar">
        <input type="reset" name="Submit2" value="Limpar"> </td>
      <td width="26%">&nbsp; </td>
    </tr>
  </table>
</form>
</body>
</html>
<?
mysql_close($conexao);
?>