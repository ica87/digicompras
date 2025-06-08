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

-->

</style>

</head>



<?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);





?>

		  

		  

		  <?


		  



$codigo = $_POST['codigo'];

$nome = $_POST['nome'];

$usuario = $_POST['usuario'];

$senha = $_POST['senha'];






$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`admgeral` set `codigo` = '$codigo',`nome` = '$nome',`usuario` = '$usuario',`senha` = '$senha' where `admgeral`. `codigo` = '$codigo' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse Administrador");





echo "Dados do administrador alterados no banco de dados com sucesso<br><br> SERÁ NECESSÁRIO EFETUAR NOVO LOGIN COM A NOVA SENHA!!!...";


?>









<body>

<form name="form1" method="post" action="../index.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>

