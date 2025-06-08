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

<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style3 {font-size: 10px}

-->

</style>

</head>

<?



require '../../conect/conect.php';







$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>











      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <form name="form1" method="post" action="index.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Voltar">

</form>

<br>

      <br>

<table width="100%"  border="0">

              <tr>

                <td>

</td>

              </tr>

</table>            

      <?

$data_pagto_cliente = $_POST['data_pagto_cliente'];



			

$sql = "SELECT * FROM propostas_veiculos where data_pagto_cliente = '$data_pagto_cliente' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



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

//$operador_alterou = $linha[116];

//$operador = $linha[117];

//$cel_operador_alterou = $linha[118];

//$email_operador_alterou = $linha[119];

//$estab_alterou = $linha[120];

//$cidade_estab_alterou = $linha[121];

//$tel_estab_alterou = $linha[122];

//$email_estab_alterou = $linha[123];

$dataalteracao = $linha[124];

$horaalteracao = $linha[125];

$recebido = $linha[126];

$comissao_op = $linha[126];

$meses = $linha[127];

$status_pagto_cliente = $linha[159];



?>            

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td><div align="center" class="style3">Cliente</div></td>

          <td><div align="center" class="style3">CPF</div></td>

          <td width="3%"><div align="center" class="style3">Prazo</div></td>

          <td width="6%"><div align="center" class="style3">R$ Parcelas </div></td>

          <td><div align="center" class="style3">Valor Liberado</div></td>

          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>

          <td><div align="center" class="style3">R</div></td>

          <td><div align="center" class="style3">Status</div></td>

          <td><div align="center" class="style3">Operador</div></td>

          <td><div align="center" class="style3"> Banco opera&ccedil;&atilde;o </div></td>

        </tr>

		

        <tr>

          <td width="8%"><div align="center" class="style3">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

            <? echo $num_proposta; ?> </form></div></td>

          <td width="20%">

            <div align="center" class="style3"><? echo $nome; ?></div></td>

          <td width="11%"><div align="center" class="style3"><? echo $cpf; ?></div></td>

          <td><div align="center" class="style3"><? echo $num_parcelas; ?></div></td>

          <td><div align="center" class="style3"><? echo $valor_parcelas; ?></div></td>

          <td width="8%"><div align="center" class="style3"><? echo $valor_liberado; ?></div></td>

          <td width="7%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>

          <td width="9%"><div align="center" class="style3"><? echo $r; ?></div></td>

          <td width="11%"><div align="center" class="style3"><? echo $status_pagto_cliente; ?></div></td>

          <td width="6%"><div align="center"><? echo $operador_atendente; ?></div></td>

          <td width="11%"><div align="center" class="style3"><? echo $bco_operacao; ?></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>

<? } ?>

        

        <tr>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

        <tr>

          <td><span class="style3">Total Operador </span></td>

          <td>&nbsp;</td>

          <td><div align="center"></div></td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td><div align="center">

              <?

$sql = "select sum(valor_liberado) as total from propostas_veiculos where data_pagto_cliente = '$data_pagto_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </div></td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td><div align="center"></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center">

          </div></td>

</table>



<p>&nbsp;</p>







</body>

</html>

