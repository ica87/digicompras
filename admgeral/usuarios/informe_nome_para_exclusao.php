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
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>
<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores_ec where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo_op = $linha[0];
$nome_op = $linha[1];
$sexo_op = $linha[2];
$estadocivil_op = $linha[3];
$cpf_op = $linha[4];
$rg_op = $linha[5];
$orgao_op = $linha[6];
$emissao_op = $linha[7];
$data_nasc_op = $linha[8];
$pai_op = $linha[9];
$mae_op = $linha[10];
$endereco_op = $linha[11];
$numero_op = $linha[12];
$bairro_op = $linha[13];
$complemento_op = $linha[14];
$cidade_op = $linha[15];
$estado_op = $linha[16];
$cep_op = $linha[17];
$telefone_op = $linha[18];
$celular_op = $linha[19];
$email_op = $linha[20];
$operador_op = $linha[21];
$cel_operador_op = $linha[22];
$email_operador_op = $linha[23];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$obs_op = $linha[28];
//$datacadastro_op = $linha[29];
//$horacadastro_op = $linha[30];
//$dataalteracao_op = $linha[31];
//$horaalteracao_op = $linha[32];
//$operador_alterou_op = $linha[33];
//$cel_operador_alterou_op = $linha[34];
//$email_operador_alterou_op = $linha[35];
//$estabelecimento_alterou_op = $linha[36];
//$cidade_estabelecimento_alterou_op = $linha[37];
//$tel_estabelecimento_alterou_op = $linha[38];
//$email_estabelecimento_alterou_op = $linha[39];
//$usuario_op = $linha[40];
//$senha_op = $linha[41];
//$tipo_op = $linha[42];
//$funcao = $linha[43];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>


</p>
<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p class="style1">Aten&ccedil;&atilde;o! Voc&ecirc; tem certeza que deseja excluir um usu&aacute;rio do cart&atilde;o Digicompras de sua empresa? </p>
<form action="confirma_exclusao.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Informe o operador a ser excluido <br></td>
      <td width="10%"><select name="nome" id="select6">
        <option selected></option>
        <?


    $sql = "select * from usuarios where estab_pertence = '$estab_pertence_op' order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
      </select></td>
      <td width="55%"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Excluir usu&aacute;rio"></td></tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
