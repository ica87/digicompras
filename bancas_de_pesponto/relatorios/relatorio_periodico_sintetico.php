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
<title>Relat&oacute;rio peri&oacute;dico sint&eacute;tico </title>
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
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style11 {font-size: 18px}
.style12 {font-size: 9px; font-weight: bold; }
.style13 {
	font-size: 18;
	color: #000000;
	font-weight: bold;
}
.style14 {color: #000000}
.style17 {font-size: 14px}
.style18 {color: #0000FF}
.style20 {font-size: 18; font-weight: bold; }
.style21 {font-size: 18}
.style22 {font-size: 9px; color: #000000; }
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];

//$grupo = $_POST['grupo'];
		
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";

?>
</p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>


<p align="center">&nbsp;</p>

<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" colspan="2"><div align="right" class="style11">
      <?
$data_atual = date('d-m-Y');
$hora = date('H:i:s');


echo "    Data/Hora:    $data_atual      $hora";
?>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="39%"><p class="style11">Relat&oacute;rio de Acompanhamento de Fichas Enviadas</p>
          <p class="style11">Per&iacute;odo: <? echo $data_inicial;  ?> &agrave; <? echo $data_final;  ?></p>
          <form action="relatorio_de_fichas_em_producao_geral_sintetico_listagem.php" method="post" name="form4" target="_blank">
            <strong><strong><strong><strong><strong>
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


echo "Total de pares enviados para fábrica pela empresa -->>> ".$total_producao;
}
?>
            <strong><strong><strong><strong><br>
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
            </strong></strong></strong></strong>            </strong></strong></strong>
            <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
            <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
            <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
            <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
            <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
            <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
            </strong></strong>
          </form></td>
        <td width="61%" valign="top"><strong><strong><strong>
          <span class="style11">Cliente: <? echo $nfantasia; ?></span>
          <p>
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

//echo "Total do investimento em Mão-de-Obra(Pespontadores) no período R$ ".$valor_total_pespontador_formatado."<br><br>";


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

//echo "Total do investimento em Mão-de-Obra(Coladeiras 1 e 2) no período R$ ".$total_coladeiras_formatado."<br><br>";

$subtotal_periodico = bcadd($valor_total_pespontador,$valor_total_coladeira1,2);
$total_pagto_funcionarios_periodico = bcadd($subtotal_periodico,$valor_total_coladeira2,2);

$total_pagto_funcionarios_periodico_formatado = number_format($total_pagto_funcionarios_periodico, 2, ",", ".");


echo "Total geral do investimento em Mão-de-Obra(Pespontadores e Coladeiras) no período R$ ".$total_pagto_funcionarios_periodico_formatado;

?>
        </strong></strong></strong></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="90%" border="0" align="center">
  
  <tr>
    <td width="4%"><div align="center" class="style20">Grupo</div></td>
    <td width="16%"><div align="center" class="style20">Linha Comum</div></td>
    <td width="22%"><div align="center" class="style20">Baixo(Grau_1)</div></td>
    <td width="22%"><div align="center" class="style20">M&eacute;dio Botas(Grau_2)</div></td>
    <td width="20%"><div align="center" class="style20">Alto Neoprene 360&deg;(Grau_3)</div></td>
    <td width="4%"><div align="center" class="style20">TOTAL</div></td>
    <td width="4%"><div align="center" class="style12"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
    <td width="8%"><div align="center" class="style12"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
  </tr>
  <?


$sql = "select * from grupos order by grupo asc";

$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



$grupo = $linha[1];


?>
  <tr>
    <td><div align="center" class="style13"><span class="style18"><? echo $grupo; ?></span></div></td>
    <td><div align="center" class="style21"><strong>
        <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_economico from fichas where grupo = '$grupo' and nivel_dificuldade = 'Linha_Comum' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_economico from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and nivel_dificuldade = 'Linha_Comum' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_economico'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center" class="style21"><strong>
        <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_baixo from fichas where grupo = '$grupo' and nivel_dificuldade = 'Baixo(Grau_1)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_baixo from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and nivel_dificuldade = 'Baixo(Grau_1)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_baixo'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center" class="style21"><strong>
        <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_medio from fichas where grupo = '$grupo' and nivel_dificuldade = 'Médio Botas(Grau_2)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_medio from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and nivel_dificuldade = 'Médio Botas(Grau_2)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_medio'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center" class="style21"><strong>
        <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_alto from fichas where grupo = '$grupo' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_alto from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_alto'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center" class="style14 style2 style21"><strong>
      <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares from fichas where grupo = '$grupo' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo $total_producao;
}
?>
    </strong></div></td>
    <td><div align="center" class="style2 style4 style14"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
  </tr>
  <?
}
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style21"></span></td>
    <td><div align="center"><span class="style21"><strong>
      <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_economico from fichas where nivel_dificuldade = 'Linha_Comum' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_economico from fichas where nfantasia = '$nfantasia' and nivel_dificuldade = 'Linha_Comum' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_economico'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></span></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span><strong>
      <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_baixo from fichas where nivel_dificuldade = 'Baixo(Grau_1)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_baixo from fichas where nfantasia = '$nfantasia' and nivel_dificuldade = 'Baixo(Grau_1)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_baixo'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span><strong>
      <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_medio from fichas where nivel_dificuldade = 'Médio Botas(Grau_2)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_medio from fichas where nfantasia = '$nfantasia' and nivel_dificuldade = 'Médio Botas(Grau_2)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_medio'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></div></td>
    <td><div align="center"><span class="style21"><strong>
      <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares_alto from fichas where nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares_alto from fichas where nfantasia = '$nfantasia' and nivel_dificuldade = 'Alto Neoprene 360º(Grau_3)' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares_alto'];

