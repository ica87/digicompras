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

<title>LISTANDO TODAS AS PROPOSTAS DA LOJA</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style2 {

	color: #0000FF;

	font-weight: bold;

}

.style3 {

	font-size: 10px;

	font-weight: bold;

}

.style4 {font-size: 10px}

-->

</style>

</head>

<?



require '../../../conect/conect.php';

?>



<?
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];

$mes_ano = $_POST['mes_ano'];

$status = $_POST['status'];




$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>











      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <form name="form1" method="post" action="../index.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <strong><font color="#0000FF">

        <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $estabelecimento_proposta; ?>">

        </font></strong>        <input type="submit" name="Submit2" value="Voltar">

</form>

<table width="100%"  border="0">

<tr>

          <td colspan="10"><div align="left"><span class="style2">


          Listando todas as propostas da loja:</span> <span class="style2"><? echo $estabelecimento_proposta; ?>

          

          </span></div></td>

        </tr>

        <tr>

          <td width="7%"><div align="right"></div></td>

          <td width="10%"><div align="center">Total Loja</div></td>

          <td width="8%"><div align="center">

            <?

$sql = "select sum(valor_liberado) as total from propostas_veiculos where estabelecimento_proposta = '$estabelecimento_proposta' and mes_ano = '$mes_ano' and status = '$status'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </div></td>

          <td width="17%">&nbsp;</td>

          <td width="11%">&nbsp;</td>

          <td width="9%">&nbsp;</td>

          <td width="4%">&nbsp;</td>

          <td width="8%">&nbsp;</td>

          <td width="16%"><div align="center">

          </div></td>

          <td width="10%">&nbsp;</td>

        </tr>

        <tr>

          <td>&nbsp;</td>

          <td><div align="center">Total Comiss&atilde;o </div></td>

          <td><div align="center">

              <?

$sql = "select sum(comissao_op) as total from propostas_veiculos where estabelecimento_proposta = '$estabelecimento_proposta' and mes_ano = '$mes_ano' and status = '$status'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </div></td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

        </tr>

      </table>

<br><br>

<table width="100%"  border="0">

              <tr>

                <td>

</td>

              </tr>

</table>            

      <?
$sql = "SELECT * FROM propostas_veiculos where estabelecimento_proposta = '$estabelecimento_proposta' and mes_ano = '$mes_ano' and status = '$status'  order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];

$dataproposta = $linha[1];

$horaproposta = $linha[2];

$mes_ano = $linha[3];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$tipo = $linha[7];

$tipo_proposta = $linha[8];

$nome = $linha[9];

$tipo_pessoa = $linha[10];

$data_nasc = $linha[11];

$cpf = $linha[12];

$rg = $linha[13];

$orgao = $linha[14];

$emissao = $linha[15];

$sexo = $linha[16];

$estadocivil = $linha[17];

$nacionalidade = $linha[18];

$quant_dependente = $linha[19];

$pai = $linha[20];

$mae = $linha[21];

$conjuge = $linha[22];

$data_nasc_conjuge = $linha[23];

$endereco = $linha[24];

$numero = $linha[25];

$bairro = $linha[26];

$complemento = $linha[27];

$cidade = $linha[28];

$estado = $linha[29];

$cep = $linha[30];

$correspondencia = $linha[31];

$tipo_residencia = $linha[32];

$valor_aluguel = $linha[33];

$tempo_residencia = $linha[34];

$telefone = $linha[35];

$celular = $linha[36];

$tipo_telefone = $linha[37];

$residencia_anterior = $linha[38];

$bairro_anterior = $linha[39];

$cidade_anterior = $linha[40];

$estado_anterior = $linha[41];

$tempo_residencia_anterior = $linha[42];

$email = $linha[43];

$empresa = $linha[44];

$porte_empresa = $linha[45];

$data_admissao = $linha[46];

$inicio_atividade = $linha[47];

$end_empresa = $linha[48];

$numero_empresa = $linha[49];

$complemento_empresa = $linha[50];

$bairro_empresa = $linha[51];

$cep_empresa = $linha[52];

$cidade_empresa = $linha[53];

$estado_empresa = $linha[54];

$telefone_empresa = $linha[55];

$cpt = $linha[56];

$serie = $linha[57];

$cargo = $linha[58];

$natureza_operacao = $linha[59];

$salario = $linha[60];

$atividade_principal = $linha[61];

$data_constituicao = $linha[62];

$cnpj = $linha[63];

$inscr_est = $linha[64];

$tel_contador = $linha[65];

$atividade_anterior = $linha[66];

$data_admissao_anterior = $linha[67];

$data_saida = $linha[68];

$cargo_anterior = $linha[69];

$telefone_empresa_anterior = $linha[70];

$outras_rendas = $linha[71];

$ref_pessoal = $linha[72];

$tel_ref_pessoal = $linha[73];

$ref_pessoal2 = $linha[74];

$tel_ref_pessoal2 = $linha[75];

$ref_comercial = $linha[76];

$tel_ref_comercial = $linha[77];

$ref_banco = $linha[78];

$ref_agencia = $linha[79];

$ref_conta = $linha[80];

$ref_tipo_conta = $linha[81];

$ref_conta_desde = $linha[82];

$cartao_credito = $linha[83];

$automovel = $linha[84];

