<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");



?>



<?



//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");

require '../../conect/conect.php';



$modelo = $_POST['modelo'];
$nivel_dificuldade = $_POST['nivel_dificuldade'];
$preco_empresa = $_POST['preco_empresa'];
$preco_pespontador = $_POST['preco_pespontador'];
$preco_coladeira1 = $_POST['preco_coladeira1'];
$preco_coladeira2 = $_POST['preco_coladeira2'];

$operador = $_POST['operador'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$hora = $_POST['hora'];





$sql = "SELECT * FROM modelos where modelo = '$modelo' and nivel_dificuldade = '$nivel_dificuldade' and preco_empresa = '$preco_empresa' and preco_pespontador = '$preco_pespontador' and preco_coladeira1 = '$preco_coladeira1' and preco_coladeira2 = '$preco_coladeira2'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$registros = mysql_num_rows($res);


$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$operador_cadastrado = $linha[6];
$dia_cadastrado = $linha[7];
$mes_cadastrado = $linha[8];
$ano_cadastrado = $linha[9];
$hora_cadastrado = $linha[10];
$nivel_dificuldade = $linha[13];
$costura_manual = $linha[19];
$trice = $linha[20];


}

if(empty($registros)){

echo "O sistema n�o identificou duplicidade nas informa��es e sua solicita��o foi aceita!<br>";
}



if($registros>=1){



echo "ATEN��O!!!...<br><br> O modelo que voc� tentou inserir j� existe! Confira abaixo!<br><br>



Modelo - $modelo <br><br>

N�vel de Dificuldade - $nivel_dificuldade <br><br>

Pre�o Empresa - $pre�o_empresa<br><br>

Pre�o Pespontador - $preco_pespontador<br><br>

Pre�o Coladeira 1 - $preco_coladeira1<br><br>

Pre�o Coladeira 2 - $preco_coladeira2<br><br>

Costura Manual - $costura_manual<br><br>

Tric� - $trice<br><br>


Cadastrado por $operador_cadastrado<br><br>

Em - $dia_cadastrado-$mes_cadastrado-$ano_cadastrado<br><br>

Hora - $hora_cadastrado<br><br>



";



}



else{

$comando = "insert into modelos(modelo,preco_empresa,preco_pespontador,preco_coladeira1,preco_coladeira2,nivel_dificuldade,preco_empresa_old,preco_pespontador_old,preco_coladeira1_old,preco_coladeira2_old,costura_manual,trice,costura_manual_old,trice_old) values('$modelo','$preco_empresa','$preco_pespontador','$preco_coladeira1','$preco_coladeira2','$nivel_dificuldade','$preco_empresa','$preco_pespontador','$preco_coladeira1','$preco_coladeira2','$costura_manual','$trice','$costura_manual','$trice')";



mysql_query($comando,$conexao) or die("Erro ao gravar modelo");





echo "Modelo gravado com sucesso<br>";



}

?>

<html>

<head>

<title>Documento sem t&iacute;tulo</title>

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

</p>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit" value="Voltar">

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>