

<html>
<head>
<title>CADASTRO DE PEDIDOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="recalcular_pedido.php">
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
      <td colspan="6"><p><strong><font color="#0000FF" size="4">Editando Pedido que foi efetuado em </font><font color="#0000FF"><? echo $datapedido;; ?></font><font color="#0000FF" size="4">
              ,
                      <input name="datapedido" type="hidden" id="datapedido" value="<?echo $datapedido; ?>">
          com data prevista de entrega para
          <input name="dataentrega" type="text" id="dataentrega" value="<? echo $dataentrega;  ?>">
</font></strong></p>        </td>
    </tr>
    <tr> 
      <td colspan="2"><strong><font color="#0000FF">C</font><font color="#0000FF">&oacute;digo do cliente que est&aacute; sendo editado </font><font color="#0000FF">: <? echo $cod_cli; ?>
            <input name="cod_cli" type="hidden" id="cod_cli" value="<? echo $cod_cli; ?>">
      </font></strong></td>
      <td>N&ordm; Pedido </td>
      <td width="13%"><strong><font color="#0000FF"><? echo $num_pedido; ?></font></strong>
        <input name="num_pedido" type="hidden" id="cnpj2" value="<? echo $num_pedido; ?>"></td>
      <td width="24%">STATUS 
        <select name="status" id="select40">
          <option><? echo $status; ?></option>
          <?


    $sql = "select * from status order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=".$x['status'].">".$x['status']."</option>";
    }
?>
        </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="16%">Nome/Raz&atilde;o Social:</td>
      <td width="31%"><strong><font color="#0000FF"><? echo $razaosocial; ?></font></strong>
        <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial; ?>"> 
      </td><td width="15%">Cnpj / CPF:</td>
      <td colspan="2"><strong></strong>
        <strong><font color="#0000FF"><? echo $cnpj; ?></font></strong>
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">      </td><td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Apelido/N. Fantasia:</td>
      <td><strong></strong>
        <strong><font color="#0000FF"><? echo $nfantasia; ?></font></strong>
      <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">      </td><td>Inscr. Est: / RG:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $inscr_est; ?></font></strong>
      <input name="inscr_est" type="hidden" id="inscr_est" value="<? echo $inscr_est; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><strong><font color="#0000FF"><? echo $endereco; ?></font></strong>
      <input name="endereco" type="hidden" id="endereco" value="<? echo $endereco; ?>">      </td><td>N&uacute;mero:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $numero; ?></font></strong>
      <input name="numero" type="hidden" id="numero2" value="<? echo $numero; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro:</p></td>
      <td><strong><font color="#0000FF"><? echo $bairro; ?></font></strong>
      <input name="bairro" type="hidden" id="bairro" value="<? echo $bairro;?>">      </td><td>Cidade:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cidade; ?></font></strong>
      <input name="cidade" type="hidden" id="cidade3" value="<? echo $cidade; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><strong><font color="#0000FF"><? echo $estado; ?></font></strong>
      <input name="estado" type="hidden" id="estado" value="<? echo $estado; ?>"> </td>
      <td>Cep:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $cep; ?></font></strong>
      <input name="cep" type="hidden" id="cep2" value="<? echo $cep; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><strong><font color="#0000FF"><? echo $email; ?></font></strong>
      <input name="email" type="hidden" id="email3" value="<? echo $email; ?>">      </td><td>Comprador:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $comprador; ?></font></strong>
      <input name="comprador" type="hidden" id="comprador2" value="<? echo $comprador; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><strong><font color="#0000FF"><? echo $fone; ?></font></strong>
      <input name="fone" type="hidden" id="fone2" value="<? echo $fone; ?>">      </td><td>Fax:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $fax; ?></font></strong>
      <input name="fax" type="hidden" id="fax3" value="<? echo $fax; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><strong><font color="#0000FF"><? echo $celular; ?></font></strong>
        <input name="celular" type="hidden" id="celular3" value="<? echo $celular; ?>">
      </td>
      <td>Representante:</td>
      <td colspan="2"><strong><font color="#0000FF"><? echo $representante; ?></font></strong>        <input name="representante" type="hidden" id="representante" value="<? echo $representante; ?>"> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cond Pagto:</td>
      <td><select name="condpagto" id="select4">
        <option><? echo $condpagto; ?></option>
        <?


    $sql = "select * from cond_pagto order by condpagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['condpagto']. ">".$x['condpagto']."</option>";
    }
