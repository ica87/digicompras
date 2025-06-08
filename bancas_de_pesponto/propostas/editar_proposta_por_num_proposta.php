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






<?

$num_proposta = $_POST['num_proposta'];



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$nome_operador = $linha[1];

$tipo = $linha[2];

$estabelecimento_proposta = $linha[3];

$nome = $linha[4];

$sexo = $linha[5];

$estadocivil = $linha[6];

$cpf = $linha[7];

$rg = $linha[8];

$orgao = $linha[9];

$emissao = $linha[10];

$data_nasc = $linha[11];

$pai = $linha[12];

$mae = $linha[13];

$endereco = $linha[14];

$numero = $linha[15];

$bairro = $linha[16];

$complemento = $linha[17];

$cidade = $linha[18];

$estado = $linha[19];

$cep = $linha[20];

$telefone = $linha[21];

$celular = $linha[22];

$email = $linha[23];

$num_beneficio = $linha[24];

$num_beneficio2 = $linha[80];

$num_beneficio3 = $linha[81];

$num_beneficio4 = $linha[82];

$valor_credito = $linha[25];

$quant_parc = $linha[26];

$parcela = $linha[27];

$banco_pagto = $linha[28];

$num_banco = $linha[29];

$agencia = $linha[30];

$conta = $linha[31];

$operador = $linha[32];

$cel_operador = $linha[33];

$email_operador = $linha[34];

$estabelecimento = $linha[35];

$cidade_estabelecimento = $linha[36];

$tel_estabelecimento = $linha[37];

$email_estabelecimento = $linha[38];

$obs = $linha[39];

$dataproposta = $linha[40];

$horaproposta = $linha[41];

$dataalteracao = $linha[42];

$horaalteracao = $linha[43];

$operador_alterou = $linha[44];

$cel_operador_alterou = $linha[45];

$email_operador_alterou = $linha[46];

$estabelecimento_alterou = $linha[47];

$cidade_estabelecimento_alterou = $linha[48];

$tel_estabelecimento_alterou = $linha[49];

$email_estabelecimento_alterou = $linha[50];

$status = $linha[51];



$parc = $linha[52];

$banco = $linha[53];

$vencto = $linha[54];

$compra = $linha[55];



$parc = $linha[52];

$banco = $linha[53];

$vencto = $linha[54];

$compra = $linha[55];



$parc1 = $linha[52];

$banco1 = $linha[53];

$vencto1 = $linha[54];

$compra1 = $linha[55];



$parc2 = $linha[56];

$banco2 = $linha[57];

$vencto2 = $linha[58];

$compra2 = $linha[59];



$parc3 = $linha[60];

$banco3 = $linha[61];

$vencto3 = $linha[62];

$compra3 = $linha[63];



$parc4 = $linha[64];

$banco4 = $linha[65];

$vencto4 = $linha[66];

$compra4 = $linha[67];



$parc5 = $linha[68];

$banco5 = $linha[69];

$vencto5 = $linha[70];

$compra5 = $linha[71];



$parc6 = $linha[72];

$banco6 = $linha[73];

$vencto6 = $linha[74];

$compra6 = $linha[75];



$parc7 = $linha[76];

$banco7 = $linha[77];

$vencto7 = $linha[78];

$compra7 = $linha[79];



$tipo_proposta = $linha[83];

$bco_operacao = $linha[86];

$obs2 = $linha[102];

$valor_total = $linha[113];



?>

<? } ?>

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

<p>&nbsp;</p>

<table width="100%"  border="0">

  <tr>

    <td width="24%"><form name="form1" method="post" action="lista_de_propostas.php">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">

      <input type="submit" name="Submit3" value="Voltar">

    </form></td>

    <td width="48%"><form name="form1" method="post" action="../principal.php">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit22" value="Voltar ao menu principal">

    </form></td>

    <td width="28%">&nbsp;</td>

  </tr>

</table>

