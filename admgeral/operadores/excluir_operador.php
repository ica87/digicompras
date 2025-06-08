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
-->
</style></head>

<body>
<?
require '../../conect/conect.php';

?>
</p>
<p>&nbsp;</p>

<?
// dados do cliente

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
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$dataexclusao = $_POST['dataexclusao'];
$horaexclusao = $_POST['horaexclusao'];


//dados do operador
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

//dados do estabelecimento

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];

// Observações

$obs = $_POST['obs'];
$motivo_exclusao = $_POST['motivo_exclusao'];
$usuario = $_POST['usuaraio'];
$senha = $_POST['senha'];
$funcao = $_POST['funcao'];



$comando = "insert into operadores_excluidos(codigo,nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,dataexclusao,horaexclusao,motivo_exclusao,usuaraio,senha,funcao) values('$codigo','$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$dataexclusao','$horaexclusao','$motivo_exclusao','$usuario','$senha','$funcao')";

mysql_query($comando,$conexao);



?>


<?
$sql = "SELECT * FROM operadores_excluidos order by num_exclusao desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?

$codigo = $linha[2];
$nome = $linha[3];
$cpf = $linha[6];
$dataexclusao = $linha[41];
$horaexclusao = $linha[42];
$operador_alterou = $linha[34];
$cel_operador_alterou = $linha[35];
$email_operador_alterou = $linha[36];
$estabelecimento_alterou = $linha[37];
$cidade_estabelecimento_alterou = $linha[38];
$tel_estabelecimento_alterou = $linha[39];
$email_estabelecimento_alterou = $linha[40];

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
	$mens   =  "Atenção! Operador excluído na $nfantasia!   \n";
	$mens  .=  "Código excluído: ".$codigo."                 \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";
	$mens  .=  "Data da exclusão: ".$dataexclusao."                                                    \n";
	$mens  .=  "Hora da exclusão: ".$horaexclusao."                                                    \n";
	$mens  .=  "Exclusão efetuada por: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular de quem efetuou a exclusão: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail de quem efetuou a exclusão: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Pertence ao estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade do estabelecimento: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone do estabelecimento: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail do estabelecimento: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Atenção! Operador excluído na $nfantasia! em ".$dataexclusao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<?
error_reporting(E_ALL);


//$cpf = $_POST['cpf'];

$comando = "delete from `operadores` where `operadores`. `cpf` = '$cpf' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir cadastro"); ?>

<? echo "Operador excluído com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
