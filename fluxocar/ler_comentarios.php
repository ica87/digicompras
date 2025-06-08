<?
ini_set('default_charset','UTF8_general_mysql500_ci');
?>

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



<TABLE width="90%" border=0 align="center" cellPadding=0 cellSpacing=0>

  <!--DWLayoutTable-->

  <TBODY>

  <?



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM comentarios where aprovado = 'Sim' order by codigo desc";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;

?>



<td align="left" width="33%"  vAlign=top >



<br><br>



<font color="#000000">Nome - </font><font color="#000000"><? printf("$linha[1]<br>"); ?></font>

<font color="#000000">Cidade - </font><font color="#000000"><? printf("$linha[2]<br>"); ?></font> 

              <font color="#000000">Comentário - </font><font color="#000000"><? printf("$linha[3]<br><br>"); ?></font>

 

</td> 



<td align="left" width="3%"  vAlign=top ></td>           



  <?

if($reg==3){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>



</TBODY>

</TABLE>







</body>

</html>

