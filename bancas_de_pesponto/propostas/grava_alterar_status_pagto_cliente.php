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

$status_pagto_cliente = $_POST['status_pagto_cliente'];



$data_pagto_cliente = $_POST['data_pagto_cliente'];

$hora_pagto_cliente = $_POST['hora_pagto_cliente'];

// a função explode é usada para separar uma string em


$dataalteracao_pagto_cliente = $data_pagto_cliente;

$dataalteracao_pagto_cliente2 = explode("-", $dataalteracao_pagto_cliente);



$dia_pagto_cliente = $dataalteracao_pagto_cliente2[0];

$mes_pagto_cliente = $dataalteracao_pagto_cliente2[1];

$ano_pagto_cliente = $dataalteracao_pagto_cliente2[2];





//dados do operador que alterou





$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento que alterou



$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`status_pagto_cliente` = '$status_pagto_cliente',

`data_pagto_cliente` = '$data_pagto_cliente',`hora_pagto_cliente` = '$hora_pagto_cliente',

`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',

`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',

`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',

`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',

`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`dia_pagto_cliente` = '$dia_pagto_cliente',`mes_pagto_cliente` = '$mes_pagto_cliente',`ano_pagto_cliente` = '$ano_pagto_cliente' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao confirmar pagto ao cliente referente a Proposta Nº $num_proposta");





echo "Confirmado o pagto ao cliente referente a Proposta Nº $num_proposta <br><br>";

?>





<?

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$nome_operador = $linha[1];



$nome = $linha[4];

$cpf = $linha[7];

$status_pagto_cliente = $linha[103];

$data_pato_cliente = $linha[104];

$hora_pagto_cliente = $linha[105];

$valor_credito = $linha[25];

$valor_liberado = $linha[97];

$parcela = $linha[27];



$operador = $linha[32];

$email_operador = $linha[34];





$operador_alterou_corres = $linha[44];

$cel_operador_alterou_corres = $linha[45];

$email_operador_alterou_corres = $linha[46];

$estabelecimento_alterou_corres = $linha[47];

$cidade_estabelecimento_alterou_corres = $linha[48];

$tel_estabelecimento_alterou_corres = $linha[49];

$email_estabelecimento_alterou_corres = $linha[50];

$percentual_op = $linha[100];

$comissao_op = $linha[101];

$obs2 = $linha[102];





?>



<? } ?>





<?

if($status_pagto_cliente=="Pago_ao_Cliente"){



$comando = "insert into cx_saidas(datacadastro,horacadastro,num_proposta,nome_operador,estabelecimento_proposta,nome,cpf,valor,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,mes,ano) 



values('$datacadastro','$horacadastro','$num_proposta','$nome_operador','$estabelecimento_proposta','$nome','$cpf','$valor','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$mes','$ano')";





mysql_query($comando,$conexao);

}

?>





<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$email_allcred = $linha[14];



}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   'digicompras@digicompras.com.br';

	

	//PREPARA O PEDIDO

	$mens   =  "Olá! Pgto de cliente efetuado na Allcred Financeira!   \n\n";

	

	$mens  .=  "Nº da Proposta: ".$num_proposta."                                                       \n";	

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "CPF: ".$cpf."                                                    \n";

	$mens  .=  "Percentual de comissão: ".$percentual_op."%                                                  \n";

	$mens  .=  "Comissão em R$: ".$comissao_op."                                                    \n";

	$mens  .=  "Data da baixa: ".$data_pagto_cliente."                                                    \n";

	$mens  .=  "Hora da baixa: ".$hora_pagto_cliente."                                                    \n";

	$mens  .=  "Valor Solicitado: ".$valor_credito."                                                    \n";

	$mens  .=  "Valor Liberado: ".$valor_liberado."                                                    \n";

	$mens  .=  "Valor da Parcela: ".$parcela."                                                    \n";	

	$mens  .=  "STATUS do Correspondente/Operador: ".$status_pagto_cliente."                                  \n\n";

	

	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou_corres."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou_corres."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou_corres."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou_corres."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou_corres."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou_corres."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou_corres."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Pagto ao cliente efetuado em ".$data_pagto_cliente, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_alterou_corres);



?>





<body>

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

