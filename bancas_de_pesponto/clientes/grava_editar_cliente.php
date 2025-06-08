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
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>


		  
		  
		  <?

$codigo = $_POST['codigo'];
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$inscr_est = $_POST['inscr_est'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$comprador  = $_POST['comprador'];
$fone = $_POST['fone'];
$fax = $_POST['fax'];
$celular = $_POST['celular'];
$representante = $_POST['representante'];
$condpagto = $_POST['condpagto'];
$modopagto = $_POST['modopagto'];
$transportadora = $_POST['transportadora'];
$skype = $_POST['skype'];

$data_nasc = $_POST['data_nasc'];
$mes_nasc = $_POST['mes_nasc'];
$salario = $_POST['salario'];
$limite = $_POST['limite'];
$empresa_trab = $_POST['empresa_trab'];
$tel_trab = $_POST['tel_trab'];
$nome1 = $_POST['nome1'];
$cpf1 = $_POST['cpf1'];
$nome2 = $_POST['nome2'];
$cpf2 = $_POST['cpf2'];
$nome3 = $_POST['nome3'];
$cpf3 = $_POST['cpf3'];


//endereço de cobrança

$endereco_cob = $_POST['endereco_cob'];
$numero_cob = $_POST['numero_cob'];
$bairro_cob = $_POST['bairro_cob'];
$cidade_cob = $_POST['cidade_cob'];
$estado_cob = $_POST['estado_cob'];
$cep_cob = $_POST['cep_cob'];
$email_cob = $_POST['email_cob'];

//endereço de entrega

$endereco_ent = $_POST['endereco_ent'];
$numero_ent = $_POST['numero_ent'];
$bairro_ent = $_POST['bairro_ent'];
$cidade_ent = $_POST['cidade_ent'];
$estado_ent = $_POST['estado_ent'];
$cep_ent = $_POST['cep_ent'];
$email_ent = $_POST['email_ent'];

// Observações

$obs = $_POST['obs'];
$status = $_POST['status'];

//usuario e senha

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$codigo',`razaosocial` = '$razaosocial',`cnpj` = '$cnpj',`nfantasia` = '$nfantasia',`inscr_est` = '$inscr_est',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`cidade` = '$cidade',`estado` = '$estado',`email` = '$email',`comprador` = '$comprador',`fone` = '$fone',`fax` = '$fax',`celular` = '$celular',`representante` = '$representante',`condpagto` = '$condpagto',`modopagto` = '$modopagto',`transportadora` = '$transportadora',`skype` = '$skype',
`endereco_cob` = '$endereco_cob',`numero_cob` = '$numero_cob',`bairro_cob` = '$bairro_cob',`cidade_cob` = '$cidade_cob',`estado_cob` = '$estado_cob',`cep_cob` = '$cep_cob',`email_cob` = '$email_cob',`endereco_ent` = '$endereco_ent',`numero_ent` = '$numero_ent',`bairro_ent` = '$bairro_ent',`cidade_ent` = '$cidade_ent',`estado_ent` = '$estado_ent',`cep_ent` = '$cep_ent',`email_ent` = '$email_ent',`obs` = '$obs',`usuario` = '$usuario',`senha` = '$senha',`data_nasc` = '$data_nasc',`mes_nasc` = '$mes_nasc',`salario` = '$salario',`limite` = '$limite',`empresa_trab` = '$empresa_trab',`tel_trab` = '$tel_trab',`nome1` = '$nome1',`cpf1` = '$cpf1',`nome2` = '$nome2',`cpf2` = '$cpf2',`nome3` = '$nome3',`cpf3` = '$cpf3',`status` = '$status' where `clientes`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao gravar dados");
mysql_close($conexao);


echo "Dados do cliente alterados no banco de dados com sucesso<br>";
?>

<body>
<table width="70%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><form name="form1" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="button" id="button" value="Voltar">
    </form>
    </td>
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
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
