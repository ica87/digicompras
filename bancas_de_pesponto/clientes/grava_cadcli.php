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
</style></head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>
<?
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

//data do cadastro do cliente

$datacadastro = $_POST['datacadastro'];


$comando = "insert into clientes(razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email,comprador,fone,fax,celular,representante,condpagto,modopagto,transportadora,skype,endereco_cob,numero_cob,bairro_cob,cidade_cob,estado_cob,cep_cob,email_cob,endereco_ent,numero_ent,bairro_ent,cidade_ent,estado_ent,cep_ent,email_ent,obs,usuario,senha,datacadastro,data_nasc,mes_nasc,salario,limite,empresa_trab,tel_trab,nome1,cpf1,nome2,cpf2,nome3,cpf3,status) 
values('$razaosocial','$cnpj','$nfantasia','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$email','$comprador','$fone','$fax','$celular','$representante','$condpagto','$modopagto','$transportadora','$skype','$endereco_cob','$numero_cob','$bairro_cob','$cidade_cob','$estado_cob','$cep_cob','$email_cob','$endereco_ent','$numero_ent','$bairro_ent','$cidade_ent','$estado_ent','$cep_ent','$email_ent','$obs','$usuario','$senha','$datacadastro','$data_nasc','$mes_nasc','$salario','$limite','$empresa_trab','$tel_trab','$nome1','$cpf1','$nome2','$cpf2','$nome3','$cpf3','$status')";

mysql_query($comando,$conexao) or die("Erro ao gravar os dados no servidor!");


echo "Cliente cadastrado com sucesso!<br> Foi enviado um e-mail ao cliente avisando ele que está cadastrado no site e uma cópia a você";

?>


<?
$sql = "SELECT * FROM clientes order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código do cliente é: $linha[0]");
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

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
    
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! $nfantasia! você foi cadastrado em nosso site!   \n";
	$mens  .=  "Visite-nos $site para efetuar seus pedidos e ver nossos produtos \n";
	$mens  .=  "Empresa: ".$nfantasia."                                                       \n";
	$mens  .=  "Código do cliente: ".$codigo."                                                    \n";
	$mens  .=  "Data e hora do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Seu usuário: ".$usuario."                                                    \n";
	$mens  .=  "Sua senha: ".$senha."                                                    \n";
	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Olá $nfantasia você foi cadastrado no site $site em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="menu.php">
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
<?
mysql_close($conexao);
?>