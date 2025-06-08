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
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>
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
.style5 {
	font-size: 9px;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';

$operador = $_POST['operador'];
$mes_pagto = $_POST['mes_pagto'];
$ano_pagto = $_POST['ano_pagto'];


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
      <form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
<p class="style4"><strong>Operador - <? echo $operador;?></strong></p>
      <p><span class="style4"><strong>Total - 
        <?
$sql = "select sum(valor) as total from fechamento_mes where operador = '$operador' and mes_pagto = '$mes_pagto' and ano_pagto = '$ano_pagto'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
      </strong></span><br>
    </p>
      <table width="100%"  border="1">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style5">Nome</div></td>
          <td><div align="center" class="style5">CPF</div></td>
          <td><div align="center" class="style5">Veiculo/Produto</div></td>
          <td><div align="center" class="style5">Categoria</div></td>
          <td><div align="center" class="style5">Valor</div></td>
          <td><div align="center" class="style5">Plano_PP</div></td>
          <td><div align="center" class="style5"> Data Pagto </div></td>
          <td><div align="center" class="style5">Banco</div></td>
          <td><div align="center" class="style5">Loja Origem </div></td>
          <td><div align="center" class="style5">Loja Destino </div></td>
          <td width="6%"><div align="center" class="style5">R Origem </div></td>
          <td width="6%"><div align="center" class="style5">R Destino </div></td>
        </tr>
      <?

			
$sql = "SELECT * FROM fechamento_mes where operador = '$operador' and mes_pagto = '$mes_pagto' and ano_pagto = '$ano_pagto'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$operador = $linha[1];
$nome = $linha[2];
$cpf = $linha[3];
$veiculo_produto = $linha[4];
$valor = $linha[5];
$plano_pp = $linha[6];
$data_pagto = $linha[7];
$bco_operacao = $linha[8];
$loja_origem = $linha[9];
$loja_destino = $linha[10];
$retorno_origem = $linha[11];
$retorno_destino = $linha[12];
$dia_pagto = $linha[13];
$mes_pagto = $linha[14];
$ano_pagto = $linha[15];
$data_lanc = $linha[16];
$hora_lanc = $linha[17];
$dia_lanc = $linha[18];
$mes_lanc = $linha[19];
$ano_lanc = $linha[20];
$obs = $linha[21];
$categoria_veiculo = $linha[22];

?>            
        <tr>
          <td width="16%"><div align="center" class="style5"><? echo $nome;?></div></td>
          <td width="8%"><div align="center" class="style5"><? echo $cpf;?></div></td>
          <td width="6%"><div align="center" class="style5"><? echo $veiculo_produto;?> </div></td>
          <td width="6%"><div align="center" class="style5">
            <? if($categoria_veiculo==""){echo "-";}else{echo $categoria_veiculo; }?>
          </div></td>
          <td width="7%"><div align="center" class="style5"><? echo "R$ ".$valor;?></div></td>
          <td width="6%"><div align="center" class="style5">
            <? if($categoria_veiculo==""){ echo $plano_pp; }else { echo "R$ ".$plano_pp; }?>
          </div></td>
          <td width="6%"><div align="center" class="style5"><? echo $data_pagto;?></div></td>
          <td width="11%"> <div align="center" class="style5"><? echo $bco_operacao;?>
          </div></td>
          <td width="11%"><div align="center" class="style5"><? echo $loja_origem;?>
          </div></td>
          <td width="11%"><div align="center" class="style5"><? echo $loja_destino;?>
          </div></td>
          <td><div align="center" class="style5"><? echo $retorno_origem;?>
          </div></td>
          <td><div align="center" class="style5"><? echo $retorno_destino;?>
          </div></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
</table>

<p align="center">
<?
$sql = "SELECT * FROM cad_empresa limit 1";
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



</body>
</html>