?>
		
        </select> 
        <font color="#0000FF">* (sujeito a an&aacute;lise)</font></td>
      <td>Modo Pagto:</td>
      <td colspan="2"><select name="modopagto" id="select5">
        <option><? echo $modopagto; ?></option>
        <?


    $sql = "select * from modo_pagto order by modopagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['modopagto']. ">".$x['modopagto']."</option>";
    }
?>
		
        </select> 
      <font color="#0000FF">* (sujeito a an&aacute;lise) </font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Transportadora:</td>
      <td><input name="transportadora" type="text" id="transportadora3" value="<? echo $transportadora; ?>" size="50" maxlength="50"> 
        <font color="#0000FF"><strong>(Fob)</strong></font> </td>
      <td>Resdespacho:</td>
      <td colspan="2"><input name="redespacho" type="text" id="redespacho3" value="<? echo $redespacho; ?>" size="50" maxlength="50"> 
        <strong><font color="#0000FF">(Fob)</font></strong> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="4"><div align="left"><strong><font color="#0000FF" size="4">Escolha a refer&ecirc;ncia do produto e monte a grade que deseja </font></strong></div></td>
      <td>&nbsp;</td>
    </tr>
	
  </table>
  	          <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>

  <table width="100%"  border="1">
    <tr>
      <td width="9%"><div align="center"><font color="#0000FF"><strong>Referencia</strong></font></div></td>
      <td width="6%"><div align="center"><font color="#0000FF"><strong>Material</strong></font></div></td>
      <td width="9%"><div align="center"><font color="#0000FF"><strong>Cor </strong></font></div></td>
      <td width="5%"><div align="center"><font color="#0000FF"><strong>Solado</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>22</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>23</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>24</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>25</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>26</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>27</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>28</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>29</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>30</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>31</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>32</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>33</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>34</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>35</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>36</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>37</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>38</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>39</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>40</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>41</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>42</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>43</strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>44</strong></font></div></td>
      <td width="6%"><div align="center"><font color="#0000FF"><strong>45</strong></font></div></td>
      <td width="6%"><font color="#0000FF"><strong>46</strong></font></td>
      <td width="6%"><div align="center"><font color="#0000FF"><strong>Total pares </strong></font></div></td>
      <td width="5%"><div align="center"><font color="#0000FF"><strong>R$ Unit </strong></font></div></td>
      <td width="3%"><div align="center"><font color="#0000FF"><strong>Total R$</strong></font></div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_1" id="select">
            <option><? echo $referencia_1; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_1" id="select">
            <option selected><? echo $material_1; ?> </option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_1" id="select">
            <option  selected><? echo $cor_1; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_1" id="select">
            <option  selected><? echo $solado_1; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_1" type="text" id="n22_1" value="<? echo $n22_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_1" type="text" id="n23_1" value="<? echo $n23_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_1" type="text" id="n24_1" value="<? echo $n24_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_1" type="text" id="n25_1" value="<? echo $n25_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_1" type="text" id="n26_1" value="<? echo $n26_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_1" type="text" id="n27_1" value="<? echo $n27_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_1" type="text" id="n28_1" value="<? echo $n28_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_1" type="text" id="n29_1" value="<? echo $n29_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_1" type="text" id="n30_1" value="<? echo $n30_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_1" type="text" id="n31_1" value="<? echo $n31_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_1" type="text" id="n32_1" value="<? echo $n32_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_1" type="text" id="n33_1" value="<? echo $n33_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_1" type="text" id="n34_1" value="<? echo $n34_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_1" type="text" id="n35_1" value="<? echo $n35_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_1" type="text" id="n36_1" value="<? echo $n36_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_1" type="text" id="n37_1" value="<? echo $n37_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_1" type="text" id="n38_1" value="<? echo $n38_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_1" type="text" id="n39_1" value="<? echo $n39_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_1" type="text" id="n40_1" value="<? echo $n40_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_1" type="text" id="n41_1" value="<? echo $n41_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_1" type="text" id="n42_1" value="<? echo $n42_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_1" type="text" id="n43_1" value="<? echo $n43_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_1" type="text" id="n44_1" value="<? echo $n44_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_1" type="text" id="n45_1" value="<? echo $n45_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_1" type="text" id="n46_1" value="<? echo $n46_1; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
