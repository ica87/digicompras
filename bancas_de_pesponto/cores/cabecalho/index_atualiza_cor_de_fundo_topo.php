<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
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
