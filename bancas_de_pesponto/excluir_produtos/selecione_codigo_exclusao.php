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
<p><a href="../produtos/menu.php">Voltar</a></p>
<form action="excluir_produto.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione a referencia para exclus&atilde;o <br></td>
      <td width="10%"><select name="referencia" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="55%"><input type="submit" name="Submit" value="Excluir"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
