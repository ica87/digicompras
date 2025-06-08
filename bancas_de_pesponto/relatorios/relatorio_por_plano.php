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
<title>Relat&oacute;rio geral por Plano Sint&eacute;tico</title>
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
.style5 {color: #0000FF}
.style7 {font-size: 9px; color: #000000; }
.style8 {color: #000000}
.style11 {font-size: 14px}
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];


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


<p align="center" class="style5"><strong>PESQUISA VISUAL DE PLANO</strong></p>

<table width="100%" border="0">
  <tr>
    <td width="4%"><div align="center"><span class="style4">Grupo</span></div></td>
    <td width="4%"><div align="center"><span class="style4">Quant Pares</span></div></td>
    <td width="4%" height="15"><div align="center" class="style4">Data entrada</div></td>
    <td width="5%"><div align="center"><span class="style4">Data Envio para f&aacute;brica</span></div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style4">N&ordm; Ficha</div></td>
    <td width="6%"><div align="center" class="style4"><strong>Modelo</strong></div></td>
  </tr>
  <?
  
  $num_plano = $_POST['num_plano'];

  

$sql = "select * from fichas where num_plano = '$num_plano' and status <> 'Enviado' order by num_plano asc";
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



?>
  <tr>
    <td><div align="center" class="style7"><strong><strong><strong><? echo $grupo; ?></strong></strong></strong></div></td>
    <td><div align="center" class="style7"><strong><strong><strong><? echo $quant_pares; ?></strong></strong></strong></div></td>
    <td class="style2"><div align="center" class="style2 style4 style8"><strong><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></strong></div></td>
    <td class="style2"><div align="center" class="style7">
      <form action="historico_cliente.php" method="post" name="form2">
        <strong><strong><strong>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?></strong></strong>
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
    <td><div align="center" class="style2 style4 style8"><strong><strong><? echo $num_plano; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style4 style8">
      <form action="../fichas/editar_ficha.php" method="post" name="form2">
          <strong>
          <span class="style11">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span></strong> <span class="style11"><strong><strong>
            <? //if($status=="Enviado"){ echo $num_ficha; } 
			echo $num_ficha; ?>
          </strong></strong>
          <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
          <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
          <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
          <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
          <? //if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?></span>
      </form>
    </div></td>
    <td><div align="center" class="style7"><strong><strong><? echo $modelo; ?></strong></strong></div></td>
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
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
