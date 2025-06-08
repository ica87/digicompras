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
<title>RESULTADO DA EDI&Ccedil;&Atilde;O DE EMPRESA CONVENIADA</title>
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
$operador_atende = $_POST['operador_atende'];
$status = $_POST['status'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`empresas_conveniadas` set `codigo` = '$codigo',`razaosocial` = '$razaosocial',`nfantasia` = '$nfantasia',`cnpj` = '$cnpj',`inscr_est` = '$inscr_est',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cep` = '$cep',`cidade` = '$cidade',`estado` = '$estado',`telefone` = '$telefone',`fax` = '$fax',`email` = '$email',`site` = '$site',`proprietario` = '$proprietario',`cpf` = '$cpf',`rg` = '$rg',`obs` = '$obs'
,`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`operador_atende` = '$operador_atende',`status` = '$status' where `empresas_conveniadas`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa empresa conveniada");


echo "Dados da empresa conveniada alterados no banco de dados com sucesso<br>";
?>

<?
$sql = "SELECT * FROM empresas_conveniadas where codigo = '$codigo' limit 1";
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
	$mens   =  "Olá! seus dados foram atualizados na $nfantasia_dc!   \n";
	$mens  .=  "Visite-nos $site para realizar suas operações comerciais \n\n";
	$mens  .=  "Código: ".$codigo."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "Status: ".$status."                                                    \n\n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";
	$mens  .=  "Operador que atende: ".$operador_atendente."                                                    \n";
	$mens  .=  "Operador que atualizou: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular do operador: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail do operador: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento a que pertence: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";


	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "$nfantasia atualizado na $nfantasia_dc em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>


<body>
<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


?>
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form><br><br>

 <form name="form2" method="post" action="inativar_cartoes.php">
   <br>
   <table width="100%"  border="0">
     <tr>
       <td> </td>
     </tr>
   </table>
   <?
if($status=="Inativo"){
Printf("Você definiu o status dessa empresa conveniada como Inativo, deve inativar imediatamente todos os cartões dos usuário agora!<br><br> CLIQUE EM INATIVAR TODOS OS CARTÕES");
?>
   <input type="submit" name="Submit" value="Inativar todos os cart&otilde;es">
<?

	
$sql = "SELECT * FROM usuarios where estab_pertence = '$nfantasia' order by codigo asc";
$res = mysql_query($sql);
$reg = 0;

while($linha=mysql_fetch_row($res)) {

$codigo_usuario = $linha[0];
$nome = $linha[1];
$status = $linha[46];


?>
   <table width="100%"  border="0">
       <tr bgcolor="#<? echo $cor ?>">
       <td><div align="center">N&ordm; do cart&atilde;o </div></td>
       <td><div align="center">Status</div></td>
       <td><div align="center">Usu&aacute;rio</div></td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td width="15%"><div align="center">
           <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
           <? echo $codigo_usuario; ?>
           <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
       </div></td>
       <td width="19%"><div align="center"><? echo $status;?>
         
           <input name="status" type="hidden" id="status" value="<? echo Inativo; ?>">
       </div></td>
       <td width="31%">
         <div align="center"><? echo $nome;?> </div></td>
       <td width="35%"></td>
   </table>
          <?
}
$total = count($codigo_usuario); 
for($i = 0; $i < $total; $i++){ 
$status = $_POST['status'][$i]; 
$id = $codigo_usuario[$i]; 
}

?>
          <? echo "Total de usuários do cartão Digicompras na empresa $id"; ?>
 </form>
 <? } ?>
 
</body>
</html>
<?
mysql_close($conexao);
?>
