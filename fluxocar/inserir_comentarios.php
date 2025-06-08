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

<br><br><br>





<form name="form1" method="post" action="grava_inserir_comentario.php">

  <table width="100%"  border="0">

    <tr>

      <td width="11%">&nbsp;</td>

      <td width="11%">&nbsp;</td>

      <td width="11%">Nome</td>

      <td width="45%"><input class='class02' name="nome" type="text" id="nome" size="50" maxlength="50"></td>

      <td width="11%">&nbsp;</td>

      <td width="11%">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>Cidade</td>

      <td><input class='class02' name="cidade" type="text" id="cidade" size="50" maxlength="50"></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>Coment&aacute;rio</td>

      <td><textarea class='class02' name="comentario" cols="50" wrap="PHYSICAL" id="comentario"></textarea></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td><input class='class01' type="submit" name="Submit" value="Enviar"></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

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

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>

