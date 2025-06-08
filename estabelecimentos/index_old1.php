<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["data_hoje"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["dia"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["mes"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["ano"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["mes_ano"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.

else //se não for...
header("Location: alerta.php");


$_SESSION["codigo"]; //verifica se a variável "senha" é verdadeira...
$mensagem = $_GET['mensagem'];


//$referencia = $vg;



?>


<html>
<head>
<title>Servi&ccedil;os ao Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<?

require '../conect/conect.php';

$codigo = $_SESSION['codigo'];

$data_hoje = $_SESSION['data_hoje'];
$dia = $_SESSION['dia'];
$mes = $_SESSION['mes'];
$ano = $_SESSION['ano'];
$mes_ano = $_SESSION['mes_ano'];

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$codigo_retirar = $_POST['codigo'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`inadimplentes` set `codigo` = '$codigo_retirar',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`status` = 'Pago' where `inadimplentes`. `codigo` = '$codigo_retirar' limit 1 ";
}

mysql_query($comando,$conexao);


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>" 
<? } ?>

<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="../background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>

<?



$sql = "SELECT * FROM estabelecimentos where cnpj = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


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
$senha = $linha[49];
$status = $linha[50];

?>

<?



$sql = "SELECT * FROM empresas_conveniadas where nfantasia = '$nfantasia'";
$res = mysql_query($sql);
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$status = $linha[42];
}
?>





  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="4">
    <tr>
      <td width="27%"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $nfantasia; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="24%"><strong>E-mail:</strong><br>
          <strong><font color="#0000FF"><? echo $email; ?></font></strong> </td>
      <td width="20%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $telefone; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="29%" valign="top"><div align="center"> <strong><font color="#0000FF">Confira a data de hoje </font></strong><br>
              <strong><font color="#0000FF"><? echo $data_hoje; ?></font></strong></div></td>
    </tr>
    <tr>
      <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Estado: <br>
          <font color="#0000FF"><? echo $estado; ?> </font></strong></td>
      <td colspan="2"><strong>Categoria: <br>
          <font color="#0000FF"><? echo $categoria; ?> </font></strong><strong></strong></td>
    </tr>
<?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

<? } ?>
</table>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <div align="center"></div>
<table width="100%"  border="0">
  <tr>
    <td colspan="3"><div align="center"><strong><font color="#FF0000"><? echo $mensagem; ?></font></strong></div></td>
  </tr>
  <tr>
    <td><form action="inadimplentes/inserir.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Inserir inadimplente">
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="23%"><div align="center">N&ordm; do CPF a ser pesquisado </div></td>
    <td colspan="2"><form action="index.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input  name="cpf" type="text" id="cpf" size="11" maxlength="11">
      <input type="submit" name="Submit323" value="Consultar">
    </form></td>
  </tr>
</table>
  <?
$cpf = $_POST['cpf'];
  ?>

<strong></strong>
<div align="center"><strong>
<?
if(empty($cpf)){ }
else{

echo "Prezado Operador!";
}
?></strong>
  <strong></strong></div>
<table width="150%"  border="0">
  <tr>
    <td colspan="7">    <div align="center"><strong><? 
if(empty($cpf)){ }
else{
echo "Total da Dívida do CPF $cpf se encontra num total de </strong><strong><font color='#0000FF'></font></strong> <strong>R$</strong> <strong>";
        

		
$sql = "select sum(salario) as total from inadimplentes where cpf = '$cpf' and status = 'Ativo'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
if($valor_total==0){
echo "0.00";
}else{
echo "".$valor_total;
}
}
?>
    </strong></div></td>
  </tr>
  <tr>
    <td colspan="7"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="18%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Nome"; } ?></strong></div></td>
    <td width="17%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Empresa"; } ?></strong></div></td>
    <td width="14%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Telefone"; } ?></strong></div></td>
    <td width="12%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Valor da Dívida"; } ?> </strong></div></td>
    <td width="15%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Data da inclusão"; } ?></strong></div></td>
    <td width="24%"><div align="center"><strong><? if(empty($cpf)){ }
else{
echo "Hora da inclusão"; } ?> </strong></div></td>
    <td width="24%"><div align="center"><strong>
      <? if(empty($cpf)){ }
else{
echo "Observações"; } ?>
    </strong></div></td>
  </tr>
  <?

$sql = "SELECT * FROM inadimplentes where cpf = '$cpf' and status = 'Ativo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

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
$status_usuario = $linha[46];
$salario = $linha[47];
$limite = $linha[48];
$operador_atende = $linha[49];
$status_de_envio = $linha[52];


?>

  <tr>
    <td><div align="center"><? echo $nome; ?></div></td>
    <td valign="middle"><form name="form1" method="post" action="index.php">
      <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>"> 
        <? if($estab_pertence==$nfantasia){ echo"<input type='submit' name='Submit' value='$estab_pertence'>"; }
		else{
echo $estab_pertence; 
}
		 ?></div>
    </form>    </td>
    <td><div align="center"><? echo $tel_estab_pertence; ?></div></td>
    <td><div align="center"><? echo "R$ ".$salario; ?></div></td>
    <td><div align="center"><? echo $datacadastro; ?></div></td>
    <td><div align="center"><? echo $horacadastro; ?></div></td>
    <td><div align="center"><? echo $obs; ?></div></td>
  </tr>
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}}
?>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>