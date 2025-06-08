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





$comando = "update `$linha[1]`.`propostas_veiculos` set `num_proposta` = '$num_proposta',`status_pagto_cliente` = '$status_pagto_cliente',

`data_pagto_cliente` = '$data_pagto_cliente',`hora_pagto_cliente` = '$hora_pagto_cliente',

`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',

`email_operador_alterou` = '$email_operador_alterou',`estab_alterou` = '$estabelecimento_alterou',

`cidade_estab_alterou` = '$cidade_estabelecimento_alterou',

`tel_estab_alterou` = '$tel_estabelecimento_alterou',

`email_estab_alterou` = '$email_estabelecimento_alterou',`dia_pagto_cliente` = '$dia_pagto_cliente',`mes_pagto_cliente` = '$mes_pagto_cliente',`ano_pagto_cliente` = '$ano_pagto_cliente' where `propostas_veiculos`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao confirmar pagto ao cliente referente a Proposta de veiculos Nº $num_proposta");





echo "Confirmado o pagto ao cliente referente a Proposta de veiculos Nº $num_proposta <br><br>";

?>





<?

$sql = "SELECT * FROM propostas_veiculos where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$num_proposta = $linha[0];

$dataproposta = $linha[1];

$horaproposta = $linha[2];

$mes_ano = $linha[3];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$tipo = $linha[7];

$tipo_proposta = $linha[8];

$nome = $linha[9];

$tipo_pessoa = $linha[10];

$data_nasc = $linha[11];

$cpf = $linha[12];

$rg = $linha[13];

$orgao = $linha[14];

$emissao = $linha[15];

$sexo = $linha[16];

$estadocivil = $linha[17];

$nacionalidade = $linha[18];

$quant_dependente = $linha[19];

$pai = $linha[20];

$mae = $linha[21];

$conjuge = $linha[22];

$data_nasc_conjuge = $linha[23];

$endereco = $linha[24];

$numero = $linha[25];

$bairro = $linha[26];

$complemento = $linha[27];

$cidade = $linha[28];

$estado = $linha[29];

$cep = $linha[30];

$correspondencia = $linha[31];

$tipo_residencia = $linha[32];

$valor_aluguel = $linha[33];

$tempo_residencia = $linha[34];

$telefone = $linha[35];

$celular = $linha[36];

$tipo_telefone = $linha[37];

$residencia_anterior = $linha[38];

$bairro_anterior = $linha[39];

$cidade_anterior = $linha[40];

$estado_anterior = $linha[41];

$tempo_residencia_anterior = $linha[42];

$email = $linha[43];

$empresa = $linha[44];

$porte_empresa = $linha[45];

$data_admissao = $linha[46];

$inicio_atividade = $linha[47];

$end_empresa = $linha[48];

$numero_empresa = $linha[49];

$complemento_empresa = $linha[50];

$bairro_empresa = $linha[51];

$cep_empresa = $linha[52];

$cidade_empresa = $linha[53];

$estado_empresa = $linha[54];

$telefone_empresa = $linha[55];

$cpt = $linha[56];

$serie = $linha[57];

$cargo = $linha[58];

$natureza_operacao = $linha[59];

$salario = $linha[60];

$atividade_principal = $linha[61];

$data_constituicao = $linha[62];

$cnpj = $linha[63];

$inscr_est = $linha[64];

$capital_social = $linha[65];

$atividade_anterior = $linha[66];

$data_admissao_anterior = $linha[67];

$data_saida = $linha[68];

$cargo_anterior = $linha[69];

$telefone_empresa_anterior = $linha[70];

$outras_rendas = $linha[71];

$ref_pessoal = $linha[72];

$tel_ref_pessoal = $linha[73];

$ref_pessoal2 = $linha[74];

$tel_ref_pessoal2 = $linha[75];

$ref_comercial = $linha[76];

$tel_ref_comercial = $linha[77];

$ref_banco = $linha[78];

$ref_agencia = $linha[79];

$ref_conta = $linha[80];

$ref_tipo_conta = $linha[81];

$ref_conta_desde = $linha[82];

$cartao_credito = $linha[83];

$automovel = $linha[84];

$valor_automoveis = $linha[85];

$residencia = $linha[86];

$valor_residencia = $linha[87];

$outras_propriedades = $linha[88];

$valor_outras_propriedades = $linha[89];

$veiculo = $linha[90];

$ano_modelo = $linha[91];

$renavam = $linha[92];

$num_portas = $linha[93];

$combustivel = $linha[94];

$placa = $linha[95];

$valor_venda = $linha[96];

$valor_entrada = $linha[97];

$tarifa_cadastro = $linha[98];

$valor_financiar = $linha[99];

$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$vencto_1_parcela = $linha[104];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terc = $linha[107];

$obs = $linha[108];

$operador = $linha[109];

$cel_operador = $linha[110];

$email_operador = $linha[111];

$estab_pertence = $linha[112];

$cidade_estab_pertence = $linha[113];

$tel_estab_pertence = $linha[114];

$email_estab_pertence = $linha[115];

$operador_alterou = $linha[116];

$operador = $linha[117];

$cel_operador_alterou = $linha[118];

$email_operador_alterou = $linha[119];

$estab_alterou = $linha[120];

$cidade_estab_alterou = $linha[121];

$tel_estab_alterou = $linha[122];

$email_estab_alterou = $linha[123];

$dataalteracao = $linha[124];

$horaalteracao = $linha[125];

$recebido = $linha[126];

$comissao_op = $linha[127];

$meses = $linha[128];





?>



<? } ?>





<?

//if($status_pagto_cliente=="Pago_ao_Cliente"){



//$comando = "insert into cx_saidas(datacadastro,horacadastro,num_proposta,nome_operador,estabelecimento_proposta,nome,cpf,valor,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,mes,ano) 



//values('$datacadastro','$horacadastro','$num_proposta','$nome_operador','$estabelecimento_proposta','$nome','$cpf','$valor','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$mes','$ano')";





//mysql_query($comando,$conexao);

//}

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




	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Pagto ao cliente efetuado em ".$data_pagto_cliente, $mens,"From:".$email_dest."\r\nBcc:".$email_operador_alterou_corres);



?>





<body>

<form name="form1" method="post" action="index.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
  <input type="submit" name="Submit2" value="Voltar">
</form>

</body>

</html>

<?

mysql_close($conexao);

?>

