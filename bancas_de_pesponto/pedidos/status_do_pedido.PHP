

<html>
<head>
<title>CADASTRO DE PEDIDOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<p>&nbsp;</p>
<form action="selecione_num_pedido_para_alterar_status.php" method="post" name="form2" target="navegacao">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
<form name="form1" method="post" action="grava_alterar_status_do_pedido.php">
<?

$num_pedido = $_POST['num_pedido'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM pedidos where num_pedido = '$num_pedido'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;




//recebe os dados do cliente para efetuar o pedido
$cod_cli = $linha[346];
$datapedido = $linha[1];
$dataentrega = $linha[2];
$razaosocial = $linha[3];
$cnpj = $linha[4];
$nfantasia = $linha[5];
$inscr_est = $linha[6];
$endereco =$linha[7];
$numero = $linha[8];
$bairro = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$cep = $linha[12];
$email = $linha[13];
$comprador = $linha[14];
$fone = $linha[15];
$fax = $linha[16];
$celular = $linha[17];
$representante = $linha[18];
$condpagto = $linha[19];
$modopagto = $linha[20];
$transportadora = $linha[21];
$redespacho = $linha[22];

//dados referente ao pedido
$referencia_1 = $linha[23];
$material_1 = $linha[24];
$cor_1 = $linha[25];
$solado_1 = $linha[26];
$n22_1 = $linha[27];
$n23_1 = $linha[28];
$n24_1 = $linha[29];
$n25_1 = $linha[30];
$n26_1 = $linha[31];
$n27_1 = $linha[32];
$n28_1 = $linha[33];
$n29_1 = $linha[34];
$n30_1 = $linha[35];
$n31_1 = $linha[36];
$n32_1 = $linha[37];
$n33_1 = $linha[38];
$n34_1 = $linha[39];
$n35_1 = $linha[40];
$n36_1 = $linha[41];
$n37_1 = $linha[42];
$n38_1 = $linha[43];
$n39_1 = $linha[44];
$n40_1 = $linha[45];
$n41_1 = $linha[46];
$n42_1 = $linha[47];
$n43_1 = $linha[48];
$n44_1 = $linha[49];
$n45_1 = $linha[50];
$n46_1 = $linha[51];
$preco_1 = $linha[52];

$referencia_2 = $linha[55];
$material_2 = $linha[56];
$cor_2 = $linha[57];
$solado_2 = $linha[58];
$n22_2 = $linha[59];
$n23_2 = $linha[60];
$n24_2 = $linha[61];
$n25_2 = $linha[62];
$n26_2 = $linha[63];
$n27_2 = $linha[64];
$n28_2 = $linha[65];
$n29_2 = $linha[66];
$n30_2 = $linha[67];
$n31_2 = $linha[68];
$n32_2 = $linha[69];
$n33_2 = $linha[70];
$n34_2 = $linha[71];
$n35_2 = $linha[72];
$n36_2 = $linha[73];
$n37_2 = $linha[74];
$n38_2 = $linha[75];
$n39_2 = $linha[76];
$n40_2 = $linha[77];
$n41_2 = $linha[78];
$n42_2 = $linha[79];
$n43_2 = $linha[80];
$n44_2 = $linha[81];
$n45_2 = $linha[82];
$n46_2 = $linha[83];
$preco_2 = $linha[84];

$referencia_3 = $linha[87];
$material_3 = $linha[88];
$cor_3 = $linha[89];
$solado_3 = $linha[90];
$n22_3 = $linha[91];
$n23_3 = $linha[92];
$n24_3 = $linha[93];
$n25_3 = $linha[94];
$n26_3 = $linha[95];
$n27_3 = $linha[96];
$n28_3 = $linha[97];
$n29_3 = $linha[98];
$n30_3 = $linha[99];
$n31_3 = $linha[100];
$n32_3 = $linha[101];
$n33_3 = $linha[102];
$n34_3 = $linha[103];
$n35_3 = $linha[104];
$n36_3 = $linha[105];
$n37_3 = $linha[106];
$n38_3 = $linha[107];
$n39_3 = $linha[108];
$n40_3 = $linha[109];
$n41_3 = $linha[110];
$n42_3 = $linha[111];
$n43_3 = $linha[112];
$n44_3 = $linha[113];
$n45_3 = $linha[114];
$n46_3 = $linha[115];
$preco_3 = $linha[116];

$referencia_4 = $linha[119];
$material_4 = $linha[120];
$cor_4 = $linha[121];
$solado_4 = $linha[122];
$n22_4 = $linha[123];
$n23_4 = $linha[124];
$n24_4 = $linha[125];
$n25_4 = $linha[126];
$n26_4 = $linha[127];
$n27_4 = $linha[128];
$n28_4 = $linha[129];
$n29_4 = $linha[130];
$n30_4 = $linha[131];
$n31_4 = $linha[132];
$n32_4 = $linha[133];
$n33_4 = $linha[134];
$n34_4 = $linha[135];
$n35_4 = $linha[136];
$n36_4 = $linha[137];
$n37_4 = $linha[138];
$n38_4 = $linha[139];
$n39_4 = $linha[140];
$n40_4 = $linha[141];
$n41_4 = $linha[142];
$n42_4 = $linha[143];
$n43_4 = $linha[144];
$n44_4 = $linha[145];
$n45_4 = $linha[146];
$n46_4 = $linha[147];
$preco_4 = $linha[148];

$referencia_5 = $linha[151];
$material_5 = $linha[152];
$cor_5 = $linha[153];
$solado_5 = $linha[154];
$n22_5 = $linha[155];
$n23_5 = $linha[156];
$n24_5 = $linha[157];
$n25_5 = $linha[158];
$n26_5 = $linha[159];
$n27_5 = $linha[160];
$n28_5 = $linha[161];
$n29_5 = $linha[162];
$n30_5 = $linha[163];
$n31_5 = $linha[164];
$n32_5 = $linha[165];
$n33_5 = $linha[166];
$n34_5 = $linha[167];
$n35_5 = $linha[168];
$n36_5 = $linha[169];
$n37_5 = $linha[170];
$n38_5 = $linha[171];
$n39_5 = $linha[172];
$n40_5 = $linha[173];
$n41_5 = $linha[174];
$n42_5 = $linha[175];
$n43_5 = $linha[176];
$n44_5 = $linha[177];
$n45_5 = $linha[178];
$n46_5 = $linha[179];
$preco_5 = $linha[180];

$referencia_6 = $linha[183];
$material_6 = $linha[184];
$cor_6 = $linha[185];
$solado_6 = $linha[186];
$n22_6 = $linha[187];
$n23_6 = $linha[188];
$n24_6 = $linha[189];
$n25_6 = $linha[190];
$n26_6 = $linha[191];
$n27_6 = $linha[192];
$n28_6 = $linha[193];
$n29_6 = $linha[194];
$n30_6 = $linha[195];
$n31_6 = $linha[196];
$n32_6 = $linha[197];
$n33_6 = $linha[198];
$n34_6 = $linha[199];
$n35_6 = $linha[100];
$n36_6 = $linha[201];
$n37_6 = $linha[202];
$n38_6 = $linha[203];
$n39_6 = $linha[204];
$n40_6 = $linha[205];
$n41_6 = $linha[206];
$n42_6 = $linha[207];
$n43_6 = $linha[208];
$n44_6 = $linha[209];
$n45_6 = $linha[210];
$n46_6 = $linha[211];
$preco_6 = $linha[212];

$referencia_7 = $linha[215];
$material_7 = $linha[216];
$cor_7 = $linha[217];
$solado_7 = $linha[218];
$n22_7 = $linha[219];
$n23_7 = $linha[220];
$n24_7 = $linha[221];
$n25_7 = $linha[222];
$n26_7 = $linha[223];
$n27_7 = $linha[224];
$n28_7 = $linha[225];
$n29_7 = $linha[226];
$n30_7 = $linha[227];
$n31_7 = $linha[228];
$n32_7 = $linha[229];
$n33_7 = $linha[230];
$n34_7 = $linha[231];
$n35_7 = $linha[232];
$n36_7 = $linha[233];
$n37_7 = $linha[234];
$n38_7 = $linha[235];
$n39_7 = $linha[236];
$n40_7 = $linha[237];
$n41_7 = $linha[238];
$n42_7 = $linha[239];
$n43_7 = $linha[240];
$n44_7 = $linha[241];
$n45_7 = $linha[242];
$n46_7 = $linha[243];
$preco_7 = $linha[244];

$referencia_8 = $linha[247];
$material_8 = $linha[248];
$cor_8 = $linha[249];
$solado_8 = $linha[250];
$n22_8 = $linha[251];
$n23_8 = $linha[252];
$n24_8 = $linha[253];
$n25_8 = $linha[254];
$n26_8 = $linha[255];
$n27_8 = $linha[256];
$n28_8 = $linha[257];
$n29_8 = $linha[258];
$n30_8 = $linha[259];
$n31_8 = $linha[260];
$n32_8 = $linha[261];
$n33_8 = $linha[262];
$n34_8 = $linha[263];
$n35_8 = $linha[264];
$n36_8 = $linha[265];
$n37_8 = $linha[266];
$n38_8 = $linha[267];
$n39_8 = $linha[268];
$n40_8 = $linha[269];
$n41_8 = $linha[270];
$n42_8 = $linha[271];
$n43_8 = $linha[272];
$n44_8 = $linha[273];
$n45_8 = $linha[274];
$n46_8 = $linha[275];
$preco_8 = $linha[276];

$referencia_9 = $linha[279];
$material_9 = $linha[280];
$cor_9 = $linha[281];
$solado_9 = $linha[282];
$n22_9 = $linha[283];
$n23_9 = $linha[284];
$n24_9 = $linha[285];
$n25_9 = $linha[286];
$n26_9 = $linha[287];
$n27_9 = $linha[288];
$n28_9 = $linha[289];
$n29_9 = $linha[290];
$n30_9 = $linha[291];
$n31_9 = $linha[292];
$n32_9 = $linha[293];
$n33_9 = $linha[294];
$n34_9 = $linha[295];
$n35_9 = $linha[296];
$n36_9 = $linha[297];
$n37_9 = $linha[298];
$n38_9 = $linha[299];
$n39_9 = $linha[300];
$n40_9 = $linha[301];
$n41_9 = $linha[302];
$n42_9 = $linha[303];
$n43_9 = $linha[304];
$n44_9 = $linha[305];
$n45_9 = $linha[306];
$n46_9 = $linha[307];
$preco_9 = $linha[308];

$referencia_10 = $linha[311];
$material_10 = $linha[312];
$cor_10 = $linha[313];
$solado_10 = $linha[314];
$n22_10 = $linha[315];
$n23_10 = $linha[316];
$n24_10 = $linha[317];
$n25_10 = $linha[318];
$n26_10 = $linha[319];
$n27_10 = $linha[320];
$n28_10 = $linha[321];
$n29_10 = $linha[322];
$n30_10 = $linha[323];
$n31_10 = $linha[324];
$n32_10 = $linha[325];
$n33_10 = $linha[326];
$n34_10 = $linha[327];
$n35_10 = $linha[328];
$n36_10 = $linha[329];
$n37_10 = $linha[330];
$n38_10 = $linha[331];
$n39_10 = $linha[332];
$n40_10 = $linha[333];
$n41_10 = $linha[334];
$n42_10 = $linha[335];
$n43_10 = $linha[336];
$n44_10 = $linha[337];
$n45_10 = $linha[338];
$n46_10 = $linha[339];
$preco_10 = $linha[340];

$obs = $linha[345];
$status = $linha[347];


?>
<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="6"><p><strong><font color="#0000FF" size="4">Alterando status do pedido que foi efetuado em </font><font color="#0000FF"><? echo $datapedido;; ?></font><font color="#0000FF" size="4">
              ,</font></strong></p>
        <p><strong><font color="#0000FF" size="4">com data prevista de entrega para </font><font color="#0000FF"><? echo $dataentrega; ?></font> .</strong></p>
        <p>&nbsp;</p></td>
    </tr>
    <tr> 
      <td colspan="2"><strong><font color="#0000FF">C</font><font color="#0000FF">&oacute;digo do cliente </font><font color="#0000FF">: <? echo $cod_cli; ?>
      </font></strong></td>
      <td>&nbsp;</td>
      <td width="13%"><strong></strong>        </td>
      <td width="24%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Raz&atilde;o Social:</td>
      <td><strong><font color="#0000FF"><? echo $razaosocial; ?></font></strong></td>
      <td>N. Fantasia:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $nfantasia; ?></font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>N&ordm; Pedido </td>
      <td><strong><font color="#0000FF"><? echo $num_pedido; ?>
        <input name="num_pedido" type="hidden" id="cnpj2" value="<? echo $num_pedido; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="16%">Status</td>
      <td width="31%"><strong>
        <select name="status" id="select2">
          <option><? echo $status; ?></option>
          <?


    $sql = "select * from status order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['status']. ">".$x['status']."</option>";
    }
?>
        </select>
      </strong>
      </td>
      <td width="15%">&nbsp;</td>
      <td colspan="2"><strong></strong>
        <strong></strong> </td><td width="1%">&nbsp;</td>
    </tr>

  </table>
  	          <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>

  <p>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <input type="submit" name="Submit" value="Alterar Status">
</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>