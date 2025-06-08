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

<title>MAPA DE PRODU&Ccedil;&Atilde;O - ALLCRED FINANCEIRA</title>

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

.style6 {

	color: #FFFFFF;

	font-size: 9px;

}

.style7 {

	font-size: 9px;

	font-weight: bold;

}

.style8 {font-size: 9px}

.style13 {font-size: 14px}

.style14 {font-size: 14px; font-weight: bold; }

-->

</style>

</head>

<?



require '../../conect/conect.php';



$mes_ano_status = $_POST['mes_ano_status'];



$dia = date('d');

$mes = date('m');

$ano = date('Y');

$hora = date('H:i:s');



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

      <form name="form1" method="post" action="menu.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Voltar">

</form>

<p class="style4"><strong>Total monet&aacute;rio realizado  - <span class="style5"><strong>

  <?

$sql = "select sum(valor_credito) as total from propostas where mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_empresa = $linha['total'];

$valor_total_empresa_formatada = number_format($valor_total_empresa, 2, ",", ".");





echo "R$ ".$valor_total_empresa_formatada;

?> </strong></span></strong></p>

      <p><span class="style4"><strong>Total de contratos efetivados - 

            <span class="style5">

            <strong>

            <?

$sql = "select * from propostas where mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql);

$registros_total = mysql_num_rows($resultado);



echo $registros_total;

?>

            </strong></span> </strong></span><br>

    </p>

      <p><strong>Mapa de produ&ccedil;&atilde;o gerado e gravado em </strong> <span class="style14"><? echo $dia."-".$mes."-".$ano ; ?></span><strong> hor&aacute;rio <span class="style13"><? echo $hora; ?></span></strong> </p>

      <?

// a partir desse ponto começa a listagem e gravação dos dados

	

$sql = "SELECT * FROM operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_operador = $linha[1];

$meta = $linha[55];



?>            

        

<?

$sql = "select sum(valor_credito) as total from propostas where operador = '$nome_operador' and mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$soma_total_operador = $linha['total'];



if($soma_total_operador==0){ $total_operador = "0"; }



else{

$total_operador = $soma_total_operador;

}

?>

         

<?

$sql = "select * from propostas where operador = '$nome_operador' and mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);





?>

           

<?

if($meta==0){

$percentual_definido = "0.000";

}

else{

		  

		  $percentual_decimal = bcdiv($total_operador,$meta,5);

		  $percentual_definido = bcmul($percentual_decimal,100,3);

		  

	}	  

		   ?>

<?

$sql = "select sum(meta) as total from operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$meta_total_empresa = $linha['total'];



?>

<?

$sql = "select sum(valor_credito) as total from propostas where mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_empresa_momento = $linha['total'];



?>

<? $percentual_decimal = bcdiv($valor_total_empresa_momento,$meta_total_empresa,5);

		  $percentual_definido_empresa = bcmul($percentual_decimal,100,3);



		  

		   ?>

<?

$comando = "insert into mapa_producao_pagto_cliente(dia,mes,ano,hora,nome_operador,meta,total_operador,registros,percentual_definido,valor_total_empresa,registros_total,meta_total_empresa,valor_total_empresa_momento,percentual_definido_empresa)

 values('$dia','$mes','$ano','$hora','$nome_operador','$meta','$total_operador','$registros','$percentual_definido','$valor_total_empresa','$registros_total','$meta_total_empresa','$valor_total_empresa_momento','$percentual_definido_empresa')";





mysql_query($comando,$conexao);



}

?>







      <table width="100%"  border="1">

        <tr bgcolor="#ffffff">

          <td><div align="center" class="style7">Nome</div></td>

          <td><div align="center" class="style7">Objetivo</div></td>

          <td><div align="center" class="style7">Realizado</div></td>

          <td><div align="center" class="style7">Quant Contratos </div></td>

          <td width="10%"><div align="center" class="style7">% Atingido da meta </div></td>

        </tr>

		      <?



			

$sql = "SELECT * FROM mapa_producao_pagto_cliente where dia = '$dia' and mes = '$mes' and ano = '$ano' and hora = '$hora' order by total_operador desc ";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$dia_gravado = $linha[1];

$mes_gravado = $linha[2];

$ano_gravado = $linha[3];

$hora_gravada = $linha[4];



$nome_operador = $linha[5];

$meta = $linha[6];

$meta_formatada = number_format($meta, 2, ",", ".");

$total_operador = $linha[7];

$total_operador_formatado = number_format($total_operador, 2, ",", ".");

$registros = $linha[8];

$percentual_definido = $linha[9];

$percentual_definido_formatado = number_format($meta, 2, ",", ".");







?>            

        <tr>

          <td width="13%"><div align="center" class="style7 style13"><? echo $nome_operador;?></div></td>

          <td width="6%"><div align="center" class="style14">

	      <? echo "R$ ".$meta_formatada; ?></div></td>

          <td width="6%"><div align="center" class="style14"><? echo "R$ ".$total_operador_formatado; ?>

</div></td>

          <td width="3%"><div align="center" class="style14">

            <? echo $registros; ?> </div></td>

          <td><div align="center" class="style13">

		    <strong><? echo $percentual_definido."%"; ?></strong> </div></td>

</tr>

<? } ?>

        

        <tr>

          <td height="23" colspan="5"><div align="center" class="style8"></div>            

          <div align="left" class="style6">.</div></td>

        <tr>

          <td><span class="style8"><strong>Objetivo  Total </strong>

          </span></td>

          <td><div align="center" class="style8 style13"><strong>

            <?

$sql = "select sum(meta) as total from operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$meta_total = $linha['total'];

$meta_total_formatada = number_format($meta_total, 2, ",", ".");



echo "R$ ".$meta_total_formatada;

?> </strong></div></td>

          <td><div align="center" class="style13"><strong><strong>

            <?

$sql = "select sum(valor_credito) as total from propostas where mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_empresa = $linha['total'];

$valor_total_empresa_formatada = number_format($valor_total_empresa, 2, ",", ".");





if($valor_total_empresa==0){ echo "0"; }



else{

echo "R$ ".$valor_total_empresa_formatada;

}

?>

</strong>

          </strong></div></td>

          <td><div align="center" class="style13"><strong>

            <?

$sql = "select * from propostas where mes_pagto_cliente = '$mes' and status_pagto_cliente = 'Pago_ao_cliente'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



if($registros==0){ echo "-";}



else{

echo $registros;

}

?>

</strong></div></td>

          <td><div align="center" class="style13"><strong>

		  <? $percentual_decimal = bcdiv($valor_total_empresa,$meta_total,5);

		  $percentual_definido = bcmul($percentual_decimal,100,3);

		  $percentual_definido_formatada = number_format($percentual_definido, 2, ",", ".");



		  echo $percentual_definido_formatada." %";

		  

		   ?>

</strong></div></td>

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

