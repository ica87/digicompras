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
.style1 {font-size: 18px}
-->
</style></head>

<body>
<p>        
<?
error_reporting(E_ALL);

require '../../conect/conect.php';

?>

</p>

<form name="form1" method="post" action="javascript:window.close()">
  <input type="submit" name="Submit" value="Fechar">
</form>
</body>
</html>
<?


//recebe os dados do cliente para efetuar o pedido
$datapedido = $_POST['datapedido'];
$dataentrega = $_POST['dataentrega'];
$cod_cli = $_POST['cod_cli'];
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$inscr_est = $_POST['inscr_est'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$comprador = $_POST['comprador'];
$fone = $_POST['fone'];
$fax = $_POST['fax'];
$celular = $_POST['celular'];
$representante = $_POST['representante'];
$condpagto = $_POST['condpagto'];
$modopagto = $_POST['modopagto'];
$transportadora = $_POST['transportadora'];
$redespacho = $_POST['redespacho'];
$referencia_1 = $_POST['referencia_1'];
$material_1 = $_POST['material_1'];
$cor_1 = $_POST['cor_1'];
$solado_1 = $_POST['solado_1'];
$n22_1 = $_POST['n22_1'];
$n23_1 = $_POST['n23_1'];
$n24_1 = $_POST['n24_1'];
$n25_1 = $_POST['n25_1'];
$n26_1 = $_POST['n26_1'];
$n27_1 = $_POST['n27_1'];
$n28_1 = $_POST['n28_1'];
$n29_1 = $_POST['n29_1'];
$n30_1 = $_POST['n30_1'];
$n31_1 = $_POST['n31_1'];
$n32_1 = $_POST['n32_1'];
$n33_1 = $_POST['n33_1'];
$n34_1 = $_POST['n34_1'];
$n35_1 = $_POST['n35_1'];
$n36_1 = $_POST['n36_1'];
$n37_1 = $_POST['n37_1'];
$n38_1 = $_POST['n38_1'];
$n39_1 = $_POST['n39_1'];
$n40_1 = $_POST['n40_1'];
$n41_1 = $_POST['n41_1'];
$n42_1 = $_POST['n42_1'];
$n43_1 = $_POST['n43_1'];
$n44_1 = $_POST['n44_1'];
$n45_1 = $_POST['n45_1'];
$n46_1 = $_POST['n46_1'];
$total_pares_1 = $_POST['total_pares_1'];
$preco_1 = $_POST['preco_1'];
$total_reais_1 = $_POST['total_reais_1'];

$referencia_2 = $_POST['referencia_2'];
$material_2 = $_POST['material_2'];
$cor_2 = $_POST['cor_2'];
$solado_2 = $_POST['solado_2'];
$n22_2 = $_POST['n22_2'];
$n23_2 = $_POST['n23_2'];
$n24_2 = $_POST['n24_2'];
$n25_2 = $_POST['n25_2'];
$n26_2 = $_POST['n26_2'];
$n27_2 = $_POST['n27_2'];
$n28_2 = $_POST['n28_2'];
$n29_2 = $_POST['n29_2'];
$n30_2 = $_POST['n30_2'];
$n31_2 = $_POST['n31_2'];
$n32_2 = $_POST['n32_2'];
$n33_2 = $_POST['n33_2'];
$n34_2 = $_POST['n34_2'];
$n35_2 = $_POST['n35_2'];
$n36_2 = $_POST['n36_2'];
$n37_2 = $_POST['n37_2'];
$n38_2 = $_POST['n38_2'];
$n39_2 = $_POST['n39_2'];
$n40_2 = $_POST['n40_2'];
$n41_2 = $_POST['n41_2'];
$n42_2 = $_POST['n42_2'];
$n43_2 = $_POST['n43_2'];
$n44_2 = $_POST['n44_2'];
$n45_2 = $_POST['n45_2'];
$n46_2 = $_POST['n46_2'];
$total_pares_2 = $_POST['total_pares_2'];
$preco_2 = $_POST['preco_2'];
$total_reais_2 = $_POST['total_reais_2'];

$referencia_3 = $_POST['referencia_3'];
$material_3 = $_POST['material_3'];
$cor_3 = $_POST['cor_3'];
$solado_3 = $_POST['solado_3'];
$n22_3 = $_POST['n22_3'];
$n23_3 = $_POST['n23_3'];
$n24_3 = $_POST['n24_3'];
$n25_3 = $_POST['n25_3'];
$n26_3 = $_POST['n26_3'];
$n27_3 = $_POST['n27_3'];
$n28_3 = $_POST['n28_3'];
$n29_3 = $_POST['n29_3'];
$n30_3 = $_POST['n30_3'];
$n31_3 = $_POST['n31_3'];
$n32_3 = $_POST['n32_3'];
$n33_3 = $_POST['n33_3'];
$n34_3 = $_POST['n34_3'];
$n35_3 = $_POST['n35_3'];
$n36_3 = $_POST['n36_3'];
$n37_3 = $_POST['n37_3'];
$n38_3 = $_POST['n38_3'];
$n39_3 = $_POST['n39_3'];
$n40_3 = $_POST['n40_3'];
$n41_3 = $_POST['n41_3'];
$n42_3 = $_POST['n42_3'];
$n43_3 = $_POST['n43_3'];
$n44_3 = $_POST['n44_3'];
$n45_3 = $_POST['n45_3'];
$n46_3 = $_POST['n46_3'];
$total_pares_3 = $_POST['total_pares_3'];
$preco_3 = $_POST['preco_3'];
$total_reais_3 = $_POST['total_reais_3'];


$referencia_4 = $_POST['referencia_4'];
$material_4 = $_POST['material_4'];
$cor_4 = $_POST['cor_4'];
$solado_4 = $_POST['solado_4'];
$n22_4 = $_POST['n22_4'];
$n23_4 = $_POST['n23_4'];
$n24_4 = $_POST['n24_4'];
$n25_4 = $_POST['n25_4'];
$n26_4 = $_POST['n26_4'];
$n27_4 = $_POST['n27_4'];
$n28_4 = $_POST['n28_4'];
$n29_4 = $_POST['n29_4'];
$n30_4 = $_POST['n30_4'];
$n31_4 = $_POST['n31_4'];
$n32_4 = $_POST['n32_4'];
$n33_4 = $_POST['n33_4'];
$n34_4 = $_POST['n34_4'];
$n35_4 = $_POST['n35_4'];
$n36_4 = $_POST['n36_4'];
$n37_4 = $_POST['n37_4'];
$n38_4 = $_POST['n38_4'];
$n39_4 = $_POST['n39_4'];
$n40_4 = $_POST['n40_4'];
$n41_4 = $_POST['n41_4'];
$n42_4 = $_POST['n42_4'];
$n43_4 = $_POST['n43_4'];
$n44_4 = $_POST['n44_4'];
$n45_4 = $_POST['n45_4'];
$n46_4 = $_POST['n46_4'];
$total_pares_4 = $_POST['total_pares_4'];
$preco_4 = $_POST['preco_4'];
$total_reais_4 = $_POST['total_reais_4'];


$referencia_5 = $_POST['referencia_5'];
$material_5 = $_POST['material_5'];
$cor_5 = $_POST['cor_5'];
$solado_5 = $_POST['solado_5'];
$n22_5 = $_POST['n22_5'];
$n23_5 = $_POST['n23_5'];
$n24_5 = $_POST['n24_5'];
$n25_5 = $_POST['n25_5'];
$n26_5 = $_POST['n26_5'];
$n27_5 = $_POST['n27_5'];
$n28_5 = $_POST['n28_5'];
$n29_5 = $_POST['n29_5'];
$n30_5 = $_POST['n30_5'];
$n31_5 = $_POST['n31_5'];
$n32_5 = $_POST['n32_5'];
$n33_5 = $_POST['n33_5'];
$n34_5 = $_POST['n34_5'];
$n35_5 = $_POST['n35_5'];
$n36_5 = $_POST['n36_5'];
$n37_5 = $_POST['n37_5'];
$n38_5 = $_POST['n38_5'];
$n39_5 = $_POST['n39_5'];
$n40_5 = $_POST['n40_5'];
$n41_5 = $_POST['n41_5'];
$n42_5 = $_POST['n42_5'];
$n43_5 = $_POST['n43_5'];
$n44_5 = $_POST['n44_5'];
$n45_5 = $_POST['n45_5'];
$n46_5 = $_POST['n46_5'];
$total_pares_5 = $_POST['total_pares_5'];
$preco_5 = $_POST['preco_5'];
$total_reais_5 = $_POST['total_reais_5'];


$referencia_6 = $_POST['referencia_6'];
$material_6 = $_POST['material_6'];
$cor_6 = $_POST['cor_6'];
$solado_6 = $_POST['solado_6'];
$n22_6 = $_POST['n22_6'];
$n23_6 = $_POST['n23_6'];
$n24_6 = $_POST['n24_6'];
$n25_6 = $_POST['n25_6'];
$n26_6 = $_POST['n26_6'];
$n27_6 = $_POST['n27_6'];
$n28_6 = $_POST['n28_6'];
$n29_6 = $_POST['n29_6'];
$n30_6 = $_POST['n30_6'];
$n31_6 = $_POST['n31_6'];
$n32_6 = $_POST['n32_6'];
$n33_6 = $_POST['n33_6'];
$n34_6 = $_POST['n34_6'];
$n35_6 = $_POST['n35_6'];
$n36_6 = $_POST['n36_6'];
$n37_6 = $_POST['n37_6'];
$n38_6 = $_POST['n38_6'];
$n39_6 = $_POST['n39_6'];
$n40_6 = $_POST['n40_6'];
$n41_6 = $_POST['n41_6'];
$n42_6 = $_POST['n42_6'];
$n43_6 = $_POST['n43_6'];
$n44_6 = $_POST['n44_6'];
$n45_6 = $_POST['n45_6'];
$n46_6 = $_POST['n46_6'];
$total_pares_6 = $_POST['total_pares_6'];
$preco_6 = $_POST['preco_6'];
$total_reais_6 = $_POST['total_reais_6'];


$referencia_7 = $_POST['referencia_7'];
$material_7 = $_POST['material_7'];
$cor_7 = $_POST['cor_7'];
$solado_7 = $_POST['solado_7'];
$n22_7 = $_POST['n22_7'];
$n23_7 = $_POST['n23_7'];
$n24_7 = $_POST['n24_7'];
$n25_7 = $_POST['n25_7'];
$n26_7 = $_POST['n26_7'];
$n27_7 = $_POST['n27_7'];
$n28_7 = $_POST['n28_7'];
$n29_7 = $_POST['n29_7'];
$n30_7 = $_POST['n30_7'];
$n31_7 = $_POST['n31_7'];
$n32_7 = $_POST['n32_7'];
$n33_7 = $_POST['n33_7'];
$n34_7 = $_POST['n34_7'];
$n35_7 = $_POST['n35_7'];
$n36_7 = $_POST['n36_7'];
$n37_7 = $_POST['n37_7'];
$n38_7 = $_POST['n38_7'];
$n39_7 = $_POST['n39_7'];
$n40_7 = $_POST['n40_7'];
$n41_7 = $_POST['n41_7'];
$n42_7 = $_POST['n42_7'];
$n43_7 = $_POST['n43_7'];
$n44_7 = $_POST['n44_7'];
$n45_7 = $_POST['n45_7'];
$n46_7 = $_POST['n46_7'];
$total_pares_7 = $_POST['total_pares_7'];
$preco_7 = $_POST['preco_7'];
$total_reais_7 = $_POST['total_reais_7'];


$referencia_8 = $_POST['referencia_8'];
$material_8 = $_POST['material_8'];
$cor_8 = $_POST['cor_8'];
$solado_8 = $_POST['solado_8'];
$n22_8 = $_POST['n22_8'];
$n23_8 = $_POST['n23_8'];
$n24_8 = $_POST['n24_8'];
$n25_8 = $_POST['n25_8'];
$n26_8 = $_POST['n26_8'];
$n27_8 = $_POST['n27_8'];
$n28_8 = $_POST['n28_8'];
$n29_8 = $_POST['n29_8'];
$n30_8 = $_POST['n30_8'];
$n31_8 = $_POST['n31_8'];
$n32_8 = $_POST['n32_8'];
$n33_8 = $_POST['n33_8'];
$n34_8 = $_POST['n34_8'];
$n35_8 = $_POST['n35_8'];
$n36_8 = $_POST['n36_8'];
$n37_8 = $_POST['n37_8'];
$n38_8 = $_POST['n38_8'];
$n39_8 = $_POST['n39_8'];
$n40_8 = $_POST['n40_8'];
$n41_8 = $_POST['n41_8'];
$n42_8 = $_POST['n42_8'];
$n43_8 = $_POST['n43_8'];
$n44_8 = $_POST['n44_8'];
$n45_8 = $_POST['n45_8'];
$n46_8 = $_POST['n46_8'];
$total_pares_8 = $_POST['total_pares_8'];
$preco_8 = $_POST['preco_8'];
$total_reais_8 = $_POST['total_reais_8'];


$referencia_9 = $_POST['referencia_9'];
$material_9 = $_POST['material_9'];
$cor_9 = $_POST['cor_9'];
$solado_9 = $_POST['solado_9'];
$n22_9 = $_POST['n22_9'];
$n23_9 = $_POST['n23_9'];
$n24_9 = $_POST['n24_9'];
$n25_9 = $_POST['n25_9'];
$n26_9 = $_POST['n26_9'];
$n27_9 = $_POST['n27_9'];
$n28_9 = $_POST['n28_9'];
$n29_9 = $_POST['n29_9'];
$n30_9 = $_POST['n30_9'];
$n31_9 = $_POST['n31_9'];
$n32_9 = $_POST['n32_9'];
$n33_9 = $_POST['n33_9'];
$n34_9 = $_POST['n34_9'];
$n35_9 = $_POST['n35_9'];
$n36_9 = $_POST['n36_9'];
$n37_9 = $_POST['n37_9'];
$n38_9 = $_POST['n38_9'];
$n39_9 = $_POST['n39_9'];
$n40_9 = $_POST['n40_9'];
$n41_9 = $_POST['n41_9'];
$n42_9 = $_POST['n42_9'];
$n43_9 = $_POST['n43_9'];
$n44_9 = $_POST['n44_9'];
$n45_9 = $_POST['n45_9'];
$n46_9 = $_POST['n46_9'];
$total_pares_9 = $_POST['total_pares_9'];
$preco_9 = $_POST['preco_9'];
$total_reais_9 = $_POST['total_reais_9'];


$referencia_10 = $_POST['referencia_10'];
$material_10 = $_POST['material_10'];
$cor_10 = $_POST['cor_10'];
$solado_10 = $_POST['solado_10'];
$n22_10 = $_POST['n22_10'];
$n23_10 = $_POST['n23_10'];
$n24_10 = $_POST['n24_10'];
$n25_10 = $_POST['n25_10'];
$n26_10 = $_POST['n26_10'];
$n27_10 = $_POST['n27_10'];
$n28_10 = $_POST['n28_10'];
$n29_10 = $_POST['n29_10'];
$n30_10 = $_POST['n30_10'];
$n31_10 = $_POST['n31_10'];
$n32_10 = $_POST['n32_10'];
$n33_10 = $_POST['n33_10'];
$n34_10 = $_POST['n34_10'];
$n35_10 = $_POST['n35_10'];
$n36_10 = $_POST['n36_10'];
$n37_10 = $_POST['n37_10'];
$n38_10 = $_POST['n38_10'];
$n39_10 = $_POST['n39_10'];
$n40_10 = $_POST['n40_10'];
$n41_10 = $_POST['n41_10'];
$n42_10 = $_POST['n42_10'];
$n43_10 = $_POST['n43_10'];
$n44_10 = $_POST['n44_10'];
$n45_10 = $_POST['n45_10'];
$n46_10 = $_POST['n46_10'];
$total_pares_10 = $_POST['total_pares_10'];
$preco_10 = $_POST['preco_10'];
$total_reais_10 = $_POST['total_reais_10'];


$obs = $_POST['obs'];
?>
<br><br>
<?

$comando = "insert into pedidos(datapedido,dataentrega,razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email,comprador,fone,fax,celular,representante,condpagto,modopagto,transportadora,redespacho,
referencia_1,material_1,cor_1,solado_1,n22_1,n23_1,n24_1,n25_1,n26_1,n27_1,n28_1,n29_1,n30_1,n31_1,n32_1,n33_1,n34_1,n35_1,n36_1,n37_1,n38_1,n39_1,n40_1,n41_1,n42_1,n43_1,n44_1,n45_1,n46_1,total_pares_1,preco_1,total_reais_1,
referencia_2,material_2,cor_2,solado_2,n22_2,n23_2,n24_2,n25_2,n26_2,n27_2,n28_2,n29_2,n30_2,n31_2,n32_2,n33_2,n34_2,n35_2,n36_2,n37_2,n38_2,n39_2,n40_2,n41_2,n42_2,n43_2,n44_2,n45_2,n46_2,total_pares_2,preco_2,total_reais_2,
referencia_3,material_3,cor_3,solado_3,n22_3,n23_3,n24_3,n25_3,n26_3,n27_3,n28_3,n29_3,n30_3,n31_3,n32_3,n33_3,n34_3,n35_3,n36_3,n37_3,n38_3,n39_3,n40_3,n41_3,n42_3,n43_3,n44_3,n45_3,n46_3,total_pares_3,preco_3,total_reais_3,
referencia_4,material_4,cor_4,solado_4,n22_4,n23_4,n24_4,n25_4,n26_4,n27_4,n28_4,n29_4,n30_4,n31_4,n32_4,n33_4,n34_4,n35_4,n36_4,n37_4,n38_4,n39_4,n40_4,n41_4,n42_4,n43_4,n44_4,n45_4,n46_4,total_pares_4,preco_4,total_reais_4,
referencia_5,material_5,cor_5,solado_5,n22_5,n23_5,n24_5,n25_5,n26_5,n27_5,n28_5,n29_5,n30_5,n31_5,n32_5,n33_5,n34_5,n35_5,n36_5,n37_5,n38_5,n39_5,n40_5,n41_5,n42_5,n43_5,n44_5,n45_5,n46_5,total_pares_5,preco_5,total_reais_5,
referencia_6,material_6,cor_6,solado_6,n22_6,n23_6,n24_6,n25_6,n26_6,n27_6,n28_6,n29_6,n30_6,n31_6,n32_6,n33_6,n34_6,n35_6,n36_6,n37_6,n38_6,n39_6,n40_6,n41_6,n42_6,n43_6,n44_6,n45_6,n46_6,total_pares_6,preco_6,total_reais_6,
referencia_7,material_7,cor_7,solado_7,n22_7,n23_7,n24_7,n25_7,n26_7,n27_7,n28_7,n29_7,n30_7,n31_7,n32_7,n33_7,n34_7,n35_7,n36_7,n37_7,n38_7,n39_7,n40_7,n41_7,n42_7,n43_7,n44_7,n45_7,n46_7,total_pares_7,preco_7,total_reais_7,
referencia_8,material_8,cor_8,solado_8,n22_8,n23_8,n24_8,n25_8,n26_8,n27_8,n28_8,n29_8,n30_8,n31_8,n32_8,n33_8,n34_8,n35_8,n36_8,n37_8,n38_8,n39_8,n40_8,n41_8,n42_8,n43_8,n44_8,n45_8,n46_8,total_pares_8,preco_8,total_reais_8,
referencia_9,material_9,cor_9,solado_9,n22_9,n23_9,n24_9,n25_9,n26_9,n27_9,n28_9,n29_9,n30_9,n31_9,n32_9,n33_9,n34_9,n35_9,n36_9,n37_9,n38_9,n39_9,n40_9,n41_9,n42_9,n43_9,n44_9,n45_9,n46_9,total_pares_9,preco_9,total_reais_9,
referencia_10,material_10,cor_10,solado_10,n22_10,n23_10,n24_10,n25_10,n26_10,n27_10,n28_10,n29_10,n30_10,n31_10,n32_10,n33_10,n34_10,n35_10,n36_10,n37_10,n38_10,n39_10,n40_10,n41_10,n42_10,n43_10,n44_10,n45_10,n46_10,total_pares_10,preco_10,total_reais_10,
obs,cod_cli,status)
 values('$datapedido','$dataentrega','$razaosocial','$cnpj','$nfantasia','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$email','$comprador','$fone','$fax','$celular','$representante','$condpagto','$modopagto','$transportadora','$redespacho',
'$referencia_1','$material_1','$cor_1','$solado_1','$n22_1','$n23_1','$n24_1','$n25_1','$n26_1','$n27_1','$n28_1','$n29_1','$n30_1','$n31_1','$n32_1','$n33_1','$n34_1','$n35_1','$n36_1','$n37_1','$n38_1','$n39_1','$n40_1','$n41_1','$n42_1','$n43_1','$n44_1','$n45_1','$n46_1','$total_pares_1','$preco_1','$total_reais_1',
'$referencia_2','$material_2','$cor_2','$solado_2','$n22_2','$n23_2','$n24_2','$n25_2','$n26_2','$n27_2','$n28_2','$n29_2','$n30_2','$n31_2','$n32_2','$n33_2','$n34_2','$n35_2','$n36_2','$n37_2','$n38_2','$n39_2','$n40_2','$n41_2','$n42_2','$n43_2','$n44_2','$n45_2','$n46_2','$total_pares_2','$preco_2','$total_reais_2',
'$referencia_3','$material_3','$cor_3','$solado_3','$n22_3','$n23_3','$n24_3','$n25_3','$n26_3','$n27_3','$n28_3','$n29_3','$n30_3','$n31_3','$n32_3','$n33_3','$n34_3','$n35_3','$n36_3','$n37_3','$n38_3','$n39_3','$n40_3','$n41_3','$n42_3','$n43_3','$n44_3','$n45_3','$n46_3','$total_pares_3','$preco_3','$total_reais_3',
'$referencia_4','$material_4','$cor_4','$solado_4','$n22_4','$n23_4','$n24_4','$n25_4','$n26_4','$n27_4','$n28_4','$n29_4','$n30_4','$n31_4','$n32_4','$n33_4','$n34_4','$n35_4','$n36_4','$n37_4','$n38_4','$n39_4','$n40_4','$n41_4','$n42_4','$n43_4','$n44_4','$n45_4','$n46_4','$total_pares_4','$preco_4','$total_reais_4',
'$referencia_5','$material_5','$cor_5','$solado_5','$n22_5','$n23_5','$n24_5','$n25_5','$n26_5','$n27_5','$n28_5','$n29_5','$n30_5','$n31_5','$n32_5','$n33_5','$n34_5','$n35_5','$n36_5','$n37_5','$n38_5','$n39_5','$n40_5','$n41_5','$n42_5','$n43_5','$n44_5','$n45_5','$n46_5','$total_pares_5','$preco_5','$total_reais_5',
'$referencia_6','$material_6','$cor_6','$solado_6','$n22_6','$n23_6','$n24_6','$n25_6','$n26_6','$n27_6','$n28_6','$n29_6','$n30_6','$n31_6','$n32_6','$n33_6','$n34_6','$n35_6','$n36_6','$n37_6','$n38_6','$n39_6','$n40_6','$n41_6','$n42_6','$n43_6','$n44_6','$n45_6','$n46_6','$total_pares_6','$preco_6','$total_reais_6',
'$referencia_7','$material_7','$cor_7','$solado_7','$n22_7','$n23_7','$n24_7','$n25_7','$n26_7','$n27_7','$n28_7','$n29_7','$n30_7','$n31_7','$n32_7','$n33_7','$n34_7','$n35_7','$n36_7','$n37_7','$n38_7','$n39_7','$n40_7','$n41_7','$n42_7','$n43_7','$n44_7','$n45_7','$n46_7','$total_pares_7','$preco_7','$total_reais_7',
'$referencia_8','$material_8','$cor_8','$solado_8','$n22_8','$n23_8','$n24_8','$n25_8','$n26_8','$n27_8','$n28_8','$n29_8','$n30_8','$n31_8','$n32_8','$n33_8','$n34_8','$n35_8','$n36_8','$n37_8','$n38_8','$n39_8','$n40_8','$n41_8','$n42_8','$n43_8','$n44_8','$n45_8','$n46_8','$total_pares_8','$preco_8','$total_reais_8',
'$referencia_9','$material_9','$cor_9','$solado_9','$n22_9','$n23_9','$n24_9','$n25_9','$n26_9','$n27_9','$n28_9','$n29_9','$n30_9','$n31_9','$n32_9','$n33_9','$n34_9','$n35_9','$n36_9','$n37_9','$n38_9','$n39_9','$n40_9','$n41_9','$n42_9','$n43_9','$n44_9','$n45_9','$n46_9','$total_pares_9','$preco_9','$total_reais_9',
'$referencia_10','$material_10','$cor_10','$solado_10','$n22_10','$n23_10','$n24_10','$n25_10','$n26_10','$n27_10','$n28_10','$n29_10','$n30_10','$n31_10','$n32_10','$n33_10','$n34_10','$n35_10','$n36_10','$n37_10','$n38_10','$n39_10','$n40_10','$n41_10','$n42_10','$n43_10','$n44_10','$n45_10','$n46_10','$total_pares_10','$preco_10','$total_reais_10',
'$obs','$cod_cli','Aguardando_Ativação')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Pedido efetuado com sucesso<br>";

