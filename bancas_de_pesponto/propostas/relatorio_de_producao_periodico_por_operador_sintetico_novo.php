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

<title>RELATORIO DE PRODU&Ccedil;&Atilde;O SINTETICO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style4 {font-size: 18px}

.style5 {font-size: 24px}

.style7 {

	font-size: 9px;

	font-weight: bold;

}

.style8 {font-size: 9px}

.style15 {

	font-size: 10px;

	font-weight: bold;

}

.style17 {font-size: 18px; font-weight: bold; }

-->

</style>

</head>

<?



require '../../conect/conect.php';



$mes_ano = $_POST['mes_ano'];



$dia = date('d');

$mes = date('m');

$ano = date('Y');

$hora = date('H:i:s');



$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];





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

      <form name="form1" method="post" action="informe_operador_para_gerar_relatorio_mensal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Voltar">     

</form>

      <table width="100%"  border="0">

        <tr>

          <td width="26%"><span class="style4"><strong>Valor bruto de opera&ccedil;&atilde;o</strong></span></td>

          <td width="23%"><span class="style4"><strong><span class="style5"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

</strong></strong></span></strong></span></td>

          <td width="28%"><span class="style4"><strong>Total de contratos efetivados</strong></span></td>

          <td width="23%"><span class="style4"><strong><span class="style5"><strong>

            <?

$sql = "select * from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql);

$registros_total = mysql_num_rows($resultado);



echo $registros_total;

?>

          </strong></span></strong></span></td>

        </tr>

        <tr>

          <td><span class="style17">Comiss&atilde;o da Empresa </span></td>

          <td><span class="style4"><strong><span class="style5"><strong><strong>

            <?

$sql = "select sum(valor_a_receber) as total from propostas where dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

</strong></strong></span></strong></span></td>

          <td>&nbsp;</td>

          <td>&nbsp;</td>

        </tr>

      </table>

   <p class="style4">&nbsp;</p>

      <table width="150%"  border="1">

        <tr bgcolor="#ffffff">

          <td><div align="center" class="style7">Nome</div></td>

          <td><div align="center" class="style8"><strong>FLEX 1 </strong></div></td>

          <td><div align="center" class="style8"><strong>FLEX 2 </strong></div></td>

          <td><div align="center" class="style8"><strong>FLEX 3 </strong></div></td>

          <td><div align="center" class="style8"><strong>TOP NORMAL</strong></div></td>

          <td><div align="center" class="style8"><strong>DIAMANTE</strong></div></td>
          <td><div align="center" class="style7">GOL DE PLACA</div></td>
          <td><div align="center" class="style7">R0</div></td>
          <td><div align="center" class="style7">R1</div></td>
          <td><div align="center" class="style8"><strong>R2</strong></div></td>

          <td><div align="center" class="style8"><strong>R3</strong></div></td>

          <td><div align="center" class="style7">R4</div></td>
          <td><div align="center" class="style7">R5</div></td>
          <td><div align="center" class="style8"><strong>R6</strong></div></td>

          <td><div align="center" class="style8"><strong>R7</strong></div></td>
          <td><div align="center" class="style8"><strong>R8</strong></div></td>
          <td><div align="center" class="style8"><strong>R9</strong></div></td>
          <td><div align="center" class="style8"><strong>R10</strong></div></td>
          <td><div align="center" class="style8"><strong>Total</strong></div></td>
        </tr>

            <?

	

$sql = "SELECT * FROM operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_operador = $linha[1];

$meta = $linha[55];



?>            

        <tr>

          <td width="10%" align="center" valign="top">

            <form action="relatorio_de_producao_periodico_por_operador_novo.php" method="post" name="form2">

              <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

              <input name="campanha" type="hidden" id="campanha" value="selecione">

              <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

              <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

              <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">

              <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">

              <input name="mes_final" type="hidden" id="dia_final" value="<? echo $mes_final; ?>">

              <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

              <input type="submit" name="Submit2" value="<? echo $nome_operador; ?>">
            </form>         </td>

          <td width="4%"><div align="center" class="style15">

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 1'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </div></td>

        <td width="4%"><div align="center" class="style15"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 2'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </strong></strong></div></td>

