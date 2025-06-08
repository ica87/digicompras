<html>
<head>
<title>CADASTRO DE PEDIDOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="grava_editar_pedido.php">
<?


//recebe os dados do cliente para efetuar o pedido
$num_pedido = $_POST['num_pedido'];
$datapedido = $_POST['datapedido'];
$dataentrega = $_POST['dataentrega'];
$codigo = $_POST['codigo'];
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
$preco_1 = $_POST['preco_1'];

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
$preco_2 = $_POST['preco_2'];


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
$preco_3 = $_POST['preco_3'];


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
$preco_4 = $_POST['preco_4'];


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
$preco_5 = $_POST['preco_5'];


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
$preco_6 = $_POST['preco_6'];


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
$preco_7 = $_POST['preco_7'];


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
$preco_8 = $_POST['preco_8'];


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
$preco_9 = $_POST['preco_9'];


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
$preco_10 = $_POST['preco_10'];


$obs = $_POST['obs'];
$cod_cli = $_POST['cod_cli'];
$status = $_POST['status'];

?>


  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="6"><p><strong><font color="#0000FF" size="4">Efetuando Pedido nesta data e hora
              </font><font color="#0000FF"><? echo $datapedido; ?></font><font color="#0000FF" size="4">
              ,
              <input name="datapedido" type="hidden" id="datapedido" value="<? echo $datapedido; ?>">
              
   Data pretendida para entrega </font><font color="#0000FF"><? echo $dataentrega; ?></font><font color="#0000FF" size="4">   <input name="dataentrega" type="hidden" id="dataentrega" value="<? echo $dataentrega;  ?>">
   (Sujeito a an&aacute;lise)              </font></strong></p>        </td>
    </tr>
    <tr> 
      <td colspan="2"><strong><font color="#0000FF">C</font><font color="#0000FF">&oacute;digo do cliente que est&aacute; sendo editado </font><font color="#0000FF">: <? echo $cod_cli; ?>
            <input name="cod_cli" type="hidden" id="cod_cli" value="<? echo $cod_cli; ?>">
      </font></strong></td>
      <td>N&ordm; Pedido </td>
      <td width="11%"><strong><font color="#0000FF"><? echo $num_pedido; ?></font></strong>
        <input name="num_pedido" type="hidden" id="cnpj2" value="<? echo $num_pedido; ?>"></td>
      <td width="26%">STATUS: <strong><font color="#0000FF"><? echo $status; ?> 
        <input name="status" type="hidden" id="status" value="<? echo $status; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="19%">Nome/Raz&atilde;o Social:</td>
      <td width="31%"><strong><font color="#0000FF"><? echo $razaosocial; ?></font></strong>
        <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial; ?>"> 
      </td><td width="12%">Cnpj / CPF:</td>
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
      <td><div align="center"><? echo $referencia_1; ?>
        <input name="referencia_1" type="hidden" id="referencia_1" value="<? echo $referencia_1; ?>">
      </div></td>
      <td><div align="center"><? echo $material_1; ?>
              <input name="material_1" type="hidden" id="material_1" value="<? echo $material_1; ?>">
      </div></td>
      <td><div align="center"><? echo $cor_1; ?>
              <input name="cor_1" type="hidden" id="cor_1" value="<? echo $cor_1; ?>">
      </div></td>
      <td><div align="center"><? echo $solado_1; ?>
              <input name="solado_1" type="hidden" id="solado_1" value="<? echo $solado_1; ?>">
      </div></td>
      <td><div align="center">
	  <?  echo $n22_1; ?> 
          <input name="n22_1" type="hidden"  id="n22_1"  value="<? echo $n22_1; ?>" size="4" maxlength="4" readonly="true">
      </div></td>
      <td><div align="center">
          <?  echo $n23_1; ?>
          <input name="n23_1" type="hidden"  id="n23_1" value="<? echo $n23_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_1; ?>
          <input name="n24_1" type="hidden"  id="24_1" value="<? echo $n24_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_1; ?>
          <input name="n25_1" type="hidden" id="25_1" value="<? echo $n25_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_1; ?>
          <input name="n26_1" type="hidden" id="26_1" value="<? echo $n26_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_1; ?>
        <input name="n27_1" type="hidden" id="27_1" value="<? echo $n27_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_1; ?>
        <input name="n28_1" type="hidden" id="28_1" value="<? echo $n28_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_1; ?>
        <input name="n29_1" type="hidden" id="29_1" value="<? echo $n29_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_1; ?>
        <input name="n30_1" type="hidden" id="30_1" value="<? echo $n30_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_1; ?>
        <input name="n31_1" type="hidden" id="31_1" value="<? echo $n31_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_1; ?>
        <input name="n32_1" type="hidden" id="32_1" value="<? echo $n32_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_1; ?>
        <input name="n33_1" type="hidden" id="33_1" value="<? echo $n33_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_1; ?>
        <input name="n34_1" type="hidden" id="34_1" value="<? echo $n34_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_1; ?>
        <input name="n35_1" type="hidden" id="35_1" value="<? echo $n35_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_1; ?>
        <input name="n36_1" type="hidden" id="36_1" value="<? echo $n36_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_1; ?>
        <input name="n37_1" type="hidden" id="37_1" value="<? echo $n37_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_1; ?>
        <input name="n38_1" type="hidden" id="38_1" value="<? echo $n38_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_1; ?>
        <input name="n39_1" type="hidden" id="39_1" value="<? echo $n39_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_1; ?>
        <input name="n40_1" type="hidden" id="40_1" value="<? echo $n40_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_1; ?>
        <input name="n41_1" type="hidden" id="41_1" value="<? echo $n41_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_1; ?>
        <input name="n42_1" type="hidden" id="42_1" value="<? echo $n42_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_1; ?>
        <input name="n43_1" type="hidden" id="43_1" value="<? echo $n43_1; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_1; ?>
        <input name="n44_1" type="hidden" id="44_1" value="<? echo $n44_1; ?>">
      </div></td>
      <td><div align="center"> 
	  <?  echo $n45_1; ?>        
          <input name="n45_1" type="hidden" id="45_1" value="<? echo $n45_1; ?>">
          </div></td><td><div align="center">
        <?  echo $n46_1; ?>
          <input name="n46_1" type="hidden" id="46_1" value="<? echo $n46_1; ?>">
      </div></td>
      <td><div align="center">
