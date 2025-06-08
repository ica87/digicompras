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

error_reporting(E_ALL);



?>



		  

		  

		  <?



// dados da proposta

$num_proposta = $_POST['num_proposta'];

$status = $_POST['status'];

$dia_alteracao_status = $_POST['dia_alteracao_status'];

$mes_alteracao_status = $_POST['mes_alteracao_status'];

$ano_alteracao_status = $_POST['ano_alteracao_status'];

$cpf = $_POST['cpf'];

$bco_operacao = $_POST['bco_operacao'];

$valor_venda = $_POST['valor_venda'];

$valor_financiar = $_POST['valor_financiar'];

$valor_liberado = $_POST['valor_liberado'];

$valor_parcelas = $_POST['valor_parcelas'];

$coeficiente = $_POST['coeficiente'];

$comissao_empresa = $_POST['comissao_empresa'];

$percentual = $_POST['percentual'];

$percentual_op = $_POST['percentual_op'];

$comissao_op = $_POST['comissao_op'];

$comissao_empresa = $_POST['comissao_empresa'];

$obs2 = $_POST['obs2'];





// a função explode é usada para separar uma string em

// uma matriz de strings usando um delimitador








//dados do operador que alterou





$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento que alterou



$estab_alterou = $_POST['estabelecimento_alterou'];

$cidade_estab_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estab_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estab_alterou = $_POST['email_estabelecimento_alterou'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas_veiculos` set `num_proposta` = '$num_proposta',`status` = '$status',`dia_alteracao_status` = '$dia_alteracao_status',`mes_alteracao_status` = '$mes_alteracao_status',`ano_alteracao_status` = '$ano_alteracao_status',`cpf` = '$cpf',`bco_operacao` = '$bco_operacao',`valor_venda` = '$valor_venda',`valor_financiar` = '$valor_financiar',`valor_liberado` = '$valor_liberado',`valor_parcelas` = '$valor_parcelas',`coeficiente` = '$coeficiente',`comissao_empresa` = '$comissao_empresa',`percentual` = '$percentual',`percentual_op` = '$percentual_op',`comissao_op` = '$comissao_op',`comissao_empresa` = '$comissao_empresa',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',
`email_operador_alterou` = '$email_operador_alterou',`estab_alterou` = '$estab_alterou',`cidade_estab_alterou` = '$cidade_estab_alterou',`tel_estab_alterou` = '$tel_estab_alterou',`email_estab_alterou` = '$email_estab_alterou' where `propostas_veiculos`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse cadastro");


$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];



$comando = "insert into observacoes_parecer_credito_veiculos(num_proposta,cpf,data,hora,obs,operador) values('$num_proposta','$cpf','$dataalteracao','$horaalteracao','$obs2','$operador_alterou')";



mysql_query($comando,$conexao);







echo "Status da Proposta alterado com sucesso<br><br>";

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

$valor_credito = $linha[25];

$valor_liberado = $linha[97];

$parcela = $linha[27];



$operador = $linha[32];

$email_operador = $linha[34];





$status = $linha[51];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$percentual_op = $linha[100];

$comissao_op = $linha[101];

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

	$mens   =  "Olá! os dados de sua proposta foram atualizados na Allcred Financeira!   \n";

	$mens  .=  "Visite-nos www.allcredfinanceira.com.br \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Nº da Proposta: ".$num_proposta."                                                    \n";

	$mens  .=  "Percentual de comissão: ".$percentual_op."%                                                  \n";

	$mens  .=  "Comissão em R$: ".$comissao_op."                                                    \n";

	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";

	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";

	$mens  .=  "Valor Solicitado: ".$valor_credito."                                                    \n";

	$mens  .=  "Valor Liberado: ".$valor_liberado."                                                    \n";

	$mens  .=  "Valor da Parcela: ".$parcela."                                                    \n";	

	$mens  .=  "STATUS: ".$status."                                                    \n";

	$mens  .=  "Parecer de Crédito: ".$obs2."                                                    \n\n";

	

	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Proposta atualizada no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_alterou);

	$envia  =  mail($email_operador, "Proposta Nº ".$num_proposta.", ".$operador."! Confira os dados no sistema!",$mens,"From:".$email_dest);



?>





<body>

<form name="form1" method="post" action="index.php">

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

