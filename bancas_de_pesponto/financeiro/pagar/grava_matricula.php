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
$codigo_aluno = $_POST['codigo'];

$como_conheceu_escola = $_POST['como_conheceu_escola'];

$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');
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




//dados do curso
$curso = $_POST['curso'];
$modulos = $_POST['modulos'];
$data_inicio = $_POST['data_inicio'];
$duracao = $_POST['duracao'];
$mensalidade = $_POST['mensalidade'];
$quant_parc = $_POST['quant_parc'];
$modo_pagto = $_POST['modo_pagto'];
$juros_diarios = bcmul($mensalidade,0.0013,2);
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$ano_atual = date('Y');

?>

<?

$comando = "insert into cursos(datacadastro,horacadastro,codigo_aluno,nome,sexo,data_nasc,estadocivil,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,cpf,rg,orgao,emissao,pai,mae,nome_resp,sexo_resp,data_nasc_resp,estadocivil_resp,endereco_resp,numero_resp,bairro_resp,complemento_resp,cidade_resp,estado_resp,cep_resp,telefone_resp,celular_resp,email_resp,cpf_resp,rg_resp,orgao_resp,emissao_resp,pai_resp,mae_resp,obs,curso,modulos,data_inicio,duracao,mensalidade,quant_parc,modo_pagto,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,status) values('$datacadastro','$horacadastro','$codigo_aluno','$nome','$sexo','$data_nasc','$estadocivil','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$cpf','$rg','$orgao','$emissao','$pai','$mae','$nome_resp','$sexo_resp','$data_nasc_resp','$estadocivil_resp','$endereco_resp','$numero_resp','$bairro_resp','$complemento_resp','$cidade_resp','$estado_resp','$cep_resp','$telefone_resp','$celular_resp','$email_resp','$cpf_resp','$rg_resp','$orgao_resp','$emissao_resp','$pai_resp','$mae_resp','$obs','$curso','$modulos','$data_inicio','$duracao','$mensalidade','$quant_parc','$modo_pagto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','Ativo')";

mysql_query($comando,$conexao) or die("Erro ao matricular aluno!");

echo "Aluno matriculado com sucesso no curso de $curso!<br> Foi enviado um e-mail ao cliente avisando ele que está matriculado na JALLF INFORMÁTICA e uma cópia a você <br><br>";


?>

<?
$sql = "SELECT * FROM cursos order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$num_matricula_curso = $linha[0];
$codigo_aluno = $linha[1];
$datacadastro = $linha[2];
$horacadastro = $linha[3];
$nome = $linha[4];
$nome_resp = $linha[24];
$cpf_resp = $linha[38];



$curso = $linha[45];
$modulos = $linha[46];
$data_inicio = $linha[47];
$duracao = $linha[48];
$mensalidade = $linha[49];
$quant_parc = $linha[50];
$modo_pagto = $linha[51];



$operador = $linha[52];
$cel_operador = $linha[53];
$email_operador = $linha[54];
$estabelecimento = $linha[55];
$cidade_estabelecimento = $linha[56];
$tel_estabelecimento = $linha[57];
$email_estabelecimento = $linha[58];

}
?>




<?

$vencto1 = "$dia"."/"."$mes"."/"."$ano";


