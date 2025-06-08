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
<title>Sele&ccedil;&atilde;o de fornecedores para abrir ordem de compra</title>
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

<form action="historico.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="26%">Selecione o nome fantasia para abrir um or&ccedil;amento<br></td>
      <td width="21%"><select name="nfantasia" id="select6">
        <option selected></option>
        <?


    $sql = "select * from fornecedores order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
      </select></td>
      <td width="53%"><input type="submit" name="Submit" value="Abrir Ordem de Compra">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
    </tr>
  </table>
</form>
<form action="selecione_fornecedor_para_abrir_ordem_de_compra.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="26%">Informe o nome ou parte dele para buscar o cliente<br></td>
      <td width="21%"><input name="nfantasia" type="text" id="nfantasia" value="<? echo $nfantasia; ?>" size="40"></td>
<td width="53%"><input type="submit" name="Submit3" value="Buscar">
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
echo "Digite o nome do Fornecedor ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";

}else{	  
$sql = "select * from fornecedores where nfantasia like '$nfantasia%' order by nfantasia asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];

$razaosocial = $linha[1];

$cnpj = $linha[2];

$nfantasia = $linha[3];

$inscr_est = $linha[4];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cidade = $linha[8];

$estado = $linha[9];

$cep = $linha[10];

$email = $linha[11];

$comprador = $linha[12];

$telefone = $linha[13];

$fax = $linha[14];

$celular = $linha[15];

$obs = $linha[35];

$operador_atendente = $linha[50];

$site = $linha[52];

$proprietario = $linha[53];

$cpf = $linha[54];

$rg = $linha[55];

$operador = $linha[43];

$cel_operador = $linha[44];

$email_operador = $linha[45];

$estabelecimento = $linha[46];

$cidade_estabelecimento = $linha[47];

$tel_estabelecimento = $linha[48];

$email_estabelecimento = $linha[49];

?>
  <tr>
    <td width="13%"><form name="form1" method="post" action="historico.php">
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

<form action="selecione_fornecedor_para_abrir_ordem_de_compra.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td colspan="3"><div align="center"><strong>Relat&oacute;rio de or&ccedil;amentos por per&iacute;odo</strong></div></td>
    </tr>

    <tr>

      <td width="34%">Informe o per&iacute;odo que deseja</td>

      <td colspan="2">

        De

        <select name="dia_inicial" id="select3">

          <?





    $sql = "select * from ordem_compra where dia <> '' group by dia order by dia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
        </select>

        <select name="mes_inicial" id="select4">

		<option selected><?  echo $mes;  ?></option>

          <?





    $sql = "select * from ordem_compra where mes <> '' group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
        </select>

        <select name="ano_inicial" id="select5">

		<option selected><?  echo $ano;  ?></option>

          <?





    $sql = "select * from ordem_compra where ano <> '' group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
        </select> 

        at&eacute; 

        <select name="dia_final" id="select11">

          <?





    $sql = "select * from ordem_compra group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
        </select>

        <select name="mes_final" id="select12">

		<option selected><?  echo $mes;  ?></option>

          <?





    $sql = "select * from ordem_compra group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
        </select>

        <select name="ano_final" id="select13">

		<option selected><?  echo $ano;  ?></option>

          <?





    $sql = "select * from ordem_compra group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
        </select>      </td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="28%"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit523222" value="Gerar relat&oacute;rio">      </td>

      <td width="38%"><strong><strong><strong>
        <?
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


$sql = "select sum(total_geral) as total_compra from ordem_compra where dia between '$dia_inicial'and '$dia_final' and mes between '$mes_inicial'and '$mes_final' and ano between '$ano_inicial'and '$ano_final'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_compra'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
}
else{
echo "R$ ".$valor_total_formatado;
}

?>
      </strong></strong></strong></td>
    </tr>
  </table>

</form>

<table width="100%"  border="1">
  
  <?
  

  
if(empty($dia_inicial)) {
//echo "Digite o nome do cliente ou parte dele na caixa acima e clique em buscar para executar sua pesquisa.";

}else{	  





echo "<tr>
    <td><div align='center' class='style2'>Nº Ordem de Compra</div></td>
    <td><div align='center' class='style2'>Data de Geração</div></td>
    <td><div align='center' class='style2'>Data última alteração</div></td>
    <td><div align='center' class='style2'>Total Ordem de Compra</div></td>
    <td><div align='center' class='style2'>Fornecedor</div></td>
    <td><div align='center' class='style2'>Comprador</div></td>
    <td><div align='center' class='style2'>Celular</div></td>
  </tr>";
$sql = "select * from ordem_compra where dia between '$dia_inicial'and '$dia_final' and mes between '$mes_inicial'and '$mes_final' and ano between '$ano_inicial'and '$ano_final'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_ordem = $linha[0];
$codigo_for = $linha[1];
$razaosocial_for = $linha[2];
$nfantasia_for = $linha[3];
$endereco_for = $linha[4];
$numero_for = $linha[5];
$bairro_for = $linha[6];
$cidade_for = $linha[7];
$estado_for = $linha[8];
$fone_for = $linha[9];
$comprador_for = $linha[10];
$celular_for = $linha[11];
$email_for = $linha[12];
$cep_cliente = $linha[13];
$dataorcamento_for = $linha[14];
$horaorcamento_for = $linha[15];
$referencia_for = $linha[16];
$descricao_servico_for = $linha[17];


$total_geral_for = $linha[123];
$total_geral_for_formatado = number_format($total_geral_for, 2, ",", ".");

$dataalteracao = $linha[171];

  
echo "<tr>
    <td width='13%'><form name='form1' method='post' action='editar_ordem_de_compra.php'>
      <div align='center'>
        <input name='codigo_ordem' type='hidden' id='codigo_ordem' value='$codigo_ordem'>
        <input type='submit' name='Submit5' value='$codigo_ordem'>
      </div>
    </form></td>
    <td width='15%'><div align='center'>$dataorcamento_for</div></td>
    <td width='9%'><div align='center'>$dataalteracao</div></td>
    <td width='10%'><div align='center'>R$ $total_geral_for_formatado</div></td>
    <td width='21%'><div align='center'><form name='form1' method='post' action='historico.php'>
      <div align='center'>
        <input name='nfantasia' type='hidden' id='nfantasia' value='$nfantasia_for'>
        <input type='submit' name='Submit5' value='$nfantasia_for'>
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
