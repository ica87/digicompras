<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
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
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</p>
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<form action="imprimir_pedido.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o n&uacute;mero do pedido para edi&ccedil;&atilde;o <br></td>
      <td width="10%"><select name="num_pedido" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from pedidos order by num_pedido desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['num_pedido']. ">".$x['num_pedido']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="55%"><input type="submit" name="Submit" value="Tela de impress&atilde;o"></td>
    </tr>
  </table>
  <p>ou</p>
</form>
<form action="imprimir_pedido.php" method="post" enctype="multipart/form-data" name="form1" target="_blank">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Informe o n&uacute;mero do pedido para edi&ccedil;&atilde;o <br></td>
      <td width="10%"><input name="num_pedido" type="text" id="num_pedido"></td>
      <td width="55%"><input type="submit" name="Submit3" value="Tela de impress&atilde;o"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
