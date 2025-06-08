<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {font-size: 24px}
.style4 {font-size: 14px}
.style5 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../../conect/conect.php';



setlocale(LC_TIME, 'pt_BR');

$data_completa = strftime("%A, %d de %B de %Y<br><br>");

$hoje = strftime("%A");



?>
<?

$grupo = $_POST['grupo'];
$pespontador = $_POST['pespontador'];
$coladeira1 = $_POST['coladeira1'];
$coladeira2 = $_POST['coladeira2'];

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$hora_pagto = $_POST['hora_pagto'];

$valor_total_pespontador = $_POST['valor_total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");

$valor_total_coladeira1 = $_POST['valor_total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");

$valor_total_coladeira2 = $_POST['valor_total_coladeira2'];
$valor_total_coladeira2_formatado = number_format($valor_total_coladeira2, 2, ",", ".");

?>
<body bgcolor="#ffffff">

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$razaosocial_empresa = $linha[1];
$nfantasia_empresa = $linha[2];
$cnpj_empresa = $linha[3];
$inscr_est_empresa = $linha[4];
$endereco_empresa = $linha[5];
$numero_empresa = $linha[6];
$bairro_empresa = $linha[7];
$complemento_empresa = $linha[8];
$cep_empresa = $linha[9];
$cidade_empresa = $linha[10];
$estado_empresa = $linha[11];
$telefone_empresa = $linha[12];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
?>
<?
$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>
<?
require '../../conect/conect.php';

if($pespontador<>""){
$sql = "SELECT * FROM operadores where nome = '$pespontador'";
}
if($coladeira1<>""){
$sql = "SELECT * FROM operadores where nome = '$coladeira1'";
}
if($coladeira2<>""){
$sql = "SELECT * FROM operadores where nome = '$coladeira2'";
}

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$usuario_op = $linha[40];

$senha_op = $linha[41];

$grupo = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



$salario = $linha[48];

$vale_alimentacao = $linha[49];

$gratificacao = $linha[50];

$comissao = $linha[51];

$emprestimo = $linha[52];

$admissao = $linha[53];

$demissao = $linha[54];

$meta = $linha[55];

$status = $linha[56];

$bloqueio_parcial = $linha[57];

$tempo_almoco = $linha[58];

}
?>

<?

//-------------AQUI ENTRA O CODIGO PARA GRAVAÇÃO E GERAÇÃO DO Nº DO RECIBO DE PAGTO----------------------

?>	

<table width="100%"  border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">
      <?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' ><br><br>"); 
}
?>
    </div>      <div align="center"></div></td>
  </tr>
  
  <tr>
    <td><div align="center"></div>      
    <div align="center"><strong><span class="style2"><? echo "$razaosocial_empresa"; ?></span><br>
        <span class="style4"><? echo "$razaosocial_empresa - "; ?> CNPJ: <? echo "$cnpj_empresa - "; ?> INSCR. EST.: <? echo "$inscr_est_empresa"; ?><br>
        <? echo $endereco_empresa; ?>, N&ordm; <? echo $numero_empresa; ?>, Bairro <? echo $bairro_empresa; ?>
        <? echo $cidade_empresa; ?> - <? echo $estado_empresa; ?> CEP <? echo $cep_empresa; ?><br>
        Fone: <? echo $telefone_empresa; ?>
    E-Mail:<? echo $email_empresa; ?> Site:<? echo $site_empresa; ?></span></strong></div></td>
  </tr>
</table>
<p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4"><div align="center"><strong>RECIBO DE PAGAMENTO</strong></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><div align="center"><? echo "$cidade_empresa".", "."$data_completa"; ?><span class="style5"></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Valor</div></td>
    <td width="73%" colspan="3"><div align="center">Valor por extenso</div></td>
  </tr>
  <tr>
    <td width="22%"><div align="center"><strong>
    <? 
if($valor_total_pespontador<>""){ echo "R$ $valor_total_pespontador_formatado"; } 

if($valor_total_coladeira1<>""){ echo "R$ $valor_total_coladeira1_formatado"; }

if($valor_total_coladeira2<>""){ echo "R$ $valor_total_coladeira2_formatado"; }


?>
    </strong></div></td>
    <td colspan="3"><div align="center"><strong>
  <? 
//inicio valor por extenso pespontador

