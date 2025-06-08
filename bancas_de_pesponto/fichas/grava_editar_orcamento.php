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
<title>Voltar ao Hist&oacute;rico do cliente</title>
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
$codigo_orcamento = $_POST['codigo_orcamento'];
$condicao = $_POST['condicao'];
if($condicao=="PEDIDO"){
$status = "EFETIVADO";
}
else{
$status = "A EFETIVAR";
}

if($condicao=="PEDIDO"){
$status_fatura = "A FATURAR";
}
else{
$status_fatura = "";
}


$codigo_cliente = $_POST['codigo_cliente'];		  
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$fone = $_POST['fone'];
$comprador = $_POST['comprador'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$diaalteracao = $_POST['diaalteracao'];
$mesalteracao = $_POST['mesalteracao'];
$anoalteracao = $_POST['anoalteracao'];

//dados do orçamento
$referencia = $_POST['referencia'];
$descricao_servico = $_POST['descricao_servico'];

//-------------INICIO PREÇO 1------------------------------------

$item1 = $_POST['item1'];
$ref1 = $_POST['ref1'];
$categoria_1 = $_POST['categoria_1'];
$quant1 = $_POST['quant1'];
$preco_compra_1 = $_POST['preco_compra_1'];
$preco1 = $_POST['preco1'];
$quantpecas1 = $_POST['quantpecas1'];

if($item1<>""){

$total1 = bcmul($quant1,$preco1,2);
}
else{ $total1 = 0; }

//-------------FIM PREÇO 1------------------------------------

//-------------INICIO PREÇO 2------------------------------------

$item2 = $_POST['item2'];
$ref2 = $_POST['ref2'];
$categoria_2 = $_POST['categoria_2'];
$quant2 = $_POST['quant2'];
$preco_compra_2 = $_POST['preco_compra_2'];
$preco2 = $_POST['preco2'];
$quantpecas2 = $_POST['quantpecas2'];

if($item2<>""){

$total2 = bcmul($quant2,$preco2,2);
}
else{ $total2 = 0; }

//-------------FIM PREÇO 2------------------------------------

//-------------INICIO PREÇO 3------------------------------------

$item3 = $_POST['item3'];
$ref3 = $_POST['ref3'];
$categoria_3 = $_POST['categoria_3'];
$quant3 = $_POST['quant3'];
$preco_compra_3 = $_POST['preco_compra_3'];
$preco3 = $_POST['preco3'];
$quantpecas3 = $_POST['quantpecas3'];

if($item3<>""){

$total3 = bcmul($quant3,$preco3,2);
}
else{ $total3 = 0; }

//-------------FIM PREÇO 3------------------------------------

//-------------INICIO PREÇO 4------------------------------------

$item4 = $_POST['item4'];
$ref4 = $_POST['ref4'];
$categoria_4 = $_POST['categoria_4'];
$quant4 = $_POST['quant4'];
$preco_compra_4 = $_POST['preco_compra_4'];
$preco4 = $_POST['preco4'];
$quantpecas4 = $_POST['quantpecas4'];

if($item4<>""){

$total4 = bcmul($quant4,$preco4,2);
}
else{ $total4 = 0; }

//-------------FIM PREÇO 4------------------------------------

//-------------INICIO PREÇO 5------------------------------------

$item5 = $_POST['item5'];
$ref5 = $_POST['ref5'];
$categoria_5 = $_POST['categoria_5'];
$quant5 = $_POST['quant5'];
$preco_compra_5 = $_POST['preco_compra_5'];
$preco5 = $_POST['preco5'];
$quantpecas5 = $_POST['quantpecas5'];

if($item5<>""){

$total5 = bcmul($quant5,$preco5,2);
}
else{ $total5 = 0; }

//-------------FIM PREÇO 5------------------------------------

//-------------INICIO PREÇO 6------------------------------------

$item6 = $_POST['item6'];
$ref6 = $_POST['ref6'];
$categoria_6 = $_POST['categoria_6'];
$quant6 = $_POST['quant6'];
$preco_compra_6 = $_POST['preco_compra_6'];
$preco6 = $_POST['preco6'];
$quantpecas6 = $_POST['quantpecas6'];

if($item6<>""){

$total6 = bcmul($quant6,$preco6,2);
}
else{ $total6 = 0; }

//-------------FIM PREÇO 6------------------------------------

//-------------INICIO PREÇO 7------------------------------------

$item7 = $_POST['item7'];
$ref7 = $_POST['ref7'];
$categoria_7 = $_POST['categoria_7'];
$quant7 = $_POST['quant7'];
$preco_compra_7 = $_POST['preco_compra_7'];
$preco7 = $_POST['preco7'];
$quantpecas7 = $_POST['quantpecas7'];

if($item7<>""){

$total7 = bcmul($quant7,$preco7,2);
}
else{ $total7 = 0; }

//-------------FIM PREÇO 7------------------------------------

//-------------INICIO PREÇO 8------------------------------------

$item8 = $_POST['item8'];
$ref8 = $_POST['ref8'];
$categoria_8 = $_POST['categoria_8'];
$quant8 = $_POST['quant8'];
$preco_compra_8 = $_POST['preco_compra_8'];
$preco8 = $_POST['preco8'];
$quantpecas8 = $_POST['quantpecas8'];

if($item8<>""){

$total8 = bcmul($quant8,$preco8,2);
}
else{ $total8 = 0; }

//-------------FIM PREÇO 8------------------------------------

//-------------INICIO PREÇO 9------------------------------------

$item9 = $_POST['item9'];
$ref9 = $_POST['ref9'];
$categoria_9 = $_POST['categoria_9'];
$quant9 = $_POST['quant9'];
$preco_compra_9 = $_POST['preco_compra_9'];
$preco9 = $_POST['preco9'];
$quantpecas9 = $_POST['quantpecas9'];

if($item9<>""){

$total9 = bcmul($quant9,$preco9,2);
}
else{ $total9 = 0; }

//-------------FIM PREÇO 9------------------------------------

//-------------INICIO PREÇO 10------------------------------------

$item10 = $_POST['item10'];
$ref10 = $_POST['ref10'];
$categoria_10 = $_POST['categoria_10'];
$quant10 = $_POST['quant10'];
$preco_compra_10 = $_POST['preco_compra_10'];
$preco10 = $_POST['preco10'];
$quantpecas10 = $_POST['quantpecas10'];

if($item10<>""){

$total10 = bcmul($quant10,$preco10,2);
}
else{ $total10 = 0; }

//-------------FIM PREÇO 10------------------------------------

//-------------INICIO PREÇO 11------------------------------------

$item11 = $_POST['item11'];
$ref11 = $_POST['ref11'];
$categoria_11 = $_POST['categoria_11'];
$quant11 = $_POST['quant11'];
$preco_compra_11 = $_POST['preco_compra_11'];
$preco11 = $_POST['preco11'];
$quantpecas11 = $_POST['quantpecas11'];

if($item11<>""){

$total11 = bcmul($quant11,$preco11,2);
}
else{ $total11 = 0; }

//-------------FIM PREÇO 11------------------------------------

//-------------INICIO PREÇO 12------------------------------------

$item12 = $_POST['item12'];
$ref12 = $_POST['ref12'];
$categoria_12 = $_POST['categoria_12'];
$quant12 = $_POST['quant12'];
$preco_compra_12 = $_POST['preco_compra_12'];
$preco12 = $_POST['preco12'];
$quantpecas12 = $_POST['quantpecas12'];

if($item12<>""){

$total12 = bcmul($quant12,$preco12,2);
}
else{ $total12 = 0; }

//-------------FIM PREÇO 12------------------------------------

//-------------INICIO PREÇO 13------------------------------------

$item13 = $_POST['item13'];
$ref13 = $_POST['ref13'];
$categoria_13 = $_POST['categoria_13'];
$quant13 = $_POST['quant13'];
$preco_compra_13 = $_POST['preco_compra_13'];
$preco13 = $_POST['preco13'];
$quantpecas13 = $_POST['quantpecas13'];

if($item13<>""){

$total13 = bcmul($quant13,$preco13,2);
}
else{ $total13 = 0; }

//-------------FIM PREÇO 13------------------------------------

//-------------INICIO PREÇO 14------------------------------------

$item14 = $_POST['item14'];
$ref14 = $_POST['ref14'];
$categoria_14 = $_POST['categoria_14'];
$quant14 = $_POST['quant14'];
$preco_compra_14 = $_POST['preco_compra_14'];
$preco14 = $_POST['preco14'];
$quantpecas14 = $_POST['quantpecas14'];

if($item14<>""){

$total14 = bcmul($quant14,$preco14,2);
}
else{ $total14 = 0; }

//-------------FIM PREÇO 14------------------------------------

//-------------INICIO PREÇO 15------------------------------------

$item15 = $_POST['item15'];
$ref15 = $_POST['ref15'];
$categoria_15 = $_POST['categoria_15'];
$quant15 = $_POST['quant15'];
$preco_compra_15 = $_POST['preco_compra_15'];
$preco15 = $_POST['preco15'];
$quantpecas15 = $_POST['quantpecas15'];

if($item15<>""){

$total15 = bcmul($quant15,$preco15,2);
}
else{ $total15 = 0; }

//-------------FIM PREÇO 15------------------------------------

$quantparc = $_POST['quantparc'];
$condpagto = $_POST['condpagto'];
$obs = $_POST['obs'];

$total_geral = $total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12+$total13+$total14+$total15;


//dados do operador que alterou

$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que alterou
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];


