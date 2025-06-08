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
$codigo_contas_a_receber = $_POST['codigo_contas_a_receber'];

$codigo_aluno = $_POST['codigo_aluno'];
$nome_aluno = $_POST['nome_aluno'];

$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');
$nome = $_POST['nome'];
$nome_resp = $_POST['nome'];
$cpf_resp = $_POST['cpf_resp'];
$curso = $_POST['curso'];
$modulos = $_POST['modulos'];
$duracao = $_POST['duracao'];
$mensalidade = $_POST['mensalidade'];
$vencto = $_POST['vencto'];
$quant_parc = $_POST['quant_parc'];
$modo_pagto = $_POST['modo_pagto'];
$juros_diarios = $_POST['juros_diarios'];
$quitacao = $_POST['quitacao'];
$valor_recebido = $_POST['valor_recebido'];
$categoria_conta = $_POST['categoria_conta'];
$num_mensalidade = $_POST['num_mensalidade'];

//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$historico = $_POST['historico'];


// Observações

$obs = $_POST['obs'];
$mes = date('m');
$ano = date('Y');




?>

<?

$comando = "insert into cx_entradas(codigo_contas_a_receber,codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,historico,categoria_conta,num_mensalidade,mes,ano,nome_aluno) values('$codigo_contas_a_receber','$codigo_aluno','$dataalteracao','$horaalteracao','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','$quitacao','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$categoria_conta','$num_mensalidade','$mes','$ano','$nome_aluno')";

mysql_query($comando,$conexao) or die("Erro ao registrar a entrada no Caixa!... Tente novamente");

echo "Entrada no caixa registrada com sucesso!<br><br>";



$sql = "SELECT * FROM cx_entradas order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$horacadastro = $linha[4];
$nome = $linha[5];
$nome_resp = $linha[6];
$cpf_resp = $linha[7];
$obs = $linha[8];

//dados do curso
$curso = $linha[9];
$modulos = $linha[10];
$duracao = $linha[11];
$mensalidade = $linha[12];
$vencto = $linha[13];
$quant_parc = $linha[14];
$modo_pagto = $linha[15];
$juros_diarios = $linha[16];
$valor_recebido = $linha[17];
$quitacao = $linha[18];



$operador = $linha[19];
$cel_operador = $linha[20];
$email_operador = $linha[21];
$estabelecimento = $linha[22];
$cidade_estabelecimento = $linha[23];
$tel_estabelecimento = $linha[24];
$email_estabelecimento = $linha[25];

}
?>




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
	$mens   =  "Olá Alessandra! Foi registrado uma entrada no caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";
	
	$mens  .=  "Código do Aluno : ".$codigo_aluno."                                                    \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Nome do Responsável: ".$nome_resp."                                                       \n";
	$mens  .=  "Curso : ".$curso."                                                    \n";
	$mens  .=  "Duração : ".$duracao."                                                    \n";
	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";
	$mens  .=  "Vencimento: ".$vencto."                                                    \n";
	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";
	$mens  .=  "Quitação : ".$quitacao."                                                    \n";
	$mens  .=  "Observações: ".$obs."                                                       \n";
	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";
	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";
	
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Entrada no caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>





<?
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$codigo_contas_a_receber',`valor_recebido` = '$valor_recebido',`quitacao` = '$quitacao',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador',`cel_operador_alterou` = '$cel_operador',`email_operador_alterou` = '$email_operador',`estabelecimento_alterou` = '$estabelecimento',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento',`tel_estabelecimento_alterou` = '$tel_estabelecimento',`email_estabelecimento_alterou` = '$email_estabelecimento',`historico` = '$historico' where `contas_a_receber`. `codigo` = '$codigo_contas_a_receber' limit 1 ";
}

mysql_query($comando,$conexao);



?>





<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="verifica_mensalidades.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="codigo_aluno" type="hidden" id="codigo_aluno3" value="<? echo $codigo_aluno; ?>">
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="23%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
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