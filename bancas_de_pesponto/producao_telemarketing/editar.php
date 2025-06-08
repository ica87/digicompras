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
<form name="form1" method="post" action="grava_editar.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">LANCAMENTO DE PRODU&Ccedil;&Atilde;O DE OPERADOR N&ordm; </font><font color="#0000FF"><? echo $codigo; ?>
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
      <td><strong>
        <select name="operador" id="select6">
          <option selected><? echo $operador; ?></option>
          <?


    $sql = "select * from operadores order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
        </select>
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
      <td><input name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>" size="18" maxlength="14"></td>
    </tr>
    <tr>
      <td>Categoria</td>
      <td><strong>
        <select name="categoria_veiculo" id="select8">
          <option selected><? echo $categoria_veiculo; ?></option>
          <?


    $sql = "select * from categorias_veiculos order by categoria asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['categoria']."</option>";
    }
?>
        </select>
      </strong></td>
      <td>Ve&iacute;culo/Produto</td>
      <td><input name="veiculo_produto" type="text" id="veiculo_produto2" value="<? echo $veiculo_produto; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Valor R$ </td>
      <td><input name="valor" type="text" id="valor2" value="<? echo $valor; ?>"></td>
      <td>Data do Pagto </td>
      <td><input name="data_pagto" type="text" id="data_pagto2" value="<? echo $data_pagto; ?>">
dd-mm-aaaa</td>
    </tr>
    <tr>
      <td>Plano/PP R$ </td>
      <td><strong>
        <input name="plano_pp" type="text" id="plano_pp2" value="<? echo $plano_pp; ?>">
      </strong></td>
      <td>Banco</td>
      <td><strong>
        <select name="bco_operacao" id="select3">
          <option selected><? echo $bco_operacao; ?></option>
          <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Origem</div></td>
      <td colspan="2"><div align="center">Destino</div></td>
    </tr>
    <tr>
      <td><div align="right">Loja</div></td>
      <td><strong>
        <select name="loja_origem" id="select2">
          <option selected><? echo $loja_origem; ?></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
        </select>
      </strong></td>
      <td><div align="right">Loja</div></td>
      <td><strong>
        <select name="loja_destino" id="select4">
          <option selected><? echo $loja_destino; ?></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td><div align="right">Retorno</div></td>
      <td><strong>
        <select name="retorno_origem" id="retorno_origem">
		  <option selected><? echo $retorno_origem; ?></option>
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </strong></td>
      <td><div align="right">Retorno</div></td>
      <td><strong>
        <select name="retorno_destino" id="select5">
          <option selected><? echo $retorno_destino; ?></option>
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="50" rows="5" id="obs"><? echo $obs; ?></textarea></td>
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
        <input type="submit" name="Submit" value="Salvar altera&ccedil;&otilde;es"> 
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
