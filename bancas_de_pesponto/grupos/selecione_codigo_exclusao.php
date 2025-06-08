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

<title>Edi&ccedil;&atilde;o de produtos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {font-weight: bold}

.style2 {

	color: #0000FF;

	font-weight: bold;

	font-size: 24px;

}

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<body>

<p>        <?

require '../../conect/conect.php';

?>



</p>

<p class="style2">Exclus&atilde;o de Grupo </p>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

<p>&nbsp;</p>

<form action="excluir.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td width="35%">Selecione o c&oacute;digo. da Bancaa ser exclu&iacute;do<br></td>

      <td width="25%"><select name="codigo" id="select4">

        <option value="null" selected>Selecione

        <?





    $sql = "select * from estados_do_brasil order by codigo";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";

    }

?>

        </option>

      </select></td>

      <td width="40%"><input type="submit" name="Submit" value="Excluir"></td>

    </tr>

  </table>

</form>

<?

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from bancos order by banco";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;


echo "<tr>";


$reg++;

?>

<td>

<br>

<span class="style1">Código:</span> <? printf("$linha[0]<br>"); ?>

<span class="style1">Banca:</span> <? printf("$linha[1]<br>"); ?>



</td>

<?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>



<? } ?>



<p>&nbsp;</p>

</body>

</html>