<?


$soma1 = $n22_1+$n23_1+$n24_1+$n25_1+$n26_1+$n27_1+$n28_1+$n29_1+$n30_1+$n31_1+$n32_1+$n33_1+$n34_1+$n35_1+$n36_1+$n37_1+$n38_1+$n39_1+$n40_1+$n41_1+$n42_1+$n43_1+$n44_1+$n45_1+$n46_1;
echo $soma1;		
		?>		
<input name="total_pares_1" type="hidden" id="quant_111" value="<? echo $soma1; ?>">
        </div></td>
      <td><div align="center">
          <input name="preco_1" type="text" id="preco_1" value="<? echo $preco_1; ?>" size="4" maxlength="5">
        </div></td>
      <td>
        <div align="center">
<?
$total_reais1 = bcmul($soma1,$preco_1,2);
echo $total_reais1;
?>

		  <input name="total_reais_1" type="hidden" id="quant_111" value="<? echo $total_reais1; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_2" id="select2">
            <option selected><? echo $referencia_2; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_2" id="select13">
            <option  selected><? echo $material_2; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_2" id="select22">
            <option  selected><? echo $cor_2; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_2" id="select31">
            <option  selected><? echo $solado_2; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_2" type="text" id="n22_2" value="<? echo $n22_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_2" type="text" id="n23_2" value="<? echo $n23_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_2" type="text" id="24_2" value="<? echo $n24_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_2" type="text" id="25_2" value="<? echo $n25_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_2" type="text" id="26_2" value="<? echo $n26_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_2" type="text" id="27_2" value="<? echo $n27_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_2" type="text" id="28_2" value="<? echo $n28_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_2" type="text" id="29_2" value="<? echo $n29_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_2" type="text" id="30_2" value="<? echo $n30_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_2" type="text" id="31_2" value="<? echo $n31_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_2" type="text" id="32_2" value="<? echo $n32_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_2" type="text" id="33_2" value="<? echo $n33_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_2" type="text" id="34_2" value="<? echo $n34_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_2" type="text" id="35_2" value="<? echo $n35_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_2" type="text" id="36_2" value="<? echo $n36_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_2" type="text" id="37_2" value="<? echo $n37_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_2" type="text" id="38_2" value="<? echo $n38_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_2" type="text" id="39_2" value="<? echo $n39_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_2" type="text" id="40_2" value="<? echo $n40_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_2" type="text" id="41_2" value="<? echo $n41_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_2" type="text" id="42_2" value="<? echo $n42_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_2" type="text" id="43_2" value="<? echo $n43_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_2" type="text" id="44_2" value="<? echo $n44_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_2" type="text" id="45_2" value="<? echo $n45_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_2" type="text" id="46_2" value="<? echo $n46_2; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma2 = $n22_2+$n23_2+$n24_2+$n25_2+$n26_2+$n27_2+$n28_2+$n29_2+$n30_2+$n31_2+$n32_2+$n33_2+$n34_2+$n35_2+$n36_2+$n37_2+$n38_2+$n39_2+$n40_2+$n41_2+$n42_2+$n43_2+$n44_2+$n45_2+$n46_2;
echo $soma2;		
		?>
        <input name="total_pares_2" type="hidden" id="total_pares_22" value="<? echo $soma2; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_2" type="text" id="preco_22" value="<? echo $preco_2; ?>" size="4" maxlength="5">
</div></td>
      <td><div align="center">
        <?$total_reais2 = bcmul($soma2,$preco_2,2);
