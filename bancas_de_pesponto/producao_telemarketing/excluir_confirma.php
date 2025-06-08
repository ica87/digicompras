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
<title>LANCAMENTO DE PRODU&Ccedil;&Atilde;O DE OPERADOR </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>




<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?
$operador_informado = $_POST['operador'];


$operador = $operador_informado;
$operador2 = explode(" - ", $operador);

$codigo = $operador2[0];
$nome = $operador2[1];
$cpf = $operador2[2];
$dia_pagto = $operador2[3];
$mes_pagto = $operador2[4];
$ano_pagto = $operador2[5];






$sql = "SELECT * FROM fechamento_mes where codigo = '$codigo' limit 1";
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

}
?>
<form name="form1" method="post" action="excluir.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">EXCLUS&Atilde;O DE LANCAMENTO DE PRODU&Ccedil;&Atilde;O DE OPERADOR N&ordm; </font><font color="#0000FF"><? echo $codigo; ?>
              <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </font></strong></div></td>
    </tr>
    <tr>
      <td width="15%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
      <td width="17%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Operador</td>
      <td><strong> <? echo $operador; ?> 
        <input name="operador" type="hidden" id="operador" value="<? echo $operador; ?>">
</strong></td>
      <td>Data do lan&ccedil;amento </td>
      <td>                <strong><font color="#0000FF"><? echo $data_lanc; ?></font></strong>
        <strong><font color="#0000FF">
      </font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><strong><? echo $nome; ?></strong></td>
      <td>CPF</td>
      <td><strong><? echo $cpf; ?></strong></td>
    </tr>
    <tr>
      <td>Categoria</td>
      <td><strong><? echo $categoria_veiculo; ?></strong></td>
      <td>Ve&iacute;culo/Produto</td>
      <td><strong><? echo $veiculo_produto; ?></strong></td>
    </tr>
    <tr>
      <td>Valor R$ </td>
      <td><strong><? echo $valor; ?></strong></td>
      <td>Data do Pagto </td>
      <td><strong><? echo $data_pagto; ?></strong></td>
    </tr>
    <tr>
      <td>Plano/PP R$ </td>
      <td><strong><? echo $plano_pp; ?></strong></td>
      <td>Banco</td>
      <td><strong><? echo $bco_operacao; ?></strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Origem</div></td>
      <td colspan="2"><div align="center">Destino</div></td>
    </tr>
    <tr>
      <td><div align="right">Loja</div></td>
      <td><strong><? echo $loja_origem; ?> </strong></td>
      <td><div align="right">Loja</div></td>
      <td><strong><? echo $loja_destino; ?> </strong></td>
    </tr>
    <tr>
      <td><div align="right">Retorno</div></td>
      <td><strong><? echo $retorno_origem; ?> </strong></td>
      <td><div align="right">Retorno</div></td>
      <td><strong><? echo $retorno_destino; ?> </strong></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><strong><? echo $obs; ?></strong></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Confirmar Exclus&atilde;o"> 
          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
