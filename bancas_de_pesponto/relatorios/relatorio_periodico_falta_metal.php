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
.style4 {font-size: 9px}
.style11 {font-size: 18px}
.style12 {font-size: 9px; font-weight: bold; }
.style13 {
	font-size: 10px;
	font-weight: bold;
}
.style14 {
	color: #000000;
	font-size: 9px;
	font-weight: bold;
}
.style17 {font-size: 9px; color: #000000; }
.style18 {
	font-size: 14px
}
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
<?
$metal_entregue = $_POST['metal_entregue'];
 
  

if($metal_entregue=="Sim"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `metal_entregue` = '$metal_entregue' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao);

}



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
        <td width="39%"><p class="style11">Relat&oacute;rio de Acompanhamento de Fichas faltando metal</p>
          <p class="style11">Per&iacute;odo: <? echo $data_inicial;  ?> &agrave; <? echo $data_final;  ?></p>
          <form action="relatorio_de_fichas_em_producao_geral_sintetico_listagem.php" method="post" name="form4" target="_blank">
            <strong><strong><strong><strong><strong>
            <?



if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares from fichas where metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo "Total de pares produzidos pela empresa -->>> ".$total_producao;
}
?>
            </strong></strong></strong>
            <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
            <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
            <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
            <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
            <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
            <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
            </strong></strong>
          </form></td>
        <td width="61%" valign="top"><strong><strong><strong>
          <strong><strong><span class="style11">Cliente: <? echo $nfantasia; ?></span></strong></strong>
          <p>
          <?
		  
		  if($nfantasia=="TODOS"){
		  
$sql = "select sum(total_pespontador) as total_pespontador from fichas where metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";
		  
		  }
		  else{
		  
$sql = "select sum(total_pespontador) as total_pespontador from fichas where nfantasia = '$nfantasia' and metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_pespontador = $linha['total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");

//echo "Total do investimento em Mão-de-Obra(Pespontadores) no período R$ ".$valor_total_pespontador_formatado."<br><br>";


?>
          <?
		  
		  if($nfantaisa=="TODOS"){
		  
$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";
		  
		  }
		  else{
		  
$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where nfantasia = '$nfantasia' and metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira1 = $linha['total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");

//echo "R$ ".$valor_total_coladeira1_formatado;


?>
          <?
		  
		  if($nfantasia=="TODOS"){
		  
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";
		  
		  }
		  else{
		  
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where nfantasia = '$nfantasia' and metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final'";

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
    <td width="4%"><div align="center"><strong><span class="style4">Grupo</span></strong></div></td>
    <td width="4%"><div align="center"><strong><span class="style4">Quant Pares</span></strong></div></td>
    <td width="4%" height="15"><div align="center" class="style12">Data entrada</div></td>
    <td width="5%"><div align="center"><strong><span class="style4">Data Finaliza&ccedil;&atilde;o Produ&ccedil;&atilde;o</span></strong></div></td>
    <td width="5%"><div align="center" class="style12">N&ordm; Plano</div></td>
    <td width="5%"><div align="center" class="style13">Status</div></td>
    <td width="5%"><div align="center" class="style12">Status Produ&ccedil;&atilde;o</div></td>
    <td width="6%"><div align="center" class="style12">N&ordm; Ficha</div></td>
    <td width="6%"><div align="center" class="style14">Modelo</div></td>
    <td width="6%"><div align="center" class="style4"><strong>Metal Entregue</strong></div></td>
  </tr>
  <?
if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select * from fichas where metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao desc";

}
else{

$sql = "select * from fichas where nfantasia = '$nfantasia' and metal_entregue = 'Não' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao desc";

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
  $pespontador = $linha[10];
  $valor_pespontador = $linha[11];
  $total_pespontador = $linha[12];
  $coladeira1 = $linha[13];
  $valor_coladeira1 = $linha[14];
  $total_coladeira1 = $linha[15];
  $coladeira2 = $linha[16];
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

  $status_producao = $linha[71]; 
  $dia_termino_producao = $linha[84]; 
  $mes_termino_producao = $linha[85]; 
  $ano_termino_producao = $linha[86]; 
  $data_termino_producao = $linha[87]; 
  $hora_termino_producao = $linha[88]; 


?>
  <tr>
    <td><div align="center" class="style17"><span class="style4 "><? echo $grupo; ?></span></div></td>
    <td><div align="center" class="style17"><span class="style4 "><? echo $quant_pares; ?></span></div></td>
    <td><div align="center" class="style17"><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></div></td>
    <td><div align="center" class="style17">
      <form action="historico_cliente.php" method="post" name="form2">
        
         <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
         <? echo "$dia_termino_producao-$mes_termino_producao-$ano_termino_producao $hora_termino_producao"; ?>
         <input name="codigo_ficha" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>">
        
         <input name="nfantasia" type="hidden" id="nfantasia3" value="<? echo $nfantasia; ?>">
         <input name="status" type="hidden" id="status" value="Enviado">
         <input name="dia_envio" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>">
         <input name="mes_envio" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>">
         <input name="ano_envio" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>">
         <input name="hora_envio" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>">
      </form>
    </div></td>
    <td><div align="center" class="style17"><? echo $num_plano; ?></div></td>
    <td><div align="center" class="style17"><? echo $status; ?></div></td>
    <td><div align="center" class="style17"><? echo $status_producao; ?></div></td>
    <td><div align="center" class="style17">
      <form action="editar_ficha.php" method="post" name="form2" class="style18">
        
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          
          <? if($status_producao=="Finalizado"){ echo $num_ficha; } ?>
          
          <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
        <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        <? //if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style17"><? echo $modelo; ?></div></td>
    <td><div align="center" class="style17">
      <form action="relatorio_periodico_falta_metal.php" method="post" name="form2">
        <span class="style4">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? echo $metal_entregue;  ?>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha5" value="<? echo $codigo_ficha; ?>">
        
        <input name="metal_entregue" type="hidden" id="metal_entregue" value="Sim">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        
        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
        <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
        <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
        <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
        <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
        <? if($metal_entregue=="Não"){ echo "<input type='submit' name='button2' id='button2' value='Receber Metal'>"; } ?>
        </span>
      </form>
    </div></td>
  </tr>
  <?
}}
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
