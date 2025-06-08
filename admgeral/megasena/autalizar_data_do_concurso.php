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

<p>        <?

require '../../conect/conect.php';
	
$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
	
$db = $linha[1];	
}

?>



</p>

<p>&nbsp;</p>





<?

error_reporting(E_ALL);



?>



<?
//Período (Qtd. de dias para somar ou subtrair)
$sql = "SELECT * FROM megasena_todosresultados ";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

	$codigo = $linha[0];
$datasorteio_old = $linha[2];

$mystring = $datasorteio_old;
$newstring = rtrim($mystring, "--");


//Separação dos valores (dia, mês e ano)
$arr = explode("--", $datasorteio_old);
 
$anoinicio = $arr[2];
$mesinicio = $arr[1];
$diainicio = $arr[0];

$datasorteio = "$diainicio-$mesinicio-$anoinicio";



$comando = "update `$db`.`megasena_todosresultados` set `data` = '$newstring' where `megasena_todosresultados`. `codigo` = '$codigo'";
mysql_query($comando,$conexao);
	
}

?>

















<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<p>&nbsp;</p>

</body>

</html>