?>
<?
if($quant_parc>=1){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto1','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','1')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 1º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto2 = bcadd($mes,1);
if($soma_vencto2>12){
$mes2 = "01";
}else{
$mes2 = $soma_vencto2;
}
if($soma_vencto2>12){
$ano2 = bcadd($ano,1);
}else{
$ano2 = $ano;
}
$vencto2 = "$dia"."/"."$mes2"."/"."$ano2";

if($quant_parc>=2){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto2','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','2')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto3 = bcadd($mes2,1);
if($soma_vencto3>12){
$mes3 = "01";
}else{
$mes3 = $soma_vencto3;
}
if($soma_vencto3>12){
$ano3 = bcadd($ano,1);
}else{
$ano3 = $ano2;
}
$vencto3 = "$dia"."/"."$mes3"."/"."$ano3";

if($quant_parc>=3){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto3','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','3')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto4 = bcadd($mes3,1);
if($soma_vencto4>12){
$mes4 = "01";
}else{
$mes4 = $soma_vencto4;
}
if($soma_vencto4>12){
$ano4 = bcadd($ano,1);
}else{
$ano4 = $ano3;
}
$vencto4 = "$dia"."/"."$mes4"."/"."$ano4";

if($quant_parc>=4){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto4','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','4')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto5 = bcadd($mes4,1);
if($soma_vencto5>12){
$mes5 = "01";
}else{
$mes5 = $soma_vencto5;
}
if($soma_vencto5>12){
$ano5 = bcadd($ano,1);
}else{
$ano5 = $ano4;
}
$vencto5 = "$dia"."/"."$mes5"."/"."$ano5";

if($quant_parc>=5){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto5','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','5')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto6 = bcadd($mes5,1);
if($soma_vencto6>12){
$mes6 = "01";
}else{
$mes6 = $soma_vencto6;
}
if($soma_vencto6>12){
$ano6 = bcadd($ano,1);
}else{
$ano6 = $ano5;
}
$vencto6 = "$dia"."/"."$mes6"."/"."$ano6";

if($quant_parc>=6){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto6','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','6')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto7 = bcadd($mes6,1);
if($soma_vencto7>12){
$mes7 = "01";
}else{
$mes7 = $soma_vencto7;
}
if($soma_vencto7>12){
$ano7 = bcadd($ano,1);
}else{
$ano7 = $ano6;
}
$vencto7 = "$dia"."/"."$mes7"."/"."$ano7";

if($quant_parc>=7){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto7','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','7')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto8 = bcadd($mes7,1);
if($soma_vencto8>12){
$mes8 = "01";
}else{
$mes8 = $soma_vencto8;
}
if($soma_vencto8>12){
$ano8 = bcadd($ano,1);
}else{
$ano8 = $ano7;
}
$vencto8 = "$dia"."/"."$mes8"."/"."$ano8";

if($quant_parc>=8){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto8','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','8')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto9 = bcadd($mes8,1);
if($soma_vencto9>12){
$mes9 = "01";
}else{
$mes9 = $soma_vencto9;
}
if($soma_vencto9>12){
$ano9 = bcadd($ano,1);
}else{
$ano9 = $ano8;
}
$vencto9 = "$dia"."/"."$mes9"."/"."$ano9";

if($quant_parc>=9){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto9','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','9')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto10 = bcadd($mes9,1);
if($soma_vencto10>12){
$mes10 = "01";
}else{
$mes10 = $soma_vencto10;
}
if($soma_vencto10>12){
$ano10 = bcadd($ano,1);
}else{
$ano10 = $ano9;
}
$vencto10 = "$dia"."/"."$mes10"."/"."$ano10";

if($quant_parc>=10){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto10','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','10')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto11 = bcadd($mes10,1);
if($soma_vencto11>12){
$mes11 = "01";
}else{
$mes11 = $soma_vencto11;
}
if($soma_vencto11>12){
$ano11 = bcadd($ano,1);
}else{
$ano11 = $ano10;
}
$vencto11 = "$dia"."/"."$mes11"."/"."$ano11";

if($quant_parc>=11){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto11','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','11')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto12 = bcadd($mes11,1);
if($soma_vencto12>12){
$mes12 = "01";
}else{
$mes12 = $soma_vencto12;
}
if($soma_vencto12>12){
$ano12 = bcadd($ano,1);
}else{
$ano12 = $ano11;
}
$vencto12 = "$dia"."/"."$mes12"."/"."$ano12";

if($quant_parc>=12){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto12','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','12')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto13 = bcadd($mes12,1);
if($soma_vencto13>12){
$mes13 = "01";
}else{
$mes13 = $soma_vencto13;
}
if($soma_vencto13>12){
$ano13 = bcadd($ano,1);
}else{
$ano13 = $ano12;
}
$vencto13 = "$dia"."/"."$mes13"."/"."$ano13";

if($quant_parc>=13){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto13','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','13')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto14 = bcadd($mes13,1);
if($soma_vencto14>12){
$mes14 = "01";
}else{
$mes14 = $soma_vencto14;
}
if($soma_vencto14>12){
$ano14 = bcadd($ano,1);
}else{
$ano14 = $ano13;
}
$vencto14 = "$dia"."/"."$mes14"."/"."$ano14";

if($quant_parc>=14){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto14','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','14')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto15 = bcadd($mes14,1);
if($soma_vencto15>12){
$mes15 = "01";
}else{
$mes15 = $soma_vencto15;
}
if($soma_vencto15>12){
$ano15 = bcadd($ano,1);
}else{
$ano15 = $ano14;
}
$vencto15 = "$dia"."/"."$mes15"."/"."$ano15";

if($quant_parc>=15){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto15','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','15')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto16 = bcadd($mes15,1);
if($soma_vencto16>12){
$mes16 = "01";
}else{
$mes16 = $soma_vencto16;
}
if($soma_vencto16>12){
$ano16 = bcadd($ano,1);
}else{
$ano16 = $ano15;
}
$vencto16 = "$dia"."/"."$mes16"."/"."$ano16";

if($quant_parc>=16){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto16','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','16')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto17 = bcadd($mes16,1);
if($soma_vencto17>12){
$mes17 = "01";
}else{
$mes17 = $soma_vencto17;
}
if($soma_vencto17>12){
$ano17 = bcadd($ano,1);
}else{
$ano17 = $ano16;
}
$vencto17 = "$dia"."/"."$mes17"."/"."$ano17";

if($quant_parc>=17){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto17','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','17')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

}
?>

<?

$soma_vencto18 = bcadd($mes17,1);
if($soma_vencto18>12){
$mes18 = "01";
}else{
$mes18 = $soma_vencto18;
}
if($soma_vencto18>12){
$ano18 = bcadd($ano,1);
}else{
$ano18 = $ano17;
}
$vencto18 = "$dia"."/"."$mes18"."/"."$ano18";

if($quant_parc>=18){
$comando = "insert into contas_a_receber(codigo_aluno,datacadastro,horacadastro,nome,nome_resp,cpf_resp,obs,curso,modulos,duracao,mensalidade,vencto,quant_parc,modo_pagto,juros_diarios,valor_recebido,quitacao,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dataalteracao,horaalteracao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou,num_mensalidade) values('$codigo_aluno','$datacadastro','$horacadastro','$nome','$nome_resp','$cpf_resp','$obs','$curso','$modulos','$duracao','$mensalidade','$vencto18','$quant_parc','$modo_pagto','$juros_diarios','$valor_recebido','Em Aberto','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dataalteracao','$horaalteracao','$operador_alterou','$cel_operador_alterou','$email_operador_alterou','$estabelecimento_alterou','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou','18')";

mysql_query($comando,$conexao) or die("Erro ao gravar a 2º mensalidade no contas a receber!");

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
	$mens   =  "Olá! você foi matriculado na $nfantasia   \n";
	$mens  .=  "Visite-nos $site \n";
	$mens  .=  "Seu código é : ".$codigo_aluno."                                                    \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Curso : ".$curso."                                                    \n";
	$mens  .=  "Duração : ".$duracao."                                                    \n";
	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";
	$mens  .=  "Data da matricula: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora da matricula: ".$horacadastro."                                                    \n";
	$mens  .=  "Data de início do curso : ".$data_inicio."                                                    \n";
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Aluno matriculado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_operador, "Aluno matriculado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest);

?>




<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="23%"><form action="contrato.php" method="post" name="form1" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit3" value="Imprimir Contrato">
      <input name="codigo" type="hidden" id="codigo3" value="<? echo $codigo_aluno; ?>">
    </form></td>
    <td width="3%">&nbsp;</td>
    <td width="20%"><form action="carne.php" method="post" name="form2" target="_blank">
      <input name="codigo_aluno" type="hidden" id="codigo_aluno2" value="<? echo $codigo_aluno; ?>">
      <input name="curso" type="hidden" id="codigo_aluno" value="<? echo $curso; ?>">
      <input type="submit" name="Submit5" value="Emitir Carn&ecirc;">
    </form></td>
    <td width="34%"><form name="form1" method="post" action="cadcli_insert.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Cadastrar outro Aluno">
    </form></td>
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
    <td><form action="folha_de_pagtos.php" method="post" name="form1" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit32" value="Folha de Pagamentos">
      <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
    </form></td>
    <td>&nbsp;</td>
    <td><form action="folha_de_presenca.php" method="post" name="form1" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit322" value="Folha de Presen&ccedil;a">
      <input name="codigo_aluno" type="hidden" id="codigo2" value="<? echo $codigo_aluno; ?>">
    </form></td>
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