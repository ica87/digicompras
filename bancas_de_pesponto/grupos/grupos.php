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

<p class="style2">Altera&ccedil;&atilde;o de nome de Grupo. </p>

<form name="form1" method="post" action="selecione_codigo_edicao.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit22" value="Voltar">

</form>

<p>&nbsp;</p>

<form action="autalizar.php" method="post" name="form2">

<table width="100%"  border="0">

        <tr>

          <td width="36%">

<?



$codigo = $_POST['codigo'];



$sql = "select * from grupos where codigo = '$codigo'";

//$sql = "SELECT fabricante FROM veiculos where='Diversos'";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

//$codigo = $linha[0];
$grupo = $linha[1];


//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...

//if($res) {

//EXIBE PARA O USUARIO

echo "<tr>";

//while($linha=mysql_fetch_row($res)) {

$reg++;

?>

		  

		  </td>

          <td width="39%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>

          <td width="25%">&nbsp;</td>

        </tr>

        <tr>

          <td height="40">Insira o novo nome da Banca</td>

          <td><input name="grupo" type="text" id="grupo" value="<? echo $grupo; ?>" size="50"></td>

          <td><input type="submit" name="Submit2" value="Atualizar Grupo"></td>

        </tr>

		          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>



          <? } ?>



  </table>

</form>

</option>

          </select></td>

          <td width="25%">&nbsp;</td>

        </tr>

        <tr>

        </tr>

  </table>

</form>



<?

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from grupos order by grupo";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$grupo = $linha[1];


echo "<tr>";


$reg++;

?>

<td>

<br>

<span class="style1">Código:</span> <? echo $codigo; ?>

<span class="style1">Banca:</span> <? echo $grupo; ?>



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

