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
<title>EDI&Ccedil;&Atilde;O DE CORRESPONDENTE</title>
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
error_reporting(E_ALL);


?>
		  
		  
		  <?
$estab_pertence = $_POST['estab_pertence'];

		  
$sql = "SELECT * FROM estabelecimentos where nfantasia = '$estab_pertence'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$cidade_estab_pertence = $linha[10];
$email_estab_pertence = $linha[14];
$tel_estab_pertence = $linha[12];
}
		  

$codigo = $_POST['codigo'];
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
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$tipo_op = $_POST['tipo_op'];
$funcao = $_POST['funcao'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$comissao = $_POST['comissao'];
$produto1 = $_POST['produto1'];
$produto2 = $_POST['produto2'];
$produto3 = $_POST['produto3'];
$produto4 = $_POST['produto4'];
$produto5 = $_POST['produto5'];
$produto6 = $_POST['produto6'];
$produto7 = $_POST['produto7'];
$produto8 = $_POST['produto8'];
$produto9 = $_POST['produto9'];
$produto10 = $_POST['produto10'];

$prazo1 = $_POST['prazo1'];
$prazo2 = $_POST['prazo2'];
$prazo3 = $_POST['prazo3'];
$prazo4 = $_POST['prazo4'];
$prazo5 = $_POST['prazo5'];
$prazo6 = $_POST['prazo6'];
$prazo7 = $_POST['prazo7'];
$prazo8 = $_POST['prazo8'];
$prazo9 = $_POST['prazo9'];
$prazo10 = $_POST['prazo10'];

$com1 = $_POST['com1'];
$com2 = $_POST['com2'];
$com3 = $_POST['com3'];
$com4 = $_POST['com4'];
$com5 = $_POST['com5'];
$com6 = $_POST['com6'];
$com7 = $_POST['com7'];
$com8 = $_POST['com8'];
$com9 = $_POST['com9'];
$com10 = $_POST['com10'];

$fator1 = $_POST['fator1'];
$fator2 = $_POST['fator2'];
$fator3 = $_POST['fator3'];




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`correspondentes` set `codigo` = '$codigo',`nome` = '$nome',`sexo` = '$sexo',`estadocivil` = '$estadocivil',`cpf` = '$cpf',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`data_nasc` = '$data_nasc',`pai` = '$pai',`mae` = '$mae',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`telefone` = '$telefone',`celular` = '$celular',`tipo_op`= '$tipo_op',
`email` = '$email',`obs` = '$obs',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`usuario` = '$usuario',`senha` = '$senha',`funcao` = '$funcao',`estab_pertence` = '$estab_pertence',`cidade_estab_pertence` = '$cidade_estab_pertence',`tel_estab_pertence` = '$tel_estab_pertence',`email_estab_pertence` = '$email_estab_pertence',`banco` = '$banco',`agencia` = '$agencia',`conta` = '$conta',`comissao` = '$comissao',`produto1` = '$produto1',`produto2` = '$produto2',`produto3` = '$produto3',`produto4` = '$produto4',`produto5` = '$produto5',`produto6` = '$produto6',`produto7` = '$produto7',`produto8` = '$produto8',`produto9` = '$produto9',`produto10` = '$produto10',`prazo1` = '$prazo1',`prazo2` = '$prazo2',`prazo3` = '$prazo3',`prazo4` = '$prazo4',`prazo5` = '$prazo5',`prazo6` = '$prazo6',`prazo7` = '$prazo7',`prazo8` = '$prazo8',`prazo9` = '$prazo9',`prazo10` = '$prazo10',`com1` = '$com1',`com2` = '$com2',`com3` = '$com3',`com4` = '$com4',`com5` = '$com5',`com6` = '$com6',`com7` = '$com7',`com8` = '$com8',`com9` = '$com9',`com10` = '$com10',`fator1` = '$fator1',`fator2` = '$fator2',`fator3` = '$fator3' where `correspondentes`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse correspondente");


echo "Dados do corespondente alterados no banco de dados com sucesso<br>";
?>

<?
$sql = "SELECT * FROM correspondentes where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$nome = $linha[1];
$cpf = $linha[4];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
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
	$mens   =  "Olá! seus dados de correspondente foram atualizados na Allcred Financeira!   \n";
	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";
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
	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n\n";
	
	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Correspondente atualizado no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>


<body>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
