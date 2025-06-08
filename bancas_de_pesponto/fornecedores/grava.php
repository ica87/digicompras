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
<title>GRAVA&Ccedil;&Atilde;O DE FORNECEDOR</title>
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
// dados do estabelecimento
$razaosocial = $_POST['razaosocial'];
$nfantasia = $_POST['nfantasia'];
$cnpj = $_POST['cnpj'];
$inscr_est = $_POST['inscr_est'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone  = $_POST['telefone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$site = $_POST['site'];
$proprietario = $_POST['proprietario'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$obs = $_POST['obs'];
$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];
$motivo_exclusao = $_POST['motivo_exclusao'];
$operador_atendente = $_POST['operador_atendente'];



$comando = "insert into fornecedores(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,motivo_exclusao,operador_atendente) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$motivo_exclusao','$operador_atendente')";

//$comando = "insert into estabelecimentos(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro')";

mysql_query($comando,$conexao) or die("Erro ao gravar estabelecimento!");


echo "Fornecedor cadastrado com sucesso!<br>";

?>


<?
$sql = "SELECT * FROM estabelecimentos order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código do estabelecimento é: $linha[0]");
$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$telefone = $linha[12];
$email = $linha[14];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$operador_atendente = $linha[41];
$operador = $linha[24];
$cel_operador = $linha[25];
$email_operador = $linha[26];
$estabelecimento = $linha[27];
$cidade_estabelecimento = $linha[28];
$tel_estabelecimento = $linha[29];
$email_estabelecimento = $linha[30];

?>

<? } ?>

<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$email_allcred = $linha[14];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_allcred;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Agora você é parceiro da Allcred Financeira!   \n";
	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "CNPJ: ".$cnpj."                                                    \n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "E-Mail: ".$email."                                                    \n";
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";
	$mens  .=  "Operador que atende: ".$operador_atendente."                                                    \n";
	$mens  .=  "Operador que cadastrou: ".$operador."                                                    \n";
	$mens  .=  "Celular do operador: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail do operador: ".$email_operador."                                                    \n";
	$mens  .=  "Pestence ao estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Estabelecimento cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="inserir.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Cadastrar outro Fornecedor">
</form>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>