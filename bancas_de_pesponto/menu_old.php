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
<title>&Aacute;rea de administra&ccedil;&atilde;o do site!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {font-size: 20px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="4">
  <tr> 
    <td width="22%"><div align="center" class="style1">
      <p class="style2"><strong>Administra&ccedil;&atilde;o do site!</strong></p>
      <p class="style2"><strong> </strong></p>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="aempresa/menu.php" method="post" name="form1" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="A Empresa ">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><form action="background_topo/menu.php" method="post" name="form14" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit142" value="Background Cabe&ccedil;alho">
        </p>
        </div>
    </form></td>
  </tr>
  <tr>
    <td><form action="background_navegacao/menu.php" method="post" name="form14" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit14" value="Background Navega&ccedil;&atilde;o">
        </p>
        </div>
    </form></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="categorias/menu.php" method="post" name="form2" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Categorias">
      </form>
      <strong></strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="clientes/menu.php" method="post" name="form3" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Clientes">
      </form>
      <span class="style1"><a href="clientes/menu.php" target="navegacao"></a></span></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="comentarios/menu.php" method="post" name="form3" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit32" value="Coment&aacute;rios">
      </form>
      <strong></strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="cond_pagto/menu.php" method="post" name="form4" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit4" value="Condi&ccedil;&otilde;es de pagto ">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="cores/menu.php" method="post" name="form5" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit5" value="Cores do website">
      </form>
      <a href="cores/menu.php" target="navegacao"></a></div></td>
  </tr>
  <tr>
    <td><form action="cor/menu.php" method="post" name="form16" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit16" value="Cores dos materiais">
        </p>
        </div>
    </form></td>
  </tr>
  <tr>
    <td><form action="estabelecimentos/menu.php" method="post" name="form6" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit62" value="Estabelecimentos">
        </p>
        </div>
    </form></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="estados_do_brasil/menu.php" method="post" name="form6" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit6" value="Estados do Brasil ">
      </form>
    </div></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="logo/menu.php" method="post" name="form7" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit7" value="Logotipo">
      </form>
      <a href="logo/menu.php" target="navegacao"></a></div></td>
  </tr>
  <tr>
    <td><form action="material/menu.php" method="post" name="form15" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit15" value="Materiais">
        </p>
        </div>
    </form></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="modo_pagto/menu.php" method="post" name="form8" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit8" value="Modos de pagto ">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <form action="oferta/selecione_codigo_para_colocar_em_oferta.php" method="post" name="form9" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit9" value="Ofertas">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><form action="operadores/menu.php" method="post" name="form20" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit20" value="Operadores">
        </p>
        </div>
    </form></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="pagina_inicial/menu.php" method="post" name="form10" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit10" value="P&aacute;gina inicial do site ">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><form action="pedidos/menu.php" method="post" name="form18" target="navegacao">
      <p align="center">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit18" value="Pedidos">
      </p>
    </form></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="produtos/menu.php" method="post" name="form11" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit11" value="Produtos">
      </form>
      <strong></strong></div></td>
  </tr>
  <tr>
    <td><form action="propostas/menu.php" method="post" name="form21" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit21" value="Propostas">
        </p>
      </div>
    </form></td>
  </tr>
  <tr>
    <td><form action="publicidade/menu.php" method="post" name="form19" target="navegacao">
      <p align="center">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit19" value="Publicidade">
      </p>
    </form></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="representantes/menu.php" method="post" name="form12" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit12" value="Representantes">
      </form>
      <strong></strong></div></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="sub_categorias/menu.php" method="post" name="form13" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit13" value="Sub categorias ">
      </form>
    </div></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="solado/menu.php" method="post" name="form17" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit17" value="Solados">
      </form>
      </div></td>
  </tr>
  <tr> 
    <td><div align="center">
      <form action="status/menu.php" method="post" name="form17" target="navegacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit172" value="Status">
      </form>
    </div></td>
  </tr>
  <tr>
    <td><form action="ultimos_visitantes/ultimos_visitantes.php" method="post" name="form17" target="navegacao">
      <div align="center">
        <p>
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit1722" value="&Uacute;ltimos visitantes">
        </p>
        </div>
    </form></td>
  </tr>
</table>
</body>
</html>
