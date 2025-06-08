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

<title>Menu principal do Administrador</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style11 {font-size: 9px; color: #000000; font-weight: bold; }
.style13 {font-weight: bold}
.style14 {font-weight: bold}
.style15 {font-size: 18px}
.style2 {	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style5 {color: #0000FF}
.style6 {font-size: 9px; font-weight: bold; }
.style7 {color: #000000}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?



require '../../../conect/conect.php';


$dia_atual = date('d');
$mes_atual = date('m');
$ano_atual = date('Y');

$ano_anterior = bcsub($ano_atual,1);


$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#ffffff"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>
<form name="form1" method="post" action="../principal.php"><span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>


<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$funcao = $linha[43];
$cidade = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}
?>

<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit21" value="Voltar ao menu Principal">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<table width="100%"  border="0">

  <tr>
    <td width="4%"><div align="center"></div></td>
    <td width="14%"><div align="center">
      <form action="inserir.php" method="post" name="form2">
        <div align="left">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit11" value="Lan&ccedil;amentos H.E.">
        </div>
      </form>
    </div></td>
    <td width="4%"><div align="center"></div></td>
    <td width="14%"><div align="center">
      <form action="editar.php" method="post" name="form2">
        <div align="left">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit8" value="Edi&ccedil;&atilde;o H.E.">
        </div>
      </form>
    </div></td>
    <td width="5%"><div align="center"></div></td>
    <td width="18%"><div align="center">
      <form action="excluir.php" method="post" name="form2">
        <div align="left">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit15" value="Exclus&atilde;o H.E.">
        </div>
      </form>
    </div></td>
    <td width="9%"><div align="center"></div></td>
    <td width="32%" rowspan="2"><div align="center"></div>      
    <div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
</table>

</p>
</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>