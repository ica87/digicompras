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

<title>&Aacute;REA RESTRITA DE ADMINISTRA&Ccedil;&Atilde;O DO SITE! - SUPORTE 16-9739-1418 COM IVAN</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {

	font-size: 18px;

	font-weight: bold;

	color: #0000FF;

}

-->

</style>

</head>



<body>

<table width="100%"  border="0">

  <tr>

    <td width="20%">&nbsp;</td>

    <td colspan="5"><div align="center" class="style1">

    &Aacute;rea Administrativa do site! </div></td>

    <td width="19%">&nbsp;</td>

  </tr>

  <tr>

    <td><form name="form8" method="post" action="newsletter/index.php">

      <div align="center">

        <input type="submit" name="Submit8" value="Newsletter">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        </span>      </div>

    </form></td>

    <td width="3%">&nbsp;</td>

    <td width="25%"><form action="estabelecimentos/menu.php" method="post" name="form3">

      <div align="center">

        <input type="submit" name="Submit33" value="Estabelecimentos comerciais">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td width="3%">&nbsp;</td>

    <td width="27%"><form action="usuarios/menu.php" method="post" name="form12">

      <div align="center">

        <input type="submit" name="Submit12" value="Usu&aacute;rios">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td width="3%">&nbsp;</td>

    <td><form action="operadores/menu.php" method="post" name="form12">

      <div align="center">

        <input type="submit" name="Submit12222" value="Operadores Digicompras">

        <span class="style1">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        </span></div>

    </form></td>

  </tr>

  <tr>

    <td><form name="form8" method="post" action="relatorios/menu.php">

      <div align="center">

        <input type="submit" name="Submit82" value="Relat&oacute;rios">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="clientes/menu.php" method="post" name="form3">
      <div align="center">
        <input type="submit" name="Submit2" value="Clientes Newsletter">
        <span class="style1">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        </span></div>
    </form></td>

    <td>&nbsp;</td>

    <td><form action="relatorios/menu.php" method="post" name="form12">

      <div align="center">

        <input type="submit" name="Submit123" value="Cart&otilde;es para produ&ccedil;&atilde;o">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><form action="categorias/menu.php" method="post" name="form3">

      <div align="center">

        <input type="submit" name="Submit332" value="Categorias">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td colspan="3"><form name="form8" method="post" action="mensagens_aos_funcionarios/menu.php">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit122" value="Mensagens aos anunciantes">

      <input name="mensagem" type="hidden" id="mensagem">

      <input name="nome_operador" type="hidden" id="nome_operador">

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td colspan="3"><div align="center" class="style1">&Aacute;rea visual do site </div></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><form action="pagina_inicial/menu.php" method="post" name="form10">

      <div align="center">

        <input type="submit" name="Submit10" value="P&aacute;gina inicial do site ">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="aempresa/menu.php" method="post" name="form1">

      <div align="center">

        <input type="submit" name="Submit" value="A Empresa ">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="comentarios/menu.php" method="post" name="form3">

      <div align="center">

        <input type="submit" name="Submit32" value="Coment&aacute;rios">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="cores/menu.php" method="post" name="form5">

      <div align="center">

        <input type="submit" name="Submit5" value="Cores do website">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

  </tr>

  <tr>

    <td><form action="background_topo/menu.php" method="post" name="form14">

      <div align="center">

        <input type="submit" name="Submit142" value="Background Cabe&ccedil;alho">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="background_navegacao/menu.php" method="post" name="form14">

      <div align="center">

        <input type="submit" name="Submit14" value="Background Navega&ccedil;&atilde;o">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="logo/menu.php" method="post" name="form7">

      <div align="center">

        <input type="submit" name="Submit7" value="Logotipo">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="publicidade/menu.php" method="post" name="form19">

      <div align="center">

        <input type="submit" name="Submit19" value="Publicidade">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

  </tr>

  <tr>

    <td><form action="estados_do_brasil/menu.php" method="post" name="form6">

      <div align="center">

        <input type="submit" name="Submit6" value="Estados do Brasil ">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="ultimos_visitantes/ultimos_visitantes.php" method="post" name="form17">

      <div align="center">

        <input type="submit" name="Submit1722" value="&Uacute;ltimos visitantes">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="status/menu.php" method="post" name="form17">

      <div align="center">

        <input type="submit" name="Submit172" value="Status">

        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td><form action="empresas_conveniadas/menu.php" method="post" name="form3">

      <div align="center">

        <input type="submit" name="Submit3" value="Empresas Conveniadas">

        <span class="style1">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        </span></div>

    </form></td>

    <td>&nbsp;</td>

    <td><form action="operadores/menu.php" method="post" name="form12">

      <div align="center">        <span class="style1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      </span> </div>

    </form></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td><form action="operadores_ec/menu.php" method="post" name="form12">

      <div align="center">

        <input type="submit" name="Submit1222" value="Operadores EC">

        <span class="style1">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        </span></div>

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

</table>

</body>

</html>