<?


$soma1 = $n22_1+$n23_1+$n24_1+$n25_1+$n26_1+$n27_1+$n28_1+$n29_1+$n30_1+$n31_1+$n32_1+$n33_1+$n34_1+$n35_1+$n36_1+$n37_1+$n38_1+$n39_1+$n40_1+$n41_1+$n42_1+$n43_1+$n44_1+$n45_1+$n46_1;
echo $soma1;		
		?>		
<input name="total_pares_1" type="hidden" id="quant_111" value="<? echo $soma1; ?>">
        </div></td>
      <td><div align="center">
          <? echo $preco_1;?> 
          <input name="preco_1" type="hidden" id="preco_1" value="<? echo $preco_1; ?>">
        </div></td>
      <td>
        <div align="center">
<?$total_reais1 = bcmul($soma1,$preco_1,2);
echo $total_reais1;


?>

		  <input name="total_reais_1" type="hidden" id="quant_111" value="<? echo $totalreais_1; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
<? echo $referencia_2; ?>
<input name="referencia_2" type="hidden" id="referencia_2" value="<? echo $referencia_2; ?>">
</div></td>
      <td><div align="center"> <? echo $material_2; ?>
              <input name="material_2" type="hidden" id="material_2" value="<? echo $material_2; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_2; ?>          <input name="cor_2" type="hidden" id="cor_2" value="<? echo $cor_2; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_2; ?>
              <input name="solado_2" type="hidden" id="solado_2" value="<? echo $solado_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_2; ?>
          <input name="n22_2" type="hidden" id="n22_2" value="<? echo $n22_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_2; ?>
          <input name="n23_2" type="hidden" id="n23_2" value="<? echo $n23_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_2; ?>
          <input name="n24_2" type="hidden" id="24_2" value="<? echo $n24_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_2; ?>
          <input name="n25_2" type="hidden" id="25_2" value="<? echo $n25_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_2; ?>
          <input name="n26_2" type="hidden" id="26_2" value="<? echo $n26_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_2; ?>
        <input name="n27_2" type="hidden" id="27_2" value="<? echo $n27_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_2; ?>
        <input name="n28_2" type="hidden" id="28_2" value="<? echo $n28_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_2; ?>
        <input name="n29_2" type="hidden" id="29_2" value="<? echo $n29_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_2; ?>
        <input name="n30_2" type="hidden" id="30_2" value="<? echo $n30_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_2; ?>
        <input name="n31_2" type="hidden" id="31_2" value="<? echo $n31_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_2; ?>
        <input name="n32_2" type="hidden" id="32_2" value="<? echo $n32_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_2; ?>
        <input name="n33_2" type="hidden" id="33_2" value="<? echo $n33_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_2; ?>
        <input name="n34_2" type="hidden" id="34_2" value="<? echo $n34_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_2; ?>
        <input name="n35_2" type="hidden" id="35_2" value="<? echo $n35_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_2; ?>
        <input name="n36_2" type="hidden" id="36_2" value="<? echo $n36_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_2; ?>
        <input name="n37_2" type="hidden" id="37_2" value="<? echo $n37_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_2; ?>
        <input name="n38_2" type="hidden" id="38_2" value="<? echo $n38_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_2; ?>
        <input name="n39_2" type="hidden" id="39_2" value="<? echo $n39_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_2; ?>
        <input name="n40_2" type="hidden" id="40_2" value="<? echo $n40_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_2; ?>
        <input name="n41_2" type="hidden" id="41_2" value="<? echo $n41_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_2; ?>
        <input name="n42_2" type="hidden" id="42_2" value="<? echo $n42_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_2; ?>
        <input name="n43_2" type="hidden" id="43_2" value="<? echo $n43_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_2; ?>
        <input name="n44_2" type="hidden" id="44_2" value="<? echo $n44_2; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_2; ?>
        <input name="n45_2" type="hidden" id="45_2" value="<? echo $n45_2; ?>">
      </div></td>
      <td><?  echo $n46_2; ?>
        <input name="n46_2" type="hidden" id="46_2" value="<? echo $n46_2; ?>"></td>
      <td><div align="center">
        <?


$soma2 = $n22_2+$n23_2+$n24_2+$n25_2+$n26_2+$n27_2+$n28_2+$n29_2+$n30_2+$n31_2+$n32_2+$n33_2+$n34_2+$n35_2+$n36_2+$n37_2+$n38_2+$n39_2+$n40_2+$n41_2+$n42_2+$n43_2+$n44_2+$n45_2+$n46_2;
echo $soma2;		
		?>
        <input name="total_pares_2" type="hidden" id="total_pares_22" value="<? echo $soma2; ?>">
      </div></td>
      <td>
        <div align="center">
          <?echo $preco_2;?>
          
          
            <input name="preco_2" type="hidden" id="preco_22" value="<? echo $preco_2; ?>">
          
