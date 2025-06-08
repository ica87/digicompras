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
<title>Untitled Document</title>
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
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


error_reporting(E_ALL);

?>

		  
		  
		  <?

// dados da proposta
$codigo = $_POST['codigo'];
$status_de_envio = $_POST['status_de_envio'];
$data_entrega = $_POST['data_entrega'];
$nfantasia = $_POST['nfantasia'];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`usuarios` set `codigo` = '$codigo',`status_de_envio` = '$status_de_envio',`data_entrega` = '$data_entrega' where `usuarios`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações status de entrega desse usuário");


echo "Status de entrega alterado com sucesso<br><br>";
?>



<body>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td><form name="form1" method="post" action="relatorio_de_cartoes_em_producao_por_empresa_conveniada.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit3" value="Voltar">
      <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
    </form></td>
    <td><form name="form1" method="post" action="../principal.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar ao menu principal">
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
mysql_close($conexao);
?>
