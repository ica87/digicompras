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

<title>Edi&ccedil;&atilde;o de produtos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {

	color: #0000FF;

	font-weight: bold;

	font-size: 16px;

}

.style2 {font-size: 18px; color: #0000FF;}

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<body>

<p>        <?

require '../../conect/conect.php';

?>



</p>

<form action="menu.php" method="post" name="form2">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit" value="Voltar">

</form>

<p class="style2">&nbsp;</p>

<form action="atualizar_imagem_fundo.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td width="27%">Escolha a imagem que deseja para o fundo do site</td>

      <td width="24%"><input name="imagem" type="file" id="imagem"></td>

      <td width="49%"><input type="submit" name="Submit2" value="Atualizar"></td>

    </tr>

  </table>

</form>

<p>&nbsp;</p>

</body>

</html>

