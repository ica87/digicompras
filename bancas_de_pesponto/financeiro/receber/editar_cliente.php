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
<title>EDITANDO CADASTRO DE ALUNOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$nome = $_POST['nome'];

			
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


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];


?>
<? } ?>
<form name="form1" method="post" action="grava_editar_cliente.php">
<?

$sql = "SELECT * FROM clientes where nome = '$nome'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$datacadastro = $linha[1];
$horacadastro = $linha[2];
$como_conheceu_escola = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$data_nasc = $linha[6];
$estadocivil = $linha[7];
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
$complemento = $linha[11];
$cidade = $linha[12];
$estado = $linha[13];
$cep = $linha[14];
$telefone = $linha[15];
$celular = $linha[16];
$email = $linha[17];
$cpf = $linha[18];
$rg = $linha[19];
$orgao = $linha[20];
$emissao = $linha[21];
$pai = $linha[22];
$mae = $linha[23];

$nome_resp = $linha[24];
$sexo_resp = $linha[25];
$data_nasc_resp = $linha[26];
$estadocivil_resp = $linha[27];
$endereco_resp = $linha[28];
$numero_resp = $linha[29];
$bairro_resp = $linha[30];
$complemento_resp = $linha[31];
$cidade_resp = $linha[32];
$estado_resp = $linha[33];
$telefone_resp = $linha[34];
$celular_resp = $linha[35];
$email_resp = $linha[36];
$cep_resp = $linha[37];
$cpf_resp = $linha[38];
$rg_resp = $linha[39];
$orgao_resp = $linha[40];
$emissao_resp = $linha[41];
$pai_resp = $linha[42];
$mae_resp = $linha[43];

$obs = $linha[44];

$operador = $linha[45];
$cel_operador = $linha[46];
$email_operador = $linha[47];

$estabelecimento = $linha[48];
$cidade_estabelecimento = $linha[49];
$tel_estabelecimento = $linha[50];
$email_estabelecimento = $linha[51];

$dataalteracao = $linha[52];
$horaalteracao = $linha[53];

$operador_alterou = $linha[54];
$cel_operador_alterou = $linha[55];
$email_operador_alterou = $linha[56];

