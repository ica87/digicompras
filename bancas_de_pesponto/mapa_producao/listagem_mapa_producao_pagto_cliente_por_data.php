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



$mes_ano = $_POST['mes_ano'];



$dia = $_POST['dia'];

$mes =$_POST['mes'];

$ano = $_POST['ano'];



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

<p class="style4"><strong>Data informada para pesquisa </strong> <span class="style14"><? echo $dia."-".$mes."-".$ano; ?></span> </p>

      <table width="50%"  border="1">

        <tr bgcolor="#ffffff">

          <td><div align="center" class="style7">Data</div></td>

          <td><div align="center" class="style7">Hora</div></td>

          <td><div align="center" class="style7"></div>            <div align="center" class="style7"></div>            <div align="center" class="style7"></div></td>
        </tr>

		      <?



			

$sql = "SELECT * FROM mapa_producao_pagto_cliente where dia = '$dia' and mes = '$mes' and ano = '$ano' group by hora order by hora asc ";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$dia = $linha[1];

$mes = $linha[2];

$ano = $linha[3];

$hora = $linha[4];





?>            

        <tr>

          <td width="23%"><div align="center" class="style7 style13"><? echo "$dia"."-"."$mes"."-"."$ano" ; ?></div></td>

          <td width="16%"><div align="center" class="style14">

	      <? echo $hora; ?></div></td>

          <td valign="middle">

            <form name="form2" method="post" action="visualizacao_mapa_producao_pagto_cliente_por_data.php"><div align="center" class="style14">

              <div align="center">
                <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
                <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

                <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

                <input name="hora" type="hidden" id="hora" value="<? echo $hora; ?>">

                <input type="submit" name="Submit" value="Visualizar Mapa de Produ&ccedil;&atilde;o">
                </div>

            </div>
            </form>          </td>
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