if($total_producao==""){
echo "0";
}
else{
echo $total_producao;
}

}
?>
    </strong></span></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
    <td><div align="center"><span class="style17"><span class="style11"><span class="style21"></span></span></span></div></td>
  </tr>
</table>
<form name="form5" method="post" action="relatorio_periodico_sintetico.php">
  Filtro por Nivel de Dificuldade<strong><strong>
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
  <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
  <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
  </strong></strong>
  <select name="nivel_dificuldade" id="select4">
    <option value="null" selected>
    <?





    $sql = "select * from nivel_dificuldade order by nivel_dificuldade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nivel_dificuldade']."</option>";

    }

?>
    </option>
  </select>
  <input type="submit" name="button" id="button" value="Filtrar">
</form>
<table width="150%" border="0" align="center">
  <tr>
    <td width="7%" height="15"><div align="center" class="style4"><strong>Data entrada</strong></div></td>
    <td width="5%"><div align="center" class="style12">N&ordm; Plano</div></td>
    <td width="8%"><div align="center" class="style12">N&ordm; Ficha</div></td>
    <td width="5%"><div align="center"><span class="style12">N&ordm; Modelo</span></div></td>
    <td width="9%"><div align="center"><strong><span class="style4">Status</span></strong></div></td>
    <td width="7%"><div align="center"><strong><span class="style4">Data t&eacute;rmino Produ&ccedil;&atilde;o</span></strong></div></td>
    <td width="3%"><div align="center" class="style12">Quant Pares</div></td>
    <td width="6%"><div align="center" class="style12">N&iacute;vel Dificuldade</div></td>
    <td width="4%"><div align="center" class="style12">Metal Entregue?</div></td>
    <td width="2%"><div align="center"><strong><span class="style4">Caixa</span></strong></div></td>
    <td width="3%"><div align="center" class="style12">Grupo</div></td>
    <td width="3%"><div align="center" class="style12">R$ Unit Pesponto</div></td>
    <td width="3%"><div align="center" class="style12">R$ Total Pesponto</div></td>
    <td width="5%"><div align="center" class="style12">R$ Unit Coladeira 1 </div></td>
    <td width="4%"><div align="center" class="style12">R$ Total Coladeira 1 </div></td>
    <td width="4%"><div align="center" class="style12">R$ Unit Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style12">R$ Total Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style12">R$ Total Ficha</div></td>
    <td width="4%"><div align="center" class="style12">R$ Unit Empresa</div></td>
    <td width="5%"><div align="center" class="style12">R$ Total Empresa</div></td>
    <td width="5%"><div align="center"><strong><span class="style4">Saldo</span></strong></div></td>
  </tr>
  <?
  
$nivel_dificuldade = $_POST['nivel_dificuldade'];

  
if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select * from fichas where nivel_dificuldade = '$nivel_dificuldade' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao asc";

}
else{

$sql = "select * from fichas where nfantasia = '$nfantasia' and nivel_dificuldade = '$nivel_dificuldade' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao asc";

}

