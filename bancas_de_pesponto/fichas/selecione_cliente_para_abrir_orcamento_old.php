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
      <td width="30%"><select name="nfantasia" id="select6">
        
        <?


    $sql = "select * from clientes order by nfantasia asc";
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

<form action="selecione_cliente_para_abrir_orcamento.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>

      <td colspan="3"><div align="center"><strong>Relat&oacute;rio de Fichas por per&iacute;odo</strong></div></td>
    </tr>

    <tr>

      <td width="34%">Informe o per&iacute;odo que deseja</td>

      <td colspan="2">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
        <strong>
        <select name="grupo" id="condpagto">
          <option selected><? if(empty($grupo)){echo "Informe o Grupo"; }else{ echo $grupo; } ?></option>
          <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
        </select>
        </strong>De

          
        <select name="dia_inicial" id="select3">

          <?





    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
        </select>

        <select name="mes_inicial" id="select4">

		

          <?





    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
        </select>

        <select name="ano_inicial" id="select5">


          <?





    $sql = "select * from fichas where ano_envio <> '' group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
        </select> 

        at&eacute; 

        <select name="dia_final" id="select11">

          <?





    $sql = "select * from fichas group by dia_envio order by dia_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
        </select>

        <select name="mes_final" id="select12">


          <?





    $sql = "select * from fichas group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
        </select>

        <select name="ano_final" id="select13">


          <?





    $sql = "select * from fichas group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
        </select>
        <input type="submit" name="Submit523222" value="Gerar relat&oacute;rio"></td>
    </tr>

    <tr>

      <td colspan="2"><span class="style6"><strong><strong><strong>
        <span class="style7">
        <?
		
		
if($grupo=="Informe o Grupo"){

$dia_inicial = "";

}
else{
$dia_inicial = $_POST['dia_inicial'];
}

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_ficha_empresa) as total_ficha_empresa from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_faturamento = $linha['total_ficha_empresa'];
$total_faturamento_formatado = number_format($total_faturamento, 2, ",", ".");


if($total_faturamento_formatado==0){
}
else{
echo "R$ ".$total_faturamento_formatado;
}
}
?>
        <strong><strong>
        <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_pespontador) as total_pespontador from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_pespontador = $linha['total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


if($valor_total_pespontador_formatado==0){
}
else{
$valor_total_pespontador_formatado;
}
}
?>
        <strong><strong>
        <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira1 = $linha['total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");


if($valor_total_coladeira1_formatado==0){
}
else{
$valor_total_coladeira1_formatado;
}
}
?>
        <strong><strong>
        <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira2 = $linha['total_coladeira2'];
$valor_total_coladeira2_formatado = number_format($valor_total_coladeira2, 2, ",", ".");


if($valor_total_coladeira2_formatado==0){
}
else{
$valor_total_coladeira2_formatado;
}
}
?>
        <font color="#0000FF"><strong>
<? 
$subtotal_mdo = bcadd($valor_total_pespontador,$valor_total_coladeira1,2); 
$total_mdo = bcadd($subtotal_mdo,$valor_total_coladeira2,2);

if($dia_inicial<>""){


echo "TOTAL CUSTO MÃO-DE-OBRA R$ ".$total_mdo;

}

?>

<? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
      </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>

      <td width="38%">&nbsp;</td>
    </tr>
  </table>

</form>
  
  
<table width="100%" border="0">
  <tr>
    <td width="4%" height="15"><div align="center" class="style4">Data entrada</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style4">N&ordm; Ficha</div></td>
    <td width="8%"><div align="center"><span class="style4">Status</span></div></td>
    <td width="6%"><div align="center"><span class="style4">Data Envio para f&aacute;brica</span></div></td>
    <td width="4%"><div align="center" class="style4">Quant Pares</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Modelo</div></td>
    <td width="5%"><div align="center" class="style4">Metal Entregue?</div></td>
    <td width="3%"><div align="center"><span class="style4">Caixa</span></div></td>
    <td width="4%"><div align="center" class="style4">Grupo</div></td>
    <td width="4%"><div align="center" class="style4">R$ Unit Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 2</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style4">R$ Total Ficha</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Empresa</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Empresa</div></td>
    <td width="7%"><div align="center"><span class="style4">Saldo</span></div></td>
  </tr>
  <?
