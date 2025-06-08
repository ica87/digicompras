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
</head>

<frameset rows="*,210" cols="*" framespacing="0" frameborder="yes" border="1">
  <frame src="alterar_cor_de_fundo_topo.php" name="mainFrame" scrolling="NO">
  <frame src="../tabeladecores.php" name="bottomFrame" scrolling="yes" noresize>
</frameset>
<noframes><body>
</body></noframes>
</html>
