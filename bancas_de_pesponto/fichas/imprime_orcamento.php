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

$codigo_orcamento = $_POST['codigo_orcamento'];

			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>



<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>

  <?

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_orcamento = $linha[0];
$codigo_cliente = $linha[1];
$razaosocial_cliente = $linha[2];
$nfantasia_cliente = $linha[3];
$endereco_cliente = $linha[4];
$numero_cliente = $linha[5];
$bairro_cliente = $linha[6];
$cidade_cliente = $linha[7];
$estado_cliente = $linha[8];
$fone_cliente = $linha[9];
$comprador_cliente = $linha[10];
$celular_cliente = $linha[11];
$email_cliente = $linha[12];
$cep_cliente = $linha[13];
$dataorcamento_cliente = $linha[14];
$horaorcamento_cliente = $linha[15];
$referencia_cliente = $linha[16];
$descricao_servico_cliente = $linha[17];

$item1 = $linha[18];
$categoria_1 = $linha[19];
$ref1 = $linha[20];
$preco_compra_1 = $linha[21];
if($preco_compra_1==""){}else{
$preco_compra_1_formatado = number_format($preco_compra_1, 2, ",", ".");
}
$quant1 = $linha[22];
$preco1 = $linha[23];
if($preco1==""){}else{
$preco1_formatado = number_format($preco1, 2, ",", ".");
}
$total1 = $linha[24];
$total1_formatado = number_format($total1, 2, ",", ".");

$item2 = $linha[25];
$categoria_2 = $linha[26];
$ref2 = $linha[27];
$preco_compra_2 = $linha[28];
if($preco_compra_2==""){}else{
$preco_compra_2_formatado = number_format($preco_compra_2, 2, ",", ".");
}
$quant2 = $linha[29];
$preco2 = $linha[30];
if($preco2==""){}else{
$preco2_formatado = number_format($preco2, 2, ",", ".");
}
$total2 = $linha[31];
$total2_formatado = number_format($total2, 2, ",", ".");

$item3 = $linha[32];
$categoria_3 = $linha[33];
$ref3 = $linha[34];
$preco_compra_3 = $linha[35];
if($preco_compra_3==""){}else{
$preco_compra_3_formatado = number_format($preco_compra_3, 2, ",", ".");
}
$quant3 = $linha[36];
$preco3 = $linha[37];
if($preco3==""){}else{
$preco3_formatado = number_format($preco3, 2, ",", ".");
}
$total3 = $linha[38];
$total3_formatado = number_format($total3, 2, ",", ".");

$item4 = $linha[39];
$categoria_4 = $linha[40];
$ref4 = $linha[41];
$preco_compra_4 = $linha[42];
if($preco_compra_4==""){}else{
$preco_compra_4_formatado = number_format($preco_compra_4, 2, ",", ".");
}
$quant4 = $linha[43];
$preco4 = $linha[44];
if($preco4==""){}else{
$preco4_formatado = number_format($preco4, 2, ",", ".");
}
$total4 = $linha[45];
$total4_formatado = number_format($total4, 2, ",", ".");

$item5 = $linha[46];
$categoria_5 = $linha[47];
$ref5 = $linha[48];
$preco_compra_5 = $linha[49];
if($preco_compra_5==""){}else{
$preco_compra_5_formatado = number_format($preco_compra_5, 2, ",", ".");
}
$quant5 = $linha[50];
$preco5 = $linha[51];
if($preco5==""){}else{
$preco5_formatado = number_format($preco5, 2, ",", ".");
}
$total5 = $linha[52];
$total5_formatado = number_format($total5, 2, ",", ".");

$item6 = $linha[53];
$categoria_6 = $linha[54];
$ref6 = $linha[55];
$preco_compra_6 = $linha[56];
if($preco_compra_6==""){}else{
$preco_compra_6_formatado = number_format($preco_compra_6, 2, ",", ".");
}
$quant6 = $linha[57];
$preco6 = $linha[58];
if($preco6==""){}else{
$preco6_formatado = number_format($preco6, 2, ",", ".");
}
$total6 = $linha[59];
$total6_formatado = number_format($total6, 2, ",", ".");

$item7 = $linha[60];
$categoria_7 = $linha[61];
$ref7 = $linha[62];
$preco_compra_7 = $linha[63];
if($preco_compra_7==""){}else{
$preco_compra_7_formatado = number_format($preco_compra_7, 2, ",", ".");
}
$quant7 = $linha[64];
$preco7 = $linha[65];
if($preco7==""){}else{
$preco7_formatado = number_format($preco7, 2, ",", ".");
}
$total7 = $linha[66];
$total7_formatado = number_format($total7, 2, ",", ".");

$item8 = $linha[67];
$categoria_8 = $linha[68];
$ref8 = $linha[69];
$preco_compra_8 = $linha[70];
if($preco_compra_8==""){}else{
$preco_compra_8_formatado = number_format($preco_compra_8, 2, ",", ".");
}
$quant8 = $linha[71];
$preco8 = $linha[72];
if($preco8==""){}else{
$preco8_formatado = number_format($preco8, 2, ",", ".");
}
$total8 = $linha[73];
$total8_formatado = number_format($total8, 2, ",", ".");