</div></td>
      <td><div align="center">
        <?$total_reais2 = bcmul($soma2,$preco_2,2);
echo $total_reais2;
?>
        <input name="total_reais_2" type="hidden" id="total_reais_22" value="<? echo $totalreais_2; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
<? echo $referencia_3; ?>
<input name="referencia_3" type="hidden" id="referencia_3" value="<? echo $referencia_3; ?>">
</div></td>
      <td><div align="center"> <? echo $material_3; ?>
              <input name="material_3" type="hidden" id="material_3" value="<? echo $material_3; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_3; ?>
              <input name="cor_3" type="hidden" id="cor_3" value="<? echo $cor_3; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_3; ?>
              <input name="solado_3" type="hidden" id="solado_3" value="<? echo $solado_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_3; ?>
          <input name="n22_3" type="hidden" id="n22_3" value="<? echo $n22_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_3; ?>
          <input name="n23_3" type="hidden" id="23_3" value="<? echo $n23_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_3; ?>
          <input name="n24_3" type="hidden" id="24_3" value="<? echo $n24_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_3; ?>
          <input name="n25_3" type="hidden" id="25_3" value="<? echo $n25_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_3; ?>
          <input name="n26_3" type="hidden" id="26_3" value="<? echo $n26_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_3; ?>
        <input name="n27_3" type="hidden" id="27_3" value="<? echo $n27_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_3;  ?>
        <input name="n28_3" type="hidden" id="28_3" value="<? echo $n28_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_3;  ?>
        <input name="n29_3" type="hidden" id="29_3" value="<? echo $n29_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_3;  ?>
        <input name="n30_3" type="hidden" id="30_3" value="<? echo $n30_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_3;  ?>
        <input name="n31_3" type="hidden" id="31_3" value="<? echo $n31_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_3;  ?>
        <input name="n32_3" type="hidden" id="32_3" value="<? echo $n32_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_3;  ?>
        <input name="n33_3" type="hidden" id="33_3" value="<? echo $n33_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_3;  ?>
        <input name="n34_3" type="hidden" id="34_3" value="<? echo $n34_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_3;  ?>
        <input name="n35_3" type="hidden" id="35_3" value="<? echo $n35_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_3;  ?>
        <input name="n36_3" type="hidden" id="36_3" value="<? echo $n36_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_3;  ?>
        <input name="n37_3" type="hidden" id="37_3" value="<? echo $n37_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_3;  ?>
        <input name="n38_3" type="hidden" id="38_3" value="<? echo $n38_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_3;  ?>
        <input name="n39_3" type="hidden" id="39_3" value="<? echo $n39_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_3;  ?>
        <input name="n40_3" type="hidden" id="40_3" value="<? echo $n40_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_3;  ?>
        <input name="n41_3" type="hidden" id="41_3" value="<? echo $n41_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_3;  ?>
        <input name="n42_3" type="hidden" id="42_3" value="<? echo $n42_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_3;  ?>
        <input name="n43_3" type="hidden" id="43_3" value="<? echo $n43_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_3;  ?>
        <input name="n44_3" type="hidden" id="44_3" value="<? echo $n44_3; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_3;  ?>
        <input name="n45_3" type="hidden" id="45_3" value="<? echo $n45_3; ?>">
      </div></td>
      <td><?  echo $n46_3;  ?>
        <input name="n46_3" type="hidden" id="46_3" value="<? echo $n46_3; ?>"></td>
      <td><div align="center">
        <?


$soma3 = $n22_3+$n23_3+$n24_3+$n25_3+$n26_3+$n27_3+$n28_3+$n29_3+$n30_3+$n31_3+$n32_3+$n33_3+$n34_3+$n35_3+$n36_3+$n37_3+$n38_3+$n39_3+$n40_3+$n41_3+$n42_3+$n43_3+$n44_3+$n45_3+$n46_3;
echo $soma3;		
		?>
        <input name="total_pares_3" type="hidden" id="total_pares_32" value="<? echo $soma3; ?>">
      </div></td>
      <td>
        <div align="center">
          <? echo $preco_3; ?>
          <input name="preco_3" type="hidden" id="preco_3" value="<? echo $preco_3; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais3 = bcmul($soma3,$preco_3,2);
echo $total_reais3;
?>
          <input name="total_reais_3" type="hidden" id="total_reais_32" value="<? echo $totalreais_3; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_4; ?>
      <input name="referencia_4" type="hidden" id="referencia_4" value="<? echo $referencia_4; ?>">
