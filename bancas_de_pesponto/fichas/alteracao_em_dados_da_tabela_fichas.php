

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

			





$sql = "SELECT * FROM fichas where datacadastro between '2014-06-01' and '2014-08-13' order by codigo_ficha asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros_fichas = mysql_num_rows($res);





  $codigo_ficha = $linha[0];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $quant_pares = $linha[9];
  $modelo_ficha = $linha[20];













$sql2 = "SELECT * FROM modelos where modelo = '$modelo_ficha' order by modelo asc";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {

$registros = mysql_num_rows($res2);





//$codigo = $linha[0];
$modelo = $linha[1];
$valor_unit_empresa = $linha[2];
$valor_pespontador = $linha[3];
$valor_coladeira1 = $linha[4];
$valor_coladeira2 = $linha[5];
$nivel_dificuldade = $linha[13];
$costura_manual = $linha[19];
$trice = $linha[20];

}



$totalpespontador = bcmul($quant_pares,$valor_pespontador,2);

$totalcoladeira1 = bcmul($quant_pares,$valor_coladeira1,2); 

$totalcoladeira2 = bcmul($quant_pares,$valor_coladeira2,2); 

$totalcosturamanual = bcmul($quant_pares,$costura_manual,2); 

$totaltrice = bcmul($quant_pares,$trice,2); 


//Calcula o total de custo de mao-de-obra da ficha

$subtotalpespontadorcoladeira1 = bcadd($totalpespontador,$totalcoladeira1,2); 
$subtotalcosturamanualtrice = bcadd($totalcosturamanual,$totaltrice,2); 
$subtotalficha = bcadd($subtotalpespontadorcoladeira1,$subtotalcosturamanualtrice,2); 

$totalficha = bcadd($subtotalficha,$totalcoladeira2,2); 


//Calcula o faturamento da empresa

$totalfichaempresa = bcmul($quant_pares,$valor_unit_empresa,2); 


//Calcula o saldo prévio de lucro bruto da empresa na ficha

$saldo = bcsub($totalfichaempresa,$totalficha,2); 







$sql3 = "select * from db";

$res3 = mysql_query($sql3);

while($linha=mysql_fetch_row($res3)) {




$comando = "update `$linha[1]`.`fichas` set `modelo` = '$modelo',`valor_pespontador` = '$valor_pespontador',`total_pespontador` = '$totalpespontador',`valor_coladeira1` = '$valor_coladeira1',`total_coladeira1` = '$totalcoladeira1',`valor_coladeira2` = '$valor_coladeira2',`total_coladeira2` = '$totalcoladeira2',`total_ficha` = '$totalficha',`valor_unit_empresa` = '$valor_unit_empresa',`total_ficha_empresa` = '$totalfichaempresa',`saldo` = '$saldo',`nivel_dificuldade` = '$nivel_dificuldade',`valor_costura_manual` = '$valor_costura_manual',`total_costura_manual` = '$total_costura_manual',`valor_trice` = '$valor_trice',`total_trice` = '$total_trice' where `fichas`. `codigo_ficha` = '$codigo_ficha'";
}



mysql_query($comando,$conexao);







?>



		

        

          

<tr>

          <? echo $codigo_ficha; ?> -   <? echo $data_envio; ?> ------>  <? echo $dia_envio; ?> - <? echo $mes_envio; ?> - <? echo $ano_envio; ?> <br><br>

  </tr>







<? } ?>

		  

	<? echo $registros_fichas; ?>	  

</table>

