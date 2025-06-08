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

$nfantasia = $_POST['nfantasia'];



$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}







?>


<?


$grupo = $_POST['grupo'];
		
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";


if($dia_final<=15){

$encerramento = "encerramento_quinzena.php";

}
else{

$encerramento = "encerramento.php";

}

?>


<html>
<head>
<title><? echo "RELATORIO DE PAGTO $nfantasia_empresa PERIODO DE $data_inicial ATÉ $data_final "; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style18 {font-size: 10px}
.style19 {
	color: #FFFFFF;
	font-weight: bold;
}
.style20 {
	font-size: 10px;
	color: #FFFFFF;
	font-weight: bold;
}
.style21 {font-size: 10px; font-weight: bold; }
.style24 {color: #000000; font-weight: bold; }
.style25 {font-size: 10px; color: #000000; font-weight: bold; }
.style26 {
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
.style27 {font-size: 16px}
.style28 {font-size: 24px}
.style30 {color: #FFFFFF}
.style31 {font-size: 24px; font-weight: bold; color: #FFFFFF; }
-->
</style></head>

<body>
<p>        

</p>
<form name="form1" method="post" action="menu.php"><span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>



<br>
<br>
<p>Periodo selecionado de <? echo " $data_inicial até $data_final"; ?></p>
<p><strong><strong><strong><strong><strong><strong><strong><strong><strong>
  <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo "Total de pares produzidos pela empresa -->>> ".$total_producao;
}

$sql45 = "select sum(total_trice) as totaldepares_trice from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

$resultado45=mysql_query($sql45, $conexao);

$linha=mysql_fetch_array($resultado45);



$totalgeral_trice = $linha['totaldepares_trice'];

if($totalgeral_trice==0){

$totalgeralmonetario_trice = "0.00";
}
else{

$totalgeralmonetario_trice = bcmul($totalgeral_trice,1,2);

}





$sql = "SELECT * FROM preco_socios limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$valor_unitario_peca_dos_socios = $linha[1];

}

$valor_quinzenal_socios = bcmul($total_producao,$valor_unitario_peca_dos_socios,2);




$sql43 = "SELECT * FROM clientes";
$res43 = mysql_query($sql43);
while($linha=mysql_fetch_row($res43)) {

$nfantasia_cliente = $linha[3];

}



?>
</strong></strong></strong></strong></strong></strong></strong></strong></strong></p>
<p><strong><strong><strong>
  <?
		  
$sql = "select sum(total_pespontador) as total_pespontador from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_pespontador = $linha['total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");

//echo "Total do investimento em M&atilde;o-de-Obra(Pespontadores) no per&iacute;odo R$ ".$valor_total_pespontador_formatado."<br><br>";


?>
  <?
	
	$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";	  
		  

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira1 = $linha['total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");

//echo "R$ ".$valor_total_coladeira1_formatado;


?>
  <?
		  
		  
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";
		  

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira2 = $linha['total_coladeira2'];
$valor_total_coladeira2_formatado = number_format($valor_total_coladeira2, 2, ",", ".");

$total_coladeiras = bcadd($valor_total_coladeira1,$valor_total_coladeira2,2);
$total_coladeiras_formatado = number_format($total_coladeiras, 2, ",", ".");

//echo "Total do investimento em M&atilde;o-de-Obra(Coladeiras 1 e 2) no per&iacute;odo R$ ".$total_coladeiras_formatado."<br><br>";

$subtotal_periodico = bcadd($valor_total_pespontador,$valor_total_coladeira1,2);
$total_pagto_funcionarios_periodico = bcadd($subtotal_periodico,$valor_total_coladeira2,2);

$total_pagto_funcionarios_periodico_formatado = number_format($total_pagto_funcionarios_periodico, 2, ",", ".");


echo "Total geral do investimento em M&atilde;o-de-Obra(Pespontadores e Coladeiras) no per&iacute;odo R$ ".$total_pagto_funcionarios_periodico_formatado;

?>
</strong></strong></strong></p>
<table width="200%" border="1">
  
  <tr>
    <td bgcolor="#33CCCC">&nbsp;</td>
    <td colspan="26" bgcolor="#0000FF"><div align="center" class="style19">VENCIMENTOS</div></td>
    <td colspan="9" bgcolor="#FF0000"><div align="center" class="style19">DESCONTOS</div></td>
    <td bgcolor="#33CCCC">&nbsp;</td>
    <td bgcolor="#33CCCC">&nbsp;</td>
    <td bgcolor="#33CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td width="5%" bgcolor="#33CCCC"><div align="center"><strong><span class="style27">PESPONTADORES</span></strong></div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center"><span class="style18"><strong>REF </strong><br>
          <strong>DT / DSR</strong> </span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">VALORHOLERITE QUINZENA</span></strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">SALARIO BRUTO HOLERITE</span></strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Salario Familia</strong></div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PLR</span></strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">HORAS EXTRAS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Qtde Prs P&ccedil;o 01</span></strong><span class="style18">Linha_Comum</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">
        <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 01Linha_Comum</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 02Baixo(Grau_1) </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 02Baixo(Grau_1)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 04Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total P&ccedil;o 04</span></strong><span class="style21">Alto Neoprene 360&ordm;(Grau_3)</span></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total Pe&ccedil;as Apuradas</span></strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>
     FERIAS
        <BR>
        REF
 </strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ FERIAS</strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ 1/3 FERIAS</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>TOTALBRUTO FERIAS</strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18">
      <div align="center"><strong>LIQUIDO FERIAS</strong></div>
    </div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center" class="style21">Total Venctos</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE FERIAS</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Mensalidade Sindicato</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Contribui&ccedil;&atilde;o Sindical</strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DE FALTAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS DOMINGOS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE SALARIO</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><span class="style21">Valor holerite Liquido a Receber</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Mensalista</div></td>
  </tr>
  <?
$sql = "SELECT * FROM operadores where funcao = 'PESPONTADOR(A)' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

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

$areaproducao = $linha[57];

$tempo_almoco = $linha[58];

$cbo = $linha[59];

$secao = $linha[60];

$classificacao = $linha[61];

$recebequinzena = $linha[62];
$sindical = $linha[63];
$valor_sindicato = $linha[64];

$valor_da_hora = bcdiv($salario,220,5);
?>


  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style24">
      <form action="<? echo $encerramento; ?>" method="post" name="form2" target="_blank">
        <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
        <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
        <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
<input type="submit" name="button" id="button" value="<? echo $nome; ?>">
      </form>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center">
      <?
$sql2 = "SELECT * FROM tabela_meses where ano = '$ano_final'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$codigo = $linha[0];
$ano = $linha[2];

$mes01 = $linha[1];
$dias01 = $linha[3];
$dias_trabalhados01 = $linha[4];
$dsr01 = $linha[5];

$mes02 = $linha[6];
$dias02 = $linha[7];
$dias_trabalhados02 = $linha[8];
$dsr02 = $linha[9];

$mes03 = $linha[10];
$dias03 = $linha[11];
$dias_trabalhados03 = $linha[12];
$dsr03 = $linha[13];

$mes04 = $linha[14];
$dias04 = $linha[15];
$dias_trabalhados04 = $linha[16];
$dsr04 = $linha[17];

$mes05 = $linha[18];
$dias05 = $linha[19];
$dias_trabalhados05 = $linha[20];
$dsr05 = $linha[21];

$mes06 = $linha[22];
$dias06 = $linha[23];
$dias_trabalhados06 = $linha[24];
$dsr06 = $linha[25];

$mes07 = $linha[26];
$dias07 = $linha[27];
$dias_trabalhados07 = $linha[28];
$dsr07 = $linha[29];

$mes08 = $linha[30];
$dias08 = $linha[31];
$dias_trabalhados08 = $linha[32];
$dsr08 = $linha[33];

$mes09 = $linha[34];
$dias09 = $linha[35];
$dias_trabalhados09 = $linha[36];
$dsr09 = $linha[37];

$mes10 = $linha[38];
$dias10 = $linha[39];
$dias_trabalhados10 = $linha[40];
$dsr10 = $linha[41];

$mes11 = $linha[42];
$dias11 = $linha[43];
$dias_trabalhados11 = $linha[44];
$dsr11 = $linha[45];

$mes12 = $linha[46];
$dias12 = $linha[47];
$dias_trabalhados12 = $linha[48];
$dsr12 = $linha[49];

$mes_comercial = $linha[50];
$date = $linha[51];
$hora = $linha[52];

}

if($mes_final=="01"){

$ref_dias_trabalhados = "$dias_trabalhados01";
$ref_dsr_mes = "$dsr01";

}

if($mes_final=="02"){

$ref_dias_trabalhados = "$dias_trabalhados02";
$ref_dsr_mes = "$dsr02";

}
	  
if($mes_final=="03"){

$ref_dias_trabalhados = "$dias_trabalhados03";
$ref_dsr_mes = "$dsr03";

}
	  
if($mes_final=="04"){

$ref_dias_trabalhados = "$dias_trabalhados04";
$ref_dsr_mes = "$dsr04";

}
	  
if($mes_final=="05"){

$ref_dias_trabalhados = "$dias_trabalhados05";
$ref_dsr_mes = "$dsr05";

}
	  
if($mes_final=="06"){

$ref_dias_trabalhados = "$dias_trabalhados06";
$ref_dsr_mes = "$dsr06";

}
	  
if($mes_final=="07"){

$ref_dias_trabalhados = "$dias_trabalhados07";
$ref_dsr_mes = "$dsr07";

}
	  
if($mes_final=="08"){

$ref_dias_trabalhados = "$dias_trabalhados08";
$ref_dsr_mes = "$dsr08";

}
	  
if($mes_final=="09"){

$ref_dias_trabalhados = "$dias_trabalhados09";
$ref_dsr_mes = "$dsr09";

}
	  
if($mes_final=="10"){

$ref_dias_trabalhados = "$dias_trabalhados10";
$ref_dsr_mes = "$dsr10";

}
	  
if($mes_final=="11"){

$ref_dias_trabalhados = "$dias_trabalhados11";
$ref_dsr_mes = "$dsr11";

}

if($mes_final=="12"){

$ref_dias_trabalhados = "$dias_trabalhados12";
$ref_dsr_mes = "$dsr12";

}
	  

if($classificacao=="MENSALISTA"){

$total_horas_do_mes = "220";


}
	
if($classificacao=="HORISTA"){
  
	  
$horas_trabalhadas_no_mes = bcmul(8.8,$ref_dias_trabalhados,2);


$total_horas_do_mes = bcadd($horas_trabalhadas_no_mes,0,2);

}


$total_dsr_no_mes = bcmul(7.33,$ref_dsr_mes,2);

$total_geral_horas_no_mes = round(bcadd($horas_trabalhadas_no_mes,$total_dsr_no_mes,2),2);

echo "$total_geral_horas_no_mes";
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?






$quinzena = bcmul($valor_da_hora,110,2);

	
echo "R$ $quinzena";
	 
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 

if($dia_final>=16){


$salario_funcionario = round(bcmul($valor_da_hora,$total_geral_horas_no_mes,2),1);


echo "R$ $salario_funcionario";

}
else{

$salario_funcionario = bcmul($valor_da_hora,110,2);


}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style21">
<?

$sql4 = "select sum(valor_sf) as total_sf from dependentes where  operador_pertence = '$nome' and idade <= '13'";
$resultado4=mysql_query($sql4, $conexao);
$linha=mysql_fetch_array($resultado4);



$sf_receber = $linha['total_sf'];


if($sf_receber==0){

}
else{

echo "R$ $sf_receber";

}

?></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?


$sql5 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$total_de_horas_extras_realizadas = $linha['total_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $total_de_horas_extras_realizadas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? 
	
$valor_hora_normal = bcdiv($salario,220,5);
$acrecimo_hora_extra = bcmul($valor_hora_normal,0.5,5);
$valor_hora_extra = bcadd($valor_hora_normal,$acrecimo_hora_extra,5);

$total_monetario_hora_extra = bcmul($total_de_horas_extras_realizadas,$valor_hora_extra,2);

if($total_monetario_hora_extra=="0"){

}
else{
	
echo "R$ $total_monetario_hora_extra";
	
}

	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_economico from fichas where pespontador = '$nome' and nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$total_producao_linha_comum = $linha['totaldepares_economico'];

if($total_producao_linha_comum==""){
//echo "0";
}
else{
echo $total_producao_linha_comum;
}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql7 = "select * from modelos where nivel_dificuldade = 'Linha_Comum' order by preco_pespontador desc limit 1";
$res7 = mysql_query($sql7);
while($linha=mysql_fetch_row($res7)) {


$preco_pespontador = $linha[3];

}

if($total_producao_linha_comum==""){

}
else{
echo "R$ $preco_pespontador";
}
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $totalpespontador_linha_comum = bcmul($total_producao_linha_comum,$preco_pespontador,2);
	  
if($totalpespontador_linha_comum==""){

}
else{	
	echo "R$ $totalpespontador_linha_comum";
}
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql8 = "select sum(quant_pares) as totaldepares_baixograu1 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado8=mysql_query($sql8, $conexao);

$linha=mysql_fetch_array($resultado8);



$total_producao_baixograu1 = $linha['totaldepares_baixograu1'];

if($total_producao_baixograu1==""){
//echo "0";
}
else{
echo $total_producao_baixograu1;
}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql9 = "select * from modelos where nivel_dificuldade = 'Baixo(Grau_1)' order by preco_pespontador desc limit 1";
$res9 = mysql_query($sql9);
while($linha=mysql_fetch_row($res9)) {


$preco_pespontador_baixo_grau1 = $linha[3];

}

if($total_producao_baixograu1==""){

}
else{

echo "R$ $preco_pespontador_baixo_grau1";

}
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_baixograu1 = bcmul($total_producao_baixograu1,$preco_pespontador_baixo_grau1,2);
	  
if($total_producao_baixograu1==""){

}
else{	
	echo "R$ $total_linha_baixograu1";
}
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql10 = "select sum(quant_pares) as totaldepares_mediograu2 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado10=mysql_query($sql10, $conexao);

$linha=mysql_fetch_array($resultado10);



$total_producao_mediograu2 = $linha['totaldepares_mediograu2'];

if($total_producao_mediograu2==""){
//echo "0";
}
else{
echo $total_producao_mediograu2;
}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql11 = "select * from modelos where nivel_dificuldade = 'Médio Botas(Grau_2)'order by preco_pespontador desc  limit 1";
$res11 = mysql_query($sql11);
while($linha=mysql_fetch_row($res11)) {


$preco_pespontador_medio_grau2 = $linha[3];

}

if($total_producao_mediograu2==""){

}
else{

echo "R$ $preco_pespontador_medio_grau2";

}
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_mediograu2 = bcmul($total_producao_mediograu2,$preco_pespontador_medio_grau2,2);
	  
if($total_producao_mediograu2==""){

}
else{
	
	echo "R$ $total_linha_mediograu2";

}
	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql12 = "select sum(quant_pares) as totaldepares_altograu3 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado12=mysql_query($sql12, $conexao);

$linha=mysql_fetch_array($resultado12);



$total_producao_altoneoprene_grau3 = $linha['totaldepares_altograu3'];

if($total_producao_altoneoprene_grau3==""){
//echo "0";
}
else{
echo $total_producao_altoneoprene_grau3;
}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql13 = "select * from modelos where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)'order by preco_pespontador desc  limit 1";
$res13 = mysql_query($sql13);
while($linha=mysql_fetch_row($res13)) {


$preco_pespontador_alto_neoprene_grau3 = $linha[3];

}

if($total_producao_altoneoprene_grau3==""){

}
else{

echo "R$ $preco_pespontador_alto_neoprene_grau3";

}
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_altoneoprenegrau3 = bcmul($total_producao_altoneoprene_grau3,$preco_pespontador_alto_neoprene_grau3,2);
	  
if($total_producao_altoneoprene_grau3==""){

}
else{
	
	echo "R$ $total_linha_altoneoprenegrau3";
	
	}
	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?
    
$total_pecas_apuradas = $totalpespontador_linha_comum+$total_linha_baixograu1+$total_linha_mediograu2+$total_linha_altoneoprenegrau3;

echo "R$ $total_pecas_apuradas";
	
	?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql14 = "select sum(ref) as totaldiasferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado14=mysql_query($sql14, $conexao);

$linha=mysql_fetch_array($resultado14);

$ref = $linha['totaldiasferias'];


echo $ref;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql15 = "select sum(ferias) as totalferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado15=mysql_query($sql15, $conexao);

$linha=mysql_fetch_array($resultado15);

$ferias = $linha['totalferias'];


echo $ferias;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql16 = "select sum(terco) as totalterco from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado16=mysql_query($sql16, $conexao);

$linha=mysql_fetch_array($resultado16);

$terco = $linha['totalterco'];


echo $terco;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style24">
      <? 
	

$total_ferias = bcadd($ferias,$terco,2);

	
echo "R$ $total_ferias";

	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <div align="center"><span class="style24">
        <? 
	

$calculando_liquido_ferias = bcadd($ferias,$terco,2);

$liquido_ferias = bcsub($calculando_liquido_ferias,$inss_sobre_ferias,2);

	
echo "R$ $liquido_ferias";

	
	 ?>
      </span></div>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"><?
    
$total_vencimentos = $total_pecas_apuradas+$total_monetario_hora_extra+$total_ferias+$sf_receber;
    
    echo "R$ $total_vencimentos";
?>   
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql17 = "SELECT * FROM tabela_inss where mes = '$mes_final' and ano = '$ano_final'";
$res17 = mysql_query($sql17);
while($linha=mysql_fetch_row($res17)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_sobre_ferias = bcmul($total_ferias,$aliquota,2);


echo "R$ $inss_sobre_ferias";

?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
	
<?

if($sindical=="Sim"){

$mensalidade_sindicato = $valor_sindicato;

 echo "R$ $mensalidade_sindicato";
 
}
else{

$mensalidade_sindicato = "0.00";


}
 
 ?></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?   

if($mes_final=="03"){

$contribuicao_sindical = round(bcmul($valor_da_hora,220,2)/30,2);

echo "R$ $contribuicao_sindical";


}
else{
	

$contribuicao_sindical = "0.00";


}


?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql18 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado18=mysql_query($sql18, $conexao);

$linha=mysql_fetch_array($resultado18);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$sql32 = "select sum(total) as totalfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado32=mysql_query($sql32, $conexao);
$linha=mysql_fetch_array($resultado32);

$total_monetario_horas_a_descontar = $linha['totalfaltas'];


if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql19 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado19=mysql_query($sql19, $conexao);
$linha=mysql_fetch_array($resultado19);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$sql33 = "select sum(total_domingo) as totaldomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado33=mysql_query($sql33, $conexao);
$linha=mysql_fetch_array($resultado33);

$total_monetario_horas_domingo_a_descontar = $linha['totaldomingo'];


if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style18">
      <?

if($dia_final<="15"){

}
else{

$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql20 = "SELECT * FROM tabela_inss where ano = '$ano_final'";
$res20 = mysql_query($sql20);
while($linha=mysql_fetch_row($res20)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_salario = bcmul($vencimentos,$aliquota,2);

$inss_salario_menos_inss_ferias = bcsub($inss_salario,$inss_sobre_ferias,2);

echo "R$ $inss_salario_menos_inss_ferias";

}

?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style25">
      <? 
	  
if($dia_final<="15"){

$valor_holerite = $quinzena;

	
echo "R$ $valor_holerite";


}
else{
	
$valor_holerite = $salario_funcionario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar-$liquido_ferias-$inss_sobre_ferias-$inss_salario_menos_inss_ferias-$mensalidade_sindicato-$contribuicao_sindical;

	
echo "R$ $valor_holerite";
	
}	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <form action="encerramento_externo.php" method="post" name="form2" target="_blank">
        <? 
	  


$diferenca_quinzena = $total_vencimentos-$valor_holerite;



if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

//echo $diferenca;
	
	 ?>
        <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
        <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
        <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
        <input name="data_inicial" type="hidden" id="data_inicial" value="<? echo $data_inicial; ?>">
        <input name="data_final" type="hidden" id="data_final" value="<? echo $data_final; ?>">
        <input name="diferenca" type="hidden" id="diferenca" value="<? echo $diferenca; ?>">
        
<? if($diferenca=="Mensalista"){ }else{ echo "<input type='submit' name='button3' id='button3' value='R$ $diferenca'>"; } ?>
      </form>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = $quinzena;


}
else{

$valor_holerite = "0.00";

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
    </div></td>
  </tr>
    <?  }  ?>


  <tr>
    <td bgcolor="#33CCCC"><div align="center" class="style24"><span class="style27">COLADEIRAS</span></div></td>
    <td bgcolor="#33CCCC"><div align="center"><span class="style18"><strong>REF </strong><br>
      <strong>DT / DSR</strong></span></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">VALORHOLERITE QUINZENA</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">SALARIO BRUTO HOLERITE</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>Salario Familia</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PLR</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">HORAS EXTRAS</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Qtde Prs P&ccedil;o 01</span></strong><span class="style18">Linha_Comum</span></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">
      <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 01Linha_Comum</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 02Baixo(Grau_1) </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 02Baixo(Grau_1)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 04Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total P&ccedil;o 04</span></strong><span class="style21">Alto Neoprene 360&ordm;(Grau_3)</span></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total Pe&ccedil;as Apuradas</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong> FERIAS <BR>
      REF </strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ 1/3 FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>TOTALBRUTO FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18">
      <div align="center"><strong>LIQUIDO FERIAS</strong></div>
    </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total Venctos</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE FERIAS</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Mensalidade Sindicato</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Contribui&ccedil;&atilde;o Sindical</strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DE FALTAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS DOMINGOS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE SALARIO</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><span class="style21">Valor holerite Liquido a Receber</span></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Mensalista</div></td>
  </tr>
    <?
$sql = "SELECT * FROM operadores where funcao = 'COLADEIRA1' or funcao = 'COLADEIRA2' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

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

$areaproducao = $linha[57];

$tempo_almoco = $linha[58];

$cbo = $linha[59];

$secao = $linha[60];

$classificacao = $linha[61];

$recebequinzena = $linha[62];
$sindical = $linha[63];
$valor_sindicato = $linha[64];

$valor_da_hora = bcdiv($salario,220,5);

?>

  <tr>
      <td bgcolor="#CCCCCC"><div align="center" class="style24">
        <form action="<? echo $encerramento; ?>" method="post" name="form2" target="_blank">
          <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
          <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
          <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
          <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
          <input type="submit" name="button2" id="button2" value="<? echo $nome; ?>">
        </form>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center">
        <?
$sql2 = "SELECT * FROM tabela_meses where ano = '$ano_final'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$codigo = $linha[0];
$ano = $linha[2];

$mes01 = $linha[1];
$dias01 = $linha[3];
$dias_trabalhados01 = $linha[4];
$dsr01 = $linha[5];

$mes02 = $linha[6];
$dias02 = $linha[7];
$dias_trabalhados02 = $linha[8];
$dsr02 = $linha[9];

$mes03 = $linha[10];
$dias03 = $linha[11];
$dias_trabalhados03 = $linha[12];
$dsr03 = $linha[13];

$mes04 = $linha[14];
$dias04 = $linha[15];
$dias_trabalhados04 = $linha[16];
$dsr04 = $linha[17];

$mes05 = $linha[18];
$dias05 = $linha[19];
$dias_trabalhados05 = $linha[20];
$dsr05 = $linha[21];

$mes06 = $linha[22];
$dias06 = $linha[23];
$dias_trabalhados06 = $linha[24];
$dsr06 = $linha[25];

$mes07 = $linha[26];
$dias07 = $linha[27];
$dias_trabalhados07 = $linha[28];
$dsr07 = $linha[29];

$mes08 = $linha[30];
$dias08 = $linha[31];
$dias_trabalhados08 = $linha[32];
$dsr08 = $linha[33];

$mes09 = $linha[34];
$dias09 = $linha[35];
$dias_trabalhados09 = $linha[36];
$dsr09 = $linha[37];

$mes10 = $linha[38];
$dias10 = $linha[39];
$dias_trabalhados10 = $linha[40];
$dsr10 = $linha[41];

$mes11 = $linha[42];
$dias11 = $linha[43];
$dias_trabalhados11 = $linha[44];
$dsr11 = $linha[45];

$mes12 = $linha[46];
$dias12 = $linha[47];
$dias_trabalhados12 = $linha[48];
$dsr12 = $linha[49];

$mes_comercial = $linha[50];
$date = $linha[51];
$hora = $linha[52];

}

if($mes_final=="01"){

$ref_dias_trabalhados = "$dias_trabalhados01";
$ref_dsr_mes = "$dsr01";

}

if($mes_final=="02"){

$ref_dias_trabalhados = "$dias_trabalhados02";
$ref_dsr_mes = "$dsr02";

}
	  
if($mes_final=="03"){

$ref_dias_trabalhados = "$dias_trabalhados03";
$ref_dsr_mes = "$dsr03";

}
	  
if($mes_final=="04"){

$ref_dias_trabalhados = "$dias_trabalhados04";
$ref_dsr_mes = "$dsr04";

}
	  
if($mes_final=="05"){

$ref_dias_trabalhados = "$dias_trabalhados05";
$ref_dsr_mes = "$dsr05";

}
	  
if($mes_final=="06"){

$ref_dias_trabalhados = "$dias_trabalhados06";
$ref_dsr_mes = "$dsr06";

}
	  
if($mes_final=="07"){

$ref_dias_trabalhados = "$dias_trabalhados07";
$ref_dsr_mes = "$dsr07";

}
	  
if($mes_final=="08"){

$ref_dias_trabalhados = "$dias_trabalhados08";
$ref_dsr_mes = "$dsr08";

}
	  
if($mes_final=="09"){

$ref_dias_trabalhados = "$dias_trabalhados09";
$ref_dsr_mes = "$dsr09";

}
	  
if($mes_final=="10"){

$ref_dias_trabalhados = "$dias_trabalhados10";
$ref_dsr_mes = "$dsr10";

}
	  
if($mes_final=="11"){

$ref_dias_trabalhados = "$dias_trabalhados11";
$ref_dsr_mes = "$dsr11";

}

if($mes_final=="12"){

$ref_dias_trabalhados = "$dias_trabalhados12";
$ref_dsr_mes = "$dsr12";

}
	  

if($classificacao=="MENSALISTA"){

$total_horas_do_mes = "220";


}
	
if($classificacao=="HORISTA"){
  
	  
$horas_trabalhadas_no_mes = bcmul(8.8,$ref_dias_trabalhados,2);


$total_horas_do_mes = bcadd($horas_trabalhadas_no_mes,0,2);

}


$total_dsr_no_mes = bcmul(7.33,$ref_dsr_mes,2);

$total_geral_horas_no_mes = bcadd($horas_trabalhadas_no_mes,$total_dsr_no_mes,2);

echo "$total_geral_horas_no_mes";
?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?






$quinzena = bcmul($valor_da_hora,110,2);

	
echo "R$ $quinzena";
	 
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? 

if($dia_final>=16){
	
$remuneracao_normal = round(bcmul($valor_da_hora,$total_horas_do_mes,2),1);
$remuneracao_dsr = round(bcmul($valor_da_hora,$total_dsr_no_mes,2),1);

//$salario_funcionario = round(bcmul($valor_da_hora,$total_geral_horas_no_mes,2),2);

$salario_funcionario = $remuneracao_normal+$remuneracao_dsr;





echo "R$ $salario_funcionario";
}

else{

$salario_funcionario = bcmul($valor_da_hora,110,2);


}



?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style21">
        <?

$sql4 = "select sum(valor_sf) as total_sf from dependentes where  operador_pertence = '$nome' and idade <= '13'";
$resultado4=mysql_query($sql4, $conexao);
$linha=mysql_fetch_array($resultado4);



$sf_receber = $linha['total_sf'];


if($sf_receber==0){

}
else{

echo "R$ $sf_receber";

}

?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center"></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?


$sql5 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$total_de_horas_extras_realizadas = $linha['total_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $total_de_horas_extras_realizadas;
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? 
	
$valor_hora_normal = bcdiv($salario,220,5);
$acrecimo_hora_extra = bcmul($valor_hora_normal,0.5,5);
$valor_hora_extra = bcadd($valor_hora_normal,$acrecimo_hora_extra,5);

$total_monetario_hora_extra = bcmul($total_de_horas_extras_realizadas,$valor_hora_extra,2);

if($total_monetario_hora_extra=="0"){

}
else{
	
echo "R$ $total_monetario_hora_extra";
	
}

	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_economico from fichas where $funcao = '$nome' and nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$total_producao_linha_comum = $linha['totaldepares_economico'];

if($total_producao_linha_comum==""){
//echo "0";
}
else{
echo $total_producao_linha_comum;
}


?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql7 = "select * from modelos where nivel_dificuldade = 'Linha_Comum' order by preco_coladeira1 desc limit 1";
$res7 = mysql_query($sql7);
while($linha=mysql_fetch_row($res7)) {


$preco_coladeira = $linha[3];

}

if($total_producao_linha_comum==""){

}
else{
echo "R$ $preco_coladeira";
}
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $totalcoladeira2_linha_comum = bcmul($total_producao_linha_comum,$preco_coladeira,2);
	  
if($totalcoladeira2_linha_comum==""){

}
else{	
	echo "R$ $totalcoladeira2_linha_comum";
}
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql8 = "select sum(quant_pares) as totaldepares_baixograu1 from fichas where $funcao = '$nome' and nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado8=mysql_query($sql8, $conexao);

$linha=mysql_fetch_array($resultado8);



$total_producao_baixograu1 = $linha['totaldepares_baixograu1'];

if($total_producao_baixograu1==""){
//echo "0";
}
else{
echo $total_producao_baixograu1;
}


?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql9 = "select * from modelos where nivel_dificuldade = 'Baixo(Grau_1)' order by preco_coladeira1 desc limit 1";
$res9 = mysql_query($sql9);
while($linha=mysql_fetch_row($res9)) {


$preco_coladeira_baixo_grau1 = $linha[3];

}

if($total_producao_baixograu1==""){

}
else{

echo "R$ $preco_coladeira_baixo_grau1";

}
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_baixograu1 = bcmul($total_producao_baixograu1,$preco_coladeira_baixo_grau1,2);
	  
if($total_producao_baixograu1==""){

}
else{	
	echo "R$ $total_linha_baixograu1";
}
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql10 = "select sum(quant_pares) as totaldepares_mediograu2 from fichas where $funcao = '$nome' and nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado10=mysql_query($sql10, $conexao);

$linha=mysql_fetch_array($resultado10);



$total_producao_mediograu2 = $linha['totaldepares_mediograu2'];

if($total_producao_mediograu2==""){
//echo "0";
}
else{
echo $total_producao_mediograu2;
}


?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql11 = "select * from modelos where nivel_dificuldade = 'Médio Botas(Grau_2)'order by preco_coladeira1 desc  limit 1";
$res11 = mysql_query($sql11);
while($linha=mysql_fetch_row($res11)) {


$preco_coladeira_medio_grau2 = $linha[3];

}

if($total_producao_mediograu2==""){

}
else{

echo "R$ $preco_coladeira_medio_grau2";

}
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_mediograu2 = bcmul($total_producao_mediograu2,$preco_coladeira_medio_grau2,2);
	  
if($total_producao_mediograu2==""){

}
else{
	
	echo "R$ $total_linha_mediograu2";

}
	
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?



if(empty($dia_inicial)){
}
else{

$sql12 = "select sum(quant_pares) as totaldepares_altograu3 from fichas where $funcao = '$nome' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado12=mysql_query($sql12, $conexao);

$linha=mysql_fetch_array($resultado12);



$total_producao_altoneoprene_grau3 = $linha['totaldepares_altograu3'];

if($total_producao_altoneoprene_grau3==""){
//echo "0";
}
else{
echo $total_producao_altoneoprene_grau3;
}


?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?    
$sql13 = "select * from modelos where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)'order by preco_coladeira1 desc  limit 1";
$res13 = mysql_query($sql13);
while($linha=mysql_fetch_row($res13)) {


$preco_coladeira_alto_neoprene_grau3 = $linha[3];

}

if($total_producao_altoneoprene_grau3==""){

}
else{

echo "R$ $preco_coladeira_alto_neoprene_grau3";

}
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <? $total_linha_altoneoprenegrau3 = bcmul($total_producao_altoneoprene_grau3,$preco_coladeira_alto_neoprene_grau3,2);
	  
if($total_producao_altoneoprene_grau3==""){

}
else{
	
	echo "R$ $total_linha_altoneoprenegrau3";
	
	}
	
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?
    
$total_pecas_apuradas = $total_linha_comum+$total_linha_baixograu1+$total_linha_mediograu2+$total_linha_altoneoprenegrau3;

echo "R$ $total_pecas_apuradas";
	
	?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?
$sql14 = "select sum(ref) as totaldiasferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado14=mysql_query($sql14, $conexao);

$linha=mysql_fetch_array($resultado14);

$ref = $linha['totaldiasferias'];


echo $ref;
?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?
$sql15 = "select sum(ferias) as totalferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado15=mysql_query($sql15, $conexao);

$linha=mysql_fetch_array($resultado15);

$ferias = $linha['totalferias'];


echo $ferias;
?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?
$sql16 = "select sum(terco) as totalterco from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado16=mysql_query($sql16, $conexao);

$linha=mysql_fetch_array($resultado16);

$terco = $linha['totalterco'];


echo $terco;
?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center"><span class="style24">
        <? 
	

$total_ferias = bcadd($ferias,$terco,2);

	
echo "R$ $total_ferias";

	
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <div align="center"><span class="style24">
          <? 
	

$calculando_liquido_ferias = bcadd($ferias,$terco,2);

$liquido_ferias = bcsub($calculando_liquido_ferias,$inss_sobre_ferias,2);

	
echo "R$ $liquido_ferias";

	
	 ?>
        </span></div>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center">
        <?
    
$total_vencimentos = $total_pecas_apuradas+$total_monetario_hora_extra+$total_ferias+$sf_receber;
    
    echo "R$ $total_vencimentos";
?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?
$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql17 = "SELECT * FROM tabela_inss where mes = '$mes_final' and ano = '$ano_final'";
$res17 = mysql_query($sql17);
while($linha=mysql_fetch_row($res17)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_sobre_ferias = bcmul($total_ferias,$aliquota,2);


echo "R$ $inss_sobre_ferias";

?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?

if($sindical=="Sim"){

$mensalidade_sindicato = $valor_sindicato;

 echo "R$ $mensalidade_sindicato";
 
}
else{

$mensalidade_sindicato = "0.00";


}
 
 ?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style18">
        <?   

if($mes_final=="03"){

$contribuicao_sindical = round(bcmul($valor_da_hora,220,2)/30,2);

echo "R$ $contribuicao_sindical";


}
else{
	

$contribuicao_sindical = "0.00";


}


?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?
$sql18 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado18=mysql_query($sql18, $conexao);

$linha=mysql_fetch_array($resultado18);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style25">
        <? 
	
$sql32 = "select sum(total) as totalfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado32=mysql_query($sql32, $conexao);
$linha=mysql_fetch_array($resultado32);

$total_monetario_horas_a_descontar = $linha['totalfaltas'];


if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
        <?
$sql19 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado19=mysql_query($sql19, $conexao);

$linha=mysql_fetch_array($resultado19);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style25">
        <? 
	
$sql33 = "select sum(total_domingo) as totaldomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado33=mysql_query($sql33, $conexao);
$linha=mysql_fetch_array($resultado33);

$total_monetario_horas_domingo_a_descontar = $linha['totaldomingo'];


if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center"></div></td>
      <td bgcolor="#CCCCCC"><div align="center"><span class="style18">
        <?

if($dia_final<="15"){

}
else{

$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql20 = "SELECT * FROM tabela_inss where ano = '$ano_final'";
$res20 = mysql_query($sql20);
while($linha=mysql_fetch_row($res20)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_salario = bcmul($vencimentos,$aliquota,2);

$inss_salario_menos_inss_ferias = bcsub($inss_salario,$inss_sobre_ferias,2);

echo "R$ $inss_salario_menos_inss_ferias";

}

?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center"><span class="style25">
        <? 
	  
if($dia_final<="15"){

$valor_holerite = $quinzena;

	
echo "R$ $valor_holerite";


}
else{
	
$valor_holerite = $salario_funcionario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar-$liquido_ferias-$inss_sobre_ferias-$inss_salario_menos_inss_ferias-$mensalidade_sindicato-$contribuicao_sindical;

	
echo "R$ $valor_holerite";
	
}	
	 ?>
      </span></div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style25">
        <form action="encerramento_externo.php" method="post" name="form2" target="_blank">
          <? 
	  


$diferenca_quinzena = $total_vencimentos-$valor_holerite;



if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

//echo $diferenca;
	
	 ?>
          <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
          <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
          <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
          <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
          <input name="data_inicial" type="hidden" id="data_inicial" value="<? echo $data_inicial; ?>">
          <input name="data_final" type="hidden" id="data_final" value="<? echo $data_final; ?>">
          <input name="diferenca" type="hidden" id="diferenca" value="<? echo $diferenca; ?>">
          <? if($diferenca=="Mensalista"){ }else{ echo "<input type='submit' name='button3' id='button3' value='R$ $diferenca'>"; } ?>
        </form>
      </div></td>
      <td bgcolor="#CCCCCC"><div align="center" class="style25">
        <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = $quinzena;


}
else{

$valor_holerite = "0.00";

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
      </div></td>
  </tr>
<? } ?>
  
  <tr>
    <td bgcolor="#33CCCC"><div align="center" class="style26">MENSALISTAS</div></td>
    <td bgcolor="#33CCCC"><div align="center"><span class="style18"><strong>REF </strong><br>
      <strong>DT / DSR</strong></span></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">VALORHOLERITE QUINZENA</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">SALARIO BRUTO HOLERITE</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>Salario Familia</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PLR</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">HORAS EXTRAS</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Qtde Prs P&ccedil;o 01</span></strong><span class="style18">Linha_Comum</span></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">
      <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 01Linha_Comum</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 02Baixo(Grau_1) </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 02Baixo(Grau_1)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 03M&eacute;dio Botas(Grau_2)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 04Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total P&ccedil;o 04</span></strong><span class="style21">Alto Neoprene 360&ordm;(Grau_3)</span></div></td>
    <td bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total Pe&ccedil;as Apuradas</span></strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong> FERIAS <BR>
      REF </strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>R$ 1/3 FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>TOTALBRUTO FERIAS</strong></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18">
      <div align="center"><strong>LIQUIDO FERIAS</strong></div>
    </div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Total Venctos</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE FERIAS</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Mensalidade Sindicato</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>Contribui&ccedil;&atilde;o Sindical</strong></div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DE FALTAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS DOMINGOS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style18"><strong>INSS SOBRE SALARIO</strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><span class="style21">Valor holerite Liquido a Receber</span></div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td bgcolor="#33CCCC"><div align="center" class="style21">Mensalista</div></td>
  </tr>
    <?
$sql36 = "SELECT * FROM operadores where funcao <> 'PESPONTADOR(A)' and funcao <> 'COLADEIRA1' and funcao <> 'COLADEIRA2' and classificacao = 'HORISTA' and status = 'Ativo' order by nome asc";

$res36 = mysql_query($sql36);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res36)) {



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

$areaproducao = $linha[57];

$tempo_almoco = $linha[58];

$cbo = $linha[59];

$secao = $linha[60];

$classificacao = $linha[61];

$recebequinzena = $linha[62];
$sindical = $linha[63];
$valor_sindicato = $linha[64];


$valor_da_hora = bcdiv($salario,220,5);


?>

  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18"><? echo $nome; ?></span></div></td>
    <td bgcolor="#CCCCCC"><div align="center">
      <?
$sql2 = "SELECT * FROM tabela_meses where ano = '$ano_final'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$codigo = $linha[0];
$ano = $linha[2];

$mes01 = $linha[1];
$dias01 = $linha[3];
$dias_trabalhados01 = $linha[4];
$dsr01 = $linha[5];

$mes02 = $linha[6];
$dias02 = $linha[7];
$dias_trabalhados02 = $linha[8];
$dsr02 = $linha[9];

$mes03 = $linha[10];
$dias03 = $linha[11];
$dias_trabalhados03 = $linha[12];
$dsr03 = $linha[13];

$mes04 = $linha[14];
$dias04 = $linha[15];
$dias_trabalhados04 = $linha[16];
$dsr04 = $linha[17];

$mes05 = $linha[18];
$dias05 = $linha[19];
$dias_trabalhados05 = $linha[20];
$dsr05 = $linha[21];

$mes06 = $linha[22];
$dias06 = $linha[23];
$dias_trabalhados06 = $linha[24];
$dsr06 = $linha[25];

$mes07 = $linha[26];
$dias07 = $linha[27];
$dias_trabalhados07 = $linha[28];
$dsr07 = $linha[29];

$mes08 = $linha[30];
$dias08 = $linha[31];
$dias_trabalhados08 = $linha[32];
$dsr08 = $linha[33];

$mes09 = $linha[34];
$dias09 = $linha[35];
$dias_trabalhados09 = $linha[36];
$dsr09 = $linha[37];

$mes10 = $linha[38];
$dias10 = $linha[39];
$dias_trabalhados10 = $linha[40];
$dsr10 = $linha[41];

$mes11 = $linha[42];
$dias11 = $linha[43];
$dias_trabalhados11 = $linha[44];
$dsr11 = $linha[45];

$mes12 = $linha[46];
$dias12 = $linha[47];
$dias_trabalhados12 = $linha[48];
$dsr12 = $linha[49];

$mes_comercial = $linha[50];
$date = $linha[51];
$hora = $linha[52];

}

if($mes_final=="01"){

$ref_dias_trabalhados = "$dias_trabalhados01";
$ref_dsr_mes = "$dsr01";

}

if($mes_final=="02"){

$ref_dias_trabalhados = "$dias_trabalhados02";
$ref_dsr_mes = "$dsr02";

}
	  
if($mes_final=="03"){

$ref_dias_trabalhados = "$dias_trabalhados03";
$ref_dsr_mes = "$dsr03";

}
	  
if($mes_final=="04"){

$ref_dias_trabalhados = "$dias_trabalhados04";
$ref_dsr_mes = "$dsr04";

}
	  
if($mes_final=="05"){

$ref_dias_trabalhados = "$dias_trabalhados05";
$ref_dsr_mes = "$dsr05";

}
	  
if($mes_final=="06"){

$ref_dias_trabalhados = "$dias_trabalhados06";
$ref_dsr_mes = "$dsr06";

}
	  
if($mes_final=="07"){

$ref_dias_trabalhados = "$dias_trabalhados07";
$ref_dsr_mes = "$dsr07";

}
	  
if($mes_final=="08"){

$ref_dias_trabalhados = "$dias_trabalhados08";
$ref_dsr_mes = "$dsr08";

}
	  
if($mes_final=="09"){

$ref_dias_trabalhados = "$dias_trabalhados09";
$ref_dsr_mes = "$dsr09";

}
	  
if($mes_final=="10"){

$ref_dias_trabalhados = "$dias_trabalhados10";
$ref_dsr_mes = "$dsr10";

}
	  
if($mes_final=="11"){

$ref_dias_trabalhados = "$dias_trabalhados11";
$ref_dsr_mes = "$dsr11";

}

if($mes_final=="12"){

$ref_dias_trabalhados = "$dias_trabalhados12";
$ref_dsr_mes = "$dsr12";

}
	  

if($classificacao=="MENSALISTA"){

$total_horas_do_mes = "220";


}
	
if($classificacao=="HORISTA"){
  
	  
$horas_trabalhadas_no_mes = bcmul(8.8,$ref_dias_trabalhados,2);


$total_horas_do_mes = bcadd($horas_trabalhadas_no_mes,0,2);

}


$total_dsr_no_mes = bcmul(7.33,$ref_dsr_mes,2);

$total_geral_horas_no_mes = bcadd($horas_trabalhadas_no_mes,$total_dsr_no_mes,2);

echo "$total_geral_horas_no_mes";
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?






$quinzena = bcmul($valor_da_hora,110,2);

	
echo "R$ $quinzena";
	 
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 

if($dia_final>=16){


$salario_funcionario = round(bcmul($valor_da_hora,$total_geral_horas_no_mes,2),1);


echo "R$ $salario_funcionario";

}
else{

$salario_funcionario = bcmul($valor_da_hora,110,2);


}



?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style21">
      <?

$sql4 = "select sum(valor_sf) as total_sf from dependentes where  operador_pertence = '$nome' and idade <= '13'";
$resultado4=mysql_query($sql4, $conexao);
$linha=mysql_fetch_array($resultado4);



$sf_receber = $linha['total_sf'];


if($sf_receber==0){

}
else{

echo "R$ $sf_receber";

}

?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?


$sql5 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$total_de_horas_extras_realizadas = $linha['total_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $total_de_horas_extras_realizadas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 
	
$valor_hora_normal = bcdiv($salario,220,5);
$acrecimo_hora_extra = bcmul($valor_hora_normal,0.5,5);
$valor_hora_extra = bcadd($valor_hora_normal,$acrecimo_hora_extra,5);

$total_monetario_hora_extra = bcmul($total_de_horas_extras_realizadas,$valor_hora_extra,2);

if($total_monetario_hora_extra=="0"){

}
else{
	
echo "R$ $total_monetario_hora_extra";
	
}

	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql14 = "select sum(ref) as totaldiasferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado14=mysql_query($sql14, $conexao);

$linha=mysql_fetch_array($resultado14);

$ref = $linha['totaldiasferias'];


echo $ref;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql15 = "select sum(ferias) as totalferias from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado15=mysql_query($sql15, $conexao);

$linha=mysql_fetch_array($resultado15);

$ferias = $linha['totalferias'];


echo $ferias;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$sql16 = "select sum(terco) as totalterco from ferias where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado16=mysql_query($sql16, $conexao);

$linha=mysql_fetch_array($resultado16);

$terco = $linha['totalterco'];


echo $terco;
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style24">
      <? 
	

$total_ferias = bcadd($ferias,$terco,2);

	
echo "R$ $total_ferias";

	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <div align="center"><span class="style24">
        <? 
	

$calculando_liquido_ferias = bcadd($ferias,$terco,2);

$liquido_ferias = bcsub($calculando_liquido_ferias,$inss_sobre_ferias,2);

	
echo "R$ $liquido_ferias";

	
	 ?>
      </span></div>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center">
      <?
    
$total_vencimentos = $total_pecas_apuradas+$total_monetario_hora_extra+$total_ferias+$sf_receber;
    
    echo "R$ $total_vencimentos";
?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?
$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql17 = "SELECT * FROM tabela_inss where mes = '$mes_final' and ano = '$ano_final'";
$res17 = mysql_query($sql17);
while($linha=mysql_fetch_row($res17)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_sobre_ferias = bcmul($total_ferias,$aliquota,2);


echo "R$ $inss_sobre_ferias";

?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?

if($sindical=="Sim"){

$mensalidade_sindicato = $valor_sindicato;

 echo "R$ $mensalidade_sindicato";
 
}
else{

$mensalidade_sindicato = "0.00";


}
 
 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style18">
      <?   

if($mes_final=="03"){

$contribuicao_sindical = round(bcmul($valor_da_hora,220,2)/30,2);

echo "R$ $contribuicao_sindical";


}
else{
	

$contribuicao_sindical = "0.00";


}


?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql18 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado18=mysql_query($sql18, $conexao);

$linha=mysql_fetch_array($resultado18);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$sql32 = "select sum(total) as totalfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado32=mysql_query($sql32, $conexao);
$linha=mysql_fetch_array($resultado32);

$total_monetario_horas_a_descontar = $linha['totalfaltas'];


if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql19 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado19=mysql_query($sql19, $conexao);

$linha=mysql_fetch_array($resultado19);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$sql33 = "select sum(total_domingo) as totaldomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";
$resultado33=mysql_query($sql33, $conexao);
$linha=mysql_fetch_array($resultado33);

$total_monetario_horas_domingo_a_descontar = $linha['totaldomingo'];


if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style18">
      <?

if($dia_final<="15"){

}
else{

$vencimentos = bcadd($salario_funcionario,$total_ferias,5);


$sql20 = "SELECT * FROM tabela_inss where ano = '$ano_final'";
$res20 = mysql_query($sql20);
while($linha=mysql_fetch_row($res20)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($vencimentos>=$de1) && ($vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($vencimentos>=$de2) && ($vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($vencimentos>=$de3) && ($vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($vencimentos>=$de4) && ($vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$inss_salario = bcmul($vencimentos,$aliquota,2);

$inss_salario_menos_inss_ferias = bcsub($inss_salario,$inss_sobre_ferias,2);

echo "R$ $inss_salario_menos_inss_ferias";

}

?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style25">
      <? 
	  
if($dia_final<="15"){

$valor_holerite = $quinzena;

	
echo "R$ $valor_holerite";


}
else{
	
$valor_holerite = $salario_funcionario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar-$liquido_ferias-$inss_sobre_ferias-$inss_salario_menos_inss_ferias-$mensalidade_sindicato-$contribuicao_sindical;

	
echo "R$ $valor_holerite";
	
}	
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <form action="encerramento_externo.php" method="post" name="form2" target="_blank">
        <? 
	  


$diferenca_quinzena = $total_vencimentos-$valor_holerite;



if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

//echo $diferenca;
	
	 ?>
        <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
        <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
        <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
        <input name="data_inicial" type="hidden" id="data_inicial" value="<? echo $data_inicial; ?>">
        <input name="data_final" type="hidden" id="data_final" value="<? echo $data_final; ?>">
        <input name="diferenca" type="hidden" id="diferenca" value="<? echo $diferenca; ?>">
        <? if($diferenca=="Mensalista"){ }else{ echo "<input type='submit' name='button3' id='button3' value='R$ $diferenca'>"; } ?>
      </form>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = $quinzena;


}
else{

$valor_holerite = "0.00";

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
    </div></td>
  </tr>
  
  <? } ?>
  <tr>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style28 style19 style30"><strong>Sub-Total</strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style28 style20 style30"><strong>
        <?




$sql21 = "select sum(salario) as total_quinzena from operadores where status = 'Ativo'";
$resultado21=mysql_query($sql21, $conexao);
$linha=mysql_fetch_array($resultado21);



$totalgeral_quinzena = $linha['total_quinzena'];

if($totalgeral_quinzena==""){
//echo "0";
}
else{

$totalgeral_quinzena = bcdiv($total_quinzena_p,2,2);
echo "R$ $totalgeral_quinzena";
}


?>
        </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style28 style20 style30"><strong>
        <?




$sql22 = "select sum(salario) as total_salario from operadores where status = 'Ativo'";
$resultado22=mysql_query($sql22, $conexao);
$linha=mysql_fetch_array($resultado22);



$totalgeralsalario_funcionario = $linha['total_salario'];

if($totalgeralsalario_funcionario==""){
//echo "0";
}
else{

$totalgeralsalario_funcionario = bcadd($totalgeralsalario_funcionario,0,2);
echo "R$ $totalgeralsalario_funcionario";
}


?>
        </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style31">
        <?




$sql23 = "select sum(valor_sf) as total_salario from dependentes";
$resultado23=mysql_query($sql23, $conexao);
$linha=mysql_fetch_array($resultado23);



$totalgeral_sf_receber = $linha['total_salario'];

if($totalgeral_sf_receber==""){
//echo "0";
}
else{

$sub_total_sf_receber = bcadd($totalgeral_sf_receber,0,2);
echo "R$ $sub_total_sf_receber";
}


?></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style31">
        <?


$sql5 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final'";


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$totalgeral_de_horas_extras_realizadas = bcadd($linha['total_horas_extras'],0,2);
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $totalgeral_de_horas_extras_realizadas;
?>
    </div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style31">
        <?


$sql5 = "select sum(total) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final'";


$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



$totalgeral_de_horas_extras_realizadas = bcadd($linha['total_horas_extras'],0,2);
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo "R$ $totalgeral_de_horas_extras_realizadas";
?>
    </div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style28 style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_economico from fichas where nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeral_producao_linha_comum = $linha['totaldepares_economico'];

if($totalgeral_producao_linha_comum==""){
//echo "0";
}
else{
echo $totalgeral_producao_linha_comum;
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style28 style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{


$sql6 = "select sum(total_pespontador) as totaldepares_economico from fichas where nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralpespontadores_producao_linha_comum = $linha['totaldepares_economico'];





$sql6 = "select sum(total_coladeira1) as totaldepares_economico from fichas where nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras1_producao_linha_comum = $linha['totaldepares_economico'];




$sql6 = "select sum(total_coladeira2) as totaldepares_economico from fichas where nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras2_producao_linha_comum = $linha['totaldepares_economico'];


}



$totalmonetario_linha_comum = $totalgeralpespontadores_producao_linha_comum+$totalgeralcoladeiras1_producao_linha_comum+$totalgeralcoladeiras2_producao_linha_comum;




if($totalmonetario_linha_comum==""){

}
else{
echo "R$ $totalmonetario_linha_comum";
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_baixograu_1 from fichas where nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeral_producao_BaixoGrau_1 = $linha['totaldepares_baixograu_1'];

if($totalgeral_producao_BaixoGrau_1==""){
//echo "0";
}
else{
echo $totalgeral_producao_BaixoGrau_1;
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(total_pespontador) as totaldepares_baixograu1 from fichas where nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralpespontadores_producao_baixograu1 = $linha['totaldepares_baixograu1'];





$sql6 = "select sum(total_coladeira1) as totaldepares_baixograu1 from fichas where nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras1_producao_baixograu1 = $linha['totaldepares_baixograu1'];




$sql6 = "select sum(total_coladeira2) as totaldepares_baixograu1 from fichas where nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras2_producao_baixograu1 = $linha['totaldepares_baixograu1'];


}



$totalmonetario_baixograu1 = $totalgeralpespontadores_producao_baixograu1+$totalgeralcoladeiras1_producao_baixograu1+$totalgeralcoladeiras2_producao_baixograu1;




if($totalmonetario_baixograu1==""){

}
else{
echo "R$ $totalmonetario_baixograu1";
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_mediobotasGrau_2 from fichas where nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeral_producao_mediobotasGrau_2 = $linha['totaldepares_mediobotasGrau_2'];

if($totalgeral_producao_mediobotasGrau_2==""){
//echo "0";
}
else{
echo $totalgeral_producao_mediobotasGrau_2;
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(total_pespontador) as totaldeparesmediograu2 from fichas where nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralpespontadores_producao_mediograu2 = $linha['totaldeparesmediograu2'];





$sql6 = "select sum(total_coladeira1) as totaldeparesmediograu2 from fichas where nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras1_producao_mediograu2 = $linha['totaldeparesmediograu2'];




$sql6 = "select sum(total_coladeira2) as totaldeparesmediograu2 from fichas where nivel_dificuldade = 'Médio Botas(Grau_2)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras2_producao_mediograu2 = $linha['totaldeparesmediograu2'];


}



$totalmonetario_mediograu2 = $totalgeralpespontadores_producao_mediograu2+$totalgeralcoladeiras1_producao_mediograu2+$totalgeralcoladeiras2_producao_mediograu2;




if($totalmonetario_mediograu2==""){

}
else{
echo "R$ $totalmonetario_mediograu2";
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(quant_pares) as totaldepares_altoneoprenerau_3 from fichas where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeral_producao_altoneoprenegrau_3 = $linha['totaldepares_altoneoprenerau_3'];

if($totalgeral_producao_altoneoprenegrau_3==""){
//echo "0";
}
else{
echo $totalgeral_producao_altoneoprenegrau_3;
}


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?



if(empty($dia_inicial)){
}
else{

$sql6 = "select sum(total_pespontador) as totaldepares_altoneoprenegrau3 from fichas where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralpespontadores_producao_altoneoprenegrau3 = $linha['totaldepares_altoneoprenegrau3'];





$sql6 = "select sum(total_coladeira1) as totaldepares_altoneoprenegrau3 from fichas where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras1_producao_altoneoprenegrau3 = $linha['totaldepares_altoneoprenegrau3'];




$sql6 = "select sum(total_coladeira2) as totaldepares_altoneoprenegrau3 from fichas where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";



$resultado6=mysql_query($sql6, $conexao);

$linha=mysql_fetch_array($resultado6);



$totalgeralcoladeiras2_producao_altoneoprenegrau3 = $linha['totaldepares_altoneoprenegrau3'];


}



$totalmonetario_altoneoprenegrau3 = $totalgeralpespontadores_producao_altoneoprenegrau3+$totalgeralcoladeiras1_producao_altoneoprenegrau3+$totalgeralcoladeiras2_producao_altoneoprenegrau3;




if($totalmonetario_altoneoprenegrau3==""){

}
else{
echo "R$ $totalmonetario_altoneoprenegrau3";
}


?></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style30">
      <?
    
$totalgeral_monetario_pecas_apuradas = $totalmonetario_linha_comum+$totalmonetario_baixograu1+$totalmonetario_mediograu2+$totalmonetario_altoneoprenegrau3;

echo "R$ $totalgeral_monetario_pecas_apuradas";

?>



<?

$sql40 = "SELECT * FROM cx_entradas where datainicioperiodo = '$data_inicial' and dataterminoperiodo = '$data_final' order by codigo asc";
$res40 = mysql_query($sql40);
while($linha=mysql_fetch_row($res40)) {
$reg++;






}

if(mysql_num_rows($res40)==0){




$datecadastro = date('Y-m-d');
$mes = date('m');
$dia = date('d');

$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');


$totalpespontadores_lancar_no_caixa = $totalgeralpespontadores_producao_linha_comum+$totalgeralpespontadores_producao_baixograu1+$totalgeralpespontadores_producao_mediograu2+$totalgeralpespontadores_producao_altoneoprenegrau3;


$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$totalpespontadores_lancar_no_caixa','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','PESPONTADOR(A)','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);




$totalcoladeira1_lancar_no_caixa = $totalgeralcoladeiras1_producao_linha_comum+$totalgeralcoladeiras1_producao_baixograu1+$totalgeralcoladeiras1_producao_mediograu2+$totalgeralcoladeiras1_producao_altoneoprenegrau3;


$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$totalcoladeira1_lancar_no_caixa','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','COLADEIRA1','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);



$totalcoladeira2_lancar_no_caixa = $totalgeralcoladeiras2_producao_linha_comum+$totalgeralcoladeiras2_producao_baixograu1+$totalgeralcoladeiras2_producao_mediograu2+$totalgeralcoladeiras2_producao_altoneoprenegrau3;


$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$totalcoladeira2_lancar_no_caixa','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','COLADEIRA2','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);









$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$totalgeralmonetario_trice','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','TRISSE','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);









$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$totalgeral_de_horas_extras_realizadas','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','HORAS EXTRAS','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);







$comando = "insert into cx_entradas(datacadastro,horacadastro,valor,nfantasia,operador,historico,dia,mes,ano,categoria_conta,datecadastro,agencia_credito,datainicioperiodo,dataterminoperiodo) values('$datacadastro','$horacadastro','$valor_quinzenal_socios','$nfantasia_cliente','$operador','Periodo de $data_inicial ate $data_final','$dia','$mes','$ano','PAGTO SOCIOS','$datecadastro','$nfantasia_empresa','$data_inicial','$data_final')";



mysql_query($comando,$conexao);





}


?>
    
    
    
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?
$sql14 = "select sum(ref) as totaldiasferias from ferias where data between '$data_inicial' and '$data_final'";

$resultado14=mysql_query($sql14, $conexao);

$linha=mysql_fetch_array($resultado14);

$ref = $linha['totaldiasferias'];


echo $ref;
?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?
$sql15 = "select sum(ferias) as totalferias from ferias where data between '$data_inicial' and '$data_final'";

$resultado15=mysql_query($sql15, $conexao);

$linha=mysql_fetch_array($resultado15);

$totalgeralferias = $linha['totalferias'];


echo $ferias;
?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?
$sql16 = "select sum(terco) as totalterco from ferias where data between '$data_inicial' and '$data_final'";

$resultado16=mysql_query($sql16, $conexao);

$linha=mysql_fetch_array($resultado16);

$totalgeralterco = $linha['totalterco'];


echo $terco;
?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <? 
	

$totalgeral_ferias = bcadd($totalgeralferias,$totalgeralterco,2);

	
echo "R$ $totalgeral_ferias";

	
	 ?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <? 
	

$calculandototalgeral_liquido_ferias = bcadd($totalgeralferias,$totalgeralterco,2);

$totalgeralliquido_ferias = bcsub($calculandototalgeral_liquido_ferias,$inss_sobre_ferias,2);

	
echo "R$ $totalgeralliquido_ferias";

	
	 ?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?
    
$totalgeral_vencimentos = $totalgeral_monetario_pecas_apuradas+$totalgeral_de_horas_extras_realizadas+$totalgeral_ferias+$sub_total_sf_receber;
    
    echo "R$ $totalgeral_vencimentos";
?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?
$totalgeral_vencimentos = bcadd($totalgeralsalario_funcionario,$totalgeral_ferias,5);


$sql17 = "SELECT * FROM tabela_inss where mes = '$mes_final' and ano = '$ano_final'";
$res17 = mysql_query($sql17);
while($linha=mysql_fetch_row($res17)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($totalgeral_vencimentos>=$de1) && ($totalgeral_vencimentos<=$ate1)){

$aliquota = $aliquota1;

}

if(($totalgeral_vencimentos>=$de2) && ($totalgeral_vencimentos<=$ate2)){

$aliquota = $aliquota2;

}

if(($totalgeral_vencimentos>=$de3) && ($totalgeral_vencimentos<=$ate3)){

$aliquota = $aliquota3;

}

if(($totalgeral_vencimentos>=$de4) && ($totalgeral_vencimentos<=$ate4)){

$aliquota = $aliquota4;

}




$totalgeral_inss_sobre_ferias = bcmul($total_ferias,$aliquota,2);


echo "R$ $totalgeral_inss_sobre_ferias";

?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <?




$sql30 = "select sum(valor_sindicato) as total_sindicato from operadores where status = 'Ativo'";
$resultado30=mysql_query($sql30, $conexao);
$linha=mysql_fetch_array($resultado30);



$totalgeral_mensalidade_sindicato = $linha['total_sindicato'];


echo "R$ $totalgeral_mensalidade_sindicato";


?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style30">
      <?
$sql31 = "select sum(quant_horas) as totalhorasfaltas from faltas where data between '$data_inicial' and '$data_final'";
$resultado31=mysql_query($sql31, $conexao);
$linha=mysql_fetch_array($resultado31);



$totalgeral_faltas = $linha['totalhorasfaltas'];


echo $totalgeral_faltas;
?></span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <? 
	
$sql32 = "select sum(total) as totalfaltas from faltas where data between '$data_inicial' and '$data_final'";
$resultado32=mysql_query($sql32, $conexao);
$linha=mysql_fetch_array($resultado32);

$totalgeral_monetario_horas_a_descontar = $linha['totalfaltas'];


if($totalgeral_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $totalgeral_monetario_horas_a_descontar";

}
	
	 ?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?
$sql19 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where data between '$data_inicial' and '$data_final'";

$resultado19=mysql_query($sql19, $conexao);

$linha=mysql_fetch_array($resultado19);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <? 
	
$sql33 = "select sum(total_domingo) as totaldomingo from faltas where data between '$data_inicial' and '$data_final'";
$resultado33=mysql_query($sql33, $conexao);
$linha=mysql_fetch_array($resultado33);

$totalgeral_monetario_horas_domingo_a_descontar = $linha['totaldomingo'];


if($totalgeral_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $totalgeral_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <?

if($dia_final<="15"){

}
else{

$totalgeral_inss_salario = bcadd($totalgeralsalario_funcionario,$totalgeral_ferias,5);


$sql20 = "SELECT * FROM tabela_inss where ano = '$ano_final'";
$res20 = mysql_query($sql20);
while($linha=mysql_fetch_row($res20)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de1 = $linha[3];
$ate1 = $linha[4];
$aliquota1 = $linha[5]/100;

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8]/100;

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11]/100;

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14]/100;

}

if(($totalgeral_inss_salario>=$de1) && ($totalgeral_inss_salario<=$ate1)){

$aliquota = $aliquota1;

}

if(($totalgeral_inss_salario>=$de2) && ($totalgeral_inss_salario<=$ate2)){

$aliquota = $aliquota2;

}

if(($totalgeral_inss_salario>=$de3) && ($totalgeral_inss_salario<=$ate3)){

$aliquota = $aliquota3;

}

if(($totalgeral_inss_salario>=$de4) && ($totalgeral_inss_salario<=$ate4)){

$aliquota = $aliquota4;

}




$totalgeral_inss_salario = bcmul($totalgeral_inss_salario,$aliquota,2);

$totalgeral_inss_salario_menos_inss_ferias = bcsub($totalgeral_inss_salario,$totalgeral_inss_sobre_ferias,2);

echo "R$ $inss_salario_menos_inss_ferias";

}

?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong><span class="style18">
      <? 
	  
if($dia_final<="15"){

$totalgeral_valor_holerite = $quinzena;

	
echo "R$ $valor_holerite";


}
else{
	
$totalgeral_valor_holerite = $totalgeralsalario_funcionario-$totalgeral_quinzena-$totalgeral_monetario_horas_a_descontar-$totalgeral_monetario_horas_domingo_a_descontar-$totalgeralliquido_ferias-$totalgeral_inss_sobre_ferias-$inss_salario_menos_inss_ferias-$totalgeral_mensalidade_sindicato;

	
echo "R$ $totalgeral_valor_holerite";
	
}	
	 ?>
    </span></strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center" class="style30"><strong>
      <? 
	  


$totalgeral_diferenca_quinzena = $totalgeral_vencimentos-$totalgeral_valor_holerite;




$diferencageral = $totalgeral_diferenca_quinzena;


echo "R$ $diferencageral";
	
	 ?>
    </strong></div></td>
    <td bgcolor="#3399FF" class="style24"><div align="center"><span class="style30"></span></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
