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

<title>Relat&oacute;rio de Produ&ccedil;&atilde;o por correspondente</title>

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



$nome_operador = $_POST['nome_operador'];



$dia = date('d');

$mes = date('m');

$ano = date('Y');







error_reporting(E_ALL);

?>

</p>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit22" value="Voltar">

</form>

<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

<p>Para gerar o relat&oacute;rio mensal &eacute; necess&aacute;rio informar o operador o m&ecirc;s e ano! </p>

<table width="100%"  border="0">

  <tr>

    <td colspan="4"><form action="relatorio_de_producao_periodico_por_operador_novo.php" method="post" name="form5">

      <div align="right">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input name="campanha" type="hidden" id="campanha" value="selecione">

        <strong><font color="#0000FF">

        <select name="nome_operador" id="select6">

          <option selected>Selecione o agente</option>

          <?





    $sql = "select * from correspondentes order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>

        </select>

        </font></strong>    De

    <select name="dia_inicial" id="select3">

      <?





    $sql = "select * from propostas where dia_alteracao_status <> '' group by dia_alteracao_status order by dia_alteracao_status asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_alteracao_status']."</option>";

    }

?>

    </select>

    <select name="mes_inicial" id="select4">

      <option selected>

      <?  echo $mes;  ?>

      </option>

      <?





    $sql = "select * from propostas where mes_alteracao_status <> '' group by mes_alteracao_status order by mes_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_alteracao_status']."</option>";

    }

?>

    </select>

    <select name="ano_inicial" id="select2">

      <option selected>

      <?  echo $ano;  ?>

      </option>

      <?





    $sql = "select * from propostas where ano_alteracao_status <> '' group by ano_alteracao_status order by ano_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_alteracao_status']."</option>";

    }

?>

    </select>

    at&eacute;

    <select name="dia_final" id="select11">

      <?





    $sql = "select * from propostas group by dia_alteracao_status order by dia_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_alteracao_status']."</option>";

    }

?>

    </select>

    <select name="mes_final" id="select12">

      <option selected>

      <?  echo $mes;  ?>

      </option>

      <?





    $sql = "select * from propostas group by mes_alteracao_status order by mes_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_alteracao_status']."</option>";

    }

?>

    </select>

    <select name="ano_final" id="select13">

      <option selected>

      <?  echo $ano;  ?>

      </option>

      <?





    $sql = "select * from propostas group by ano_alteracao_status order by ano_alteracao_status desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_alteracao_status']."</option>";

    }

?>

    </select>

    <input type="submit" name="Submit5232" value="Relat&oacute;rio de Produ&ccedil;&atilde;o">

      </div>

    </form></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

</table>

<form action="relatorio_de_propostas_pagas_ao_correspondente_por_data.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td width="35%">Informe o correspondente <br></td>

      <td width="17%"> <strong><font color="#0000FF">

        <select name="nome_operador" id="nome_operador">

          <option selected>Selecione o agente</option>

          <?





    $sql = "select * from correspondentes order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>

        </select>

      </font></strong></td>

      <td width="48%">&nbsp; </td>

    </tr>

    <tr>

      <td>Informe o m&ecirc;s e ano de refer&ecirc;ncia </td>

      <td><input name="dataalteracao" type="text" id="dataalteracao" size="10" maxlength="10">

        <input name="status" type="hidden" id="status" value="<? echo "PAGO AO CORRESPONDENTE"; ?>">

        dd-mm-aaaa</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit4" value="Gerar Relat&oacute;rio"></td>

      <td>&nbsp; </td>

    </tr>

  </table>

</form>

<p>&nbsp;</p>

</body>

</html>

