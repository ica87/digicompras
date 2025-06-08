<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>



<html>

<head>

<title>Processamento de arquivos</title>

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

</style></head>



<body>

<p>        <?

require '../../conect/conect.php';


$dia_alteracao = date('d');
$mes_alteracao = date('m');
$ano_alteracao = date('Y');
$data_alteracao = "$ano_alteracao-$mes_alteracao-$dia_alteracao";
$hora_alteracao = date('H:i:s');


$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";


$percentual = $_POST['percentual'];
$percentual_decimal = $percentual/100;

$historico = $_POST['historico'];

?>



</p>

<p>&nbsp;</p>





<?

error_reporting(E_ALL);


$sql = "SELECT * FROM modelos";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$modelo = $linha[1];
$valor_unit_empresa = $linha[2];
$valor_pespontador = $linha[3];
$valor_coladeira1 = $linha[4];
$valor_coladeira2 = $linha[5];
$nivel_dificuldade = $linha[13];

$preco_empresa_old = $linha[15];
$preco_pespontador_old = $linha[16];
$preco_coladeira1_old = $linha[17];
$preco_coladeira2_old = $linha[18];
$costura_manual = $linha[19];
$trice = $linha[20];




$preco_empresa = round($valor_unit_empresa + bcmul($valor_unit_empresa,$percentual_decimal,5),2);
$preco_pespontador = round($valor_pespontador + bcmul($valor_pespontador,$percentual_decimal,5),2);
$preco_coladeira1 = round($valor_coladeira1 + bcmul($valor_coladeira1,$percentual_decimal,5),2);
$preco_coladeira2 = round($valor_coladeira2 + bcmul($valor_coladeira2,$percentual_decimal,5),2);
$preco_costura_manual = round($costura_manual + bcmul($costura_manual,$percentual_decimal,5),2);
$preco_trice = round($trice + bcmul($trice,$percentual_decimal,5),2);





$sql2 = "select * from db";

$res2 = mysql_query($sql2);

while($linha=mysql_fetch_row($res2)) {





$comando = "update `$linha[1]`.`modelos` set `modelo` = '$modelo',`preco_empresa` = '$preco_empresa',`preco_pespontador` = '$preco_pespontador',`preco_coladeira1` = '$preco_coladeira1',`preco_coladeira2` = '$preco_coladeira2',`costura_manual` = '$preco_costura_manual',`trice` = '$preco_trice',`percentual` = '$percentual',`percentual_decimal` = '$percentual_decimal',`nivel_dificuldade` = '$nivel_dificuldade',`historico` = '$historico' where `modelos`. `codigo` = '$codigo' limit 1 ";

}

mysql_query($comando,$conexao) or die("Erro ao alterar modelo");



echo "As novas informações sobre o modelo $modelo foi alterada com sucesso com percentual de $percentual  -->> $percentual_decimal<br><br>";

echo "Foram atualizadas as informações das fichas cadastradas com modelo $modelo no período de $data_inicial até $data_final<br><br>";





?>


  <?

$sql3 = "select * from fichas where modelo = '$modelo' and data_envio between '$data_inicial' and '$data_final'";

$res3 = mysql_query($sql3);
$reg_fichas = 0;
while($linha=mysql_fetch_row($res3)) {



  $codigo_ficha = $linha[0];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $quant_pares = $linha[9];

?>

<?
//Calcula o total do pespontador

$totalpespontador = bcmul($quant_pares,$preco_pespontador,2);

?>
<?
//Calcula o total da coladeira 1

$totalcoladeira1 = bcmul($quant_pares,$preco_coladeira1,2); 

?>
<?
//Calcula o total da coladeira 2

$totalcoladeira2 = bcmul($quant_pares,$preco_coladeira2,2); 

?>
<?
//Calcula o total da costura manual

$totalcosturamanual = bcmul($quant_pares,$preco_costura_manual,2); 

?>
<?
//Calcula o total do trice

$totaltrice = bcmul($quant_pares,$preco_trice,2); 

?>

<?
//Calcula o total de custo de mao-de-obra da ficha

$subtotalpespontadorcoladeira1 = bcadd($totalpespontador,$totalcoladeira1,2); 
$subtotalcosturamanualtrice = bcadd($totalcosturamanual,$totaltrice,2); 
$subtotalficha = bcadd($subtotalpespontadorcoladeira1,$subtotalcosturamanualtrice,2); 

$totalficha = bcadd($subtotalficha,$totalcoladeira2,2); 


?>
<?
//Calcula o faturamento da empresa

$totalfichaempresa = bcmul($quant_pares,$preco_empresa,2); 

?>
<?
//Calcula o saldo prévio de lucro bruto da empresa na ficha

$saldo = bcsub($totalfichaempresa,$totalficha,2); 

?>
<?
$sql4 = "select * from db";
$res4 = mysql_query($sql4);
while($linha=mysql_fetch_row($res4)) {


$comando = "update `$linha[1]`.`fichas` set `valor_pespontador` = '$preco_pespontador',`total_pespontador` = '$totalpespontador',`valor_coladeira1` = '$preco_coladeira1',`total_coladeira1` = '$totalcoladeira1',`valor_coladeira2` = '$preco_coladeira2',`total_coladeira2` = '$totalcoladeira2',`valor_costura_manual` = '$preco_costura_manual',`total_costura_manual` = '$totalcosturamanual',`valor_trice` = '$preco_trice',`total_trice` = '$totaltrice',`total_ficha` = '$totalficha',`valor_unit_empresa` = '$preco_empresa',`total_ficha_empresa` = '$totalfichaempresa',`nivel_dificuldade` = '$nivel_dificuldade',`saldo` = '$saldo' where `fichas`. `codigo_ficha` = '$codigo_ficha'";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa ficha");

echo "Informações da  ficha $num_ficha alteradas com sucesso!<br><br>";

}






$comando = "insert into historico_de_alteracoes_modelos(codigo_modelo,modelo,preco_empresa,preco_pespontador,preco_coladeira1,preco_coladeira2,dia_alteracao,mes_alteracao,ano_alteracao,data_alteracao,hora_alteracao,percentual,historico,nivel_dificuldade,percentual_decimal,costura_manual,trice) 
values('$codigo','$modelo','$preco_empresa','$preco_pespontador','$preco_coladeira1','$preco_coladeira2','$dia_alteracao','$mes_alteracao','$ano_alteracao','$data_alteracao','$hora_alteracao','$percentual','$historico','$nivel_dificuldade','$percentual_decimal','$preco_costura_manual','$preco_trice')";



mysql_query($comando,$conexao);

}


?>









<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

