<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 18px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<?
include '../../conect/logo_digicompras.php';
?>



</p>
<p><a href="../navegacao.php">Voltar</a></p>
<p class="style1">Insira o nome do banco de dados</p>
<form action="grava_db.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="27%"><p>Nome do DB</p>      </td>
      <td width="24%"><input name="db" type="text" id="db"></td>
      <td width="49%"><input type="submit" name="Submit2" value="Gravar nome db"></td>
    </tr>
  </table>
</form>
</body>
<?



require '../../conect/conect.php';

?>

</html>