$item9 = $linha[74];
$categoria_9 = $linha[75];
$ref9 = $linha[76];
$preco_compra_9 = $linha[77];
if($preco_compra_9==""){}else{
$preco_compra_9_formatado = number_format($preco_compra_9, 2, ",", ".");
}
$quant9 = $linha[78];
$preco9 = $linha[79];
if($preco9==""){}else{
$preco9_formatado = number_format($preco9, 2, ",", ".");
}
$total9 = $linha[80];
$total9_formatado = number_format($total9, 2, ",", ".");

$item10 = $linha[81];
$categoria_10 = $linha[82];
$ref10 = $linha[83];
$preco_compra_10 = $linha[84];
if($preco_compra_10==""){}else{
$preco_compra_10_formatado = number_format($preco_compra_10, 2, ",", ".");
}
$quant10 = $linha[85];
$preco10 = $linha[86];
if($preco10==""){}else{
$preco10_formatado = number_format($preco10, 2, ",", ".");
}
$total10 = $linha[87];
$total10_formatado = number_format($total10, 2, ",", ".");

$item11 = $linha[88];
$categoria_11 = $linha[89];
$ref11 = $linha[90];
$preco_compra_11 = $linha[91];
if($preco_compra_11==""){}else{
$preco_compra_11_formatado = number_format($preco_compra_11, 2, ",", ".");
}
$quant11 = $linha[92];
$preco11 = $linha[93];
if($preco11==""){}else{
$preco11_formatado = number_format($preco11, 2, ",", ".");
}
$total11 = $linha[94];
$total11_formatado = number_format($total11, 2, ",", ".");

$item12 = $linha[95];
$categoria_12 = $linha[96];
$ref12 = $linha[97];
$preco_compra_12 = $linha[98];
if($preco_compra_12==""){}else{
$preco_compra_12_formatado = number_format($preco_compra_12, 2, ",", ".");
}
$quant12 = $linha[99];
$preco12 = $linha[100];
if($preco12==""){}else{
$preco12_formatado = number_format($preco12, 2, ",", ".");
}
$total12 = $linha[101];
$total12_formatado = number_format($total12, 2, ",", ".");

$item13 = $linha[102];
$categoria_13 = $linha[103];
$ref13 = $linha[104];
$preco_compra_13 = $linha[105];
if($preco_compra_13==""){}else{
$preco_compra_13_formatado = number_format($preco_compra_13, 2, ",", ".");
}
$quant13 = $linha[106];
$preco13 = $linha[107];
if($preco13==""){}else{
$preco13_formatado = number_format($preco13, 2, ",", ".");
}
$total13 = $linha[108];
$total13_formatado = number_format($total13, 2, ",", ".");

$item14 = $linha[109];
$categoria_14 = $linha[110];
$ref14 = $linha[111];
$preco_compra_14 = $linha[112];
if($preco_compra_14==""){}else{
$preco_compra_14_formatado = number_format($preco_compra_14, 2, ",", ".");
}
$quant14 = $linha[113];
$preco14 = $linha[114];
if($preco14==""){}else{
$preco14_formatado = number_format($preco14, 2, ",", ".");
}
$total14 = $linha[115];
$total14_formatado = number_format($total14, 2, ",", ".");

$item15 = $linha[116];
$categoria_15 = $linha[117];
$ref15 = $linha[118];
$preco_compra_15 = $linha[119];
if($preco_compra_15==""){}else{
$preco_compra_15_formatado = number_format($preco_compra_15, 2, ",", ".");
}
$quant15 = $linha[120];
$preco15 = $linha[121];
if($preco15==""){}else{
$preco15_formatado = number_format($preco15, 2, ",", ".");
}
$total15 = $linha[122];
$total15_formatado = number_format($total15, 2, ",", ".");


$total_geral_cliente = $linha[123];
$total_geral_cliente_formatado = number_format($total_geral_cliente, 2, ",", ".");

$quantparc_cliente = $linha[124];
$condpagto_cliente = $linha[125];
$obs_cliente = $linha[126];

$quantpecas1 = $linha[127];
$quantpecas2 = $linha[128];
$quantpecas3 = $linha[129];
$quantpecas4 = $linha[130];
$quantpecas5 = $linha[131];
$quantpecas6 = $linha[132];
$quantpecas7 = $linha[133];
$quantpecas8 = $linha[134];
$quantpecas9 = $linha[135];
$quantpecas10 = $linha[136];
$quantpecas11 = $linha[137];
$quantpecas12 = $linha[138];
$quantpecas13 = $linha[139];
$quantpecas14 = $linha[140];
$quantpecas15 = $linha[141];

$desc1 = $linha[142];
$desc2 = $linha[143];
$desc3 = $linha[144];
$desc4 = $linha[145];
$desc5 = $linha[146];
$desc6 = $linha[147];
$desc7 = $linha[148];
$desc8 = $linha[149];
$desc9 = $linha[150];
$desc10 = $linha[151];
$desc11 = $linha[152];
$desc12 = $linha[153];
$desc13 = $linha[154];
$desc14 = $linha[155];
$desc15 = $linha[156];