echo $total_reais2;
?>
        <input name="total_reais_2" type="hidden" id="total_reais_22" value="<? echo $total_reais2; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_3" id="select3">
            <option><? echo $referencia_3; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_3" id="select14">
            <option  selected><? echo $material_3; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_3" id="select23">
            <option  selected><? echo $cor_3; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_3" id="select32">
            <option  selected><? echo $solado_3; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_3" type="text" id="n22_3" value="<? echo $n22_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_3" type="text" id="23_3" value="<? echo $n23_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_3" type="text" id="24_3" value="<? echo $n24_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_3" type="text" id="25_3" value="<? echo $n25_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_3" type="text" id="26_3" value="<? echo $n26_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_3" type="text" id="27_3" value="<? echo $n27_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_3" type="text" id="28_3" value="<? echo $n28_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_3" type="text" id="29_3" value="<? echo $n29_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_3" type="text" id="30_3" value="<? echo $n30_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_3" type="text" id="31_3" value="<? echo $n31_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_3" type="text" id="32_3" value="<? echo $n32_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_3" type="text" id="33_3" value="<? echo $n33_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_3" type="text" id="34_3" value="<? echo $n34_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_3" type="text" id="35_3" value="<? echo $n35_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_3" type="text" id="36_3" value="<? echo $n36_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_3" type="text" id="37_3" value="<? echo $n37_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_3" type="text" id="38_3" value="<? echo $n38_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_3" type="text" id="39_3" value="<? echo $n39_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_3" type="text" id="40_3" value="<? echo $n40_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_3" type="text" id="41_3" value="<? echo $n41_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_3" type="text" id="42_3" value="<? echo $n42_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_3" type="text" id="43_3" value="<? echo $n43_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_3" type="text" id="44_3" value="<? echo $n44_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_3" type="text" id="45_3" value="<? echo $n45_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_3" type="text" id="46_3" value="<? echo $n46_3; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma3 = $n22_3+$n23_3+$n24_3+$n25_3+$n26_3+$n27_3+$n28_3+$n29_3+$n30_3+$n31_3+$n32_3+$n33_3+$n34_3+$n35_3+$n36_3+$n37_3+$n38_3+$n39_3+$n40_3+$n41_3+$n42_3+$n43_3+$n44_3+$n45_3+$n46_3;
echo $soma3;		
		?>
        <input name="total_pares_3" type="hidden" id="total_pares_32" value="<? echo $soma3; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_3" type="text" id="preco_3" value="<? echo $preco_3; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais3 = bcmul($soma3,$preco_3,2);
echo $total_reais3;
?>
          <input name="total_reais_3" type="hidden" id="total_reais_32" value="<? echo $total_reais3; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_4" id="select6">
            <option><? echo $referencia_4; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_4" id="select15">
            <option  selected><? echo $material_4; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_4" id="select24">
            <option  selected><? echo $cor_4; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_4" id="select33">
            <option  selected><? echo $solado_4; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_4" type="text" id="n22_4" value="<? echo $n22_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_4" type="text" id="23_4" value="<? echo $n23_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_4" type="text" id="24_4" value="<? echo $n24_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_4" type="text" id="25_4" value="<? echo $n25_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_4" type="text" id="26_4" value="<? echo $n26_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_4" type="text" id="27_4" value="<? echo $n27_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_4" type="text" id="28_4" value="<? echo $n28_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_4" type="text" id="29_4" value="<? echo $n29_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_4" type="text" id="30_4" value="<? echo $n30_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_4" type="text" id="31_4" value="<? echo $n31_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_4" type="text" id="32_4" value="<? echo $n32_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_4" type="text" id="33_4" value="<? echo $n33_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_4" type="text" id="34_4" value="<? echo $n34_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_4" type="text" id="35_4" value="<? echo $n35_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_4" type="text" id="36_4" value="<? echo $n36_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_4" type="text" id="37_4" value="<? echo $n37_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_4" type="text" id="38_4" value="<? echo $n38_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_4" type="text" id="39_4" value="<? echo $n39_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_4" type="text" id="40_4" value="<? echo $n40_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_4" type="text" id="41_4" value="<? echo $n41_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_4" type="text" id="42_4" value="<? echo $n42_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_4" type="text" id="43_4" value="<? echo $n43_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_4" type="text" id="44_4" value="<? echo $n44_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_4" type="text" id="45_4" value="<? echo $n45_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_4" type="text" id="46_4" value="<? echo $n46_4; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma4 = $n22_4+$n23_4+$n24_4+$n25_4+$n26_4+$n27_4+$n28_4+$n29_4+$n30_4+$n31_4+$n32_4+$n33_4+$n34_4+$n35_4+$n36_4+$n37_4+$n38_4+$n39_4+$n40_4+$n41_4+$n42_4+$n43_4+$n44_4+$n45_4+$n46_4;
echo $soma4;		
		?>
        <input name="total_pares_4" type="hidden" id="total_pares_42" value="<? echo $soma4; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_4" type="text" id="preco_4" value="<? echo $preco_4; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais4 = bcmul($soma4,$preco_4,2);
