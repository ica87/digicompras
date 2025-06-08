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
<title>EMISS&Atilde;O DE OR&Ccedil;AMENTOS DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$codigo_ordem = $_POST['codigo_ordem'];

			
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

  <?

$sql = "SELECT * FROM ordem_compra where codigo_ordem = '$codigo_ordem'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_ordem = $linha[0];
$codigo_for = $linha[1];
$razaosocial_for = $linha[2];
$cnpj = $linha[188];
$nfantasia_for = $linha[3];
$endereco_for = $linha[4];
$numero_for = $linha[5];
$bairro_for = $linha[6];
$cidade_for = $linha[7];
$estado_for = $linha[8];
$fone_for = $linha[9];
$comprador_for = $linha[10];
$celular_for = $linha[11];
$email_for = $linha[12];
$cep_for = $linha[13];
$dataorcamento_for = $linha[14];
$horaorcamento_for = $linha[15];
$referencia_for = $linha[16];
$descricao_servico_for = $linha[17];

$item1 = $linha[18];
$categoria_1 = $linha[19];
$ref1 = $linha[20];
$preco_compra_1 = $linha[21];
$quant1 = $linha[22];
$preco1 = $linha[23];
$quantpecas1 = $linha[127];
$total_1 = $linha[24];


$item2 = $linha[25];
$categoria_2 = $linha[26];
$ref2 = $linha[27];
$preco_compra_2 = $linha[28];
$quant2 = $linha[29];
$preco2 = $linha[30];
$quantpecas2 = $linha[128];
$total_2 = $linha[31]; 


$item3 = $linha[32];
$categoria_3 = $linha[33];
$ref3 = $linha[34];
$preco_compra_3 = $linha[35];
$quant3 = $linha[36];
$preco3 = $linha[37];
$quantpecas3 = $linha[129];
$total_3 = $linha[38];


$item4 = $linha[39];
$categoria_4 = $linha[40];
$ref4 = $linha[41];
$preco_compra_4 = $linha[42];
$quant4 = $linha[43];
$preco4 = $linha[44];
$total4 = $linha[45];
$quantpecas4 = $linha[130];
$total_4 = $linha[45]; 


$item5 = $linha[46];
$categoria_5 = $linha[47];
$ref5 = $linha[48];
$preco_compra_5 = $linha[49];
$quant5 = $linha[50];
$preco5 = $linha[51];
$total5 = $linha[52];
$quantpecas5 = $linha[131];
$total_5 = $linha[52]; 


$item6 = $linha[53];
$categoria_6 = $linha[54];
$ref6 = $linha[55];
$preco_compra_6 = $linha[56];
$quant6 = $linha[57];
$preco6 = $linha[58];
$total6 = $linha[59];
$quantpecas6 = $linha[132];
$total_6 = $linha[59]; 


$item7 = $linha[60];
$categoria_7 = $linha[61];
$ref7 = $linha[62];
$preco_compra_7 = $linha[63];
$quant7 = $linha[64];
$preco7 = $linha[65];
$total7 = $linha[66];
$quantpecas7 = $linha[133];
$total_7 = $linha[66]; 


$item8 = $linha[67];
$categoria_8 = $linha[68];
$ref8 = $linha[69];
$preco_compra_8 = $linha[70];
$quant8 = $linha[71];
$preco8 = $linha[72];
$total8 = $linha[73];
$quantpecas8 = $linha[134];
$total_8 = $linha[73]; 


$item9 = $linha[74];
$categoria_9 = $linha[75];
$ref9 = $linha[76];
$preco_compra_9 = $linha[77];
$quant9 = $linha[78];
$preco9 = $linha[79];
$total9 = $linha[80];
$quantpecas9 = $linha[135];
$total_9 = $linha[80]; 


$item10 = $linha[81];
$categoria_10 = $linha[82];
$ref10 = $linha[83];
$preco_compra_10 = $linha[84];
$quant10 = $linha[85];
$preco10 = $linha[86];
$total10 = $linha[87];
$quantpecas10 = $linha[136];
$total_10 = $linha[87]; 


$item11 = $linha[88];
$categoria_11 = $linha[89];
$ref11 = $linha[90];
$preco_compra_11 = $linha[91];
$quant11 = $linha[92];
$preco11 = $linha[93];
$total11 = $linha[94];
$quantpecas11 = $linha[137];
$total_11 = $linha[94]; 


