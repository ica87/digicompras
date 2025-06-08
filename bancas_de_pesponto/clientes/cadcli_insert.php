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
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';


?>


<body>
  




<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form name="form1" method="post" action="grava_cadcli.php">

<?

?>


  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><strong><font color="#0000FF" size="4">Cadastro 
        de clientes!. Os campos com * s&atilde;o obrigat&oacute;rios!
        <input name="status" type="hidden" id="status" value="<? echo "Ativo"; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>C&oacute;digo</td>
      <td>      Ser&aacute; informado ao t&eacute;rmino</td>
      <td>Data</td>
      <td><strong><font color="#0000FF"><? echo date('d-m-Y H:i:s'); ?></font></strong>
        <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y H:i:s'); ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="15%">Nome/Raz&atilde;o Social:</td>
      <td width="37%"><input name="razaosocial" type="text" id="razaosocial" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td width="11%">Cnpj / CPF:</td>
      <td width="36%"><input name="cnpj" type="text" id="cnpj" size="19" maxlength="19"> 
        <font color="#0000FF">*</font></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Apelido/N. Fantasia:</td>
      <td><input name="nfantasia" type="text" id="nfantasia" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>Inscr. Est: / RG:</td>
      <td><input name="inscr_est" type="text" id="inscr_est" size="18" maxlength="15"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data Nasc: </td>
      <td><input name="data_nasc" type="text" id="data_nasc"></td>
      <td>Mes Nasc: </td>
      <td><input name="mes_nasc" type="text" id="mes_nasc" size="4" maxlength="2"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco" type="text" id="endereco" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero" type="text" id="numero2" size="10" maxlength="10"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro:</p></td>
      <td><input name="bairro" type="text" id="bairro" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade3" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado" id="select">
        <option selected>Selecione</option>
		        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>

            </select>        <font color="#0000FF">*</font> </td>
      <td>Cep:</td>
      <td><input name="cep" type="text" id="cep2" size="9" maxlength="9"> <font color="#0000FF">*</font> 
        Use o formato 00000-000</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email" type="text" id="email3" size="50" maxlength="50">
        <font color="#0000FF">*</font></td>
      <td>Comprador:</td>
      <td><input name="comprador" type="text" id="comprador2" size="50" maxlength="50">
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><input name="fone" type="text" id="fone2" size="12" maxlength="12"> 
        <font color="#0000FF">*</font> Use o formato 00-0000-0000</td>
      <td>Fax:</td>
      <td><input name="fax" type="text" id="fax3" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular3" size="12" maxlength="12">
        <font color="#0000FF">* </font>Use o formato 00-0000-0000</td>
      <td>Skype</td>
      <td><input name="skype" type="text" id="skype" size="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sal&aacute;rio:</td>
      <td><input name="salario" type="text" id="salario"></td>
      <td>Limite</td>
      <td><input name="limite" type="text" id="limite"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cond Pagto:</td>
      <td><select name="condpagto" id="select4">
        <option selected>Selecione</option>
        <?


    $sql = "select * from cond_pagto order by condpagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['condpagto']."</option>";
    }
?>
		
        </select> 
        <font color="#0000FF">* (sujeito a an&aacute;lise)</font></td>
      <td>Representante:</td>
      <td><select name="representante" id="select3">
        <option value="null" selected>Selecione o Representante
        <?


    $sql = "select * from representantes order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
        </option>
      </select>
        <font color="#0000FF">*</font> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Transportadora:</td>
      <td><input name="transportadora" type="text" id="transportadora3" size="50" maxlength="50"> 
        <font color="#0000FF"><strong>(Fob)</strong></font> </td>
      <td>Modo Pagto:</td>
      <td><select name="modopagto" id="select5">
        <option selected>Selecione</option>
        <?


    $sql = "select * from modo_pagto order by modopagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['modopagto']."</option>";
    }
?>
      </select>
        <font color="#0000FF">* (sujeito a an&aacute;lise) </font> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><div align="left"><strong><font color="#0000FF" size="4">Local de Trabalho:</font></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Empresa:</td>
      <td><input name="empresa_trab" type="text" id="empresa_trab" size="50" maxlength="50"></td>
      <td>Telefone:</td>
      <td><input name="tel_trab" type="text" id="tel_trab"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco_cob" type="text" id="endereco_cob2" size="50" maxlength="50"></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero_cob" type="text" id="numero_cob3" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro_cob" type="text" id="bairro_cob2" size="50" maxlength="50"></td>
      <td>Cidade:</td>
      <td><input name="cidade_cob" type="text" id="cidade_cob2" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado_cob" id="select2">
        <option selected>Selecione</option>
        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
      </select></td>
      <td>Cep:</td>
      <td><input name="cep_cob" type="text" id="cep_cob3" size="9" maxlength="9"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email_cob" type="text" id="email4" size="50" maxlength="50"></td>
      <td>Tempo de Trab: </td>
      <td><input name="tempo_trab" type="text" id="tempo_trab"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Pessoas autorizadas a comprar :</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome1" type="text" id="nome1" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf1" type="text" id="cpf1" size="11" maxlength="11"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome2" type="text" id="nome2" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf2" type="text" id="cpf2" size="11" maxlength="11"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome3" type="text" id="nome3" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf3" type="text" id="cpf3" size="11" maxlength="11"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Dados para Entrega:</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco_ent" type="text" id="endereco_cob3" size="50" maxlength="50"></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero_ent" type="text" id="numero_cob4" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro_ent" type="text" id="bairro_cob3" size="50" maxlength="50"></td>
      <td>Cidade:</td>
      <td><input name="cidade_ent" type="text" id="cidade_cob3" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado_ent" id="select6">
        <option selected>Selecione</option>
        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
      </select></td>
      <td>Cep:</td>
      <td><input name="cep_ent" type="text" id="cep_cob4" size="9" maxlength="9"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email_ent" type="text" id="email_cob" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Observa&ccedil;&otilde;es:</td>
      <td colspan="3" align="left" valign="top"> <textarea name="obs" cols="92" rows="3" wrap="PHYSICAL" id="obs"></textarea> 
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Senha: </td>
      <td><input name="senha" type="text" id="senha3" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><input type="submit" name="Submit" value="Cadastrar-me como cliente"> 
        <input type="reset" name="Submit2" value="Limpar">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span> </td>
      <td><div align="right"> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
