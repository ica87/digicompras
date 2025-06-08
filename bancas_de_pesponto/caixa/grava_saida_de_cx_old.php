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

$mes = date('m');
$ano = date('Y');


			
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

$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];
$valor_saida = $_POST['valor_saida'];


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





?>

<?

$comando = "insert into cx_saidas(datacadastro,horacadastro,valor_saida,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,historico,mes,ano) values('$datacadastro','$horacadastro','$valor_saida','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$historico','$mes','$ano')";

mysql_query($comando,$conexao) or die("Erro ao dar saída no Caixa!... Tente novamente");

echo "Saída de caixa registrada com sucesso!<br><br> Obrigado por sua dedicação $operador";



$sql = "SELECT * FROM cx_saidas order by codigo desc limit 1";
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
$valor_saida = $linha[17];
$quitacao = $linha[18];



$operador = $linha[19];
$cel_operador = $linha[20];
$email_operador = $linha[21];
$estabelecimento = $linha[22];
$cidade_estabelecimento = $linha[23];
$tel_estabelecimento = $linha[24];
$email_estabelecimento = $linha[25];

$historico = $linha[35];
$horaabertura = $linha[36];


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
	$mens   =  "Olá Alessandra! Foi registrado uma saída no caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";

	$mens  .=  "Data da saída: ".$datacadastro."                                                       \n";	
	$mens  .=  "Valor da saída: ".$valor_saida."                                                    \n";
	$mens  .=  "hora da saída: ".$horacadastro."                                                       \n";
	$mens  .=  "histórico: ".$historico."                                                       \n\n";
	
	$mens  .=  "Operador que registrou a saída: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Saída de caixa na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>


<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="lancamento_saidas.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
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