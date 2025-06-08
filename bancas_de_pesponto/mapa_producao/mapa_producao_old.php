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
<title>MAPA DE PRODU&Ccedil;&Atilde;O - GRUPO BANCRED</title>
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
.style9 {font-size: 10px}
.style11 {font-size: 12px; font-weight: bold; }
.style12 {font-size: 12px}
-->
</style>
</head>
<?

require '../../conect/conect.php';

$mes_ano = $_POST['mes_ano'];


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
      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
<p class="style4"><strong>Total monet&aacute;rio realizado  - <span class="style5"><strong>
  <?
$sql = "select sum(valor_credito) as total from propostas where mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_bancred = $linha['total'];
$valor_total_bancred_formatada = number_format($valor_total_bancred, 2, ",", ".");


echo "R$ ".$valor_total_bancred_formatada;
?> </strong></span></strong></p>
      <p><span class="style4"><strong>Total de contratos efetivados - 
            <span class="style5">
            <strong>
            <?
$sql = "select * from propostas where mes_ano = '$mes_ano'";
$resultado=mysql_query($sql);
$registros = mysql_num_rows($resultado);

echo $registros;
?>
            </strong></span> </strong></span><br>
    </p>
      <table width="100%"  border="1">
        <tr bgcolor="#ffffff">
          <td><div align="center" class="style7">Nome</div></td>
          <td><div align="center" class="style7">Objetivo</div></td>
          <td><div align="center" class="style7">Realizado</div></td>
          <td><div align="center" class="style7">Quant Contratos </div></td>
          <td width="10%"><div align="center" class="style7">% Atingido da meta </div></td>
        </tr>
		      <?

			
$sql = "SELECT * FROM operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_operador = $linha[1];
$meta = $linha[55];
$meta_formatada = number_format($meta, 2, ",", ".");

?>            
        <tr>
          <td width="13%"><div align="center" class="style7"><? echo $nome_operador;?></div></td>
          <td width="6%"><div align="center" class="style7">
	      <? echo "R$ ".$meta_formatada; ?></div></td>
          <td width="6%"><div align="center" class="style7">
            <?
$sql = "select sum(valor_credito) as total from propostas where operador = '$nome_operador' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_operador = $linha['total'];
$total_operador_formatada = number_format($total_operador, 2, ",", ".");

if($total_operador==0){ echo "0"; }

else{
echo "R$ ".$total_operador_formatada;
}
?>
          </div></td>
          <td width="3%"><div align="center" class="style7">
            <?
$sql = "select * from propostas where operador = '$nome_operador' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql);
$registros = mysql_num_rows($resultado);

echo $registros;
?>
           </div></td>
          <td><div align="center" class="style8">
		  <?
if($meta==0){
echo "0,00"."%";
}
else{
		  
		  $percentual_decimal = bcdiv($total_operador,$meta,5);
		  $percentual_definido = bcmul($percentual_decimal,100,3);
		  $percentual_definido_formatada = number_format($percentual_definido, 2, ",", ".");
		  
		  echo $percentual_definido_formatada." %";
	}	  
		   ?>
          </div></td>
</tr>
<? } ?>
        
        <tr>
          <td height="23" colspan="5"><div align="center" class="style8"></div>            
          <div align="left" class="style6">.</div></td>
        <tr>
          <td><span class="style8"><strong>Objetivo  Total </strong>
          </span></td>
          <td><div align="center" class="style8"><strong>
            <?
$sql = "select sum(meta) as total from operadores where funcao = 'Operador(a)'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$meta_total = $linha['total'];
$meta_total_formatada = number_format($meta_total, 2, ",", ".");

echo "R$ ".$meta_total_formatada;
?>
</strong></div></td>
          <td><div align="center" class="style8"><strong><strong>
            <?
$sql = "select sum(valor_credito) as total from propostas where mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_empresa = $linha['total'];
$valor_total_empresa_formatada = number_format($valor_total_empresa, 2, ",", ".");


if($valor_total_empresa==0){ echo "0"; }

else{
echo "R$ ".$valor_total_empresa_formatada;
}
?>
          </strong>
          </strong></div></td>
          <td><div align="center" class="style8"><strong>
            <?
$sql = "select * from propostas where mes_ano = '$mes_ano'";
$resultado=mysql_query($sql);
$registros = mysql_num_rows($resultado);

if($registros==0){ echo "-";}

else{
echo $registros;
}
?>
          </strong></div></td>
          <td><div align="center" class="style8">
			<? $percentual_decimal = bcdiv($valor_total_empresa,$meta_total,5);
		  $percentual_definido = bcmul($percentual_decimal,100,3);
		  $percentual_definido_formatada = number_format($percentual_definido, 2, ",", ".");

		  echo $percentual_definido_formatada." %";
		  
		   ?>
          </div></td>
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
