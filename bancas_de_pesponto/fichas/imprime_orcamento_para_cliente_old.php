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



$total_geral_cliente = $linha[123];
$quantparc_cliente = $linha[124];
$condpagto_cliente = $linha[125];
$obs_cliente = $linha[126];

$operador_cliente = $linha[142];
}
$total_geral_cliente_formatada = number_format($total_geral_cliente, 2, ",", ".");

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
$email_vendas = $linha[42];


}
?>
</p>
<form name="form1" method="post" action="grava_orcamento.php">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
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

//printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='150' ></a>");
 } ?>
                  </div></td>
          <td width="93%"><div align="center"><strong><font size="2"><? echo $razaosocial; ?><br>
            <? echo $endereco." "; ?><? echo "Nº ".$numero; ?>,  <? echo $bairro; ?>,  <? echo $cidade." "; ?> <? echo $estado; ?><br>
            Site: <? echo $site; ?> E-Mail: <? echo $email_vendas; ?><br>
            TEL: <? echo $telefone; ?></font></strong></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>OR&Ccedil;AMENTO</strong> <strong>N&ordm; <font color="#0000FF" size="2"><? echo $codigo_orcamento; ?></font></strong></div></td>
  </tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
      
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
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><strong><font size="2">Data Or&ccedil;amento:</font></strong></td>
        <td><strong><font color="#0000FF" size="2"><? echo $dataorcamento_cliente; ?> - <? echo $horaorcamento_cliente; ?>
              <input name="dataorcamento" type="hidden" id="dataorcamento" value="<? echo date('d-m-Y'); ?>">
              <input name="horaorcamento" type="hidden" id="horaorcamento" value="<? echo date('H:i:s'); ?>">
        </font></strong></td>
      </tr>
      
    </table></td>
</tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>PEÇAS</strong></div></td>
    <td><div align="center"><strong>DESCRIÇÃO</strong></div></td>
    <td><div align="center"><strong>REFERÊNCIA</strong></div></td>
    <td><div align="center"><strong>TOTAL POR REFERÊNCIA</strong></div></td>
    </tr>
          <?
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_1 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$item1 = $linha[18];
$categoria_1 = $linha[19];
$ref1 = $linha[20];
$preco_compra_1 = $linha[21];
$quant1 = $linha[22];
$preco1 = $linha[23];
$total1 = $linha[24];
$quantpecas1 = $linha[127];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_2 = 'laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item2 = $linha[25];
$categoria_2 = $linha[26];
$ref2 = $linha[27];
$preco_compra_2 = $linha[28];
$quant2 = $linha[29];
$preco2 = $linha[30];
$total2 = $linha[31];
$quantpecas2 = $linha[128];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_3 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item3 = $linha[32];
$categoria_3 = $linha[33];
$ref3 = $linha[34];
$preco_compra_3 = $linha[35];
$quant3 = $linha[36];
$preco3 = $linha[37];
$total3 = $linha[38];
$quantpecas3 = $linha[129];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_4 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item4 = $linha[39];
$categoria_4 = $linha[40];
$ref4 = $linha[41];
$preco_compra_4 = $linha[42];
$quant4 = $linha[43];
$preco4 = $linha[44];
$total4 = $linha[45];
$quantpecas4 = $linha[130];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_5 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item5 = $linha[46];
$categoria_5 = $linha[47];
$ref5 = $linha[48];
$preco_compra_5 = $linha[49];
$quant5 = $linha[50];
$preco5 = $linha[51];
$total5 = $linha[52];
$quantpecas5 = $linha[131];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_6 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item6 = $linha[53];
$categoria_6 = $linha[54];
$ref6 = $linha[55];
$preco_compra_6 = $linha[56];
$quant6 = $linha[57];
$preco6 = $linha[58];
$total6 = $linha[59];
$quantpecas6 = $linha[132];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_7 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item7 = $linha[60];
$categoria_7 = $linha[61];
$ref7 = $linha[62];
$preco_compra_7 = $linha[63];
$quant7 = $linha[64];
$preco7 = $linha[65];
$total7 = $linha[66];
$quantpecas7 = $linha[133];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_8 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item8 = $linha[67];
$categoria_8 = $linha[68];
$ref8 = $linha[69];
$preco_compra_8 = $linha[70];
$quant8 = $linha[71];
$preco8 = $linha[72];
$total8 = $linha[73];
$quantpecas8 = $linha[134];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_9 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item9 = $linha[74];
$categoria_9 = $linha[75];
$ref9 = $linha[76];
$preco_compra_9 = $linha[77];
$quant9 = $linha[78];
$preco9 = $linha[79];
$total9 = $linha[80];
$quantpecas9 = $linha[135];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_10 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item10 = $linha[81];
$categoria_10 = $linha[82];
$ref10 = $linha[83];
$preco_compra_10 = $linha[84];
$quant10 = $linha[85];
$preco10 = $linha[86];
$total10 = $linha[87];
$quantpecas10 = $linha[136];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_11 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item11 = $linha[88];
$categoria_11 = $linha[89];
$ref11 = $linha[90];
$preco_compra_11 = $linha[91];
$quant11 = $linha[92];
$preco11 = $linha[93];
$total11 = $linha[94];
$quantpecas11 = $linha[137];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_12 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item12 = $linha[95];
$categoria_12 = $linha[96];
$ref12 = $linha[97];
$preco_compra_12 = $linha[98];
$quant12 = $linha[99];
$preco12 = $linha[100];
$total12 = $linha[101];
$quantpecas12 = $linha[138];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_13 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item13 = $linha[102];
$categoria_13 = $linha[103];
$ref13 = $linha[104];
$preco_compra_13 = $linha[105];
$quant13 = $linha[106];
$preco13 = $linha[107];
$total13 = $linha[108];
$quantpecas13 = $linha[139];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_14 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item14 = $linha[109];
$categoria_14 = $linha[110];
$ref14 = $linha[111];
$preco_compra_14 = $linha[112];
$quant14 = $linha[113];
$preco14 = $linha[114];
$total14 = $linha[115];
$quantpecas14 = $linha[140];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_15 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item15 = $linha[116];
$categoria_15 = $linha[117];
$ref15 = $linha[118];
$preco_compra_15 = $linha[119];
$quant15 = $linha[120];
$preco15 = $linha[121];
$total15 = $linha[122];
$quantpecas15 = $linha[141];

}


