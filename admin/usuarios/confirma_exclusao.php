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
<title>DESATIVANDO CART&Atilde;O DIGICOMPRAS</title>
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


$sql = "SELECT * FROM operadores_ec where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo_op = $linha[0];
$nome_op = $linha[1];
$sexo_op = $linha[2];
$estadocivil_op = $linha[3];
$cpf_op = $linha[4];
$rg_op = $linha[5];
$orgao_op = $linha[6];
$emissao_op = $linha[7];
$data_nasc_op = $linha[8];
$pai_op = $linha[9];
$mae_op = $linha[10];
$endereco_op = $linha[11];
$numero_op = $linha[12];
$bairro_op = $linha[13];
$complemento_op = $linha[14];
$cidade_op = $linha[15];
$estado_op = $linha[16];
$cep_op = $linha[17];
$telefone_op = $linha[18];
$celular_op = $linha[19];
$email_op = $linha[20];
$operador_op = $linha[21];
$cel_operador_op = $linha[22];
$email_operador_op = $linha[23];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$obs_op = $linha[28];
//$datacadastro_op = $linha[29];
//$horacadastro_op = $linha[30];
//$dataalteracao_op = $linha[31];
//$horaalteracao_op = $linha[32];
//$operador_alterou_op = $linha[33];
//$cel_operador_alterou_op = $linha[34];
//$email_operador_alterou_op = $linha[35];
//$estabelecimento_alterou_op = $linha[36];
//$cidade_estabelecimento_alterou_op = $linha[37];
//$tel_estabelecimento_alterou_op = $linha[38];
//$email_estabelecimento_alterou_op = $linha[39];
//$usuario_op = $linha[40];
//$senha_op = $linha[41];
//$tipo_op = $linha[42];
//$funcao = $linha[43];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>
<? 
$sql = "SELECT * FROM empresas_conveniadas where nfantasia = '$estab_pertence_op'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$operador_atende_empresa = $linha[41];


}
?>



<p align="center"><strong><font color="#FF0000">CONFIRMA A EXCLUS&Atilde;O DO USU&Aacute;RIO DO CART&Atilde;O DIGICOMPRAS DE SUA EMPRESA? </font></strong></p>
<form name="form1" method="post" action="../index.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>



<form name="form1" method="post" action="grava_exclusao.php">
<?
$nome = $_POST['nome'];


$sql = "SELECT * FROM usuarios where nome = '$nome'";
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
$estab_alterou = $linha[36];
$cidade_estab_alterou = $linha[37];
$tel_estab_alterou = $linha[38];
$email_estab_alterou = $linha[39];
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

}
?>