$item12 = $linha[95];
$categoria_12 = $linha[96];
$ref12 = $linha[97];
$preco_compra_12 = $linha[98];
$quant12 = $linha[99];
$preco12 = $linha[100];
$total12 = $linha[101];
$quantpecas12 = $linha[138];
$total_12 = $linha[101]; 


$item13 = $linha[102];
$categoria_13 = $linha[103];
$ref13 = $linha[104];
$preco_compra_13 = $linha[105];
$quant13 = $linha[106];
$preco13 = $linha[107];
$total13 = $linha[108];
$quantpecas13 = $linha[139];
$total_13 = $linha[108]; 


$item14 = $linha[109];
$categoria_14 = $linha[110];
$ref14 = $linha[111];
$preco_compra_14 = $linha[112];
$quant14 = $linha[113];
$preco14 = $linha[114];
$total14 = $linha[115];
$quantpecas14 = $linha[140];
$total_14 = $linha[115]; 


$item15 = $linha[116];
$categoria_15 = $linha[117];
$ref15 = $linha[118];
$preco_compra_15 = $linha[119];
$quant15 = $linha[120];
$preco15 = $linha[124];
$quantpecas15 = $linha[141];
$total_15 = $linha[122]; 


$ref1 = $linha[20];
$ref2 = $linha[27];
$ref3 = $linha[34];
$ref4 = $linha[41];
$ref5 = $linha[48];
$ref6 = $linha[55];
$ref7 = $linha[62];
$ref8 = $linha[69];
$ref9 = $linha[76];
$ref10 = $linha[83];
$ref11 = $linha[90];
$ref12 = $linha[97];
$ref13 = $linha[104];
$ref14 = $linha[111];
$ref15 = $linha[118];




$total_geral_cliente = $linha[123];
$quantparc_cliente = $linha[124];
$condpagto_cliente = $linha[125];
$obs_cliente = $linha[126];

$operador_cliente = $linha[142];
}
$total_geral_cliente_formatada = number_format($total_geral_cliente, 2, ",", ".");



?>

		  <?



$total_geral = $total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12+$total13+$total14+$total15;





?>


<form name="form2" method="post" action="">
</form>
<form name="form1" method="post" action="historico_cliente.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia_cliente; ?>">
  </font></strong></font></strong></font></strong>
  <input type="submit" name="Submit3" value="Voltar Hist&oacute;rico do Cliente">
</form>
<p>
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="calcula_editar_orcamento.php">
<p>
</p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>OR&Ccedil;AMENTO N&ordm; <font color="#0000FF"><strong><? echo $codigo_orcamento; ?></strong></font></strong><strong><font color="#0000FF"><strong>
      <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
    </strong></font></strong></div></td>
  </tr>
