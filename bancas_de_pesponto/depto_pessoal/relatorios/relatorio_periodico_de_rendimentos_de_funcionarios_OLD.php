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
.style29 {color: #000000}
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

$sql = "select sum(quant_pares) as totaldepares from fichas where status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo "Total de pares produzidos pela empresa -->>> ".$total_producao;
}
?>
</strong></strong></strong></strong></strong></strong></strong></strong></strong></p>
<p><strong><strong><strong>
  <?
		  if($nfantasia=="TODOS"){
		  
$sql = "select sum(total_pespontador) as total_pespontador from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

		  }
		  else{
$sql = "select sum(total_pespontador) as total_pespontador from fichas where nfantasia = '$nfantasia' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_pespontador = $linha['total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");

//echo "Total do investimento em M&atilde;o-de-Obra(Pespontadores) no per&iacute;odo R$ ".$valor_total_pespontador_formatado."<br><br>";


?>
  <?
		  if($nfantasia=="TODOS"){
	
	$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";	  
		  
		  }
		  else{
		  
$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where nfantasia = '$nfantasia' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira1 = $linha['total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");

//echo "R$ ".$valor_total_coladeira1_formatado;


?>
  <?
		  
		  if($nfantasia=="TODOS"){
		  
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";
		  
		  }
		  else{
		  
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where nfantasia = '$nfantasia' and status = 'Enviado' and data_envio between '$data_inicial' and '$data_final'";

}

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
    <td width="6%" bgcolor="#33CCCC"><div align="center"><strong><span class="style27">PESPONTADORES</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">VALORHOLERITE QUINZENA</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">SALARIO BRUTO HOLERITE</span></strong></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">ADIANTAMENTO ANTERIOR HOLERITE</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS</span></strong></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DE FALTAS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">DESC FALTAS HORAS DOMINGOS</span></strong></div></td>
    <td width="5%" bgcolor="#33CCCC"><div align="center" class="style21">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></strong></div></td>
    <td width="6%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">VLR DESCONTAR TOTAL PE&Ccedil;AS PROGRAMA&Ccedil;AO</span></strong></div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">PLR</span></strong></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">HORAS EXTRAS</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Qtde Prs P&ccedil;o 01</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">
      <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 01</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 02 </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 02</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style21">Total P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Qtde Prs P&ccedil;o 04</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style21">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total P&ccedil;o 04</span></strong></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center"><strong><span class="style18">Total Pe&ccedil;as Apuradas</span></strong></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style21">DIFEREN&Ccedil;A PE&Ccedil;AS PROGRAM&Ccedil;&Atilde;O</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style21">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style21">Valor holerite pecista</div></td>
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

?>
  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18"><? echo $nome; ?></span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
	

$quinzena = bcdiv($salario,2,2);

	
echo "R$ $quinzena";
	 
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 

if($dia_final>=16){

$salario_funcionario = $salario;


echo "R$ $salario_funcionario";

}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql2 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_a_descontar = bcmul($total_faltas,$valor_por_hora,2);

if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql3 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado3=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado3);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_domingo_a_descontar = bcmul($total_faltas_domingo,$valor_por_hora,2);

if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?


$sql4 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado4=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado4);



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