echo $total_reais4;
?>
          <input name="total_reais_4" type="hidden" id="total_reais_42" value="<? echo $total_reais4; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_5" id="select7">
            <option><? echo $referencia_5; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_5" id="select16">
            <option  selected><? echo $material_5; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_5" id="select25">
            <option  selected><? echo $cor_5; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_5" id="select34">
            <option  selected><? echo $solado_5; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_5" type="text" id="n22_5" value="<? echo $n22_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_5" type="text" id="23_5" value="<? echo $n23_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_5" type="text" id="24_5" value="<? echo $n24_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_5" type="text" id="25_5" value="<? echo $n25_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_5" type="text" id="26_5" value="<? echo $n26_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_5" type="text" id="27_5" value="<? echo $n27_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_5" type="text" id="28_5" value="<? echo $n28_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_5" type="text" id="29_5" value="<? echo $n29_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_5" type="text" id="30_5" value="<? echo $n30_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_5" type="text" id="31_5" value="<? echo $n31_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_5" type="text" id="32_5" value="<? echo $n32_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_5" type="text" id="33_5" value="<? echo $n33_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_5" type="text" id="34_5" value="<? echo $n34_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_5" type="text" id="35_5" value="<? echo $n35_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_5" type="text" id="36_5" value="<? echo $n36_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_5" type="text" id="37_5" value="<? echo $n37_5; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_5" type="text" id="38_5" value="<? echo $n38_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_5" type="text" id="39_5" value="<? echo $n39_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_5" type="text" id="40_5" value="<? echo $n40_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_5" type="text" id="41_5" value="<? echo $n41_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_5" type="text" id="42_5" value="<? echo $n42_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_5" type="text" id="43_5" value="<? echo $n43_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_5" type="text" id="44_5" value="<? echo $n44_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_5" type="text" id="45_5" value="<? echo $n45_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_5" type="text" id="46_5" value="<? echo $n46_5; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma5 = $n22_5+$n23_5+$n24_5+$n25_5+$n26_5+$n27_5+$n28_5+$n29_5+$n30_5+$n31_5+$n32_5+$n33_5+$n34_5+$n35_5+$n36_5+$n37_5+$n38_5+$n39_5+$n40_5+$n41_5+$n42_5+$n43_5+$n44_5+$n45_5+$n46_5;
echo $soma5;		
		?>
        <input name="total_pares_5" type="hidden" id="total_pares_52" value="<? echo $soma5; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_5" type="text" id="preco_5" value="<? echo $preco_5; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais5 = bcmul($soma5,$preco_5,2);
echo $total_reais5;


?>
          <input name="total_reais_5" type="hidden" id="total_reais_52" value="<? echo $total_reais5; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_6" id="select8">
            <option><? echo $referencia_6; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_6" id="select17">
            <option  selected><? echo $material_6; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_6" id="select26">
            <option  selected><? echo $cor_6; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_6" id="select35">
            <option  selected><? echo $solado_6; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_6" type="text" id="n22_6" value="<? echo $n22_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_6" type="text" id="23_6" value="<? echo $n23_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_6" type="text" id="24_6" value="<? echo $n24_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_6" type="text" id="25_6" value="<? echo $n25_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_6" type="text" id="26_6" value="<? echo $n26_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_6" type="text" id="27_6" value="<? echo $n27_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_6" type="text" id="28_6" value="<? echo $n28_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_6" type="text" id="29_6" value="<? echo $n29_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_6" type="text" id="30_6" value="<? echo $n30_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_6" type="text" id="31_6" value="<? echo $n31_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_6" type="text" id="32_6" value="<? echo $n32_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_6" type="text" id="33_6" value="<? echo $n33_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_6" type="text" id="34_6" value="<? echo $n34_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_6" type="text" id="35_6" value="<? echo $n35_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_6" type="text" id="36_6" value="<? echo $n36_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_6" type="text" id="37_6" value="<? echo $n37_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_6" type="text" id="38_6" value="<? echo $n38_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_6" type="text" id="39_6" value="<? echo $n39_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_6" type="text" id="40_6" value="<? echo $n40_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_6" type="text" id="41_6" value="<? echo $n41_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_6" type="text" id="42_6" value="<? echo $n42_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_6" type="text" id="43_6" value="<? echo $n43_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_6" type="text" id="44_6" value="<? echo $n44_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_6" type="text" id="45_6" value="<? echo $n45_6; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_6" type="text" id="46_6" value="<? echo $n46_6; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma6 = $n22_6+$n23_6+$n24_6+$n25_6+$n26_6+$n27_6+$n28_6+$n29_6+$n30_6+$n31_6+$n32_6+$n33_6+$n34_6+$n35_6+$n36_6+$n37_6+$n38_6+$n39_6+$n40_6+$n41_6+$n42_6+$n43_6+$n44_6+$n45_6+$n46_6;
