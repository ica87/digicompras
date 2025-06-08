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

<p class="style2">Edi&ccedil;&atilde;o de cidades brasileiras</p>

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit2" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form><p>
<form name="form2" method="post" action="corrigir_cidades.php">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="31%"><div align="center">Cidade Escrita Errada</div></td>
      <td width="24%"><div align="center">Cidade Escrita Correta</div></td>
      <td width="45%"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>
        <select name="cidade_old" id="cidade_old">
          <?





    $sql = "select * from clientes group by cidade order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
                </select>
      </strong></div></td>
      <td><div align="center">
        <select name="cidade" id="estado">
          <option selected>Selecione</option>
          <?





    $sql = "select * from cidades order by cidade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['cidade']."</option>";

    }

?>
        </select>
      </div></td>
      <td>
        <div align="left">
          <input type="submit" name="button" id="button" value="Corrigir">
        </div></td>
    </tr>
  </table>
</form>
<p>
<form action="cidades.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td width="35%">Selecione o c&oacute;digo. da cidade a ser editada<br></td>

      <td width="25%"><select name="codigo" id="select4">

        <option value="null" selected>Selecione

        <?





    $sql = "select * from cidades order by codigo";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['codigo']."</option>";

    }

?>

        </option>

      </select></td>

      <td width="40%"><input type="submit" name="Submit" value="Editar"></td>

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

