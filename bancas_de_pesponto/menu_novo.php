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

			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>

<form name="form1" method="post" action="calcula_pedido.php">
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
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $linha[1]; ?> 
            <input name="nome" type="hidden" id="razaosocial2" value="<? echo $linha[1]; ?>">
</font></strong><strong><font color="#0000FF">      </font></strong></td>
      <td width="41%"><strong>Estabelecimento:</strong> <br><strong><font color="#0000FF"><? echo $linha[24]; ?>
            <input name="estabelecimento" type="hidden" id="nfantasia5" value="<? echo $linha[24]; ?>">
      </font></strong><strong><font color="#0000FF">      </font></strong></td>
      <td width="14%"><strong>Celular:<font color="#0000FF"><br> <? echo $linha[19]; ?>
            <input name="celular" type="hidden" id="nfantasia32" value="<? echo $linha[19]; ?>">
      </font><font color="#0000FF">
      </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong>Cidade: <br><font color="#0000FF"><? echo $linha[25]; ?>
            <input name="cidade_estabelecimento" type="hidden" id="nfantasia43" value="<? echo $linha[25]; ?>">
      </font><font color="#0000FF">      </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
        <? echo $linha[26]; ?>
            <input name="tel_estabelecimento" type="hidden" id="nfantasia23" value="<? echo $linha[26]; ?>">
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $linha[27]; ?>
            <input name="email_estabelecimento" type="hidden" id="nfantasia24" value="<? echo $linha[27]; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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

</form>
<?



$num_proposta = $_POST['num_proposta'];

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<p align="center"><strong>ALLCRED FINANCEIRA! </strong></p>
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
<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
<? } ?>

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
    <td width="18%"><form action="clientes/menu.php" method="post" name="form2">
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
    <td><form action="estados_do_brasil/menu.php" method="post" name="form6">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit62" value="Estados do Brasil ">
    </form></td>
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
    <td><form action="operadores/menu.php" method="post" name="form20">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit20" value="Operadores">
    </form></td>
  </tr>
  <tr>
    <td><form name="form6" method="post" action="bancos/menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit8" value="Bancos">
    </form></td>
    <td><form action="status/menu.php" method="post" name="form17">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit172" value="Status">
    </form></td>
    <td><form action="propostas/pesquiza_propostas_por_cpf.php" method="post" name="form5">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit52" value="Pesquisar Propostas por CPF">
    </form></td>
    <td><form name="form8" method="post" action="ponto/menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit12" value="Cart&atilde;o de Ponto">
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Website</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form action="aempresa/menu.php" method="post" name="form1">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit9" value="A Empresa ">
    </form></td>
    <td><form action="background_topo/menu.php" method="post" name="form14">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit142" value="Background Cabe&ccedil;alho">
    </form></td>
    <td><form action="cores/menu.php" method="post" name="form5">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit53" value="Cores do website">
    </form></td>
    <td><form action="categorias/menu.php" method="post" name="form2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit22" value="Categorias">
    </form></td>
  </tr>
  <tr>
    <td><form action="comentarios/menu.php" method="post" name="form3">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit322" value="Coment&aacute;rios">
    </form></td>
    <td><form action="background_navegacao/menu.php" method="post" name="form14">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit14" value="Background Navega&ccedil;&atilde;o">
    </form></td>
    <td><form action="pagina_inicial/menu.php" method="post" name="form10">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit10" value="P&aacute;gina inicial do site ">
    </form></td>
    <td><form action="sub_categorias/menu.php" method="post" name="form13">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit13" value="Sub categorias ">
    </form></td>
  </tr>
  <tr>
    <td><form action="ultimos_visitantes/ultimos_visitantes.php" method="post" name="form17">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit1722" value="&Uacute;ltimos visitantes">
    </form></td>
    <td><form action="logo/menu.php" method="post" name="form7">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit72" value="Logotipo">
    </form></td>
    <td>&nbsp;</td>
    <td><form action="produtos/menu.php" method="post" name="form11">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit11" value="Produtos">
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form action="publicidade/menu.php" method="post" name="form19">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit19" value="Publicidade">
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="19%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="35%">&nbsp;</td>
    <td width="28%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>