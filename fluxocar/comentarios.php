<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

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

			

require 'conect/conect.php';

			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor_fundo_navegacao = $linha[1];



}

?>





<body bgcolor="#<? echo $cor_fundo_navegacao; ?>" 

  

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$background = $linha[1];

}





?>



background="imagens_sistema/<? echo $background; ?>" bgproperties="fixed">







<table width="100%"  border="0" align="center">

  <tr>

    <td width="19%">&nbsp;</td>

    <td width="15%">&nbsp;</td>

    <td width="21%">&nbsp;</td>

    <td width="24%">&nbsp;</td>

    <td width="15%">&nbsp;</td>

    <td width="6%">&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><form action="ler_comentarios.php" method="post" name="form1" target="navegacao">

      <input class='class01' type="submit" name="Submit" value="Ler Coment&aacute;rios">

    </form></td>

    <td>&nbsp;</td>

    <td><form action="inserir_comentarios.php" method="post" name="form2" target="navegacao">

      <input class='class01' type="submit" name="Submit2" value="Inserir Coment&aacute;rios">

    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

</table>

<p>&nbsp;</p>

</body>

</html>

