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
<title>FORMULARIO DE PROPOSTAS</title>
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




<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?
$tipo = $_POST['tipo'];
$tipo_proposta = $_POST['tipo_proposta'];
$cpf = $_POST['cpf'];
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];
$valor_liberado = $_POST['valor_liberado'];
$bco_operacao = $_POST['bco_operacao'];


$sql = "SELECT * FROM clientes where cpf = '$cpf'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo_cli = $linha[0];
$nome_cli = $linha[1];
$sexo_cli = $linha[2];
$estadocivil_cli = $linha[3];
//$cpf_cli = $linha[4];
$rg_cli = $linha[5];
$orgao_cli = $linha[6];
$emissao_cli = $linha[7];
$data_nasc_cli = $linha[8];
$pai_cli = $linha[9];
$mae_cli = $linha[10];
$endereco_cli = $linha[11];
$numero_cli = $linha[12];
$bairro_cli = $linha[13];
$complemento_cli = $linha[14];
$cidade_cli = $linha[15];
$estado_cli = $linha[16];
$cep_cli = $linha[17];
$telefone_cli = $linha[18];
$celular_cli = $linha[19];
$email_cli = $linha[20];
$operador_cli = $linha[21];
$cel_operador_cli = $linha[22];
$email_operador_cli = $linha[23];
$estabelecimento_cli = $linha[24];
$cidade_estabelecimento_cli = $linha[25];
$tel_estabelecimento_cli = $linha[26];
$email_estabelecimento_cli = $linha[27];
$obs_cli = $linha[28];
$datacadastro_cli = $linha[29];
$horacadastro_cli = $linha[30];
$dataalteracao_cli = $linha[31];
$horaalteracao_cli = $linha[32];
$operador_alterou_cli = $linha[33];
$cel_operador_alterou_cli = $linha[34];
$email_operador_alterou_cli = $linha[35];
$estabelecimento_alterou_cli = $linha[36];
$cidade_estabelecimento_alterou_cli = $linha[37];
$tel_estabelecimento_alterou_cli = $linha[38];
$email_estabelecimento_alterou_cli = $linha[39];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];
$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];


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


$nome = $linha[1];
$celular = $linha[19];
$email = $linha[20];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];

?>
<? } ?>
<form name="form1" method="post" action="grava_proposta.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">FORMUL&Aacute;RIO DE PROPOSTA </font></strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Operador</td>
      <td><strong><font color="#0000FF"><? echo $nome; ?>
        <input name="nome_operador" type="hidden" id="nome_operador2" value="<? echo $nome; ?>">
      </font></strong></td>
      <td>Data da Proposta </td>
      <td>                <strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
        <input name="dataproposta" type="hidden" id="dataproposta3" value="<? echo date('d-m-Y'); ?>">
        <input name="horaproposta" type="hidden" id="horaproposta3" value="<? echo date('H:i:s'); ?>">
        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-Y'); ?>">        
        <strong><font color="#0000FF">
          </font></strong></td>
    </tr>
    <tr>
      <td>Estabelecimento</td>
      <td><strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>
            <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta3" value="<? echo $estabelecimento_proposta; ?>">

      </font></strong></td>
      <td>Status</td>
      <td><strong><font color="#0000FF"><? echo Aguardando_Ativação; ?>
            <input name="status" type="hidden" id="status4" value="<? echo Aguardando_Ativação; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>Perfil do cliente </td>
      <td><strong><font color="#0000FF"><? echo $tipo; ?>
            <input name="tipo" type="hidden" id="tipo3" value="<? echo $tipo; ?>">
</font></strong> </td>
      <td>Tipo da proposta </td>
      <td><strong><font color="#0000FF"><? echo $tipo_proposta; ?>
            <input name="tipo_proposta" type="hidden" id="tipo2" value="<? echo $tipo_proposta; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome" value="<? echo $nome_cli; ?>" size="50" maxlength="50"></td>
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
      <td>Data Nasc</td>
      <td><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc_cli; ?>" size="15" maxlength="10"></td>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" value="<? echo $rg_cli; ?>" size="25" maxlength="25"></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td><input name="orgao" type="text" id="orgao" value="<? echo $orgao_cli; ?>" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="text" id="emissao" value="<? echo $emissao_cli; ?>" size="15" maxlength="10">
