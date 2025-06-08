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
<title>CADASTRO DE CORRESPONDENTES</title>
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
// dados do operador

$tipo_op = $_POST['tipo_op'];

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao = $_POST['orgao'];
$emissao = $_POST['emissao'];
$data_nasc = $_POST['data_nasc'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$endereco = $_POST['endereco'];
$numero  = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];

//estabelecimento a que pertence
$estab_pertence = $_POST['estab_pertence'];
$cidade_estab_pertence = $_POST['cidade_estab_pertence'];
$tel_estab_pertence = $_POST['tel_estab_pertence'];
$email_estab_pertence = $_POST['email_estab_pertence'];





//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];

//dados do estabelecimento

$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$frase_secreta = $_POST['frase_secreta'];
// Observações

$obs = $_POST['obs'];
$funcao = $_POST['funcao'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$comissao = $_POST['comissao'];



$comando = "insert into correspondentes(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,usuario,senha,funcao,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,tipo_op,banco,agencia,conta,comissao) values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$usuario','$senha','$funcao','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$tipo_op','$banco','$agencia','$conta','$comissao')";

mysql_query($comando,$conexao) or die("Erro ao gravar correspondente!");


echo "Correspondente cadastrado com sucesso!<br> Foi enviado um e-mail ao correspondente avisando ele que está cadastrado na Allcred Financeira e uma cópia a você <br><br>";

?>


<?
$sql = "SELECT * FROM correspondentes order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código do correspondente é: $linha[0]");
$nome = $linha[1];
$cpf = $linha[4];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$usuario = $linha[40];
$senha = $linha[41];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$email_estab_pertence = $linha[47];
$tel_estab_pertence = $linha[46];
$banco = $linha[48];
$agencia = $linha[49];
$conta = $linha[50];
$comissao = $linha[51];

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
	$mens   =  "Olá! você foi cadastrado como correspondente na Allcred Financeira!   \n";
	$mens  .=  "Seja muito bem vindo em nossa equipe! \n";
	$mens  .=  "Nosso site para você nos enviar as propostas www.allcredfinanceira.com.br \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";
	$mens  .=  "Banco: ".$banco."                                                    \n";
	$mens  .=  "Agência: ".$agencia."                                                    \n";
	$mens  .=  "Conta: ".$conta."                                                    \n";
	$mens  .=  "Comissão: ".$comissao."                                                    \n";
	$mens  .=  "Ligado ao estabelecimento: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";
	$mens  .=  "Seu Usuário: ".$usuario."                                                    \n";
	$mens  .=  "Sua Senha: ".$senha."                                                    \n\n";
	
	$mens  .=  "Operador que efetuou seu cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";


	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Correspondente cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="informe_estabelecimento.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Cadastrar outro Correspondente">
</form>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>