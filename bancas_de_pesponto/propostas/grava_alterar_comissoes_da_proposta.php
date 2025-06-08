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
.style3 {font-size: 10px}

-->

</style>
</head>



<?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';

error_reporting(E_ALL);



?>



		  

		  

		  <?



// dados da proposta

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


$num_proposta = $_POST['num_proposta'];
$nome_operador = $_POST['nome_operador'];


$valor_a_receber = $_POST['valor_a_receber'];

$comissao_op = $_POST['comissao_op'];


$campanha_filtro = $_POST['campanha'];


// a função explode é usada para separar uma string em

// uma matriz de strings usando um delimitador

$dataalteracao_comissao = $_POST['dataalteracao_comissao'];
$horaalteracao_comissao = $_POST['horaalteracao_comissao'];


$dataalteracao_sistema = $dataalteracao_comissao;

$dataalteracao_comissao2 = explode("-", $dataalteracao_sistema);



$diaalteracao_comissao = $dataalteracao_comissao2[0];

$mesalteracao_comissao = $dataalteracao_comissao2[1];

$anoalteracao_comissao = $dataalteracao_comissao2[2];





//dados do operador que alterou





$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];



//dados do estabelecimento que alterou



$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`comissao_op` = '$comissao_op',`valor_a_receber` = '$valor_a_receber',`dataalteracao_comissao` = '$dataalteracao_comissao',`horaalteracao_comissao` = '$horaalteracao_comissao',`diaalteracao_comissao` = '$diaalteracao_comissao',`mesalteracao_comissao` = '$mesalteracao_comissao',`anoalteracao_comissao` = '$anoalteracao_comissao',`operador_alterou_comissao` = '$operador_alterou',`cel_operador_alterou_comissao` = '$cel_operador_alterou',`email_operador_alterou_comissao` = '$email_operador_alterou',`estabelecimento_alterou_comissao` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou_comissao` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou_comissao` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou_comissao` = '$email_estabelecimento_alterou' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações dessa proposta");





echo "Comissões da Proposta alteradas com sucesso<br><br>";

?>









<body>
<p><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19%"><form name="form1" method="post" action="relatorio_de_producao_periodico_por_operador_novo.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
      <input name="campanha" type="hidden" id="campanha" value="<? echo $campanha_filtro; ?>">
      <span class="style3">
      <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
      <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
      <input name="ano_inicial" type="hidden" id="dia_inicial5" value="<? echo $ano_inicial; ?>">
      <input name="dia_final" type="hidden" id="dia_inicial6" value="<? echo $dia_final; ?>">
      <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
      <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </span>
      <input type="submit" name="Submit3" value="Voltar">
    </form></td>
    <td width="35%"><form name="form1" method="post" action="../principal.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit2" value="Voltar ao menu principal">
    </form></td>
    <td width="46%">&nbsp;</td>
  </tr>
</table>
<p>
</body>

</html>

<?

mysql_close($conexao);

?>

