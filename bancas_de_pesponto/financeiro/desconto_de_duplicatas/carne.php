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
<title>L&Acirc;MINA DE A&Ccedil;O FACAS - (16) 3409-4292</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 16px; font-weight: bold; }
.style4 {font-size: 18px}
.style5 {font-size: 18px; font-weight: bold; }
.style8 {font-size: 12px}
.style9 {
	font-size: 13px;
	font-weight: bold;
}
.style10 {font-size: 10px}
-->
</style>
</head>

<?

require '../../conect/conect.php';

			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" bgproperties="fixed" marginwidth="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>
<?
// dados do aluno
$num_fatura = $_POST['num_fatura'];
$cnpj = $_POST['cnpj'];

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




<?
$sql = "SELECT * FROM contas_a_receber where num_fatura = '$num_fatura' and cnpj = '$cnpj' and quitacao = 'Em Aberto' order by codigo asc";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;


$codigo_cliente = $linha[1];
//$nome = $linha[4];
$nfantasia_cliente = $linha[4];
$razaosocial_cliente = $linha[5];
$cnpj = $linha[6];
$inscr_est = $linha[7];
$quitacao = $linha[17];
$mensalidade = $linha[11];

$vencto = $linha[12];
$quant_parc = $linha[13];
$num_mensalidade = $linha[35];

?>
<table width="100%"  border="2" bordercolor="#000000">
  <tr>
    <td width="25%" rowspan="2" valign="top" bordercolor="#FFFFFF"><? printf("<img src='../../imagens/$logo' border='0' width='250' height='60'>"); ?></td>
    <td width="25%" bordercolor="#FFFFFF"><div align="center"><span class="style3">Vencimento</span></div></td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td width="24%" rowspan="2" valign="top" bordercolor="#FFFFFF"><? printf("<img src='../../imagens/$logo' border='0' width='250' height='60'>"); ?></td>
    <td width="25%" bordercolor="#FFFFFF"><div align="center"><span class="style3">Vencimento</span></div></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><div align="center" class="style1 style4"><? echo $vencto; ?></div></td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left">|</div></td>
    <td bordercolor="#FFFFFF"><div align="center" class="style5"><? echo $vencto; ?></div></td>
  </tr>
  <tr>
    <td colspan="2" bordercolor="#FFFFFF"><span class="style8"> Raz&atilde;o Social: <span class="style9"><? echo $razaosocial_cliente; ?></span></span></td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style8">|</div></td>
    <td colspan="2" bordercolor="#FFFFFF"><span class="style8"> Raz&atilde;o Social: <span class="style9"><? echo $razaosocial_cliente; ?></span></span></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><span class="style10">Nome Fantasia: <? echo $nfantasia_cliente; ?></span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
    <td align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td bordercolor="#FFFFFF"><span class="style10">Nome Fantasia:  <? echo $nfantasia_cliente; ?></span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><span class="style10">CNPJ: <? echo $cnpj; ?></span></td>
    <td bordercolor="#FFFFFF"><span class="style10">INSCR_EST: <? echo $inscr_est; ?></span></td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td bordercolor="#FFFFFF"><span class="style10">CNPJ:  <? echo $cnpj; ?></span></td>
    <td bordercolor="#FFFFFF"><span class="style10">INSCR_EST:  <? echo $inscr_est; ?></span></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><span class="style10">Parcela <? echo $num_mensalidade; ?> / <? echo $quant_parc; ?></span></td>
    <td bordercolor="#FFFFFF"><span class="style10">Juros Di&aacute;rios <? echo "R$ ".$juros_diarios; ?></span></td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td bordercolor="#FFFFFF"><span class="style10">Mensalidade <? echo $reg_mensalidade; ?> / <? echo $quant_parc; ?></span></td>
    <td bordercolor="#FFFFFF"><span class="style10">Juros Di&aacute;rios <? echo "R$ ".$juros_diarios; ?></span></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><span class="style10">Valor <? echo "R$ ".$mensalidade; ?></span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td bordercolor="#FFFFFF"><span class="style10">Valor <? echo "R$ ".$mensalidade; ?></span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF"><span class="style10">Quita&ccedil;&atilde;o</span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
    <td width="1%" align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td bordercolor="#FFFFFF"><span class="style10">Quita&ccedil;&atilde;o</span></td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="bottom" bordercolor="#FFFFFF"><div align="center" class="style10">(carimbo e assinatura)</div></td>
    <td align="center" valign="top" bordercolor="#FFFFFF"><div align="left" class="style10">|</div></td>
    <td colspan="2" valign="bottom" bordercolor="#FFFFFF"><div align="center" class="style10">(carimbo e assinatura)</div></td>
  </tr>
</table>


<p>  

<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
  <? } ?>
</p>
</body>
</html>
<?
mysql_close($conexao);
?>