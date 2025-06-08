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


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<p>&nbsp;</p>

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
$dataexclusao = $_POST['dataexclusao'];
$horaexclusao = $_POST['horaexclusao'];
$operador_atendente = $_POST['operador_atendente'];



$comando = "insert into estabelecimentos_excluidos(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,motivo_exclusao,dataexclusao,horaexclusao,operador_atendente) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$motivo_exclusao','$dataexclusao','$horaexclusao','$operador_atendente')";


mysql_query($comando,$conexao);



?>


<?
$sql = "SELECT * FROM estabelecimentos_excluidos order by num_exclusao desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?

$codigo = $linha[1];
$nfantasia = $linha[3];
$cnpj = $linha[4];
$dataexclusao = $linha[40];
$horaexclusao = $linha[41];
$operador_alterou = $linha[32];
$cel_operador_alterou = $linha[33];
$email_operador_alterou = $linha[34];
$estabelecimento_alterou = $linha[35];
$cidade_estabelecimento_alterou = $linha[36];
$tel_estabelecimento_alterou = $linha[37];
$email_estabelecimento_alterou = $linha[38];
$motivo_exclusao = $linha[39];
$operador_atendente = $linha[42];
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
	$mens   =  "ATENÇÃO! Estabelecimento excluído na Allcred Financeira!   \n";
	$mens  .=  "Código excluído: ".$codigo."                 \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                       \n";
	$mens  .=  "CNPJ: ".$cnpj."                                                    \n";
	$mens  .=  "Data da exclusão: ".$dataexclusao."                                                    \n";
	$mens  .=  "Hora da exclusão: ".$horaexclusao."                                                    \n";
	$mens  .=  "Operador que atende: ".$operador_atendente."                                                    \n";
	$mens  .=  "Operador que excluiu: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular de quem efetuou a exclusão: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail de quem efetuou a exclusão: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Pertence ao estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade do estabelecimento: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone do estabelecimento: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail do estabelecimento: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "ATENÇÃO! Estabelecimento excluído na Allcred empréstimos! em ".$dataexclusao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<?
error_reporting(E_ALL);


//$cpf = $_POST['cpf'];

$comando = "delete from `estabelecimentos` where `estabelecimentos`. `nfantasia` = '$nfantasia' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir estabelecimento"); ?>

<? echo "Estabelecimento excluído com sucesso:"; ?> 


<?
mysql_close($conexao);
?>

<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