</table><p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellspacing="4">
      
      <tr>
        <td><strong>C&oacute;digo:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $codigo_for; ?>
          <input name="codigo_for" type="hidden" id="codigo_for" value="<? echo $codigo_for; ?>">
        </strong></font></strong></td>
        <td><strong>Comprador:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $comprador_for; ?><font color="#0000FF"><strong>
          <input name="comprador_for" type="hidden" id="comprador_for" value="<? echo $comprador_for; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Raz&atilde;o Social:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $razaosocial_for; ?><font color="#0000FF"><strong>
          <input name="razaosocial_for" type="hidden" id="razaosocial_for" value="<? echo $razaosocial_for; ?>">
          <font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
          <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">
          </strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></td>
        <td><strong>Celular:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $celular_for; ?><font color="#0000FF"><strong>
          <input name="celular_for" type="hidden" id="celular_for" value="<? echo $celular_for; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Nome Fantasia:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $nfantasia_for; ?><font color="#0000FF"><strong>
          <input name="nfantasia_for" type="hidden" id="nfantasia_for" value="<? echo $nfantasia_for; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>E-Mail:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $email_for; ?><font color="#0000FF"><strong>
          <input name="email_for" type="hidden" id="email_for" value="<? echo $email_for; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td width="11%"><strong>Endere&ccedil;o:</strong></td>
        <td width="40%"><strong><font color="#0000FF"><strong><? echo $endereco_for; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero_for; ?><font color="#0000FF"><strong>
          <input name="endereco_for" type="hidden" id="endereco_for" value="<? echo $endereco_for; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="numero_for" type="hidden" id="numero_for" value="<? echo $numero_for; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td width="13%"><strong>CEP:</strong></td>
        <td width="36%"><strong><font color="#0000FF"><strong><? echo $cep_for; ?><font color="#0000FF"><strong>
          <input name="cep_for" type="hidden" id="cep_for" value="<? echo $cep_for; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><p><strong>Bairro:</strong></p></td>
        <td><strong><font color="#0000FF"><strong><? echo $bairro_for; ?><font color="#0000FF"><strong>
          <input name="bairro_for" type="hidden" id="bairro_for" value="<? echo $bairro_for; ?>">
        </strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Cidade:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $cidade_for; ?> Estado <font color="#0000FF"><strong><? echo $estado_for; ?><font color="#0000FF"><strong>
          <input name="cidade_for" type="hidden" id="cidade_for" value="<? echo $cidade_for; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="estado_for" type="hidden" id="estado_for" value="<? echo $estado_for; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Telefone:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $fone_for; ?><font color="#0000FF"><strong>
          <input name="fone_for" type="hidden" id="fone_for" value="<? echo $fone_for; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>Data Altera&ccedil;&atilde;o:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo date('d-m-Y'); ?></strong>
          <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
          <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        </font></strong></td>
      </tr>
    </table></td>
