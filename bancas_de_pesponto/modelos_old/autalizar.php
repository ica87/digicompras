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


?>



</p>

<p>&nbsp;</p>





<?

error_reporting(E_ALL);




$codigo = $_POST['codigo'];
$modelo = $_POST['modelo'];
$nivel_dificuldade = $_POST['nivel_dificuldade'];
$preco_empresa = $_POST['preco_empresa'];
$preco_pespontador = $_POST['preco_pespontador'];
$preco_coladeira1 = $_POST['preco_coladeira1'];
$preco_coladeira2 = $_POST['preco_coladeira2'];
$costura_manual = $_POST['costura_manual'];
$trice = $_POST['trice'];
$historico = $_POST['historico'];

$preco_empresa_old = $_POST['preco_empresa_old'];
$preco_pespontador_old = $_POST['preco_pespontador_old'];
$preco_coladeira1_old = $_POST['preco_coladeira1_old'];
$preco_coladeira2_old = $_POST['preco_coladeira2_old'];
$costura_manual_old = $_POST['costura_manual_old'];
$trice_old = $_POST['trice_old'];


$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`modelos` set `modelo` = '$modelo',`preco_empresa` = '$preco_empresa',`preco_pespontador` = '$preco_pespontador',`preco_coladeira1` = '$preco_coladeira1',`preco_coladeira2` = '$preco_coladeira2',`costura_manual` = '$costura_manual',`trice` = '$trice',`historico` = '$historico',`nivel_dificuldade` = '$nivel_dificuldade',`preco_empresa_old` = '$preco_empresa_old',`preco_pespontador_old` = '$preco_pespontador_old',`preco_coladeira1_old` = '$preco_coladeira1_old',`preco_coladeira2_old` = '$preco_coladeira2_old',`costura_manual_old` = '$costura_manual_old',`trice_old` = '$trice_old' where `modelos`. `codigo` = '$codigo' limit 1 ";

}

mysql_query($comando,$conexao) or die("Erro ao alterar modelo");



echo "As novas informações sobre o modelo foi alterada com sucesso<br><br>";

echo "Foram atualizadas as informações das fichas cadastradas no período de $data_inicial até $data_final<br><br>";



$sql = "SELECT * FROM modelos where modelo = '$modelo' limit 1";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

//$codigo = $linha[0];
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


}


?>


  <?

$sql = "select * from fichas where modelo = '$modelo' and data_envio between '$data_inicial' and '$data_final'";

$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



  $codigo_ficha = $linha[0];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $quant_pares = $linha[9];

?>

<?
//Calcula o total do pespontador

$totalpespontador = bcmul($quant_pares,$valor_pespontador,2);

?>
<?
//Calcula o total da coladeira 1

$totalcoladeira1 = bcmul($quant_pares,$valor_coladeira1,2); 

?>
<?
//Calcula o total da coladeira 2

$totalcoladeira2 = bcmul($quant_pares,$valor_coladeira2,2); 

?>
<?
//Calcula o total da costura manual

$totalcosturamanual = bcmul($quant_pares,$costura_manual,2); 

?>
<?
//Calcula o total do tricê

$totaltrice = bcmul($quant_pares,$trice,2); 

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

$totalfichaempresa = bcmul($quant_pares,$valor_unit_empresa,2); 

?>
<?
//Calcula o saldo prévio de lucro bruto da empresa na ficha

$saldo = bcsub($totalfichaempresa,$totalficha,2); 

?>
<?
$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$comando = "update `$linha[1]`.`fichas` set `valor_pespontador` = '$valor_pespontador',`total_pespontador` = '$totalpespontador',`valor_coladeira1` = '$valor_coladeira1',`total_coladeira1` = '$totalcoladeira1',`valor_coladeira2` = '$valor_coladeira2',`total_coladeira2` = '$totalcoladeira2',`total_ficha` = '$totalficha',`valor_unit_empresa` = '$valor_unit_empresa',`total_ficha_empresa` = '$totalfichaempresa',`saldo` = '$saldo',`nivel_dificuldade` = '$nivel_dificuldade',`valor_costura_manual` = '$valor_costura_manual',`total_costura_manual` = '$total_costura_manual',`valor_trice` = '$valor_trice',`total_trice` = '$total_trice' where `fichas`. `codigo_ficha` = '$codigo_ficha'";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa ficha");

echo "Informações da  ficha $num_ficha alteradas com sucesso!<br><br>";








}

$comando = "insert into historico_de_alteracoes_modelos(codigo_modelo,modelo,preco_empresa,preco_pespontador,preco_coladeira1,preco_coladeira2,dia_alteracao,mes_alteracao,ano_alteracao,data_alteracao,hora_alteracao,historico,nivel_dificuldade,preco_empresa_old,preco_pespontador_old,preco_coladeira1_old,preco_coladeira2_old,costura_manual,costura_manual_old,trice,trice_old) 
values('$codigo','$modelo','$valor_unit_empresa','$valor_pespontador','$valor_coladeira1','$valor_coladeira2','$dia_alteracao','$mes_alteracao','$ano_alteracao','$data_alteracao','$hora_alteracao','$historico','$nivel_dificuldade','$preco_empresa_old','$preco_pespontador_old','$preco_coladeira1_old','$preco_coladeira2_old','$costura_manual','$costura_manual_old','$trice','$trice_old')";



mysql_query($comando,$conexao) or die("Erro ao gravar historico de alterações do modelo");


?>









<?

mysql_close($conexao);

?>



<form name="form1" method="post" action="selecione_codigo_edicao.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

