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

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<form action="gravar.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';

?>



</td>

    </tr>

    <tr>

      <td width="22%">&nbsp;</td>

      <td width="78%"><strong><font color="#0000FF" size="4">Tela de cadastro de Grupos!</font></strong></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><font color="#0000FF"><strong>Nome da Banca<font color="#0000FF">:</font></strong></font></td>

      <td><input name="grupo" type="text" id="grupo" size="50"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Gravar">

      <input type="reset" name="Submit2" value="Limpar"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

<?







//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from grupos";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$grupo = $linha[1];


echo "<tr>";


$reg++;


?>

<td>

<br>

<span class="style1">Código:</span> <? echo $codigo; ?>

<span class="style1">Grupo:</span> <? echo $grupo; ?>

</td>

<?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>



<? } ?>



<p>&nbsp; </p>

</body>



</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>