</td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="text" id="pai2" value="<? echo $pai_cli; ?>" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="text" id="mae" value="<? echo $mae_cli; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco2" value="<? echo $endereco_cli; ?>" size="50" maxlength="50"></td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero" value="<? echo $numero_cli; ?>" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>Bairro</td>
      <td><input name="bairro" type="text" id="bairro2" value="<? echo $bairro_cli; ?>" size="50" maxlength="50"></td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="complemento" value="<? echo $complemento_cli; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade2" value="<? echo $cidade_cli; ?>" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado" id="select">
        <option selected><? echo $estado_cli; ?></option>
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
      <td><input name="cep" type="text" id="cep2" value="<? echo $cep_cli; ?>" size="9" maxlength="9">
      Use o formato 00000-000</td>
      <td>Sexo</td>
      <td><select name="sexo" id="select2">
        <option selected><? echo $sexo_cli; ?></option>
		<option>Masculino</option>
        <option>Feminino</option>
      </select></td>
    </tr>
    <tr>
      <td>Estado Civil</td>
      <td><select name="estadocivil" id="select4">
        <option selected><? echo $estadocivil_cli; ?></option>
        <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select></td>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone3" value="<? echo $telefone_cli; ?>" size="15" maxlength="14"></td>
    </tr>
    <tr> 
      <td>Celular</td>
      <td><input name="celular" type="text" id="celular" value="<? echo $celular_cli; ?>" size="15" maxlength="14"></td>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email2" value="<? echo $email_cli; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr> 
      <td width="15%">Cr&eacute;dito Solicitado R$ </td>
      <td width="37%"><input name="valor_credito" type="text" id="valor_credito">
      formato 0000.00(ponto) </td>
      <td width="11%">Valor Liberado R$ </td>
      <td width="36%">        <font color="#0000FF">
        <? echo $valor_liberado; ?><input name="valor_liberado" type="hidden" id="valor_liberado" value="<? echo $valor_liberado; ?>">
      </font></td>
    </tr>
    <tr>
      <td>Quant de parcelas </td>
      <td><font color="#0000FF">
        <input name="quant_parc" type="text" id="quant_parc">
      </font></td>
      <td>Valor parcela</td>
      <td><input name="parcela" type="text" id="parcela2"></td>
    </tr>
    <tr> 
      <td>Banco do cliente</td>
      <td><strong><font color="#0000FF">
        <select name="banco_pagto" id="select5">
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
      <td><strong><font color="#0000FF"><? echo $bco_operacao; ?>
            <input name="bco_operacao" type="hidden" id="bco_operacao" value="<? echo $bco_operacao; ?>">

      </font></strong></td>
    </tr>
    <tr>
      <td>Ag&ecirc;ncia</td>
      <td><strong><font color="#0000FF">
        <input name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>">
      </font></strong></td>
      <td>N&ordm; Conta</td>
      <td><input name="conta" type="text" id="conta2" value="<? echo $conta; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">Valor Parcela </div></td>
      <td><div align="center">Banco</div></td>
      <td><div align="center">Vencimento do contrato </div></td>
      <td><div align="center">Previs&atilde;o de compra em </div></td>
    </tr>
    <tr> 
      <td><div align="center">
        <input name="parc1" type="text" id="parc1">
      </div></td>
      <td>      <div align="center">
        <input name="banco1" type="text" id="banco1" size="40">
      </div></td>
      <td><div align="center">
        <input name="vencto1" type="text" id="vencto1">
      </div></td>
      <td>      <div align="center">
        <input name="compra1" type="text" id="compra1">
      </div></td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs_cli; ?></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador" type="hidden" id="operador3" value="<? echo $nome; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Concluir efetiva&ccedil;&atilde;o da proposta"> 
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
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $nome; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
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
</form>
</body>
</html>