?>




<?

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
echo"<tr><td><div align='center'>$quantpecas1</div></td><td><div align='center'>$item1</div></td><td><div align='center'>$ref1</div></td><td><div align='center'>R$ $somatotalref1_formatada</div></td>";
}

?>

      <?

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


if($categoria_2<>""){
echo"<tr><td><div align='center'>$quantpecas2</div></td><td><div align='center'>$item2</div></td><td><div align='center'>$ref2</div></td><td><div align='center'>R$ $somatotalref2_formatada</div></td>";
}
?>
  
 
 
       <?
	   
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

	   
if($categoria_3<>""){
echo"<tr><td><div align='center'>$quantpecas3</div></td><td><div align='center'>$item3</div></td><td><div align='center'>$ref3</div></td><td><div align='center'>R$ $somatotalref3_formatada</div></td>";
}

?>
 
      <?
	  
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

	  
if($categoria_4<>""){
echo"<tr><td><div align='center'>$quantpecas4</div></td><td><div align='center'>$item4</div></td><td><div align='center'>$ref4</div></td><td><div align='center'>R$ $somatotalref4_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_5<>""){
echo"<tr><td><div align='center'>$quantpecas5</div></td><td><div align='center'>$item5</div></td><td><div align='center'>$ref5</div></td><td><div align='center'>R$ $somatotalref5_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_6<>""){
echo"<tr><td><div align='center'>$quantpecas6</div></td><td><div align='center'>$item6</div></td><td><div align='center'>$ref6</div></td><td><div align='center'>R$ $somatotalref6_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_7<>""){
echo"<tr><td><div align='center'>$quantpecas7</div></td><td><div align='center'>$item7</div></td><td><div align='center'>$ref7</div></td><td><div align='center'>R$ $somatotalref7_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_8<>""){
echo"<tr><td><div align='center'>$quantpecas8</div></td><td><div align='center'>$item8</div></td><td><div align='center'>$ref8</div></td><td><div align='center'>R$ $somatotalref8_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_9<>""){
echo"<tr><td><div align='center'>$quantpecas9</div></td><td><div align='center'>$item9</div></td><td><div align='center'>$ref9</div></td><td><div align='center'>R$ $somatotalref9_formatada</div></td>";
}

