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
<title>CADASTRO DE OPERADORES</title>
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



$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome = $linha[1];
$celular = $linha[19];
$email = $linha[20];
$estabelecimento = $linha[44];
$cidade_estabelecimento = $linha[45];
$tel_estabelecimento = $linha[46];
$email_estabelecimento = $linha[47];

?>
<? } ?>


<?

$estab_pertence = $_POST['estab_pertence'];


$sql = "SELECT * FROM estabelecimentos where nfantasia = '$estab_pertence'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$estab_pertence = $linha[2];
$cidade_estab_pertence = $linha[10];
$email_estab_pertence = $linha[14];
$tel_estab_pertence = $linha[12];

?>
<? } ?>




<form name="form1" method="post" action="grava.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>&nbsp;</td>
      <td><input name="tipo_op" type="hidden" id="tipo_op"></td>
      <td>Data Cadastro </td>
      <td><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
        <input name="datacadastro" type="hidden" id="datacadastro2" value="<? echo date('d-m-Y'); ?>">
        <input name="horacadastro" type="hidden" id="horacadastro2" value="<? echo date('H:i:s'); ?>"></td>
    </tr>
    <tr>
      <td>Estabelecimento</td>
      <td><strong><font color="#0000FF"><? echo $estab_pertence; ?>
        <input name="estab_pertence" type="hidden" id="datacadastro" value="<? echo $estab_pertence; ?>">
      </font></strong></td>
      <td>Cidade</td>
      <td><strong><font color="#0000FF"><? echo $cidade_estab_pertence; ?>
            <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo $cidade_estab_pertence; ?>">
      </font></strong></td>
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
    </tr>
    <tr> 
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" size="50" maxlength="50"></td>
      <td>Fun&ccedil;&atilde;o</td>
      <td><input name="funcao" type="text" id="funcao"></td>
    </tr>
    <tr> 
      <td width="15%">Data Nasc </td>
      <td width="37%"><input name="data_nasc" type="text" id="data_nasc" size="15" maxlength="10"></td>
      <td width="11%">Sexo</td>
      <td width="36%"><select name="sexo" id="sexo">
        <option>Masculino</option>
        <option>Feminino</option>
      </select>        
        <font color="#0000FF">&nbsp; </font></td>
    </tr>
    <tr> 
      <td>Estado Civil </td>
      <td><select name="estadocivil" id="select3">
        <option selected>Selecione</option>
        <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select>        </td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" size="18" maxlength="14"> 
      </td>
    </tr>
    <tr>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" size="25" maxlength="25"> 
        &Oacute;rg&atilde;o 
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
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco" size="50" maxlength="50"> 
      </td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero2" size="10" maxlength="10"> 
      </td>
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
      <td>Cep</td>
      <td><input name="cep" type="text" id="cep" size="9" maxlength="9">
Use o formato 00000-000</td>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="endereco5" size="15" maxlength="14"> </td>
    </tr>
    <tr> 
      <td>Celular</td>
      <td><input name="celular" type="text" id="telefone" size="15" maxlength="14"></td>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Usu&aacute;rio</td>
      <td><input name="usuario" type="text" id="usuario"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><input name="senha" type="text" id="senha"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sal&aacute;rio</td>
      <td><input name="salario" type="text" id="salario"></td>
      <td>Vale Alimenta&ccedil;&atilde;o </td>
      <td><input name="vale_alimentacao" type="text" id="vale_alimentacao"></td>
    </tr>
    <tr>
      <td>Gratifica&ccedil;&atilde;o</td>
      <td><input name="gratificacao" type="text" id="gratificacao"></td>
      <td>Comiss&atilde;o</td>
      <td><input name="comissao" type="text" id="comissao"></td>
    </tr>
    <tr>
      <td>D&eacute;bito Emprestimo </td>
      <td><input name="emprestimo" type="text" id="emprestimo"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Data Admiss&atilde;o </td>
      <td><input name="admissao" type="text" id="admissao"></td>
      <td>Data Demis&atilde;o </td>
      <td><input name="demissao" type="text" id="demissao"></td>
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
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Cadastrar Administrador"> 
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
<form name="form1" method="post" action="calcula_pedido.php">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>
        </strong><strong><font color="#0000FF"><? echo $nome; ?>
        
      </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular; ?>
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
      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>
      <td>&nbsp;</td>
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
</body>
</html>
