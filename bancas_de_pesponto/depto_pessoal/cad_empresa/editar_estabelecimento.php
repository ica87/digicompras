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

<title>ALTERA&Ccedil;&Atilde;O DO CADASTRO DE AGENCIA</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../../conect/conect.php';







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









<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];




$sql = "SELECT * FROM cad_empresa";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];


$mensagem_folha_pagto = $linha[42];

}
?>




<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

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

<form name="form1" method="post" action="grava_editar.php">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td width="15%">&nbsp;</td>

      <td colspan="3"><strong><font color="#0000FF" size="4">Mensagem aos funcion&aacute;rios da Folha de Pagto!. </font></strong></td>

      <td width="1%">&nbsp;</td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="37%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      Mensagem</td>

      <td width="11%">&nbsp;</td>

      <td width="36%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>

      <td rowspan="2">&nbsp;</td>

      <td rowspan="2"><textarea name="mensagem_folha_pagto" cols="50" rows="7" id="mensagem_folha_pagto"><? echo $mensagem_folha_pagto; ?></textarea></td>

      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
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

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit" value="Alterar Mensagem">

          <input type="reset" name="Submit2" value="Limpar">      </td>

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

<strong><font color="#FF0000"></font></strong>
</body>

</html>

