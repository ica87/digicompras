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
.style6 {font-size: 10px}
.style7 {font-size: 12px}
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


<p><strong><strong><strong>
  <?
$grupo = $_POST['grupo'];
		
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(quant_pares) as total_pares from fichas where dia between '$dia_inicial'and '$dia_final' and mes between '$mes_inicial'and '$mes_final' and ano between '$ano_inicial'and '$ano_final' and status <> 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['total_pares'];


echo "Total de pares em produção na empresa no período de $dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final -->>> ".$total_producao;
}
?>
</strong></strong></strong></p>

<table width="100%" border="0">
  <tr>
    <td width="4%" height="15"><div align="center" class="style4">Data entrada</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style4">N&ordm; Ficha</div></td>
    <td width="8%"><div align="center"><span class="style4">Status</span></div></td>
    <td width="6%"><div align="center"><span class="style4">Data Envio para f&aacute;brica</span></div></td>
    <td width="4%"><div align="center" class="style4">Quant Pares</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Modelo</div></td>
    <td width="5%"><div align="center" class="style4">Metal Entregue?</div></td>
    <td width="3%"><div align="center"><span class="style4">Caixa</span></div></td>
    <td width="4%"><div align="center" class="style4">Grupo</div></td>
    <td width="4%"><div align="center" class="style4">R$ Unit Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 2</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style4">R$ Total Ficha</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Empresa</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Empresa</div></td>
    <td width="7%"><div align="center"><span class="style4">Saldo</span></div></td>
  </tr>
  <?
  
  $grupo = $_POST['grupo'];

  
  if($grupo=="Informe o Grupo"){

$dia_inicial = "";

}
else{
$dia_inicial = $_POST['dia_inicial'];
}

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

  
if(empty($dia_inicial)){
}
else{

$sql = "select * from fichas where dia between '$dia_inicial'and '$dia_final' and mes between '$mes_inicial'and '$mes_final' and ano between '$ano_inicial' and '$ano_final' and status <> 'Enviado' order by status asc";
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
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $num_plano; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4">
      <form action="../fichas/editar_ficha.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span> <strong><font color="#0000FF"><strong>
            <? if($status=="Enviado"){ echo $num_ficha; } ?>
          </strong></font></strong>
          <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
        <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
        <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="metal_entregue" type="hidden" id="metal_entregue" value="<? echo $metal_entregue; ?>">
          <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
          <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
          <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
          <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
          </font></strong></font></strong></font></strong></font></strong></font></strong>
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
    <td><div align="center" class="style4">
      <form action="historico_cliente.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span>
        <span class="style5"><strong><strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?></strong></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>">
        <strong><strong><strong><strong><strong>
          <input name="nfantasia" type="hidden" id="nfantasia3" value="<? echo $nfantasia; ?>">
          <input name="status" type="hidden" id="status" value="Enviado">
          <input name="dia_envio" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>">
          <input name="mes_envio" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>">
          <input name="ano_envio" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>">
          <input name="hora_envio" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>">
          </strong></strong></strong></strong></strong></span>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $quant_pares; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $modelo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style5"><strong><strong><? echo $metal_entregue; ?></strong></strong></div></td>
    <td><div align="center" class="style4"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $grupo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$saldo; ?></strong></font></strong></div></td>
  </tr>
  <?
}}
?>
  <tr>
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
</body>
</html>