</div></td>
      <td><div align="center"> <? echo $material_4; ?>
              <input name="material_4" type="hidden" id="material_4" value="<? echo $material_4; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_4; ?>
              <input name="cor_4" type="hidden" id="cor_4" value="<? echo $cor_4; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_4; ?>
              <input name="solado_4" type="hidden" id="solado_4" value="<? echo $solado_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_4;  ?>
          <input name="n22_4" type="hidden" id="n22_4" value="<? echo $n22_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_4;  ?>
          <input name="n23_4" type="hidden" id="23_4" value="<? echo $n23_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_4;  ?>
          <input name="n24_4" type="hidden" id="24_4" value="<? echo $n24_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_4;  ?>
          <input name="n25_4" type="hidden" id="25_4" value="<? echo $n25_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_4;  ?>
          <input name="n26_4" type="hidden" id="26_4" value="<? echo $n26_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_4;  ?>
        <input name="n27_4" type="hidden" id="27_4" value="<? echo $n27_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_4;  ?>
        <input name="n28_4" type="hidden" id="28_4" value="<? echo $n28_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_4;  ?>
        <input name="n29_4" type="hidden" id="29_4" value="<? echo $n29_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_4;  ?>
        <input name="n30_4" type="hidden" id="30_4" value="<? echo $n30_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_4;  ?>
        <input name="n31_4" type="hidden" id="31_4" value="<? echo $n31_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_4;  ?>
        <input name="n32_4" type="hidden" id="32_4" value="<? echo $n32_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_4;  ?>
        <input name="n33_4" type="hidden" id="33_4" value="<? echo $n33_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_4;  ?>
        <input name="n34_4" type="hidden" id="34_4" value="<? echo $n34_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_4;  ?>
        <input name="n35_4" type="hidden" id="35_4" value="<? echo $n35_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_4;  ?>
        <input name="n36_4" type="hidden" id="36_4" value="<? echo $n36_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_4;  ?>
        <input name="n37_4" type="hidden" id="37_4" value="<? echo $n37_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_4;  ?>
        <input name="n38_4" type="hidden" id="38_4" value="<? echo $n38_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_4;  ?>
        <input name="n39_4" type="hidden" id="39_4" value="<? echo $n39_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_4;  ?>
        <input name="n40_4" type="hidden" id="40_4" value="<? echo $n40_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_4;  ?>
        <input name="n41_4" type="hidden" id="41_4" value="<? echo $n41_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_4;  ?>
        <input name="n42_4" type="hidden" id="42_4" value="<? echo $n42_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_4;  ?>
        <input name="n43_4" type="hidden" id="43_4" value="<? echo $n43_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_4;  ?>
        <input name="n44_4" type="hidden" id="44_4" value="<? echo $n44_4; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_4;  ?>
        <input name="n45_4" type="hidden" id="45_4" value="<? echo $n45_4; ?>">
        </div></td>
      <td><?  echo $n46_4;  ?>
        <input name="n46_4" type="hidden" id="n46_4" value="<? echo $n46_4; ?>"></td>
      <td><div align="center">
        <?


$soma4 = $n22_4+$n23_4+$n24_4+$n25_4+$n26_4+$n27_4+$n28_4+$n29_4+$n30_4+$n31_4+$n32_4+$n33_4+$n34_4+$n35_4+$n36_4+$n37_4+$n38_4+$n39_4+$n40_4+$n41_4+$n42_4+$n43_4+$n44_4+$n45_4+$n46_4;
echo $soma4;		
		?>
        <input name="total_pares_4" type="hidden" id="total_pares_42" value="<? echo $soma4; ?>">
      </div></td>
      <td>
        <div align="center">
          <?  echo $preco_4; ?>
          <input name="preco_4" type="hidden" id="preco_4" value="<? echo $preco_4; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais4 = bcmul($soma4,$preco_4,2);
echo $total_reais4;
?>
          <input name="total_reais_4" type="hidden" id="total_reais_42" value="<? echo $totalreais_4; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_5; ?>
      <input name="referencia_5" type="hidden" id="referencia_5" value="<? echo $referencia_5; ?>">
</div></td>
      <td><div align="center"> <? echo $material_5; ?>
              <input name="material_5" type="hidden" id="material_5" value="<? echo $material_5; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_5; ?>
              <input name="cor_5" type="hidden" id="cor_5" value="<? echo $cor_5; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_5; ?>
              <input name="solado_5" type="hidden" id="solado_5" value="<? echo $solado_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_5;  ?>
          <input name="n22_5" type="hidden" id="n22_5" value="<? echo $n22_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_5;  ?>
          <input name="n23_5" type="hidden" id="23_5" value="<? echo $n23_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_5;  ?>
          <input name="n24_5" type="hidden" id="24_5" value="<? echo $n24_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_5;  ?>
          <input name="n25_5" type="hidden" id="25_5" value="<? echo $n25_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_5;  ?>
          <input name="n26_5" type="hidden" id="26_5" value="<? echo $n26_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_5;  ?>
        <input name="n27_5" type="hidden" id="27_5" value="<? echo $n27_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_5;  ?>
        <input name="n28_5" type="hidden" id="28_5" value="<? echo $n28_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_5;  ?>
        <input name="n29_5" type="hidden" id="29_5" value="<? echo $n29_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_5;  ?>
        <input name="n30_5" type="hidden" id="30_5" value="<? echo $n30_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_5;  ?>
        <input name="n31_5" type="hidden" id="31_5" value="<? echo $n31_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_5;  ?>
        <input name="n32_5" type="hidden" id="32_5" value="<? echo $n32_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_5;  ?>
        <input name="n33_5" type="hidden" id="33_5" value="<? echo $n33_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_5;  ?>
        <input name="n34_5" type="hidden" id="34_5" value="<? echo $n34_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_5;  ?>
        <input name="n35_5" type="hidden" id="35_5" value="<? echo $n35_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_5;  ?>
        <input name="n36_5" type="hidden" id="36_5" value="<? echo $n36_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_5;  ?>
        <input name="n37_5" type="hidden" id="37_5" value="<? echo $n37_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_5;  ?>
        <input name="n38_5" type="hidden" id="38_5" value="<? echo $n38_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_5;  ?>
        <input name="n39_5" type="hidden" id="39_5" value="<? echo $n39_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_5;  ?>
        <input name="n40_5" type="hidden" id="40_5" value="<? echo $n40_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_5;  ?>
        <input name="n41_5" type="hidden" id="41_5" value="<? echo $n41_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_5;  ?>
        <input name="n42_5" type="hidden" id="42_5" value="<? echo $n42_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_5;  ?>
        <input name="n43_5" type="hidden" id="43_5" value="<? echo $n43_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_5;  ?>
        <input name="n44_5" type="hidden" id="44_5" value="<? echo $n44_5; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_5;  ?>
        <input name="n45_5" type="hidden" id="45_5" value="<? echo $n45_5; ?>">
      </div></td>
      <td><?  echo $n46_5;  ?>
        <input name="n46_5" type="hidden" id="n46_5" value="<? echo $n46_5; ?>"></td>
      <td><div align="center">
        <?


