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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>


</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77%"><strong><font color="#0000FF" size="4">O que deseja fazer com as propostas?</font></strong></td>
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
      <td><form action="informacoes_antecedem_efetuar_proposta.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Efetuar Proposta">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="pesquiza_propostas_por_cpf.php" method="post" name="form5">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit5" value="Pesquisar Propostas por CPF">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="informe_num_proposta_para_edicao_de_proposta.php" method="post" name="form3">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Editar Proposta por N&ordm; de proposta">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form4" method="post" action="informe_num_proposta_para_impressao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Impress&atilde;o de propostas">
      </form></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong><font color="#FF0000">ALTERA&Ccedil;&Atilde;O DE PROPOSTAS SEM ALTERARA&Ccedil;&Atilde;O DE DATAS</font></strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="editar_proposta_por_num_proposta_sem_alterar_datas.php" method="post" name="form3">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="num_proposta" type="text" id="num_proposta">
        <input type="submit" name="Submit32" value="Editar Proposta por N&ordm; de proposta">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
