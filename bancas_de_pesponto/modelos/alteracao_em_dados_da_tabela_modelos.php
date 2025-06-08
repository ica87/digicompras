

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



require '../../conect/conect.php';


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

			





$sql = "SELECT * FROM modelos where nivel_dificuldade = 'Alto(Grau_3)' order by modelo asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);





$codigo = $linha[0];
$modelo = $linha[1];
$preco_recebe = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$costura_manual = $linha[19];
$trice = $linha[20];








// a função explode é usada para separar uma string em

// uma matriz de strings usando um delimitador



//$dataalteracao_pagto_cliente = $data_pagto_cliente;

//$dataalteracao_pagto_cliente2 = explode("-", $dataalteracao_pagto_cliente);



//$dia_pagto_cliente = $dataalteracao_pagto_cliente2[0];

//$mes_pagto_cliente = $dataalteracao_pagto_cliente2[1];

//$ano_pagto_cliente = $dataalteracao_pagto_cliente2[2];




$sql2 = "select * from db";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {





$comando = "update `$linha[1]`.`modelos` set `nivel_dificuldade` = 'Alto Neoprene360°(Grau_3)' where `modelos`. `modelo` = '$modelo'";

}



mysql_query($comando,$conexao);







?>



		

        

          

<tr>

          <? echo $codigo; ?> -   <? echo $data_envio; ?> ------>  <? echo $dia_envio; ?> - <? echo $mes_envio; ?> - <? echo $ano_envio; ?> <br><br>

  </tr>







<? } ?>

		  

	<? echo $registros; ?>	  

</table>