if($valor_total_pespontador<>""){

function extenso($valor_total_pespontador = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
"quatrilhões");

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

$valor_total_pespontador = number_format($valor_total_pespontador, 2, ".", ".");
$inteiro = explode(".", $valor_total_pespontador);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total_pespontador = $inteiro[$i];
$rc = (($valor_total_pespontador > 100) && ($valor_total_pespontador < 200)) ? "cento" : $c[$valor_total_pespontador[0]];
$rd = ($valor_total_pespontador[1] < 2) ? "" : $d[$valor_total_pespontador[1]];
$ru = ($valor_total_pespontador > 0) ? (($valor_total_pespontador[1] == 1) ? $d10[$valor_total_pespontador[2]] : $u[$valor_total_pespontador[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total_pespontador > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total_pespontador == "000")$z++; elseif ($z > 0) $z--;
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

$valor_total_pespontador = $valor_total_pespontador;
$dim = extenso($valor_total_pespontador);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total_pespontador = number_format($valor_total_pespontador, 2, ",", ".");

echo "$dim";

}
//fim valor por extenso pespontador


 ?>
      
  <? 
//inicio valor por extenso coladeira 1

if($valor_total_coladeira1<>""){

function extenso($valor_total_coladeira1 = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
"quatrilhões");

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

$valor_total_coladeira1 = number_format($valor_total_coladeira1, 2, ".", ".");
$inteiro = explode(".", $valor_total_coladeira1);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total_coladeira1 = $inteiro[$i];
$rc = (($valor_total_coladeira1 > 100) && ($valor_total_coladeira1 < 200)) ? "cento" : $c[$valor_total_coladeira1[0]];
$rd = ($valor_total_coladeira1[1] < 2) ? "" : $d[$valor_total_coladeira1[1]];
$ru = ($valor_total_coladeira1 > 0) ? (($valor_total_coladeira1[1] == 1) ? $d10[$valor_total_coladeira1[2]] : $u[$valor_total_coladeira1[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total_coladeira1 > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total_coladeira1 == "000")$z++; elseif ($z > 0) $z--;
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

$valor_total_coladeira1 = $valor_total_coladeira1;
$dim = extenso($valor_total_coladeira1);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total_coladeira1 = number_format($valor_total_coladeira1, 2, ",", ".");

echo "$dim";

}

//fim valor por extenso coladeira 1


 ?>
      
      
  <? 
//inicio valor por extenso coladeira 2

if($valor_total_coladeira2<>""){

function extenso($valor_total_coladeira2 = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
"quatrilhões");

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

$valor_total_coladeira2 = number_format($valor_total_coladeira2, 2, ".", ".");
$inteiro = explode(".", $valor_total_coladeira2);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total_coladeira2 = $inteiro[$i];
$rc = (($valor_total_coladeira2 > 100) && ($valor_total_coladeira2 < 200)) ? "cento" : $c[$valor_total_coladeira2[0]];
$rd = ($valor_total_coladeira2[1] < 2) ? "" : $d[$valor_total_coladeira2[1]];
$ru = ($valor_total_coladeira2 > 0) ? (($valor_total_coladeira2[1] == 1) ? $d10[$valor_total_coladeira2[2]] : $u[$valor_total_coladeira2[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total_coladeira2 > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total_coladeira2 == "000")$z++; elseif ($z > 0) $z--;
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

$valor_total_coladeira2 = $valor_total_coladeira2;
$dim = extenso($valor_total_coladeira2);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total_coladeira2 = number_format($valor_total_coladeira2, 2, ",", ".");

echo "$dim";

}

//fim valor por extenso coladeira 2


 ?>
      
      
      
    </strong></div></td>
  </tr>
  <tr>
    <td height="91" colspan="4" valign="middle"><div align="center" class="style5">
      
      Eu, <? echo $nome; ?>  CPF:<? echo $cpf; ?><br> Declaro para os devidos fins de direito que, recebi de <? echo "$razaosocial_empresa"; ?><br>
        a quantia acima descrita, referente &agrave; pagamento por servi&ccedil;os prestados no per&iacute;odo de <? echo "$dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final"; ?> 
    <br>
    </div></td>
  </tr>
</table>
<p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="241%" colspan="4"><div align="center"><strong>Por ser a express&atilde;o da verdade, firmo a presente</strong>,</div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
      <br>
    </div>      <div align="center"><strong><? echo "__________________________________________________"; ?><br><? echo $nome; ?></strong></div></td>
  </tr>
</table>
<p>
</body>
</html>
<?
mysql_close($conexao);
?>