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
$como_conheceu_escola = $_POST['como_conheceu_escola'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$estadocivil = $_POST['estadocivil'];
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
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao = $_POST['orgao'];
$emissao = $_POST['emissao'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
//DADOS DO RESPONSAVEL
$nome_resp = $_POST['nome_resp'];
$sexo_resp = $_POST['sexo_resp'];
$data_nasc_resp = $_POST['data_nasc_resp'];
$estadocivil_resp = $_POST['estadocivil_resp'];
$endereco_resp = $_POST['endereco_resp'];
$numero_resp = $_POST['numero_resp'];
$bairro_resp = $_POST['bairro_resp'];
$complemento_resp = $_POST['complemento_resp'];
$cidade_resp = $_POST['cidade_resp'];
$estado_resp = $_POST['estado_resp'];
$cep_resp = $_POST['cep_resp'];
$telefone_resp = $_POST['telefone_resp'];
$celular_resp = $_POST['celular_resp'];
$email_resp = $_POST['email_resp'];
$cpf_resp = $_POST['cpf_resp'];
$rg_resp = $_POST['rg_resp'];
$orgao_resp = $_POST['orgao_resp'];
$emissao_resp = $_POST['emissao_resp'];
$pai_resp = $_POST['pai_resp'];
$mae_resp = $_POST['mae_resp'];
$obs = $_POST['obs'];
//dados do operador que alterou
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que alterou
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$codigo',`como_conheceu_escola` = '$como_conheceu_escola',`nome` = '$nome',`sexo` = '$sexo',`data_nasc` = '$data_nasc',`estadocivil` = '$estadocivil',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`telefone` = '$telefone',`celular` = '$celular',`email` = '$email',`cpf` = '$cpf',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`pai` = '$pai',`mae` = '$mae',`nome_resp` = '$nome_resp',`sexo_resp` = '$sexo_resp',`data_nasc_resp` = '$data_nasc_resp',`estadocivil_resp` = '$estadocivil_resp',`endereco_resp` = '$endereco_resp',`numero_resp` = '$numero_resp',`bairro_resp` = '$bairro_resp',`complemento_resp` = '$complemento_resp',`cidade_resp` = '$cidade_resp',`estado_resp` = '$estado_resp',`cep_resp` = '$cep_resp',`telefone_resp` = '$telefone_resp',`celular_resp` = '$celular_resp',`email_resp` = '$email_resp',`cpf_resp` = '$cpf_resp',`rg_resp` = '$rg_resp',`orgao_resp` = '$orgao_resp',`emissao_resp` = '$emissao_resp',`pai_resp` = '$pai_resp',`mae_resp` = '$mae_resp',`obs` = '$obs',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `clientes`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse cadastro");


echo "Dados do aluno alterados no banco de dados com sucesso<br>";
?>

<?
$sql = "SELECT * FROM clientes where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$nome = $linha[4];
$dataalteracao = $linha[52];
$horaalteracao = $linha[53];

$operador_alterou = $linha[54];
$cel_operador_alterou = $linha[55];
$email_operador_alterou = $linha[56];

$estabelecimento_alterou = $linha[57];
$cidade_estabelecimento_alterou = $linha[58];
$tel_estabelecimento_alterou = $linha[59];
$email_estabelecimento_alterou = $linha[60];

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
	$mens   =  "Olá! seus dados foram atualizados na $nfantasia!   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Nome do Aluno: ".$nome."                                                       \n";
	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";
	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Aluno atualizado no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_operador_alterou, "Aluno atualizado no sistema em ".$dataalteracao, $mens,"From:".$email_dest);

?>


<?


			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>
<form name="form1" method="post" action="">
</form>
<form name="form2" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Voltar">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
