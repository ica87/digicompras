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
<title>EDI&Ccedil;&Atilde;O DE CORRESPONDENTE</title>
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

$nome = $_POST['nome'];


$sql = "SELECT * FROM correspondentes where nome = '$nome'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];
$sexo = $linha[2];
$estadocivil = $linha[3];
$cpf = $linha[4];
$rg = $linha[5];
$orgao = $linha[6];
$emissao = $linha[7];
$data_nasc = $linha[8];
$pai = $linha[9];
$mae = $linha[10];
$endereco = $linha[11];
$numero = $linha[12];
$bairro = $linha[13];
$complemento = $linha[14];
$cidade = $linha[15];
$estado = $linha[16];
$cep = $linha[17];
$telefone = $linha[18];
$celular = $linha[19];
$email = $linha[20];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$obs = $linha[28];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$usuario_op = $linha[40];
$senha_op = $linha[41];
$tipo_op = $linha[42];
$funcao = $linha[43];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];
$banco = $linha[48];
$agencia = $linha[49];
$conta = $linha[50];
$comissao = $linha[51];
$produto1 = $linha[52];
$produto2 = $linha[53];
$produto3 = $linha[54];
$prazo1 = $linha[55];
$prazo2 = $linha[56];
$prazo3 = $linha[57];
$com1 = $linha[58];
$com2 = $linha[59];
$com3 = $linha[60];
$fator1 = $linha[61];
$fator2 = $linha[62];
$fator3 = $linha[63];

$produto4 = $linha[64];
$produto5 = $linha[65];
$produto6 = $linha[66];
$produto7 = $linha[67];
$produto8 = $linha[68];
$produto9 = $linha[69];
$produto10 = $linha[70];

$prazo4 = $linha[71];
$prazo5 = $linha[72];
$prazo6 = $linha[73];
$prazo7 = $linha[74];
$prazo8 = $linha[75];
$prazo9 = $linha[76];
$prazo10 = $linha[77];

$com4 = $linha[78];
$com5 = $linha[79];
$com6 = $linha[80];
$com7 = $linha[81];
$com8 = $linha[82];
$com9 = $linha[83];
$com10 = $linha[84];


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
<form name="form1" method="post" action="grava_editar_correspondente.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td>&nbsp;</td>
      <td>Esse operador trabalha conosco desde </td>
      <td><strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Tipo de operador </td>
      <td><select name="tipo_op" id="tipo_op">
          <option selected><? echo $tipo_op; ?></option>
          <?


    $sql = "select * from tipo_operador order by tipo_op asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['tipo_op']. ">".$x['tipo_op']."</option>";
    }
?>
      </select></td> 
      <td>C&oacute;digo</td>
      <td><strong><font color="#0000FF"><? echo $codigo; ?></font>
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Estabelecimento</td>
      <td><strong><font color="#0000FF">              <select name="estab_pertence" id="select6">
                <option selected><? echo $estab_pertence; ?></option>
                <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
              </select>
      </font></strong></td>
      <td>Cidade</td>
      <td><strong><font color="#0000FF"><? echo $cidade_estab_pertence; ?>
              <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo $cidade_estab_pertence; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><strong><font color="#0000FF"><? echo $tel_estab_pertence; ?>
              <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $tel_estab_pertence; ?>">
      </font></strong></td>
      <td>E_Mail</td>
      <td><strong><font color="#0000FF"><? echo $email_estab_pertence; ?>
              <input name="email_estab_pertence" type="hidden" id="estab_pertence3" value="<? echo $email_estab_pertence; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td>
      <td>Fun&ccedil;&atilde;o</td>
      <td><strong>
        <input name="funcao" type="text" id="funcao" value="<? echo $funcao; ?>">
      </strong>        </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="12%">Data Nasc </td>
      <td width="33%"><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10"></td>
      <td width="21%">Sexo</td>
      <td width="33%"><select name="sexo" id="sexo">
	    <option selected><? echo $sexo; ?></option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>        
        <font color="#0000FF">&nbsp; </font></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado Civil </td>
      <td><select name="estadocivil" id="select3">
        <option selected><? echo $estadocivil; ?></option>
        <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select>        </td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>" size="18" maxlength="14"> 
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25"> 
        &Oacute;rg&atilde;o 
        <input name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10"> 
        dd/mm/aaaa </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50"> 
      </td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10"> 
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50"> 
      </td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
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
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cep</td>
      <td><input name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9">
