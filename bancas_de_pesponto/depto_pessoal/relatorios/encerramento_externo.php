<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>
<?

require '../../../conect/conect.php';

?>

<?
$nome = $_POST['nome'];

$dia_referencia = $_POST['dia_final'];

$mes_referencia = $_POST['mes_final'];

$ano_referencia = $_POST['ano_final'];

$diferenca = $_POST['diferenca'];

$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];


?>


<html>
<head>
<title>FOLHA DE PAGTO - ENCERRAMENTO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {color: #FFFFFF}
.style2 {color: #000000}
.style4 {color: #000000; font-weight: bold; }
.style18 {font-size: 10px}
body,td,th {
	color: #000;
}
-->
</style></head>
<body>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$razao_social = $linha[1];
$endereco = $linha[5];
$numero = $linha[6];
$cnpj = $linha[3];

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];
$mensagem_folha_pagto = $linha[42];

}
?>

<?

$sql = "SELECT * FROM operadores where nome = '$nome' and status = 'Ativo' order by nome asc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

//$nome = $linha[1];

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

$classificacao = $linha[61];

$recebequinzena = $linha[62];

$sindical = $linha[63];
$valor_sindicato = $linha[64];


$valor_da_hora = bcdiv($salario,220,5);

?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?  echo $razao_social; ?></td>
      </tr>
      <tr>
        <td><? echo "$endereco "."$numero";  ?></td>
      </tr>
      <tr>
        <td><?  echo $cnpj; ?></td>
      </tr>
    </table></td>
    <td colspan="2" valign="top"><div align="left">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2" valign="top"><div align="center"><strong><? echo "Demonstrativo de Pagamento de Salario"; ?></strong></div></td>
        </tr>
        <tr>
          <td width="45%"><div align="center"><strong>PERIODO</strong></div></td>
          <td width="55%"><div align="center"><strong><? echo "$data_inicial até $data_final"; ?></strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"></div></td>
        </tr>
      </table>
    </div>
    <div align="center"></div>      <div align="center"></div></td>
    <td width="6%" rowspan="6"><img src="imagens/assinatura_do_recibo_de_pagto.jpg" width="81" height="477"></td>
  </tr>
  
  
  
  <tr>
    <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4%"><div align="center"><strong>COD</strong></div></td>
        <td width="40%"><div align="center"><strong>NOME</strong></div></td>
        <td width="21%"><div align="center"><strong>CBO</strong></div></td>
        <td width="17%"><div align="center"><strong>SECAO</strong></div></td>
        <td width="18%"><div align="center"><strong>FUNCAO</strong></div></td>
      </tr>
      <tr>
        <td><div align="center"><? echo $codigo; ?></div></td>
        <td><div align="center"><? echo $nome; ?></div></td>
        <td><div align="center"><? echo $cbo; ?></div></td>
        <td><div align="center"><? echo $secao; ?></div></td>
        <td><div align="center"><? echo $funcao; ?></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
        <td colspan="4"><div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="6%"><div align="center"><strong>COD</strong></div></td>
    <td colspan="3"><div align="center"><strong>DESCRICAO</strong></div></td>
    <td width="13%"><div align="center"><strong>REF</strong></div></td>
    <td width="14%"><div align="center"><strong>VENCIMENTOS</strong></div></td>
    <td width="16%"><div align="center"><strong>DESCONTOS</strong></div></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">100</div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
    <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>PREMIAÇÃO POR PRODUTIVIDADE</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">
<?

echo "$data_inicial até $data_final";
?>
</div></td>
      </tr>
      <tr>
        <td height="22"><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td height="21"><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td height="20"><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td height="19"><div align="center"></div></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">
          <span class="style4">
        <? 

$remuneracao_normal = $diferenca;


echo "R$ $remuneracao_normal";


?></span></div></td>
      </tr>
      <tr>
        <td height="22"><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style1"><? echo "R$ 0.00"; ?></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center" class="style1">
          <? echo "R$ 0.00"; ?>
        </div></td>
      </tr>
      <tr>
        <td height="22"><div align="center" class="style1"><? echo "R$ 0.00"; ?></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style1"><? echo "R$ 0.00"; ?></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td height="20"><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" align="center" valign="middle"><? echo $mensagem_folha_pagto;  ?><br><br>
      <strong>
      <? 
//inicio valor por extenso pespontador

if($remuneracao_normal<>""){

function extenso($remuneracao_normal = 0, $maiusculas = false) {

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

$remuneracao_normal = number_format($remuneracao_normal, 2, ".", ".");
$inteiro = explode(".", $remuneracao_normal);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$remuneracao_normal = $inteiro[$i];
$rc = (($remuneracao_normal > 100) && ($remuneracao_normal < 200)) ? "cento" : $c[$remuneracao_normal[0]];
$rd = ($remuneracao_normal[1] < 2) ? "" : $d[$remuneracao_normal[1]];
$ru = ($remuneracao_normal > 0) ? (($remuneracao_normal[1] == 1) ? $d10[$remuneracao_normal[2]] : $u[$remuneracao_normal[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($remuneracao_normal > 1 ? $plural[$t] : $singular[$t]) : "";
if ($remuneracao_normal == "000")$z++; elseif ($z > 0) $z--;
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

$remuneracao_normal = $remuneracao_normal;
$dim = extenso($remuneracao_normal);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$remuneracao_normal = number_format($remuneracao_normal, 2, ",", ".");

echo "$dim";

}
//fim valor por extenso pespontador


 ?>
    </strong></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Vencimentos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">
          <? 
$total_vencimentos = $remuneracao_normal+0;


echo "R$ $total_vencimentos";



?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style2"></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Valor Liquido a Receber</strong></div></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Descontos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2"><strong><? echo "R$ 0.00"; ?></strong></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style4">
          <? 

$liquido_a_receber = $total_vencimentos;

echo "R$ $liquido_a_receber";



?>
        </span></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">Salario Base</div></td>
        <td><div align="center">Sal. Contr. INSS</div></td>
        <td><div align="center">Base Calc. FGTS</div></td>
        <td><div align="center"> FGTS do Mes        </div></td>
        <td><div align="center">Base Calc. IRRF</div></td>
        <td><div align="center">Faixa IRRF</div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<? } ?>
</body>

</html>