echo $soma6;		
		?>
        <input name="total_pares_6" type="hidden" id="total_pares_62" value="<? echo $soma6; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_6" type="text" id="preco_6" value="<? echo $preco_6; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais6 = bcmul($soma6,$preco_6,2);
echo $total_reais6;
?>
          <input name="total_reais_6" type="hidden" id="total_reais_62" value="<? echo $total_reais6; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_7" id="select9">
            <option><? echo $referencia_7; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_7" id="select18">
            <option  selected><? echo $material_7; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_7" id="select27">
            <option  selected><? echo $cor_7; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_7" id="select36">
            <option  selected><? echo $solado_7; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_7" type="text" id="n22_7" value="<? echo $n22_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_7" type="text" id="23_7" value="<? echo $n23_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_7" type="text" id="24_7" value="<? echo $n24_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_7" type="text" id="25_7" value="<? echo $n25_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_7" type="text" id="26_7" value="<? echo $n26_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_7" type="text" id="27_7" value="<? echo $n27_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_7" type="text" id="28_7" value="<? echo $n28_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_7" type="text" id="29_7" value="<? echo $n29_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_7" type="text" id="30_7" value="<? echo $n30_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_7" type="text" id="31_7" value="<? echo $n31_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_7" type="text" id="32_7" value="<? echo $n32_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_7" type="text" id="33_7" value="<? echo $n33_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_7" type="text" id="34_7" value="<? echo $n34_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_7" type="text" id="35_7" value="<? echo $n35_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_7" type="text" id="36_7" value="<? echo $n36_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_7" type="text" id="37_7" value="<? echo $n37_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_7" type="text" id="38_7" value="<? echo $n38_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_7" type="text" id="39_7" value="<? echo $n39_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_7" type="text" id="40_7" value="<? echo $n40_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_7" type="text" id="41_7" value="<? echo $n41_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_7" type="text" id="42_7" value="<? echo $n42_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_7" type="text" id="43_7" value="<? echo $n43_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_7" type="text" id="44_7" value="<? echo $n44_7; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_7" type="text" id="45_7" value="<? echo $n45_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_7" type="text" id="46_7" value="<? echo $n46_7; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma7 = $n22_7+$n23_7+$n24_7+$n25_7+$n26_7+$n27_7+$n28_7+$n29_7+$n30_7+$n31_7+$n32_7+$n33_7+$n34_7+$n35_7+$n36_7+$n37_7+$n38_7+$n39_7+$n40_7+$n41_7+$n42_7+$n43_7+$n44_7+$n45_7+$n46_7;
echo $soma7;		
		?>
        <input name="total_pares_7" type="hidden" id="total_pares_72" value="<? echo $soma7; ?>">

      </div></td>
      <td>
        <div align="center">
          <input name="preco_7" type="text" id="preco_7" value="<? echo $preco_7; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais7 = bcmul($soma7,$preco_7,2);
