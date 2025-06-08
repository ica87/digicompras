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

<title>Ralat&oacute;rios de Ve&iacute;culos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style></head>



<body>

<p><?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>



</p>

<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

<p align="center">Mapa geral de todas as lojas</p>
<form action="relatorios/mapa_de_todas_lojas_sintetico.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td width="32%">M&ecirc;s e Ano</td>

      <td width="16%"><select name="mes_ano" id="select">
        <?


    $sql = "select * from propostas_veiculos group by mes_ano order by mes_ano desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_ano']."</option>";
    }
?>
      </select>
        mm-aaaa</td>

      <td width="52%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
    <input type="submit" name="Submit3" value="Gerar Mapa de todas as lojas"></td></tr>
  </table>

</form>
<p align="center">&nbsp;</p>
<p align="center">Gerar relat&oacute;rios de propostas de ve&iacute;culos</p>
<form action="relatorios/relatorio_de_producao_mensal_por_loja.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>
      <td>Por Loja</td>
      <td><strong><font color="#0000FF">
        <select name="estabelecimento_proposta" id="select11">
          <option selected>Selecione a loja</option>
          <?





    $sql = "select * from estabelecimentos where status = 'Ativo' order by nfantasia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nfantasia']."</option>";

    }

?>
        </select>
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td width="35%">M&ecirc;s e Ano</td>

      <td width="10%"><input name="mes_ano" type="text" id="mes_ano" size="10" maxlength="7">
        mm-aaaa</td>

      <td width="55%">&nbsp;</td></tr>
    <tr>
      <td>Status</td>
      <td><strong>
        <select name="status" id="status">
          <option>Aprovado</option>
          <option>Reprovado</option>
          <option>Re-Analise</option>
          <option>Em Analise</option>
          <option>Não Cadastrada</option>
        </select>
      </strong></td>
      <td><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit" value="Gerar Relat&oacute;rio"></td>
    </tr>
  </table>

</form>

<p>&nbsp;</p>

<table width="100%" border="0">
  <tr>
    <td width="53%"><form name="form12" method="post" action="status_proposta.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      Proposta
  <input name="num_proposta" type="text" id="num_proposta3" size="11">
      comiss&atilde;o
  <input name="percentual" type="text" id="percentual3" size="4" maxlength="4">
      % Comiss&atilde;o op
  <input name="percentual_op" type="text" id="percentual_op3" size="4" maxlength="4">
  <input type="submit" name="Submit15" value="Status">
    </form></td>
    <td width="21%">&nbsp;</td>
    <td width="26%">&nbsp;</td>
  </tr>
  <tr>
    <td><form name="form12" method="post" action="status_pagto_cliente.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      Proposta
  <input name="num_proposta" type="text" id="num_proposta" size="11">
  <input type="submit" name="Submit152" value="Pgto ao Cliente (Status)">
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form name="form15" method="post" action="relatorio_de_pagtos_ao_cliente_administracao.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      Informe a data dd-mm-aaaa
  <input name="data_pagto_cliente" type="text" id="data_pagto_cliente" size="10" maxlength="10">
  <input type="submit" name="Submit1632" value="VEICULOS - Relat&oacute;rio de Pagtos ao cliente(Administra&ccedil;&atilde;o)">
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="53%"><form action="index.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        CPF Cliente
        <input type="hidden" name="num_proposta" id="num_proposta8">
        <input name="cpf" type="text" id="cpf" size="11" maxlength="11">
        ex: 99999999999
        <input type="submit" name="Submit5" value="Acompanhar Proposta">
      </div>
    </form></td>
    <td><form action="index.php" method="post" name="form2">
      <div align="center">
        <p>
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          N&ordm; Proposta
          <input type="hidden" name="cpf" id="cpf">
          <input name="num_proposta" type="text" id="num_proposta7" size="11" maxlength="11">
          <input type="submit" name="Submit6" value="Acompanhar Proposta">
        </p>
      </div>
    </form></td>
  </tr>
</table>
<?

$cpf = $_POST['cpf'];

if(empty($cpf)){

$sql = "select * from propostas_veiculos where cpf = '..............' order by nome asc";


}

