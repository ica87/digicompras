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
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

		  
		  
		  <?
$num_bordero = $_POST['num_bordero'];

// dados da proposta
$num_proposta = $_POST['num_proposta'];
$status_fisico = $_POST['status_fisico'];
$obs_fisico = $_POST['obs_fisico'];

$data_alteracao_status_fisico = $_POST['data_alteracao_status_fisico'];
$hora_alteracao_status_fisico = $_POST['hora_alteracao_status_fisico'];
$mes_ano_status_fisico = $_POST['mes_ano_status_fisico'];
$dia_status_fisico = $_POST['dia_status_fisico'];
$mes_status_fisico = $_POST['mes_status_fisico'];
$ano_status_fisico = $_POST['ano_status_fisico'];

// a função explode é usada para separar uma string em
// uma matriz de strings usando um delimitador

$datahistorico_fisico = $data_alteracao_status_fisico;
$datahistorico_fisico2 = explode("-", $data_alteracao_status_fisico);

$dia = $datahistorico_fisico2[0];
$mes = $datahistorico_fisico2[1];
$ano = $datahistorico_fisico2[2];


//dados do operador que alterou


$operador_alterou_status_fisico = $_POST['operador_alterou_status_fisico'];
$cel_operador_alterou_status_fisico = $_POST['cel_operador_alterou_status_fisico'];
$email_operador_alterou_status_fisico = $_POST['email_operador_alterou_status_fisico'];

//dados do estabelecimento que alterou

$estabelecimento_alterou_status_fisico = $_POST['estabelecimento_alterou_status_fisico'];
$cidade_estabelecimento_alterou_status_fisico = $_POST['cidade_estabelecimento_alterou_status_fisico'];
$tel_estabelecimento_alterou_status_fisico = $_POST['tel_estabelecimento_alterou_status_fisico'];
$email_estabelecimento_alterou_status_fisico = $_POST['email_estabelecimento_alterou_status_fisico'];

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`status_fisico` = '$status_fisico',`obs_fisico` = '$obs_fisico',
`data_alteracao_status_fisico` = '$data_alteracao_status_fisico',`hora_alteracao_status_fisico` = '$hora_alteracao_status_fisico',`mes_ano_status_fisico` = '$mes_ano_status_fisico',`dia_status_fisico` = '$dia_status_fisico',`mes_status_fisico` = '$mes_status_fisico',`ano_status_fisico` = '$ano_status_fisico',
`operador_alterou_status_fisico` = '$operador_alterou_status_fisico',`cel_operador_alterou_status_fisico` = '$cel_operador_alterou_status_fisico',
`email_operador_alterou_status_fisico` = '$email_operador_alterou_status_fisico',`estabelecimento_alterou_status_fisico` = '$estabelecimento_alterou_status_fisico',
`cidade_estabelecimento_alterou_status_fisico` = '$cidade_estabelecimento_alterou_status_fisico',
`tel_estabelecimento_alterou_status_fisico` = '$tel_estabelecimento_alterou_status_fisico',
`email_estabelecimento_alterou_status_fisico` = '$email_estabelecimento_alterou_status_fisico'
where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao confirmar o status do físico referente a Proposta Nº $num_proposta");


echo "Confirmado o novo status de físico referente a Proposta Nº $num_proposta <br><br>";
?>

<?
if($obs_fisico<>""){
$comando = "insert into historico_fisico(num_proposta,obs_fisico,data,dia,mes,ano,hora,operador_informante,estabelecimento)
 values('$num_proposta','$obs_fisico','$data_alteracao_status_fisico','$dia','$mes','$ano','$hora_alteracao_status_fisico','$operador_alterou_status_fisico','$estabelecimento_alterou_status_fisico')";


mysql_query($comando,$conexao);
}


?>


<?
$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$num_proposta = $linha[0];
$nome_operador = $linha[1];
$email_operador = $linha[34];

$nome = $linha[4];
$cpf = $linha[7];
$status_fisico = $linha[103];
$data_alteracao_status_fisico = $linha[116];
$hora_alteracao_status_fisico = $linha[117];


$operador_alterou_status_fisico = $linha[119];
$cel_operador_alterou_status_fisico = $linha[120];
$email_operador_alterou_status_fisico = $linha[121];
$estabelecimento_alterou_status_fisico = $linha[122];
$cidade_estabelecimento_alterou_status_fisico = $linha[123];
$tel_estabelecimento_alterou_status_fisico = $linha[124];
$email_estabelecimento_alterou_status_fisico = $linha[125];


?>

<? } ?>




<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! O Físico já está em mãos aqui na $nfantasia   \n\n";
	
	$mens  .=  "Nº da Proposta: ".$num_proposta."                       \n";	
	$mens  .=  "Operador que efetuou a proposta: ".$nome_operador."                             \n\n";
	
	$mens  .=  "Nome: ".$nome."                                                    \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";
	$mens  .=  "STATUS do Físico: ".$status_fisico."                                  \n\n";
	$mens  .=  "Data da chegada do Físico: ".$data_alteracao_status_fisico."                                                    \n";
	$mens  .=  "Hora da chegada do Físico: ".$hora_alteracao_status_fisico."                                                    \n\n";
	
	$mens  .=  "Operador que confirmou o recebimento do Físico: ".$operador_alterou_status_fisico."                             \n";
	$mens  .=  "Celular: ".$cel_operador_alterou_status_fisico."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou_status_fisico."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou_status_fisico."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou_status_fisico."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou_status_fisico."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou_status_fisico."                                                    \n";

	
	//DISPARA O EMAIL
if($status_fisico=="Pendente") if($obs_fisico<>""){

$envia  =  mail($email_dest, "Confirmação de recebimento de Físico em ".$data_alteracao_status_fisico, $mens,"From:".$email_dest."\r\nBcc:".$email_operador);
}
?>


<body>
<table width="100%"  border="0">
  <tr>
    <td width="35%"><form name="form1" method="post" action="../principal.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar ao menu principal">
    </form></td>
    <td width="62%"><form name="form1" method="post" action="../borderos/borderos.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit22" value="Voltar ao border&ocirc;">
      <font color="#0000FF" size="4"><strong>
      <input name="num_bordero_receber" type="hidden" id="num_bordero_receber" value="<? echo $num_bordero; ?>">
    </strong></font>    </form></td>
    <td width="3%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?
mysql_close($conexao);
?>