<td width="4%"><div align="center" class="style15"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'FLEX 3'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </strong></strong></div></td>

          <td width="5%"><div align="center" class="style15"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'TOP NORMAL'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?></strong></strong></div></td>

          <td width="5%"><div align="center" class="style8"><strong><strong>
          <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'DIAMANTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?></strong></strong></div></td>
          <td width="5%"><div align="center" class="style8"><strong><strong>
          <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = 'GOL DE PLACA'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?></strong></strong></div></td>
          <td width="5%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '0'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_0 = $linha['total'];

if($valor_total_0==0){

$valor_total_0 = 0; 
echo $valor_total_0; 
}
else{
echo "R$ ".$valor_total_0;
}

?></strong></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '1'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_1 = $linha['total'];



if($valor_total_1==0){

$valor_total_1 = 0; 
echo $valor_total_1; 
}
else{
echo "R$ ".$valor_total_1;
}

?></strong></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '2'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_2 = $linha['total'];



if($valor_total_2==0){

$valor_total_2 = 0; 
echo $valor_total_2; 
}
else{
echo "R$ ".$valor_total_2;
}

?></strong></strong></div></td>

<td width="6%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '3'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_3 = $linha['total'];



if($valor_total_3==0){

$valor_total_3 = 0; 
echo $valor_total_3; 
}
else{
echo "R$ ".$valor_total_3;
}

?></strong></strong></div></td>

<td width="7%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '4'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_4 = $linha['total'];



if($valor_total_4==0){

$valor_total_4 = 0; 
echo $valor_total_4; 
}
else{
echo "R$ ".$valor_total_4;
}

?></strong></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '5'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_5 = $linha['total'];



if($valor_total_5==0){

$valor_total_5 = 0; 
echo $valor_total_5; 
}
else{
echo "R$ ".$valor_total_5;
}

?></strong></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong><strong>
          <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '6'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_6 = $linha['total'];



if($valor_total_6==0){

$valor_total_6 = 0; 
echo $valor_total_6; 
}
else{
echo "R$ ".$valor_total_6;
}

?></strong></strong></div></td>

<td width="6%"><div align="center" class="style15"><strong>
  <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '7'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_7 = $linha['total'];



if($valor_total_7==0){

$valor_total_7 = 0; 
echo $valor_total_7; 
}
else{
echo "R$ ".$valor_total_7;
}

?></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong>
  <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '8'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_8 = $linha['total'];



if($valor_total_8==0){

$valor_total_8 = 0; 
echo $valor_total_8; 
}
else{
echo "R$ ".$valor_total_8;
}

?></strong></div></td>
<td width="5%"><div align="center" class="style15"><strong>
  <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '9'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_9 = $linha['total'];



if($valor_total_9==0){

$valor_total_9 = 0; 
echo $valor_total_9; 
}
else{
echo "R$ ".$valor_total_9;
}

?></strong></div></td>
<td width="6%"><div align="center" class="style15"><strong>
  <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' and r = '10'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_10 = $linha['total'];



if($valor_total_10==0){

$valor_total_10 = 0; 
echo $valor_total_10; 
}
else{
echo "R$ ".$valor_total_10;
}

?></strong></div></td>
<td width="8%"><div align="center" class="style8"><strong><strong>

            <?

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];

$total_geral_da_producao = $valor_total_0+$valor_total_1+$valor_total_2+$valor_total_3+$valor_total_4+$valor_total_5+$valor_total_6+$valor_total_7+$valor_total_8+$valor_total_9+$valor_total_10+$valor_total;

echo "R$ ".$total_geral_da_producao;

?>

          </strong></strong></div></td>
        </tr>

<? } ?>
</table>

<p align="center">

<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email_empresa = $linha[14];

$site = $linha[15];



}



?>

<br>

<span class="style4"><strong><? echo $site; ?></strong></span>

<br>

<? echo $endereco; ?>

,

<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>

<br>

<? echo "Telefone / Fax: ". $telefone." "; ?>

/ <? echo $fax; ?>

<br>

<? echo "E-Mail: ". $email_empresa; ?>

</p>

<p align="center"><span class="style7">

  <? echo $meta_inss; ?>

</span><span class="style4"><strong><span class="style5"><strong>

</strong></span></strong></span> </p>

</body>

</html>

