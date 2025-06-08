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

<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';



$num_proposta = $_POST['num_proposta'];





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>





<?





$sql = "SELECT * FROM logo";

$res = mysql_query($sql);



$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;



printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); ?>

<?

if($reg==1){

echo "</tr>";

$reg=0;

}

}

?>











<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$nome_op = $linha[1];

$celular_op = $linha[19];

$email_op = $linha[20];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



}

?>

<?

$sql = "SELECT * FROM propostas_veiculos where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

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

$tel_contador = $linha[65];

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

$cel_operador_alterou = $linha[117];

$email_operador_alterou = $linha[118];

$estab_alterou = $linha[119];

$cidade_estab_alterou = $linha[120];

$tel_estab_alterou = $linha[121];

$email_estab_alterou = $linha[122];

$dataalteracao = $linha[123];

$horaalteracao = $linha[124];

$recebido = $linha[125];

$comissao_op = $linha[126];

$meses = $linha[127];

$trinta = $linha[128];

$quarenta_cinco = $linha[129];

$meses_residencia = $linha[130];

$ddd_tel = $linha[131];

$ddd_cel = $linha[132];

$ddd_tel_empresa = $linha[133];

$ddd_tel_contador = $linha[134];

$ddd_tel_empresa_anterior = $linha[135];

$ddd_ref_pessoal = $linha[136];

$ddd_ref_pessoal2 = $linha[137];

$ddd_ref_comercial = $linha[138];

$digito_agencia = $linha[139];

$digito_conta = $linha[140];

$ano_ref_conta = $linha[141];

$modelo = $linha[142];

$estado_emissao = $linha[143];

$mista = $linha[144];

$parecer_credito = $linha[145];

$bem = $linha[146];



}



?>

<form name="form1" method="post" action="grava_editar_proposta.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">FICHA PROPOSTA <? echo $num_proposta; ?></font></strong></font></div></td>
    </tr>

    <tr>

      <td width="16%"><font size="1">Operador</font></td>

      <td width="31%"><strong><font color="#0000FF" size="1"><? echo $operador_atendente; ?>

            <input name="operador_atendente" type="hidden" id="operador_atendente" value="<? echo $operador_atendente; ?>">

</font></strong></td>

      <td width="22%"><font size="1">Data Proposta</font></td>

      <td width="31%"><font size="1"><strong><font color="#0000FF"><? echo $dataproposta; ?></font></strong> hora da proposta <strong><font color="#0000FF"><? echo $horaproposta; ?></font></strong> </font></td>
    </tr>

    <tr>

      <td><font size="1">Estabelecimento</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $estabelecimento_proposta; ?>

</font></strong></td>

      <td><font size="1">Tipo proposta</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tipo_proposta; ?>

      </font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Perfil do cliente </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tipo; ?>

</font></strong></td>

      <td><font size="1">Status</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $status; ?>