$valor_automoveis = $linha[85];

$residencia = $linha[86];

$valor_residencia = $linha[87];

$outras_propriedades = $linha[88];

$valor_outras_propriedades = $linha[89];

$veiculo = $linha[90];

$ano_modelo = $linha[91];

$renavam = $linha[92];

$num_portas = $linha[93];

$combustivel = $linha[94];

$placa = $linha[95];

$valor_venda = $linha[96];

$valor_entrada = $linha[97];

$tarifa_cadastro = $linha[98];

$valor_financiar = $linha[99];

$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$vencto_1_parcela = $linha[104];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terc = $linha[107];

//$obs = $linha[108];

$operador = $linha[109];

$cel_operador = $linha[110];

$email_operador = $linha[111];

$estab_pertence = $linha[112];

$cidade_estab_pertence = $linha[113];

$tel_estab_pertence = $linha[114];

$email_estab_pertence = $linha[115];

$operador_alterou = $linha[116];

$cel_operador_alterou = $linha[117];

$email_operador_alterou = $linha[118];

$estab_alterou = $linha[119];

$cidade_estab_alterou = $linha[120];

$tel_estab_alterou = $linha[121];

$email_estab_alterou = $linha[122];

$dataalteracao = $linha[123];

$horaalteracao = $linha[124];

$recebido = $linha[125];

$comissao_op = $linha[126];

$meses = $linha[127];

$trinta = $linha[128];

$quarenta_cinco = $linha[129];

$meses_residencia = $linha[130];

$ddd_tel = $linha[131];

$ddd_cel = $linha[132];

$ddd_tel_empresa = $linha[133];

$ddd_tel_contador = $linha[134];

$ddd_tel_empresa_anterior = $linha[135];

$ddd_ref_pessoal = $linha[136];

$ddd_ref_pessoal2 = $linha[137];

$ddd_ref_comercial = $linha[138];

$digito_agencia = $linha[139];

$digito_conta = $linha[140];

$ano_ref_conta = $linha[141];

$modelo = $linha[142];

$estado_emissao = $linha[143];

$mista = $linha[144];

$parecer_credito = $linha[145];

$bem = $linha[146];

$chassi = $linha[147];






?>            

      <table width="100%"  border="0">

        <tr>

          <td colspan="10"><div align="center"></div></td>

          <td width="12%">&nbsp;</td>
        </tr>

        <tr bgcolor="#CCCCCC">

          <td width="6%"><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td width="5%"><div align="center" class="style3">Data</div></td>

          <td width="5%"><div align="center" class="style4"><strong>Hora</strong></div></td>
          <td width="12%"><div align="center" class="style3">Nome</div></td>
          <td width="11%"><div align="center" class="style3">Loja</div></td>
          <td width="12%"><div align="center" class="style3">Operador</div></td>
          <td width="8%"><div align="center" class="style3">CPF</div></td>
          <td width="9%"><div align="center" class="style3">Valor Financiar</div></td>
          <td width="10%"><div align="center" class="style4"><strong>Telefone / Celular</strong></div></td>

          <td width="10%"><div align="center" class="style3">Status</div></td>
          <td width="12%"><div align="center" class="style3">Cidade</div></td>
        </tr>


       <tr>

          <td valign="top">

            <form action="imprimir_proposta.php" method="post" name="form3" target="_blank" class="style4">

            <div align="center"> <? echo $num_proposta; ?>

                  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
            </div>
          </form></td>

          <td valign="top"><div align="center" class="style4"><? echo $dataproposta; ?></div></td>

          <td valign="top"><div align="center" class="style4"><span class="style4"><? echo $horaproposta; ?></span></div></td>
          <td valign="top"><div align="center"><span class="style4 style4"><? echo $nome; ?></span></div></td>
          <td valign="top"><div align="center" class="style4"><? echo $estabelecimento_proposta; ?></div></td>
          <td valign="top"><div align="center" class="style4"><? echo $operador_atendente; ?></div></td>
          <td valign="top"><div align="center" class="style4"><? echo $cpf; ?></div></td>
          <td valign="top"><div align="center"><span class="style4"></span><span class="style4"><? echo "R$ ".$valor_financiar; ?></span></div></td>
          <td valign="top"><div align="center" class="style4"><span class="style4"><? echo "($ddd_tel)-$telefone \n"."($ddd_cel)-$celular"; ?></span></div></td>

         <td valign="top"><div align="center" class="style4"><? echo $status; ?></div></td>
          <td valign="top"><div align="center" class="style4"><? echo $cidade; ?></div></td>
         <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>


  <? } ?>
       <tr>
         <td colspan="11" valign="top"><div align="center"><span class="style4">
           <textarea name="obs_cli" cols="100" rows="7" readonly="readonly" id="obs_cli">

<?
$hist="(SELECT * FROM observacoes_parecer_credito_veiculos where num_proposta = '$num_proposta' order by codigo desc)";
$res_hist = mysql_query($hist);

while($linha=mysql_fetch_row($res_hist)) {

$data = $linha[3];

$hora = $linha[4];

$obs2 = $linha[5];

$operador2 = $linha[6];

 
echo "$data - "."$hora - "."$operador2 - "."$obs2 \n\n";

}
?>




            </textarea>
         </span></div></td>
</table>
<p>&nbsp;</p>







</body>

</html>