</tr>
</table>
<p>
<table width="100%" border="1" bordercolor="#000000">
  
  
  <tr>
    <td><strong>ITENS
      <input name="descricao_servico" type="hidden" id="descricao_servico" value="<? echo $descricao_servico; ?>">
      <input name="referencia" type="hidden" id="curso15" value="">
    </strong></td>
    <td width="12%"><strong>QUANTIDADE</strong></td>
    <td width="12%"><strong>REFER&Ecirc;NCIA</strong></td>
    <td width="13%"><strong>QUANT PE&Ccedil;AS</strong></td>
    <td width="14%"><strong>PAR&Acirc;METRO</strong></td>
    <td width="15%">&nbsp;</td>
    <td width="12%">&nbsp;</td>
  </tr>
  <tr>
    <td width="22%"><select name="item1" id="select7">
      <option selected><? echo $item1; ?></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant1" type="text" id="quant1" value="<? echo $quant1; ?>" size="4"></td><td><input name="ref1" type="text" id="ref1" value="<? echo $ref1; ?>"></td>
      <td><input name="quantpecas1" type="text" id="quantpecas1" value="<? echo $quantpecas1; ?>" size="4"></td>
      <td><strong><font color="#0000FF"><strong><? echo $preco_compra_1; ?></strong></font></strong>
      <input name="preco_compra_1" type="hidden" id="preco_compra_1" value="<? echo $preco_compra_1; ?>"></td>
        <td><strong><font color="#0000FF"><strong>
        <input name="preco1" type="hidden" id="preco1" value="<? echo $preco1; ?>">
        </strong></font></strong></td>
        <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item2" id="item">
        <option selected><? echo $item2; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant2" type="text" id="quant2" value="<? echo $quant2; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref2" type="text" id="ref2" value="<? echo $ref2; ?>"></td>
    <td><input name="quantpecas2" type="text" id="quantpecas2" value="<? echo $quantpecas2; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_2; ?></strong></font></strong>
        <input name="preco_compra_2" type="hidden" id="preco_compra_2" value="<? echo $preco_compra_2; ?>"></td>
      <td><input name="preco2" type="hidden" id="preco2" value="<? echo $preco2; ?>"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item3" id="item2">
        <option selected><? echo $item3; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant3" type="text" id="quant3" value="<? echo $quant3; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref3" type="text" id="ref3" value="<? echo $ref3; ?>"></td>
    <td><input name="quantpecas3" type="text" id="quantpecas3" value="<? echo $quantpecas3; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_3; ?></strong></font></strong>
        <input name="preco_compra_3" type="hidden" id="preco_compra_3" value="<? echo $preco_compra_3; ?>"></td>
      <td><input name="preco3" type="hidden" id="preco3" value="<? echo $preco3; ?>"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item4" id="item3">
        <option selected><? echo $item4; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant4" type="text" id="quant4" value="<? echo $quant4; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref4" type="text" id="ref4" value="<? echo $ref4; ?>"></td>
    <td><input name="quantpecas4" type="text" id="quantpecas4" value="<? echo $quantpecas4; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_4; ?></strong></font></strong>
        <input name="preco_compra_4" type="hidden" id="preco_compra_4" value="<? echo $preco_compra_4; ?>"></td>
      <td><input name="preco4" type="hidden" id="preco4" value="<? echo $preco4; ?>"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item5" id="item4">
        <option selected><? echo $item5; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant5" type="text" id="quant5" value="<? echo $quant5; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref5" type="text" id="ref5" value="<? echo $ref5; ?>"></td>
    <td><input name="quantpecas5" type="text" id="quantpecas5" value="<? echo $quantpecas5; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_5; ?></strong></font></strong>
      <input name="preco_compra_5" type="hidden" id="preco_compra_5" value="<? echo $preco_compra_5; ?>"></td>
    <td><input name="preco5" type="hidden" id="preco5" value="<? echo $preco5; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item6" id="item5">
        <option selected><? echo $item6; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant6" type="text" id="quant6" value="<? echo $quant6; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref6" type="text" id="ref6" value="<? echo $ref6; ?>"></td>
    <td><input name="quantpecas6" type="text" id="quantpecas6" value="<? echo $quantpecas6; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_6; ?></strong></font></strong>
      <input name="preco_compra_6" type="hidden" id="preco_compra_6" value="<? echo $preco_compra_6; ?>"></td>
    <td><input name="preco6" type="hidden" id="preco6" value="<? echo $preco6; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item7" id="item6">
        <option selected><? echo $item7; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant7" type="text" id="quant7" value="<? echo $quant7; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref7" type="text" id="ref7" value="<? echo $ref7; ?>"></td>
    <td><input name="quantpecas7" type="text" id="quantpecas7" value="<? echo $quantpecas7; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_7; ?></strong></font></strong>
      <input name="preco_compra_7" type="hidden" id="preco_compra_7" value="<? echo $preco_compra_7; ?>"></td>
    <td><input name="preco7" type="hidden" id="preco7" value="<? echo $preco7; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item8" id="item7">
        <option selected><? echo $item8; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant8" type="text" id="quant8" value="<? echo $quant8; ?>" size="4">
    </strong></font></strong></font></strong></font></strong></font></strong></td>
    <td><input name="ref8" type="text" id="ref8" value="<? echo $ref8; ?>"></td>
    <td><input name="quantpecas8" type="text" id="quantpecas8" value="<? echo $quantpecas8; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_8; ?></strong></font></strong>
      <input name="preco_compra_8" type="hidden" id="preco_compra_8" value="<? echo $preco_compra_8; ?>"></td>
    <td><input name="preco8" type="hidden" id="preco8" value="<? echo $preco8; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item9" id="item8">
        <option selected><? echo $item9; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant9" type="text" id="quant9" value="<? echo $quant9; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref9" type="text" id="ref9" value="<? echo $ref9; ?>"></td>
    <td><input name="quantpecas9" type="text" id="quantpecas9" value="<? echo $quantpecas9; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_9; ?></strong></font></strong>
      <input name="preco_compra_9" type="hidden" id="preco_compra_9" value="<? echo $preco_compra_9; ?>"></td>
    <td><input name="preco9" type="hidden" id="preco9" value="<? echo $preco9; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item10" id="item9">
        <option selected><? echo $item10; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant10" type="text" id="quant10" value="<? echo $quant10; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref10" type="text" id="ref10" value="<? echo $ref10; ?>"></td>
    <td><input name="quantpecas10" type="text" id="quantpecas10" value="<? echo $quantpecas10; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_10; ?></strong></font></strong>
      <input name="preco_compra_10" type="hidden" id="preco_compra_10" value="<? echo $preco_compra_10; ?>"></td>
    <td><input name="preco10" type="hidden" id="preco10" value="<? echo $preco10; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item11" id="item10">
        <option selected><? echo $item11; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant11" type="text" id="quant11" value="<? echo $quant11; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref11" type="text" id="ref11" value="<? echo $ref11; ?>"></td>
    <td><input name="quantpecas11" type="text" id="quantpecas11" value="<? echo $quantpecas11; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_11; ?></strong></font></strong>
      <input name="preco_compra_11" type="hidden" id="preco_compra_11" value="<? echo $preco_compra_11; ?>"></td>
    <td><input name="preco11" type="hidden" id="preco11" value="<? echo $preco11; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item12" id="item11">
        <option selected><? echo $item12; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant12" type="text" id="quant12" value="<? echo $quant12; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref12" type="text" id="ref12" value="<? echo $ref12; ?>"></td>
    <td><input name="quantpecas12" type="text" id="quantpecas12" value="<? echo $quantpecas12; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_12; ?></strong></font></strong>
      <input name="preco_compra_12" type="hidden" id="preco_compra_12" value="<? echo $preco_compra_12; ?>"></td>
    <td><input name="preco12" type="hidden" id="preco12" value="<? echo $preco12; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item13" id="item12">
        <option selected><? echo $item13; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant13" type="text" id="quant13" value="<? echo $quant13; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref13" type="text" id="ref13" value="<? echo $ref13; ?>"></td>
    <td><input name="quantpecas13" type="text" id="quantpecas13" value="<? echo $quantpecas13; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_13; ?></strong></font></strong>
      <input name="preco_compra_13" type="hidden" id="preco_compra_13" value="<? echo $preco_compra_13; ?>"></td>
    <td><input name="preco13" type="hidden" id="preco13" value="<? echo $preco13; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item14" id="item13">
        <option selected><? echo $item14; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant14" type="text" id="quant14" value="<? echo $quant14; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref14" type="text" id="ref14" value="<? echo $ref14; ?>"></td>
    <td><input name="quantpecas14" type="text" id="quantpecas14" value="<? echo $quantpecas14; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_14; ?></strong></font></strong>
      <input name="preco_compra_14" type="hidden" id="preco_compra_14" value="<? echo $preco_compra_14; ?>"></td>
    <td><input name="preco14" type="hidden" id="preco14" value="<? echo $preco14; ?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item15" id="item14">
        <option selected><? echo $item15; ?></option>
        <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant15" type="text" id="quant15" value="<? echo $quant15; ?>" size="4">
    </strong></font></strong></font></strong></td>
    <td><input name="ref15" type="text" id="ref15" value="<? echo $ref15; ?>"></td>
    <td><input name="quantpecas15" type="text" id="quantpecas15" value="<? echo $quantpecas15; ?>" size="4"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_15; ?></strong></font></strong>
      <input name="preco_compra_15" type="hidden" id="preco_compra_15" value="<? echo $preco_compra_15; ?>"></td>
    <td><input name="preco15" type="hidden" id="preco15" value="<? echo $preco15; ?>"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td width="12%"><strong>Condi&ccedil;&otilde;es de Pagto: Parcelamento em
      <select name="quantparc" id="quantparc">
          <option selected><? echo $quantparc_cliente; ?></option>
          <?


    $sql = "select * from quantparc order by quantparc asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['quantparc']."</option>";
    }
?>
        </select> 
        vezes. Modo do parcelamento
        <select name="condpagto" id="select4">
          <option selected><? echo $condpagto_cliente; ?></option>
          <?


    $sql = "select * from cond_pagto order by condpagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['condpagto']."</option>";
    }
?>
        </select>
        <font color="#0000FF">
      <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
      <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $celular_op; ?>">
      <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_op; ?>">
      <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_op; ?>">
      <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento2" value="<? echo $cidade_estabelecimento_op; ?>">
      <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_op; ?>">
      <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_op; ?>">
      </font></strong></td>
    </tr>
  <tr>
    <td><strong>Observa&ccedil;&otilde;es:</strong><br>
      <textarea name="obs" id="obs" cols="70" rows="7"><? echo $obs_cliente; ?></textarea></td>
  </tr>
</table>
<p><br><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Re-Calcular Ordem de Compra">
  <input type="reset" name="Submit2" value="Limpar">
</form>
<p></p>
<p></p>
</body>
</html>