?>

      <?
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

	  
if($categoria_10<>""){
echo"<tr><td><div align='center'>$quantpecas10</div></td><td><div align='center'>$item10</div></td><td><div align='center'>$ref10</div></td><td><div align='center'>R$ $somatotalref10_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_11<>""){
echo"<tr><td><div align='center'>$quantpecas11</div></td><td><div align='center'>$item11</div></td><td><div align='center'>$ref11</div></td><td><div align='center'>R$ $somatotalref11_formatada</div></td>";
}

?>

      <?
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

	  
if($categoria_12<>""){
echo"<tr><td><div align='center'>$quantpecas12</div></td><td><div align='center'>$item12</div></td><td><div align='center'>$ref12</div></td><td><div align='center'>R$ $somatotalref12_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_13<>""){
echo"<tr><td><div align='center'>$quantpecas13</div></td><td><div align='center'>$item13</div></td><td><div align='center'>$ref13</div></td><td><div align='center'>R$ $somatotalref13_formatada</div></td>";
}

?>

      <?
	  
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

	  
if($categoria_14<>""){
echo"<tr><td><div align='center'>$quantpecas14</div></td><td><div align='center'>$item14</div></td><td><div align='center'>$ref14</div></td><td><div align='center'>R$ $somatotalref14_formatada</div></td>";
}

?>

      <?
	  
	  
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

	  
if($categoria_15<>""){
echo"<tr><td><div align='center'>$quantpecas15</div></td><td><div align='center'>$item15</div></td><td><div align='center'>$ref15</div></td><td><div align='center'>R$ $somatotalref15_formatada</div></td>";
}

?>
    <tr><td></td><td></td><td></td><td><div align="center"><strong>TOTAL DO ORÇAMENTO<br></strong><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
	<? echo "R$ ".$total_geral_cliente_formatada; ?></strong></font></strong></font></strong></div></td></tr>
</table>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><div align="center">
      <p><font size="4"><strong>Observações</strong></font><br>
          <strong><font color="#0000FF"><strong><font size="4"><? echo $obs_cliente;  ?></font></strong></font></strong></p>
      </div></td>
  </tr>
</table>

<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
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
</table><p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">ASS:_______________________________________________________</div></td>
  </tr>
</table>
<p><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<form name="form1" method="post" action="grava_orcamento.php">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td><div align="center">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td width="7%"><div align="left">
              <?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

//printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='150' ></a>");
 } ?>
            </div></td>
            <td width="93%"><div align="center"><strong><font size="2"><? echo $razaosocial; ?><br>
                          <? echo $endereco." "; ?><? echo "N&ordm; ".$numero; ?>, <? echo $bairro; ?>, <? echo $cidade." "; ?> <? echo $estado; ?><br>
              Site: <? echo $site; ?> E-Mail: <? echo $email_vendas; ?><br>
              TEL: <? echo $telefone; ?></font></strong></div></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><div align="center"><strong>OR&Ccedil;AMENTO</strong> <strong>N&ordm; <font color="#0000FF" size="2"><? echo $codigo_orcamento; ?></font></strong></div></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="18%"><strong><font size="2">C&oacute;digo:</font></strong></td>
          <td width="41%"><strong><font color="#0000FF" size="2"><? echo $codigo_cliente; ?>
                    <input name="codigo_cliente2" type="hidden" id="codigo_cliente2" value="<? echo $codigo_cliente; ?>">
          </font></strong></td>
          <td width="15%"><strong><font size="2">Comprador:</font></strong></td>
          <td width="26%"><strong><font color="#0000FF" size="2"><? echo $comprador_cliente; ?>
                    <input name="comprador2" type="hidden" id="comprador2" value="<? echo $comprador_cliente; ?>">
          </font></strong></td>
        </tr>
        <tr>
          <td><strong><font size="2">Raz&atilde;o Social:</font></strong></td>
          <td><strong><font color="#0000FF" size="2"><? echo $razaosocial_cliente; ?>
                    <input name="razaosocial2" type="hidden" id="razaosocial2" value="<? echo $razaosocial_cliente; ?>">
          </font></strong></td>
          <td><strong><font size="2">Celular:</font></strong></td>
          <td><strong><font color="#0000FF" size="2"><? echo $celular_cliente; ?>
                    <input name="celular2" type="hidden" id="celular2" value="<? echo $celular_cliente; ?>">
          </font></strong></td>
        </tr>
        <tr>
          <td><strong><font size="2">Nome Fantasia:</font></strong></td>
          <td><strong><font color="#0000FF" size="2"><? echo $nfantasia_cliente; ?>
                    <input name="nfantasia2" type="hidden" id="nfantasia2" value="<? echo $nfantasia_cliente; ?>">
          </font></strong></td>
          <td><strong><font size="2">E-Mail:</font></strong></td>
          <td><strong><font color="#0000FF" size="2"><? echo $email_cliente; ?>
                    <input name="email2" type="hidden" id="email2" value="<? echo $email_cliente; ?>">
          </font></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><strong><font size="2">Data Or&ccedil;amento:</font></strong></td>
          <td><strong><font color="#0000FF" size="2"><? echo $dataorcamento_cliente; ?> - <? echo $horaorcamento_cliente; ?>
                    <input name="dataorcamento2" type="hidden" id="dataorcamento2" value="<? echo date('d-m-Y'); ?>">
                    <input name="horaorcamento2" type="hidden" id="horaorcamento2" value="<? echo date('H:i:s'); ?>">
          </font></strong></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><div align="center"><strong>PE&Ccedil;AS</strong></div></td>
      <td><div align="center"><strong>DESCRI&Ccedil;&Atilde;O</strong></div></td>
      <td><div align="center"><strong>REFER&Ecirc;NCIA</strong></div></td>
      <td><div align="center"><strong>TOTAL POR REFER&Ecirc;NCIA</strong></div></td>
    </tr>
    <?
