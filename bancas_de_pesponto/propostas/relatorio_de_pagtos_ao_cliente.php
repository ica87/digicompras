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

<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style3 {font-size: 10px}

-->

</style>

</head>

<?



require '../../conect/conect.php';







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

      <form name="form1" method="post" action="../principal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Voltar ao menu principal">

</form>

      <br>

      <br>

<table width="100%"  border="0">

              <tr>

                <td>

</td>

              </tr>

</table>            

      <?

$data_pagto_cliente = $_POST['data_pagto_cliente'];



			

$sql = "SELECT * FROM propostas where data_pagto_cliente = '$data_pagto_cliente' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_operador = $linha[1];



$nome = $linha[4];

$valor_credito = $linha[25];

$comissao_op = $linha[101];

$valor_total = $linha[113];



?>            

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td><div align="center" class="style3">Cliente</div></td>

          <td><div align="center" class="style3">Valor Liquido</div></td>
          <td><div align="center" class="style3">Valor Bruto </div></td>

          <td><div align="center" class="style3">Operador</div></td>
        </tr>

		

        <tr>

          <td width="8%">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php"><div align="center" class="style3">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

            <? printf("$linha[0]"); ?> </div></form></td>

          <td width="20%">

            <div align="center" class="style3"><? echo $nome;?> </div></td>

          <td width="8%"><div align="center"><span class="style3"><? echo "R$ ".$valor_credito;?></span></div></td>
          <td width="8%"><div align="center" class="style3"><? echo "R$ ".$valor_total;?> </div></td>

          <td width="8%"><div align="center"><span class="style3"><? echo $nome_operador;?></span></div></td>

          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>

<? } ?>
        <tr>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td>&nbsp;</td>
          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>
        <tr>

          <td><span class="style3">Total</span></td>

          <td>&nbsp;</td>

          <td><div align="center">
            <?

$sql = "select sum(valor_credito) as total_credito from propostas where data_pagto_cliente = '$data_pagto_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_credito = $linha['total_credito'];



echo "R$ ".$valor_total_credito;

?>
          </div></td>
          <td><div align="center">

              <?

$sql = "select sum(valor_total) as total from propostas where data_pagto_cliente = '$data_pagto_cliente'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </div></td>

          <td><div align="center"><span class="style3"></span></div></td>
</table>



<p>&nbsp;</p>







</body>

</html>

