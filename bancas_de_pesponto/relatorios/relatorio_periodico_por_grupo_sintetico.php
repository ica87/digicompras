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
<title>Relat&oacute;rio peri&oacute;dico anal&iacute;tico por grupo</title>
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
.style13 {color: #000000}
.style14 {font-size: 9px; color: #000000; }
.style18 {font-size: 14px}
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];

$grupo = $_POST['grupo'];
		
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";

$sql = "SELECT * FROM operadores where grupo = '$grupo' and funcao = 'COLADEIRA2' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$coladeira2 = $linha[1];

}

$sql = "SELECT * FROM operadores where grupo = '$grupo' and funcao = 'COLADEIRA1' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$coladeira1 = $linha[1];

}

$sql = "SELECT * FROM operadores where grupo = '$grupo' and funcao = 'PESPONTADOR(A)' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$pespontador = $linha[1];

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


<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="right" class="style11">
      <?
$data_atual = date('d-m-Y');
$hora = date('H:i:s');


echo "    Data/Hora:    $data_atual      $hora";
?>
    </div></td>
  </tr>
  <tr>
    <td width="51%"><p class="style11">Relat&oacute;rio de Acompanhamento de Fichas Enviadas</p>
        <p class="style11">Per&iacute;odo: <? echo $data_inicial;  ?> &agrave; <? echo $data_final;  ?></p>
      <form action="relatorio_de_fichas_em_producao_geral_sintetico_listagem.php" method="post" name="form4" target="_blank">
        <strong><strong><strong><strong><strong>
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


echo "Total de pares produzidos pelo grupo $grupo de $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final -->>> ".$total_producao;
}
?>
        </strong></strong></strong>
        <input name="dia_inicial2" type="hidden" id="dia_inicial2" value="<? echo $dia_inicial; ?>">
          <input name="mes_inicial2" type="hidden" id="mes_inicial2" value="<? echo $mes_inicial; ?>">
          <input name="ano_inicial2" type="hidden" id="ano_inicial2" value="<? echo $ano_inicial; ?>">
          <input name="dia_final2" type="hidden" id="dia_final2" value="<? echo $dia_final; ?>">
          <input name="mes_final2" type="hidden" id="mes_final2" value="<? echo $mes_final; ?>">
          <input name="ano_final2" type="hidden" id="ano_final2" value="<? echo $ano_final; ?>">
      </form></td>
    <td width="49%" valign="top"><strong><strong><strong><strong><strong><span class="style11">Cliente: <? echo $nfantasia; ?></span></strong></strong></strong></strong></strong></td>
  </tr>
</table>
<br>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#CCCCCC"><div align="center"><strong>TOTALIZA&Ccedil;&Atilde;O DE PARES PRODUZIDOS POR N&Iacute;VEL DE DIFICULDADE</strong></div></td>
  </tr>
  <tr>
    <td width="21%"><div align="center"><strong>Linha Comum</strong></div></td>
    <td width="27%"><div align="center"><strong>Baixo(Grau_1)</strong></div></td>
    <td width="27%"><div align="center"><strong>M&eacute;dio Botas(Grau_2)</strong></div></td>
    <td width="25%"><div align="center"><strong>Alto Neoprene 360&deg;(Grau_3)</strong></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong><strong><strong>
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
    </strong></strong></strong></div></td>
    <td><div align="center"><strong><strong><strong>
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
    </strong></strong></strong></div></td>
    <td><div align="center"><strong><strong><strong>
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
    </strong></strong></strong></div></td>
    <td><div align="center"><strong><strong><strong>
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
    </strong></strong></strong></div></td>
  </tr>
</table>
<br>
<table width="90%" border="0" align="center">
  <tr>
    <td width="8%" height="15"><div align="center" class="style4"><span class="style12">Grupo</span></div></td>
    <td width="6%"><div align="center" class="style12">Quant Pares</div></td>
    <td width="6%"><div align="center"><span class="style12">Data entrada</span></div></td>
    <td width="6%"><div align="center"><strong><span class="style4">Data t&eacute;rmino Produ&ccedil;&atilde;o</span></strong></div></td>
    <td width="6%"><div align="center"><span class="style12">N&ordm; Plano</span></div></td>
    <td width="6%"><div align="center" class="style12">N&ordm; Ficha</div></td>
    <td width="6%"><div align="center" class="style4"><strong>Modelo</strong></div></td>
  </tr>
  <?
if(empty($dia_inicial)){
}
else{

if($nfantasia=="TODOS"){

$sql = "select * from fichas where grupo = '$grupo' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao asc";

}
else{

$sql = "select * from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and status_producao = 'Finalizado' and data_termino_producao between '$data_inicial' and '$data_final' order by data_termino_producao,hora_termino_producao asc";

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
    <td><div align="center" class="style2 style4 style13"><strong><strong><? echo $grupo; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style4 style13"><strong><strong><? echo $quant_pares; ?></strong></strong></div></td>
    <td><div align="center" class="style14"><span class="style24"><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></span></div></td>
    <td><div align="center" class="style14">
      <form action="historico_cliente.php" method="post" name="form2">
        <strong>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </strong> <strong><strong><? echo "$dia_termino_producao-$mes_termino_producao-$ano_termino_producao $hora_termino_producao"; ?></strong></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>">
        <strong><strong><strong><strong><strong>
        <input name="nfantasia" type="hidden" id="nfantasia3" value="<? echo $nfantasia; ?>">
        <input name="status" type="hidden" id="status" value="Enviado">
        <input name="dia_envio" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>">
        <input name="mes_envio" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>">
        <input name="ano_envio" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>">
        <input name="hora_envio" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>">
        </strong></strong></strong></strong></strong>
      </form>
    </div></td>
    <td><div align="center" class="style14"><span class="style24"><? echo $num_plano; ?></span></div></td>
    <td><div align="center" class="style2 style4 style13">
      <form action="editar_ficha.php" method="post" name="form2">
          <strong>
          <span class="style18">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span></strong> <span class="style18"><strong><strong>
            <? if($status_producao=="Finalizado"){ echo $num_ficha; } ?>
          </strong></strong>
          <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
          <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
          <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
          <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
          <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
          <? if($status_producao<>"Finalizado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?></span>
      </form>
    </div></td>
    <td><div align="center"><span class="style24"><? echo $modelo; ?></span></div></td>
  </tr>
  <?
}}
?>
  <tr>
    <td><div align="center"></div></td>
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
