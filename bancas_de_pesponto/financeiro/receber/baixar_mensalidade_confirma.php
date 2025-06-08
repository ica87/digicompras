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
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style2 {color: #0000FF}
.style3 {color: #FF0000}
.style4 {font-size: 18px}
-->
</style></head>

<?

require '../../conect/conect.php';

			
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
$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}


?>


<?
// dados do aluno
$codigo_contas_a_receber = $_POST['codigo_contas_a_receber'];

$codigo_aluno = $_POST['codigo_aluno'];
$nome_aluno = $_POST['nome_aluno'];

$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');
$nome = $_POST['nome'];
$nome_resp = $_POST['nome'];
$cpf_resp = $_POST['cpf_resp'];
$curso = $_POST['curso'];
$modulos = $_POST['modulos'];
$duracao = $_POST['duracao'];
$mensalidade = $_POST['mensalidade'];
$vencto = $_POST['vencto'];
$quant_parc = $_POST['quant_parc'];
$modo_pagto = $_POST['modo_pagto'];
$juros_diarios = $_POST['juros_diarios'];
$quitacao = $_POST['quitacao'];
$categoria_conta = $_POST['categoria_conta'];
$num_mensalidade = $_POST['num_mensalidade'];

//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];
$historico = $_POST['historico'];


// Observações

$obs = $_POST['obs'];




?>




<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $operador; ?> 
  <span class="style3">... <span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="verifica_mensalidades.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_cx_entradas_mensalidade.php">
  <table width="100%"  border="0">
    <tr>
      <td width="17%">C&oacute;digo do Aluno </td>
      <td width="1%">&nbsp;</td>
      <td width="17%"><? echo $codigo_aluno; ?></td>
      <td width="14%">&nbsp;</td>
      <td width="9%">Curso</td>
      <td width="42%"><? echo $curso; ?></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td>&nbsp;</td>
      <td><? echo $nome; ?>
      <input name="nome_aluno" type="hidden" id="nome_aluno" value="<? echo $nome; ?>"></td>
      <td>&nbsp;</td>
      <td>M&oacute;dulos</td>
      <td><? echo $modulos; ?></td>
    </tr>
    <tr>
      <td>Nome do Respons&aacute;vel </td>
      <td>&nbsp;</td>
      <td><? echo $nome_resp; ?></td>
      <td>&nbsp;</td>
      <td>Dura&ccedil;&atilde;o</td>
      <td><? echo $duracao; ?> Meses </td>
    </tr>
    <tr>
      <td>Cpf</td>
      <td>&nbsp;</td>
      <td><? echo $cpf_resp; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Mensalidade</td>
      <td>&nbsp;</td>
      <td><? echo $mensalidade; ?></td>
      <td>&nbsp;</td>
      <td>Vencimento</td>
      <td><? echo $vencto; ?></td>
    </tr>
    <tr>
      <td>Valor Recebido </td>
      <td>&nbsp;</td>
      <td><input name="valor_recebido" type="text" id="valor_recebido"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="5" rowspan="3"><textarea name="obs" cols="40" rows="6" id="obs"></textarea>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><input name="codigo_contas_a_receber" type="hidden" id="codigo_contas_a_receber" value="<? echo $codigo_contas_a_receber; ?>">
        <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
        <input name="nome_resp" type="hidden" id="nome_resp" value="<? echo $nome_resp; ?>">
        <input name="cpf_resp" type="hidden" id="cpf_resp" value="<? echo $cpf_resp; ?>">
        <input name="curso" type="hidden" id="curso" value="<? echo $curso; ?>">
        <input name="modulos" type="hidden" id="modulos" value="<? echo $modulos; ?>">
        <input name="duracao" type="hidden" id="duracao" value="<? echo $duracao; ?>">
        <input name="mensalidade" type="hidden" id="mensalidade" value="<? echo $mensalidade; ?>">
        <input name="vencto" type="hidden" id="vencto" value="<? echo $vencto; ?>">
        <input name="quant_parc" type="hidden" id="quant_parc" value="<? echo $quant_parc; ?>">
        <input name="modo_pagto" type="hidden" id="modo_pagto" value="<? echo $modo_pagto; ?>">
        <input name="juros_diarios" type="hidden" id="juros_diarios" value="<? echo $juros_diarios; ?>">
        <input name="quitacao" type="hidden" id="quitacao" value="<? echo Pago; ?>">
        <input name="operador" type="hidden" id="operador" value="<? echo $operador; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $cel_operador; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_operador; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento; ?>">
        <input name="categoria_conta" type="hidden" id="categoria_conta" value="<? echo $categoria_conta; ?>">
        <input name="num_mensalidade" type="hidden" id="num_mensalidade" value="<? echo $num_mensalidade; ?>">
        <input name="historico" type="hidden" id="historico" value="<? echo $historico; ?>">
      <input type="submit" name="Submit" value="Confirmar Recebimento"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>