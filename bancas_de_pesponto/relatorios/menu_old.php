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

<title>Relat&oacute;rios do Administrador</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style6 {font-size: 10px}
.style7 {font-size: 12px}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style8 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<?



require '../../conect/conect.php';



			

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

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

  

<p>
  <? } ?></p>
<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit2" value="Voltar ao menu principal">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form name="form1" method="post" action="calcula_pedido.php">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

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

      <td><?

//echo date('localtime()'); ?>

</td>

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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><div align="center">
      <div align="center" class="style8">Relat&oacute;rio peri&oacute;dico por Grupo e Fichas Enviadas</div>
    </div></td>
  </tr>
  <tr>
    <td width="43%" rowspan="2" valign="top"><form action="relatorio_periodico_sintetico.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="99%"  border="0">
        <tr>
          <td colspan="3"><div align="center"></div></td>
          </tr>
        <tr>
          <td width="2%">&nbsp;</td>
            <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>De
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
            <input type="submit" name="Submit523222" value="Relat&oacute;rio Sint&eacute;tico"></td>
          </tr>
        <tr>
          <td colspan="2"><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
              <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
            </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
            <td width="38%">&nbsp;</td>
          </tr>
        </table>
    </form></td>
    <td>&nbsp;</td>
    <td><form action="relatorio_periodico_por_grupo_sintetico.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="99%"  border="0">
        
        <tr>
          <td width="2%">&nbsp;</td>
          <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
              <strong>
              <select name="grupo" id="grupo">
                <option selected>
                <? if(empty($grupo)){echo "Grupo"; }else{ echo $grupo; } ?>
                </option>
                <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
              </select>
              </strong>De
            <select name="dia_inicial" id="dia_inicial">
                <?





    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
                          </select>
              <select name="mes_inicial" id="mes_inicial">
                <?





    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
                            </select>
              <select name="ano_inicial" id="ano_inicial">
                <?





    $sql = "select * from fichas where ano_envio <> '' group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
                            </select>
            at&eacute;
            <select name="dia_final" id="dia_final">
              <?





    $sql = "select * from fichas group by dia_envio order by dia_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
            </select>
            <select name="mes_final" id="mes_final">
              <?





    $sql = "select * from fichas group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
            </select>
            <select name="ano_final" id="ano_final">
              <?





    $sql = "select * from fichas group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
            </select>
            <input type="submit" name="Submit6" value="Relat&oacute;rio Sint&eacute;tico"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
            <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
          </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
          <td width="38%">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="47%"><form action="relatorio_por_grupo_e_periodo_analitico.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="99%"  border="0">
        
        <tr>
          <td width="2%">&nbsp;</td>
          <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
              <strong>
              <select name="grupo" id="grupo">
                <option selected>
                <? if(empty($grupo)){echo "Grupo"; }else{ echo $grupo; } ?>
                </option>
                <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
              </select>
              </strong>De
            <select name="dia_inicial" id="dia_inicial">
                <?





    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
                          </select>
              <select name="mes_inicial" id="mes_inicial">
                <?





    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
                            </select>
              <select name="ano_inicial" id="ano_inicial">
                <?





    $sql = "select * from fichas where ano_envio <> '' group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
                            </select>
            at&eacute;
            <select name="dia_final" id="dia_final">
              <?





    $sql = "select * from fichas group by dia_envio order by dia_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
            </select>
            <select name="mes_final" id="mes_final">
              <?





    $sql = "select * from fichas group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
            </select>
            <select name="ano_final" id="ano_final">
              <?





    $sql = "select * from fichas group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
            </select>
            <input type="submit" name="Submit5" value="Relat&oacute;rio Anal&iacute;tico"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
            <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
          </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
          <td width="38%">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><div align="center" class="style8"><strong>Relat&oacute;rio peri&oacute;dico Geral da Empresa das Fichas em produ&ccedil;&atilde;o</strong></div></td>
  </tr>
  <tr>
    <td width="43%" rowspan="2" valign="top"><form action="relatorio_por_grupo_de_fichas_em_producao.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="98%"  border="0">
        <tr>
          <td colspan="2"><div align="center"><strong>Relat&oacute;rio peri&oacute;dico por Grupo de Fichas em produ&ccedil;&atilde;o</strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
              <strong>
              <select name="grupo" id="grupo">
                <option selected>
                <? if(empty($grupo)){echo "Grupo"; }else{ echo $grupo; } ?>
                </option>
                <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
              </select>
              </strong>De
            <select name="dia_inicial" id="dia_inicial">
                <?





    $sql = "select * from fichas group by dia order by dia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
                          </select>
              <select name="mes_inicial" id="mes_inicial">
                <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
                            </select>
              <select name="ano_inicial" id="ano_inicial">
                <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
                            </select>
            at&eacute;
            <select name="dia_final" id="dia_final">
              <?





    $sql = "select * from fichas group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
            </select>
            <select name="mes_final" id="mes_final">
              <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
            </select>
            <select name="ano_final" id="ano_final">
              <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
            </select>
            <input type="submit" name="Submit" value="Gerar relat&oacute;rio"></td>
        </tr>
        <tr>
          <td><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
            <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
          </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
          <td width="38%">&nbsp;</td>
        </tr>
      </table>
    </form></td>
    <td width="10%">&nbsp;</td>
    <td width="47%" valign="top"><form action="relatorio_de_fichas_em_producao_geral_sintetico.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="98%"  border="0">
        
        <tr>
          <td colspan="2">
            <div align="left">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
              De
              <select name="dia_inicial" id="dia_inicial">
                <?





    $sql = "select * from fichas group by dia order by dia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
              </select>
              <select name="mes_inicial" id="mes_inicial">
                <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
              </select>
              <select name="ano_inicial" id="ano_inicial">
                <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
              </select>
              at&eacute;
                    <select name="dia_final" id="dia_final">
                      <?





    $sql = "select * from fichas group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
                      </select>
                <select name="mes_final" id="mes_final">
                  <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
                  </select>
                <select name="ano_final" id="ano_final">
                  <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
                  </select>
                <input type="submit" name="Submit8" value="Relat&oacute;rio Sint&eacute;tico">
            </div></td>
        </tr>
        <tr>
          <td><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
            <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
          </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
          <td width="38%">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><form action="relatorio_de_fichas_em_producao_geral_analitico.php" method="post" enctype="multipart/form-data" name="form1">
      <table width="98%"  border="0">
        
        <tr>
          <td colspan="2">
            <div align="left">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
              De
              <select name="dia_inicial" id="dia_inicial">
                <?





    $sql = "select * from fichas group by dia order by dia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
              </select>
              <select name="mes_inicial" id="mes_inicial">
                <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
              </select>
              <select name="ano_inicial" id="ano_inicial">
                <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
              </select>
              at&eacute;
                <select name="dia_final" id="dia_final">
                  <?





    $sql = "select * from fichas group by dia order by dia desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia']."</option>";

    }

