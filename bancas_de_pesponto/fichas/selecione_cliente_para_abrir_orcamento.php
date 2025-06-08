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
<title>Sele&ccedil;&atilde;o de clientes para cadastro de fichas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style5 {color: #0000FF}
.style6 {font-size: 10px}
.style7 {font-size: 12px}
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];


?>
</p>
<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>

<form action="historico_cliente.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="26%">Selecione o cliente para incluir uma ficha<br></td>
      <td width="30%">

      <select name="nfantasia" id="nfantasia">
        
        <?


    $sql = "select * from cad_empresa order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option selected>".$x['nfantasia']."</option>";
    }
?>
      </select>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="status" type="hidden" id="status">
        <input name="num_plano" type="hidden" id="num_plano">
        <input name="num_ficha" type="hidden" id="num_ficha">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="modelo" type="hidden" id="modelo">
        <input name="metal_entregue" type="hidden" id="metal_entregue">
        </font></strong></font></strong></font></strong></font></strong></font></strong>
        <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
        <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
        <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
        <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
        </font></strong></font></strong></font></strong></font></strong></font></strong></td>
      <td width="44%"><input type="submit" name="Submit" value="Avan&ccedil;ar">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
    </tr>
  </table>
</form>
<form action="selecione_cliente_para_abrir_orcamento.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="26%">Informe o nome ou parte dele para buscar o cliente<br></td>
      <td width="30%"><input name="nfantasia" type="text" id="nfantasia" value="<? echo $nfantasia; ?>" size="40">
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="status" type="hidden" id="status">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="num_plano" type="hidden" id="num_plano">
        <input name="num_ficha" type="hidden" id="num_ficha">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="modelo" type="hidden" id="modelo">
        </font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong>
        <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
        <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
        <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
        <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
        </font></strong></font></strong></font></strong></font></strong></font></strong></td>
<td width="44%"><input type="submit" name="Submit3" value="Buscar">
          <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span></td>
    </tr>
  </table>
</form>
<p></p>
<table width="100%"  border="1">
  <tr>
    <td><div align="center" class="style2">Nome Fantasia</div></td>
    <td><div align="center" class="style2">Cidade</div></td>
    <td><div align="center" class="style2">Estado</div></td>
    <td><div align="center" class="style2">Telefone</div></td>
    <td><div align="center" class="style2">Email</div></td>
    <td><div align="center" class="style2">Comprador</div></td>
    <td><div align="center" class="style2">Celular</div></td>
  </tr>
  <?
if(empty($nfantasia)) {
echo "Digite o nome do cliente ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";

}else{	  
$sql = "select * from clientes where nfantasia like '$nfantasia%' order by nfantasia asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$nfantasia = $linha[3];
$cidade = $linha[8];
$estado = $linha[9];
$email_cliente = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$celular = $linha[15];

?>
  <tr>
    <td width="13%"><form name="form1" method="post" action="historico_cliente.php">
        <div align="center">
          <input name="nfantasia" type="hidden" id="codigo2" value="<? echo $nfantasia; ?>">
          <input type="submit" name="Submit4" value="<? echo $nfantasia; ?>">
        </div>
    </form></td>
    <td width="15%"><div align="center"><? echo $cidade; ?></div></td>
    <td width="9%"><div align="center"><? echo $estado; ?></div></td>
    <td width="10%"><div align="center"><? echo $fone; ?></div></td>
    <td width="21%"><div align="center"><? echo $email_cliente; ?></div></td>
    <td width="20%"><div align="center"><? echo $comprador; ?></div></td>
    <td width="12%"><div align="center"><? echo $celular; ?></div></td>
  </tr>
<? }} ?>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>