if(empty($dia_inicial)){
}
else{

$sql = "select * from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial' and '$ano_final' and status = 'Enviado'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



  $codigo_ficha = $linha[0];
  $dia_cadastro = $linha[1];
  $mes_cadastro = $linha[2];
  $ano_cadastro = $linha[3];
  $hora = $linha[4];
  $status = $linha[5];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $grupo = $linha[8];
  $quant_pares = $linha[9];
  $pespontador = $linha[10];
  $valor_pespontador = $linha[11];
  $total_pespontador = $linha[12];
  $coladeira1 = $linha[13];
  $valor_coladeira1 = $linha[14];
  $total_coladeira1 = $linha[15];
  $coladeira2 = $linha[16];
  $valor_coladeira2 = $linha[17];
  $total_coladeira2 = $linha[18];
  
  $total_ficha = $linha[19];
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  
  $modelo = $linha[20];
  $metal_entregue = $linha[21];
  $dia_envio = $linha[22];
  $mes_envio = $linha[23];
  $ano_envio = $linha[24];
  $hora_envio = $linha[25];
  $valor_unit_empresa = $linha[26];
  $total_ficha_empresa = $linha[27];
  $saldo = $linha[28];
  $codigo_cliente = $linha[29];
  $cnpj = $linha[30];
  $nfantasia = $linha[34]; 
  $caixa = $linha[62]; 



?>
  <tr>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $num_plano; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4">
      <form action="editar_ficha.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span> <strong><font color="#0000FF"><strong>
            <? if($status=="Enviado"){ echo $num_ficha; } ?>
          </strong></font></strong>
          <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
        <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4">
      <form name="form3" method="post" action="">
        <input name="nfantasia2" type="hidden" id="nfantasia2" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
          <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
          <input name="metal_entregue2" type="hidden" id="metal_entregue2" value="<? echo $metal_entregue; ?>">
          <input name="dia_envio2" type="hidden" id="dia_envio2" value="<? echo date('d'); ?>">
          <input name="mes_envio2" type="hidden" id="mes_envio2" value="<? echo date('m'); ?>">
          <input name="ano_envio2" type="hidden" id="ano_envio2" value="<? echo date('Y'); ?>">
          <input name="hora_envio2" type="hidden" id="hora_envio2" value="<? echo date('H:i:s'); ?>">
          </font></strong></font></strong></font></strong></font></strong></font></strong>
        <?
if($status=="Enviado"){
echo $status;
}
else{

echo"<select name='status' id='status'>";
  echo "<option selected>".$status."</option>";

    $sql = "select * from status where status <> 'Enviado' and status <> '$status' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
  
   }
      echo"</select>";
      
}
?>
        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style4">
      <form action="historico_cliente.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span>
        <span class="style5"><strong><strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora"; ?></strong></strong>
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>">
        <strong><strong><strong><strong><strong>
          <input name="nfantasia2" type="hidden" id="nfantasia3" value="<? echo $nfantasia; ?>">
          <input name="status2" type="hidden" id="status2" value="Enviado">
          <input name="dia_envio2" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>">
          <input name="mes_envio2" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>">
          <input name="ano_envio2" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>">
          <input name="hora_envio2" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>">
          </strong></strong></strong></strong></strong></span>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $quant_pares; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $modelo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style5"><strong><strong><? echo $metal_entregue; ?></strong></strong></div></td>
    <td><div align="center" class="style4"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $grupo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$saldo; ?></strong></font></strong></div></td>
  </tr>
  <?
}}
?>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><span class="style2">
	<? 
$datarelatorio = date('d-m-Y');
$horarelatorio = date('H:i:s');
	
	 if($dia_envio<>""){ echo " RESUMO DAS OPERAÇÕES NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial até $dia_final-$mes_final-$ano_final - RELATÓRIO DO GRUPO $grupo GERADO DIA $datarelatorio AS $horarelatorio HORAS"; } ?></span></td>
    <td width="51%">&nbsp;</td>
  </tr>
  <tr>
    <td width="12%">&nbsp;</td>
    <td width="24%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><? if($dia_envio<>""){ echo "PESPONTADOR"; } ?></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $pespontador; ?></strong></font></strong></td>
    <td><strong><strong><strong>
      <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_pespontador) as total_pespontador from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_pespontador = $linha['total_pespontador'];
$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


if($valor_total_pespontador_formatado==0){
}
else{
echo "R$ ".$valor_total_pespontador_formatado;
}
}
?>
    </strong></strong></strong></td>
    <td><form action="../recibo_pagto/recibo_de_pagamento.php" method="post" name="form3" target="_blank">
      <input name="grupo" type="hidden" id="nfantasia4" value="<? echo $grupo; ?>">
      <input name="pespontador" type="hidden" id="codigo_ficha4" value="<? echo $pespontador; ?>">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
      <input name="hora_pagto" type="hidden" id="hora_envio4" value="<? echo date('H:i:s'); ?>">
      <input name="valor_total_pespontador" type="hidden" id="valor_total_pespontador" value="<? echo $valor_total_pespontador;  ?>">
      </font></strong></font></strong></font></strong></font></strong>
      <input name="dia_inicial" type="hidden" id="dia_envio4" value="<? echo $dia_inicial; ?>">
      <input name="mes_inicial" type="hidden" id="mes_envio4" value="<? echo $mes_inicial; ?>">
      <input name="ano_inicial" type="hidden" id="ano_envio4" value="<? echo $ano_inicial; ?>">
      <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
      <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
      <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </font></strong></font></strong></font></strong></font></strong></font></strong>
