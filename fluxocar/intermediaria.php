<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>categorias</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link href="file:///D|/1_webs/1_digicompras/busca_produtos_codigo.php" rel="stylesheet" type="text/css">
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
			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_intermediaria";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
<?
if($reg==1){
echo "</td>";
$reg=0;
}
?>
<? } ?>

<table width="100%"  border="0">

          
                <tr><td colspan="4">                
              </tr>
				  
          <tr>
            <td width="33%">&nbsp;</td>
            <td width="17%"><form action="login.php" method="post" name="form1" target="navegacao">
              <div align="center">
                <input type="submit" name="Submit3" value="&Aacute;rea do Operador">
              </div>
            </form></td>
            <td width="17%"><form action="localizacao.php" method="post" name="form3" target="navegacao">
              <div align="center">
                <input type="submit" name="Submit32" value="Nossa Localiza&ccedil;&atilde;o">
              </div>
            </form></td>
            <td width="33%">&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
</body>
</html>
