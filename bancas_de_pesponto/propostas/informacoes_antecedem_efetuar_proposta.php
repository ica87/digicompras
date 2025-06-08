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
<title>Informa&ccedil;&otilde;es pr&eacute;vias para preenchimento de proposta!</title>
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

$cpf = $_POST['cpf'];
$tipo = $_POST['tipo'];
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];

error_reporting(E_ALL);

?>

</p>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
<form action="efetuar_proposta.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td>Qual o perfil do cliente? </td>
      <td><select name="tipo" id="select2">
        <option selected><? echo $tipo; ?></option>
        <?


    $sql = "select * from tipos order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Informe o estabelecimento dessa proposta </td>
      <td><? echo $estabelecimento_proposta; ?>
      <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="33%">Informe o CPF do cliente a ser alterado <br></td>
      <td width="35%"><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>"></td>
      <td width="32%">&nbsp;        </td></tr>
    <tr>
      <td>Informe o tipo de proposta a ser realizada </td>
      <td><select name="tipo_proposta" id="tipo_proposta">
        <option selected></option>
        <?


    $sql = "select * from tipos_propostas order by tipo_proposta asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo_proposta']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo 0.00; ?>">
      <input name="bco_operacao" type="hidden" id="bco_operacao" value="<? echo Será informado posteriormente; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Efetuar Proposta"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
