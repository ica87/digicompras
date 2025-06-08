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
<title>AGRUPAMENTO DE TITULOS PARA RECEBIMENTO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
.style5 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../../conect/conect.php';


$num_agrupamento = $_POST['num_agrupamento'];
$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];

?>


<body>
<table width="100%" bgcolor="#ffffff"  border="0">
        <tr valign="top">
          <td width="36%" height="23">
<?
$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); 

}
?>
</td>
          <td width="37%" valign="middle"><div align="center">          </div></td>
          <td width="27%" height="23">&nbsp;</td>
        </tr>
</table>
      <p>      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form>
<p align="center" class="style5">&nbsp;</p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%"><span class="style5">Agrupamento de T&iacute;tulos N&ordm; <? echo $num_agrupamento; ?></span></td>
    <td width="27%">&nbsp;</td>
    <td width="40%"><strong><strong><strong>
      TOTAL DESTE AGRUPAMENTO <?


$sql = "select sum(mensalidade) as total_titulos from contas_a_receber where num_agrupamento = '$num_agrupamento'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_titulos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
}
else{
echo "R$ ".$valor_total_formatado;
}

?>
    </strong></strong></strong></td>
  </tr>
</table>
<?



$sql = "SELECT * FROM contas_a_receber where num_agrupamento = '$num_agrupamento' and nfantasia_cliente = '$nfantasia_cliente' and cnpj = '$cnpj_cliente'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

}


?>


<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_gerente = $linha[1];
$email_gerente = $linha[20];
$funcao_gerente = $linha[43];

$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}

	

?>





<table width="100%"  border="1">
  <tr bgcolor="ffffff">
    <td><div align="center"><span class="style3">N&ordm; T&iacute;tulo </span></div></td>
    <td><div align="center" class="style3">Cliente </div></td>
    <td><div align="center" class="style3">CNPJ / CPF</div></td>
    <td><div align="center" class="style3">Valor </div></td>
    <td><div align="center" class="style3">Vencimento</div></td>
  </tr>
  <?
			  
			  
$sql = "SELECT * FROM contas_a_receber where num_agrupamento = '$num_agrupamento' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nfantasia_cliente = $linha[4];
$cnpj_cliente = $linha[6];
$mensalidade = $linha[11];
$vencto = $linha[12];
$operador_cliente = $linha[158];
$num_fatura = $linha[42];


?>
  <tr>
    <td width="7%"><div align="center" class="style3">
        <form name="form2" method="post" action="">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <? echo $codigo; ?>
          <input name="num_bordero_suporte" type="hidden" id="num_bordero_suporte" value="<? echo $codigo; ?>">
          <strong><font color="#0000FF"> </font></strong>
        </form>
    </div></td>
    <td width="18%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
    <td width="11%">
      <div align="center" class="style3"><? echo $cnpj_cliente;?> </div></td>
    <td width="10%"><div align="center" class="style3"><? echo "R$ ".$mensalidade;?> </div></td>
    <td width="3%"><div align="center" class="style3"><? echo $vencto; ?> </div></td>
    <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
    <? } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="27%">
      <div align="left"></div>      <table width="100%"  border="1">
        <tr>
          <td width="44%">Data do Agrupamento </td>
          <td width="56%"><div align="center"><? echo $datafechamento;?>
          </div></td>
        </tr>
        <tr>
          <td colspan="2">Respons&aacute;vel pelo Agrupamento</td>
        </tr>
        <tr>
          <td colspan="2"><? echo $nome_gerente; ?></td>
        </tr>
        <tr>
          <td colspan="2">Assinatura respons&aacute;vel pelo Agrupamento </td>
        </tr>
        <tr>
          <td height="57" colspan="2">&nbsp;</td>
        </tr>
      </table></td><td width="46%"><form name="form3" method="post" action="">
        <div align="center">
          <textarea name="obs" cols="40" rows="9" readonly="readonly" id="obs"><? echo $obs_fatura; ?></textarea>
        </div>
      </form></td>
    <td width="27%"><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
