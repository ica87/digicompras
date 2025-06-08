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
$operador_atende = $_POST['operador_atende'];
$status = $_POST['status'];



$comando = "insert into empresas_conveniadas(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,motivo_exclusao,operador_atende,status) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$motivo_exclusao','$operador_atende','$status')";

//$comando = "insert into estabelecimentos(razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro) values('$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro')";

mysql_query($comando,$conexao) or die("Erro ao gravar empresa conveniada!");


echo "Empresa conveniada cadastrada com sucesso!<br> Foi enviado um e-mail a empresa avisando-a que está cadastrada na Digicompras e uma cópia a você <br><br>";

?>


<?
$sql = "SELECT * FROM empresas_conveniadas order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código da empresa conveniada é: $linha[0]");
$codigo_empresa = $linha[0];
$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$telefone = $linha[12];
$email = $linha[14];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$operador_atende = $linha[41];
$operador = $linha[24];
$cel_operador = $linha[25];
$email_operador = $linha[26];
$estabelecimento = $linha[27];
$cidade_estabelecimento = $linha[28];
$tel_estabelecimento = $linha[29];
$email_estabelecimento = $linha[30];
$status = $linha[42];

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
	$mens   =  "Olá! Agora você é parceiro da $nfantasia_dc!   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "CNPJ: ".$cnpj."                                                    \n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "E-Mail: ".$email."                                                    \n";
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";
	$mens  .=  "Status: ".$status."                                                    \n";
	$mens  .=  "Operador que atende: ".$operador_atende."                                                    \n";
	$mens  .=  "Operador que cadastrou: ".$operador."                                                    \n";
	$mens  .=  "Celular do operador: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail do operador: ".$email_operador."                                                    \n";
	$mens  .=  "Pertence ao estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Empresa conveniada cadastrada no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>
<table width="100%"  border="0">
  <tr>
    <td><form action="contrato_ec.php" method="post" name="form1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo_empresa; ?>">
        <input type="submit" name="Submit3" value="Contrato">
    </form></td>
    <td><form name="form1" method="post" action="inserir.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Cadastrar outra Empresa">
    </form></td>
    <td><form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar ao menu principal">
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>