else{

$sql = "select * from propostas_veiculos where cpf = '$cpf' order by nome asc";

}

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;



$num_proposta = $linha[0];

$dataproposta = $linha[1];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$nome = $linha[9];

$cpf = $linha[12];



$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terceiros = $linha[107];



?>
<table width="100%"  border="0">
  
  <tr bgcolor="#CCCCCC">
    <td width="9%"><div align="center"><font size="2"><strong>N&ordm; Proposta </strong></font></div></td>
    <td width="7%"><div align="center"><font size="2"><strong>Data</strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong>Status</strong></font></div></td>
    <td width="14%"><div align="center"><font size="2"><strong>Loja</strong></font></div></td>
    <td width="17%"><div align="center"><font size="2"><strong>Operador</strong></font></div></td>
    <td width="24%"><div align="center"><font size="2"><strong>Nome</strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong>CPF</strong></font></div></td>
  </tr>
  <tr valign="middle">
    <td><form action="imprimir_proposta.php" method="post" name="form3" target="_blank">
      <div align="center"> <font size="1"><? echo $num_proposta; ?>
          <input name="num_proposta" type="hidden" id="num_proposta4" value="<? echo $num_proposta; ?>">
          <input type="submit" name="Submit4" value="Visualizar">
      </font></div>
    </form></td>
    <td><div align="center"><font size="1"><? echo $dataproposta; ?></font></div></td>
    <td><form action="altera_status.php" method="post" name="form3">
      <div align="center">
        <p><font size="1"> <? echo $status; ?>
                <input name="num_proposta2" type="hidden" id="num_proposta2" value="<? echo $num_proposta; ?>">
          </font><br>
        </p>
      </div>
    </form></td>
    <td><div align="center"><font size="1"><? echo $estabelecimento_proposta; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $operador_atendente; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $nome; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $cpf; ?></font></div></td>
    <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
    <? } ?>
</table>
  <?

$num_proposta = $_POST['num_proposta'];

if(empty($num_proposta)){

$sql = "select * from propostas_veiculos where num_proposta = '.................' order by nome asc";

}

else{

$sql = "select * from propostas_veiculos where num_proposta = '$num_proposta' order by nome asc";

}

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;



$num_proposta = $linha[0];

$dataproposta = $linha[1];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$nome = $linha[9];

$cpf = $linha[12];



$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terceiros = $linha[107];



?>
<table width="100%"  border="0">
  <tr bgcolor="#CCCCCC">
    <td width="9%"><div align="center"><font size="2"><strong>N&ordm; Proposta </strong></font></div></td>
    <td width="7%"><div align="center"><font size="2"><strong>Data</strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong>Status</strong></font></div></td>
    <td width="14%"><div align="center"><font size="2"><strong>Loja</strong></font></div></td>
    <td width="17%"><div align="center"><font size="2"><strong>Operador</strong></font></div></td>
    <td width="24%"><div align="center"><font size="2"><strong>Nome</strong></font></div></td>
    <td width="10%"><div align="center"><font size="2"><strong>CPF</strong></font></div></td>
  </tr>
  <tr valign="middle">
    <td><form action="imprimir_proposta.php" method="post" name="form3" target="_blank">
      <div align="center"> <font size="1"><? echo $num_proposta; ?>
              <input name="num_proposta" type="hidden" id="num_proposta5" value="<? echo $num_proposta; ?>">
              <input type="submit" name="Submit7" value="Visualizar">
      </font></div>
    </form></td>
    <td><div align="center"><font size="1"><? echo $dataproposta; ?></font></div></td>
    <td><form action="altera_status.php" method="post" name="form3">
      <div align="center">
        <p><font size="1"> <? echo $status; ?>
                <input name="num_proposta3" type="hidden" id="num_proposta6" value="<? echo $num_proposta; ?>">
          </font><br>
        </p>
      </div>
    </form></td>
    <td><div align="center"><font size="1"><? echo $estabelecimento_proposta; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $operador_atendente; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $nome; ?></font></div></td>
    <td><div align="center"><font size="1"><? echo $cpf; ?></font></div></td>
    <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
    <? } ?>
</table>
<p>&nbsp;</p>

</body>

</html>

