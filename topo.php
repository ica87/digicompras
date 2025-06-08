<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<base target="meio">
</head>

			<?
			
require 'conect/conect.php';

$data_visita = date('d-m-Y');
$hora_visita = date('H:i:s');

$comando = "insert into visitas(data_visita,hora_visita) values('$data_visita','$hora_visita')";
mysql_query($comando,$conexao);

			
$sql = "SELECT * FROM fundo_topo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background_topo";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>
<?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='index.php' target='_top'><img src='logo/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>
<?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
<?
$sql = "SELECT * FROM visitas order by codigo desc limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("Nº de visitantes até o momento $linha[0]   -   Hoje é ".$data_visita); ?>
<? } ?>




<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM b_sup";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<table width="100%" bgcolor="#<? printf("$linha[1]"); ?>"  border="0">
<tr valign="top">
              <td width="32%" height="23"><form action="busca_estabelecimentos.php" method="post" name="form2" target="navegacao">
                <select name="categoria" id="select6">
                  <option selected>Escolha o segmento que deseja pesquisar</option>
                  <?


    $sql = "select * from categorias order by categoria asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['categoria']."</option>";
    }
?>
                </select>
                <input type="submit" name="Submit" value="Buscar">
              </form></td>
              <td width="14%"><form action="ler_cronicas.php" method="post" name="form1" target="navegacao">
                <div align="center">
                  <input type="submit" name="button" id="button" value="Cr&ocirc;nicas de Alo&iacute;sio Rosa">
                </div>
              </form>              </td>
              <td width="4%">&nbsp;</td>
              <td width="8%" height="23">
                <form action="index.php" method="post" name="form3" target="_top">
                  <div align="center">
                    <input type="submit" name="Submit2" value="In&iacute;cio">
                      </div>
              </form>              </td>
    <td width="4%" height="23">&nbsp;</td>
    <td width="10%" height="23"><form action="comentarios.php" method="post" name="form7" target="navegacao">
      <div align="center">
        <input type="submit" name="Submit6" value="Coment&aacute;rios">
        </div>
    </form></td>
    <td width="4%" height="23">&nbsp;    </td>
              <td width="11%" height="23"><form action="contato.PHP" method="post" name="form5" target="navegacao">
                <div align="center">
                  <input type="submit" name="Submit4" value="Contato">
                  </div>
              </form></td>
              <td width="3%" height="23"></td>
              <td width="10%" height="23"><form action="aempresa.php" method="post" name="form4" target="navegacao">
                <div align="center">
                  <input type="submit" name="Submit3" value="A Empresa">
                  </div>
              </form></td>
</tr>
</table>
<?	         
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>

<p>&nbsp;</p>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>