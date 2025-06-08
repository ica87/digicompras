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

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


?>
        <?
$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";
?>


<?
$sql = "SELECT * FROM tabela_meses where num_mes = '$mes_inicial' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$mes = $linha[2];
$dias = $linha[3];
$dias_trabalhados = $linha[4];
$dsr = $linha[5];
$mes_comercial = $linha[6];

}
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

}
?>

      <?
$sql = "SELECT * FROM horas_extras where data between '$data_inicial' and '$data_final' group by nome";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha['0'];
$data = $linha['1'];
$dia = $linha['2'];
$mes = $linha['3'];
$ano = $linha['4'];
$hora_inicio = $linha['5'];
$hora_termino = $linha['6'];
$hi = $linha['7'];
$mi = $linha['8'];
$si = $linha['9'];
$ht = $linha['10'];
$mt = $linha['11'];
$st = $linha['12'];
$nome = $linha['13'];
$quant_horas_reais = $linha['14'];
$quant_horas = $linha['15'];
$valor_hora_normal = $linha['16'];
$acrescimo = $linha['17'];
$valor_hora_extra = $linha['18'];
$total = $linha['19'];
$data_pagto = $linha['20'];
$dia_pagto = $linha['21'];
$mes_pagto = $linha['22'];
$ano_pagto = $linha['23'];
$hora_pagto = $linha['24'];
$salario = $linha['25'];

	  
	  

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
          <td colspan="2" valign="top"><div align="center"><strong><? echo "RECIBO DE PAGAMENTO DE HORAS EXTRAS"; ?></strong></div></td>
        </tr>
        <tr>
          <td width="45%"><div align="center"><strong>PERIODO</strong></div></td>
          <td width="55%"><div align="center"><strong><? echo "$mes de $ano_inicial"; ?></strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><strong><? echo "De $dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final"; ?></strong></div></td>
        </tr>
      </table>
    </div>
    <div align="center"></div>      <div align="center"></div></td>
    <td width="7%" rowspan="6" align="left" valign="middle">

<div id="memo" style="transform:rotate(<? $deg=rand(0,0); echo $deg; ?>deg); -moz-transform:rotate(<?php echo $deg; ?>deg);-webkit-transform:rotate(<?php echo $deg; ?>deg);-o-transform:rotate(<? echo $deg; ?>deg);"><img src="../imagens/assinatura_do_recibo_de_pagto.jpg" width="81" height="477"></div></td>
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
    <td width="3%"><div align="center"><strong>COD</strong></div></td>
    <td colspan="3"><div align="center"><strong>DESCRICAO</strong></div></td>
    <td width="19%"><div align="center"><strong>REF</strong></div></td>
    <td width="16%"><div align="center"><strong>VENCIMENTOS</strong></div></td>
    <td width="10%"><div align="center"><strong>DESCONTOS</strong></div></td>
  </tr>
  <tr>
    <td valign="top"><table width="126%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      
      
      
      
      
      
      
    </table></td>
    <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>

        Horas extras efetuadas no periodo acima especificado </td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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


$sql2 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado);



$total_de_horas_extras_realizadas = $linha['total_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $total_de_horas_extras_realizadas;
?>     
        
        
        
        
        
        
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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


$sql3 = "select sum(total) as total_monetario_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado);



$vencimentos = $linha['total_monetario_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo "R$ ".$vencimentos;
?>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      
      
      
      
      
      
      
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" align="center" valign="middle"><? //echo "Aqui entra uma mensagem aos funionarios";  ?></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Vencimentos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?


$sql4 = "select sum(total) as total_monetario_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado);



$vencimentos = $linha['total_monetario_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo "R$ ".$vencimentos;
?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Valor Liquido</strong></div></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Descontos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td valign="bottom"><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">Salario Base</div></td>
        <td><div align="center">Valor Hora Normal</div></td>
        <td><div align="center">Acréscimo de 50%</div></td>
        <td><div align="center">Valor Hora Extra</div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr>

        <td><div align="center"><? echo "R$ ".$salario; ?></div></td>
        <td><div align="center"><? echo "R$ ". $valor_hora_normal; ?></div></td>
        <td><div align="center"><? echo "R$ ". $acrescimo; ?></div></td>
        <td><div align="center"><? echo  "R$ ".$valor_hora_extra; ?></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<? } ?>
</body>

</html>