$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



  $codigo_ficha = $linha[0];
  $dia_cadastro = $linha[1];
  $mes_cadastro = $linha[2];
  $ano_cadastro = $linha[3];
  $hora = $linha[4];
  $status = $linha[5];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $grupo = $linha[8];
  $quant_pares = $linha[9];
  //$pespontador = $linha[10];
  $valor_pespontador = $linha[11];
  $total_pespontador = $linha[12];
  //$coladeira1 = $linha[13];
  $valor_coladeira1 = $linha[14];
  $total_coladeira1 = $linha[15];
  //$coladeira2 = $linha[16];
  $valor_coladeira2 = $linha[17];
  $total_coladeira2 = $linha[18];
  
  $total_ficha = $linha[19];
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  
  $modelo = $linha[20];
  $metal_entregue = $linha[21];
  $dia_envio = $linha[22];
  $mes_envio = $linha[23];
  $ano_envio = $linha[24];
  $hora_envio = $linha[25];
  $valor_unit_empresa = $linha[26];
  $total_ficha_empresa = $linha[27];
  $saldo = $linha[28];
  $codigo_cliente = $linha[29];
  $cnpj = $linha[30];
  $nfantasia = $linha[34]; 
  $caixa = $linha[62]; 
  $nivel_dificuldade = $linha[66]; 
  $status_producao = $linha[71];
$dia_termino_producao = $linha[84];
$mes_termino_producao = $linha[85];
$ano_termino_producao = $linha[86];
$hora_termino_producao = $linha[88];



$sql2 = "select * from cor_texto_ficha where status = '$status' and status_producao = '$status_producao' and metal_entregue = '$metal_entregue'";

$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {

$cor_texto = $linha[4]; 


}

?>
  <tr>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo $num_plano; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4">
      <form action="editar_ficha.php" method="post" name="form2" id="form2">
        <strong> <span class="style17">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span></strong> <span class="style17"><strong><strong>
            <? if($status_producao=="Finalizado"){ echo $num_ficha; } ?>
            </strong></strong>
            <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>" />
            <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>" />
            <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>" />
            <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>" />
            <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>" />
            <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>" />
            <? if($status_producao<>"Finalizado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
            </span>
      </form>
    </div></td>
    <td><div align="center"><span class="style2 style13 style4"><strong><strong><? echo $modelo; ?></strong></strong></span></div></td>
    <td><div align="center" class="style2 style13 style4">
      <form action="" method="post" name="form3" id="form3">
        <input name="nfantasia2" type="hidden" id="nfantasia2" value="<? echo $nfantasia; ?>" />
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>" />
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>" />
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>" />
        <strong><strong><strong><strong><strong>
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>" />
          <input name="metal_entregue" type="hidden" id="metal_entregue" value="<? echo $metal_entregue; ?>" />
          <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>" />
          <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>" />
          <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>" />
          <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>" />
          </strong></strong></strong></strong></strong>
        <?
if($status_producao=="Finalizado"){
echo $status_producao;
}
else{

echo"<select name='status_producao' id='status'>";
  echo "<option selected>".$status_producao."</option>";

    $sql = "select * from status where status <> 'Finalizado' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
  
   }
      echo"</select>";
      
}
?>
        <? if($status_producao<>"Finalizado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style22">
      <form action="historico_cliente.php" method="post" name="form2" id="form2">
        <strong>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </strong> <strong><strong><? echo "$dia_termino_producao-$mes_termino_producao-$ano_termino_producao $hora_termino_producao"; ?></strong></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>" />
        <strong><strong><strong><strong><strong>
          <input name="nfantasia2" type="hidden" id="nfantasia3" value="<? echo $nfantasia; ?>" />
          <input name="status" type="hidden" id="status" value="Enviado" />
          <input name="dia_envio" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>" />
          <input name="mes_envio" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>" />
          <input name="ano_envio" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>" />
          <input name="hora_envio" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>" />
          </strong></strong></strong></strong></strong>
      </form>
    </div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo $quant_pares; ?></strong></strong></div></td>
    <td><div align="center" class="style22"><strong><strong><? echo $nivel_dificuldade; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo $metal_entregue; ?></strong></strong></div></td>
    <td><div align="center" class="style22"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo $grupo; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "R$ ".$valor_pespontador; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "R$ ".$total_pespontador; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "R$ ".$valor_coladeira1; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "R$ ".$total_coladeira1; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo "R$ ".$valor_coladeira2; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo "R$ ".$total_coladeira2; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style13 style4"><strong><strong><? echo "R$ ".$total_ficha; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></strong></div></td>
    <td><div align="center" class="style13 style4"><strong><strong><? echo "R$ ".$saldo; ?></strong></strong></div></td>
  </tr>
  <?
}}
?>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
