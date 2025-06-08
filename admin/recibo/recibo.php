<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>DIGICOMPRAS - APLICATIVOS WEB - RECIBO DE SERVI&Ccedil;OS PRESTADOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="">
  <?
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

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); ?>
  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
  <? } ?>
  <table width="100%"  border="0">
      <tr>
        <td>&nbsp;</td>
          <td width="49%">&nbsp;</td>
        <td colspan="2" valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
    <tr>
      <td width="1%">&nbsp;</td>
      <td colspan="3"><div align="center"><span class="style2">www.digicompras.com.br</span></div></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"> <div align="center"><b> <b>Rua joaquim Garcia Souza, 6183</b> Franca - SP CEP 14.403-794 </b></div></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center"><strong>(16) 9739 - 1418 - Ivan Campos </strong></div></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
        <div align="center"></div></td>
      <td colspan="3"><div align="center" class="style2">RECIBO DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS</div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><b>Recebemos de: </b></td>
      <td width="2%">&nbsp;</td>
    </tr>
    <tr>
      <td><b>
      </b></td>
      <td colspan="3"><b>
        <input name="textfield" type="text" size="80" maxlength="80">
      </b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><b>O valor de: </b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><b>
        <input name="textfield2" type="text" size="80" maxlength="80">
      </b></td>
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
      <td>&nbsp;</td>
      <td><b>Referente a: </b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><b>
        <input name="textfield3" type="text" size="80" maxlength="80">
      </b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
      <td colspan="3"><div align="center"><b>Franca - SP
            <input name="textfield4" type="text" size="3" maxlength="3">
  de
  <input type="text" name="textfield5">
  de
  <input name="textfield6" type="text" size="4" maxlength="4">
      </b></div></td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"> <b>Por ser express&atilde;o da verdade, firmo o presente: </b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center">______________________________________________</div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>