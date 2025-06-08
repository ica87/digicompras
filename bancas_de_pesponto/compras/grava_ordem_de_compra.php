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
$codigo_for = $_POST['codigo_for'];		  
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
$dataorcamento = $_POST['dataorcamento'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$horaorcamento = $_POST['horaorcamento'];
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


//dados do operador que registoru o orçamento
$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
//dados do establecimento que registrou o orçamento
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



?>


<?
$comando = "insert into ordem_compra(codigo_for,razaosocial,cnpj,nfantasia,endereco,numero,bairro,cidade,estado,fone,comprador,celular,email,cep,dataorcamento,horaorcamento,referencia,descricao_servico,item1,quant1,preco1,total1,item2,quant2,preco2,total2,item3,quant3,preco3,total3,item4,quant4,preco4,total4,item5,quant5,preco5,total5,item6,quant6,preco6,total6,item7,quant7,preco7,total7,item8,quant8,preco8,total8,item9,quant9,preco9,total9,item10,quant10,preco10,total10,item11,quant11,preco11,total11,item12,quant12,preco12,total12,item13,quant13,preco13,total13,item14,quant14,preco14,total14,item15,quant15,preco15,total15,quantparc,condpagto,total_geral,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,categoria_1,ref1,preco_compra_1,categoria_2,ref2,preco_compra_2,categoria_3,ref3,preco_compra_3,categoria_4,ref4,preco_compra_4,categoria_5,ref5,preco_compra_5,categoria_6,ref6,preco_compra_6,categoria_7,ref7,preco_compra_7,categoria_8,ref8,preco_compra_8,categoria_9,ref9,preco_compra_9,categoria_10,ref10,preco_compra_10,categoria_11,ref11,preco_compra_11,categoria_12,ref12,preco_compra_12,categoria_13,ref13,preco_compra_13,categoria_14,ref14,preco_compra_14,categoria_15,ref15,preco_compra_15,quantpecas1,quantpecas2,quantpecas3,quantpecas4,quantpecas5,quantpecas6,quantpecas7,quantpecas8,quantpecas9,quantpecas10,quantpecas11,quantpecas12,quantpecas13,quantpecas14,quantpecas15,condicao,status,diaalteracao,mesalteracao,anoalteracao,dia,mes,ano)
values('$codigo_for','$razaosocial','$cnpj','$nfantasia','$endereco','$numero','$bairro','$cidade','$estado','$fone','$comprador','$celular','$email','$cep','$dataorcamento','$horaorcamento','$referencia','$descricao_servico','$item1','$quant1','$preco1','$total1','$item2','$quant2','$preco2','$total2','$item3','$quant3','$preco3','$total3','$item4','$quant4','$preco4','$total4','$item5','$quant5','$preco5','$total5','$item6','$quant6','$preco6','$total6','$item7','$quant7','$preco7','$total7','$item8','$quant8','$preco8','$total8','$item9','$quant9','$preco9','$total9','$item10','$quant10','$preco10','$total10','$item11','$quant11','$preco11','$total11','$item12','$quant12','$preco12','$total12','$item13','$quant13','$preco13','$total13','$item14','$quant14','$preco14','$total14','$item15','$quant15','$preco15','$total15','$quantparc','$condpagto','$total_geral','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$categoria_1','$ref1','$preco_compra_1','$categoria_2','$ref2','$preco_compra_2','$categoria_3','$ref3','$preco_compra_3','$categoria_4','$ref4','$preco_compra_4','$categoria_5','$ref5','$preco_compra_5','$categoria_6','$ref6','$preco_compra_6','$categoria_7','$ref7','$preco_compra_7','$categoria_8','$ref8','$preco_compra_8','$categoria_9','$ref9','$preco_compra_9','$categoria_10','$ref10','$preco_compra_10','$categoria_11','$ref11','$preco_compra_11','$categoria_12','$ref12','$preco_compra_12','$categoria_13','$ref13','$preco_compra_13','$categoria_14','$ref14','$preco_compra_14','$categoria_15','$ref15','$preco_compra_15','$quantpecas1','$quantpecas2','$quantpecas3','$quantpecas4','$quantpecas5','$quantpecas6','$quantpecas7','$quantpecas8','$quantpecas9','$quantpecas10','$quantpecas11','$quantpecas12','$quantpecas13','$quantpecas14','$quantpecas15','ORÇAMENTO','A EFETIVAR','$diaalteracao','$mesalteracao','$anoalteracao','$dia','$mes','$ano')";

mysql_query($comando,$conexao) or die("Erro ao gravar ordem de compra!");

echo "Ordem de Compra gravada com sucesso!<br><br>";
?>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Novo orçamento gravada na $nfantasia_empresa!   \n";
	$mens  .=  " \n";
	$mens  .=  "Razão Social: ".$razaosocial."                                                       \n";
	$mens  .=  "Nome Fantasia: ".$nfantasia."                                                    \n";
	$mens  .=  "Data: ".$dataorcamento."                                                    \n";
	$mens  .=  "Hora: ".$horaorcamento."                                                    \n\n";
	
	$mens  .=  "Data: ".$dataorcamento."                                                    \n";
	$mens  .=  "Referência: ".$referencia."                                                    \n";
	$mens  .=  "Descrição do Serviço: ".$descricao_servico."                                                    \n";
	$mens  .=  "Total: R$ ".$total_geral."                                                    \n\n";
	
	$mens  .=  "Operador que efetuou o orçamento: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Orçamento solicitado em ".$dataorcamento, $mens,"From:".$email_dest."\r\nBcc:".$email);
	$envia  =  mail($email_operador, "Orçamento solicitado em ".$dataorcamento, $mens,"From:".$email_dest);

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
  <input type="submit" name="Submit" value="Voltar Hist&oacute;rico do Cliente">
</form>
</body>
</html>
<?
mysql_close($conexao);
?>
