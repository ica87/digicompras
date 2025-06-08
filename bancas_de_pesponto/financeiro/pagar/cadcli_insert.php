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
<title>CADASTRO DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$cpf = $_POST['cpf'];

			
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
<form name="form2" method="post" action="">
</form>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];


?>
<? } ?>
<form name="form1" method="post" action="grava_cadcli.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="4"><strong><font color="#0000FF" size="4">Cadastro 
        de alunos! O c&oacute;digo ser&aacute; informado ao t&eacute;rmino do cadastro! Data Cadastro </font><font color="#0000FF"><? echo date('d-m-Y'); ?>
        <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">
        <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo date('H:i:s'); ?>">
</font></strong></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO ALUNO </strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">Como conheceu a escola? 
      <input name="como_conheceu_escola" type="text" id="como_conheceu_escola" size="40"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" size="50" maxlength="50"></td>
      <td>Sexo</td>
      <td><strong>
        <select name="sexo" id="select2">
          <option>Masculino</option>
          <option>Feminino</option>
        </select>
      </strong>      </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc" type="text" id="data_nasc2" size="15" maxlength="10">
      </strong></td>
      <td>Estado Civil </td>
      <td><select name="estadocivil" id="select4">
        <option selected>Selecione</option>
        <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr> 
      <td width="15%">Endere&ccedil;o</td>
      <td width="37%"><input name="endereco" type="text" id="endereco2" size="50" maxlength="50"></td>
      <td width="11%">N&uacute;mero</td>
      <td width="36%">        <font color="#0000FF">
        <input name="numero" type="text" id="numero" size="10" maxlength="10"> 
      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="text" id="bairro" size="50" maxlength="50">
      </td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="endereco4" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado" id="select7">
          <option selected>Selecione</option>
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
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone2" size="15" maxlength="14"></td>
      <td>Celular</td>
      <td><input name="celular" type="text" id="celular" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email2" size="50" maxlength="50"></td>
      <td>Cep</td>
      <td><input name="cep" type="text" id="cep" size="9" maxlength="9">
  Use o formato 00000-000</td>
    </tr>
    <tr>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf2" size="18" maxlength="14"></td>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg2" size="25" maxlength="25"></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>
        <input name="orgao" type="text" id="cpf3" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="text" id="cpf4" size="15" maxlength="10">
    dd/mm/aaaa </td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="text" id="pai" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="text" id="endereco3" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO RESPONS&Aacute;VEL </strong></div></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome_resp" type="text" id="nome2" size="50" maxlength="50"></td>
      <td>Sexo</td>
      <td><strong>
        <select name="sexo_resp" id="select2">
          <option>Masculino</option>
          <option>Feminino</option>
        </select>
      </strong> </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc_resp" type="text" id="data_nasc2" size="15" maxlength="10">
      </strong></td>
      <td>Estado Civil </td>
      <td><select name="estadocivil_resp" id="select4">
          <option selected>Selecione</option>
          <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><input name="endereco_resp" type="text" id="endereco6" size="50" maxlength="50"></td>
      <td>N&uacute;mero</td>
      <td> <font color="#0000FF">
        <input name="numero_resp" type="text" id="numero_resp" size="10" maxlength="10">
      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro_resp" type="text" id="bairro_resp" size="50" maxlength="50">
      </td>
      <td>Complemento</td>
      <td><input name="complemento_resp" type="text" id="endereco4" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade_resp" type="text" id="cidade_resp" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado_resp" id="select7">
          <option selected>Selecione</option>
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
      <td>Telefone</td>
      <td><input name="telefone_resp" type="text" id="telefone2" size="15" maxlength="14"></td>
      <td>Celular</td>
      <td><input name="celular_resp" type="text" id="celular_resp" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email_resp" type="text" id="email2" size="50" maxlength="50"></td>
      <td>Cep</td>
      <td><input name="cep_resp" type="text" id="cep_resp" size="9" maxlength="9">
    Use o formato 00000-000</td>
    </tr>
    <tr> 
      <td>CPF</td>
      <td><input name="cpf_resp" type="text" id="cpf2" size="18" maxlength="14"></td>
      <td>RG</td>
      <td><input name="rg_resp" type="text" id="rg2" size="25" maxlength="25"></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>        <input name="orgao_resp" type="text" id="cpf3" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao_resp" type="text" id="cpf4" size="15" maxlength="10"> 
        dd/mm/aaaa </td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai_resp" type="text" id="pai_resp" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae_resp" type="text" id="endereco3" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="50" rows="7" id="obs"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador" type="hidden" id="operador3" value="<? echo $nome; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estab_pertence; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estab_pertence; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estab_pertence; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estab_pertence; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Cadastrar Aluno"> 
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
          <strong><font color="#0000FF"><? echo $estab_pertence; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence; ?> </font></strong></td>
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
