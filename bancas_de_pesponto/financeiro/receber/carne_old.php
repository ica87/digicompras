<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>
<html>
<head>
<title>JALLF INFORMATICA - (16) 3725-1194 CARN&Ecirc; DO ALUNO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px; font-weight: bold; }
.style4 {font-size: 16px}
-->
</style></head>

<?

require '../../conect/conect.php';

			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>
<?
// dados do aluno
$codigo_aluno = $_POST['codigo_aluno'];
$curso = $_POST['curso'];

?>
<?
$sql = "SELECT * FROM logo limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$logo = $linha[1];

}
?>
<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	

?>




<table width="100%"  border="0">
  <tr>
    <td><form name="form1" method="post" action="javascript:window.close()">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Fechar">
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?
$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno' and curso = '$curso' order by codigo asc";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;


$codigo_aluno = $linha[1];
$nome = $linha[4];
$nome_resp = $linha[5];
$cpf_resp = $linha[6];
$mensalidade = $linha[11];
$juros_diarios = $linha[15];
$quitacao = $linha[17];

$vencto = $linha[12];
$quant_parc = $linha[13];

?>
<table width="100%"  border="1" bordercolor="#000000">
  <tr>
    <td width="23%" rowspan="2" valign="top" bordercolor="#FFFFFF"><? printf("<img src='../../imagens/$logo' border='0' width='120' height='60'>"); ?></td>
    <td width="24%" bordercolor="#FFFFFF"><div align="center"><span class="style3">Vencimento</span></div></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td width="26%" rowspan="2" valign="top" bordercolor="#FFFFFF"><? printf("<img src='../../imagens/$logo' border='0' width='120' height='60'>"); ?></td>
    <td width="23%" bordercolor="#FFFFFF"><div align="center"><span class="style3">Vencimento</span></div></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><div align="center" class="style1 style4"><? echo $vencto; ?></div></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF"><div align="center" class="style3"><? echo $vencto; ?></div></td>
  </tr>
  <tr>
    <td colspan="2" bordercolor="#FFFFFF">Codigo <? echo $codigo_aluno; ?> Aluno <? echo $nome; ?></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td colspan="2" bordercolor="#FFFFFF">Codigo <? echo $codigo_aluno; ?> Aluno <? echo $nome; ?></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF">Respons&aacute;vel <? echo $nome_resp; ?></td>
    <td bordercolor="#FFFFFF">CPF <? echo $cpf_resp; ?></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF">Respons&aacute;vel <? echo $nome_resp; ?></td>
    <td bordercolor="#FFFFFF">CPF <? echo $cpf_resp; ?></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF">Mensalidade <? echo $reg_mensalidade; ?> / <? echo $quant_parc; ?></td>
    <td bordercolor="#FFFFFF">Juros Di&aacute;rios <? echo "R$ ".$juros_diarios; ?></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF">Mensalidade <? echo $reg_mensalidade; ?> / <? echo $quant_parc; ?></td>
    <td bordercolor="#FFFFFF">Juros Di&aacute;rios <? echo "R$ ".$juros_diarios; ?></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF">Valor <? echo "R$ ".$mensalidade; ?></td>
    <td bordercolor="#FFFFFF">Valor recebido </td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF">Valor <? echo "R$ ".$mensalidade; ?></td>
    <td bordercolor="#FFFFFF">Valor recebido </td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF">Quita&ccedil;&atilde;o</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF">Quita&ccedil;&atilde;o</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="bottom" bordercolor="#FFFFFF"><div align="center">(carimbo e assinatura) </div></td>
    <td width="4%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td colspan="2" valign="bottom" bordercolor="#FFFFFF"><div align="center">(carimbo e assinatura) </div></td>
  </tr>
</table>

<p>  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
  <? } ?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>