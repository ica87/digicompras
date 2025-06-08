

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

			





$sql = "SELECT * FROM propostas where estabelecimento_proposta = 'ALLCRED FRANQUIA RIBEIRÃO PRETO' order by num_proposta asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);





$num_proposta = $linha[0];

$estabelecimento_proposta = $linha[3];


//$data_pagto_cliente = $linha[104];







// a função explode é usada para separar uma string em

// uma matriz de strings usando um delimitador



//$dataalteracao_pagto_cliente = $data_pagto_cliente;

//$dataalteracao_pagto_cliente2 = explode("-", $dataalteracao_pagto_cliente);



//$dia_pagto_cliente = $dataalteracao_pagto_cliente2[0];

//$mes_pagto_cliente = $dataalteracao_pagto_cliente2[1];

//$ano_pagto_cliente = $dataalteracao_pagto_cliente2[2];









?>

<?

$sql2 = "select * from db";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`estabelecimento_proposta` = 'ALLCRED RIBEIRÃO PRETO' where `propostas`. `num_proposta` = '$num_proposta'";

}



mysql_query($comando,$conexao);







?>



		

        

          

<tr>

          <? echo $num_proposta; ?> -   <? echo $data_pagto_cliente; ?> ------>  <? echo $dia_pagto_cliente; ?> - <? echo $mes_pagto_cliente; ?> - <? echo $ano_pagto_cliente; ?> <br><br>

  </tr>







<? } ?>

		  

	<? echo $registros; ?>	  

</table>