<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><div align="center"><strong><font color="#0000FF">Esse usu&aacute;rio utiliza o cart&atilde;o digicompras desde </font></strong></div></td>
      <td><strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Motivo exclus&atilde;o </td>
      <td colspan="3"><input name="motivo_exclusao" type="text" id="motivo_exclusao" size="100" maxlength="100"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Status do Cart&atilde;o </td>
      <td><p><strong><font color="#0000FF"><? echo $status; ?>
              <input name="status" type="hidden" id="status" value="<? echo Inativo; ?>">
      </font></strong><strong>
      </strong></p></td>
      <td>N&ordm; do cart&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $codigo; ?></font>
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Empresa Conv. </td>
      <td><strong><font color="#0000FF"><? echo $estab_pertence; ?>
              <input name="estab_pertence" type="hidden" id="datacadastro" value="<? echo "Não ligado a nenhuma empresa!"; ?>">
      </font></strong></td>
      <td>Cidade</td>
      <td><strong><font color="#0000FF"><? echo $cidade_estab_pertence; ?>
              <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo "Será informado quando estiver ligado a alguma empresa"; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><strong><font color="#0000FF"><? echo $tel_estab_pertence; ?>
              <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo "Será informado quando estiver ligado a alguma empresa"; ?>">
      </font></strong></td>
      <td>E_Mail</td>
      <td><strong><font color="#0000FF"><? echo $email_estab_pertence; ?>
              <input name="email_estab_pertence" type="hidden" id="estab_pertence3" value="<? echo "Será informado quando estiver ligado a alguma empresa"; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><strong><font color="#0000FF"><? echo $nome; ?></font></strong>
        <input name="nome" type="hidden" id="nome2" value="<? echo $nome; ?>"></td><td>Fun&ccedil;&atilde;o</td>
      <td><strong>
        <font color="#0000FF"><? echo $funcao; ?></font>
        <input name="funcao" type="hidden" id="funcao" value="<? echo "Será informado quando estiver ligado a alguma empresa"; ?>">
      </strong>        </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="12%">Data Nasc </td>
      <td width="33%"><strong><font color="#0000FF"><? echo $data_nasc; ?></font></strong>
        <input name="data_nasc" type="hidden" id="data_nasc" value="<? echo $data_nasc; ?>"></td><td width="21%">Sexo</td>
      <td width="33%"><strong><font color="#0000FF"><? echo $tel_estab_pertence; ?></font></strong>
        <input name="sexo" type="hidden" id="sexo" value="<? echo $sexo; ?>">       
        <font color="#0000FF">&nbsp; </font></td>
        <td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado Civil </td>
      <td><strong><font color="#0000FF"><? echo $estadocivil; ?></font></strong>
      <input name="estadocivil" type="hidden" id="data_nasc3" value="<? echo $estadocivil; ?>"></td>
      <td>CPF</td>
      <td><strong><font color="#0000FF"><? echo $cpf; ?></font></strong>
        <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>"> 
      </td><td>&nbsp;</td>
    </tr>
    <tr>
      <td>RG</td>
      <td><strong><font color="#0000FF"><? echo $rg; ?></font></strong>
        <input name="rg" type="hidden" id="rg" value="<? echo $rg; ?>"> 
        &Oacute;rg&atilde;o 
          <strong><font color="#0000FF"><? echo $orgao; ?></font></strong>
          <input name="orgao" type="hidden" id="cpf3" value="<? echo $orgao; ?>"></td><td>Emiss&atilde;o</td>
          <td><strong><font color="#0000FF"><? echo $emissao; ?></font></strong>
            <input name="emissao" type="hidden" id="cpf4" value="<? echo $emissao; ?>"> 
          dd/mm/aaaa </td><td>&nbsp;</td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><strong><font color="#0000FF"><? echo $pai; ?></font></strong>
        <input name="pai" type="hidden" id="pai" value="<? echo $pai; ?>"></td><td>M&atilde;e</td>
        <td><strong><font color="#0000FF"><? echo $mae; ?></font></strong>
          <input name="mae" type="hidden" id="endereco3" value="<? echo $mae; ?>"></td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o</td>
      <td><strong><font color="#0000FF"><? echo $endereco; ?></font></strong>
        <input name="endereco" type="hidden" id="endereco" value="<? echo $endereco; ?>"> 
      </td><td>N&uacute;mero</td>
      <td><strong><font color="#0000FF"><? echo $numero; ?></font></strong>
        <input name="numero" type="hidden" id="numero2" value="<? echo $numero; ?>"> 
      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro</p></td>
      <td><strong><font color="#0000FF"><? echo $bairro; ?></font></strong>
        <input name="bairro" type="hidden" id="bairro" value="<? echo $bairro; ?>"> 
      </td><td>Complemento</td>
      <td><strong><font color="#0000FF"><? echo $complemento; ?></font></strong>
        <input name="complemento" type="hidden" id="endereco4" value="<? echo $complemento; ?>"></td><td>&nbsp;</td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><strong><font color="#0000FF"><? echo $cidade; ?></font></strong>
        <input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>"></td><td>Estado</td>
        <td><strong><font color="#0000FF"><? echo $estado; ?></font></strong> <input name="estado" type="hidden" id="complemento" value="<? echo $estado; ?>"></td>
        <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cep</td>
      <td><strong><font color="#0000FF"><? echo $cep; ?></font></strong>
        <input name="cep" type="hidden" id="cep" value="<? echo $cep; ?>">
  Formato 00000-000</td>
      <td>Telefone</td>
      <td><strong><font color="#0000FF"><? echo $telefone; ?></font></strong>
        <input name="telefone" type="hidden" id="endereco5" value="<? echo $telefone; ?>"> </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular</td>
      <td><strong><font color="#0000FF"><? echo $celular; ?></font></strong>
        <input name="celular" type="hidden" id="telefone" value="<? echo $celular; ?>"></td><td>E-Mail</td>
        <td><strong><font color="#0000FF"><? echo $email; ?></font></strong>
          <input name="email" type="hidden" id="email" value="<? echo $email; ?>"></td><td>&nbsp;</td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $obs; ?></font></strong>      <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sal&aacute;rio R$ </td>
      <td><strong><font color="#0000FF"><? echo $salario; ?></font></strong>
        <input name="salario" type="hidden" id="salario" value="<? echo 0.00; ?>">
    formato 0000.00 </td><td><div align="center">Limite</div></td>
      <td><strong><font color="#0000FF">R$ <? echo $limite; ?> 
        <input name="limite" type="hidden" id="complemento3" value="<? echo 0.00; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><strong></strong>
      <input name="senha" type="hidden" id="senha" value="<? echo "Será gravado quando estiver ligado a alguma empresa"; ?>"></td><td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estab_pertence_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estab_pertence_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estab_pertence_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estab_pertence_op; ?>">
        <input name="operador_atende" type="hidden" id="operador_atende" value="<? echo $operador_atende_empresa; ?>">
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
        <input type="submit" name="Submit" value="Sim! Excluir Usu&aacute;rio!"> 
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
      <td width="18%"><strong><font color="#0000FF"> </font>Empresa Conveniada :</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel da Empresa: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence; ?>
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail da Empresa: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence; ?>
      </font> </strong></td>
      <td><strong>Cidade da Empresa: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence; ?>          </font></strong></td>
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
          <strong><font color="#ff0000"><? echo $estab_alterou; ?> </font></strong><strong><font color="#ff0000"> </font></strong></td>
      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel da Empresa: </font><font color="#0000FF"><br>
      <? echo $tel_estab_alterou; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail da Empresa: </font><font color="#0000FF"><br>
      <? echo $email_estab_alterou; ?> </font> </strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade da Empresa: <br>
            <font color="#ff0000"><? echo $cidade_estab_alterou; ?> </font></strong></td>
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
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

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
<? } ?>
</form>
</body>
</html>