$sql5 = "select sum(quant_pares) as totaldepares_economico from fichas where pespontador = '$nome' and nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



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
$sql6 = "select * from modelos where nivel_dificuldade = 'Linha_Comum' order by preco_pespontador desc limit 1";
$res6 = mysql_query($sql6);
while($linha=mysql_fetch_row($res6)) {


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
      <? $total_linha_comum = bcmul($total_producao_linha_comum,$preco_pespontador,2);
	  
if($total_producao_linha_comum==""){

}
else{	
	echo "R$ $total_linha_comum";
}
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?



if(empty($dia_inicial)){
}
else{

$sql7 = "select sum(quant_pares) as totaldepares_baixograu1 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado7=mysql_query($sql7, $conexao);

$linha=mysql_fetch_array($resultado7);



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
$sql8 = "select * from modelos where nivel_dificuldade = 'Baixo(Grau_1)' order by preco_pespontador desc limit 1";
$res8 = mysql_query($sql8);
while($linha=mysql_fetch_row($res8)) {


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

$sql9 = "select sum(quant_pares) as totaldepares_mediograu2 from fichas where pespontador = '$nome' and nivel_dificuldade = 'M&eacute;dio Botas(Grau_2)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado9=mysql_query($sql9, $conexao);

$linha=mysql_fetch_array($resultado9);



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
$sql10 = "select * from modelos where nivel_dificuldade = 'Médio Botas(Grau_2)'order by preco_pespontador desc  limit 1";
$res10 = mysql_query($sql10);
while($linha=mysql_fetch_row($res10)) {


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

$sql11 = "select sum(quant_pares) as totaldepares_altograu3 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado11=mysql_query($sql11, $conexao);

$linha=mysql_fetch_array($resultado11);



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
$sql12 = "select * from modelos where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)'order by preco_pespontador desc  limit 1";
$res12 = mysql_query($sql12);
while($linha=mysql_fetch_row($res12)) {


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
    
$soma_total_monetario = $total_linha_comum+$total_linha_baixograu1+$total_linha_mediograu2+$total_linha_altoneoprenegrau3+$total_monetario_hora_extra;

echo "R$ $soma_total_monetario";
	
	?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <?
	
$diferenca_quinzena = $soma_total_monetario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar;


echo "R$ $diferenca_quinzena";
	  ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

echo $diferenca;
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = "0.00";

}
else{

$valor_holerite = $quinzena;

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
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
    <td bgcolor="#3399FF"><div align="center" class="style19">Sub-Total</div></td>
    <td bgcolor="#3399FF"><div align="center" class="style20">
      <?




$sql13 = "select sum(salario) as total_quinzena from operadores where funcao = 'PESPONTADOR(A)' and status = 'Ativo'";
$resultado13=mysql_query($sql13, $conexao);
$linha=mysql_fetch_array($resultado13);



$total_quinzena_p = $linha['total_quinzena'];

if($total_quinzena_p==""){
//echo "0";
}
else{

$sub_total_quinzena_pespontadores = bcdiv($total_quinzena_p,2,2);
echo "R$ $sub_total_quinzena_pespontadores";
}


?>
    </div></td>
    <td bgcolor="#3399FF"><div align="center" class="style20">
      <?




$sql13 = "select sum(salario) as total_salario from operadores where funcao = 'PESPONTADOR(A)' and status = 'Ativo'";
$resultado13=mysql_query($sql13, $conexao);
$linha=mysql_fetch_array($resultado13);



$total_salario_p = $linha['total_salario'];

if($total_salario_p==""){
//echo "0";
}
else{

$sub_total_salario_pespontadores = bcadd($total_salario_p,0,2);
echo "R$ $sub_total_salario_pespontadores";
}


?>
    </div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
  </tr>
</table>
<table width="200%" border="1">
  
  <tr>
    <td width="6%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style27">COLADEIRAS</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">VALORHOLERITE QUINZENA</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">SALARIO BRUTO HOLERITE</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">ADIANTAMENTO ANTERIOR HOLERITE</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">DESC FALTAS HORAS</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DESC MONETARIO DE FALTAS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">DESC FALTAS HORAS DOMINGOS</span></div></td>
    <td width="5%" bgcolor="#33CCCC"><div align="center" class="style25">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></div></td>
    <td width="6%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">VLR DESCONTAR TOTAL PE&Ccedil;AS PROGRAMA&Ccedil;AO</span></div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">PLR</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">HORAS EXTRAS</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Qtde Prs P&ccedil;o 01</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">
      <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 01</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 02 </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 02</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 04</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Total P&ccedil;o 04</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Total Pe&ccedil;as Apuradas</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DIFEREN&Ccedil;A PE&Ccedil;AS PROGRAM&Ccedil;&Atilde;O</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">Valor holerite pecista</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Mensalista</div></td>
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

?>
  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18"><? echo $nome; ?></span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
	

$quinzena = bcdiv($salario,2,2);

	
echo "R$ $quinzena";
	 
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 

if($dia_final>=16){

$salario_funcionario = $salario;


echo "R$ $salario_funcionario";

}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql2 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_a_descontar = bcmul($total_faltas,$valor_por_hora,2);

if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql3 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado3=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado3);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_domingo_a_descontar = bcmul($total_faltas_domingo,$valor_por_hora,2);

if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?


$sql4 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado4=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado4);



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

$sql5 = "select sum(quant_pares) as totaldepares_economico from fichas where coladeira1 = '$nome' or coladeira2 = '$nome' and nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



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
$sql6 = "select * from modelos where nivel_dificuldade = 'Linha_Comum' order by preco_coladeira1 desc limit 1";
$res6 = mysql_query($sql6);
while($linha=mysql_fetch_row($res6)) {


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
      <? $total_linha_comum = bcmul($total_producao_linha_comum,$preco_pespontador,2);
	  
if($total_producao_linha_comum==""){

}
else{	
	echo "R$ $total_linha_comum";
}
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?



if(empty($dia_inicial)){
}
else{

$sql7 = "select sum(quant_pares) as totaldepares_baixograu1 from fichas where coladeira1 = '$nome' or coladeira2 = '$nome' and nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado7=mysql_query($sql7, $conexao);

$linha=mysql_fetch_array($resultado7);



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
$sql8 = "select * from modelos where nivel_dificuldade = 'Baixo(Grau_1)' order by preco_coladeira1 desc limit 1";
$res8 = mysql_query($sql8);
while($linha=mysql_fetch_row($res8)) {


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

$sql9 = "select sum(quant_pares) as totaldepares_mediograu2 from fichas where coladeira1 = '$nome' or coladeira2 = '$nome' and nivel_dificuldade = 'M&eacute;dio Botas(Grau_2)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado9=mysql_query($sql9, $conexao);

$linha=mysql_fetch_array($resultado9);



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
$sql10 = "select * from modelos where nivel_dificuldade = 'Médio Botas(Grau_2)'order by preco_coladeira1 desc  limit 1";
$res10 = mysql_query($sql10);
while($linha=mysql_fetch_row($res10)) {


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

$sql11 = "select sum(quant_pares) as totaldepares_altograu3 from fichas where coladeira1 = '$nome' or coladeira2 = '$nome' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado11=mysql_query($sql11, $conexao);

$linha=mysql_fetch_array($resultado11);



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
$sql12 = "select * from modelos where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)'order by preco_coladeira1 desc  limit 1";
$res12 = mysql_query($sql12);
while($linha=mysql_fetch_row($res12)) {


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
    
$soma_total_monetario = $total_linha_comum+$total_linha_baixograu1+$total_linha_mediograu2+$total_linha_altoneoprenegrau3+$total_monetario_hora_extra;

echo "R$ $soma_total_monetario";
	
	?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <?
	
$diferenca_quinzena = $soma_total_monetario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar;


echo "R$ $diferenca_quinzena";
	  ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

echo $diferenca;
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = "0.00";

}
else{

$valor_holerite = $quinzena;

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
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
    <td bgcolor="#3399FF"><div align="center"><span class="style19">Sub-Total</span></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
  </tr>
</table>
<table width="200%" border="1">
  
  <tr>
    <td width="6%" bgcolor="#33CCCC"><div align="center" class="style26">MENSALISTAS</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">VALORHOLERITE QUINZENA</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">SALARIO BRUTO HOLERITE</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">ADIANTAMENTO ANTERIOR HOLERITE</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">DESC FALTAS HORAS</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DESC MONETARIO DE FALTAS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">DESC FALTAS HORAS DOMINGOS</span></div></td>
    <td width="5%" bgcolor="#33CCCC"><div align="center" class="style25">DESC MONETARIO DOS DOMINGOS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">PENSAO ALIMENTICIA HOLERITE</span></div></td>
    <td width="6%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">VLR DESCONTAR TOTAL PE&Ccedil;AS PROGRAMA&Ccedil;AO</span></div></td>
    <td width="1%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">PLR</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">HORAS EXTRAS</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">TOTAL MONETARIO HORAS EXTRAS</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Qtde Prs P&ccedil;o 01</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">
      <p class="style18">Pre&ccedil;o 01 Linha_Comum</p>
    </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 01</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 02 </div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 02 Baixo(Grau_1)</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 02</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 03 M&eacute;dio Botas(Grau_2)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style25">Total P&ccedil;o 03</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Qtde Prs P&ccedil;o 04</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Pre&ccedil;o 04 Alto Neoprene 360&ordm;(Grau_3)</div></td>
    <td width="2%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Total P&ccedil;o 04</span></div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style24"><span class="style18">Total Pe&ccedil;as Apuradas</span></div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DIFEREN&Ccedil;A PE&Ccedil;AS PROGRAM&Ccedil;&Atilde;O</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">DIFEREN&Ccedil;A PE&Ccedil;AS</div></td>
    <td width="4%" bgcolor="#33CCCC"><div align="center" class="style25">Valor holerite pecista</div></td>
    <td width="3%" bgcolor="#33CCCC"><div align="center" class="style25">Mensalista</div></td>
  </tr>
  <?
$sql = "SELECT * FROM operadores where funcao <> 'PESPONTADOR(A)' and funcao <> 'COLADEIRA1' and funcao <> 'COLADEIRA2' and classificacao = 'MENSALISTA' and status = 'Ativo' order by nome asc";

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

?>
  <tr>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18"><? echo $nome; ?></span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
	

$quinzena = bcdiv($salario,2,2);

	
echo "R$ $quinzena";
	 
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <? 

if($dia_final>=16){

$salario_funcionario = $salario;


echo "R$ $salario_funcionario";

}


?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql2 = "select sum(quant_horas) as totalhorasfaltas from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);

$total_faltas = $linha['totalhorasfaltas'];


echo $total_faltas;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_a_descontar = bcmul($total_faltas,$valor_por_hora,2);

if($total_monetario_horas_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?
$sql3 = "select sum(descontar_domingo) as totalhorasdomingo from faltas where nome = '$nome' and data between '$data_inicial' and '$data_final'";

$resultado3=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado3);

$total_faltas_domingo = $linha['totalhorasdomingo'];


echo $total_faltas_domingo;
?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
$valor_por_hora = bcdiv($salario,220,5);

$total_monetario_horas_domingo_a_descontar = bcmul($total_faltas_domingo,$valor_por_hora,2);

if($total_monetario_horas_domingo_a_descontar=="0"){

}
else{
	
echo "R$ $total_monetario_horas_domingo_a_descontar";

}
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center"></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?


$sql4 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado4=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado4);



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

$sql5 = "select sum(quant_pares) as totaldepares_economico from fichas where pespontador = '$nome' and nivel_dificuldade = 'Linha_Comum' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado5=mysql_query($sql5, $conexao);

$linha=mysql_fetch_array($resultado5);



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
$sql6 = "select * from modelos where nivel_dificuldade = 'Linha_Comum' order by preco_pespontador desc limit 1";
$res6 = mysql_query($sql6);
while($linha=mysql_fetch_row($res6)) {


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
      <? $total_linha_comum = bcmul($total_producao_linha_comum,$preco_pespontador,2);
	  
if($total_producao_linha_comum==""){

}
else{	
	echo "R$ $total_linha_comum";
}
	 ?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style24"><span class="style18">
      <?



if(empty($dia_inicial)){
}
else{

$sql7 = "select sum(quant_pares) as totaldepares_baixograu1 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Baixo(Grau_1)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado7=mysql_query($sql7, $conexao);

$linha=mysql_fetch_array($resultado7);



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
$sql8 = "select * from modelos where nivel_dificuldade = 'Baixo(Grau_1)' order by preco_pespontador desc limit 1";
$res8 = mysql_query($sql8);
while($linha=mysql_fetch_row($res8)) {


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

$sql9 = "select sum(quant_pares) as totaldepares_mediograu2 from fichas where pespontador = '$nome' and nivel_dificuldade = 'M&eacute;dio Botas(Grau_2)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado9=mysql_query($sql9, $conexao);

$linha=mysql_fetch_array($resultado9);



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
$sql10 = "select * from modelos where nivel_dificuldade = 'Médio Botas(Grau_2)'order by preco_pespontador desc  limit 1";
$res10 = mysql_query($sql10);
while($linha=mysql_fetch_row($res10)) {


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

$sql11 = "select sum(quant_pares) as totaldepares_altograu3 from fichas where pespontador = '$nome' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status = 'Enviado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado11=mysql_query($sql11, $conexao);

$linha=mysql_fetch_array($resultado11);



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
$sql12 = "select * from modelos where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)'order by preco_pespontador desc  limit 1";
$res12 = mysql_query($sql12);
while($linha=mysql_fetch_row($res12)) {


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
    
$soma_total_monetario = $total_linha_comum+$total_linha_baixograu1+$total_linha_mediograu2+$total_linha_altoneoprenegrau3+$total_monetario_hora_extra;

echo "R$ $soma_total_monetario";
	
	?>
    </span></div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <?
	
$diferenca_quinzena = $soma_total_monetario-$quinzena-$total_monetario_horas_a_descontar-$total_monetario_horas_domingo_a_descontar;


echo "R$ $diferenca_quinzena";
	  ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca_quinzena<="0"){

$diferenca = "Mensalista";

}
else{

$diferenca = $diferenca_quinzena;

}

echo $diferenca;
	
	 ?>
    </div></td>
    <td bgcolor="#CCCCCC"><div align="center" class="style25">
      <? 
	
if($diferenca=="Mensalista"){

$valor_holerite = "0.00";

}
else{

$valor_holerite = $quinzena;

}
	
echo "R$ $valor_holerite";
	
	
	 ?>
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
    <td bgcolor="#3399FF"><div align="center"><span class="style19">Sub-Total</span></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
    <td bgcolor="#3399FF"><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
