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
<title>Fatura</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
.style5 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {font-size: 24px}
-->
</style>
</head>
<?

require '../../conect/conect.php';


$num_fatura = $_POST['num_fatura'];
$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];

?>


<body>
<table width="100%" bgcolor="#ffffff"  border="0">
        <tr valign="top">
          <td width="36%" height="23">
<?
$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); 

}
?>
</td>
          <td width="37%" valign="middle"><div align="center">          </div></td>
          <td width="27%" height="23">&nbsp;</td>
        </tr>
</table>
      <p>      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form>
<p align="center" class="style5">&nbsp;</p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center"><span class="style5">Faturamento N&ordm; <? echo $num_fatura; ?></span></div></td>
  </tr>
</table>
<?



$sql = "SELECT * FROM faturamento where num_fatura = '$num_fatura' and nfantasia = '$nfantasia_cliente' and cnpj = '$cnpj_cliente'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_orcamento = $linha[0];
$nfantasia = $linha[3];
$cnpj = $linha[188];
$total_geral = $linha[123];
$prazo = $linha[125];
$operador = $linha[158];

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


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_gerente = $linha[1];
$email_gerente = $linha[20];
$funcao_gerente = $linha[43];

$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}

	

?>





<table width="100%"  border="1">
  <tr bgcolor="ffffff">
    <td><div align="center"><span class="style3">N&ordm; Or&ccedil;amento </span></div></td>
    <td><div align="center" class="style3">Cliente </div></td>
    <td><div align="center" class="style3">CNPJ / CPF</div></td>
    <td><div align="center" class="style3">Valor </div></td>
    <td><div align="center" class="style3">Prazo</div></td>
  </tr>
  <?
			  
			  
$sql = "SELECT * FROM orcamentos where num_fatura = '$num_fatura' order by codigo_orcamento asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_orcamento = $linha[0];
$nfantasia_cliente = $linha[3];
$cnpj_cliente = $linha[188];
$total_geral_cliente = $linha[123];
$prazo_cliente = $linha[125];
$operador_cliente = $linha[158];
$num_fatura = $linha[181];


?>
  <tr>
    <td width="7%"><div align="center" class="style3">
        <form name="form2" method="post" action="borderos.php">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <? echo $codigo_orcamento; ?>
          <input name="num_bordero_suporte" type="hidden" id="num_bordero_suporte" value="<? echo $num_fatura; ?>">
          <strong><font color="#0000FF"> </font></strong>
        </form>
    </div></td>
    <td width="18%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
    <td width="11%">
      <div align="center" class="style3"><? echo $cnpj_cliente;?> </div></td>
    <td width="10%"><div align="center" class="style3"><? echo "R$ ".$total_geral_cliente;?> </div></td>
    <td width="3%"><div align="center" class="style3"><? echo $prazo_cliente; ?> </div></td>
    <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
    <? } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="27%">
      <div align="left"></div>      <table width="100%"  border="1">
        <tr>
          <td width="44%">Data do Faturamento </td>
          <td width="56%"><div align="center"><? echo $datafechamento;?>
          </div></td>
        </tr>
        <tr>
          <td colspan="2">Respons&aacute;vel pelo Faturamento</td>
        </tr>
        <tr>
          <td colspan="2"><? echo $nome_gerente; ?></td>
        </tr>
        <tr>
          <td colspan="2">Assinatura respons&aacute;vel pelo Faturamento </td>
        </tr>
        <tr>
          <td height="57" colspan="2">&nbsp;</td>
        </tr>
      </table></td><td valign="top"><div align="center" class="style5">
        <table width="70%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><span class="style6"><strong><strong>TOTAL DESTA FATURA<br>
                <?


$sql = "select sum(total_geral) as total_orcamentos from orcamentos where num_fatura = '$num_fatura'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_orcamentos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
echo "R$ 0.00";
}
else{
echo "R$ ".$valor_total_formatado;
}

?>
              </strong></strong>
                <br><?
	  
function extenso($valor_total = 0, $maiusculas = false) {

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

$valor_total = number_format($valor_total, 2, ".", ".");
$inteiro = explode(".", $valor_total);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total = $inteiro[$i];
$rc = (($valor_total > 100) && ($valor_total < 200)) ? "cento" : $c[$valor_total[0]];
$rd = ($valor_total[1] < 2) ? "" : $d[$valor_total[1]];
$ru = ($valor_total > 0) ? (($valor_total[1] == 1) ? $d10[$valor_total[2]] : $u[$valor_total[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total == "000")$z++; elseif ($z > 0) $z--;
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

$valor_total = $valor_total;
$dim = extenso($valor_total);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total = number_format($valor_total, 2, ",", ".");


echo "$dim";


?>
            </span></div></td>
          </tr>
        </table>
      </div>        <div align="center" class="style6"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