$soma5 = $n22_5+$n23_5+$n24_5+$n25_5+$n26_5+$n27_5+$n28_5+$n29_5+$n30_5+$n31_5+$n32_5+$n33_5+$n34_5+$n35_5+$n36_5+$n37_5+$n38_5+$n39_5+$n40_5+$n41_5+$n42_5+$n43_5+$n44_5+$n45_5+$n46_5;
echo $soma5;		
		?>
        <input name="total_pares_5" type="hidden" id="total_pares_52" value="<? echo $soma5; ?>">
      </div></td>
      <td>
        <div align="center">
          <? echo $preco_5; ?>
          <input name="preco_5" type="hidden" id="preco_5" value="<? echo $preco_5; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais5 = bcmul($soma5,$preco_5,2);
echo $total_reais5;
?>
          <input name="total_reais_5" type="hidden" id="total_reais_52" value="<? echo $totalreais_5; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_6; ?>
      <input name="referencia_6" type="hidden" id="referencia_6" value="<? echo $referencia_6; ?>">
</div></td>
      <td><div align="center"> <? echo $material_6; ?>
              <input name="material_6" type="hidden" id="material_6" value="<? echo $material_6; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_6; ?>
              <input name="cor_6" type="hidden" id="cor_6" value="<? echo $cor_6; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_6; ?>
              <input name="solado_6" type="hidden" id="solado_6" value="<? echo $solado_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_6;  ?>
          <input name="n22_6" type="hidden" id="n22_6" value="<? echo $n22_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_6;  ?>
          <input name="n23_6" type="hidden" id="23_6" value="<? echo $n23_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_6;  ?>
          <input name="n24_6" type="hidden" id="24_6" value="<? echo $n24_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_6;  ?>
          <input name="n25_6" type="hidden" id="25_6" value="<? echo $n25_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_6;  ?>
          <input name="n26_6" type="hidden" id="26_6" value="<? echo $n26_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_6;  ?>
        <input name="n27_6" type="hidden" id="27_6" value="<? echo $n27_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_6;  ?>
        <input name="n28_6" type="hidden" id="28_6" value="<? echo $n28_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_6;  ?>
        <input name="n29_6" type="hidden" id="29_6" value="<? echo $n29_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_6;  ?>
        <input name="n30_6" type="hidden" id="30_6" value="<? echo $n30_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_6;  ?>
        <input name="n31_6" type="hidden" id="31_6" value="<? echo $n31_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_6;  ?>
        <input name="n32_6" type="hidden" id="32_6" value="<? echo $n32_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_6;  ?>
        <input name="n33_6" type="hidden" id="33_6" value="<? echo $n33_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_6;  ?>
        <input name="n34_6" type="hidden" id="34_6" value="<? echo $n34_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_6;  ?>
        <input name="n35_6" type="hidden" id="35_6" value="<? echo $n35_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_6;  ?>
        <input name="n36_6" type="hidden" id="36_6" value="<? echo $n36_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_6;  ?>
        <input name="n37_6" type="hidden" id="37_6" value="<? echo $n37_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_6;  ?>
        <input name="n38_6" type="hidden" id="38_6" value="<? echo $n38_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_6;  ?>
        <input name="n39_6" type="hidden" id="39_6" value="<? echo $n39_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_6;  ?>
        <input name="n40_6" type="hidden" id="40_6" value="<? echo $n40_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_6;  ?>
        <input name="n41_6" type="hidden" id="41_6" value="<? echo $n41_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_6;  ?>
        <input name="n42_6" type="hidden" id="42_6" value="<? echo $n42_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_6;  ?>
        <input name="n43_6" type="hidden" id="43_6" value="<? echo $n43_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_6;  ?>
        <input name="n44_6" type="hidden" id="44_6" value="<? echo $n44_6; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_6;  ?>
        <input name="n45_6" type="hidden" id="45_6" value="<? echo $n45_6; ?>">
      </div></td>
      <td><?  echo $n46_6;  ?>
        <input name="n46_6" type="hidden" id="46_6" value="<? echo $n46_6; ?>"></td>
      <td><div align="center">
        <?


$soma6 = $n22_6+$n23_6+$n24_6+$n25_6+$n26_6+$n27_6+$n28_6+$n29_6+$n30_6+$n31_6+$n32_6+$n33_6+$n34_6+$n35_6+$n36_6+$n37_6+$n38_6+$n39_6+$n40_6+$n41_6+$n42_6+$n43_6+$n44_6+$n45_6+$n46_6;
echo $soma6;		
		?>
        <input name="total_pares_6" type="hidden" id="total_pares_62" value="<? echo $soma6; ?>">
      </div></td>
      <td>
        <div align="center">
          <? echo $preco_6; ?>
          <input name="preco_6" type="hidden" id="preco_6" value="<? echo $preco_6; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais6 = bcmul($soma6,$preco_6,2);
echo $total_reais6;
?>
          <input name="total_reais_6" type="hidden" id="total_reais_62" value="<? echo $totalreais_6; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_7; ?>
      <input name="referencia_7" type="hidden" id="referencia_7" value="<? echo $referencia_7; ?>">