$estabelecimento_alterou = $linha[57];
$cidade_estabelecimento_alterou = $linha[58];
$tel_estabelecimento_alterou = $linha[59];
$email_estabelecimento_alterou = $linha[60];

}
?>

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="4"><font color="#000000" size="4"> O aluno</font> <font color="#0000FF">&nbsp;</font> <font color="#000000" size="4">&eacute; cadastrado na Jallf Inform&aacute;tica desde</font><strong> <font color="#0000FF"><? echo $datacadastro; ?> </font></strong><font color="#000000"><strong>as</strong></font><font color="#0000FF"><strong> <? echo $horacadastro; ?> </strong></font></td>
    </tr>
    <tr>
      <td colspan="4"><div align="left"></div>        
        <div align="left"><strong>CODIGO DO ALUNO <font color="#0000FF"><strong><? echo $codigo; ?><font color="#0000FF">
          <input name="codigo" type="hidden" id="operador_alterou" value="<? echo $codigo; ?>">
          </font></strong></font></strong></div></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="#0000FF"><strong><font color="#0000FF">Como conheceu a escola?
                <input name="como_conheceu_escola" type="text" id="como_conheceu_escola4" value="<? echo $como_conheceu_escola; ?>" size="40">
      </font></strong></font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td>
      <td>Sexo</td>
      <td><strong>
        <select name="sexo" id="select2">
		<option selected><? echo $sexo; ?></option>
          <option>Masculino</option>
          <option>Feminino</option>
        </select>
      </strong>      </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc" type="text" id="data_nasc2" value="<? echo $data_nasc; ?>" size="15" maxlength="10">
      </strong></td>
      <td>Estado Civil </td>
      <td><select name="estadocivil" id="select4">
        <option selected><? echo $estadocivil; ?></option>
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
      <td width="37%"><input name="endereco" type="text" id="endereco2" value="<? echo $endereco; ?>" size="50" maxlength="50"></td>
      <td width="11%">N&uacute;mero</td>
      <td width="36%">        <font color="#0000FF">
        <input name="numero" type="text" id="numero" value="<? echo $numero; ?>" size="10" maxlength="10"> 
      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50">
      </td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado" id="select7">
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
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone2" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>
      <td>Celular</td>
      <td><input name="celular" type="text" id="celular" value="<? echo $celular; ?>" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email2" value="<? echo $email; ?>" size="50" maxlength="50"></td>
      <td>Cep</td>
      <td><input name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9">
  Use o formato 00000-000</td>
    </tr>
    <tr>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf2" value="<? echo $cpf; ?>" size="18" maxlength="14"></td>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg2" value="<? echo $rg; ?>" size="25" maxlength="25"></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>
        <input name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10">
    dd/mm/aaaa </td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO RESPONS&Aacute;VEL </strong></div></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome_resp" type="text" id="nome2" value="<? echo $nome_resp; ?>" size="50" maxlength="50"></td>
      <td>Sexo</td>
      <td><strong>
        <select name="sexo_resp" id="select2">
		<option selected><? echo $sexo_resp; ?></option>
          <option>Masculino</option>
          <option>Feminino</option>
        </select>
      </strong> </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc_resp" type="text" id="data_nasc2" value="<? echo $data_nasc_resp; ?>" size="15" maxlength="10">
      </strong></td>
      <td>Estado Civil </td>
      <td><select name="estadocivil_resp" id="select4">
          <option selected><? echo $estadocivil_resp; ?></option>
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
      <td><input name="endereco_resp" type="text" id="endereco6" value="<? echo $endereco_resp; ?>" size="50" maxlength="50"></td>
      <td>N&uacute;mero</td>
      <td> <font color="#0000FF">
        <input name="numero_resp" type="text" id="numero_resp" value="<? echo $numero_resp; ?>" size="10" maxlength="10">
      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro_resp" type="text" id="bairro_resp" value="<? echo $bairro_resp; ?>" size="50" maxlength="50">
      </td>
      <td>Complemento</td>
      <td><input name="complemento_resp" type="text" id="endereco4" value="<? echo $complemento_resp; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade_resp" type="text" id="cidade_resp" value="<? echo $cidade_resp; ?>" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado_resp" id="select7">
          <option selected><? echo $estado_resp; ?></option>
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
      <td><input name="telefone_resp" type="text" id="telefone2" value="<? echo $telefone_resp; ?>" size="15" maxlength="14"></td>
      <td>Celular</td>
      <td><input name="celular_resp" type="text" id="celular_resp" value="<? echo $celular_resp; ?>" size="15" maxlength="14"></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email_resp" type="text" id="email2" value="<? echo $email_resp; ?>" size="50" maxlength="50"></td>
      <td>Cep</td>
      <td><input name="cep_resp" type="text" id="cep_resp" value="<? echo $cep_resp; ?>" size="9" maxlength="9">
    Use o formato 00000-000</td>
    </tr>
    <tr> 
      <td>CPF</td>
      <td><input name="cpf_resp" type="text" id="cpf2" value="<? echo $cpf_resp; ?>" size="18" maxlength="14"></td>
      <td>RG</td>
      <td><input name="rg_resp" type="text" id="rg2" value="<? echo $rg_resp; ?>" size="25" maxlength="25"></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>        <input name="orgao_resp" type="text" id="cpf3" value="<? echo $orgao_resp; ?>" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao_resp" type="text" id="cpf4" value="<? echo $emissao_resp; ?>" size="15" maxlength="10"> 
        dd/mm/aaaa </td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai_resp" type="text" id="pai_resp" value="<? echo $pai_resp; ?>" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae_resp" type="text" id="endereco3" value="<? echo $mae_resp; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estab_pertence_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento2" value="<? echo $cidade_estab_pertence_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estab_pertence_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estab_pertence_op; ?>">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Salvar Altera&ccedil;&otilde;es"> 
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
      </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence_op; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence_op; ?> </font></strong></td>
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
  <strong><font color="#0000FF">
  </font></strong>
</form><p></p>
<form name="form1" method="post" action="">
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
</form>
<p></p>
<form name="form1" method="post" action="">
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];


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
      </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence_op; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence_op; ?> </font></strong></td>
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
