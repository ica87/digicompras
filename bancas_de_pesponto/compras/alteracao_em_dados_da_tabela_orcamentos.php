

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



require '../../conect/conect.php';



$hoje = date('d/m/Y')+1;





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>







<style type="text/css">

<!--

.style2 {font-weight: bold}

.style4 {

	color: #FFFFFF;

	font-weight: bold;

}

.style5 {color: #000000}

.style6 {color: #000000; font-weight: bold; }

-->

</style>

<body bgcolor="#<? printf("$linha[1]"); ?>"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0"></body> 

  

<? } ?>









      

<table width="100%"  border="0">

  <?

			





$sql = "SELECT * FROM orcamentos order by codigo_orcamento asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);





$codigo_orcamento = $linha[0];

$dataorcamento = $linha[14];


//$data_pagto_cliente = $linha[104];







// a função explode é usada para separar uma string em

// uma matriz de strings usando um delimitador


$dataseparada = $dataorcamento;

$dataseparada2 = explode("-", $dataseparada);



$dia = $dataseparada2[0];

$mes = $dataseparada2[1];

$ano = $dataseparada2[2];









?>

<?

$sql2 = "select * from db";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {





$comando = "update `$linha[1]`.`orcamentos` set `codigo_orcamento` = '$codigo_orcamento',`dia` = '$dia',`mes` = '$mes',`ano` = '$ano' where `orcamentos`. `codigo_orcamento` = '$codigo_orcamento'";

}



mysql_query($comando,$conexao);







?>



		

        

          

<tr>

          <? echo $codigo_orcamento; ?> -   <? echo $dataorcamento; ?> ------>  <? echo $dia; ?> - <? echo $mes; ?> - <? echo $ano; ?> <br><br>

  </tr>







<? } ?>

		  

	<? echo $registros; ?>	  

</table>

