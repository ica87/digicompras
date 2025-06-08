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

require '../conect/conect.php';
$codigo_ponto = $_POST['codigo'];

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
?>



  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $linha[1]; ?> 
            
</font></strong><strong><font color="#0000FF">      </font></strong></td>
      <td><strong>Celular:<font color="#0000FF"><br>
            <? echo $linha[19]; ?>
            <input name="celular" type="hidden" id="celular" value="<? echo $linha[19]; ?>">
      </font></strong></td>
      <td width="20%"><form name="form1" method="post" action="ponto/marcarponto.php">
	  <?
$nome = $nome_operador;

$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data_hoje'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$codigo_ponto = $linha[0];
}

?>

        <strong><font color="#0000FF">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="nome" type="hidden" id="nome" value="<? echo $nome_operador; ?>">
        <input name="codigo_ponto" type="hidden" id="codigo_ponto" value="<? echo $codigo_ponto; ?>">
        <input name="data" type="hidden" id="data" value="<? echo date('d-m-Y'); ?>">
        <input type="submit" name="Submit9" value="marcar Ponto">
        </font></strong>
            </form>        <strong><font color="#0000FF">      </font></strong></td>
      <td width="28%"><strong><font color="#0000FF">
      </font></strong></td>
    </tr>
    <tr>
      <td width="30%"><strong>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $linha[24]; ?>
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $linha[24]; ?>">
        </font></strong></td>
      <td width="22%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $linha[26]; ?>
            <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento2" value="<? echo $linha[26]; ?>">
      </font></strong></td>
      <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $linha[25]; ?>
          <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento3" value="<? echo $linha[25]; ?>">
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $linha[27]; ?>
            <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $linha[27]; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">          </font><font color="#0000FF"> </font><font color="#0000FF">      </font></strong></td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

<? } ?>
  </table>
  
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>

<div align="center"></div>
<table width="100%"  border="0">
  <tr>
    <td><form action="estabelecimentos/menu.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit6" value="Estabelecimentos">
    </form></td>
    <td width="15%"><form action="clientes/menu.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit5" value="Clientes">
    </form></td>
    <td><form action="index.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <select name="num_proposta" id="num_proposta">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from propostas where nome_operador = '$nome_operador' and status <> 'Proposta_Paga' order by num_proposta desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['num_proposta']. ">".$x['num_proposta']."</option>";
    }
?>
        </option>
      </select>
      <input type="submit" name="Submit3" value="Acompanhar Proposta">
    </form></td>
    <td><form action="etiquetas/etiquetas.php" method="post" name="form4" target="_blank">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit7" value="Emitir etiquetas para mala-direta">
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form action="propostas/menu.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Propostas">
    </form></td>
    <td><form action="index.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <select name="num_proposta" id="select3">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from propostas where nome_operador = '$nome_operador' and status = 'Proposta_Paga' order by num_proposta desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['num_proposta']. ">".$x['num_proposta']."</option>";
    }
?>
        </option>
      </select>
      <input type="submit" name="Submit32" value="Propostas Pagas">
    </form></td>
    <td><form name="form2" method="post" action="operadores/editar_operador.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Editar Dados Cadastrais">
    </form></td>
  </tr>
  <tr>
    <td width="19%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="38%"><form action="propostas/pesquiza_propostas_por_cpf.php" method="post" name="form5">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit52" value="Pesquisar Propostas por CPF">
    </form></td>
    <td width="28%"><form name="form6" method="post" action="bancos/menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit8" value="Bancos">
    </form></td>
  </tr>
</table>
<?



$num_proposta = $_POST['num_proposta'];

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<p align="center"><strong>Prezado Operador! </strong></p>
<table width="100%"  border="0">
  <tr>
    <td colspan="3"><strong>A proposta de seu cliente  de N&ordm;</strong> <strong><font color="#0000FF"><? echo $linha[0]; ?></font></strong><font color="#000000"><strong>, efetuada em</strong> <strong><font color="#0000FF"><? echo $linha[40]; ?></font>, Tem seu status definido em </strong> <strong><font color="#0000FF"><? echo $linha[51]; ?></font></strong> <strong>!</strong></font></td>
  </tr>
  <tr>
    <td width="37%">&nbsp;</td>
    <td width="20%"><form action="propostas/imprimir_proposta.php" method="post" name="form3" target="_blank">
      <strong><font color="#0000FF">
      <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
      </font></strong>
      <input type="submit" name="Submit4" value="Imprimir Proposta">
    </form></td>
    <td width="43%">&nbsp;</td>
  </tr>
</table>
<p align="center"><strong></strong></p>
<p align="left">&nbsp;</p>
<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
<? } ?>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>