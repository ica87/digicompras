<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?

require '../../conecte/conecte.php';
?>
  
  <?

error_reporting (E_ALL);


$codigo = $_POST['codigo'];

?>
  
  <?

$comando = "delete from `clientes` where clientes`. `codigo`= '$codigo' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao excluir cliente");

echo "Cliente excluido com sucesso!";

?>
</p>
<form id="form1" name="form1" method="post" action="">
</form>
<p>&nbsp;</p>
</body>
</html>
