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

require '../../conect/conect.php';

			
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
<?
// dados do aluno
$como_conheceu_escola = $_POST['como_conheceu_escola'];

$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$estadocivil = $_POST['estadocivil'];
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
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao = $_POST['orgao'];
$emissao = $_POST['emissao'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$obs = $_POST['obs'];



//dados do responsavel
$nome_resp = $_POST['nome_resp'];
if($nome_resp==""){
$nome_resp = $nome;
$sexo_resp = $sexo;
$data_nasc_resp = $data_nasc;
$estadocivil_resp = $estadocivil;
$endereco_resp = $endereco;
$numero_resp  = $numero;
$bairro_resp = $bairro;
$complemento_resp = $complemento;
$cidade_resp = $cidade;
$estado_resp = $estado;
$telefone_resp = $telefone;
$celular_resp = $celular;
$email_resp = $email;
$cep_resp = $cep;
$cpf_resp = $cpf;
$rg_resp = $rg;
$orgao_resp = $orgao;
$emissao_resp = $emissao;
$pai_resp = $pai;
$mae_resp = $mae;
$obs = $_POST['obs'];

}else{
$nome_resp = $_POST['nome_resp'];
$sexo_resp = $_POST['sexo_resp'];
$data_nasc_resp = $_POST['data_nasc_resp'];
$estadocivil_resp = $_POST['estadocivil_resp'];
$endereco_resp = $_POST['endereco_resp'];
$numero_resp  = $_POST['numero_resp'];
$bairro_resp = $_POST['bairro_resp'];
$complemento_resp = $_POST['complemento_resp'];
$cidade_resp = $_POST['cidade_resp'];
$estado_resp = $_POST['estado_resp'];
$telefone_resp = $_POST['telefone_resp'];
$celular_resp = $_POST['celular_resp'];
$email_resp = $_POST['email_resp'];
$cep_resp = $_POST['cep_resp'];
$cpf_resp = $_POST['cpf_resp'];
$rg_resp = $_POST['rg_resp'];
$orgao_resp = $_POST['orgao_resp'];
$emissao_resp = $_POST['emissao_resp'];
$pai_resp = $_POST['pai_resp'];
$mae_resp = $_POST['mae_resp'];
$obs = $_POST['obs'];

}

//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];

//dados do estabelecimento

$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



// Observações

$obs = $_POST['obs'];


$comando = "insert into clientes(como_conheceu_escola,datacadastro,horacadastro,nome,sexo,data_nasc,estadocivil,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,cpf,rg,orgao,emissao,pai,mae,nome_resp,sexo_resp,data_nasc_resp,estadocivil_resp,endereco_resp,numero_resp,bairro_resp,complemento_resp,cidade_resp,estado_resp,cep_resp,telefone_resp,celular_resp,email_resp,cpf_resp,rg_resp,orgao_resp,emissao_resp,pai_resp,mae_resp,obs,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou) values('$como_conheceu_escola','$datacadastro','$horacadastro','$nome','$sexo','$data_nasc','$estadocivil','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$cpf','$rg','$orgao','$emissao','$pai','$mae','$nome_resp','$sexo_resp','$data_nasc_resp','$estadocivil_resp','$endereco_resp','$numero_resp','$bairro_resp','$complemento_resp','$cidade_resp','$estado_resp','$cep_resp','$telefone_resp','$celular_resp','$email_resp','$cpf_resp','$rg_resp','$orgao_resp','$emissao_resp','$pai_resp','$mae_resp','$obs','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou')";

mysql_query($comando,$conexao) or die("Erro ao gravar cadastro de aluno!");

echo "Aluno cadastrado com sucesso!<br> Foi enviado um e-mail ao cliente avisando ele que está cadastrado na JALLF INFORMÁTICA e uma cópia a você <br><br>";

?>


<?
$sql = "SELECT * FROM clientes order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("O Código do aluno é: $linha[0]");
$codigo = $linha[0];
$como_conheceu_escola = $linha[3];
$nome = $linha[4];
$datacadastro = $linha[1];
$horacadastro = $linha[2];
$operador = $linha[45];
$cel_operador = $linha[46];
$email_operador = $linha[47];
$estabelecimento = $linha[48];
$cidade_estabelecimento = $linha[49];
$tel_estabelecimento = $linha[50];
$email_estabelecimento = $linha[51];
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
	$mens   =  "Olá! você foi cadastrado na $nfantasia   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Como conheceu a escola?: ".$como_conheceu_escola."                                                       \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Seu código é : ".$codigo."                                                    \n";
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Aluno cadastrado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_operador, "Aluno codigo $codigo cadastrado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest);

?>




<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="16%"><form name="form1" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="25%"><form name="form1" method="post" action="informe_curso.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit4" value="Efetuar matricula em Curso">
      <input name="codigo" type="hidden" id="codigo4" value="<? echo $codigo; ?>">
    </form></td>
    <td width="3%">&nbsp;</td>
    <td width="52%"><form name="form1" method="post" action="cadcli_insert.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Cadastrar outro Aluno">
    </form></td>
    <td width="2%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>