</font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">DADOS DO CLIENTE </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Nome</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $nome; ?></font></strong></td>

      <td><font size="1">Tipo de Pessoa </font></td>

      <td><font size="1"><strong><font color="#0000FF"><? echo $tipo_pessoa; ?></font></strong>      Data Nasc      <strong><font color="#0000FF"><? echo $data_nasc; ?></font></strong></font></td>
    </tr>

    <tr>

      <td><font size="1">CPF</font></td>

      <td><font size="3"><strong><font color="#0000FF" size="1"><? echo $cpf; ?></font></strong> </font></td>

      <td><font size="1">RG</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $rg; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">&Oacute;rg&atilde;o Emissor </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $orgao; ?> - <? echo $estado_emissao; ?></font></strong></td>

      <td><font size="1">Data de Emiss&atilde;o</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $emissao; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Sexo</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $sexo; ?></font></strong></td>

      <td><font size="1">Estado Civil</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $estadocivil; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Nacionalidade</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $nacionalidade; ?></font></strong></td>

      <td><font size="1">Quant Dependentes </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $quant_dependente; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Pai</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $pai; ?></font></strong></td>

      <td><font size="1">M&atilde;e</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $mae; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Conjuge</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $conjuge ?></font></strong></td>

      <td><font size="1">Data nascimento </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $data_nasc_conjuge; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Endere&ccedil;o</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $endereco; ?></font></strong></td>

      <td><font size="1">N&uacute;mero</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $numero; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Bairro</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $bairro; ?></font></strong></td>

      <td><font size="1">Complemento</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $complemento; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Cidade</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cidade; ?></font></strong></td>

      <td><font size="1">Estado</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $estado; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Cep</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cep; ?></font></strong></td>

      <td><font size="1">Endere&ccedil;o corresp</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $correspondencia; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Tipo de residencia </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tipo_residencia; ?></font></strong></td>

      <td><font size="1">Valor do aluguel R$ </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $valor_aluguel; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Tempo de resid&ecirc;ncia </font></td>

      <td><font color="#000000" size="1">Anos</font><font color="#0000FF" size="1"><strong> <? echo $tempo_residencia; ?>  </strong><font color="#000000">meses</font><strong> <? echo $meses_residencia; ?></strong></font></td>

      <td><font size="1">Telefone com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_tel; ?> - <? echo $telefone; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Celular com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_cel; ?> - <? echo $celular; ?></font></strong></td>

      <td><font size="1">Tipo de telefone </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tipo_telefone; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Residencia anterior </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $residencia_anterior; ?></font></strong></td>

      <td><font size="1">Bairro</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $bairro_anterior; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Cidade</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cidade_anterior; ?></font></strong></td>

      <td><font size="1">Estado</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $estado_anterior; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Tempo</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tempo_residencia_anterior; ?></font></strong></td>

      <td><font size="1">E-Mail</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $email; ?></font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">INFORMA&Ccedil;&Otilde;ES PROFISSIONAIS</font></strong></font></div></td>
    </tr>

    <tr> 

      <td><font size="1">Empresa</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $empresa; ?></font></strong></td>

      <td><font size="1">Porte da empresa </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $porte_empresa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Tempo de servi&ccedil;o </font></td>

      <td><font size="1">Anos

          <strong><font color="#0000FF"><? echo $data_admissao; ?></font></strong>        meses 

      <strong><font color="#0000FF"><? echo $meses; ?></font></strong></font></td>

      <td><font size="1">Inicio da atividade  PJ </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $inicio_atividade; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Endere&ccedil;o</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $end_empresa; ?></font></strong></td>

      <td><font size="1">N&uacute;mero</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $numero_empresa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Complemento</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $complemento_empresa; ?></font></strong></td>

      <td><font size="1">Bairro</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $bairro_empresa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">CEP</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cep_empresa; ?></font></strong></td>

      <td><font size="1">Cidade</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cidade_empresa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Estado</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $estado_empresa; ?></font></strong></td>

      <td><font size="1">Telefone</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_tel_empresa; ?> - <? echo $telefone_empresa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Cargo</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cargo; ?></font></strong></td>

      <td><font size="1">Natureza da opera&ccedil;&atilde;o </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $natureza_operacao; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Sal&aacute;rio/Rendimentos R$ </font></td>

      <td><font size="1"><strong><font color="#0000FF"><? echo $salario; ?></font></strong></font></td>

      <td><font size="1">Atividade principal </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $atividade_principal; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">CNPJ</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cnpj; ?></font></strong></td>

      <td><font size="1">Telefone contador com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_tel_contador; ?> - <? echo $tel_contador; ?></font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">ATIVIDADE/EMPREGO ANTERIOR </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Atividade/ anterior </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $atividade_anterior; ?></font></strong></td>

      <td><font size="1">Data admiss&atilde;o</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $data_admissao_anterior; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Sa&iacute;da</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $data_saida; ?></font></strong></td>

      <td><font size="1">Cargo</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cargo_anterior; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Telefone</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_tel_empresa_anterior; ?> - <? echo $telefone_empresa_anterior; ?></font></strong></td>

      <td><font size="1">Outras rendas </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $outras_rendas; ?></font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">FONTES DE REFER&Ecirc;NCIA </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Pessoal - Nome </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_pessoal; ?></font></strong></td>

      <td><font size="1">Telefone com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_ref_pessoal; ?> - <? echo $tel_ref_pessoal; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Pessoal - Nome </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_pessoal2; ?></font></strong></td>

      <td><font size="1">Telefone com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_ref_pessoal2; ?> - <? echo $tel_ref_pessoal2; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Comercial - Nome </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_comercial; ?></font></strong></td>

      <td><font size="1">Telefone com DDD </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ddd_ref_comercial; ?> - <? echo $tel_ref_comercial; ?></font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">REFER&Ecirc;NCIAS FINANCEIRAS </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Banco</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_banco; ?></font></strong></td>

      <td><font size="1">Ag&ecirc;ncia</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_agencia; ?> - <? echo $digito_agencia; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Conta</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $ref_conta; ?> - <? echo $digito_conta; ?></font></strong></td>

      <td><font size="1">Tipo</font></td>

      <td>        <strong><font color="#0000FF" size="1"><? echo $ref_tipo_conta; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Conta desde </font></td>

      <td><strong><font color="#000000" size="1">M&ecirc;s</font><font color="#0000FF" size="1"> <? echo $ref_conta_desde; ?> <font color="#000000">Ano </font><? echo $ano_ref_conta; ?></font></strong></td>

      <td><font size="1">Cart&atilde;o de cr&eacute;dito </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $cartao_credito; ?></font></strong></td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">REFER&Ecirc;NCIAS DE BENS </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Autom&oacute;vel</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $automovel; ?></font></strong></td>

      <td><font size="1">Valor total R$ </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $valor_automoveis; ?></font></strong>      </td>
    </tr>

    <tr>

      <td><font size="1">Resid&ecirc;ncia</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $residencia; ?></font></strong></td>

      <td><font size="1">Valor tota R$ </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $valor_residencia; ?></font></strong>      </td>
    </tr>

    <tr>

      <td><font size="1">Outras Propriedades </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $outras_propriedades; ?></font></strong></td>

      <td><font size="1">Valor total R$ </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $valor_outras_propriedades; ?></font></strong>      </td>
    </tr>

    <tr>

      <td colspan="4"><div align="center"><font size="1"><strong><font color="#0000FF">DADOS DA OPERA&Ccedil;&Atilde;O </font></strong></font></div></td>
    </tr>

    <tr>

      <td><font size="1">Tipo de ve&iacute;culo </font></td>

      <td><strong><font color="#000000"><? echo $bem; ?></font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td><font size="1">Ve&iacute;culo</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $veiculo; ?></font></strong>      </td>

      <td><font size="1">Ano/Modelo</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $ano_modelo; ?> - <? echo $modelo; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Renavam</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $renavam; ?></font></strong>      </td>

      <td><font size="1">N&ordm; de portas </font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $num_portas; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Combust&iacute;vel</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $combustivel; ?></font></strong></td>

      <td><font size="1">Placa</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $placa; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Valor venda NF R$ </font></td>

      <td>

	    <strong>

      <font color="#0000FF" size="1">      <? echo $valor_venda; ?> </font></strong> </td>

      <td><font size="1">Valor de entrada R$ </font></td>

      <td><font color="#0000FF"><strong>        <font color="#0000FF" size="1"><? echo $valor_entrada; ?></font> </strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Tarifa cadastro </font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $tarifa_cadastro; ?></font></strong>        </td>

      <td><font size="1">Valor a financiar R$</font></td>

      <td><font color="#0000FF"><strong>        <font color="#0000FF" size="1"><? echo $valor_financiar; ?></font> </strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Codigo da tabela</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $codigo_tabela; ?> </font></strong><font color="#000000" size="1">Mista</font><font color="#0000FF" size="1"><strong> <? echo $mista; ?></strong></font></td>

      <td><font size="1">Coeficiente</font></td>

      <td><font color="#0000FF"><strong>        <font color="#0000FF" size="1"><? echo $coeficiente; ?></font> </strong></font></td>
    </tr>

    <tr>

      <td><font size="1">Servi&ccedil;os Terceiros</font></td>

      <td><strong><font color="#0000FF" size="1"><? echo $r; ?>        </font></strong>        </td>

      <td><font size="1">Valor Liberado</font></td>

      <td><font color="#0000FF" size="1"><strong><? echo $valor_liberado; ?>

      </strong></font></td>
    </tr>

    <tr>

      <td><font size="1">N&ordm; de parcelas</font></td>

      <td>        <strong><font color="#0000FF" size="1"><? echo $num_parcelas; ?></font></strong></td>

      <td><font size="1">Valor da parcela</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $valor_parcelas; ?></font></strong></td>
    </tr>

    <tr>

      <td><font size="1">Car&ecirc;ncia</font></td>

      <td>      <strong><font color="#0000FF" size="1"><? echo $trinta; ?><? echo $quarenta_cinco; ?></font></strong></td>

      <td><font size="1">Pagto Serv Terceiros </font></td>

      <td><strong>

      <font color="#0000FF" size="1"><? echo $pagto_serv_terc; ?> </font>      </strong></td>
    </tr>


    <tr>
      <td colspan="4"><div align="center">Hist&oacute;rico de todos os pareceres de credito realizados nessa proposta</div></td>
    </tr>
    <tr>

      <td colspan="4"><div align="center">
        <textarea name="obs_cli" cols="100" rows="7" readonly="readonly" id="obs_cli">
<?  

$sql = "SELECT * FROM observacoes_parecer_credito_veiculos where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$obs = $linha[5];

$operador = $linha[6];





echo "$data - "."$hora - "."$operador - "."$obs";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}
}
?>
        </textarea>
      </div></td>
    </tr>

    <tr> 

      <td colspan="2"><font size="1">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>        

      </font></td><td><div align="right"><font size="1"><font size="0,5"><font size="0,5"><font size="0,5"><font size="0,5"><font size="0,5"><font size="0,5"><font size="1"><font size="+1"><font size="1"></font></font></font></font></font></font></font></font></font></font> </div></td>

      <td><font size="1">&nbsp;</font></td>
    </tr>
  </table>

</form>

</body>

</html>

