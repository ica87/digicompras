<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>

<html>
<head>
<title>Editar Cadastro de clientes!. Os campos com * s&atilde;o obrigat&oacute;rios!</title>
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


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form name="form1" method="post" action="grava_editar_cliente.php">
<?

$codigo = $_POST['codigo'];


$sql = "SELECT * FROM clientes where codigo = '$codigo'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$skype = $linha[40];
$data_nasc = $linha[41];
$mes_nasc = $linha[42];
$salario = $linha[43];
$limite = $linha[44];
$empresa_trab = $linha[45];
$tel_trab = $linha[46];
$nome1 = $linha[47];
$cpf1 = $linha[48];
$nome2 = $linha[49];
$cpf2 = $linha[50];
$nome3 = $linha[51];
$cpf3 = $linha[52];
$status = $linha[53];

?>


  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><strong><font color="#0000FF" size="4">Editar Cadastro 
        de clientes!. Os campos com * s&atilde;o obrigat&oacute;rios!</font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><strong><font color="#0000FF">C&oacute;digo que est&aacute; sendo editado: <? echo $codigo; ?>        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </font></strong></td>
      <td>Status</td>
      <td><font color="#0000FF">
        <select name="status" id="representante">
          <option selected><?  echo $status; ?></option>
          <?


    $sql = "select * from status_cliente order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
        </select>
      </font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="15%">Nome/Raz&atilde;o Social:</td>
      <td width="37%"><input name="razaosocial" type="text" id="razaosocial" value="<? echo $linha[1]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td width="11%">Cnpj / CPF:</td>
      <td width="36%"><input name="cnpj" type="text" id="cnpj" value="<? echo $linha[2]; ?>" size="19" maxlength="19"> 
        <font color="#0000FF">*</font></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Apelido/N. Fantasia:</td>
      <td><input name="nfantasia" type="text" id="nfantasia" value="<? echo $linha[3]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>Inscr. Est: / RG:</td>
      <td><input name="inscr_est" type="text" id="inscr_est" value="<? echo $linha[4]; ?>" size="18" maxlength="15"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data Nasc: </td>
      <td><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>"></td>
      <td>Mes Nasc: </td>
      <td><input name="mes_nasc" type="text" id="mes_nasc" value="<? echo $mes_nasc; ?>" size="4" maxlength="2"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco" type="text" id="endereco" value="<? echo $linha[5]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero" type="text" id="numero2" value="<? echo $linha[6]; ?>" size="10" maxlength="10"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro:</p></td>
      <td><input name="bairro" type="text" id="bairro" value="<? echo $linha[7]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade3" value="<? echo $linha[8]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado" id="select">
		        <option><? echo $linha[9]; ?></option>
		        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>

            </select>        <font color="#0000FF">*</font> </td>
      <td>Cep:</td>
      <td><input name="cep" type="text" id="cep2" value="<? echo $linha[10]; ?>" size="9" maxlength="9"> 
      <font color="#0000FF">*</font> 
        Use o formato 00000-000</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email" type="text" id="email3" value="<? echo $linha[11]; ?>" size="50" maxlength="50">
        <font color="#0000FF">*</font></td>
      <td>Comprador:</td>
      <td><input name="comprador" type="text" id="comprador2" value="<? echo $linha[12]; ?>" size="50" maxlength="50">
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><input name="fone" type="text" id="fone2" value="<? echo $linha[13]; ?>" size="12" maxlength="12"> 
        <font color="#0000FF">*</font> Use o formato 00-0000-0000</td>
      <td>Fax:</td>
      <td><input name="fax" type="text" id="fax3" value="<? echo $linha[14]; ?>" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular3" value="<? echo $linha[15]; ?>" size="12" maxlength="12">
        <font color="#0000FF">* </font>Use o formato 00-0000-0000</td>
      <td>Skype:</td>
      <td>        <font color="#0000FF">
        <input name="skype" type="text" id="skype" value="<? echo $skype; ?>">
        <strong><font color="#0000FF"><? echo $skype; ?></font></strong></font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sal&aacute;rio:</td>
      <td><input name="salario" type="text" id="salario" value="<? echo $salario; ?>"></td>
      <td>Limite</td>
      <td><input name="limite" type="text" id="limite" value="<? echo $limite; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cond Pagto:</td>
      <td><select name="condpagto" id="select4">
        <option><? echo $linha[17]; ?></option>
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
      <td><font color="#0000FF">
        <select name="representante" id="select3">
          <option selected>
          <?  echo $linha[16]; ?>
          </option>
          <?


    $sql = "select * from representantes order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
        </select>
