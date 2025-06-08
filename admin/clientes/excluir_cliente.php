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
<title>Processamento de arquivos</title>
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
</style></head>

<body>
<?
require '../../conect/conect.php';

?>
</p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);


$codigo = $_POST['codigo'];

$sql = "SELECT * FROM clientes where codigo = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
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

}

$comando = "insert into clientes_excluidos(razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email,comprador,fone,fax,celular,representante,condpagto,modopagto,transportadora,redespacho,endereco_cob,numero_cob,bairro_cob,cidade_cob,estado_cob,cep_cob,email_cob,endereco_ent,numero_ent,bairro_ent,cidade_ent,estado_ent,cep_ent,email_ent,obs,usuario,senha,datacadastro) values('$razaosocial','$cnpj','$nfantasia','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$email','$comprador','$fone','$fax','$celular','$representante','$condpagto','$modopagto','$transportadora','$redespacho','$endereco_cob','$numero_cob','$bairro_cob','$cidade_cob','$estado_cob','$cep_cob','$email_cob','$endereco_ent','$numero_ent','$bairro_ent','$cidade_ent','$estado_ent','$cep_ent','$email_ent','$obs','$usuario','$senha','$datacadastro')";

mysql_query($comando,$conexao) or die("");



$comando = "delete from `clientes` where `clientes`. `codigo` = '$codigo' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir cliente"); ?>

<? echo "Cliente excluído com sucesso:"; ?> 

<?
$hoje = date(d-m-Y);
?>

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
	$mens   =  "Atenção! Cliente excluído em nosso site!   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Empresa: ".$nfantasia."                                                       \n";
	$mens  .=  "Código do cliente: ".$codigo."                                                    \n";
	$mens  .=  "Data e hora do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Seu usuário: ".$usuario."                                                    \n";
	$mens  .=  "Sua senha: ".$senha."                                                    \n";
	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Cliente excluido no site em ".$hoje, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>



<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="selecione_codigo_do_cliente_para_exclusao.php">
  <input type="submit" name="Submit" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<p>&nbsp;</p>
</body>
</html>
