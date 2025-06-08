<?
ini_set('default_charset','UTF8_general_mysql500_ci');
?>
<html>

<head>

<title>PESQUISA DE VE&Iacute;CULO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require 'conect/conect.php';





$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$background = $linha[1];
	
}

?>





<body background="imagens_sistema/<? echo $background; ?>" bgproperties="fixed">

  


<?

//$placa = $_GET['placa'];


$vg = $_GET['placa'];


$placa = $vg;



$sql = "SELECT * FROM veiculos where placa = '$placa' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];

$datacadastro = $linha[1];

$horacadastro = $linha[2];

//$operador = $linha[3];

$cel_operador = $linha[4];

$email_operador = $linha[5];

$estabelecimento = $linha[6];

$cidade_estabelecimento = $linha[7];

$tel_estabelecimento = $linha[8];

$email_estabelecimento = $linha[9];

$concessionaria = $linha[10];

$cnpj_concessionaria = $linha[11];

$tel_concessionaria = $linha[12];

$email_concessionaria = $linha[13];

$cidade_concessionaria = $linha[14];

$estado_concessionaria = $linha[15];

$veiculo = $linha[16];

$ano = $linha[17];

$modelo = $linha[18];

$chassi = $linha[19];

$renavam = $linha[20];

$placa = $linha[21];

$obs_veiculo = $linha[22];

$dia_inicio_contrato = $linha[23];

$mes_inicio_contrato = $linha[24];

$ano_inicio_contrato = $linha[25];

$dia_termino_contrato = $linha[26];

$mes_termino_contrato = $linha[27];

$ano_termino_contrato = $linha[28];

$nome = $linha[29];

$corveiculo = $linha[30];

$data_nasc = $linha[31];

$mes_nasc = $linha[32];

$sexo = $linha[33];

$estadocivil = $linha[34];

$cpf = $linha[35];

$rg = $linha[36];

$orgao = $linha[37];

$emissao = $linha[38];

$pai = $linha[39];

$mae = $linha[40];

$endereco = $linha[41];

$numero = $linha[42];

$bairro = $linha[43];

$complemento = $linha[44];

$cidade = $linha[45];

$estado = $linha[46];

$cep = $linha[47];

$telefone = $linha[48];

$celular = $linha[49];

$email = $linha[50];

$obs = $linha[51];



$status = $linha[61];



}

?>




<table width="100%" border="0" cellspacing="0">
  <tr>
    <td colspan="4" align="center" background="imagens_sistema/fundocelulas2.png" style="font-size: 36px"><strong>INFORMA&Ccedil;&Otilde;ES DO VE&Iacute;CULO</strong> <? echo $placa; ?></td>
  </tr>
  <tr>
    <td width="17%" style="font-size: 36px">Ve&iacute;culo</td>
    <td width="29%" style="font-size: 36px"><? echo $veiculo; ?></td>
    <td width="22%" style="font-size: 36px">Placas</td>
    <td width="32%" style="font-size: 36px"><? echo $placa; ?></td>
  </tr>
  <tr>
    <td style="font-size: 36px">Ano</td>
    <td style="font-size: 36px"><? echo $ano; ?></td>
    <td style="font-size: 36px">Modelo</td>
    <td style="font-size: 36px"><? echo $modelo; ?></td>
  </tr>
  <tr>
    <td style="font-size: 36px">Cor</td>
    <td style="font-size: 36px"><? echo $corveiculo; ?></td>
    <td style="font-size: 36px">Renavam</td>
    <td style="font-size: 36px"><? echo $renavam; ?></td>
  </tr>
  <tr>
    <td style="font-size: 36px">Chassi</td>
    <td style="font-size: 36px"><? echo $chassi; ?></td>
    <td style="font-size: 36px">&nbsp;</td>
    <td style="font-size: 36px">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" style="font-size: 36px" align="center">Observacoes</td>
  </tr>
  <tr>
    <td colspan="4" style="font-size: 36px" align="center"><? echo $obs_veiculo; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
	
	<?
$sql = "SELECT * FROM ocorrencias where placa = '$placa' order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cod_ocorrencia = $linha[0];
$placa = $linha[1];

$renavam = $linha[2];
$chassi = $linha[3];
$condutor = $linha[4];

$concessionaria = $linha[5];
	$datamanutencao = $linha[6];
	$horamanutencao = $linha[7];
	$municipio = $linha[8];
	$tipomanutencao = $linha[9];
	$detalhamento = $linha[10];
	$agente = $linha[11];
	$corveiculo = $linha[12];
	
	$horimetro = $linha[13];
$km = $linha[14];
$valormanutencao = $linha[15];
$descontar = $linha[16];
	$fornecedor = $linha[21];
	$nf = $linha[22];
	$link_nf = $linha[23];
	$operador_manutencao = $linha[24];
	  
	  ?>
<table width="100%" border="0" cellspacing="0">
  <tbody>
    <tr>
      <th colspan="4" background="imagens_sistema/fundocelulas2.png" style="font-size: 36px" scope="col">MANUTENCOES REALIZADAS</th>
    </tr>
	  
	  
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Data</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Hora</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Condutor</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td width="26%" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $datamanutencao; ?></td>
      <td width="23%" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $horamanutencao; ?></td>
      <td width="21%" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $condutor; ?></td>
      <td width="30%" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Municipio</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Empresa</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Fornecedor</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $municipio; ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $concessionaria; ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $fornecedor; ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Tipo  Manutencao</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">KM</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Horimetro</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 20px"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $tipomanutencao; ?></font></strong></font></strong></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $km; ?></font></strong></font></strong></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $horimetro; ?></font></strong></font></strong></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Operador</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">NF/Doc</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">Valor</td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 20px"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo $operador_manutencao; ?></font></strong></font></strong></font></strong></font></strong></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo "<a href='$link_nf' target='_blank'>$nf</a>"; 
		  

		  
		  
		  ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><strong><font color="#0000FF"><strong><font color="#0000FF"><? echo "$valormanutencao"; ?></font></strong></font></strong></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
	  <?
$sql2 = "SELECT * FROM nfs_manutencao where placa = '$placa' and cod_ocorrencia = '$cod_ocorrencia'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {

$numero_nf = $linha[2];

$link_da_nf = $linha[9];
$valor_da_nf = $linha[10];
	
	?>
    <tr>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 20px"></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo "<a href='$link_da_nf' target='_blank'>$numero_nf</a>"; ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo "$valor_da_nf"; ?></td>
      <td background="imagens_sistema/fundocelulas1.png" style="font-size: 36px">&nbsp;</td>
    </tr>
	  <? } ?>
    <tr>
      <td colspan="4" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px" align="center">Detalhamento</td>
    </tr>
    <tr>
      <td colspan="4" background="imagens_sistema/fundocelulas1.png" style="font-size: 36px"><? echo $detalhamento; ?></td>
    </tr>
    <tr>
      <td style="font-size: 36px">&nbsp;</td>
      <td colspan="3" style="font-size: 36px">&nbsp;</td>
    </tr>
	  
  </tbody>
</table>
	<? } ?>
<p>&nbsp;</p>
</body>

</html>

