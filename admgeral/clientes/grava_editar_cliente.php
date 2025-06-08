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
$redespacho = $_POST['redespacho'];

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

//usuario e senha

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$codigo',`razaosocial` = '$razaosocial',`cnpj` = '$cnpj',`nfantasia` = '$nfantasia',`inscr_est` = '$inscr_est',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`cidade` = '$cidade',`estado` = '$estado',`email` = '$email',`comprador` = '$comprador',`fone` = '$fone',`fax` = '$fax',`celular` = '$celular',`representante` = '$representante',`condpagto` = '$condpagto',`modopagto` = '$modopagto',`transportadora` = '$transportadora',`redespacho` = '$redespacho',
`endereco_cob` = '$endereco_cob',`numero_cob` = '$numero_cob',`bairro_cob` = '$bairro_cob',`cidade_cob` = '$cidade_cob',`estado_cob` = '$estado_cob',`cep_cob` = '$cep_cob',`email_cob` = '$email_cob',`endereco_ent` = '$endereco_ent',`numero_ent` = '$numero_ent',`bairro_ent` = '$bairro_ent',`cidade_ent` = '$cidade_ent',`estado_ent` = '$estado_ent',`cep_ent` = '$cep_ent',`email_ent` = '$email_ent',`obs` = '$obs',`usuario` = '$usuario',`senha` = '$senha' where `clientes`. `codigo2` = '$codigo2' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao gravar dados");
mysql_close($conexao);


echo "Dados do cliente alterados no banco de dados com sucesso<br><br>";
?>


<?
$sql = "SELECT * FROM clientes where codigo = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código do cliente alterado é: $linha[0]");
$codigo = $linha[0];
$nfantasia = $linha[3];
$datacadastro = $linha[38];
$usuario = $linha[36];
$senha = $linha[37];
?>

<? } ?>

<?
 $sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$site = $linha[13];
$email_empresa = $linha[14];

}
   
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! você foi cadastrado em nosso site!   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Empresa: ".$nfantasia."                                                       \n";
	$mens  .=  "Código do cliente: ".$codigo."                                                    \n";
	$mens  .=  "Data e hora do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Seu usuário: ".$usuario."                                                    \n";
	$mens  .=  "Sua senha: ".$senha."                                                    \n";
	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Cliente cadastrado no site em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>



<body>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
</body>
</html>
