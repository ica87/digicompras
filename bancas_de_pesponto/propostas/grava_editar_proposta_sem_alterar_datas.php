<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

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

//require("conect/conect.php"); or die("erro na requisi��o");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>



		  

		  

		  <?



// dados da proposta

$dataproposta = $_POST['dataproposta'];

$num_proposta = $_POST['num_proposta'];

$status = $_POST['status'];

$nome_operador = $_POST['nome_operador'];

$tipo = $_POST['tipo'];

$tipo_proposta = $_POST['tipo_proposta'];

$tabela = $_POST['tabela'];

$estabelecimento_proposta = $_POST['estabelecimento_proposta'];

$nome = $_POST['nome'];

$cpf = $_POST['cpf'];

$num_beneficio = $_POST['num_beneficio'];

$num_beneficio2 = $_POST['num_beneficio2'];

$num_beneficio3 = $_POST['num_beneficio3'];

$num_beneficio4 = $_POST['num_beneficio4'];

$data_nasc = $_POST['data_nasc'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$pai = $_POST['pai'];

$mae = $_POST['mae'];

$endereco = $_POST['endereco'];

$numero  = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$email = $_POST['email'];

$valor_credito = $_POST['valor_credito'];

$quant_parc = $_POST['quant_parc'];

$parcela = $_POST['parcela'];

$banco_pagto = $_POST['banco_pagto'];

$bco_operacao = $_POST['bco_operacao'];

$agencia = $_POST['agencia'];

$conta = $_POST['conta'];

$parc1 = $_POST['parc1'];

$banco1 = $_POST['banco1'];

$vencto1 = $_POST['vencto1'];

$compra1 = $_POST['compra1'];





$obs = $_POST['obs'];

$obs2 = $_POST['obs2'];

$parecer_credito = $_POST['obs2'];

$valor_total = $_POST['valor_total'];

$valor_liquido_cliente = $_POST['valor_liquido_cliente'];

$valor_a_receber = $_POST['valor_a_receber'];

$comissao_op = $_POST['comissao_op'];




$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`data_pagto_cliente` = '$dataproposta',`status` = '$status',`nome_operador` = '$nome_operador',`tipo` = '$tipo',`tipo_proposta` = '$tipo_proposta',`estabelecimento_proposta` = '$estabelecimento_proposta',`nome` = '$nome',`cpf` = '$cpf',`num_beneficio` = '$num_beneficio',`data_nasc` = '$data_nasc',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`pai` = '$pai',`mae` = '$mae',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`sexo` = '$sexo',`estadocivil` = '$estadocivil',`telefone` = '$telefone',`celular` = '$celular'

,`email` = '$email',`valor_credito` = '$valor_credito',`quant_parc` = '$quant_parc',`parcela` = '$parcela',`banco_pagto` = '$banco_pagto',`agencia` = '$agencia',`conta` = '$conta',`parc1` = '$parc1',`banco1` = '$banco1',`vencto1` = '$vencto1',`compra1` = '$compra1',`obs` = '$obs',`num_beneficio2` = '$num_beneficio2',`num_beneficio3` = '$num_beneficio3',`num_beneficio4` = '$num_beneficio4',`obs2` = '$obs2',`valor_total` = '$valor_total',`valor_liquido_cliente` = '$valor_liquido_cliente',`valor_a_receber` = '$valor_a_receber',`comissao_op` = '$comissao_op',`tabela` = '$tabela',`bco_operacao` = '$bco_operacao',`banco_pagto` = '$banco_pagto' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informa��es desse cadastro");


$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador_alterou = $_POST['operador_alterou'];



$comando = "insert into observacoes_parecer_credito(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$parecer_credito','$operador_alterou')";



mysql_query($comando,$conexao);





$comando = "insert into observacoes_de_propostas(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$obs','$operador_alterou')";



mysql_query($comando,$conexao);









echo "Dados do cliente alterados no banco de dados com sucesso<br>";

?>



<?

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$nome = $linha[4];

$cpf = $linha[7];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

$status = $linha[51];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$obs2 = $linha[102];



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

	$mens   =  "Ol�! os dados de sua proposta foram atualizados na Allcred Financeira!   \n";

	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "N� da Proposta: ".$num_proposta."                                                    \n";

	$mens  .=  "Data da altera��o: ".$dataalteracao."                                                    \n";

	$mens  .=  "Hora da altera��o: ".$horaalteracao."                                                    \n";

	$mens  .=  "STATUS: ".$status."                                                    \n";

	$mens  .=  "Parecer de Cr�dito: ".$obs2."                                                    \n\n";

	

	$mens  .=  "Operador que efetuou a altera��o: ".$operador_alterou."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Proposta atualizada no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);

	//$envia  =  mail($email_operador_alterou, "Proposta N� ".$num_proposta.", ".$operador_alterou."! Confira os dados no sistema!",$mens,"From:".$email_dest);



?>





<body>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>

