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
<title>MAPA DE PRODU&Ccedil;&Atilde;O - ALLCRED FINANCEIRA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {font-size: 18px}
.style5 {font-size: 24px}
.style6 {
	color: #FFFFFF;
	font-size: 9px;
}
.style7 {
	font-size: 9px;
	font-weight: bold;
}
.style8 {font-size: 9px}
.style13 {font-size: 14px}
.style14 {font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<?

require '../../conect/conect.php';

$mes_ano = $_POST['mes_ano'];

$dia = $_POST['dia'];
$mes =$_POST['mes'];
$ano = $_POST['ano'];
$hora = $_POST['hora'];

$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="listagem_mapa_producao_por_data.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
        <span class="style14">
        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
        </span>
</form>
<p class="style4"><strong>Total monet&aacute;rio realizado at&eacute; o momento - <span class="style5"><strong>
  <?
$sql = "select * from mapa_producao where dia = '$dia' and mes = '$mes' and ano = '$ano' and hora = '$hora' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$valor_total_empresa_momento = $linha[13];
$valor_total_empresa_momento_formatada = number_format($valor_total_empresa_momento, 2, ",", ".");
}

echo "R$ ".$valor_total_empresa_momento_formatada;
?> </strong></span></strong></p>
      <p><span class="style4"><strong>Total de contratos efetivados at&eacute; o momento - 
            <span class="style5">
            <strong>
            <strong><strong>
            <?
$sql = "select * from mapa_producao where dia = '$dia' and mes = '$mes' and ano = '$ano' and hora = '$hora' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$registros_total = $linha[11];
}

echo $registros_total;
?>
            </strong></strong></strong></span> </strong></span><br>
    </p>
      <p><strong>Mapa de produ&ccedil;&atilde;o gerado e gravado em </strong> <span class="style14"><? echo $dia."-".$mes."-".$ano ; ?></span><strong> hor&aacute;rio <span class="style13"><? echo $hora; ?></span></strong> </p>



      <table width="100%"  border="1">
        <tr bgcolor="#ffffff">
          <td><div align="center" class="style7">Nome</div></td>
          <td><div align="center" class="style7">Objetivo</div></td>
          <td><div align="center" class="style7">Realizado</div></td>
          <td><div align="center" class="style7">Quant Contratos </div></td>
          <td width="10%"><div align="center" class="style7">% Atingido da meta </div></td>
        </tr>
		      <?

			
$sql = "SELECT * FROM mapa_producao where dia = '$dia' and mes = '$mes' and ano = '$ano' and hora = '$hora' order by total_operador desc ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$dia_gravado = $linha[1];
$mes_gravado = $linha[2];
$ano_gravado = $linha[3];
$hora_gravada = $linha[4];

$nome_operador = $linha[5];
$meta = $linha[6];
$meta_formatada = number_format($meta, 2, ",", ".");
$total_operador = $linha[7];
$total_operador_formatado = number_format($total_operador, 2, ",", ".");
$registros = $linha[8];
$percentual_definido = $linha[9];
$percentual_definido_formatado = number_format($meta, 2, ",", ".");

$valor_total_empresa = $linha[10];
$valor_total_empresa_formatado = number_format($valor_total_empresa, 2, ",", ".");

$registros_total = $linha[11];


?>            
        <tr>
          <td width="13%"><div align="center" class="style7 style13"><? echo $nome_operador;?></div></td>
          <td width="6%"><div align="center" class="style14">
	      <? echo "R$ ".$meta_formatada; ?></div></td>
          <td width="6%"><div align="center" class="style14"><? echo "R$ ".$total_operador_formatado; ?>
</div></td>
          <td width="3%"><div align="center" class="style14">
            <? echo $registros; ?> </div></td>
          <td><div align="center" class="style13">
		    <strong><? echo $percentual_definido."%"; ?></strong> </div></td>
</tr>
<? } ?>
        
        <tr>
          <td height="23" colspan="5"><div align="center" class="style8"></div>            
          <div align="left" class="style6">.</div></td>
        </tr>
		      <?

			
$sql = "SELECT * FROM mapa_producao where dia = '$dia' and mes = '$mes' and ano = '$ano' and hora = '$hora' limit 1 ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$registros_total = $linha[11];

$meta_total_empresa = $linha[12];
$meta_total_empresa_formatada = number_format($meta_total_empresa, 2, ",", ".");

$valor_total_empresa_momento = $linha[13];
$valor_total_empresa_momento_formatado = number_format($valor_total_empresa_momento, 2, ",", ".");

$percentual_definido_empresa = $linha[14];
$percentual_definido_empresa_formatado = number_format($percentual_definido_empresa, 2, ",", ".");

?>            
		<tr>
          <td><span class="style8"><strong>Objetivo  Total </strong>
          </span></td>
          <td><div align="center" class="style8 style13"><strong>
            <span class="style14"><? echo "R$ ".$meta_total_empresa_formatada; ?></span> </strong></div></td>
          <td><div align="center" class="style13"><strong><strong>
          <span class="style14"><? echo "R$ ".$valor_total_empresa_momento_formatado; ?></span></strong>
          </strong></div></td>
          <td><div align="center" class="style13"><strong>
          <span class="style14"><? echo $registros_total; ?></span></strong></div></td>
          <td><div align="center" class="style13"><strong>
		  <strong><? echo $percentual_definido_empresa."%"; ?></strong></strong></div></td>
		  </tr>
		  <? } ?>
</table>

<p align="center">
<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email_empresa = $linha[14];
$site = $linha[15];

}

?>
<br>
<span class="style4"><strong><? echo $site; ?></strong></span>
<br>
<? echo $endereco; ?>
,
<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>
<br>
<? echo "Telefone / Fax: ". $telefone." "; ?>
/ <? echo $fax; ?>
<br>
<? echo "E-Mail: ". $email_empresa; ?>
</p>
<p align="center"><span class="style7">
  <? echo $meta_inss; ?>
</span><span class="style4"><strong><span class="style5"><strong>
</strong></span></strong></span> </p>
</body>
</html>
