<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p><a href="menu_edit.php">Voltar</a></p>
<form action="autalizar_categoria.php" method="post" name="form2">
  <table width="100%"  border="0">
        <tr>
          <td width="27%">Selecione o c&oacute;digo </td>
          <td width="12%"><select name="codigo" id="codigo">
            <option value="null" selected>Selecione
            <?

require '../../conect/conect.php';

    $sql = "select * from produtos order by codigo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
            </option>
          </select></td>
          <td width="61%">&nbsp;</td>
        </tr>
        <tr>
          <td height="40">Categoria</td>
          <td><select name="categoria" id="categoria">
            <option value="null" selected>Selecione
            <?


    $sql = "select * from categoriasorder by categoria";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['categoria']. ">".$x['categoria']."</option>";
    }
?>
            </option>
          </select></td>
          <td><input type="submit" name="Submit2" value="Atualizar"></td>
        </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
