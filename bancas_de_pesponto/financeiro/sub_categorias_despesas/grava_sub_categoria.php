<?

error_reporting(E_ALL);



//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");

require '../../conect/conect.php';



$sub_categoria = $_POST['sub_categoria'];

$categoria = $_POST['categoria'];





$comando = "insert into sub_categorias_despesas(sub_categoria,categoria) values('$sub_categoria','$categoria')";



mysql_query($comando,$conexao) or die("Erro ao gravar Sub-Categoria de despesa");





echo "Sub-Categoria de despesa gravada com sucesso<br>";





?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

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

<p>       

</p>

<form name="form1" method="post" action="sub_categorias_insert.php">

  <input type="submit" name="Submit" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>