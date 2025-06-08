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

$senha = $_POST['senha'];
$status = $_POST['status'];

// Observações

$obs = $_POST['obs'];
$funcao = $_POST['funcao'];
$operador_atende = $_POST['operador_atende'];
$salario = $_POST['salario'];
$calculo = bcdiv($salario, 3, 2);
if($calculo<=199.99){
$limite = 200.00;
}else{
$limite = $calculo;
}


$comando = "insert into usuarios(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,senha,funcao,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,status,salario,limite,operador_atende) values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$senha','$funcao','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$status','$salario','$limite','$operador_atende')";

mysql_query($comando,$conexao) or die("Erro ao gravar usuário!");


echo "Usuário cadastrado com sucesso!<br> Foi enviado um e-mail ao usuário avisando ele que está cadastrado na Digicompras e uma cópia a você! <br><br>Imprima essa tela e entregue ao usuário pois ele já pode começar a utilizar os nossos serviços com o Nº do cartão<br><br>O cartão Digicompras será entregue no endereço do cadastro do usuário!<br><br>";

?>


<?
$sql = "SELECT * FROM usuarios order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Nº do cartão do usuário: $linha[0]<br>");
printf("Nome do usuário: $linha[1]<br>");
printf("Senha: $linha[40]<br>");
printf("Status: $linha[46]<br>");
printf("Salário Informado: R$ $linha[47]<br>");
printf("Limite baseado no salário informado: R$ $linha[48]<br><br>");



$codigo = $linha[0];
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
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$email_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[44];
$senha = $linha[40];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];



?>

<? } ?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];


}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! $nome você foi cadastrado como usuário do cartão $nfantasia!   \n";
	$mens  .=  "Seja muito bem vindo a Digicompras! \n";
	$mens  .=  "Nosso site para você visualizar seu saldo e nos enviar sugestoes $site \n\n";
	$mens  .=  "Nº do seu cartão: ".$codigo."                                                       \n";	
	$mens  .=  "Status do seu cartão: ".$status."                                                       \n";	
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Sua senha: ".$senha."                                                    \n";
	$mens  .=  "Salário Informado: ".$salario."                                                    \n";
	$mens  .=  "Seu limite no cartão: ".$limite."                                                    \n";
	$mens  .=  "Empresa conveniada: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n\n";
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Empresa conveniada: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estab_pertence."                                                    \n";


	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "$nome cadastrado(a) na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="informe_empresa.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Cadastrar outro Usu&aacute;rio">
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