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

<p class="style2">Altera&ccedil;&atilde;o de nome de Cidade. </p>

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<form action="autalizar.php" method="post" name="form2">

  <table width="100%"  border="0">

        <tr>

          <td width="36%">

<?



$codigo = $_POST['codigo'];



$sql = "select * from cidades where codigo = '$codigo'";

//$sql = "SELECT fabricante FROM veiculos where='Diversos'";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$cidade = $linha[1];
$estado = $linha[2];


//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...

//if($res) {

//EXIBE PARA O USUARIO

echo "<tr>";

//while($linha=mysql_fetch_row($res)) {

$reg++;

?>		  </td>

          <td width="39%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>

          <td width="25%">&nbsp;</td>
        </tr>

        <tr>

          <td height="40">Insira o novo nome da Cidade </td>

          <td><input name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50">
          <input name="cidade_old" type="hidden" id="cidade_old" value="<? echo $cidade; ?>"></td>

          <td><input type="submit" name="Submit2" value="Atualizar"></td>
        </tr>
        <tr>
          <td height="40">Altere o etado a que pertence</td>
          <td><select name="estado" id="select">
            <option selected><? echo $estado; ?></option>
            <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
          </select></td>
          <td>&nbsp;</td>
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

$sql = "select * from cidades order by cidade";

//$sql = "SELECT fabricante FROM veiculos where='Diversos'";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$cidade = $linha[1];
$estado = $linha[2];


//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...

//if($res) {

//EXIBE PARA O USUARIO

echo "<tr>";

//while($linha=mysql_fetch_row($res)) {

$reg++;

?>

<td>

<br>

<span class="style1">Código:</span> <? echo $codigo; ?>

<span class="style1">Cidade:</span> <? echo $cidade; ?>

<span class="style1">Estado:</span> <? echo $estado; ?>



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