$sql = "SELECT * FROM pedidos order by num_pedido desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
printf("O número de seu pedido é: $linha[0]");
$num_pedido = $linha[0];
?>

<? } ?>

<?
    
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   "digicompras@digicompras.com.br";
	
	//PREPARA O PEDIDO
	$mens   =  "Seu pedido foi efetuado com sucesso. A Digicompras agradece por ter escolhido nossa empresa, nos sentimos prestigiados em poder lhe atender!   \n";
	$mens  .=  "Abaixo segue os dados de seu pedido para acompanhamento em nosso site! \n";
	$mens  .=  "Empresa: ".$nfantasia."                                                       \n";
	$mens  .=  "Nº de seu pedido: ".$num_pedido."                                                    \n";
	$mens  .=  "Data e hora do pedido: ".$datapedido."                                                    \n";
	$mens  .=  "Em breve lhe retornaremos sobre o seu pedido!  \n";
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Pedido efetuado através do site", $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>
<br><br><br><br>               
<table width="100%"  border="0">
  <tr>
    <td colspan="3"><div align="center"><strong><span class="style1">CONDI&Ccedil;&Otilde;ES</span></strong></div></td>
  </tr>
  <tr>
    <td width="40%">1-Este pedido est&aacute; sujeito a confirma&ccedil;&atilde;o da f&aacute;brica.</td>
    <td width="11%">&nbsp;</td>
    <td width="49%">6-Para efeito de vencimentos, n&atilde;o nos responsabilizamos por atrazo das companhias transportadoras. </td>
  </tr>
  <tr>
    <td>2-As mercadorias viajam por conta e risco do comprador.</td>
    <td>&nbsp;</td>
    <td>7-O pedido fica automaticamente cancelado cas seja vendido fora das condi&ccedil;&otilde;es da tabela. </td>
  </tr>
  <tr>
    <td>3-Somente nos responsabilizamos por falta de mercadorias quando se fizer o auto de avarias na entrega pela transportadora. </td>
    <td>&nbsp;</td>
    <td>8-N&atilde;o aceitamos devolu&ccedil;&otilde;es sem pr&eacute;via consulta da f&aacute;brica e sem justificativas de qualidade. </td>
  </tr>
  <tr>
    <td>4-Reclama&ccedil;&otilde;es s&oacute; ser&atilde;o consideradas quando feitas dentro do prazo de (05) cinco dias ap&oacute;s recebida as mercadorias.</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5-n&atilde;o aceitamos o cancelamento deste pedido ap&oacute;s iniciada sua fabrica&ccedil;&atilde;o.</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

     




<?
mysql_close($conexao);
?>