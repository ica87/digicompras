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

background="../background/<? //printf("$linha[1]"); ?>" bgproperties="fixed">
  
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
$usuario_estab = $linha[48];
$senha_estab = $linha[49];
$status_estabelecimento = $linha[50];

?>

<?



//$sql = "SELECT * FROM empresas_conveniadas where nfantasia = '$estab_pertence_op'";
//$res = mysql_query($sql);
//while($linha=mysql_fetch_row($res)) {
//$reg++;


//$status = $linha[42];
//}
?>





  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="4">
    <tr>
      <td width="27%"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $razaosocial; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="24%"><strong>E-mail:</strong><br>
          <strong><font color="#0000FF"><? echo $email; ?></font></strong> </td>
      <td width="20%"><strong>Fax:<font color="#0000FF"><br>
              <? echo $fax; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="14%" valign="top"><div align="center"> <strong><font color="#0000FF">Confira a data de hoje </font></strong><br>
              <strong><font color="#0000FF"><? echo $data_hoje; ?></font></strong></div></td>
      <td width="15%" valign="top"><div align="center"><? printf("<a href='foto.php?chamar=$codigo' >Trocar fotos</a> ");?></div></td>
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
    <td colspan="3"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="23%"><div align="center">N&ordm; do cart&atilde;o a ser pesquisado </div></td>
    <td width="23%"><form action="index.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>

      <input  name="codigo" type="text" id="codigo" size="15">      
      <input type="submit" name="Submit3" value="Consultar">
    </form></td>
    <td width="54%"><form name="form1" method="post" action="relatorio_de_faturamento_mensal_todas_empresas_sintetico.php">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    Informe o <strong><font color="#FF0000">m&ecirc;s-ano</font></strong> para gerar o relat&oacute;rio 
    <input name="mes_ano" type="text" id="mes_ano" size="7" maxlength="7">
    <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>"> 
    <input type="submit" name="Submit" value="Relat&oacute;rio mensal">  
      </form></td>
  </tr>
</table>
<?

$num_cartao = $_POST['codigo'];

?>

<?

$sql = "SELECT * FROM usuarios where codigo = '$num_cartao'";
$res = mysql_query($sql);
$reg = 0;
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
$saldo_de_pontos = $linha[55];


?>
<?
//$sql = "SELECT * FROM empresas_conveniadas where nfantasia = '$estab_pertence'";
//$res = mysql_query($sql);
//while($linha=mysql_fetch_row($res)) {

//$nfantasia = $linha[2];
//$status = $linha[42];
//}
?>


<strong></strong>
<div align="center"><strong>Prezado Operador!</strong>
  <strong></strong></div>
<table width="100%"  border="0">
  <tr>
    <td width="27%"><strong>Saldo de Pontos<font color="#0000FF"><? echo $saldo_de_pontos; ?></font></strong></td>
    <td width="23%">&nbsp;</td>
    <td width="50%">    <strong>Total de compras realizadas no m&ecirc;s-refer&ecirc;ncia</strong> <strong><font color="#0000FF"><? echo $mes_ano; ?></font></strong> <strong>R$</strong> <strong>
      <?
$sql = "select sum(valor_compra) as total from compras where num_cartao = '$num_cartao' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
if($valor_total==0){
echo "0.00";
}else{
echo "".$valor_total;
}
?>
    </strong></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong></strong></div></td>
  </tr>
  <tr>
    <td colspan="3"><p><strong>O cart&atilde;o de seu cliente <font color="#0000FF"><? echo $nome; ?></font> de N&ordm;</strong> <strong><font color="#0000FF"><? echo $codigo; ?></font></strong><font color="#000000"><strong>, est&aacute; com saldo dispon&iacute;vel em</strong> <strong><font color="#0000FF">
	  <? 
	$calculo = bcsub($limite, $valor_total, 2); 
	echo $calculo;
	?>
	  
	</font>, </strong></font><br>
    <font color="#000000"><strong>Tem seu status definido em </strong> <strong><font color="#0000FF"><? echo $status_usuario; ?></font></strong> <strong>!</strong></font><br>
    <strong><font color="#000000">Status de entrega do cart&atilde;o f&iacute;sico <strong><font color="#0000FF"><? echo $status_de_envio; ?></font></strong></font></strong></p></td>
  </tr>
  <tr>
    <td colspan="3"><form action="verifica_senha.php" method="post" name="form3">
        <p align="center"><strong><font color="#0000FF">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input name="num_cartao" type="hidden" id="num_cartao" value="<? echo $codigo; ?>">
          <input name="calculo" type="hidden" id="calculo" value="<? echo $calculo; ?>">
          Valor da compra R$ 
          <input name="valor_compra" type="text" id="valor_compra" value="<? if($calculo<=0){echo "0.00";}else{ echo $calculo; } ?>" size="6" maxlength="6">
        </font></strong></p>
        <p align="center"><strong><font color="#0000FF">
          Senha do cart&atilde;o 
          <input name="senha_usuario" type="password" id="senha_usuario" size="6" maxlength="6">
        </font></strong>
          <strong><font color="#FF0000"><? 
	      if($status=="Inativo"){echo "<br>Prezado $nome <br>A empresa $nfantasia encontra-se com status $status! <br>Entre em contato com a DIGICOMPRAS para começar a utilizar o cartão fidelidade para seus clientes!";
		  }else{
		  if($status_usuario=="Inativo"){
		  echo "<br>Prezado $nome <br> Seu cartão está inativo! Utilização não permitida<br> Entre em contato com o estabelecimento comercial que cadastrou o cartão fidelidade para maiores informações!";
		  }else{
  		  if($calculo<=0){
		  echo "<br>Você nao tem saldo disponível no momento!";
		  }else{
		  echo '<br><input type="submit" name="Submit4" value="Concluir venda">';
		  }
		  }
		  }
		   ?>
          </font>          </strong>          
          <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
          <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
          <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>"> 
          <input name="data_compra" type="hidden" id="data_compra" value="<? echo $data_hoje; ?>">
        </p>
    </form>      <strong></strong></td>
  </tr>
</table>
<p align="center">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  <? } ?>
</p>
<p align="center">&nbsp;</p>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>