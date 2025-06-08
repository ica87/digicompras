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

<title>Processamento de arquivos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style></head>



<body>

<?

require '../../conect/conect.php';


?>






<?

error_reporting(E_ALL);





$codigo_ficha = $_POST['codigo_ficha'];
$num_ficha = $_POST['num_ficha'];



$comando = "delete from `fichas` where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";



mysql_query($comando,$conexao) or die("Erro ao excluir Ficha"); ?>



<? echo "Ficha excluída com sucesso:"; ?> 





<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="../principal.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>

