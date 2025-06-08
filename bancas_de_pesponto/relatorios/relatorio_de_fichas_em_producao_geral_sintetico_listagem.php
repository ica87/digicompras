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
<title>Relat&oacute;rio Geral de Fichas em Produ&ccedil;&atilde;o</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style6 {font-size: 9px; font-weight: bold; }
.style11 {font-size: 18px}
.style12 {font-size: 9px; color: #000000; }
.style13 {color: #000000}
.style16 {font-size: 14px}
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
<p><strong><strong><strong>
  <strong><strong><br>
</strong></strong></strong></p>
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
    <td width="48%"><p class="style11">Relat&oacute;rio de Acompanhamento de Fichas em Produ&ccedil;&atilde;o</p>
        <p class="style11">Per&iacute;odo: <? echo $data_inicial;  ?> &agrave; <? echo $data_final;  ?></p>
      <form action="relatorio_de_fichas_em_producao_geral_sintetico_listagem.php" method="post" name="form4" target="_blank">
        <strong><strong><strong><strong><strong>
        <?
if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares from fichas where status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo "Total de pares em produção na empresa -->>> ".$total_producao;
?>
        </strong></strong></strong>
        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
          <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
          <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
          <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
          <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
          <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </form></td>
    <td width="52%" valign="top"><strong><strong><strong><strong><strong><span class="style11">Cliente: <? echo $nfantasia; ?></span></strong></strong></strong></strong></strong></td>
  </tr>
</table>
<br>
<table width="100%" border="0">
  <tr>
    <td width="4%"><div align="center"><strong><span class="style4"><span class="style6">N&ordm; Ficha</span></span></strong></div></td>
    <td width="4%"><div align="center"><strong><span class="style4"><span class="style6">N&ordm; Plano</span></span></strong></div></td>
    <td width="4%" height="15"><div align="center" class="style6"><strong><span class="style4">Grupo</span></strong></div></td>
    <td width="5%"><div align="center"><strong><span class="style4">Quant Pares</span></strong></div></td>
    <td width="5%"><div align="center" class="style6">Modelo</div></td>
    <td width="6%"><div align="center" class="style6">Caixa</div></td>
    <td width="6%"><div align="center" class="style6">Data entrada</div></td>
    <td width="8%"><div align="center" class="style4"><strong>Data T&eacute;rmino Produ&ccedil;&atilde;o</strong></div></td>
    <td width="8%"><div align="center"><strong><span class="style4">Data Envio para f&aacute;brica</span></strong></div></td>
    <td width="8%"><div align="center" class="style4"><strong>Status Produ&ccedil;&atilde;o</strong></div></td>
    <td width="8%"><div align="center"><strong><span class="style4">Status</span></strong></div></td>
  </tr>
  <?
  if($nfantasia=="TODOS"){
  
$sql = "select * from fichas where status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' order by num_ficha asc";
  
  }
  else{
  

$sql = "select * from fichas where nfantasia = '$nfantasia' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' order by num_ficha asc";

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
    <td><div align="center" class="style12">
      <form action="../fichas/editar_ficha.php" method="post" name="form2">
        <strong> <span class="style16">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span></strong> <span class="style16"><strong><strong>
        <? if($status=="Enviado"){ echo $num_ficha; } ?>
        </strong></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
        <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
        <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
          </span>
      </form>
    </div></td>
    <td><div align="center" class="style12"><span class="style4 style2"><strong><strong><strong><span class="style2 style4 style13"><strong><strong><? echo $num_plano; ?></strong></strong></span></strong></strong></strong></span></div></td>
    <td><div align="center" class="style2 style4 style13"><strong><strong><span class="style12"><span class="style4 style2"><strong><strong><strong><? echo $grupo; ?></strong></strong></strong></span></span></strong></strong></div></td>
    <td><div align="center" class="style12"><span class="style4 style2"><strong><strong><strong><? echo $quant_pares; ?></strong></strong></strong></span></div></td>
    <td><div align="center" class="style2 style4 style13"><span class="style12"><strong><strong><? echo $modelo; ?></strong></strong></span></div></td>
    <td><div align="center" class="style2 style4 style13"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style12"><span class="style2 style4 style13"><strong><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></strong></span></div></td>
    <td><div align="center" class="style12"><strong><strong><? echo "$dia_termino_producao-$mes_termino_producao-$ano_termino_producao $hora_termino_producao"; ?></strong></strong></div></td>
    <td><div align="center">
      <form action="historico_cliente.php" method="post" name="form2">
        <strong>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </strong> <strong><strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?></strong></strong>
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
    <td><div align="center" class="style12"><strong><strong><? echo $status_producao; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style4 style13">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <strong><strong><strong><strong><strong>
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="metal_entregue" type="hidden" id="metal_entregue" value="<? echo $metal_entregue; ?>">
          <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
          <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
          <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
          <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
          </strong></strong></strong></strong></strong>
        <?
if($status=="Enviado"){
echo $status;
}
else{

echo"<select name='status' id='status'>";
  echo "<option selected>".$status."</option>";

    $sql = "select * from status where status <> 'Enviado' and status <> '$status' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
  
   }
      echo"</select>";
      
}
?>
        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
      </form>
    </div></td>
  </tr>
  <?
}
?>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