?>
                </select>
              <select name="mes_final" id="mes_final">
                <?





    $sql = "select * from fichas group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
              </select>
              <select name="ano_final" id="ano_final">
                <?





    $sql = "select * from fichas group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
              </select>
              <input type="submit" name="Submit7" value="Relat&oacute;rio Anal&iacute;tico">
            </div></td>
        </tr>
        <tr>
          <td><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
            <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
          </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
          <td width="38%">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<form action="pesquisa_de_ficha.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="4"><div align="center"><strong>Pesquisa  de Fichas</strong></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center">N&ordm; do Plano</div></td>
      <td width="21%"><div align="center">N&ordm; da Ficha</div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="34%"><div align="center"></div></td>
      <td width="13%"><div align="center">
        <input type="text" name="num_plano" id="num_plano">
      </div></td>
      <td><div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
          <input type="text" name="num_ficha" id="num_ficha">
          <input type="submit" name="Submit3" value="Pesquisa Ficha">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
                <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
              </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
      <td width="32%">&nbsp;</td>
    </tr>
  </table>
</form>
<form action="relatorio_por_plano.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td colspan="3"><div align="center"><strong>Relat&oacute;rio por Plano</strong></div></td>
    </tr>
    <tr>
      <td width="34%">Informe o per&iacute;odo que deseja</td>
      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
          <input type="text" name="num_plano" id="num_plano">
          <input type="submit" name="Submit4" value="Gerar relat&oacute;rio"></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style6"><strong><strong><strong> <span class="style7">
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


echo "TOTAL CUSTO M&Atilde;O-DE-OBRA R$ ".$total_mdo;

}

?>
                <? 
$saldo_periodo = bcsub($total_faturamento,$total_mdo,2); 

if($dia_inicial<>""){

echo "SALDO SOBRE O $grupo NO PERIODO DE $dia_inicial-$mes_inicial-$ano_inicial at&eacute; $dia_final-$mes_final-$ano_final R$ ".$saldo_periodo;

}

?>
              </strong></font></strong></strong></strong></strong></strong></strong></span></strong></strong></strong></span></td>
      <td width="38%">&nbsp;</td>
    </tr>
  </table>
</form>
<p>
</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>