<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_texto_aempresa.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
require '../../conect/conect.php';


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?></td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="89%"><strong><font color="#0000FF" size="4">Inserir texto da p&aacute;gina A Empresa!</font></strong></td>
    </tr>
    <tr>
      <td><a href="menu.php">Voltar</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Descri&ccedil;&atilde;o:</strong></font></td>
      <td><textarea name="texto" maxlength="100" cols="50" wrap="PHYSICAL" id="texto"></textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
