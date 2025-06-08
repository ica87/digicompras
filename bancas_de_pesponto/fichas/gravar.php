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
error_reporting(E_ALL ^ E_NOTICE);
?>

		  
		  
		  <?
$codigo_cliente = $_POST['codigo_cliente'];		  
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$fone = $_POST['fone'];
$comprador = $_POST['comprador'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cep = $_POST['cep'];



//data de inserção
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$datacadastro = "$ano-$mes-$dia";
$hora = $_POST['hora'];

//dados da Ficha
$status = $_POST['status'];
$num_plano = $_POST['num_plano'];
$num_ficha = $_POST['num_ficha'];
$grupo = $_POST['grupo'];
$pespontador = $_POST['pespontador'];
$coladeira1 = $_POST['coladeira1'];
$coladeira2 = $_POST['coladeira2'];

$quant_pares = $_POST['quant_pares'];
$metal_entregue = "Não";
$modelo = $_POST['modelo'];
$nivel_dificuldade = $_POST['nivel_dificuldade'];
$valor_pespontador = $_POST['valor_pespontador'];
$total_pespontador = $_POST['total_pespontador'];
$valor_coladeira1 = $_POST['valor_coladeira1'];
$total_coladeira1 = $_POST['total_coladeira1'];
$valor_coladeira2 = $_POST['valor_coladeira2'];
$total_coladeira2 = $_POST['total_coladeira2'];
$valor_costura_manual = $_POST['valor_costura_manual'];
$total_costura_manual = $_POST['total_costura_manual'];
$valor_trice = $_POST['valor_trice'];
$total_trice = $_POST['total_trice'];

$total_ficha = $_POST['total_ficha'];
$valor_unit_empresa = $_POST['valor_unit_empresa'];
$total_ficha_empresa = $_POST['total_ficha_empresa'];
$saldo = $_POST['saldo'];
$obs = $_POST['obs'];
$caixa = $_POST['caixa'];


//dados do operador que registoru o orçamento
$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
//dados do establecimento que registrou o orçamento
$estabelecimento = $_POST['estabelecimento'];
$ciade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



?>


<?



$sql = "SELECT * FROM fichas where cnpj = '$cnpj' and num_ficha = '$num_ficha' and num_plano = '$num_plano'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);


$dia_cadastrado = $linha[1];
$mes_cadastrado = $linha[2];
$ano_cadastrado = $linha[3];
$hora_cadastrado = $linha[4];
$pespontador_cadastrado = $linha[10];
$coladeira1_cadastrado = $linha[13];
$coladeira2_cadastrado = $linha[16];


$cnpj_cadastrado = $linha[32];

$nfantasia_cadastrado = $linha[34];

$num_plano_cadastrado = $linha[6];

$num_ficha_cadastrado = $linha[7];

$grupo_cadastrado = $linha[8];

$operador_cadastrado = $linha[44];

}

if(empty($registros)){

echo "O sistema não identificou duplicidade nas informações.<br>";
}



if($registros>=1){



echo "ATENÇÃO!!!...<br><br> A ficha que você tentou inserir já existe! Confira abaixo!<br><br>



Cliente - $nfantasia_cadastrado <br><br>

CNPJ - $cnpj_cadastrado<br><br>

Nº do Plano - $num_plano_cadastrado<br><br>

Nº da Ficha - $num_ficha_cadastrado<br><br>

Grupo Responsável - $grupo_cadastrado<br><br>

Pespontador - $pespontador_cadastrado<br><br>

Coladeira1 - $coladeira1_cadastrado<br><br>

Coladeira2 - $coladeira2_cadastrado<br><br>


Cadastrado por $operador_cadastrado<br><br>

Em - $dia_cadastrado-$mes_cadastrado-$ano_cadastrado<br><br>

Hora - $hora_cadastrado<br><br>



";



}



else{


$comando = "insert into fichas(datacadastro,dia,mes,ano,hora,status,num_plano,num_ficha,grupo,quant_pares,pespontador,valor_pespontador,total_pespontador,coladeira1,valor_coladeira1,total_coladeira1,coladeira2,valor_coladeira2,total_coladeira2,total_ficha,modelo,nivel_dificuldade,metal_entregue,valor_unit_empresa,total_ficha_empresa,saldo,codigo_cliente,razaosocial,cnpj,nfantasia,endereco,numero,bairro,cidade,estado,fone,comprador,celular,email,cep,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,caixa,valor_costura_manual,total_costura_manual,valor_trice,total_trice)

values('$datacadastro','$dia','$mes','$ano','$hora','$status','$num_plano','$num_ficha','$grupo','$quant_pares','$pespontador','$valor_pespontador','$total_pespontador','$coladeira1','$valor_coladeira1','$total_coladeira1','$coladeira2','$valor_coladeira2','$total_coladeira2','$total_ficha','$modelo','$nivel_dificuldade','$metal_entregue','$valor_unit_empresa','$total_ficha_empresa','$saldo','$codigo_cliente','$razaosocial','$cnpj','$nfantasia','$endereco','$numero','$bairro','$cidade','$estado','$fone','$comprador','$celular','$email','$cep','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$caixa','$valor_costura_manual','$total_costura_manual','$valor_trice','$total_trice')";

mysql_query($comando,$conexao) or die("Erro ao gravar ficha no sistema!");

echo "Ficha gravada com sucesso!<br><br>";


?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Nova ficha gravada na $nfantasia_empresa!   \n";
	$mens  .=  " \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "Data: ".$dia."-".$mes."-".$ano."                                                    \n";
	$mens  .=  "Hora: ".$hora."                                                    \n\n";
	
	$mens  .=  "Nº do Plano: ".$num_plano."                                                    \n";
	$mens  .=  "Nº da ficha: ".$num_ficha."                                                    \n";
	$mens  .=  "Modelo: ".$modelo."                                                    \n";
	$mens  .=  "Metal Entregue? ".$metal_entregue."                                                    \n\n";
	
	$mens  .=  "Operador que efetuou o lançamento da ficha: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Ficha cadastrada em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	//$envia  =  mail($email_operador, "Ficha cadastrada em ".$datacadastro, $mens,"From:".$email_dest);
}
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
<form name="form2" method="post" action="historico_cliente.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
  <input type="submit" name="Submit" value="Voltar Hist&oacute;rico do Cliente">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
