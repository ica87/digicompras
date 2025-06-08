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
<title>NEWSLETTER - Envie comunicados e promo&ccedil;&otilde;es para todos seus operadores de uma s&oacute; vez!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="../menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form action="envia.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><span class="style2">NEWSLETTER - Envie comunicados e promo&ccedil;&otilde;es para todos seus operadores de uma s&oacute; vez!</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Data e hora da newsletter - <? echo date('d-m-Y - H:i:s'); ?>
          <input name="data_hora" type="hidden" id="data_hora" value="<? echo date('d-m-Y - H:i:s'); ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Digite o assunto para sua Newsletter</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input name="assunto" type="text" id="assunto" size="100" maxlength="100"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td colspan="2"><div align="center"><strong>Digite o texto que deseja para ser enviado para<br> 
        </strong>
            <strong>seus clientes que desejam receber os informativos</strong></div></td>
      <td width="16%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" rowspan="3" valign="top"><textarea name="informativo" cols="80" rows="15" id="informativo"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Insira a imagem que pretende enviar </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input name="foto" type="file" id="foto"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="14%"><input type="submit" name="Submit" value="Enviar">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
      <td width="47%"><input type="reset" name="Submit2" value="Limpar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
