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

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<form action="gravar.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="6">        <?

require '../../conect/conect.php';


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];



$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}





?></td>
    </tr>

    <tr>

      <td width="12%">&nbsp;</td>

      <td colspan="5"><strong><font color="#0000FF" size="4">Tela de cadastro de Modelos!</font></strong></td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td colspan="5">&nbsp;</td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 

      <td><font color="#0000FF"><strong>Modelo</strong></font></td>

      <td width="13%"><input name="modelo" type="text" id="modelo"></td>

      <td width="13%"><font color="#0000FF"><strong>N&iacute;vel de Dificuldade</strong></font></td>
      <td width="13%"><select name="nivel_dificuldade" id="select4">
        <option value="null" selected>
          <?





    $sql = "select * from nivel_dificuldade order by nivel_dificuldade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nivel_dificuldade']."</option>";

    }

?>
        </option>
      </select></td>
      <td width="12%"><strong><font color="#0000FF">Pre&ccedil;o Empresa</font></strong></td>
      <td width="37%"><input type="text" name="preco_empresa" id="preco_empresa"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o Pespontador</font></strong></td>
      <td><input type="text" name="preco_pespontador" id="preco_pespontador"></td>
      <td><strong><font color="#0000FF">Pre&ccedil;o Coladeira 1 </font></strong></td>
      <td><input type="text" name="preco_coladeira1" id="preco_coladeira1"></td>
      <td><strong><font color="#0000FF">Pre&ccedil;o Coladeira 2 </font></strong></td>
      <td><input type="text" name="preco_coladeira2" id="preco_coladeira2"></td>
    </tr>

    <tr>
      <td><strong><font color="#0000FF">Costura Manual</font></strong></td>
      <td><input type="text" name="costura_manual" id="costura_manual"></td>
      <td><strong><font color="#0000FF">Tric&ecirc;</font></strong></td>
      <td><input type="text" name="trice" id="trice"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 

      <td><strong><font color="#0000FF">
        <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
        <input name="hora" type="hidden" id="hora" value="<? echo date('H:i:s'); ?>">
</font></strong></td>

      <td colspan="5"><input type="submit" name="Submit" value="Gravar Modelo">

      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td colspan="5">&nbsp;</td>
    </tr>
  </table>

</form>

<?







//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from modelos order by modelo asc";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$costura_manual = $linha[19];
$trice = $linha[20];


echo "<tr>";


$reg++;


?>

<td>

<br>

<span class="style1">Código:</span> <? echo $codigo; ?>

<span class="style1">Modelo:</span> <? echo $modelo; ?>

<span class="style1">Preço Empresa:</span> <? echo "R$ ".$preco_empresa; ?>

<span class="style1">Preço Pespontador :</span> <? echo "R$ ".$preco_pespontador; ?>

<span class="style1">Preço Coladeira 1:</span> <? echo "R$ ".$preco_coladeira1; ?>

<span class="style1">Preço Coladeira 2 :</span> <? echo "R$ ".$preco_coladeira2; ?>

<span class="style1">Costura Manual :</span> <? echo "R$ ".$costura_manual; ?>

<span class="style1">Tricê:</span> <? echo "R$ ".$trice; ?>

</td>
<br>
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



