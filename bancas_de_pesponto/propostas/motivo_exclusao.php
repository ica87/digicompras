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
<form name="form1" method="post" action="calcula_pedido.php">
  <?
$cpf = $_POST['cpf'];

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM clientes where cpf = '$cpf'";
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

?>
  <? } ?>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
</form>
<form name="form1" method="post" action="calcula_pedido.php">
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
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
</form>
<form name="form1" method="post" action="excluir_cliente.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="4"><strong>
        <input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo; ?>">
      </strong>
      <input name="nome" type="hidden" id="nome2" value="<? echo $nome; ?>">
      <input name="data_nasc" type="hidden" id="data_nasc2" value="<? echo $data_nasc; ?>">
      <input name="sexo" type="hidden" id="sexo" value="<? echo $sexo; ?>">
      <input name="estadocivil" type="hidden" id="estadocivil" value="<? echo $estadocivil; ?>">
      <input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
      <input name="rg" type="hidden" id="rg2" value="<? echo $rg; ?>">
      <input name="orgao" type="hidden" id="orgao" value="<? echo $orgao; ?>">
      <input name="emissao" type="hidden" id="emissao" value="<? echo $emissao; ?>">
      <input name="pai" type="hidden" id="pai2" value="<? echo $pai; ?>">
      <input name="mae" type="hidden" id="mae" value="<? echo $mae; ?>">
      <input name="endereco" type="hidden" id="endereco2" value="<? echo $endereco; ?>">
      <input name="numero" type="hidden" id="numero" value="<? echo $numero; ?>">
      <input name="bairro" type="hidden" id="bairro2" value="<? echo $bairro; ?>">
      <input name="complemento" type="hidden" id="complemento" value="<? echo $complemento; ?>">
      <input name="cidade" type="hidden" id="cidade2" value="<? echo $cidade; ?>">
      <input name="estado" type="hidden" id="estado" value="<? echo $estado; ?>">
      <input name="cep" type="hidden" id="cep2" value="<? echo $cep; ?>">
      <input name="telefone" type="hidden" id="telefone2" value="<? echo $telefone; ?>">
      <input name="celular" type="hidden" id="celular" value="<? echo $celular; ?>">
      <input name="email" type="hidden" id="email" value="<? echo $email; ?>">
      <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo $datacadastro; ?>">
      <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo $horacadastro; ?>">
      <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>">
      <input name="operador" type="hidden" id="operador" value="<? echo $operador; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $cel_operador; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_operador; ?>">
      <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
      <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidae_estabelecimento; ?>">
      <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
      <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>"></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong><font color="#FF0000">Aten&ccedil;&atilde;o!!..Voc&ecirc; est&aacute; prestes a excluir o cadastro do cliente abaixo!</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome</td>
      <td colspan="2"><? echo $nome; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>CPF</td>
      <td colspan="2"><? echo $cpf; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="15%">Qual o motivo da exclus&atilde;o desse cadastro?</td>
      <td width="37%" colspan="2"><textarea name="motivo_exclusao" cols="50" rows="6" id="motivo_exclusao"></textarea></td>
      <td width="36%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
<input name="dataalteracao" type="hidden" id="dataalteracao2" value="<? echo $dataalteracao; ?>">        
<input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo $horaalteracao; ?>">
        <input name="dataexclusao" type="hidden" id="dataexclusao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaexclusao" type="hidden" id="horaexclusao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
      </font></strong></td>
      <td width="11%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Excluir cadastro do Cliente"> 
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
</body>
</html>