<form name="form1" method="post" action="grava_editar_proposta.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="4"><div align="center"><font color="#0000FF" size="4">EDITANDO PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>

                <input name="num_proposta" type="hidden" id="nome_operador" value="<? echo $num_proposta; ?>">

      </strong></font></div></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td>Operador</td>

      <td><strong><font color="#0000FF"><? echo $nome_operador; ?>

            <input name="nome_operador" type="hidden" id="nome_operador3" value="<? echo $nome_operador; ?>">

      </font></strong></td>

      <td>Data da Proposta </td>

      <td><strong><font color="#0000FF"><? echo $dataproposta; ?></font></strong> Hora proposta <strong><font color="#0000FF"><? echo $horaproposta; ?></font></strong> </td>

    </tr>

    <tr>

      <td>Estabelecimento</td>

      <td><strong><font color="#0000FF"> <? echo $estabelecimento_proposta; ?> 

        <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">

      </font></strong></td>

      <td>Status</td>

      <td><strong><font color="#0000FF"> <? echo $status; ?>

        <input name="status" type="hidden" id="nome_operador5" value="<? echo $status; ?>">

      </font></strong></td>

    </tr>

    <tr>

      <td>Perfil do cliente </td>

      <td><strong><font color="#0000FF"> <? echo $tipo; ?> 

        <input name="tipo" type="hidden" id="nome_operador4" value="<? echo $tipo; ?>">

      </font></strong> </td>

      <td>Tipo da proposta </td>

      <td><strong><font color="#0000FF"> <? echo $tipo_proposta; ?> 

        <input name="tipo_proposta" type="hidden" id="nome_operador6" value="<? echo $tipo_proposta; ?>">

      </font></strong></td>

    </tr>

    <tr>

      <td>Nome</td>

      <td><input name="nome" type="text" id="nome" value="<? echo $nome; ?>" size="50" maxlength="50"></td>

      <td>CPF</td>

      <td><input name="cpf" type="text" id="cpf2" value="<? echo $cpf; ?>" size="18" maxlength="14"></td>

    </tr>

    <tr>

      <td>N&ordm; Benef&iacute;cio </td>

      <td><input name="num_beneficio" type="text" id="num_beneficio" value="<? echo $num_beneficio; ?>"></td>

      <td>N&ordm; Benef&iacute;cio2</td>

      <td><input name="num_beneficio2" type="text" id="num_beneficio22" value="<? echo $num_beneficio2; ?>"></td>

    </tr>

    <tr>

      <td>N&ordm; Benef&iacute;cio 3 </td>

      <td><input name="num_beneficio3" type="text" id="num_beneficio32" value="<? echo $num_beneficio3; ?>"></td>

      <td>N&ordm; Benef&iacute;cio 4 </td>

      <td><input name="num_beneficio4" type="text" id="num_beneficio42" value="<? echo $num_beneficio4; ?>"></td>

    </tr>

    <tr>

      <td>Data Nasc </td>

      <td><strong>

        <input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10">

      </strong></td>

      <td>RG</td>

      <td><input name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25"></td>

    </tr>

    <tr> 

      <td width="14%">&Oacute;rg&atilde;o</td>

      <td width="31%"><input name="orgao" type="text" id="orgao2" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>

      <td width="21%">Emiss&atilde;o</td>

      <td width="33%">        <input name="emissao" type="text" id="emissao" value="<? echo $emissao; ?>" size="15" maxlength="10">

      </font></td>

    </tr>

    <tr>

      <td>Pai</td>

      <td><input name="pai" type="text" id="pai2" value="<? echo $pai; ?>" size="50" maxlength="50"></td>

      <td>M&atilde;e</td>

      <td><input name="mae" type="text" id="mae" value="<? echo $mae; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr> 

      <td>Endere&ccedil;o</td>

      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50"></td>

      <td>N&uacute;mero</td>

      <td><input name="numero" type="text" id="numero" value="<? echo $numero; ?>" size="10" maxlength="10"></td>

    </tr>

    <tr>

      <td>Bairro</td>

      <td><input name="bairro" type="text" id="bairro2" value="<? echo $bairro; ?>" size="50" maxlength="50"></td>

      <td>Complemento</td>

      <td><input name="complemento" type="text" id="complemento" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td>Cidade</td>

      <td><input name="cidade" type="text" id="cidade2" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>

      <td>Estado</td>

      <td><select name="estado" id="select">

        <option selected><? echo $estado; ?></option>

        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>

      </select></td>

    </tr>

    <tr>

      <td>Cep</td>

      <td><input name="cep" type="text" id="cep2" value="<? echo $cep; ?>" size="9" maxlength="9">

      Use o formato 00000-000</td>

      <td>Sexo</td>

      <td><select name="sexo" id="select3">

        <option selected><? echo $sexo; ?></option>

        <option>Masculino</option>

        <option>Feminino</option>

      </select></td>

    </tr>

    <tr>

      <td>Estado Civil </td>

      <td><select name="estadocivil" id="select5">

        <option selected><? echo $estadocivil; ?></option>

        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>

      </select></td>

      <td>Telefone</td>

      <td><input name="telefone" type="text" id="telefone2" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>

    </tr>

    <tr>

      <td>Celular</td>

      <td><input name="celular" type="text" id="celular" value="<? echo $celular; ?>" size="15" maxlength="14"></td>

      <td>E-Mail</td>

      <td><input name="email" type="text" id="email2" value="<? echo $email; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td><strong>Cr&eacute;dito Solicitado R$ </strong></td>

      <td><input name="valor_credito" type="text" id="valor_credito" value="<? echo $valor_credito; ?>">

    formato 0000.00(ponto) </td>

      <td><strong>Valor TOTAL R$ </strong></td>

      <td> <font color="#0000FF">

        <input name="valor_total" type="text" id="valor_total" value="<? echo $valor_total; ?>">

      </font></td>

    </tr>

    <tr>

      <td><strong>Valor liq cliente R$ </strong></td>

      <td><input name="valor_liquido_cliente" type="text" id="valor_liquido_cliente" value="<? echo $valor_liquido_cliente; ?>"></td>

      <td><strong>Valor Liberado R$ </strong></td>

      <td><font color="#0000FF"><? echo $valor_liberado; ?>

          <input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo $valor_liberado; ?>">

      </font></td>

    </tr>

    <tr>

      <td>Quant de parcelas </td>

      <td><font color="#0000FF">

        <input name="quant_parc" type="text" id="quant_parc" value="<? echo $quant_parc; ?>">

      </font></td>

      <td>Valor parcela </td>

      <td><input name="parcela" type="text" id="parcela2" value="<? echo $parcela; ?>"></td>

    </tr>

    <tr>

      <td>Banco do cliente </td>

      <td><strong><font color="#0000FF">

        <select name="banco_pagto" id="select2">

          <option selected><? echo $banco_pagto; ?></option>

          <?





    $sql = "select * from bancos order by banco asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['banco']."</option>";

    }

