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
<title>Contas a receber - Busca cliente</title>
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
-->
</style></head>

<body>
<p>        
<?



require '../../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome_operador = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];
}
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

<form action="selecione_cliente_contas_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="32%">Selecione o nome fantasia para realizar a busca<br></td>
      <td width="21%"><select name="nfantasia" id="select6">
        <option selected></option>
        <?


    $sql = "select * from clientes order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
      </select></td>
      <td width="47%"><input type="submit" name="Submit" value="Buscar">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
    </tr>
  </table>
</form>
<form action="selecione_cliente_contas_a_receber.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="26%">Informe o nome ou parte dele para realizar a busca<br></td>
      <td width="27%"><input name="nfantasia" type="text" id="nfantasia" value="<? echo $nfantasia; ?>" size="40"></td>
<td width="47%"><input type="submit" name="Submit3" value="Buscar">
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
    <td><div align="center" class="style2">Raz&atilde;o Social</div></td>
    <td><div align="center" class="style2">CNPJ</div></td>
    <td><div align="center" class="style2">Telefone</div></td>
    <td><div align="center" class="style2">Cidade</div></td>
    <td><div align="center" class="style2">Estado</div></td>
    <td><div align="center" class="style2"></div></td>
  </tr>
  <?
if(empty($nfantasia)) {
echo "Digite o nome do cliente ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";

}else{	  
$sql = "select * from clientes where nfantasia like '$nfantasia%' order by nfantasia asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$razaosocial = $linha[1];
$cnpj = $linha[2];
$nfantasia = $linha[3];
$cidade = $linha[8];
$estado = $linha[9];
$email_cliente = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$celular = $linha[15];

?>
  <tr>
    <td width="11%"><div align="center"><? echo $nfantasia; ?></div></td>
    <td width="17%"><div align="center"><? echo $razaosocial; ?></div></td>
    <td width="12%"><div align="center"><? echo $cnpj; ?></div></td>
    <td width="13%"><div align="center"><? echo $fone; ?></div></td>
    <td width="18%"><div align="center"><? echo $cidade; ?></div></td>
    <td width="14%"><div align="center"><? echo $estado; ?></div></td>
    <td width="15%"><div align="center">
      <form name="form1" method="post" action="contas_a_receber_agrupamento_de_mensalidades.php">
        <div align="center"> <span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span>
          <input name="nfantasia_cliente" type="hidden" id="codigo2" value="<? echo $nfantasia; ?>">
          <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj; ?>">
            <input type="submit" name="Submit4" value="Historico">
        </div>
      </form>
    </div></td>
  </tr>
<? }} ?>
</table>
<p>&nbsp;</p>

<table width="100%"  border="1">
  
  <?
  

  
if(empty($dia_inicial)) {
//echo "Digite o nome do cliente ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";

}else{	  





echo "<tr>
    <td><div align='center' class='style2'>Nº Orçamento</div></td>
    <td><div align='center' class='style2'>Data de Geração</div></td>
    <td><div align='center' class='style2'>Data última alteração</div></td>
    <td><div align='center' class='style2'>Total Orçamento</div></td>
    <td><div align='center' class='style2'>Cliente</div></td>
    <td><div align='center' class='style2'>Comprador</div></td>
    <td><div align='center' class='style2'>Celular</div></td>
  </tr>";
$sql = "select * from orcamentos where dia between '$dia_inicial'and '$dia_final' and mes between '$mes_inicial'and '$mes_final' and ano between '$ano_inicial'and '$ano_final'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_orcamento = $linha[0];
$codigo_cliente = $linha[1];
$razaosocial_cliente = $linha[2];
$nfantasia_cliente = $linha[3];
$endereco_cliente = $linha[4];
$numero_cliente = $linha[5];
$bairro_cliente = $linha[6];
$cidade_cliente = $linha[7];
$estado_cliente = $linha[8];
$fone_cliente = $linha[9];
$comprador_cliente = $linha[10];
$celular_cliente = $linha[11];
$email_cliente = $linha[12];
$cep_cliente = $linha[13];
$dataorcamento_cliente = $linha[14];
$horaorcamento_cliente = $linha[15];
$referencia_cliente = $linha[16];
$descricao_servico_cliente = $linha[17];


$total_geral_cliente = $linha[123];
$total_geral_cliente_formatado = number_format($total_geral_cliente, 2, ",", ".");

$dataalteracao = $linha[171];

  
echo "<tr>
    <td width='13%'><form name='form1' method='post' action='editar_orcamento.php'>
      <div align='center'>
        <input name='codigo_orcamento' type='hidden' id='codigo_orcamento' value='$codigo_orcamento'>
        <input type='submit' name='Submit5' value='$codigo_orcamento'>
      </div>
    </form></td>
    <td width='15%'><div align='center'>$dataorcamento_cliente</div></td>
    <td width='9%'><div align='center'>$dataalteracao</div></td>
    <td width='10%'><div align='center'>R$ $total_geral_cliente_formatado</div></td>
    <td width='21%'><div align='center'><form name='form1' method='post' action='historico_cliente.php'>
      <div align='center'>
        <input name='nfantasia' type='hidden' id='nfantasia' value='$nfantasia_cliente'>
        <input type='submit' name='Submit5' value='$nfantasia_cliente'>
      </div>
    </form></div></td>
    <td width='20%'><div align='center'>$comprador_cliente</div></td>
    <td width='12%'><div align='center'>$celular_cliente</div></td>
  </tr>";

}
?>
  <? } ?>
</table>
</body>
</html>
