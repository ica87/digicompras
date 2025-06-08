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

.style8 {

	font-size: 18px;

	font-weight: bold;

}

.style10 {font-size: 18px; font-weight: bold; color: #000000; }

.style11 {

	color: #0000FF;

	font-weight: bold;

}

.style12 {color: #000000}

.style13 {color: #000000; font-weight: bold; }

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


	$sql = "SELECT * FROM b_sup";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cor_barra_superior = $linha[1];

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
	<table bgcolor="#<? echo "$cor_barra_superior"; ?>" width="100%" border="0">
	  <tr valign="top">
	    <td width="12%" height="23">&nbsp;</td>
	    <td height="23" colspan="4"><div align="right">
			<?
$sql = "SELECT * FROM faixa_de_texto";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$texto_de_aviso = $linha[1];

}
			?>
	      <marquee scrollamount="6"><?


echo "$texto_de_aviso";
?>
          </marquee>
	      </div></td>
	    <td width="15%">&nbsp;</td>
      </tr>
</table>
</body>

</html>

