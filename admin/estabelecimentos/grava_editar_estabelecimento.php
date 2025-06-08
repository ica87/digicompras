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
error_reporting(E_ALL);
?>


		  
		  
		  <?
$codigo = $_POST['codigo'];
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
$telefone = $_POST['telefone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$site = $_POST['site'];
$proprietario = $_POST['proprietario'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
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
$operador_atendente = $_POST['operador_atendente'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$categoria = $_POST['categoria'];
$aliquota = $_POST['aliquota'];
$status = $_POST['status'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$plano = $_POST['plano'];
$atividade = $_POST['atividade'];


if($plano=="Básico"){
$valor = "125.00";
}
else{
$valor= "250.00";
}



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`estabelecimentos` set `codigo` = '$codigo',`razaosocial` = '$razaosocial',`nfantasia` = '$nfantasia',`cnpj` = '$cnpj',`inscr_est` = '$inscr_est',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cep` = '$cep',`cidade` = '$cidade',`estado` = '$estado',`telefone` = '$telefone',`fax` = '$fax',`email` = '$email',`site` = '$site',`proprietario` = '$proprietario',`cpf` = '$cpf',`rg` = '$rg',`obs` = '$obs'
,`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`operador_atendente` = '$operador_atendente',`banco` = '$banco',`agencia` = '$agencia',`conta` = '$conta',`categoria` = '$categoria',`aliquota` = '$aliquota',`status` = '$status',`usuario` = '$usuario',`senha` = '$senha',`plano` = '$plano',`valor` = '$valor',`atividade` = '$atividade' where `estabelecimentos`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse estabelecimento");


echo "Dados do estabelecimento alterados no banco de dados com sucesso<br>";
?>

<?
$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$codigo = $linha[0];
$nfantasia = $linha[2];
$telefone = $linha[12];
$dataalteracao = $linha[22];
$horaalteracao = $linha[23];
$operador_alterou = $linha[31];
$cel_operador_altrou = $linha[32];
$email_operador_alterou = $linha[33];
$estabelecimento_alterou = $linha[34];
$cidade_estabelecimento_alterou = $linha[35];
$tel_estabelecimento_alterou = $linha[36];
$email_estabelecimento_alterou = $linha[37];
$operador_atendente = $linha[41];
$banco = $linha[42];
$agencia = $linha[43];
$conta = $linha[44];
$categoria = $linha[45];


?>

<? } ?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nfantasia_dc = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! $nfantasia seus dados foram atualizados na $nfantasia_dc!   \n";
	$mens  .=  "Para realizar suas operações comerciais acesse $site \n\n";
	
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "Categoria: ".$categoria."                                                    \n";
	$mens  .=  "CNPJ: ".$cnpj."                                                    \n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "E-Mail: ".$email."                                                    \n\n";
	
	$mens  .=  "Banco: ".$banco."                                                    \n";
	$mens  .=  "Agência: ".$agencia."                                                    \n";
	$mens  .=  "Conta: ".$conta."                                                    \n\n";
	
	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";
	$mens  .=  "Operador que atende: ".$operador_atendente."                                                    \n";
	$mens  .=  "Operador que alterou: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular do operador: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail do operador: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Pestence ao estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "$nfantasia atualizado na $nfantasia_dc em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>


<body>
<table width="100%"  border="0">
  <tr>
    <td width="28%"><form action="contrato.php" method="post" name="form1" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      <input type="submit" name="Submit3" value="Contrato">
    </form></td>
    <td width="30%"><form name="form1" method="post" action="informe_nfantasia_para_edicao.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="42%">&nbsp;</td>
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