</div></td>
      <td><div align="center"> <? echo $material_7; ?>
              <input name="material_7" type="hidden" id="material_7" value="<? echo $material_7; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_7; ?>
              <input name="cor_7" type="hidden" id="cor_7" value="<? echo $cor_7; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_7; ?>
              <input name="solado_7" type="hidden" id="solado_7" value="<? echo $solado_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_7;  ?>
          <input name="n22_7" type="hidden" id="n22_7" value="<? echo $n22_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_7;  ?>
          <input name="n23_7" type="hidden" id="23_7" value="<? echo $n23_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_7;  ?>
          <input name="n24_7" type="hidden" id="24_7" value="<? echo $n24_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_7;  ?>
          <input name="n25_7" type="hidden" id="25_7" value="<? echo $n25_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_7;  ?>
          <input name="n26_7" type="hidden" id="26_7" value="<? echo $n26_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_7;  ?>
        <input name="n27_7" type="hidden" id="27_7" value="<? echo $n27_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_7;  ?>
        <input name="n28_7" type="hidden" id="28_7" value="<? echo $n28_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_7;  ?>
        <input name="n29_7" type="hidden" id="29_7" value="<? echo $n29_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_7;  ?>
        <input name="n30_7" type="hidden" id="30_7" value="<? echo $n30_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_7;  ?>
        <input name="n31_7" type="hidden" id="31_7" value="<? echo $n31_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_7;  ?>
        <input name="n32_7" type="hidden" id="32_7" value="<? echo $n32_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_7;  ?>
        <input name="n33_7" type="hidden" id="33_7" value="<? echo $n33_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_7;  ?>
        <input name="n34_7" type="hidden" id="34_7" value="<? echo $n34_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_7;  ?>
        <input name="n35_7" type="hidden" id="35_7" value="<? echo $n35_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_7;  ?>
        <input name="n36_7" type="hidden" id="36_7" value="<? echo $n36_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_7;  ?>
        <input name="n37_7" type="hidden" id="37_7" value="<? echo $n37_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_7;  ?>
        <input name="n38_7" type="hidden" id="38_7" value="<? echo $n38_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_7;  ?>
        <input name="n39_7" type="hidden" id="39_7" value="<? echo $n39_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_7;  ?>
        <input name="n40_7" type="hidden" id="40_7" value="<? echo $n40_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_7;  ?>
        <input name="n41_7" type="hidden" id="41_7" value="<? echo $n41_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_7;  ?>
        <input name="n42_7" type="hidden" id="42_7" value="<? echo $n42_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_7;  ?>
        <input name="n43_7" type="hidden" id="43_7" value="<? echo $n43_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_7;  ?>
        <input name="n44_7" type="hidden" id="44_7" value="<? echo $n44_7; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_7;  ?>
        <input name="n45_7" type="hidden" id="45_7" value="<? echo $n45_7; ?>">
      </div></td>
      <td><?  echo $n46_7;  ?>
        <input name="n46_7" type="hidden" id="n46_7" value="<? echo $n46_7; ?>"></td>
      <td><div align="center">
        <?


$soma7 = $n22_7+$n23_7+$n24_7+$n25_7+$n26_7+$n27_7+$n28_7+$n29_7+$n30_7+$n31_7+$n32_7+$n33_7+$n34_7+$n35_7+$n36_7+$n37_7+$n38_7+$n39_7+$n40_7+$n41_7+$n42_7+$n43_7+$n44_7+$n45_7+$n46_7;
echo $soma7;		
		?>
        <input name="total_pares_7" type="hidden" id="total_pares_72" value="<? echo $soma7; ?>">

      </div></td>
      <td>
        <div align="center">
          <? echo $preco_7; ?>
          <input name="preco_7" type="hidden" id="preco_7" value="<? echo $preco_7; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais7 = bcmul($soma7,$preco_7,2);
echo $total_reais7;


?>
          <input name="total_reais_7" type="hidden" id="total_reais_72" value="<? echo $totalreais_7; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_8; ?>
      <input name="referencia_8" type="hidden" id="referencia_8" value="<? echo $referencia_8; ?>">
</div></td>
      <td><div align="center"> <? echo $material_8; ?>
              <input name="material_8" type="hidden" id="material_8" value="<? echo $material_8; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_8; ?>
              <input name="cor_8" type="hidden" id="cor_8" value="<? echo $cor_8; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_8; ?>
              <input name="solado_8" type="hidden" id="solado_8" value="<? echo $solado_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_8;  ?>
          <input name="n22_8" type="hidden" id="n22_8" value="<? echo $n22_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_8;  ?>
          <input name="n23_8" type="hidden" id="23_8" value="<? echo $n23_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_8;  ?>
          <input name="n24_8" type="hidden" id="24_8" value="<? echo $n24_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_8;  ?>
          <input name="n25_8" type="hidden" id="25_8" value="<? echo $n25_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_8;  ?>
          <input name="n26_8" type="hidden" id="26_8" value="<? echo $n26_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_8;  ?>
        <input name="n27_8" type="hidden" id="27_8" value="<? echo $n27_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_8;  ?>
        <input name="n28_8" type="hidden" id="28_8" value="<? echo $n28_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_8;  ?>
        <input name="n29_8" type="hidden" id="29_8" value="<? echo $n29_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_8;  ?>
        <input name="n30_8" type="hidden" id="30_8" value="<? echo $n30_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_8;  ?>
        <input name="n31_8" type="hidden" id="31_8" value="<? echo $n31_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_8;  ?>
        <input name="n32_8" type="hidden" id="32_8" value="<? echo $n32_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_8;  ?>
        <input name="n33_8" type="hidden" id="33_8" value="<? echo $n33_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_8;  ?>
        <input name="n34_8" type="hidden" id="34_8" value="<? echo $n34_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_8;  ?>
        <input name="n35_8" type="hidden" id="35_8" value="<? echo $n35_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_8;  ?>
        <input name="n36_8" type="hidden" id="36_8" value="<? echo $n36_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_8;  ?>
        <input name="n37_8" type="hidden" id="37_8" value="<? echo $n37_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_8;  ?>
        <input name="n38_8" type="hidden" id="38_8" value="<? echo $n38_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_8;  ?>
        <input name="n39_8" type="hidden" id="39_8" value="<? echo $n39_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_8;  ?>
        <input name="n40_8" type="hidden" id="40_8" value="<? echo $n40_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_8;  ?>
        <input name="n41_8" type="hidden" id="41_8" value="<? echo $n41_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_8;  ?>
        <input name="n42_8" type="hidden" id="42_8" value="<? echo $n42_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_8;  ?>
        <input name="n43_8" type="hidden" id="43_8" value="<? echo $n43_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_8;  ?>
        <input name="n44_8" type="hidden" id="44_8" value="<? echo $n44_8; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_8;  ?>
        <input name="n45_8" type="hidden" id="45_8" value="<? echo $n45_8; ?>">
      </div></td>
      <td><?  echo $n46_8;  ?>
        <input name="n46_8" type="hidden" id="n46_8" value="<? echo $n46_8; ?>"></td>
      <td><div align="center">
        <?