<? if($valor_total_pespontador<>"0"){ echo "<input type='submit' name='button' id='button' value='Emitir Recibo de Pagto'>"; } ?>
    </form></td>
  </tr>
  <tr>
    <td><strong><? if($dia_envio<>""){ echo "COLADEIRA 1"; } ?></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $coladeira1; ?></strong></font></strong></td>
    <td><strong><strong><strong>
      <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_coladeira1) as total_coladeira1 from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira1 = $linha['total_coladeira1'];
$valor_total_coladeira1_formatado = number_format($valor_total_coladeira1, 2, ",", ".");


if($valor_total_coladeira1_formatado==0){
}
else{
echo "R$ ".$valor_total_coladeira1_formatado;
}
}
?>
    </strong></strong></strong></td>
    <td><form action="../recibo_pagto/recibo_de_pagamento.php" method="post" name="form3" target="_blank">
      <input name="grupo" type="hidden" id="nfantasia5" value="<? echo $grupo; ?>">
      <input name="coladeira1" type="hidden" id="codigo_ficha5" value="<? echo $coladeira1; ?>">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"> <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
      <input name="hora_pagto" type="hidden" id="hora_envio5" value="<? echo date('H:i:s'); ?>">
      <input name="valor_total_coladeira1" type="hidden" id="valor_total_coladeira1" value="<? echo $valor_total_coladeira1;  ?>">
      </font></strong></font></strong></font></strong></font></strong>
      <input name="dia_inicial" type="hidden" id="dia_envio5" value="<? echo $dia_inicial; ?>">
      <input name="mes_inicial" type="hidden" id="mes_envio5" value="<? echo $mes_inicial; ?>">
      <input name="ano_inicial" type="hidden" id="ano_envio5" value="<? echo $ano_inicial; ?>">
      <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
      <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
      <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </font></strong></font></strong></font></strong></font></strong></font></strong>
      <? if($valor_total_coladeira1<>"0"){ echo "<input type='submit' name='button' id='button' value='Emitir Recibo de Pagto'>"; } ?>
    </form></td>
  </tr>
  <tr>
    <td><strong><? if($dia_envio<>""){ echo "COLADEIRA 2"; } ?></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $coladeira2; ?></strong></font></strong></td>
    <td><strong><strong><strong>
      <?
//$grupo = $_POST['grupo'];
		
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];


if(empty($dia_inicial)){
}
else{
$sql = "select sum(total_coladeira2) as total_coladeira2 from fichas where grupo = '$grupo' and dia_envio between '$dia_inicial'and '$dia_final' and mes_envio between '$mes_inicial'and '$mes_final' and ano_envio between '$ano_inicial'and '$ano_final' and status = 'Enviado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_coladeira2 = $linha['total_coladeira2'];
$valor_total_coladeira2_formatado = number_format($valor_total_coladeira2, 2, ",", ".");


if($valor_total_coladeira2_formatado==0){
}
else{
echo "R$ ".$valor_total_coladeira2_formatado;
}
}
?>
    </strong></strong></strong></td>
    <td><form action="../recibo_pagto/recibo_de_pagamento.php" method="post" name="form3" target="_blank">
      <input name="grupo" type="hidden" id="nfantasia6" value="<? echo $grupo; ?>">
      <input name="coladeira2" type="hidden" id="codigo_ficha6" value="<? echo $coladeira2; ?>">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"> <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
      <input name="hora_pagto" type="hidden" id="hora_envio6" value="<? echo date('H:i:s'); ?>">
      <input name="valor_total_coladeira2" type="hidden" id="valor_total_coladeira2" value="<? echo $valor_total_coladeira2;  ?>">
      </font></strong></font></strong></font></strong></font></strong>
      <input name="dia_inicial" type="hidden" id="dia_envio6" value="<? echo $dia_inicial; ?>">
      <input name="mes_inicial" type="hidden" id="mes_envio6" value="<? echo $mes_inicial; ?>">
      <input name="ano_inicial" type="hidden" id="ano_envio6" value="<? echo $ano_inicial; ?>">
      <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
      <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
      <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </font></strong></font></strong></font></strong></font></strong></font></strong>
      <? if($valor_total_coladeira2<>"0"){ echo "<input type='submit' name='button' id='button' value='Emitir Recibo de Pagto'>"; } ?>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