$operador_cliente = $linha[157];
}
?>
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
<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$razaosocial = $linha[1];
$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$email_empresa = $linha[14];
$site = $linha[15];

}
?>
</p>
<form name="form1" method="post" action="grava_orcamento.php">
<p>&nbsp;</p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
      <table width="100%" border="0" bordercolor="#000000">
        <tr>
          <td width="7%">
              <div align="left">
                <?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

//printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='250' ></a>"); 
} ?>
                  </div></td>
          <td width="93%"><div align="center"><strong><font size="2"><? echo $razaosocial; ?> - <? echo $nfantasia; ?><br>
            END: <? echo $endereco; ?> n&ordm; <? echo $numero; ?>, bairro <? echo $bairro; ?>, em <? echo $cidade; ?> estado de <? echo $estado; ?><br>
            <br>
          </font></strong></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>OR&Ccedil;AMENTO</strong> <strong>N&ordm; <font color="#0000FF" size="2"><? echo $codigo_orcamento; ?></font></strong></div></td>
  </tr>
</table>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellspacing="4">
      
      <tr>
        <td width="18%"><strong><font size="2">C&oacute;digo:</font></strong></td>
        <td width="41%"><strong><font color="#0000FF" size="2"><? echo $codigo_cliente; ?>
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        </font></strong></td>
        <td width="15%"><strong><font size="2">Comprador:</font></strong></td>
        <td width="26%"><strong><font color="#0000FF" size="2"><? echo $comprador_cliente; ?>
              <input name="comprador" type="hidden" id="comprador" value="<? echo $comprador_cliente; ?>">
        </font></strong></td>
      </tr>
      <tr>
        <td><strong><font size="2">Raz&atilde;o Social:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $razaosocial_cliente; ?>
              <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial_cliente; ?>">
        </font></strong></td>
        <td><strong><font size="2">Celular:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $celular_cliente; ?>
              <input name="celular" type="hidden" id="celular" value="<? echo $celular_cliente; ?>">
        </font></strong></td>
      </tr>
      <tr>
        <td><strong><font size="2">Nome Fantasia:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $nfantasia_cliente; ?>
              <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia_cliente; ?>">
        </font></strong></td>
        <td><strong><font size="2">E-Mail:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $email_cliente; ?>
              <input name="email" type="hidden" id="email" value="<? echo $email_cliente; ?>">
        </font></strong></td>
      </tr>
      
      <tr>
        <td><strong><font size="2">Telefone:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $fone_cliente; ?>
              <input name="fone" type="hidden" id="fone" value="<? echo $fone_cliente; ?>">
        </font></strong></td>
        <td><strong><font size="2">Data Or&ccedil;amento:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $dataorcamento_cliente; ?> - <? echo $horaorcamento_cliente; ?>
              <input name="dataorcamento" type="hidden" id="dataorcamento" value="<? echo date('d-m-Y'); ?>">
              <input name="horaorcamento" type="hidden" id="horaorcamento" value="<? echo date('H:i:s'); ?>">
        </font></strong></td>
      </tr>
    </table></td>
</tr>
</table>
<p>
<table width="100%" border="1" bordercolor="#000000">
  
  <tr>
    <td><strong>ITENS</strong></td>
    <td><strong>QUANT</strong></td>
    <td width="10%"><strong>REFER&Ecirc;NCIA</strong></td>
    <td width="10%"><strong>QUANT PE&Ccedil;AS</strong></td>
    <td width="11%"><strong>PRE&Ccedil;O COMPRA</strong></td>
    <td><strong>PRE&Ccedil;O  VENDA</strong></td>
    <td><strong>VALOR TOTAL</strong></td>
    <td><strong>DESCONTOS</strong></td>
    <td><strong>TOTAL POR REF.</strong></td>
  </tr>
  <tr>
    <td width="15%"><strong><font color="#0000FF"><strong><? echo $item1; ?></strong></font></strong></td>
    <td width="7%"><strong><font color="#0000FF"><strong><? echo $quant1; ?>
      <input name="quant1" type="hidden" id="quant1" value="<? echo $quant1; ?>">
    </strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref1; ?></strong></font></strong>
        <input name="ref1" type="hidden" id="ref1" value="<? echo $ref1; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas1; ?></strong></font></strong>
      <input name="quantpecas1" type="hidden" id="quantpecas1" value="<? echo $quantpecas1; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_1_formatado; ?></strong></font></strong>
        <input name="preco_compra_1" type="hidden" id="preco_compra_1" value="<? echo $preco_compra_1; ?>"></td>
    <td width="10%"><strong><font color="#0000FF"><strong><? echo "R$ ".$preco1_formatado; ?>
      <input name="preco1" type="hidden" id="preco1" value="<? echo $preco1; ?>">
    </strong></font></strong></td>
    <td width="11%"><strong><font color="#0000FF"><strong><? echo "R$ ".$total1_formatado; ?>
      <input name="total1" type="hidden" id="total1" value="<? echo $total1; ?>">
    </strong></font></strong></td>
    <td width="11%"><strong><font color="#0000FF"><strong><? echo $desc1; ?>
      <input name="desc1" type="hidden" id="desc1" value="<? echo $desc1; ?>">
    </strong></font></strong></td>
    <td width="13%">    <?

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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


