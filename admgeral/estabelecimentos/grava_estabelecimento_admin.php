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
?>
<?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'><br><br>"); ?>
<?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>



<?
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
$foto = $_FILES['foto']['name'];

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
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$aliquota = $_POST['aliquota'];
$categoria = $_POST['categoria'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$plano = $_POST['plano'];

if($plano=="Básico"){
$valor = "125.00";
}
else{
$valor= "250.00";
}

//Define o caminho da pasta/arquivo
$pasta = "$cnpj";
//Checa se o arquivo/pasta existe
if(file_exists($pasta)) { }
else {
mkdir("$cnpj");
chmod ("$cnpj",0755);

}



$uploaddir = '/$cnpj';
$uploadfile = $uploaddir. $_FILES['foto']['name'];

if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $_FILES['foto']['name'])){
//echo "Arquivo enviado com sucesso!";
} else {
echo "Foto do estabelecimento não foi enviada! Assim que estiver com a mesma em mãos, nos comunique para adicionar-mos!<br>";
}




$comando = "insert into estabelecimentos(foto,razaosocial,nfantasia,cnpj,inscr_est,endereco,numero,bairro,complemento,cep,cidade,estado,telefone,fax,email,site,proprietario,cpf,rg,obs,datacadastro,horacadastro,dataalteracao,horaalteracao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,motivo_exclusao,operador_atendente,banco,agencia,conta,aliquota,categoria,status,usuario,senha,plano,valor)
 values('$foto','$razaosocial','$nfantasia','$cnpj','$inscr_est','$endereco','$numero','$bairro','$complemento','$cep','$cidade','$estado','$telefone','$fax','$email','$site','$proprietario','$cpf','$rg','$obs','$datacadastro','$horacadastro','$dataalteracao','$horaalteracao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','$motivo_exclusao','$operador_atendente','$banco','$agencia','$conta','$aliquota','$categoria','Ativo','$usuario','$senha','$plano','$valor')";


mysql_query($comando,$conexao) or die("Erro ao gravar estabelecimento!");


echo "Estabelecimento cadastrado com sucesso!<br> Seja bem vindo a Digicompras! <br><br>";

?>


<?
$sql = "SELECT * FROM estabelecimentos order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("Código do seu estabelecimento é: $linha[0]");
$codigo_estab = $linha[0];
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
$banco = $linha[42];
$agencia = $linha[43];
$conta = $linha[44];
$categoria = $linha[45];
$usuario = $linha[48];
$senha = $linha[49];
$status = $linha[50];
$plano = $linha[51];
$valor = $linha[52];

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
	$mens   =  "Olá! $nfantasia Agora você é parceiro da $nfantasia_dc!   \n";
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
	
	$mens  .=  "Usuário: ".$usuario."                                                    \n";
	$mens  .=  "Senha: ".$senha."                                                    \n\n";
	
	
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
	$envia  =  mail($email_dest, "$nfantasia cadastrado na $nfantasia_dc em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>




<table width="100%"  border="0">
  <tr>
    <td><form action="contrato.php" method="post" name="form1" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo_estab; ?>">
      <input type="submit" name="Submit3" value="Contrato">
    </form></td>
    <td><form name="form1" method="post" action="../../admin/estabelecimentos/inserir_estabelecimento.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Cadastrar outro Estabelecimento">
    </form></td>
    <td><form name="form1" method="post" action="../../admin/estabelecimentos/menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
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