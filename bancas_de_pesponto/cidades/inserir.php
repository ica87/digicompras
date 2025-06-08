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

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="menu.php">

  <input type="submit" name="Submit3" value="Voltar">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

</form>

<form action="gravar.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';

?>



</td>

    </tr>

    <tr>

      <td width="11%">&nbsp;</td>

      <td width="89%"><strong><font color="#0000FF" size="4">Tela de cadastro de cidades Brasileiras!</font></strong></td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">Cidade:</font></strong></td>

      <td><input name="cidade" type="text" id="cidade" size="50" maxlength="50"></td>

    </tr>

    <tr> 

      <td><font color="#0000FF"><strong>Estado<font color="#0000FF">:</font></strong></font></td>

      <td><select name="estado" id="select">
        <option selected>Selecione o estado</option>
        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['estado']."</option>";
    }
?>
      </select></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Gravar Cidade">

      <input type="reset" name="Submit2" value="Limpar"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td>&nbsp;</td>

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



<p>&nbsp; </p>

</body>



</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>