Use o formato 00000-000</td>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14"> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular</td>
      <td><input name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14"></td>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Usu&aacute;rio</td>
      <td><input name="usuario" type="text" id="usuario" value="<? echo $usuario_op; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><input name="senha" type="text" id="senha" value="<? echo $senha_op; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Banco</td>
      <td><input name="banco" type="text" id="banco" value="<? echo $banco; ?>" size="40"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ag&ecirc;ncia</td>
      <td><input name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Conta</td>
      <td><input name="conta" type="text" id="conta" value="<? echo $conta; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Comiss&atilde;o</td>
      <td><input name="comissao" type="text" id="comissao" size="4" maxlength="4"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Produto / Servi&ccedil;o </div></td>
      <td>
        <div align="left">
          <input name="produto1" type="text" id="produto1" value="<? echo $produto1; ?>" size="40">
        </div></td>
      <td>
        <div align="left">Prazo
          <input name="prazo1" type="text" id="prazo1" value="<? echo $prazo1; ?>">
        </div></td>
      <td>
        <div align="left">Comiss&atilde;o
          <input name="com1" type="text" id="com1" value="<? echo $com1; ?>" size="10">
        <input name="fator1" type="hidden" id="fator1" value="<? echo $fator1; ?>">
      </div></td><td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Produto / Servi&ccedil;o </div></td>
      <td>
        <div align="left">
          <input name="produto2" type="text" id="produto2" value="<? echo $produto2; ?>" size="40">
        </div></td>
      <td>
        <div align="left">Prazo
          <input name="prazo2" type="text" id="prazo2" value="<? echo $prazo2; ?>">
        </div></td><td><div align="left">Comiss&atilde;o
          <input name="com2" type="text" id="com2" value="<? echo $com2; ?>" size="10">
      <input name="fator2" type="hidden" id="fator2" value="<? echo $fator2; ?>">
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Produto / Servi&ccedil;o </div></td>
      <td>
        <div align="left">
          <input name="produto3" type="text" id="produto3" value="<? echo $produto3; ?>" size="40">
        </div></td>
      <td>
        <div align="left">Prazo
          <input name="prazo3" type="text" id="prazo3" value="<? echo $prazo3; ?>">
        </div></td><td><div align="left">Comiss&atilde;o
          <input name="com3" type="text" id="com3" value="<? echo $com3; ?>" size="10">
      <input name="fator3" type="hidden" id="fator3" value="<? echo $fator3; ?>">
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto4" type="text" id="produto4" value="<? echo $produto4; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo4" type="text" id="prazo4" value="<? echo $prazo4; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com4" type="text" id="com4" value="<? echo $com4; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto5" type="text" id="produto33" value="<? echo $produto5; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo5" type="text" id="prazo33" value="<? echo $prazo5; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com5" type="text" id="com33" value="<? echo $com5; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto6" type="text" id="produto34" value="<? echo $produto6; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo6" type="text" id="prazo34" value="<? echo $prazo6; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com6" type="text" id="com34" value="<? echo $com6; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto7" type="text" id="produto35" value="<? echo $produto7; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo7" type="text" id="prazo35" value="<? echo $prazo7; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com7" type="text" id="com35" value="<? echo $com7; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto8" type="text" id="produto36" value="<? echo $produto8; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo8" type="text" id="prazo36" value="<? echo $prazo8; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com8" type="text" id="com36" value="<? echo $com8; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto9" type="text" id="produto37" value="<? echo $produto9; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo9" type="text" id="prazo37" value="<? echo $prazo9; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com9" type="text" id="com37" value="<? echo $com9; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Produto / Servi&ccedil;o </td>
      <td><input name="produto10" type="text" id="produto38" value="<? echo $produto10; ?>" size="40"></td>
      <td>Prazo
      <input name="prazo10" type="text" id="prazo38" value="<? echo $prazo10; ?>"></td>
      <td>Comiss&atilde;o
      <input name="com10" type="text" id="com38" value="<? echo $com10; ?>" size="10"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
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
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Alterar dados do Correspondente"> 
          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>
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


$sql = "SELECT * FROM admgeral where nome = '$nome'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
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
