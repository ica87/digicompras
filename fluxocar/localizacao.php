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
	text-align: center;
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



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.9917139904555!2d-46.92727068571721!3d-20.58839598623857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b72cf478922485%3A0x9fb64aaf8f76f5d!2sR.+Rubi%2C+45+-+Cassia%2C+C%C3%A1ssia+-+MG%2C+37980-000!5e0!3m2!1spt-BR!2sbr!4v1551210934353" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe><br /></body>

</html>

