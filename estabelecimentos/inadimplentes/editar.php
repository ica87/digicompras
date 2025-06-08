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
<title>EDI&Ccedil;&Atilde;O DE  USU&Aacute;RIOS DO CART&Atilde;O DIGICOMPRAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';


?>


<?

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
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM estabelecimentos where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$complemento = $linha[8];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email = $linha[14];
$site = $linha[15];
$proprietario = $linha[16];
$cpf = $linha[17];
$rg = $linha[18];
$operador = $linha[24];
$cel_operador = $linha[25];
$email_operador = $linha[26];
$estabelecimento = $linha[27];
$cidade_estabelecimento = $linha[28];
$tel_estabelecimento = $linha[29];
$email_estabelecimento = $linha[30];
$obs = $linha[19];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$dataalteracao = $linha[22];
$horaalteracao = $linha[23];
$operador_alterou = $linha[31];
$cel_operador_alterou = $linha[32];
$email_operador_alterou = $linha[33];
$estabelecimento_alterou = $linha[34];
$cidade_estabelecimento_alterou = $linha[35];
$tel_estabelecimento_alterou = $linha[36];
$email_estabelecimento_alterou = $linha[37];
$operador_atendente = $linha[41];

}
?>



<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>



<form name="form1" method="post" action="grava_editar.php">
<?
$cpf = $_POST['cpf'];


$sql = "SELECT * FROM inadimplentes where cpf = '$cpf' and estab_pertence = '$nfantasia' and status = 'Ativo'";
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
$senha = $linha[40];
$funcao = $linha[41];
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$tel_estab_pertence = $linha[44];
$email_estab_pertence = $linha[45];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];
$operador_atende = $linha[49];
$status_de_envio = $linha[52];

}
?>


<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><div align="center"><strong><font color="#0000FF">O cliente abaixo teve essa inclus&atilde;o efetuada em </font></strong></div></td>
      <td><strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>
      <td><strong>N&ordm; do registro <font color="#0000FF"><? echo $codigo; ?></font>
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
          <font color="#0000FF">
          <input name="status_de_envio" type="hidden" id="status_de_envio" value="<? echo $status_de_envio; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Status da D&iacute;vida </td>
      <td><p><strong><font color="#0000FF">
        </font>
            <select name="status" id="nome">
              <option selected><? echo $status; ?></option>
              <option>Ativo</option>
              <option>Pago</option>
            </select>
            <font color="#0000FF">            </font></strong></p></td>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Empresa</td>
      <td><strong><font color="#0000FF"><? echo $estab_pertence; ?>
              <input name="estab_pertence" type="hidden" id="datacadastro" value="<? echo $estab_pertence; ?>">
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
      <td width="13%">Data Nasc </td>
      <td width="34%"><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10"></td>
      <td width="21%">Sexo</td>
      <td width="31%"><select name="sexo" id="sexo">
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
      <td>Valor Devido  R$ </td>
      <td><input name="salario" type="text" id="salario" value="<? echo $salario; ?>">
  formato 0000.00 </td>
      <td><div align="center"></div></td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $nfantasia; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $telefone; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email; ?>">
        <input name="operador_atende" type="hidden" id="operador_atende" value="<? echo $operador_atende_empresa; ?>"> 
        <input name="senha" type="hidden" id="senha2" value="<? echo $senha; ?>">       
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
        <input type="submit" name="Submit" value="Alterar dados do Usu&aacute;rio"> 
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
        </strong><strong><font color="#0000FF"><? echo $nome_op; ?>
        
      </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_op; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $ceularl_op; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Empresa Conveniada :</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel da Empresa: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence_op; ?>
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail da Empresa: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence_op; ?>
      </font> </strong></td>
      <td><strong>Cidade da Empresa: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence_op; ?>          </font></strong></td>
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
<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>
      </strong><strong><font color="#ff0000"><? echo $operador_alterou; ?> </font></strong><strong><font color="#ff0000"> </font></strong></td>
      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#ff0000"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou; ?> </font><font color="#ff0000"> </font></strong></td>
      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou; ?> </font><font color="#ff0000"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Empresa Conveniada :</strong> <br>
          <strong><font color="#ff0000"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#ff0000"> </font></strong></td>
      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel da Empresa: </font><font color="#0000FF"><br>
      <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail da Empresa: </font><font color="#0000FF"><br>
      <? echo $email_estabelecimento_alterou; ?> </font> </strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade da Empresa: <br>
            <font color="#ff0000"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Altera&ccedil;&atilde;o <br>
            <font color="#ff0000"><? echo $dataalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado a altera&ccedil;&atilde;o <br>
            <font color="#ff0000"><? echo $horaalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>
      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
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
      <td width="18%"><strong><font color="#0000FF"> </font>Empresa Conveniada :</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel da Empresa: </font><font color="#0000FF"><br>
      <? echo $tel_estab_pertence_op; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail da empresa: </font><font color="#0000FF"><br>
      <? echo $email_estab_pertence_op; ?> </font> </strong></td>
      <td><strong>Cidade da Empresa: <br>
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
</form>
</body>
</html>