?>

        </select>

      </font></strong></td>

      <td>Banco da Opera&ccedil;&atilde;o </td>

      <td><strong><font color="#0000FF">

        <select name="bco_operacao" id="select7">

          <option selected><? echo $bco_operacao; ?></option>

          <?





    $sql = "select * from bco_operacao order by banco asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['banco']."</option>";

    }

?>

        </select>

      </font></strong></td>

    </tr>

    <tr>

      <td>Ag&ecirc;ncia</td>

      <td><input name="agencia" type="text" id="agencia2" value="<? echo $agencia; ?>"></td>

      <td>N&ordm; Conta</td>

      <td>      <input name="conta" type="text" id="conta2" value="<? echo $conta; ?>"></td>

    </tr>

    <tr>

      <td><div align="center">Valor Parcela </div></td>

      <td><div align="center">Banco</div></td>

      <td><div align="center">Vencimento do contrato </div></td>

      <td><div align="center">Previs&atilde;o de compra em </div></td>

    </tr>

    <tr>

      <td><div align="center">

          <input name="parc1" type="text" id="parc1" value="<? echo $parc1; ?>">

      </div></td>

      <td>

        <div align="center">

          <input name="banco1" type="text" id="banco1" value="<? echo $banco1; ?>" size="40">

      </div></td>

      <td><div align="center">

          <input name="vencto1" type="text" id="vencto1" value="<? echo $vencto1; ?>">

      </div></td>

      <td>

        <div align="center">

          <input name="compra1" type="text" id="compra1" value="<? echo $compra1; ?>">

      </div></td>

    </tr>

    <tr>

      <td>Obs</td>

      <td><textarea name="obs" cols="45" rows="7" id="obs"><? echo $obs; ?></textarea></td>

      <td colspan="2"><textarea name="obs_propostas" cols="45" rows="7" readonly="readonly" id="obs_propostas"><?  

$sql = "SELECT * FROM observacoes_de_propostas where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$parecer_de_credito = $linha[5];

$operador = $linha[6];





echo "$data - "."$parecer_de_credito - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

      </textarea></td>

    </tr>

    <tr>

      <td>Parecer de Cr&eacute;dito </td>

      <td><textarea name="obs2" cols="45" rows="7" id="obs2"><? echo $obs2; ?></textarea></td>

      <td colspan="2"><textarea name="parecer_credito" cols="45" rows="7" readonly="readonly" id="parecer_credito"><?  

$sql = "SELECT * FROM observacoes_parecer_credito where num_proposta = '$num_proposta' order by codigo desc";

$res = mysql_query($sql);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$num_proposta_cli = $linha[1];

$cpf = $linha[2];

$data = $linha[3];

$hora = $linha[4];

$parecer_de_credito = $linha[5];

$operador = $linha[6];





echo "$data - "."$parecer_de_credito - "."$operador";

?>



<?



if($reg==1){

//echo "</tr>";

$reg=0;

}





}

	  

	  

	  

	  

	   ?>

      </textarea></td>

    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">

        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo $hora_atual; ?>">

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

        <input type="submit" name="Submit" value="Alterar dados da Proposta"> 

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

        </strong><strong><font color="#0000FF"><? echo $operador; ?>

        

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

          <strong><font color="#0000FF"><? echo $estabelecimento; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

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

      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Cadastro <br>

            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado o Cadastro <br>

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

