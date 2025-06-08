<html>
<head>
<title>CADASTRO DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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




<form name="form1" method="post" action="grava_cadcli.php">

<?

?>


  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><strong><font color="#0000FF" size="4">Cadastro 
        de clientes!. Os campos com * s&atilde;o obrigat&oacute;rios!</font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="15%">Nome:</td>
      <td width="37%"><input name="razaosocial" type="text" id="razaosocial" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td width="11%">Telefone</td>
      <td width="36%"><input name="telefone" type="text" id="telefone"></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email_ent" type="text" id="email_cob" size="50" maxlength="50"></td>
      <td>Celular</td>
      <td><input name="celular" type="text" id="celular"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Senha: </td>
      <td><input name="senha" type="text" id="senha3" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><input type="submit" name="Submit" value="Cadastrar-me"> 
        <input type="reset" name="Submit2" value="Limpar"> </td>
      <td><div align="right"> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
