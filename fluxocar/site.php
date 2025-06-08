<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="sites_acessados/acessa_endereco_web.php" method="post" name="form4" target="_blank">
  Endere&ccedil;o web
  <input name="endereco" type="text" id="endereco" size="100">
  <strong><font color="#0000FF">
  <input name="operador" type="hidden" id="operador" value="<? echo $nome_operador; ?>">
  <input name="data" type="hidden" id="data" value="<? echo $data_hoje; ?>">
  <input name="hora" type="hidden" id="hora" value="<? echo date('H:i:s'); ?>">
  </font></strong>
  <input type="submit" name="Submit7" value="Acessar">
</form>
</body>
</html>
