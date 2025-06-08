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
<title>ALTERA&Ccedil;&Atilde;O DO CADASTRO DE ESTABELECIMENTO</title>
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

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$nfantasia = $_POST['nfantasia'];


$sql = "SELECT * FROM estabelecimentos where nfantasia = '$nfantasia'";
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
$banco = $linha[42];
$agencia = $linha[43];
$conta = $linha[44];
$categoria = $linha[45];
$foto = $linha[46];
$aliquota = $linha[47];
$usuario_estab = $linha[48];
$senha_estab = $linha[49];
$status = $linha[50];
$plano = $linha[51];
$valor = $linha[52];
$atividade = $linha[56];

?>
<? } ?>
<?
//Define o caminho da pasta/arquivo
$pasta = "$cnpj";
//Checa se o arquivo/pasta existe
if(file_exists($pasta)) {  }
else {
mkdir("$cnpj");
chmod ("$cnpj",0755);

}
?>


<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[44];
$cidade_estabelecimento_alterou = $linha[45];
$tel_estabelecimento_alterou = $linha[46];
$email_estabelecimento_alterou = $linha[47];

?>
<? } ?>
<table width="100%"  border="0">
  <tr>
    <td>Foto do estabelecimento </td>
    <td width="29%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="16%"> <? printf("<img src='$cnpj/$foto' border='0' height='56'>"); ?> </td>
    <td><? printf("<a href='foto.php?chamar=$codigo' >Trocar foto</a> ");?></td>
    <td>&nbsp;</td>
    <td width="30%">&nbsp;</td>
    <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
</table>
<form name="form1" method="post" action="grava_editar_estabelecimento.php">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><strong><font size="4">Tela de altera&ccedil;&atilde;o do cadastro de estabelecimentos!. </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>C&oacute;digo</td>
      <td><? echo $codigo; ?>
      <input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo; ?>"></td>
      <td>Status</td>
      <td><select name="status" id="status">
        <option selected><? echo $status; ?></option>
        <option>Ativo</option>
        <option>Inativo</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Categoria</td>
      <td><select name="categoria" id="select2">
          <option selected><? echo $categoria; ?></option>
          <?


    $sql = "select * from categorias order by categoria asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['categoria']."</option>";
    }
?>
        </select>
      Atividade
      <input name="atividade" type="text" id="atividade" value="<? echo $atividade; ?>"></td>
      <td>Operador que atende </td>
      <td><select name="operador_atendente" id="select6">
        <option selected><? echo $operador_atendente; ?></option>
        <?


    $sql = "select * from adm where estab_pertence = 'Digicompras' order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="15%">Raz&atilde;o Social </td>
      <td width="37%"><input name="razaosocial" type="text" id="razaosocial" value="<? echo $razaosocial; ?>" size="50" maxlength="50"></td>
      <td width="11%">Nome Fantasia </td>
      <td width="36%"> <font color="#0000FF">
        <input name="nfantasia" type="text" id="data_nasc2" value="<? echo $nfantasia; ?>" size="50" maxlength="50">
      </font></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td>CNPJ</td>
      <td><input name="cnpj" type="text" id="cnpj" value="<? echo $cnpj; ?>" size="15" maxlength="15"></td>
      <td>INSCR EST </td>
      <td><input name="inscr_est" type="text" id="inscr_est" value="<? echo $inscr_est; ?>" size="25" maxlength="25"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50">      </td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10">      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50">      </td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Cep</td>
      <td><input name="cep" type="text" id="cep2" value="<? echo $cep; ?>" size="9" maxlength="9">
      Use o formato 00000-000</td>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade2" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Estado</td>
      <td>        <select name="estado" id="select3">
          <option selected><? echo $estado; ?></option>
          <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
        </select></td>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone2" value="<? echo $telefone; ?>" size="15" maxlength="14"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Fax</td>
      <td><input name="fax" type="text" id="telefone3" value="<? echo $fax; ?>" size="15" maxlength="14"></td>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50">      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Site</td>
      <td><input name="site" type="text" id="telefone" value="<? echo $site; ?>" size="50" maxlength="50"></td>
      <td>Propriet&aacute;rio</td>
      <td><input name="proprietario" type="text" id="site" value="<? echo $proprietario; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>"></td>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" value="<? echo $rg; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Plano</td>
      <td><select name="plano" id="select">
        <option selected><? echo $plano; ?></option>
        <?


    $sql = "select * from planos order by plano asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['plano']."</option>";
    }
?>
      </select></td>
      <td>Valor</td>
      <td><? echo "R$ ".$valor; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><? 
if($plano=="Master"){ echo "<input name='senha' type='text' id='senha' value='$senha_estab'>"; }
else{
echo "<input name='senha' type='hidden' id='senha' value='$senha_estab'>";}
?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Alterar dados do  Estabelecimento">
      <input type="reset" name="Submit2" value="Limpar"></td>
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
      <td><input name="banco" type="hidden" id="banco" value="<? echo $banco; ?>"></td>
      <td>&nbsp;</td>
      <td><input name="usuario" type="hidden" id="usuario" value="<? echo $usuario_estab; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="agencia" type="hidden" id="agencia" value="<? echo $agencia; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="conta" type="hidden" id="conta" value="<? echo $conta; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="aliquota" type="hidden" id="aliquota">      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
        <input name="motivo_exclusao" type="hidden" id="motivo_exclusao">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;      </td>
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
<form name="form1" method="post" action="calcula_pedido.php">
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
      <td> <strong>Data do Cadastro <br>
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
<strong><font color="#FF0000"></font></strong>
<form name="form1" method="post" action="calcula_pedido.php">
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM estabelecimentos where nfantasia = '$nfantasia'";
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
$operador_alterou2 = $linha[31];
$cel_operador_alterou2 = $linha[32];
$email_operador_alterou2 = $linha[33];
$estabelecimento_alterou2 = $linha[34];
$cidade_estabelecimento_alterou2 = $linha[35];
$tel_estabelecimento_alterou2 = $linha[36];
$email_estabelecimento_alterou2 = $linha[37];

?>
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4" bgcolor="#CCCCCC"><div align="center"><strong><font color="#FF0000">&Uacute;ltima altera&ccedil;&atilde;o efetuada  por: </font></strong>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><strong>Operador<br>
        </strong><strong><font color="#0000FF"><? echo $operador_alterou2; ?>
        
      </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou2; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="20%" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou2; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_alterou2; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_alterou2; ?>
      </font></strong></td>
      <td bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_alterou2; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td bgcolor="#CCCCCC"><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou2; ?>          </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Data &uacute;ltima altera&ccedil;&atilde;o <font color="#0000FF"> <br>
              <? echo $dataalteracao; ?> </font></strong></td>
      <td bgcolor="#CCCCCC"><strong>Hora &uacute;ltima altera&ccedil;&atilde;o <font color="#0000FF"> <br>
              <? echo $horaalteracao; ?> </font></strong></td>
      <td bgcolor="#CCCCCC"><strong></strong></td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <? } ?>  
  <strong><font color="#FF0000">
  
  </font></strong>
</form>
<form name="form1" method="post" action="calcula_pedido.php">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong><font color="#FF0000">Cadastro sendo atualmente alterado por: 
        <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[44];
$cidade_estabelecimento_alterou = $linha[45];
$tel_estabelecimento_alterou = $linha[46];
$email_estabelecimento_alterou = $linha[47];

?>
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong>Operador<br>
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
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <strong><font color="#FF0000">
  <? } ?>
  </font></strong>
</form>
</body>
</html>