echo $total_reais7;
?>
          <input name="total_reais_7" type="hidden" id="total_reais_72" value="<? echo $total_reais7; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_8" id="select10">
            <option><? echo $referencia_8; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_8" id="select19">
            <option  selected><? echo $material_8; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_8" id="select28">
            <option  selected><? echo $cor_8; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_8" id="select37">
            <option  selected><? echo $solado_8; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_8" type="text" id="n22_8" value="<? echo $n22_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_8" type="text" id="23_8" value="<? echo $n23_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_8" type="text" id="24_8" value="<? echo $n24_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_8" type="text" id="25_8" value="<? echo $n25_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_8" type="text" id="26_8" value="<? echo $n26_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_8" type="text" id="27_8" value="<? echo $n27_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_8" type="text" id="28_8" value="<? echo $n28_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_8" type="text" id="29_8" value="<? echo $n29_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_8" type="text" id="30_8" value="<? echo $n30_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_8" type="text" id="31_8" value="<? echo $n31_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_8" type="text" id="32_8" value="<? echo $n32_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_8" type="text" id="33_8" value="<? echo $n33_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_8" type="text" id="34_8" value="<? echo $n34_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_8" type="text" id="35_8" value="<? echo $n35_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_8" type="text" id="36_8" value="<? echo $n36_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_8" type="text" id="37_8" value="<? echo $n37_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_8" type="text" id="38_8" value="<? echo $n38_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_8" type="text" id="39_8" value="<? echo $n39_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_8" type="text" id="40_8" value="<? echo $n40_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_8" type="text" id="41_8" value="<? echo $n41_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_8" type="text" id="42_8" value="<? echo $n42_8; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_8" type="text" id="43_8" value="<? echo $n43_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_8" type="text" id="44_8" value="<? echo $n44_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_8" type="text" id="45_8" value="<? echo $n45_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_8" type="text" id="46_8" value="<? echo $n46_8; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma8 = $n22_8+$n23_8+$n24_8+$n25_8+$n26_8+$n27_8+$n28_8+$n29_8+$n30_8+$n31_8+$n32_8+$n33_8+$n34_8+$n35_8+$n36_8+$n37_8+$n38_8+$n39_8+$n40_8+$n41_8+$n42_8+$n43_8+$n44_8+$n45_8+$n46_8;
echo $soma8;		
		?>
        <input name="total_pares_8" type="hidden" id="total_pares_82" value="<? echo $soma8; ?>">

      </div></td>
      <td>
        <div align="center">
          <input name="preco_8" type="text" id="preco_8" value="<? echo $preco_8; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais8 = bcmul($soma8,$preco_8,2);
echo $total_reais8;
?>
          <input name="total_reais_8" type="hidden" id="total_reais_82" value="<? echo $total_reais8; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_9" id="select11">
            <option><? echo $referencia_9; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_9" id="select20">
            <option  selected><? echo $material_9; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_9" id="select29">
            <option  selected><? echo $cor_9; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_9" id="select38">
            <option  selected><? echo $solado_9; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_9" type="text" id="n22_9" value="<? echo $n22_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_9" type="text" id="23_9" value="<? echo $n23_9; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_9" type="text" id="24_9" value="<? echo $n24_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_9" type="text" id="25_9" value="<? echo $n25_9; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_9" type="text" id="26_9" value="<? echo $n26_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_9" type="text" id="27_9" value="<? echo $n27_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_9" type="text" id="28_9" value="<? echo $n28_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_9" type="text" id="29_9" value="<? echo $n29_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_9" type="text" id="30_9" value="<? echo $n30_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_9" type="text" id="31_9" value="<? echo $n31_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_9" type="text" id="32_9" value="<? echo $n32_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_9" type="text" id="33_9" value="<? echo $n33_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_9" type="text" id="34_9" value="<? echo $n34_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_9" type="text" id="35_9" value="<? echo $n35_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_9" type="text" id="36_9" value="<? echo $n36_9; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_9" type="text" id="37_9" value="<? echo $n37_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_9" type="text" id="38_9" value="<? echo $n38_9; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_9" type="text" id="39_9" value="<? echo $n39_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_9" type="text" id="40_9" value="<? echo $n40_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_9" type="text" id="41_9" value="<? echo $n41_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_9" type="text" id="42_9" value="<? echo $n42_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_9" type="text" id="43_9" value="<? echo $n43_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_9" type="text" id="44_9" value="<? echo $n44_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_9" type="text" id="45_9" value="<? echo $n45_9; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_9" type="text" id="46_9" value="<? echo $n46_9; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma9 = $n22_9+$n23_9+$n24_9+$n25_9+$n26_9+$n27_9+$n28_9+$n29_9+$n30_9+$n31_9+$n32_9+$n33_9+$n34_9+$n35_9+$n36_9+$n37_9+$n38_9+$n39_9+$n40_9+$n41_9+$n42_9+$n43_9+$n44_9+$n45_9+$n46_9;
