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

require '../../conect/conect.php';

?>

<?

$dia_referencia = $_POST['dia_referencia'];

$mes_referencia = $_POST['mes_referencia'];

$ano_referencia = $_POST['ano_referencia'];


?>

<?
$sql = "SELECT * FROM tabela_meses where mes = '$mes_referencia' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$mes = $linha[1];
$ano = $linha[2];
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
.style1 {color: #FFFFFF}
.style2 {color: #000000}
.style4 {color: #000000; font-weight: bold; }
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

$sql = "SELECT * FROM operadores where status = 'Ativo' order by nome asc";
$res = mysql_query($sql);
$reg = 0;
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

$tipo_remuneracao = $linha[61];

$recebequinzena = $linha[62];


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
          <td width="55%"><div align="center"><strong><? echo "$mes de $ano_referencia"; ?></strong></div></td>
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
    <td width="12%"><div align="center"><strong>REF</strong></div></td>
    <td width="9%"><div align="center"><strong>VENCIMENTOS</strong></div></td>
    <td width="16%"><div align="center"><strong>DESCONTOS</strong></div></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">100</div></td>
      </tr>
      <tr>
        <td><div align="center">101</div></td>
      </tr>
      <tr>
        <td><div align="center">102</div></td>
      </tr>
      <tr>
        <td><div align="center">103</div></td>
      </tr>
      <tr>
        <td><div align="center">200</div></td>
      </tr>
      <tr>
        <td><div align="center">201</div></td>
      </tr>
      <tr>
        <td><div align="center">202</div></td>
      </tr>
      <tr>
        <td><div align="center">300</div></td>
      </tr>
      <tr>
        <td><div align="center">301</div></td>
      </tr>
      <tr>
        <td><div align="center">302</div></td>
      </tr>
      <tr>
        <td><div align="center">303</div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
    <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>Salário horas trabalhadas no mês</td>
      </tr>
      <tr>
        <td>DSR-descanso semanal remunerado</td>
      </tr>
      <tr>
        <td>Premiações</td>
      </tr>
      <tr>
        <td>Bônus</td>
      </tr>
      <tr>
        <td>Adiantamento Salarial</td>
      </tr>
      <tr>
        <td>Adiantamentos fora do prazo (Vales)</td>
      </tr>
      <tr>
        <td>Faltas do mês</td>
      </tr>
      <tr>
        <td>Contribuição Confederativa</td>
      </tr>
      <tr>
        <td>Contribuição Sindical</td>
      </tr>
      <tr>
        <td>INSS Sobre Salário</td>
      </tr>
      <tr>
        <td>IRRF-(Imposto de renda retido na fonte)</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">
<?  
if($tipo_remuneracao=="Mensalista"){

$horas_trabalhadas_normais = "220";

}
else{

$horas_por_dia = bcdiv(220,$mes_comercial,5);
$horas_trabalhadas_normais = bcmul($horas_por_dia,$dias_trabalhados,2);



}		
		
		
		
echo $horas_trabalhadas_normais;		
		
		
$valor_hora = bcdiv($salario,220,7);		
		
?></div></td>
      </tr>
      <tr>
        <td height="22"><div align="center">
          <?  
if($tipo_remuneracao=="Mensalista"){


}
else{

$horas_por_dia_dsr = bcdiv(220,$mes_comercial,5);
$horas_dsr = bcmul($horas_por_dia_dsr,$dsr,2);



		
		
		
		
echo $horas_dsr;		
		
		
$valor_hora_dsr = bcdiv($salario,220,7);

}		
		
?>
        </div></td>
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
        <td><div align="center">
          <?
$sql2 = "select sum(quant_horas) as total_horas from faltas where nome = '$nome' and mes = '$mes_referencia'";
$resultado2=mysql_query($sql2, $conexao);
$linha=mysql_fetch_array($resultado2);

$total_horas = $linha['total_horas'];

echo $total_horas;
?></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2"><strong>
          <?
		  
		  

$sql3 = "SELECT * FROM tabela_inss order by codigo asc";
$res3 = mysql_query($sql3);
while($linha=mysql_fetch_row($res3)) {


$de = $linha[1];
$ate = $linha[2];



if(($salario>=$de) && ($salario<=$ate)){

$sql4 = "SELECT * FROM tabela_inss where de = '$de' and ate = '$ate' order by codigo asc";
$res4 = mysql_query($sql4);
while($linha=mysql_fetch_row($res4)) {


$aliquota = $linha[3];

}


echo $aliquota."%";

}


}



?>
        </strong></div></td>
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
        <td><div align="center"><?
		
		
		
		
		
		
		 $remuneracao = bcmul($horas_trabalhadas_normais,$valor_hora,2); ; 
		 
		 
$arredondamento = bcsub($salario,$remuneracao_normal,2);		 
		 

$remuneracao_normal = bcadd($remuneracao_normal,$arredondamento,2);
		 
		 echo "R$ $remuneracao_normal"
		 
		 ?></div></td>
      </tr>
      <tr>
        <td height="22"><div align="center">
          <? 
if($tipo_remuneracao=="Mensalista"){

}
else{
		  
$remuneracao_dsr = bcmul($horas_dsr,$valor_hora_dsr,2); echo "R$ $remuneracao_dsr"; 

}
?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style1">
          <?
$sql6 = "select sum(valor_bonus) as total from bonus where nome = '$nome' and mes = '$mes_referencia'";
$resultado6=mysql_query($sql6, $conexao);
$linha=mysql_fetch_array($resultado6);

//$total_bonus = $linha['total'];

$total_bonus = "0.00";

echo "R$ ".$total_bonus;
?></div></td>
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
        <td><div align="center">
          <?
if($recebequinzena=="Sim"){
$sql3 = "SELECT * FROM percentual_de_quinzena limit 1";
$res3 = mysql_query($sql3);
while($linha=mysql_fetch_row($res3)) {

$percentual_de_quinzena = $linha[1];

}

$decimal_percentual_quinzena = bcdiv($percentual_de_quinzena,100,2);

$valor_quinzena = bcmul($salario,$decimal_percentual_quinzena,2);

echo "R$ ".$valor_quinzena;

}
?></div></td>
      </tr>
      <tr>
        <td height="20"><div align="center">
          <?
$sql2 = "select sum(valor_vale) as total from vales where nome = '$nome' and mes = '$mes_referencia'";
$resultado2=mysql_query($sql2, $conexao);
$linha=mysql_fetch_array($resultado2);

$total_vales = $linha['total'];

echo "R$ ".$total_vales;
?></div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?
$sql2 = "select sum(total) as total_faltas from faltas where nome = '$nome' and mes = '$mes_referencia'";
$resultado2=mysql_query($sql2, $conexao);
$linha=mysql_fetch_array($resultado2);

$total_faltas = $linha['total_faltas'];

echo "R$ ".$total_faltas;
?></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style1"><? echo "R$ 0.00"; ?></span></div></td>
      </tr>
      <tr>
        <td><div align="center"><? 
		$decimal_aliquota_inss = bcdiv($aliquota,100,5);
		
		$desconto_inss = bcmul($salario,$decimal_aliquota_inss,2);
		
		echo "R$ ".$desconto_inss;
		
		
		?></div></td>
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
    <td colspan="5" align="center" valign="middle"><? echo $mensagem_folha_pagto;  ?></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Vencimentos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">
          <? 

$total_vencimentos = $remuneracao_normal+$remuneracao_dsr+$valor_total+$total_bonus;

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
        <td><div align="center"><span class="style2">
          <? 

$total_descontos = $total_vales+$valor_quinzena+$total_faltas+$desconto_inss;

echo "R$ $total_descontos";



?>
        </span></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style4">
          <? 

$liquido_a_receber = $total_vencimentos-$total_descontos;

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
        <td><div align="center">FGTS do Mes</div></td>
        <td><div align="center">Base Calc. IRRF</div></td>
        <td><div align="center">Faixa IRRF</div></td>
      </tr>
      <tr>
        <td><div align="center"><? echo $salario; ?></div></td>
        <td><div align="center"><? echo $salario; ?></div></td>
        <td><div align="center"><? echo $salario; ?></div></td>
        <td><div align="center">
          <? 
		$decimal_aliquota_fgts = bcdiv(8,100,5);
		
		$fgts_do_mes = bcmul($salario,$decimal_aliquota_fgts,2);
		
		echo "R$ ".$fgts_do_mes;
		
		
		?>
        </div></td>
        <td><div align="center">
          <? 
		
		$base_calculo_irrf = bcsub($salario,$desconto_inss,2);
		
		echo "R$ ".$base_calculo_irrf;
		
		
		?>
        </div></td>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<? } ?>
</body>

</html>