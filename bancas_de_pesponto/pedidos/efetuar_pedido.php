<html>
<head>
<title>CADASTRO DE PEDIDOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="calcula_pedido.php">
<?
$codigo = $_POST['codigo'];



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM clientes where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;



?>



  <table width="102%" border="0" cellspacing="4">
    <tr> 
      <td colspan="5"><p><strong><font color="#0000FF" size="4">Efetuando Pedido nesta data e hora
              </font><font color="#0000FF"><? echo date('d-m-Y H:i:s'); ?></font><font color="#0000FF" size="4">
              ,
              <input name="datapedido" type="hidden" id="datapedido" value="<? echo date('d-m-Y H:i:s'); ?>">
              
   Data pretendida para entrega 
   <input name="dataentrega" type="text" id="dataentrega">
(Sujeito a an&aacute;lise)              </font></strong></p>        </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF">Seu c&oacute;digo &eacute; </font><font color="#0000FF">: <? echo $linha[0]; ?>
            <input name="cod_cli" type="hidden" id="cod_cli" value="<? echo $codigo; ?>">
      </font></strong></td>
      <td>N&ordm; Pedido </td>
      <td>Ao t&eacute;rminar o pedido voc&ecirc; ser&aacute; informado sobre o n&uacute;mero </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="15%">Nome/Raz&atilde;o Social:</td>
      <td width="37%"><strong><font color="#0000FF"><? echo $linha[1]; ?></font></strong>
        <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $linha[1]; ?>"> 
      </td><td width="11%">Cnpj / CPF:</td>
      <td width="36%"><strong></strong>
        <strong><font color="#0000FF"><? echo $linha[2]; ?></font></strong>
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $linha[2]; ?>">      </td><td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Apelido/N. Fantasia:</td>
      <td><strong></strong>
        <strong><font color="#0000FF"><? echo $linha[3]; ?></font></strong>
      <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $linha[3]; ?>">      </td><td>Inscr. Est: / RG:</td>
      <td><strong><font color="#0000FF"><? echo $linha[4]; ?></font></strong>
      <input name="inscr_est" type="hidden" id="inscr_est" value="<? echo $linha[4]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><strong><font color="#0000FF"><? echo $linha[5]; ?></font></strong>
      <input name="endereco" type="hidden" id="endereco" value="<? echo $linha[5]; ?>">      </td><td>N&uacute;mero:</td>
      <td><strong><font color="#0000FF"><? echo $linha[6]; ?></font></strong>
      <input name="numero" type="hidden" id="numero2" value="<? echo $linha[6]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro:</p></td>
      <td><strong><font color="#0000FF"><? echo $linha[7]; ?></font></strong>
      <input name="bairro" type="hidden" id="bairro" value="<? echo $linha[7]; ?>">      </td><td>Cidade:</td>
      <td><strong><font color="#0000FF"><? echo $linha[8]; ?></font></strong>
      <input name="cidade" type="hidden" id="cidade3" value="<? echo $linha[8]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><strong><font color="#0000FF"><? echo $linha[9]; ?></font></strong>
      <input name="estado" type="hidden" id="estado" value="<? echo $linha[9]; ?>"> </td>
      <td>Cep:</td>
      <td><strong><font color="#0000FF"><? echo $linha[10]; ?></font></strong>
      <input name="cep" type="hidden" id="cep2" value="<? echo $linha[10]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><strong><font color="#0000FF"><? echo $linha[11]; ?></font></strong>
      <input name="email" type="hidden" id="email3" value="<? echo $linha[11]; ?>">      </td><td>Comprador:</td>
      <td><strong><font color="#0000FF"><? echo $linha[12]; ?></font></strong>
      <input name="comprador" type="hidden" id="comprador2" value="<? echo $linha[12]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><strong><font color="#0000FF"><? echo $linha[13]; ?></font></strong>
      <input name="fone" type="hidden" id="fone2" value="<? echo $linha[13]; ?>">      </td><td>Fax:</td>
      <td><strong><font color="#0000FF"><? echo $linha[14]; ?></font></strong>
      <input name="fax" type="hidden" id="fax3" value="<? echo $linha[14]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><strong><font color="#0000FF"><? echo $linha[15]; ?></font></strong>
        <input name="celular" type="hidden" id="celular3" value="<? echo $linha[15]; ?>">
      </td>
      <td>Representante:</td>
      <td><strong><font color="#0000FF"><? echo $linha[16]; ?></font></strong>        <input name="representante" type="hidden" id="representante" value="<? echo $linha[16]; ?>"> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cond Pagto:</td>
      <td><select name="condpagto" id="select4">
        <option><? echo $linha[17]; ?></option>
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
      <td><select name="modopagto" id="select5">
        <option><? echo $linha[18]; ?></option>
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
      <td><input name="transportadora" type="text" id="transportadora3" value="<? echo $linha[19]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF"><strong>(Fob)</strong></font> </td>
      <td>Resdespacho:</td>
      <td><input name="redespacho" type="text" id="redespacho3" value="<? echo $linha[20]; ?>" size="50" maxlength="50"> 
        <strong><font color="#0000FF">(Fob)</font></strong> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><div align="left"><strong><font color="#0000FF" size="4">Escolha a refer&ecirc;ncia do produto e monte a grade que deseja </font></strong></div></td>
      <td>&nbsp;</td>
    </tr>
	
	          <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>

	
  </table>
  <table width="102%"  border="0">
    <tr>
      <td width="9%"><div align="center">Refer&ecirc;ncia</div></td>
      <td width="6%"><div align="center">Material</div></td>
      <td width="3%"><div align="center">Cor</div></td>
      <td width="5%"><div align="center">Solado</div></td>
      <td width="3%"><div align="center">22</div></td>
      <td width="3%"><div align="center">23</div></td>
      <td width="3%"><div align="center">24</div></td>
      <td width="3%"><div align="center">25</div></td>
      <td width="3%"><div align="center">26</div></td>
      <td width="3%"><div align="center">27</div></td>
      <td width="3%"><div align="center">28</div></td>
      <td width="3%"><div align="center">29</div></td>
      <td width="3%"><div align="center">30</div></td>
      <td width="3%"><div align="center">31</div></td>
      <td width="3%"><div align="center">32</div></td>
      <td width="3%"><div align="center">33</div></td>
      <td width="3%"><div align="center">34</div></td>
      <td width="3%"><div align="center">35</div></td>
      <td width="3%"><div align="center">36</div></td>
      <td width="3%"><div align="center">37</div></td>
      <td width="3%"><div align="center">38</div></td>
      <td width="3%"><div align="center">39</div></td>
      <td width="3%"><div align="center">40</div></td>
      <td width="3%"><div align="center">41</div></td>
      <td width="3%"><div align="center">42</div></td>
      <td width="3%"><div align="center">43</div></td>
      <td width="3%"><div align="center">44</div></td>
      <td width="12%"><div align="center">45</div></td>
      <td width="6%"><div align="center">46</div></td>
      <td width="5%"><div align="center"></div></td>
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
          <input name="n22_1" type="text" id="n22_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_1" type="text" id="n23_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_1" type="text" id="n24_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_1" type="text" id="n25_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_1" type="text" id="n26_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_1" type="text" id="n27_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_1" type="text" id="n28_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_1" type="text" id="n29_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_1" type="text" id="n30_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_1" type="text" id="n31_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_1" type="text" id="n32_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_1" type="text" id="n33_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_1" type="text" id="n34_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_1" type="text" id="n35_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_1" type="text" id="n36_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_1" type="text" id="n37_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_1" type="text" id="n38_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_1" type="text" id="n39_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_1" type="text" id="n40_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_1" type="text" id="n41_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_1" type="text" id="n42_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_1" type="text" id="n43_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_1" type="text" id="n44_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_1" type="text" id="n45_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_1" type="text" id="n46_1" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
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
          <input name="n22_2" type="text" id="n22_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_2" type="text" id="n23_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_2" type="text" id="24_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_2" type="text" id="25_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_2" type="text" id="26_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_2" type="text" id="27_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_2" type="text" id="28_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_2" type="text" id="29_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_2" type="text" id="30_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_2" type="text" id="31_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_2" type="text" id="32_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_2" type="text" id="33_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_2" type="text" id="34_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_2" type="text" id="35_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_2" type="text" id="36_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_2" type="text" id="37_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_2" type="text" id="38_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_2" type="text" id="39_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_2" type="text" id="40_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_2" type="text" id="41_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_2" type="text" id="42_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_2" type="text" id="43_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_2" type="text" id="44_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_2" type="text" id="45_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_2" type="text" id="46_2" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_3" type="text" id="n22_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_3" type="text" id="23_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_3" type="text" id="24_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_3" type="text" id="25_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_3" type="text" id="26_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_3" type="text" id="27_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_3" type="text" id="28_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_3" type="text" id="29_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_3" type="text" id="30_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_3" type="text" id="31_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_3" type="text" id="32_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_3" type="text" id="33_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_3" type="text" id="34_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_3" type="text" id="35_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_3" type="text" id="36_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_3" type="text" id="37_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_3" type="text" id="38_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_3" type="text" id="39_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_3" type="text" id="40_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_3" type="text" id="41_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_3" type="text" id="42_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_3" type="text" id="43_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_3" type="text" id="44_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_3" type="text" id="45_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_3" type="text" id="46_3" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_4" type="text" id="n22_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_4" type="text" id="23_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_4" type="text" id="24_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_4" type="text" id="25_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_4" type="text" id="26_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_4" type="text" id="27_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_4" type="text" id="28_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_4" type="text" id="29_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_4" type="text" id="30_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_4" type="text" id="31_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_4" type="text" id="32_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_4" type="text" id="33_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_4" type="text" id="34_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_4" type="text" id="35_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_4" type="text" id="36_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_4" type="text" id="37_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_4" type="text" id="38_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_4" type="text" id="39_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_4" type="text" id="40_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_4" type="text" id="41_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_4" type="text" id="42_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_4" type="text" id="43_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_4" type="text" id="44_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_4" type="text" id="45_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_4" type="text" id="46_4" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_5" type="text" id="n22_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_5" type="text" id="23_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_5" type="text" id="24_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_5" type="text" id="25_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_5" type="text" id="26_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_5" type="text" id="27_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_5" type="text" id="28_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_5" type="text" id="29_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_5" type="text" id="30_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_5" type="text" id="31_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_5" type="text" id="32_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_5" type="text" id="33_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_5" type="text" id="34_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_5" type="text" id="35_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_5" type="text" id="36_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_5" type="text" id="37_5" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_5" type="text" id="38_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_5" type="text" id="39_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_5" type="text" id="40_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_5" type="text" id="41_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_5" type="text" id="42_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_5" type="text" id="43_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_5" type="text" id="44_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_5" type="text" id="45_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_5" type="text" id="46_5"  size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_6" type="text" id="n22_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_6" type="text" id="23_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_6" type="text" id="24_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_6" type="text" id="25_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_6" type="text" id="26_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_6" type="text" id="27_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_6" type="text" id="28_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_6" type="text" id="29_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_6" type="text" id="30_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_6" type="text" id="31_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_6" type="text" id="32_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_6" type="text" id="33_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_6" type="text" id="34_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_6" type="text" id="35_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_6" type="text" id="36_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_6" type="text" id="37_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_6" type="text" id="38_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_6" type="text" id="39_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_6" type="text" id="40_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_6" type="text" id="41_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_6" type="text" id="42_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_6" type="text" id="43_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_6" type="text" id="44_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_6" type="text" id="45_6" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_6" type="text" id="46_6"  size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_7" type="text" id="n22_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_7" type="text" id="23_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_7" type="text" id="24_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_7" type="text" id="25_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_7" type="text" id="26_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_7" type="text" id="27_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_7" type="text" id="28_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_7" type="text" id="29_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_7" type="text" id="30_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_7" type="text" id="31_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_7" type="text" id="32_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_7" type="text" id="33_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_7" type="text" id="34_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_7" type="text" id="35_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_7" type="text" id="36_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_7" type="text" id="37_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_7" type="text" id="38_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_7" type="text" id="39_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_7" type="text" id="40_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_7" type="text" id="41_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_7" type="text" id="42_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_7" type="text" id="43_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_7" type="text" id="44_7"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_7" type="text" id="45_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_7" type="text" id="46_7" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_8" type="text" id="n22_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_8" type="text" id="23_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_8" type="text" id="24_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_8" type="text" id="25_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_8" type="text" id="26_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_8" type="text" id="27_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_8" type="text" id="28_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_8" type="text" id="29_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_8" type="text" id="30_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_8" type="text" id="31_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_8" type="text" id="32_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_8" type="text" id="33_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_8" type="text" id="34_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_8" type="text" id="35_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_8" type="text" id="36_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_8" type="text" id="37_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_8" type="text" id="38_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_8" type="text" id="39_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_8" type="text" id="40_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_8" type="text" id="41_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_8" type="text" id="42_8"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_8" type="text" id="43_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_8" type="text" id="44_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_8" type="text" id="45_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_8" type="text" id="46_8" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_9" type="text" id="n22_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_9" type="text" id="23_9" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_9" type="text" id="24_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_9" type="text" id="25_9" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_9" type="text" id="26_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_9" type="text" id="27_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_9" type="text" id="28_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_9" type="text" id="29_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_9" type="text" id="30_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_9" type="text" id="31_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_9" type="text" id="32_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_9" type="text" id="33_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_9" type="text" id="34_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_9" type="text" id="35_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_9" type="text" id="36_9" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_9" type="text" id="37_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_9" type="text" id="38_9" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_9" type="text" id="39_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_9" type="text" id="40_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_9" type="text" id="41_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_9" type="text" id="42_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_9" type="text" id="43_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_9" type="text" id="44_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_9" type="text" id="45_9" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_9" type="text" id="46_9"  size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
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
          <input name="n22_10" type="text" id="n22_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n23_10" type="text" id="23_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n24_10" type="text" id="24_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n25_10" type="text" id="25_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n26_10" type="text" id="26_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n27_10" type="text" id="27_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n28_10" type="text" id="28_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n29_10" type="text" id="29_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n30_10" type="text" id="30_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n31_10" type="text" id="31_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n32_10" type="text" id="32_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n33_10" type="text" id="33_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n34_10" type="text" id="34_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n35_10" type="text" id="35_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n36_10" type="text" id="36_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n37_10" type="text" id="37_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n38_10" type="text" id="38_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n39_10" type="text" id="39_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n40_10" type="text" id="40_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n41_10" type="text" id="41_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n42_10" type="text" id="42_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n43_10" type="text" id="43_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n44_10" type="text" id="44_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n45_10" type="text" id="45_10"  size="4" maxlength="4">
      </div></td>
      <td><div align="center">
          <input name="n46_10" type="text" id="46_10" size="4" maxlength="4">
      </div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
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
      <td colspan="7">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="100%"  border="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="9%">Observa&ccedil;&otilde;es</td>
      <td colspan="5" valign="top"><input name="obs" type="text" id="obs" size="100" maxlength="100"></td>
    </tr>
  </table>
  <p>
  <input type="submit" name="Submit" value="Calcular pedido">
  <input type="reset" name="Submit2" value="Limpar">
</p>
</form>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>