echo $soma9;		
		?>
        <input name="total_pares_9" type="hidden" id="total_pares_92" value="<? echo $soma9; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_9" type="text" id="preco_9" value="<? echo $preco_9; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais9 = bcmul($soma9,$preco_9,2);
echo $total_reais9;
?>
          <input name="total_reais_9" type="hidden" id="total_reais_92" value="<? echo $total_reais9; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
          <select name="referencia_10" id="select12">
            <option><? echo $referencia_10; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="material_10" id="select21">
            <option  selected><? echo $material_10; ?></option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="cor_10" id="select30">
            <option  selected><? echo $cor_10; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <select name="solado_10" id="select39">
            <option  selected><? echo $solado_10; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
          </select>
      </div></td>
      <td><div align="center">
          <input name="n22_10" type="text" id="n22_10" value="<? echo $n22_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_10" type="text" id="23_10" value="<? echo $n23_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_10" type="text" id="24_10" value="<? echo $n24_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_10" type="text" id="25_10" value="<? echo $n25_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_10" type="text" id="26_10" value="<? echo $n26_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_10" type="text" id="27_10" value="<? echo $n27_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_10" type="text" id="28_10" value="<? echo $n28_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_10" type="text" id="29_10" value="<? echo $n29_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_10" type="text" id="30_10" value="<? echo $n30_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_10" type="text" id="31_10" value="<? echo $n31_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_10" type="text" id="32_10" value="<? echo $n32_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_10" type="text" id="33_10" value="<? echo $n33_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_10" type="text" id="34_10" value="<? echo $n34_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_10" type="text" id="35_10" value="<? echo $n35_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_10" type="text" id="36_10" value="<? echo $n36_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_10" type="text" id="37_10" value="<? echo $n37_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_10" type="text" id="38_10" value="<? echo $n38_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_10" type="text" id="39_10" value="<? echo $n39_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_10" type="text" id="40_10" value="<? echo $n40_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_10" type="text" id="41_10" value="<? echo $n41_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_10" type="text" id="42_10" value="<? echo $n42_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_10" type="text" id="43_10" value="<? echo $n43_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_10" type="text" id="44_10" value="<? echo $n44_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_10" type="text" id="45_10" value="<? echo $n45_10; ?>"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_10" type="text" id="46_10" value="<? echo $n46_10; ?>" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
        <?


$soma10 = $n22_10+$n23_10+$n24_10+$n25_10+$n26_10+$n27_10+$n28_10+$n29_10+$n30_10+$n31_10+$n32_10+$n33_10+$n34_10+$n35_10+$n36_10+$n37_10+$n38_10+$n39_10+$n40_10+$n41_10+$n42_10+$n43_10+$n44_10+$n45_10+$n46_10;
echo $soma10;		
		?>
        <input name="total_pares_10" type="hidden" id="total_pares_102" value="<? echo $oma10; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="preco_10" type="text" id="preco_10" value="<? echo $preco_10; ?>" size="4" maxlength="5">
</div></td>
      <td>
        <div align="center">
          <?$total_reais10 = bcmul($soma10,$preco_10,2);
echo $total_reais10;
?>
          <input name="total_reais_10" type="hidden" id="total_reais_102" value="<? echo $total_reais10; ?>">
</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="12"><div align="right"></div>        <div align="center">
        </div>        <div align="right">Total de pares do pedido
          <?
$somageral_pares = $soma1+$soma2+$soma3+$soma4+$soma5+$soma6+$soma7+$soma8+$soma9+$soma10;
echo $somageral_pares;
?>
          <input name="total_geral_pares" type="hidden" id="total_geral_pares" value="<? echo $somageral_pares; ?>">
        </div>        <div align="center">
        </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="12"><div align="right">Total monet&aacute;rio do pedido R$
  <?
$somageral_reais = $total_reais1+$total_reais2+$total_reais3+$total_reais4+$total_reais5+$total_reais6+$total_reais7+$total_reais8+$total_reais9+$total_reais10;
echo bcadd($somageral_reais,0,2);
?>
          <input name="total_geral_reais" type="hidden" id="total_geral_reais2" value="<? echo $somageral_reais; ?>">
      </div></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="31">        <input name="obs" type="text" id="obs" value="<? echo $obs; ?>" size="100" maxlength="100"></td>
    </tr>
  </table>
  <p>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <input type="submit" name="Submit" value="Recalcular Pedido">
</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>