$soma8 = $n22_8+$n23_8+$n24_8+$n25_8+$n26_8+$n27_8+$n28_8+$n29_8+$n30_8+$n31_8+$n32_8+$n33_8+$n34_8+$n35_8+$n36_8+$n37_8+$n38_8+$n39_8+$n40_8+$n41_8+$n42_8+$n43_8+$n44_8+$n45_8+$n46_8;
echo $soma8;		
		?>
        <input name="total_pares_8" type="hidden" id="total_pares_82" value="<? echo $soma8; ?>">

      </div></td>
      <td>
        <div align="center">
          <?  echo $preco_8; ?>
          <input name="preco_8" type="hidden" id="preco_8" value="<? echo $preco_8; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais8 = bcmul($soma8,$preco_8,2);
echo $total_reais8;
?>
          <input name="total_reais_8" type="hidden" id="total_reais_82" value="<? echo $totalreais_8; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_9; ?>
      <input name="referencia_9" type="hidden" id="referencia_9" value="<? echo $referencia_9; ?>">
</div></td>
      <td><div align="center"> <? echo $material_9; ?>
              <input name="material_9" type="hidden" id="material_9" value="<? echo $material_9; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_9; ?>
              <input name="cor_9" type="hidden" id="cor_9" value="<? echo $cor_9; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_9; ?>
              <input name="solado_9" type="hidden" id="solado_9" value="<? echo $solado_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_9;  ?>
          <input name="n22_9" type="hidden" id="n22_9" value="<? echo $n22_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_9;  ?>
          <input name="n23_9" type="hidden" id="23_9" value="<? echo $n23_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_9;  ?>
          <input name="n24_9" type="hidden" id="24_9" value="<? echo $n24_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_9;  ?>
          <input name="n25_9" type="hidden" id="25_9" value="<? echo $n25_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_9;  ?>
          <input name="n26_9" type="hidden" id="26_9" value="<? echo $n26_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_9;  ?>
        <input name="n27_9" type="hidden" id="27_9" value="<? echo $n27_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_9;  ?>
        <input name="n28_9" type="hidden" id="28_9" value="<? echo $n28_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_9;  ?>
        <input name="n29_9" type="hidden" id="29_9" value="<? echo $n29_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_9;  ?>
        <input name="n30_9" type="hidden" id="30_9" value="<? echo $n30_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_9;  ?>
        <input name="n31_9" type="hidden" id="31_9" value="<? echo $n31_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_9;  ?>
        <input name="n32_9" type="hidden" id="32_9" value="<? echo $n32_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_9;  ?>
        <input name="n33_9" type="hidden" id="33_9" value="<? echo $n33_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_9;  ?>
        <input name="n34_9" type="hidden" id="34_9" value="<? echo $n34_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_9;  ?>
        <input name="n35_9" type="hidden" id="35_9" value="<? echo $n35_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_9;  ?>
        <input name="n36_9" type="hidden" id="36_9" value="<? echo $n36_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_9;  ?>
        <input name="n37_9" type="hidden" id="37_9" value="<? echo $n37_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_9;  ?>
        <input name="n38_9" type="hidden" id="38_9" value="<? echo $n38_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_9;  ?>
        <input name="n39_9" type="hidden" id="39_9" value="<? echo $n39_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_9;  ?>
        <input name="n40_9" type="hidden" id="40_9" value="<? echo $n40_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_9;  ?>
        <input name="n41_9" type="hidden" id="41_9" value="<? echo $n41_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_9;  ?>
        <input name="n42_9" type="hidden" id="42_9" value="<? echo $n42_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_9;  ?>
        <input name="n43_9" type="hidden" id="43_9" value="<? echo $n43_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_9;  ?>
        <input name="n44_9" type="hidden" id="44_9" value="<? echo $n44_9; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_9;  ?>
        <input name="n45_9" type="hidden" id="45_9" value="<? echo $n45_9; ?>">
      </div></td>
      <td><?  echo $n46_9;  ?>
        <input name="n46_9" type="hidden" id="n46_9" value="<? echo $n46_9; ?>"></td>
      <td><div align="center">
        <?


