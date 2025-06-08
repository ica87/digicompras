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
$nfantasia = $_POST['nfantasia'];

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
$operador_alterou = $linha[31];
$cel_operador_alterou = $linha[32];
$email_operador_alterou = $linha[33];
$estabelecimento_alterou = $linha[34];
$cidade_estabelecimento_alterou = $linha[35];
$tel_estabelecimento_alterou = $linha[36];
$email_estabelecimento_alterou = $linha[37];
$operador_atendente = $linha[41];
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


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[12];
$email_operador_alterou = $linha[13];
$estabelecimento_alterou = $linha[18];
$cidade_estabelecimento_alterou = $linha[19];
$tel_estabelecimento_alterou = $linha[20];
$email_estabelecimento_alterou = $linha[21];

?>
  <? } ?>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
</form>
<form name="form1" method="post" action="excluir_estabelecimento.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="4"><strong>
        <input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo; ?>">
      </strong>
      <input name="razaosocial" type="hidden" id="nome2" value="<? echo $razaosocial; ?>">
      <input name="nfantasia" type="hidden" id="data_nasc2" value="<? echo $nfantasia; ?>">
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">
      <input name="inscr_est" type="hidden" id="inscr_est" value="<? echo $inscr_est; ?>">
      <input name="endereco" type="hidden" id="cpf2" value="<? echo $endereco; ?>">
      <input name="numero" type="hidden" id="rg2" value="<? echo $numero; ?>">
      <input name="bairro" type="hidden" id="bairro" value="<? echo $bairro; ?>">
      <input name="complemento" type="hidden" id="complemento" value="<? echo $complemento; ?>">
      <input name="cep" type="hidden" id="pai2" value="<? echo $cep; ?>">
      <input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>">
      <input name="estado" type="hidden" id="endereco2" value="<? echo $estado; ?>">
      <input name="telefone" type="hidden" id="telefone" value="<? echo $telefone; ?>">
      <input name="fax" type="hidden" id="bairro2" value="<? echo $fax; ?>">
      <input name="email" type="hidden" id="email" value="<? echo $email; ?>">
      <input name="site" type="hidden" id="cidade2" value="<? echo $site; ?>">
      <input name="proprietario" type="hidden" id="proprietario" value="<? echo $proprietario; ?>">
      <input name="cpf" type="hidden" id="cep2" value="<? echo $cpf; ?>">
      <input name="rg" type="hidden" id="telefone2" value="<? echo $rg; ?>">
      <input name="obs" type="hidden" id="celular" value="<? echo $obs; ?>">
      <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo $datacadastro; ?>">
      <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo $horacadastro; ?>">
      <input name="operador" type="hidden" id="operador" value="<? echo $operador; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $cel_operador; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_operador; ?>"> <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
      <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">
      <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
      <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>"></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><strong><font color="#FF0000">Aten&ccedil;&atilde;o!!..Voc&ecirc; est&aacute; prestes a excluir o cadastro do estabelecimento abaixo!</font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome Fantasia </td>
      <td colspan="2"><? echo $nfantasia; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>CNPJ</td>
      <td colspan="2"><? echo $cnpj; ?></td>
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
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo $dataalteracao; ?>">
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
        <input name="operador_atendente" type="hidden" id="operador_atendente" value="<? echo $operador_atendente; ?>">
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