$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_1 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$item1 = $linha[18];
$categoria_1 = $linha[19];
$ref1 = $linha[20];
$preco_compra_1 = $linha[21];
$quant1 = $linha[22];
$preco1 = $linha[23];
$quantpecas1 = $linha[127];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_2 = 'laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item2 = $linha[25];
$categoria_2 = $linha[26];
$ref2 = $linha[27];
$preco_compra_2 = $linha[28];
$quant2 = $linha[29];
$preco2 = $linha[30];
$quantpecas2 = $linha[128];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_3 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item3 = $linha[32];
$categoria_3 = $linha[33];
$ref3 = $linha[34];
$preco_compra_3 = $linha[35];
$quant3 = $linha[36];
$preco3 = $linha[37];
$quantpecas3 = $linha[129];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_4 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item4 = $linha[39];
$categoria_4 = $linha[40];
$ref4 = $linha[41];
$preco_compra_4 = $linha[42];
$quant4 = $linha[43];
$preco4 = $linha[44];
$total4 = $linha[45];
$quantpecas4 = $linha[130];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_5 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item5 = $linha[46];
$categoria_5 = $linha[47];
$ref5 = $linha[48];
$preco_compra_5 = $linha[49];
$quant5 = $linha[50];
$preco5 = $linha[51];
$total5 = $linha[52];
$quantpecas5 = $linha[131];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_6 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item6 = $linha[53];
$categoria_6 = $linha[54];
$ref6 = $linha[55];
$preco_compra_6 = $linha[56];
$quant6 = $linha[57];
$preco6 = $linha[58];
$total6 = $linha[59];
$quantpecas6 = $linha[132];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_7 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item7 = $linha[60];
$categoria_7 = $linha[61];
$ref7 = $linha[62];
$preco_compra_7 = $linha[63];
$quant7 = $linha[64];
$preco7 = $linha[65];
$total7 = $linha[66];
$quantpecas7 = $linha[133];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_8 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item8 = $linha[67];
$categoria_8 = $linha[68];
$ref8 = $linha[69];
$preco_compra_8 = $linha[70];
$quant8 = $linha[71];
$preco8 = $linha[72];
$total8 = $linha[73];
$quantpecas8 = $linha[134];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_9 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item9 = $linha[74];
$categoria_9 = $linha[75];
$ref9 = $linha[76];
$preco_compra_9 = $linha[77];
$quant9 = $linha[78];
$preco9 = $linha[79];
$total9 = $linha[80];
$quantpecas9 = $linha[135];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_10 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item10 = $linha[81];
$categoria_10 = $linha[82];
$ref10 = $linha[83];
$preco_compra_10 = $linha[84];
$quant10 = $linha[85];
$preco10 = $linha[86];
$total10 = $linha[87];
$quantpecas10 = $linha[136];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_11 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item11 = $linha[88];
$categoria_11 = $linha[89];
$ref11 = $linha[90];
$preco_compra_11 = $linha[91];
$quant11 = $linha[92];
$preco11 = $linha[93];
$total11 = $linha[94];
$quantpecas11 = $linha[137];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_12 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item12 = $linha[95];
$categoria_12 = $linha[96];
$ref12 = $linha[97];
$preco_compra_12 = $linha[98];
$quant12 = $linha[99];
$preco12 = $linha[100];
$total12 = $linha[101];
$quantpecas12 = $linha[138];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_13 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item13 = $linha[102];
$categoria_13 = $linha[103];
$ref13 = $linha[104];
$preco_compra_13 = $linha[105];
$quant13 = $linha[106];
$preco13 = $linha[107];
$total13 = $linha[108];
$quantpecas13 = $linha[139];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_14 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item14 = $linha[109];
$categoria_14 = $linha[110];
$ref14 = $linha[111];
$preco_compra_14 = $linha[112];
$quant14 = $linha[113];
$preco14 = $linha[114];
$total14 = $linha[115];
$quantpecas14 = $linha[140];

}

$sql = "SELECT * FROM orcamentos where codigo_orcamento = '$codigo_orcamento' and categoria_15 = 'Laminas' limit 1 ";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$item15 = $linha[116];
$categoria_15 = $linha[117];
$ref15 = $linha[118];
$preco_compra_15 = $linha[119];
$quant15 = $linha[120];
$preco15 = $linha[124];
$quantpecas15 = $linha[141];

}


?>
    <?

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
echo"<tr><td><div align='center'>$quantpecas1</div></td><td><div align='center'>$item1</div></td><td><div align='center'>$ref1</div></td><td><div align='center'>R$ $somatotalref1_formatada</div></td>";
}

?>
    <?

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


if($categoria_2<>""){
echo"<tr><td><div align='center'>$quantpecas2</div></td><td><div align='center'>$item2</div></td><td><div align='center'>$ref2</div></td><td><div align='center'>R$ $somatotalref2_formatada</div></td>";
}
?>
    <?
	   
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

	   
if($categoria_3<>""){
echo"<tr><td><div align='center'>$quantpecas3</div></td><td><div align='center'>$item3</div></td><td><div align='center'>$ref3</div></td><td><div align='center'>R$ $somatotalref3_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_4<>""){
echo"<tr><td><div align='center'>$quantpecas4</div></td><td><div align='center'>$item4</div></td><td><div align='center'>$ref4</div></td><td><div align='center'>R$ $somatotalref4_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_5<>""){
echo"<tr><td><div align='center'>$quantpecas5</div></td><td><div align='center'>$item5</div></td><td><div align='center'>$ref5</div></td><td><div align='center'>R$ $somatotalref5_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_6<>""){
echo"<tr><td><div align='center'>$quantpecas6</div></td><td><div align='center'>$item6</div></td><td><div align='center'>$ref6</div></td><td><div align='center'>R$ $somatotalref6_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_7<>""){
echo"<tr><td><div align='center'>$quantpecas7</div></td><td><div align='center'>$item7</div></td><td><div align='center'>$ref7</div></td><td><div align='center'>R$ $somatotalref7_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_8<>""){
echo"<tr><td><div align='center'>$quantpecas8</div></td><td><div align='center'>$item8</div></td><td><div align='center'>$ref8</div></td><td><div align='center'>R$ $somatotalref8_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_9<>""){
echo"<tr><td><div align='center'>$quantpecas9</div></td><td><div align='center'>$item9</div></td><td><div align='center'>$ref9</div></td><td><div align='center'>R$ $somatotalref9_formatada</div></td>";
}