$total_1 = $linha[24];

if($ref2==$ref1){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref1){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref1){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref1){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref1){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref1){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref1){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref1){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref1){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref1){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref1){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref1){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref1){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref1){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref1 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref1_formatada = number_format($somatotalref1, 2, ",", ".");


if($categoria_1<>""){
echo"R$ $somatotalref1_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item2; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant2; ?><font color="#0000FF"><strong>
      <input name="quant2" type="hidden" id="quant2" value="<? echo $quant2; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref2; ?></strong></font></strong>
        <input name="ref2" type="hidden" id="ref2" value="<? echo $ref2; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas2; ?></strong></font></strong>
      <input name="quantpecas2" type="hidden" id="quantpecas2" value="<? echo $quantpecas2; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_2_formatado; ?></strong></font></strong>
        <input name="preco_compra_2" type="hidden" id="preco_compra_2" value="<? echo $preco_compra_2; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco2_formatado; ?><font color="#0000FF"><strong>
      <input name="preco2" type="hidden" id="preco2" value="<? echo $preco2; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total2_formatado; ?><font color="#0000FF"><strong>
      <input name="total2" type="hidden" id="total2" value="<? echo $total2; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc2; ?><font color="#0000FF"><strong>
      <input name="desc2" type="hidden" id="desc2" value="<? echo $desc2; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref2){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

$total_2 = $linha[31]; 

if($ref3==$ref2){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref2){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref2){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref2){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref2){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref2){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref2){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref2){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref2){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref2){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref2){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref2){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref2){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref2 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref2_formatada = number_format($somatotalref2, 2, ",", ".");


if($categoria_2<>"" & $ref2<>$ref1){
echo"R$ $somatotalref2_formatada";
}
?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item3; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant3; ?><font color="#0000FF"><strong>
      <input name="quant3" type="hidden" id="quant3" value="<? echo $quant3; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref3; ?></strong></font></strong>
        <input name="ref3" type="hidden" id="ref3" value="<? echo $ref3; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas3; ?></strong></font></strong>
      <input name="quantpecas3" type="hidden" id="quantpecas3" value="<? echo $quantpecas3; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_3_formatado; ?></strong></font></strong>
        <input name="preco_compra_3" type="hidden" id="preco_compra_3" value="<? echo $preco_compra_3; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco3_formatado; ?><font color="#0000FF"><strong>
      <input name="preco3" type="hidden" id="preco3" value="<? echo $preco3; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total3_formatado; ?><font color="#0000FF"><strong>
      <input name="total3" type="hidden" id="total3" value="<? echo $total3; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc3; ?><font color="#0000FF"><strong>
      <input name="desc3" type="hidden" id="desc3" value="<? echo $desc3; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	   
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref3){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref3){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

$total_3 = $linha[38];

if($ref4==$ref3){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref3){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref3){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref3){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref3){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref3){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref3){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref3){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref3){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref3){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref3){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref3){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref3 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref3_formatada = number_format($somatotalref3, 2, ",", ".");

	   
if($categoria_3<>"" & $ref3<>$ref2){
echo"R$ $somatotalref3_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item4; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant4; ?><font color="#0000FF"><strong>
      <input name="quant4" type="hidden" id="quant4" value="<? echo $quant4; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref4; ?></strong></font></strong>
        <input name="ref4" type="hidden" id="ref4" value="<? echo $ref4; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas4; ?></strong></font></strong>
      <input name="quantpecas4" type="hidden" id="quantpecas4" value="<? echo $quantpecas4; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_4_formatado; ?></strong></font></strong>
        <input name="preco_compra_4" type="hidden" id="preco_compra_4" value="<? echo $preco_compra_4; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco4_formatado; ?><font color="#0000FF"><strong>
      <input name="preco4" type="hidden" id="preco4" value="<? echo $preco4; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total4_formatado; ?><font color="#0000FF"><strong>
      <input name="total4" type="hidden" id="total4" value="<? echo $total4; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc4; ?><font color="#0000FF"><strong>
      <input name="desc4" type="hidden" id="desc4" value="<? echo $desc4; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref4){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref4){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref4){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

$total_4 = $linha[45]; 

if($ref5==$ref4){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref4){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref4){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref4){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref4){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref4){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref4){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref4){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref4){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref4){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref4){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref4 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref4_formatada = number_format($somatotalref4, 2, ",", ".");

	  
if($categoria_4<>"" & $ref4<>$ref3){
echo"R$ $somatotalref4_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item5; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant5; ?><font color="#0000FF"><strong>
      <input name="quant5" type="hidden" id="quant5" value="<? echo $quant5; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref5; ?></strong></font></strong>
        <input name="ref5" type="hidden" id="ref5" value="<? echo $ref5; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas5; ?></strong></font></strong>
      <input name="quantpecas5" type="hidden" id="quantpecas5" value="<? echo $quantpecas5; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_5_formatado; ?></strong></font></strong>
        <input name="preco_compra_5" type="hidden" id="preco_compra_5" value="<? echo $preco_compra_5; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco5_formatado; ?><font color="#0000FF"><strong>
      <input name="preco5" type="hidden" id="preco5" value="<? echo $preco5; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total5_formatado; ?><font color="#0000FF"><strong>
      <input name="total5" type="hidden" id="total5" value="<? echo $total5; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc5; ?><font color="#0000FF"><strong>
      <input name="desc5" type="hidden" id="desc5" value="<? echo $desc5; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref5){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref5){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref5){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref5){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

$total_5 = $linha[52]; 

if($ref6==$ref5){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref5){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref5){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref5){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref5){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref5){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref5){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref5){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref5){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref5){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref5 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref5_formatada = number_format($somatotalref5, 2, ",", ".");

	  
if($categoria_5<>"" & $ref5<>$ref4){
echo"R$ $somatotalref5_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item6; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant6; ?><font color="#0000FF"><strong>
      <input name="quant6" type="hidden" id="quant6" value="<? echo $quant6; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref6; ?></strong></font></strong>
        <input name="ref6" type="hidden" id="ref6" value="<? echo $ref6; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas6; ?></strong></font></strong>
      <input name="quantpecas6" type="hidden" id="quantpecas6" value="<? echo $quantpecas6; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_6_formatado; ?></strong></font></strong>
        <input name="preco_compra_6" type="hidden" id="preco_compra_6" value="<? echo $preco_compra_6; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco6_formatado; ?><font color="#0000FF"><strong>
      <input name="preco6" type="hidden" id="preco6" value="<? echo $preco6; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total6_formatado; ?><font color="#0000FF"><strong>
      <input name="total6" type="hidden" id="total6" value="<? echo $total6; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc6; ?><font color="#0000FF"><strong>
      <input name="desc6" type="hidden" id="desc6" value="<? echo $desc6; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref6){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref6){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref6){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref6){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref6){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

$total_6 = $linha[59]; 

if($ref7==$ref6){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref6){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref6){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref6){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref6){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref6){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref6){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref6){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref6){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref6 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref6_formatada = number_format($somatotalref6, 2, ",", ".");

	  
if($categoria_6<>"" & $ref6<>$ref5){
echo"R$ $somatotalref6_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item7; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant7; ?><font color="#0000FF"><strong>
      <input name="quant7" type="hidden" id="quant7" value="<? echo $quant7; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref7; ?></strong></font></strong>
        <input name="ref7" type="hidden" id="ref7" value="<? echo $ref7; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas7; ?></strong></font></strong>
      <input name="quantpecas7" type="hidden" id="quantpecas7" value="<? echo $quantpecas7; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_7_formatado; ?></strong></font></strong>
        <input name="preco_compra_7" type="hidden" id="preco_compra_7" value="<? echo $preco_compra_7; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco7_formatado; ?><font color="#0000FF"><strong>
      <input name="preco7" type="hidden" id="preco7" value="<? echo $preco7; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total7_formatado; ?><font color="#0000FF"><strong>
      <input name="total7" type="hidden" id="total7" value="<? echo $total7; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc8; ?><font color="#0000FF"><strong>
      <input name="desc7" type="hidden" id="desc7" value="<? echo $desc7; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref7){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref7){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref7){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref7){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref7){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref7){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

$total_7 = $linha[66]; 

if($ref8==$ref7){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref7){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref7){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref7){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref7){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref7){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref7){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref7){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref7 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref7_formatada = number_format($somatotalref7, 2, ",", ".");

	  
if($categoria_7<>"" & $ref7<>$ref6){
echo"R$ $somatotalref7_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item8; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant8; ?><font color="#0000FF"><strong>
      <input name="quant8" type="hidden" id="quant8" value="<? echo $quant8; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref8; ?></strong></font></strong>
        <input name="ref8" type="hidden" id="ref8" value="<? echo $ref8; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas8; ?></strong></font></strong>
      <input name="quantpecas8" type="hidden" id="quantpecas8" value="<? echo $quantpecas8; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_8_formatado; ?></strong></font></strong>
        <input name="preco_compra_8" type="hidden" id="preco_compra_8" value="<? echo $preco_compra_8; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco8_formatado; ?><font color="#0000FF"><strong>
      <input name="preco8" type="hidden" id="preco8" value="<? echo $preco8; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total8_formatado; ?><font color="#0000FF"><strong>
      <input name="total8" type="hidden" id="total8" value="<? echo $total8; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc8; ?><font color="#0000FF"><strong>
      <input name="desc8" type="hidden" id="desc8" value="<? echo $desc8; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref8){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref8){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref8){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref8){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref8){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref8){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref8){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

$total_8 = $linha[73]; 

if($ref9==$ref8){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref8){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref8){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref8){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref8){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref8){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref8){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref8 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref8_formatada = number_format($somatotalref8, 2, ",", ".");

	  
if($categoria_8<>"" & $ref8<>$ref7){
echo"R$ $somatotalref8_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item9; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant9; ?><font color="#0000FF"><strong>
      <input name="quant9" type="hidden" id="quant9" value="<? echo $quant9; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref9; ?></strong></font></strong>
        <input name="ref9" type="hidden" id="ref9" value="<? echo $ref9; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas9; ?></strong></font></strong>
      <input name="quantpecas9" type="hidden" id="quantpecas9" value="<? echo $quantpecas9; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_9_formatado; ?></strong></font></strong>
        <input name="preco_compra_9" type="hidden" id="preco_compra_9" value="<? echo $preco_compra_9; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco9_formatado; ?><font color="#0000FF"><strong>
      <input name="preco9" type="hidden" id="preco9" value="<? echo $preco9; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total9_formatado; ?><font color="#0000FF"><strong>
      <input name="total9" type="hidden" id="total9" value="<? echo $total9; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc9; ?><font color="#0000FF"><strong>
      <input name="desc9" type="hidden" id="desc9" value="<? echo $desc9; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref9){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref9){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref9){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref9){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref9){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref9){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref9){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref9){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

$total_9 = $linha[80]; 

if($ref10==$ref9){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref9){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref9){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref9){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref9){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref9){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref9 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref9_formatada = number_format($somatotalref9, 2, ",", ".");

	  
if($categoria_9<>"" & $ref9<>$ref8){
echo"R$ $somatotalref9_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item10; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant10; ?><font color="#0000FF"><strong>
      <input name="quant10" type="hidden" id="quant10" value="<? echo $quant10; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref10; ?></strong></font></strong>
        <input name="ref10" type="hidden" id="ref10" value="<? echo $ref10; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas10; ?></strong></font></strong>
      <input name="quantpecas10" type="hidden" id="quantpecas10" value="<? echo $quantpecas10; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_10_formatado; ?></strong></font></strong>
        <input name="preco_compra_10" type="hidden" id="preco_compra_10" value="<? echo $preco_compra_10; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco10_formatado; ?><font color="#0000FF"><strong>
      <input name="preco10" type="hidden" id="preco10" value="<? echo $preco10; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total10_formatado; ?><font color="#0000FF"><strong>
      <input name="total10" type="hidden" id="total10" value="<? echo $total10; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc10; ?><font color="#0000FF"><strong>
      <input name="desc10" type="hidden" id="desc10" value="<? echo $desc10; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref10){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref10){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref10){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref10){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref10){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref10){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref10){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref10){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref10){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

$total_10 = $linha[87]; 

if($ref11==$ref10){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref10){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref10){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref10){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref10){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref10 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref10_formatada = number_format($somatotalref10, 2, ",", ".");

	  
if($categoria_10<>"" & $ref10<>$ref9){
echo"R$ $somatotalref10_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item11; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant11; ?><font color="#0000FF"><strong>
      <input name="quant11" type="hidden" id="quant11" value="<? echo $quant11; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref11; ?></strong></font></strong>
        <input name="ref11" type="hidden" id="ref11" value="<? echo $ref11; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas11; ?></strong></font></strong>
      <input name="quantpecas11" type="hidden" id="quantpecas11" value="<? echo $quantpecas11; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_11_formatado; ?></strong></font></strong>
        <input name="preco_compra_11" type="hidden" id="preco_compra_11" value="<? echo $preco_compra_11; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco11_formatado; ?><font color="#0000FF"><strong>
      <input name="preco11" type="hidden" id="preco11" value="<? echo $preco11; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total11_formatado; ?><font color="#0000FF"><strong>
      <input name="total11" type="hidden" id="total11" value="<? echo $total11; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc11; ?><font color="#0000FF"><strong>
      <input name="desc11" type="hidden" id="desc11" value="<? echo $desc11; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref11){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref11){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref11){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref11){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref11){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref11){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref11){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref11){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref11){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref11){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

$total_11 = $linha[94]; 

if($ref12==$ref11){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref11){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref11){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref11){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref11 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref11_formatada = number_format($somatotalref11, 2, ",", ".");

	  
if($categoria_11<>"" & $ref11<>$ref10){
echo"R$ $somatotalref11_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item12; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant12; ?><font color="#0000FF"><strong>
      <input name="quant12" type="hidden" id="quant12" value="<? echo $quant12; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref12; ?></strong></font></strong>
        <input name="ref12" type="hidden" id="ref12" value="<? echo $ref12; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas12; ?></strong></font></strong>
      <input name="quantpecas12" type="hidden" id="quantpecas12" value="<? echo $quantpecas12; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_12_formatado; ?></strong></font></strong>
        <input name="preco_compra_12" type="hidden" id="preco_compra_12" value="<? echo $preco_compra_12; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco12_formatado; ?><font color="#0000FF"><strong>
      <input name="preco12" type="hidden" id="preco12" value="<? echo $preco12; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total12_formatado; ?><font color="#0000FF"><strong>
      <input name="total12" type="hidden" id="total12" value="<? echo $total12; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc12; ?><font color="#0000FF"><strong>
      <input name="desc12" type="hidden" id="desc12" value="<? echo $desc12; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref12){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref12){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref12){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref12){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref12){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref12){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref12){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref12){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref12){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref12){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref12){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

$total_12 = $linha[101]; 

if($ref13==$ref12){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref12){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref12){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref12 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref12_formatada = number_format($somatotalref12, 2, ",", ".");

	  
if($categoria_12<>"" & $ref12<>$ref11){
echo"R$ $somatotalref12_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item13; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant13; ?><font color="#0000FF"><strong>
      <input name="quant13" type="hidden" id="quant13" value="<? echo $quant13; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref13; ?></strong></font></strong>
        <input name="ref13" type="hidden" id="ref13" value="<? echo $ref13; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas13; ?></strong></font></strong>
      <input name="quantpecas13" type="hidden" id="quantpecas13" value="<? echo $quantpecas13; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_13_formatado; ?></strong></font></strong>
        <input name="preco_compra_13" type="hidden" id="preco_compra_13" value="<? echo $preco_compra_13; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco13_formatado; ?><font color="#0000FF"><strong>
      <input name="preco13" type="hidden" id="preco13" value="<? echo $preco13; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total13_formatado; ?><font color="#0000FF"><strong>
      <input name="total13" type="hidden" id="total13" value="<? echo $total13; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc13; ?><font color="#0000FF"><strong>
      <input name="desc13" type="hidden" id="desc13" value="<? echo $desc13; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
	  $sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref13){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref13){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref13){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref13){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref13){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref13){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref13){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref13){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref13){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref13){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref13){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref13){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

$total_13 = $linha[108]; 

if($ref14==$ref13){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

if($ref15==$ref13){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref13 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref13_formatada = number_format($somatotalref13, 2, ",", ".");

	  
if($categoria_13<>"" & $ref13<>$ref12){
echo"R$ $somatotalref13_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item14; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant14; ?><font color="#0000FF"><strong>
      <input name="quant14" type="hidden" id="quant14" value="<? echo $quant14; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref14; ?></strong></font></strong>
        <input name="ref14" type="hidden" id="ref14" value="<? echo $ref14; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas14; ?></strong></font></strong>
      <input name="quantpecas14" type="hidden" id="quantpecas14" value="<? echo $quantpecas14; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_14_formatado; ?></strong></font></strong>
        <input name="preco_compra_14" type="hidden" id="preco_compra_14" value="<? echo $preco_compra_14; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco14_formatado; ?><font color="#0000FF"><strong>
      <input name="preco14" type="hidden" id="preco14" value="<? echo $preco14; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total14_formatado; ?><font color="#0000FF"><strong>
      <input name="total14" type="hidden" id="total14" value="<? echo $total14; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc14; ?><font color="#0000FF"><strong>
      <input name="desc14" type="hidden" id="desc14" value="<? echo $desc14; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref14){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref14){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref14){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref14){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref14){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref14){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref14){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref14){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref14){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref14){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref14){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref14){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref14){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

$total_14 = $linha[115]; 

if($ref15==$ref14){
$total_15 = $linha[122]; }else{$total_15 = 0.00; }


}


$somatotalref14 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref14_formatada = number_format($somatotalref14, 2, ",", ".");

	  
if($categoria_14<>"" & $ref14<>$ref13){
echo"R$ $somatotalref14_formatada";
}

?></td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item15; ?></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant15; ?><font color="#0000FF"><strong>
      <input name="quant15" type="hidden" id="quant15" value="<? echo $quant15; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref15; ?></strong></font></strong>
        <input name="ref15" type="hidden" id="ref15" value="<? echo $ref15; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas15; ?></strong></font></strong>
      <input name="quantpecas15" type="hidden" id="quantpecas15" value="<? echo $quantpecas15; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco_compra_15_formatado; ?></strong></font></strong>
        <input name="preco_compra_15" type="hidden" id="preco_compra_15" value="<? echo $preco_compra_15; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$preco15_formatado; ?><font color="#0000FF"><strong>
      <input name="preco15" type="hidden" id="preco15" value="<? echo $preco15; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo "R$ ".$total15_formatado; ?><font color="#0000FF"><strong>
      <input name="total15" type="hidden" id="total15" value="<? echo $total15; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $desc15; ?><font color="#0000FF"><strong>
      <input name="desc15" type="hidden" id="desc15" value="<? echo $desc15; ?>">
    </strong></font></strong></font></strong></td>
    <td>    <?
	  
	  
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

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

if($ref1==$ref15){
$total_1 = $linha[24]; }else{$total_1 = 0.00; }

if($ref2==$ref15){
$total_2 = $linha[31]; }else{$total_2 = 0.00; }

if($ref3==$ref15){
$total_3 = $linha[38]; }else{$total_3 = 0.00; }

if($ref4==$ref15){
$total_4 = $linha[45]; }else{$total_4 = 0.00; }

if($ref5==$ref15){
$total_5 = $linha[52]; }else{$total_5 = 0.00; }

if($ref6==$ref15){
$total_6 = $linha[59]; }else{$total_6 = 0.00; }

if($ref7==$ref15){
$total_7 = $linha[66]; }else{$total_7 = 0.00; }

if($ref8==$ref15){
$total_8 = $linha[73]; }else{$total_8 = 0.00; }

if($ref9==$ref15){
$total_9 = $linha[80]; }else{$total_9 = 0.00; }

if($ref10==$ref15){
$total_10 = $linha[87]; }else{$total_10 = 0.00; }

if($ref11==$ref15){
$total_11 = $linha[94]; }else{$total_11 = 0.00; }

if($ref12==$ref15){
$total_12 = $linha[101]; }else{$total_12 = 0.00; }

if($ref13==$ref15){
$total_13 = $linha[108]; }else{$total_13 = 0.00; }

if($ref14==$ref15){
$total_14 = $linha[115]; }else{$total_14 = 0.00; }

$total_15 = $linha[122]; 


}


$somatotalref15 = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6+$total_7+$total_8+$total_9+$total_10+$total_11+$total_12+$total_13+$total_14+$total_15;
$somatotalref15_formatada = number_format($somatotalref15, 2, ",", ".");

	  
if($categoria_15<>"" & $ref15<>$ref14){
echo"R$ $somatotalref15_formatada";
}

?></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"><strong>TOTAL GERAL DO OR&Ccedil;AMENTO</strong></td>
    <td colspan="2"><div align="center"><strong><font size="5"><? echo "R$ $total_geral_cliente_formatado"; ?></font></strong></div></td>
    </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"><strong>TOTAL  CUSTO DO OR&Ccedil;AMENTO</strong></td>
    <td colspan="2"><div align="center">
      <strong>
      <font size="5">
      <? 
$custoitem1 = $preco_compra_1*$quant1;	
$custoitem2 = $preco_compra_2*$quant2;	
$custoitem3 = $preco_compra_3*$quant3;	
$custoitem4 = $preco_compra_4*$quant4;	
$custoitem5 = $preco_compra_5*$quant5;	
$custoitem6 = $preco_compra_6*$quant6;	
$custoitem7 = $preco_compra_7*$quant7;	
$custoitem8 = $preco_compra_8*$quant8;	
$custoitem9 = $preco_compra_9*$quant9;	
$custoitem10 = $preco_compra_10*$quant10;	
$custoitem11 = $preco_compra_11*$quant11;	
$custoitem12 = $preco_compra_12*$quant12;	
$custoitem13 = $preco_compra_13*$quant13;	
$custoitem14 = $preco_compra_14*$quant14;	
$custoitem15 = $preco_compra_15*$quant15;	
	
$totalcustofabricacao = $custoitem1+$custoitem2+$custoitem3+$custoitem4+$custoitem5+$custoitem6+$custoitem7+$custoitem8+$custoitem9+$custoitem10+$custoitem11+$custoitem12+$custoitem13+$custoitem14+$custoitem15;

$totalcustofabricacao_formatada = number_format($totalcustofabricacao, 2, ",", ".");


echo "R$ ".$totalcustofabricacao_formatada;	
	
	?></font></strong></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2"><strong>SALDO</strong></td>
    <td colspan="2"><div align="center"><strong>
      <font size="5">
      <? 
	
$saldo = $total_geral_cliente-$totalcustofabricacao;
$saldo_formatada = number_format($saldo, 2, ",", ".");

echo "R$ ".$saldo_formatada;	
	
	 ?>
      </font></strong></div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td width="12%"><strong>Condi&ccedil;&otilde;es de Pagto: Parcelamento em
        <font color="#0000FF"><strong><? echo $quantparc_cliente; ?></strong></font> 
        vezes. Modo do parcelamento
        <font color="#0000FF"><strong><? echo $condpagto_cliente; ?></strong></font>      <font color="#0000FF">
      <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
      <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento_op; ?>">
      <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento2" value="<? echo $cidade_estabelecimento_op; ?>">
      <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento_op; ?>">
      <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento_op; ?>">
      </font></strong></td>
    </tr>
</table>
<p>Observa&ccedil;&otilde;es <br>
  <strong><font color="#0000FF"><strong><? echo $obs_cliente; ?></strong></font></strong>
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>

</form>
<p></p>
<p></p>
</body>
</html>