?>

<?
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`orcamentos` set `codigo_orcamento` = '$codigo_orcamento',`codigo_cliente` = '$codigo_cliente',`razaosocial` = '$razaosocial',`cnpj` = '$cnpj',`nfantasia` = '$nfantasia',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`cidade` = '$cidade',`estado` = '$estado',`fone` = '$fone',`comprador` = '$comprador',`celular` = '$celular',`email` = '$email',`cep` = '$cep',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`referencia` = '$referencia',`descricao_servico` = '$descricao_servico',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`condicao` = '$condicao',`status` = '$status',`quantparc` = '$quantparc',`condpagto` = '$condpagto',`obs` = '$obs',`total_geral` = '$total_geral',`item1` = '$item1',`categoria_1` = '$categoria_1',`quant1` = '$quant1',`ref1` = '$ref1',`quantpecas1` = '$quantpecas1',`preco_compra_1` = '$preco_compra_1',`preco1` = '$preco1',`total1` = '$total1',`item2` = '$item2',`categoria_2` = '$categoria_2',`quant2` = '$quant2',`ref2` = '$ref2',`quantpecas2` = '$quantpecas2',`preco_compra_2` = '$preco_compra_2',`preco2` = '$preco2',`total2` = '$total2',`item3` = '$item3',`categoria_3` = '$categoria_3',`quant3` = '$quant3',`ref3` = '$ref3',`quantpecas3` = '$quantpecas3',`preco_compra_3` = '$preco_compra_3',`preco3` = '$preco3',`total3` = '$total3',`item4` = '$item4',`categoria_4` = '$categoria_4',`quant4` = '$quant4',`ref4` = '$ref4',`quantpecas4` = '$quantpecas4',`preco_compra_4` = '$preco_compra_4',`preco4` = '$preco4',`total4` = '$total4',`item5` = '$item5',`categoria_5` = '$categoria_5',`quant5` = '$quant5',`ref5` = '$ref5',`quantpecas5` = '$quantpecas5',`preco_compra_5` = '$preco_compra_5',`preco5` = '$preco5',`total5` = '$total5',`item6` = '$item6',`categoria_6` = '$categoria_6',`quant6` = '$quant6',`ref6` = '$ref6',`quantpecas6` = '$quantpecas6',`preco_compra_6` = '$preco_compra_6',`preco6` = '$preco6',`total6` = '$total6',`item7` = '$item7',`categoria_7` = '$categoria_7',`quant7` = '$quant7',`ref7` = '$ref7',`quantpecas7` = '$quantpecas7',`preco_compra_7` = '$preco_compra_7',`preco7` = '$preco7',`total7` = '$total7',`item8` = '$item8',`categoria_8` = '$categoria_8',`quant8` = '$quant8',`ref8` = '$ref8',`quantpecas8` = '$quantpecas8',`preco_compra_8` = '$preco_compra_8',`preco8` = '$preco8',`total8` = '$total8',`item9` = '$item9',`categoria_9` = '$categoria_9',`quant9` = '$quant9',`ref9` = '$ref9',`quantpecas9` = '$quantpecas9',`preco_compra_9` = '$preco_compra_9',`preco9` = '$preco9',`total9` = '$total9',`item10` = '$item10',`categoria_10` = '$categoria_10',`quant10` = '$quant10',`ref10` = '$ref10',`quantpecas10` = '$quantpecas10',`preco_compra_10` = '$preco_compra_10',`preco10` = '$preco10',`total10` = '$total10',`item11` = '$item11',`categoria_11` = '$categoria_11',`quant11` = '$quant11',`ref11` = '$ref11',`quantpecas11` = '$quantpecas11',`preco_compra_11` = '$preco_compra_11',`preco11` = '$preco11',`total11` = '$total11',`item12` = '$item12',`categoria_12` = '$categoria_12',`quant12` = '$quant12',`ref12` = '$ref12',`quantpecas12` = '$quantpecas12',`preco_compra_12` = '$preco_compra_12',`preco12` = '$preco12',`total12` = '$total12',`item13` = '$item13',`categoria_13` = '$categoria_13',`quant13` = '$quant13',`ref13` = '$ref13',`quantpecas13` = '$quantpecas13',`preco_compra_13` = '$preco_compra_13',`preco13` = '$preco13',`total13` = '$total13',`item14` = '$item14',`categoria_14` = '$categoria_14',`quant14` = '$quant14',`ref14` = '$ref14',`quantpecas14` = '$quantpecas14',`preco_compra_14` = '$preco_compra_14',`preco14` = '$preco14',`total14` = '$total14',`item15` = '$item15',`categoria_15` = '$categoria_15',`quant15` = '$quant15',`ref15` = '$ref15',`quantpecas15` = '$quantpecas15',`preco_compra_15` = '$preco_compra_15',`preco15` = '$preco15',`total15` = '$total15',`diaalteracao` = '$diaalteracao',`mesalteracao` = '$mesalteracao',`anoalteracao` = '$anoalteracao',`status_fatura` = '$status_fatura' where `orcamentos`. `codigo_orcamento` = '$codigo_orcamento' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações desse orçamento");


?>




<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site_empresa = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Orçamento alterado na $nfantasia_empresa!   \n";
	$mens  .=  " \n";
	$mens  .=  "Nº do Orçamento: ".$codigo_orcamento."                                                       \n";
	$mens  .=  "STATUS: ".$status."                                                       \n";
	$mens  .=  "Cliente: ".$nfantasia."                                                    \n";
	$mens  .=  "Data de alteração: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora de alteração: ".$horaalteracao."                                                    \n";
	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Orçamento alterado no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email_dest);
	$envia  =  mail($email_operador_alterou, "Orçamento alterado no sistema em ".$dataalteracao, $mens,"From:".$email_dest);

?>


<?


			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>
<form name="form1" method="post" action="">
</form>
<form name="form2" method="post" action="historico_cliente.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
  <input type="submit" name="Submit" value="Voltar Hist&oacute;rico do cliente">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
