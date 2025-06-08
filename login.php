<html>
<head>
<title>Documento sem t&iacute;tulo</title>
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
			
require 'conect/conect.php';
	
$data_hoje=$_POST['data_hoje'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ano=$_POST['ano'];
$mes_ano=$_POST['mes_ano'];
			
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

<form name="form1" method="post" action="verifica.php">
  <table width="60%" border="0" align="center">
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario">
        <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
      <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="11%">Senha:</td>
      <td width="63%"><input name="senha" type="password" id="senha2">
        <input type="submit" name="Submit" value="Conectar">
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