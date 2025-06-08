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
<title>DUPLICATAS - L&Acirc;MINA DE A&Ccedil;O FACAS - (16) 3409-4292</title>
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
.style4 {font-size: 18px}
.style10 {font-size: 10px}
.style11 {font-size: 12px; font-weight: bold; }
-->
</style>

<style>
.rotacao {
border:0px solid;

/* Safari */
-webkit-transform: rotate(-90deg);

/* Opera */
-o-transform: rotate(-90deg);
 
/* Firefox */
-moz-transform: rotate(-90deg);
 
/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
.style13 {font-size: 14px}
.style14 {
	border: 0px solid;
	-webkit-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	font-size: 12px;
	font-weight: bold;
}
.style15 {font-size: 12px; }
.style16 {
	font-size: 9px
}
.style17 {font-size: 10px; font-weight: bold; }
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

$razaosocial_empresa = $linha[1];

$nfantasia = $linha[2];
$cnpj_empresa = $linha[3];
$inscr_est_empresa = $linha[4];
$endereco_empresa = $linha[5];
$numero_empresa = $linha[6];
$bairro_empresa = $linha[7];
$cidade_empresa = $linha[10];
$estado_empresa = $linha[11];
$telefone_empresa = $linha[12];
$email_empresa = $linha[14];
$site = $linha[15];

}
	

?>

<?
$sql = "SELECT * FROM contas_a_receber where num_fatura = '$num_fatura' and cnpj = '$cnpj' and quitacao = 'Em Aberto' order by codigo asc limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;


$mensalidade = $linha[11];


function extenso($mensalidade = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milh&atilde;o", "bilh&atilde;o", "trilh&atilde;o", "quatrilh&atilde;o");
$plural = array("centavos", "reais", "mil", "milh&otilde;es", "bilh&otilde;es", "trilh&otilde;es",
"quatrilh&otilde;es");

$c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
"quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
"sessenta", "setenta", "oitenta", "noventa");
$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
"dezesseis", "dezesete", "dezoito", "dezenove");
$u = array("", "um", "dois", "tr&ecirc;s", "quatro", "cinco", "seis",
"sete", "oito", "nove");

$z = 0;
$rt = "";

$mensalidade = number_format($mensalidade, 2, ".", ".");
$inteiro = explode(".", $mensalidade);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$mensalidade = $inteiro[$i];
$rc = (($mensalidade > 100) && ($mensalidade < 200)) ? "cento" : $c[$mensalidade[0]];
$rd = ($mensalidade[1] < 2) ? "" : $d[$mensalidade[1]];
$ru = ($mensalidade > 0) ? (($mensalidade[1] == 1) ? $d10[$mensalidade[2]] : $u[$mensalidade[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($mensalidade > 1 ? $plural[$t] : $singular[$t]) : "";
if ($mensalidade == "000")$z++; elseif ($z > 0) $z--;
if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
}

if(!$maiusculas){
return($rt ? $rt : "zero");
} else {

if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
return (($rt) ? ($rt) : "Zero");
}

}

$mensalidade = $mensalidade;
$dim = extenso($mensalidade);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$mensalidade = number_format($mensalidade, 2, ",", ".");




}


?>





<?
$sql = "SELECT * FROM contas_a_receber where num_fatura = '$num_fatura' and cnpj = '$cnpj' and quitacao = 'Em Aberto' order by codigo asc";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;

$codigo = $linha[0];
$codigo_cliente = $linha[1];
$datacadastro = $linha[2];
$nfantasia_cliente = $linha[4];
$razaosocial_cliente = $linha[5];
$cnpj = $linha[6];
$inscr_est = $linha[7];
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
$cidade = $linha[39];
$estado = $linha[40];
$cep = $linha[41];


$quitacao = $linha[17];
$mensalidade = $linha[11];

$vencto = $linha[12];
$quant_parc = $linha[13];
$num_mensalidade = $linha[35];

