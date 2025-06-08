<?
ini_set('default_charset','UTF8_general_mysql500_ci');
?>

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

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





      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">

<!--

<style type="text/css">

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->



<!--

.style5 {font-weight: bold}

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style6 {color: #FFFFFF}

-->

</style>



<td>

  <div align="center"><br>
	  <?

$sql = "SELECT * FROM a_empresa";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$aempresa = $linha[1];	
}
?>

    <span class="estilo1 style5"><? echo "$aempresa"; ?><br></span>

  </div></td>

<div align="center">

  

  



  

</tr>

</div>





</body>

</html>

