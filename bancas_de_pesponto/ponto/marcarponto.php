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
<title>Servi&ccedil;os ao Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';
$nome = $_POST['nome'];
$data = $_POST['data'];
$mes_ano = date('m-y');
$codigo_ponto = $_POST['codigo_ponto'];


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
background="../background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
<? } ?>

<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];




$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$nome_operador = $linha[1];
$funcionario = $linha[42];
$funcao = $linha[43];
}


?>

<?



$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$codigo_ponto = $linha[0];
}

?>
<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $nome_operador; ?> 
        </font></strong><strong><font color="#0000FF">      </font></strong></td>
      <td><strong>Hoje &eacute;: <font color="#0000FF">      <? echo $data; ?></font></strong></td>
      <td width="22%"><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#0000FF">
      </font></strong></td>
    </tr>
    <tr>
      <td width="30%">&nbsp;</td>
      <td width="22%"><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">          </font><font color="#0000FF"> </font></strong>
        <form name="form1" method="post" action="ent_m.php">
          <strong><font color="#0000FF">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input name="codigo_ponto" type="hidden" id="codigo4" value="<? echo $codigo_ponto; ?>">
          <input name="nome" type="hidden" id="nome3" value="<? echo $nome_operador; ?>">
          <input name="data" type="hidden" id="data" value="<? echo date('d-m-Y'); ?>">
          <input name="ent_m" type="hidden" id="ent_m" value="<? echo date('H:i:s'); ?>">
          <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo date('m-y'); ?>">
          <input type="submit" name="Submit9" value="Entrada Manh&atilde;">
          </font></strong>
        </form>
      <strong><font color="#0000FF">      </font></strong></td>
      <td><form name="form1" method="post" action="sai_m.php">
        <strong><font color="#0000FF">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
        <input name="nome" type="hidden" id="nome4" value="<? echo $nome_operador; ?>">
        <input name="data" type="hidden" id="data" value="<? echo date('d-m-Y'); ?>">
        <input name="sai_m" type="hidden" id="sai_m" value="<? echo date('H:i:s'); ?>">
        <input type="submit" name="Submit92" value="Sa&iacute;da Manh&atilde;">
        </font></strong>
      </form>        <strong></strong></td>
      <td><form name="form1" method="post" action="ent_t.php">
        <strong><font color="#0000FF">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="nome" type="hidden" id="nome" value="<? echo $nome_operador; ?>">
        <input name="data" type="hidden" id="data" value="<? echo date('d-m-Y'); ?>">
        <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
        <input name="ent_t" type="hidden" id="ent_t" value="<? echo date('H:i:s'); ?>">
        <input type="submit" name="Submit922" value="Entrada Tarde">
        </font></strong>
      </form></td>
      <td><form name="form1" method="post" action="sai_t.php">
        <strong><font color="#0000FF">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="nome" type="hidden" id="nome" value="<? echo $nome_operador; ?>">
        <input name="data" type="hidden" id="data3" value="<? echo date('d-m-Y'); ?>">
        <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
        <input name="sai_t" type="hidden" id="sai_t" value="<? echo date('H:i:s'); ?>">
        <input type="submit" name="Submit923" value="Sa&iacute;da Tarde">
        </font></strong>
      </form></td>
    </tr>
<?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

</table>

  <form name="form1" method="post" action="../index.php">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    <input name="codigo_ponto2" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
    <input type="submit" name="Submit" value="Ir para o menu principal">
  </form>

<p>&nbsp;</p>
  <table width="50%"  border="1" align="center" bordercolor="#000000">
    <tr>
      <td colspan="5"><p><strong>NOME: <? echo $nome_operador; ?></strong></p>
        <p><strong>FUN&Ccedil;&Atilde;O: <? echo $funcao; ?></strong></p>
        <p><strong>M&Ecirc;S: <? echo $mes_ano; ?> </strong></p></td>
    </tr>
    <tr>
      <td>      <div align="center"><strong>Data</strong></div></td>
      <td colspan="2"><div align="center"><strong>Manh&atilde;</strong></div></td>
      <td colspan="2"><div align="center"><strong>Tarde</strong></div></td>
    </tr>
    <tr>
      <td colspan="5"><?
			
$sql = "SELECT * FROM ponto where nome = '$nome_operador' and mes_ano = '$mes_ano' order by data asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?></td>
    <tr>
      <td width="23%"><div align="center">        <? printf("$linha[2]"); ?>
          </div></td>
      <td width="22%"><div align="center"><? printf("$linha[3]"); ?> </div></td>
      <td width="19%"><div align="center"><? printf("$linha[4]"); ?> </div></td>
      <td width="17%"><div align="center"><? printf("$linha[5]"); ?> </div></td>
      <td width="19%"><div align="center"><? printf("$linha[6]"); ?></div></td>
      <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
      <? } ?>
    <tr>
      <td colspan="5">&nbsp;<br>
      Ass:</td>
</table>
  <p>&nbsp;</p>
  <p>
    <? //"SELECT * FROM tabela WHERE dia BETWEEN #"&datainicio&"# AND #"&datafim&"# ORDER BY dia ASC"?>
  </p>
  <p>&nbsp;</p>
</body>
</html>
