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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style5 {font-size: 18px}
.style9 {font-size: 14px; font-weight: bold; }
.style10 {font-size: 14px}
-->
</style></head>

<?

require '../../../conect/conect.php';

			
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
<?
// dados do aluno
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');
$nfantasia = $_POST['nfantasia'];
$historico = $_POST['historico'];
$categoria_conta = $_POST['categoria_conta'];
$valor = $_POST['valor'];
$num_sete_um = $_POST['num_sete_um'];





//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



?>

<?

$comando = "insert into cx_entradas(dia,mes,ano,datacadastro,horacadastro,nfantasia,historico,categoria_conta,valor,num_sete_um,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento) values('$dia','$mes','$ano','$datacadastro','$horacadastro','$nfantasia','$historico','$categoria_conta','$valor','$num_sete_um','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento')";

mysql_query($comando,$conexao) or die("Erro ao registrar a entrada no Caixa!... Tente novamente");

echo "Entrada no caixa registrada com sucesso!<br><br>";



$sql = "SELECT * FROM cx_entradas order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$nfantasia2 = $linha[22];
$historico = $linha[23];
$categoria_conta = $linha[24];
$valor = $linha[25];
$num_sete_um = $linha[26];
$modo_pagto = $linha[27];
$num_cheque = $linha[28];
$banco = $linha[29];


$operador = $linha[1];
$cel_operador = $linha[2];
$email_operador = $linha[3];
$estabelecimento = $linha[4];
$cidade_estabelecimento = $linha[5];
$tel_estabelecimento = $linha[6];
$email_estabelecimento = $linha[7];

}
?>




<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá Alessandra! Foi registrado uma entrada no caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";
	
	$mens  .=  "Código do Aluno : ".$codigo_aluno."                                                    \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Nome do Responsável: ".$nome_resp."                                                       \n";
	$mens  .=  "Curso : ".$curso."                                                    \n";
	$mens  .=  "Duração : ".$duracao."                                                    \n";
	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";
	$mens  .=  "Vencimento: ".$vencto."                                                    \n";
	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";
	$mens  .=  "Quitação : ".$quitacao."                                                    \n";
	$mens  .=  "Observações: ".$obs."                                                       \n";
	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";
	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";
	
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Entrada no caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="receber.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="23%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="1">
  <tr>
    <td colspan="4"><div align="center" class="style1">Aviso de lan&ccedil;amento n&ordm; <? echo $codigo; ?></div></td>
  </tr>
  <tr>
    <td width="21%"><span class="style4">Data do lan&ccedil;amento </span></td>
    <td width="20%"><span class="style9"><? echo $datacadastro; ?></span></td>
    <td width="23%"><span class="style4">Hora do lan&ccedil;amento </span></td>
    <td width="36%"><span class="style9"><? echo $horacadastro; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Loja</strong></span></td>
    <td><span class="style9"><? echo $nfantasia2; ?></span></td>
    <td><span class="style5"><strong>Categoria da conta </strong></span></td>
    <td><span class="style9"><? echo $categoria_conta; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Valor</strong></span></td>
    <td><span class="style9"><? echo "R$ ".$valor; ?></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Hist&oacute;rico</strong></span></td>
    <td colspan="3"><span class="style9"><? echo $historico; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style10"><strong>N&ordm; do lan&ccedil;amento no sistema <? echo $codigo; ?></strong></span></td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Cadastro efetuado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento; ?> </font></strong></td>
    <td><strong><font color="#000000">Assinatura Alessandro : </font><font color="#0000FF"><br>
            <? //echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>