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

//require("conect/conect.php"); or die("erro na requisição");

require '../../../conect/conect.php';

error_reporting(E_ALL);



?>



		  

		  

<?

// dados do investimento

$codigo = $_POST['codigo'];



$dataalteracao = $_POST['dataalteracao'];

$horaalteracao = $_POST['horaalteracao'];

$dia_alteracao = $_POST['dia_alteracao'];

$mes_alteracao = $_POST['mes_alteracao'];

$ano_alteracao = $_POST['ano_alteracao'];

$banco = $_POST['banco'];

$exercito = $_POST['exercito'];
$exercito_liquido = $_POST['exercito_liquido'];

$inss = $_POST['inss'];
$inss_liquido = $_POST['inss_liquido'];

$prefeitura = $_POST['prefeitura'];
$prefeitura_liquido = $_POST['prefeitura_liquido'];

$prefeitura_morro_agudo = $_POST['prefeitura_morro_agudo'];
$prefeitura_morro_agudo_liquido = $_POST['prefeitura_morro_agudo_liquido'];

$prefeitura_jardinopolis = $_POST['prefeitura_jardinopolis'];
$prefeitura_jardinopolis_liquido = $_POST['prefeitura_jardinopolis_liquido'];

$prefeitura_pat_paulista = $_POST['prefeitura_pat_paulista'];
$prefeitura_pat_paulista_liquido = $_POST['prefeitura_pat_paulista_liquido'];

$prefeitura_orlandia = $_POST['prefeitura_orlandia'];
$prefeitura_orlandia_liquido = $_POST['prefeitura_orlandia_liquido'];


$carro_bv = $_POST['carro_bv'];
$carro_bv_liquido = $_POST['carro_bv_liquido'];

$carro_omni = $_POST['carro_omni'];
$carro_omni_liquido = $_POST['carro_omni_liquido'];

$privado = $_POST['privado'];
$privado_liquido = $_POST['privado_liquido'];

$siape = $_POST['siape'];
$siape_liquido = $_POST['siape_liquido'];

$aeronautica = $_POST['aeronautica'];
$aeronautica_liquido = $_POST['aeronautica_liquido'];

$correios = $_POST['correios'];
$correios_liquido = $_POST['correios_liquido'];

$governo_minas_gerais = $_POST['governo_minas_gerais'];
$governo_minas_gerais_liquido = $_POST['governo_minas_gerais_liquido'];

$ipremo = $_POST['ipremo'];
$ipremo_liquido = $_POST['ipremo_liquido'];

$nf = $_POST['nf'];

$comissao = $_POST['comissao'];

$obs = $_POST['obs'];

$dia_ref = $_POST['dia_ref'];

$mes_ref = $_POST['mes_ref'];

$ano_ref = $_POST['ano_ref'];



//dados do operador



$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];











$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`fechamento` set `codigo` = '$codigo',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`dia_alteracao` = '$dia_alteracao',`mes_alteracao` = '$mes_alteracao',`ano_alteracao` = '$ano_alteracao',`banco` = '$banco',`inss` = '$inss',`exercito` = '$exercito',`prefeitura` = '$prefeitura',`dia_ref` = '$dia_ref',`mes_ref` = '$mes_ref',`ano_ref` = '$ano_ref',`prefeitura_morro_agudo` = '$prefeitura_morro_agudo',`prefeitura_jardinopolis` = '$prefeitura_jardinopolis',`prefeitura_pat_paulista` = '$prefeitura_pat_paulista',`carro_bv` = '$carro_bv',`carro_omni` = '$carro_omni',`privado` = '$privado',`siape` = '$siape',`aeronautica` = '$aeronautica',`nf` = '$nf',`correios` = '$correios',`comissao` = '$comissao',`governo_minas_gerais` = '$governo_minas_gerais',`ipremo` = '$ipremo',`obs` = '$obs',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',

`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`exercito_liquido` = '$exercito_liquido',`inss_liquido` = '$inss_liquido',`prefeitura_liquido` = '$prefeitura_liquido',`prefeitura_morro_agudo_liquido` = '$prefeitura_morro_agudo_liquido',`prefeitura_jardinopolis_liquido` = '$prefeitura_jardinopolis_liquido',`prefeitura_pat_paulista_liquido` = '$prefeitura_pat_paulista_liquido',`carro_bv_liquido` = '$carro_bv_liquido',`carro_omni_liquido` = '$carro_omni_liquido',`privado_liquido` = '$privado_liquido',`siape_liquido` = '$siape_liquido',`aeronautica_liquido` = '$aeronautica_liquido',`correios_liquido` = '$correios_liquido',`governo_minas_gerais_liquido` = '$governo_minas_gerais_liquido',`ipremo_liquido` = '$ipremo_liquido',`prefeitura_orlandia` = '$prefeitura_orlandia',`prefeitura_orlandia_liquido` = '$prefeitura_orlandia_liquido' where `fechamento`. `codigo` = '$codigo' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse lançamento de fechamento");





echo "Lançamento de fechamento alterado com sucesso<br><br>";



if (empty($obs)) {

}
else {
$comando = "insert into observacoes_fechamento(cod_fechamento,data,hora,obs,operador) values('$codigo','$dataalteracao','$horaalteracao','$obs','$operador_alterou')";



mysql_query($comando,$conexao) or die("Erro ao gravar observações do cliente!<br><br>");

}
?>







<body>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>

