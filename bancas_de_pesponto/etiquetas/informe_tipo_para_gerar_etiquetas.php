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

<title>Emiss&atilde;o de etiquetas</title>

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

<form action="etiquetas.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Listagem por perfil</div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <select name="tipo" id="tipo">

          <?





    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>




<form action="etiquetas_por_cidade.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Listagem por cidade</div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><select name="cidade" id="estado">
        <option selected>Selecione</option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit4" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="etiquetas_enderecos.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Gerar Etiquetas por perfil</div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <select name="tipo" id="tipo">

          <?





    $sql = "select * from tipos order by tipo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['tipo']."</option>";

    }

?>
        </select>

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>

<form action="etiquetas_enderecos_por_cidade.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Gerar Etiquetas por cidade</div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><select name="cidade" id="cidade">
        <option selected>Selecione</option>
        <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
      </select></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Gerar Etiquetas"></td></tr>
  </table>

</form>



<form action="etiquetas_por_nome.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Gerar etiquetas por nome </div></td>
    </tr>
    <tr>

      <td width="35%">Informe o p&uacute;blico alvo para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <select name="nome" id="select2">

          <?





    $sql = "select * from clientes group by nome order by nome asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nome']."</option>";

    }

?>
        </select>

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit42" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="etiquetas_por_datacadastro.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Gerar Etiquetas por data de cadastro</div></td>
    </tr>
    <tr>

      <td width="35%">Informe a data de cadastro para gerar as etiquetas <br></td>

      <td width="10%"><strong>

      <input name="datacadastro" type="text" id="datacadastro" size="10" maxlength="10">

</strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit3" value="Gerar Etiquetas"></td>
    </tr>
  </table>

</form>

<form action="aniversariantes_do_mes.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">

  <table width="100%"  border="0">

    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="center">Gerar Etiquetas por m&ecirc;s de anivers&aacute;rio</div></td>
    </tr>
    <tr>

      <td width="35%">Informe o m&ecirc;s de anivers&aacute;rio para gerar as etiquetas <br></td>

      <td width="10%"><strong>

        <input name="mes_niver" type="text" id="datacadastro3" size="4" maxlength="2">

      </strong></td>

      <td width="55%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit32" value="Gerar Etiquetas por mes de anivers&aacute;rio"></td>
    </tr>
  </table>

</form>

<p>&nbsp;</p>

</body>

</html>