$soma9 = $n22_9+$n23_9+$n24_9+$n25_9+$n26_9+$n27_9+$n28_9+$n29_9+$n30_9+$n31_9+$n32_9+$n33_9+$n34_9+$n35_9+$n36_9+$n37_9+$n38_9+$n39_9+$n40_9+$n41_9+$n42_9+$n43_9+$n44_9+$n45_9+$n46_9;
echo $soma9;		
		?>
        <input name="total_pares_9" type="hidden" id="total_pares_92" value="<? echo $soma9; ?>">
      </div></td>
      <td>
        <div align="center">
          <? echo $preco_9; ?>
          <input name="preco_9" type="hidden" id="preco_9" value="<? echo $preco_9; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais9 = bcmul($soma9,$preco_9,2);
echo $total_reais9;
?>
          <input name="total_reais_9" type="hidden" id="total_reais_92" value="<? echo $totalreais_9; ?>">
</div></td>
    </tr>
    <tr>
      <td><div align="center">
	  <? echo $referencia_10; ?>
      <input name="referencia_10" type="hidden" id="referencia_10" value="<? echo $referencia_10; ?>">
</div></td>
      <td><div align="center"> <? echo $material_10; ?>
              <input name="material_10" type="hidden" id="material_10" value="<? echo $material_10; ?>">
      </div></td>
      <td><div align="center"> <? echo $cor_10; ?>
              <input name="cor_10" type="hidden" id="cor_10" value="<? echo $cor_10; ?>">
      </div></td>
      <td><div align="center"> <? echo $solado_10; ?>
              <input name="solado_10" type="hidden" id="solado_10" value="<? echo $solado_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n22_10;  ?>
          <input name="n22_10" type="hidden" id="n22_10" value="<? echo $n22_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n23_10;  ?>
          <input name="n23_10" type="hidden" id="23_10" value="<? echo $n23_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n24_10;  ?>
          <input name="n24_10" type="hidden" id="24_10" value="<? echo $n24_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n25_10;  ?>
          <input name="n25_10" type="hidden" id="25_10" value="<? echo $n25_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n26_10;  ?>
          <input name="n26_10" type="hidden" id="26_10" value="<? echo $n26_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n27_10;  ?>
        <input name="n27_10" type="hidden" id="27_10" value="<? echo $n27_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n28_10;  ?>
        <input name="n28_10" type="hidden" id="28_10" value="<? echo $n28_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n29_10;  ?>
        <input name="n29_10" type="hidden" id="29_10" value="<? echo $n29_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n30_10;  ?>
        <input name="n30_10" type="hidden" id="30_10" value="<? echo $n30_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n31_10;  ?>
        <input name="n31_10" type="hidden" id="31_10" value="<? echo $n31_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n32_10;  ?>
        <input name="n32_10" type="hidden" id="32_10" value="<? echo $n32_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n33_10;  ?>
        <input name="n33_10" type="hidden" id="33_10" value="<? echo $n33_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n34_10;  ?>
        <input name="n34_10" type="hidden" id="34_10" value="<? echo $n34_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n35_10;  ?>
        <input name="n35_10" type="hidden" id="35_10" value="<? echo $n35_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n36_10;  ?>
        <input name="n36_10" type="hidden" id="36_10" value="<? echo $n36_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n37_10;  ?>
        <input name="n37_10" type="hidden" id="37_10" value="<? echo $n37_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n38_10;  ?>
        <input name="n38_10" type="hidden" id="38_10" value="<? echo $n38_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n39_10;  ?>
        <input name="n39_10" type="hidden" id="39_10" value="<? echo $n39_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n40_10;  ?>
        <input name="n40_10" type="hidden" id="40_10" value="<? echo $n40_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n41_10;  ?>
        <input name="n41_10" type="hidden" id="41_10" value="<? echo $n41_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n42_10;  ?>
        <input name="n42_10" type="hidden" id="42_10" value="<? echo $n42_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n43_10;  ?>
        <input name="n43_10" type="hidden" id="43_10" value="<? echo $n43_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n44_10;  ?>
        <input name="n44_10" type="hidden" id="44_10" value="<? echo $n44_10; ?>">
      </div></td>
      <td><div align="center">
        <?  echo $n45_10;  ?>
        <input name="n45_10" type="hidden" id="45_10" value="<? echo $n45_10; ?>">
      </div></td>
      <td><?  echo $n46_10;  ?>
        <input name="n46_10" type="hidden" id="n46_10" value="<? echo $n46_10; ?>"></td>
      <td><div align="center">
        <?


$soma10 = $n22_10+$n23_10+$n24_10+$n25_10+$n26_10+$n27_10+$n28_10+$n29_10+$n30_10+$n31_10+$n32_10+$n33_10+$n34_10+$n35_10+$n36_10+$n37_10+$n38_10+$n39_10+$n40_10+$n41_10+$n42_10+$n43_10+$n44_10+$n45_10+$n46_10;
echo $soma10;		
		?>
        <input name="total_pares_10" type="hidden" id="total_pares_102" value="<? echo $oma10; ?>">
      </div></td>
      <td>
        <div align="center">
          <? echo $preco_10; ?>
          <input name="preco_10" type="hidden" id="preco_10" value="<? echo $preco_10; ?>">
</div></td>
      <td>
        <div align="center">
          <?$total_reais10 = bcmul($soma10,$preco_10,2);
echo $total_reais10;
?>
          <input name="total_reais_10" type="hidden" id="total_reais_102" value="<? echo $totalreais_10; ?>">
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
      <td colspan="31">        <?  echo $obs;  ?>
        <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>"></td>
    </tr>
  </table>
  <p>
  <input type="submit" name="Submit" value="Salvar altera&ccedil;&otilde;es do  Pedido">
</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<? 
mysql_close($conexao);
?>