?>
<table width="100%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="2%" rowspan="14" valign="top" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="7" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
    <td width="1%" rowspan="14" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"></div>      <div align="center" class="style1 style4"></div></td>
  </tr>
  <tr>
    <td colspan="6" valign="top" bordercolor="#000000"><? printf("<img src='../../imagens/$logo' border='0' width='250' height='60'>"); ?></td>
    <td width="7%" valign="top" bordercolor="#000000"><div align="center"><strong>DUPLICATA</strong></div></td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#000000"><div align="center" class="style17"><? echo $razaosocial_empresa; ?><br>
        <? echo $endereco_empresa; ?>, <? echo $numero_empresa; ?> - <? echo $bairro_empresa; ?><br><? echo $telefone_empresa; ?><br>
        <? echo $cidade_empresa; ?> - <? echo $estado_empresa; ?></div></td>
    <td colspan="4" bordercolor="#000000"><div align="center" class="style13"><span class="style16"><strong><? echo $cnpj_empresa; ?><br>
        <? echo $inscr_est_empresa; ?><br>
        <? echo $cidade_empresa; ?> - <? echo $estado_empresa; ?></strong><br>
    <strong>Data da Emiss&atilde;o</strong> <strong><? echo $datacadastro; ?></strong></span></div></td>
  </tr>
  <tr>
    <td width="2%" rowspan="10" align="center" valign="middle" bordercolor="#000000"><div class="style14"><? echo $razaosocial_empresa; ?><br>
        <br>
        <? echo "_______________________"; ?><br>
      <? echo "(Assinatura do Emitente)"; ?></div></td>
    <td width="9%" bordercolor="#000000"><div align="center" class="style10"></div></td>
    <td width="23%" bordercolor="#000000"><div align="center" class="style11 style16"> VALOR</div></td>
    <td width="20%" bordercolor="#000000"><div align="center" class="style11 style16">DUPLICATA N&ordm;</div></td>
    <td width="13%" bordercolor="#000000"><div align="center" class="style10"><strong>Vencimento</strong></div></td>
    <td colspan="2" bordercolor="#000000"><div align="center" class="style10"><strong>PARA USO DA INSTITUI&Ccedil;&Atilde;O FINANCEIRA</strong></div>      <div align="center" class="style15"></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000"><div align="center" class="style15"><? echo "R$ ".$mensalidade; ?></div></td>
    <td bordercolor="#000000"><div align="center" class="style15"><? echo $codigo; ?> - <? echo $num_mensalidade; ?> / <? echo $quant_parc; ?></div></td>
    <td bordercolor="#000000"><div align="center" class="style15"><strong><? echo $vencto; ?></strong></div></td>
    <td colspan="2" rowspan="3" bordercolor="#000000"><div align="center"><span class="style13"><span class="style13"></span></span></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4" rowspan="2" bordercolor="#999999"><span class="style10"><strong>Sacado:</strong> <strong><? echo $razaosocial_cliente; ?><br>
  Endere&ccedil;o: <? echo $endereco; ?>, N&ordm; <? echo $numero; ?> - <? echo $bairro; ?><br>
    CEP: <? echo $cep; ?> MUNIC&Iacute;PIO: <? echo $cidade; ?> ESTADO: <? echo $estado; ?><br>
    PRAÇA DE PAGAMENTO: <? echo $cidade_empresa; ?><br>
    CNPJ: <? echo $cnpj; ?></strong></span> <span class="style17 style10">INSCR. EST.: <? echo $inscr_est; ?></span></td>
  </tr>
  <tr>
    <td colspan="2" bordercolor="#000000">&nbsp;</td>
  </tr>
  
  <tr>
    <td bordercolor="#000000" class="style11 style16">VALOR POR EXTENSO</td>
    <td colspan="5" bordercolor="#000000"><span class="style13">
      <?


echo "$dim";


?>
    </span></td>
  </tr>
  <tr>
    <td colspan="6" bordercolor="#000000" class="style13">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bordercolor="#000000" class="style10">Reconhecemos a exatid&atilde;o desta<strong> Duplicata de Venda Mercantil</strong> na import&acirc;ncia acima que pagaremos &agrave;<strong> <? echo $razaosocial_empresa; ?> ou &agrave; sua ordem na pra&ccedil;a e vencimento indicados.</strong></td>
  </tr>
  <tr>
    <td colspan="6" valign="bottom" bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="bottom" bordercolor="#000000"><div align="center" class="style10">
      Em, ____/____/______
    <br>(data do aceite)</div></td>
    <td colspan="2" valign="bottom" bordercolor="#000000"><div align="center" class="style11 style16">
      <p>PROTESTAR AP&Oacute;S 5 DIS DO VENCIMENTO.<br>
      COBRAR 0,2% AO DIA.</p>
      </div></td>
    <td colspan="2" valign="bottom" bordercolor="#000000"><div align="center" class="style10">___________________________________________<br>(Assinatura do Sacado)</div></td>
  </tr>
  <tr>
    <td colspan="7" valign="bottom" bordercolor="#000000">&nbsp;</td>
  </tr>
  <tr bgcolor="#3399CC">
    <td colspan="9" valign="bottom" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center" class="style10"></div></td>
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