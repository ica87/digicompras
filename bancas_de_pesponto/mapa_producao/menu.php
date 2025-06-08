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

<title>MAPA DE PRODU&Ccedil;&Atilde;O</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2"><?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);

?></td>
    </tr>

    <tr>

      <td width="23%">&nbsp;</td>

      <td width="77%"><strong><font color="#0000FF" size="4">Visualiza&ccedil;&atilde;o do Mapa de Produ&ccedil;&atilde;o Pago_ao_cliente</font></strong></td>
    </tr>

    <tr>

      <td><form name="form1" method="post" action="../principal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit22" value="Voltar ao menu principal">

      </form></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form action="mapa_producao_pago_cliente.php" method="post" name="form2">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input name="mes_ano_status" type="hidden" id="mes_ano_status" value="<? $mes_ano = date('m-Y'); echo $mes_ano; ?>">        

        <input type="submit" name="Submit2" value="Gerar Mapa de Produ&ccedil;&atilde;o Pago_ao_cliente">

      </form></td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form3" method="post" action="listagem_mapa_producao_pagto_cliente_por_data.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <select name="dia" id="dia">

          <?





    $sql = "select * from mapa_producao_pagto_cliente group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
                </select>

        <select name="mes" id="mes">

          <?





    $sql = "select * from mapa_producao_pagto_cliente group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
                </select>

        <select name="ano" id="ano">

          <?





    $sql = "select * from mapa_producao_pagto_cliente group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
                </select>

        <input type="submit" name="Submit3" value="Mapa de Produ&ccedil;&atilde;o Pago_ao_cliente por data">

      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Visualiza&ccedil;&atilde;o do Mapa de Produ&ccedil;&atilde;o </font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="mapa_producao.php" method="post" name="form2">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input name="mes_ano_status" type="hidden" id="mes_ano_status" value="<? $mes_ano = date('m-Y'); echo $mes_ano; ?>">
        <input type="submit" name="Submit4" value="Gerar Mapa de Produ&ccedil;&atilde;o">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form3" method="post" action="listagem_mapa_producao_por_data.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <select name="dia" id="dia">
          <?





    $sql = "select * from mapa_producao group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
                </select>
        <select name="mes" id="mes">
          <?





    $sql = "select * from mapa_producao group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
                </select>
        <select name="ano" id="ano">
          <?





    $sql = "select * from mapa_producao group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
                </select>
        <input type="submit" name="Submit" value="Mapa de Produ&ccedil;&atilde;o por data">
      </form></td>
    </tr>
  </table>

<p>&nbsp; </p>

</body>

</html>

