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
.style1 {font-size: 24px}
-->
</style></head>
<script language="javascript">
function foco(usuario)
{
document.getElementById(usuario).focus();
}
</script>

			<?
			
require 'conect/conect.php';
			
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body onload="javascript:foco('usuario');" bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>

<p>&nbsp;</p>
<p align="center" class="style1"><strong>Prezado correspondente!</strong></p>
<p align="center" class="style1"><strong>Fa&ccedil;a seu login e acompanhe seu contrato! </strong></p>
<form name="form1" method="post" action="verifica_clientes.php">
  <table width="60%" border="0" align="center">
    <tr> 
      <td width="28%"><div align="right">CPF / CNPJ :</div></td>
      <td width="46%"><input name="cpf" type="text" id="cpf">
      <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo date('d-m-y'); ?>"></td>
      <td width="26%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Conectar">
      <input type="reset" name="Submit2" value="Limpar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
<?
mysql_close($conexao);
?>