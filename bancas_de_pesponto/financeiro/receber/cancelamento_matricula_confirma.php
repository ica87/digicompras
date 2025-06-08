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

?>
<?
// codigo do aluno
$codigo_aluno = $_POST['codigo_aluno'];
?>
<?			
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
$sql = "SELECT * FROM cursos where codigo_aluno = '$codigo_aluno' and status = 'Ativo' order by codigo desc limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$codigo_aluno = $linha[1];
$nome = $linha[4];
$nome_resp = $linha[24];
$cpf_resp = $linha[38];
$mensalidade = $linha[49];
$curso = $linha[45];
$modulos = $linha[46];
$duracao = $linha[48];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}
?>





<p align="center" class="style1">Cancelamento de matr&iacute;cula! </p>
<p align="center" class="style1">Aten&ccedil;&atilde;o! <span class="style2">
  <? echo $nome_op; ?> 
  <span class="style3">... <span class="style4">Verifique atentamente se os dados est&atilde;o corretos e fa&ccedil;a as observa&ccedil;&otilde;es necess&aacute;rias!
</span></span></span></p>
<form name="form1" method="post" action="informe_codigo_para_cancelamento.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form name="form2" method="post" action="grava_cancelamento_matricula.php">
  <table width="100%"  border="0">
    <tr>
      <td width="17%">C&oacute;digo do Aluno </td>
      <td width="1%">&nbsp;</td>
      <td><? echo $codigo_aluno; ?>
      <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>"></td>
      <td width="9%">Curso</td>
      <td width="42%"><? echo $curso; ?>
      <input name="codigo" type="hidden" id="nome_aluno3" value="<? echo $codigo; ?>">
      <input name="curso" type="hidden" id="curso" value="<? echo $curso; ?>"></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td>&nbsp;</td>
      <td><? echo $nome; ?> <input name="nome_aluno" type="hidden" id="nome_aluno" value="<? echo $nome; ?>"></td>
      <td>M&oacute;dulos</td>
      <td><? echo $modulos; ?></td>
    </tr>
    <tr>
      <td>Nome do Respons&aacute;vel </td>
      <td>&nbsp;</td>
      <td><? echo $nome_resp; ?></td>
      <td>Dura&ccedil;&atilde;o</td>
      <td><? echo $duracao; ?> Meses </td>
    </tr>
    <tr>
      <td>Cpf</td>
      <td>&nbsp;</td>
      <td><? echo $cpf_resp; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Mensalidade</td>
      <td>&nbsp;</td>
      <td><? echo $mensalidade; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="4" rowspan="3"><textarea name="obs" cols="40" rows="6" id="obs"></textarea>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $nome_op; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      <input type="submit" name="Submit" value="Confirmar Cancelamento"></td>
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