?>
    <?
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

	  
if($categoria_10<>""){
echo"<tr><td><div align='center'>$quantpecas10</div></td><td><div align='center'>$item10</div></td><td><div align='center'>$ref10</div></td><td><div align='center'>R$ $somatotalref10_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_11<>""){
echo"<tr><td><div align='center'>$quantpecas11</div></td><td><div align='center'>$item11</div></td><td><div align='center'>$ref11</div></td><td><div align='center'>R$ $somatotalref11_formatada</div></td>";
}

?>
    <?
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

	  
if($categoria_12<>""){
echo"<tr><td><div align='center'>$quantpecas12</div></td><td><div align='center'>$item12</div></td><td><div align='center'>$ref12</div></td><td><div align='center'>R$ $somatotalref12_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_13<>""){
echo"<tr><td><div align='center'>$quantpecas13</div></td><td><div align='center'>$item13</div></td><td><div align='center'>$ref13</div></td><td><div align='center'>R$ $somatotalref13_formatada</div></td>";
}

?>
    <?
	  
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

	  
if($categoria_14<>""){
echo"<tr><td><div align='center'>$quantpecas14</div></td><td><div align='center'>$item14</div></td><td><div align='center'>$ref14</div></td><td><div align='center'>R$ $somatotalref14_formatada</div></td>";
}

?>
    <?
	  
	  
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

	  
if($categoria_15<>""){
echo"<tr><td><div align='center'>$quantpecas15</div></td><td><div align='center'>$item15</div></td><td><div align='center'>$ref15</div></td><td><div align='center'>R$ $somatotalref15_formatada</div></td>";
}

?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><div align="center"><strong>TOTAL DO OR&Ccedil;AMENTO<br>
      </strong><strong><font color="#0000FF"><strong><font color="#0000FF"><strong> <? echo "R$ ".$total_geral_cliente_formatada; ?></strong></font></strong></font></strong></div></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><div align="center">
        <p><font size="4"><strong>Observa&ccedil;&otilde;es</strong></font><br>
              <strong><font color="#0000FF"><strong><font size="4"><? echo $obs_cliente;  ?></font></strong></font></strong></p>
      </div></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="12%"><strong>Condi&ccedil;&otilde;es de Pagto: Parcelamento em <font color="#0000FF"><strong><? echo $quantparc_cliente; ?></strong></font> vezes. Modo do parcelamento <font color="#0000FF"><strong><? echo $condpagto_cliente; ?></strong></font> <font color="#0000FF">
        <input name="operador2" type="hidden" id="operador" value="<? echo $nome_op; ?>">
        <input name="cel_operador2" type="hidden" id="cel_operador2" value="<? echo $celular_op; ?>">
        <input name="email_operador2" type="hidden" id="email_operador2" value="<? echo $email_op; ?>">
        <input name="estabelecimento2" type="hidden" id="estabelecimento2" value="<? echo $estabelecimento_op; ?>">
        <input name="cidade_estabelecimento2" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estabelecimento_op; ?>">
        <input name="tel_estabelecimento2" type="hidden" id="tel_estabelecimento2" value="<? echo $tel_estabelecimento_op; ?>">
        <input name="email_estabelecimento2" type="hidden" id="email_estabelecimento2" value="<? echo $email_estabelecimento_op; ?>">
      </font></strong></td>
    </tr>
  </table>
  <p>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">ASS:_______________________________________________________</div></td>
    </tr>
  </table>
  <p>
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p></p>
<p></p>
</body>
</html>
