<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="produtos_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td width="14%"><a href="menu.php">Voltar</a></td>
      <td width="86%">

<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>

<br>
<strong><font color="#0000FF" size="4">Escolha a categoria que deseja adicionar o novo produto ao banco de dados de sua loja! </font></strong></td>
    
    <tr>
      <td>Categoria</td>
      <td><select name="categoria" id="categoria">
        <?


    $sql = "select * from categorias order by categoria";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['categoria']. ">".$x['categoria']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Avan&ccedil;ar">      </td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