*</font> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Transportadora:</td>
      <td><input name="transportadora" type="text" id="transportadora3" value="<? echo $linha[19]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF"><strong>(Fob)</strong></font> </td>
      <td>Modo Pagto:</td>
      <td><select name="modopagto" id="select5">
        <option><? echo $linha[18]; ?></option>
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
      <td colspan="3"><div align="left"><strong><font color="#0000FF" size="4">Dados 
          para Cobran&ccedil;a:</font></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Empresa:</td>
      <td><input name="empresa_trab" type="text" id="empresa_trab" value="<? echo $empresa_trab; ?>" size="50" maxlength="50"></td>
      <td>Telefone:</td>
      <td><input name="tel_trab" type="text" id="tel_trab" value="<? echo $tel_trab; ?>"></td> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco_cob" type="text" id="endereco_cob2" value="<? echo $linha[21]; ?>" size="50" maxlength="50"></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero_cob" type="text" id="numero_cob3" value="<? echo $linha[22]; ?>" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro_cob" type="text" id="bairro_cob2" value="<? echo $linha[23]; ?>" size="50" maxlength="50"></td>
      <td>Cidade:</td>
      <td><input name="cidade_cob" type="text" id="cidade_cob2" value="<? echo $linha[24]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado_cob" id="select2">
        <option><? echo $linha[25]; ?></option>
        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
      </select></td>
      <td>Cep:</td>
      <td><input name="cep_cob" type="text" id="cep_cob3" value="<? echo $linha[26]; ?>" size="9" maxlength="9"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email_cob" type="text" id="email4" value="<? echo $linha[27]; ?>" size="50" maxlength="50"></td>
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
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Pessoas autorizadas a comprar :</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome1" type="text" id="nome1" value="<? echo $nome1; ?>" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf1" type="text" id="cpf1" value="<? echo $cpf1; ?>" size="11" maxlength="11"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome2" type="text" id="nome2" value="<? echo $nome2; ?>" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf2" type="text" id="cpf2" value="<? echo $cpf2; ?>" size="11" maxlength="11"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome:</td>
      <td><input name="nome3" type="text" id="nome3" value="<? echo $nome3; ?>" size="50" maxlength="50"></td>
      <td>CPF:</td>
      <td><input name="cpf3" type="text" id="cpf3" value="<? echo $cpf3; ?>" size="11" maxlength="11"></td>
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
      <td><input name="endereco_ent" type="text" id="endereco_cob3" value="<? echo $linha[28]; ?>" size="50" maxlength="50"></td>
      <td>N&uacute;mero:</td>
      <td><input name="numero_ent" type="text" id="numero_cob4" value="<? echo $linha[29]; ?>" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro_ent" type="text" id="bairro_cob3" value="<? echo $linha[30]; ?>" size="50" maxlength="50"></td>
      <td>Cidade:</td>
      <td><input name="cidade_ent" type="text" id="cidade_cob3" value="<? echo $linha[31]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado_ent" id="select6">
        <option><? echo $linha[32]; ?></option>
        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
      </select></td>
      <td>Cep:</td>
      <td><input name="cep_ent" type="text" id="cep_cob4" value="<? echo $linha[33]; ?>" size="9" maxlength="9"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email_ent" type="text" id="email_cob" value="<? echo $linha[34]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Observa&ccedil;&otilde;es:</td>
      <td colspan="3" align="left" valign="top"> <textarea name="obs" cols="92" rows="3" wrap="PHYSICAL" id="obs"><? echo $linha[35]; ?></textarea> 
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario" value="<? echo $linha[36]; ?>" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Senha: </td>
      <td><input name="senha" type="text" id="senha3" value="<? echo $linha[37]; ?>" size="25" maxlength="25"> 
        <font color="#0000FF">*</font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><input type="submit" name="Submit" value="Altualizar dados do Cliente"> 
        <input type="reset" name="Submit2" value="Limpar">
        <span class="style1">        </span> </td>
      <td><div align="right"> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	          <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>

	
  </table>
</form>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>