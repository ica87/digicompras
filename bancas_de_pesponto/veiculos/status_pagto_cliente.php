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

<title>TELA DE EDI&Ccedil;&Atilde;O DE PROPOSTAS</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';





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
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>




<form name="form1" method="post" action="index.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<?





$num_proposta = $_POST['num_proposta'];





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


}

?>





<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

<? } ?>

<form name="form1" method="post" action="grava_alterar_status_pagto_cliente.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="4"><div align="center"><font color="#0000FF" size="4">VEICULOS - ALTERANDO STATUS DE PAGTO AO CLIENTE DA PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>

                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">

      </strong></font></div></td>
    </tr>

    <tr>

      <td>Status pagto ao cliente </td>

      <td><strong><font color="#0000FF">

        <select name="status_pagto_cliente" id="select11">

          <option><? echo $status_pagto_cliente; ?></option>

          <option>Pago_ao_cliente</option>

          <option>Aguardando_Pagto</option>
        </select>

      </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>
    </tr>

    <tr>

      <td>Operador</td>

      <td colspan="3"><strong><font color="#0000FF"><? echo $operador_atendente; ?></font></strong></td>
    </tr>

    <tr>

      <td width="25%">Nome</td>

      <td width="21%"><strong><font color="#0000FF"><? echo $nome; ?>

</font></strong></td>

      <td width="21%">CPF</td>

      <td width="33%"><p><strong><font color="#0000FF"><? echo $cpf; ?></font></strong><strong><font color="#0000FF">         </font></strong><strong><font color="#0000FF">

</font></strong></p>      </td>
    </tr>

    <tr>

      <td>Valor Solicitado </td>

      <td><strong><font color="#0000FF"><? echo $valor_financiar; ?></font></strong></td>

      <td>Valor da parcela </td>

      <td>      <strong><font color="#0000FF"><? echo $valor_parcelas; ?></font></strong> </td>
    </tr>

    <tr>

      <td><font color="#000000">Valor Liberado </font></td>

      <td><strong><font color="#0000FF">        <? echo $valor_liberado; ?> </font></strong></td>

      <td>Bco da Opera&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $bco_operacao; ?> </font></strong></td>
    </tr>


    <tr>

      <td><div align="left">Valor comiss&atilde;o</div></td>

      <td><strong><font color="#0000FF"><? echo $comissao_op; ?></font></strong></td>
      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td colspan="4">&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="data_pagto_cliente" type="hidden" id="data_pagto_cliente" value="<? echo date('d-m-Y'); ?>">

        <input name="hora_pagto_cliente" type="hidden" id="hora_pagto_cliente" value="<? echo $hora_atual; ?>">

        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">

</font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Confirmar Pgto ao cliente"> 

          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>
  </table>

</form>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Cadastro efetuado por <br>

        </strong><strong><font color="#0000FF"><? echo $nome_operador; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento; ?>

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Data do Cadastro <br>

              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>

      <td><strong>Hora que foi efetuado o Cadastro <br>

              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

<form name="form1" method="post" action="">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

?>



  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td valign="top" bgcolor="#CCCCCC"><strong>Data da Altera&ccedil;&atilde;o <br>

            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado a Altera&ccedil;&atilde;o <br>

            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>

      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <? } ?>

</form>

<form name="form1" method="post" action="">

  <?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

<? } ?>

</form>

</body>

</html>

