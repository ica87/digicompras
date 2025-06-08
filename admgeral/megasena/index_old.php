<?php

//session_start(); //inicia sessão...

//if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

//echo ""; //se for emite mensagem positiva.

//if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

//echo ""; //se for emite mensagem positiva.

//else //se não for...

//header("Location: alerta.php");



?>



<html>

<head>

<title>MENU PRINCIPAL DE TELEMARKETING</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--



.style2 {	color: #0000FF;

	font-weight: bold;

}
.style5 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style6 {color: #FF0000}



-->

</style>

</head>



<?



require '../../conect/conect.php';


$solicitacao = $_POST['solicitacao'];
	
$quant_cartelas = $_POST['quant_cartelas'];

//$limite = bcmul($quant_cartelas,6);
$limite = "1";
	
	
	$dz1_pesquisar = $_POST['dz1_pesquisar'];
	$dz2_pesquisar = $_POST['dz2_pesquisar'];
	$dz3_pesquisar = $_POST['dz3_pesquisar'];
	$dz4_pesquisar = $_POST['dz4_pesquisar'];
	$dz5_pesquisar = $_POST['dz5_pesquisar'];
	$dz6_pesquisar = $_POST['dz6_pesquisar'];

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$db = $linha[1];	
}





			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>


<?
if($solicitacao=="permitirsubcategoria"){
	
$numeropermitido = $_POST['numeropermitido'];
	
$sql = "SELECT * FROM megasena_numerosencontrados where numero = '$numeropermitido'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$total_permissoes = mysql_num_rows($res);

}
if($total_permissoes>=1){
	echo "<script>

alert('ATENÇÃO!!!... $numeropermitido JÁ SE ENCONTRA SELECIONADO!');

</script>";
}
else{
$comando = "insert into megasena_numerosencontrados(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
$comando = "insert into megasena_dz1(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
$comando = "insert into megasena_dz2(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
$comando = "insert into megasena_dz3(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
	$comando = "insert into megasena_dz4(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
	$comando = "insert into megasena_dz5(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
	$comando = "insert into megasena_dz6(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);
	
}
	
}	  
	  
	  
	  
if($solicitacao=="excluirnumero"){
	
$codigonumeroaexcluir = $_POST['codigonumeroaexcluir'];
	
$comando = "delete from `megasena_numerosencontrados` where `megasena_numerosencontrados`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz1` where `megasena_dz1`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz2` where `megasena_dz2`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz3` where `megasena_dz3`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz4` where `megasena_dz4`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz5` where `megasena_dz5`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
	$comando = "delete from `megasena_dz6` where `megasena_dz6`. `codigo` = '$codigonumeroaexcluir' limit 1 ";
mysql_query($comando,$conexao);
	
}	  
	  
	  
?>


<body bgcolor="#ffffff"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?><br>

<table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="4"><?

error_reporting(E_ALL);



?>
    </tr>

    <tr>

      <td width="18%"><form name="form3" method="post" action="index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="solicitacao" type="hidden" id="solicitacao" value="abripermissoesdesubcategoria">
        <input class="class01"  type="submit" name="Submit" value="Registrar Numeros">
      </form></td>

      <td colspan="3"><strong><font color="#0000FF" size="4">Fa&ccedil;a a busca</font></strong>
		<?
		  
		  
		  if($solicitacao=="trocar"){
			  
			  
		  $numerocombinando = $_POST['numerocombinando'];
		$numero_que_parou = $_POST['numero_que_parou'];
			  
			  $comando = "update `$db`.`megasena_numeroparou` set `numerocombinando` = '$numerocombinando',`numeroparou` = '$numero_que_parou' where `megasena_numeroparou`. `codigo` = '0'";
mysql_query($comando,$conexao);
			  
		  }
		  
		  
		  
		  
		  ?>
		
		
	  </td>
    </tr>

    <tr>
      <td><?

if($solicitacao=="verificacombinacao"){
	
	if((empty($dz1_pesquisar)) or (empty($dz2_pesquisar)) or (empty($dz3_pesquisar)) or (empty($dz4_pesquisar)) or (empty($dz5_pesquisar)) or (empty($dz6_pesquisar))){
		echo "<script>

alert('ATENACO!!!... UM DOS CAMPOS ESTA VAZIO VERIFICQUE... $dz1_pesquisar $dz2_pesquisar $dz3_pesquisar $dz4_pesquisar $dz5_pesquisar $dz6_pesquisar JA REGISTRADA!');


</script>";
	
}
else{
	
$sql2 = "SELECT * FROM megasena_cartelatemporaria2 where codigo = '1'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
	
	$dz1 = $linha[1];
	$dz2 = $linha[2];
	$dz3 = $linha[3];
	$dz4 = $linha[4];
	$dz5 = $linha[5];
	$dz6 = $linha[6];
}
		
		echo "$dz1 - $dz2 - $dz3 - $dz4 - $dz5 - $dz6"; 
	
$sql3 = "SELECT * FROM megasena_combinacoespossiveis where dz1 = '$dz1' and  dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' limit 1";
$res3 = mysql_query($sql3);
$registro_combinacao1 = mysql_num_rows($res3);
		
		
$sql4 = "SELECT * FROM megasena_combinacoespossiveis where dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' limit 1";
$res4 = mysql_query($sql4);
$registro_combinacao2 = mysql_num_rows($res4);
		
$sql5 = "SELECT * FROM megasena_combinacoespossiveis where dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' limit 1";
$res5 = mysql_query($sql5);
$registro_combinacao3 = mysql_num_rows($res5);
		
$sql6 = "SELECT * FROM megasena_combinacoespossiveis where dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' limit 1";
$res6 = mysql_query($sql6);
$registro_combinacao4 = mysql_num_rows($res6);
		
$sql7 = "SELECT * FROM megasena_combinacoespossiveis where dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' limit 1";
$res7 = mysql_query($sql7);
$registro_combinacao5 = mysql_num_rows($res7);
		
$sql8 = "SELECT * FROM megasena_combinacoespossiveis where dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' limit 1";
$res8 = mysql_query($sql8);
$registro_combinacao6 = mysql_num_rows($res8);


	
if(($registro_combinacao1>=1) or ($registro_combinacao2>=1) or ($registro_combinacao3>=1) or ($registro_combinacao4>=1) or ($registro_combinacao5) or ($registro_combinacao6)){
	
echo "<script>

alert('ATEN&Ccedil;&Atilde;O!!!... COMBINA&Ccedil;&Atilde;O J&Aacute; REGISTRADA!');


</script>";
	
}
else{
	
$comando = "insert into megasena_combinacoespossiveis(dz1,dz2,dz3,dz4,dz5,dz6)
values('$dz1','$dz2','$dz3','$dz4','$dz5','$dz6')";
mysql_query($comando,$conexao);
	
}
}

}
?></td>
      <td width="11%"><strong>N&ordm; de Cartelas</strong></td>
      <td width="45%"><form name="form4" method="post" action="index.php">
		  <?
			if($solicitacao=="gerarcombinacao"){
			
	$sql = "select * from megasena_numeroparou";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;


$numeroparou = $linha[1];
$numerocombinando = $linha[2];
	$dz1 = $linha[2];
}
				

if($dz1 % 2 == 0){
$classificacao = "par";
}
else{
$classificacao = "impar";
}
				

				
				$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz1` = '$dz1' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				
				$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `numero` = '$dz1'";
mysql_query($comando,$conexao);
				
				
				//-----------------SEGUNDA DEZENA---------------------

					
	if($classificacao=="par"){
		//SELECIONA NUMEROS IMPARES DEZENA 2
$sql9 = "select * from megasena_numerosencontrados where numero%2! = 0 and sorteado = 'n' order by rand() limit 1";
	}
	else{
		//SELECIONA NUMEROS PARES DEZENA 2
$sql9 = "select * from megasena_numerosencontrados where numero%2 = 0 and sorteado = 'n' order by rand() limit 1";
	}
$res9 = mysql_query($sql9);
while($linha=mysql_fetch_row($res9)) {
	
	$codigodz2 = $linha[0];
	
$dz2 = $linha[1];

			
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz2` = '$dz2' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz2'";
mysql_query($comando,$conexao);

	
}
				//-----------------SEGUNDA DEZENA---------------------
				
				//-----------------TERCEIRA DEZENA---------------------
				
				
				
				
				if($classificacao=="par"){
					//SELECIONA NUMEROS PARES DEZENA 3
$sql10 = "select * from megasena_numerosencontrados where numero%2 = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql10 = "select * from megasena_numerosencontrados where numero%2! = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
$res10 = mysql_query($sql10);
while($linha=mysql_fetch_row($res10)) {

	$codigodz3 = $linha[0];
	
$dz3 = $linha[1];
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz3` = '$dz3' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz3'";
mysql_query($comando,$conexao);

}
				
				
				//-----------------TERCEIRA DEZENA---------------------
				
				
				
				//-----------------QUARTA DEZENA---------------------
				
				if($classificacao=="par"){
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql11 = "select * from megasena_numerosencontrados where numero%2! = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS PARES DEZENA 3
$sql11 = "select * from megasena_numerosencontrados where numero%2 = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
$res11 = mysql_query($sql11);
while($linha=mysql_fetch_row($res11)) {

	$codigodz4 = $linha[0];
	
$dz4 = $linha[1];
				
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz4` = '$dz4' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz4'";
mysql_query($comando,$conexao);
	
}
				
				//-----------------QUARTA DEZENA---------------------
				
				
				
				//-----------------QUINTA DEZENA---------------------
				
				
	if($classificacao=="par"){
					//SELECIONA NUMEROS PARES DEZENA 3
$sql12 = "select * from megasena_numerosencontrados where numero%2 = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql12 = "select * from megasena_numerosencontrados where numero%2! = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
$res12 = mysql_query($sql12);
while($linha=mysql_fetch_row($res12)) {

	$codigodz5 = $linha[0];
	
$dz5 = $linha[1];
				
	
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz5` = '$dz5' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz5'";
mysql_query($comando,$conexao);
		
		
}
				
				
				//-----------------QUINTA DEZENA---------------------
				
				
				
	           //-----------------SEXTA DEZENA---------------------
				
				
	if($classificacao=="par"){
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql13 = "select * from megasena_numerosencontrados where numero%2! = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS PARES DEZENA 3
$sql13 = "select * from megasena_numerosencontrados where numero%2 = 0 <> '$dz1'  and sorteado = 'n' order by rand() limit 1";
				}
$res13 = mysql_query($sql13);
while($linha=mysql_fetch_row($res13)) {

	$codigodz6 = $linha[0];
	
$dz6 = $linha[1];
				
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz6` = '$dz6' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz6'";
mysql_query($comando,$conexao);
	
}
				
				//-----------------SEXTA DEZENA---------------------
		
		
		
	
$sql2 = "SELECT * FROM megasena_cartelatemporaria2 where codigo = '1'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
	
	$dz1 = $linha[1];
	$dz2 = $linha[2];
	$dz3 = $linha[3];
	$dz4 = $linha[4];
	$dz5 = $linha[5];
	$dz6 = $linha[6];
}
		
		echo "$dz1 - $dz2 - $dz3 - $dz4 - $dz5 - $dz6"; 
	
$sql3 = "SELECT * FROM megasena_combinacoespossiveis where dz1 = '$dz1' and  dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' limit 1";
$res3 = mysql_query($sql3);
$registro_combinacao1 = mysql_num_rows($res3);
		
		
$sql4 = "SELECT * FROM megasena_combinacoespossiveis where dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' limit 1";
$res4 = mysql_query($sql4);
$registro_combinacao2 = mysql_num_rows($res4);
		
$sql5 = "SELECT * FROM megasena_combinacoespossiveis where dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' limit 1";
$res5 = mysql_query($sql5);
$registro_combinacao3 = mysql_num_rows($res5);
		
$sql6 = "SELECT * FROM megasena_combinacoespossiveis where dz4 = '$dz4' and dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' limit 1";
$res6 = mysql_query($sql6);
$registro_combinacao4 = mysql_num_rows($res6);
		
$sql7 = "SELECT * FROM megasena_combinacoespossiveis where dz5 = '$dz5' and dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' limit 1";
$res7 = mysql_query($sql7);
$registro_combinacao5 = mysql_num_rows($res7);
		
$sql8 = "SELECT * FROM megasena_combinacoespossiveis where dz6 = '$dz6' and dz1 = '$dz1' and dz2 = '$dz2' and dz3 = '$dz3' and dz4 = '$dz4' and dz5 = '$dz5' limit 1";
$res8 = mysql_query($sql8);
$registro_combinacao6 = mysql_num_rows($res8);


	
if(($registro_combinacao1>=1) or ($registro_combinacao2>=1) or ($registro_combinacao3>=1) or ($registro_combinacao4>=1) or ($registro_combinacao5) or ($registro_combinacao6)){
	
echo "<script>

alert('ATEN&Ccedil;&Atilde;O!!!... COMBINA&Ccedil;&Atilde;O J&Aacute; REGISTRADA!');


</script>";
	
}
else{
	
$comando = "insert into megasena_combinacoespossiveis(dz1,dz2,dz3,dz4,dz5,dz6)
values('$dz1','$dz2','$dz3','$dz4','$dz5','$dz6')";
mysql_query($comando,$conexao);
	
}
	
$comando = "update `$db`.`megasena_numeroparou` set `numeroparou` = '$dz2' where `megasena_numeroparou`. `codigo` = '0'";
mysql_query($comando,$conexao);


    //$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `numero` = '$dz1'";
//mysql_query($comando,$conexao);
		
	//$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `codigo` = '$codigodz2'";
//mysql_query($comando,$conexao);
				
	//$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `codigo` = '$codigodz3'";
//mysql_query($comando,$conexao);
				
	//$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `codigo` = '$codigodz4'";
//mysql_query($comando,$conexao);
				
	//$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `codigo` = '$codigodz5'";
//mysql_query($comando,$conexao);
				
	//$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n' where `megasena_numerosencontrados`. `codigo` = '$codigodz6'";
//mysql_query($comando,$conexao);

		
	
	
}
	
			
?>
		  <?
		  
$sql = "SELECT * FROM megasena_numeroparou";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$combinacao_encontrada = mysql_num_rows($res);
	
	$numero_que_parou = $linha[1];
	$numerocombinando = $linha[2];
$selecaogravada = $linha[3];
}
		  ?>
        <input name="solicitacao" type="hidden" id="solicitacao" value="trocar">
        <select name="numerocombinando" id="numerocombinando">
          <option selected><? echo "$numerocombinando"; ?></option>
          <?

    $sql = "select * from megasena_numeroparou order by numero asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['numero']."</option>";
    }
			
			$sql = "select * from megasena_numerosencontrados order by numero asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['numero']."</option>";
    }
?>
        </select>
        <? echo "$dz1 $classificacao"; ?>
        <select name="numero_que_parou" id="numero_que_parou">
          <option selected><? echo "$numero_que_parou"; ?></option>
          <?

    $sql = "select * from megasena_numerosencontrados order by numero asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['numero']."</option>";
    }
?>
        </select>
        <input type="submit" name="Submit3" value="Trocar">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="index.php">
        <input name="solicitacao" type="hidden" id="solicitacao" value="sortearcombinacao">
        <input type="submit" name="Submit4" value="Sortear">
      </form></td>
      <td><form name="form4" method="post" action="index.php">
        <input name="solicitacao" type="hidden" id="solicitacao" value="gerarcombinacao">
        <input type="submit" name="Submit5" value="Gerar Combina&ccedil;&atilde;o">
      </form></td>
      <td width="26%">&nbsp;</td>
    </tr>
</table>


  <form name="form1" method="post" action="index.php">
    <table width="80%"  border="0" align="center">
      <tr>
        <td width="13%" valign="top"><div align="center">
          <input name="solicitacao" type="hidden" id="solicitacao" value="verificacombinacao">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          DZ1</div></td>
        <td width="18%" valign="top"><div align="center">DZ2</div></td>
        <td width="16%" valign="top"><div align="center">DZ3</div></td>
        <td width="14%" valign="top"><div align="center">DZ4</div></td>
        <td width="13%" valign="top"><div align="center">DZ5</div></td>
        <td width="13%" valign="top"><div align="center">DZ6</div></td>
      </tr>
      <tr>
        <td align="center" valign="top"><input name="dz1_pesquisar" type="text" id="dz1_pesquisar" size="5"></td>
        <td align="center" valign="top"><input name="dz2_pesquisar" type="text" id="dz2_pesquisar" size="5"></td>
        <td align="center" valign="top"><input name="dz3_pesquisar" type="text" id="dz3_pesquisar" size="5"></td>
        <td align="center" valign="top"><input name="dz4_pesquisar" type="text" id="dz4_pesquisar" size="5"></td>
        <td align="center" valign="top"><input name="dz5_pesquisar" type="text" id="dz5_pesquisar" size="5"></td>
        <td align="center" valign="top"><input name="dz6_pesquisar" type="text" id="dz6_pesquisar" size="5"></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top"><input class="class01"  type="submit" name="Submit2" value="Verificar e Registrar numeros"></td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table>
  </form>
  <table width="95%" border="0" align="center">
    <tbody>
      <tr>
        <th width="31%" valign="top" scope="col"><table width="100%" border="0" align="left">
    <tbody>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td width="23%" valign="top"><table width="100%" border="0" align="left">
          <tbody>
            <tr>
              <th width="16%" bgcolor="#CACACA" scope="col">Numeros dispon&iacute;veis</th>
              <th width="84%" bgcolor="#CACACA" scope="col">#</th>
            </tr>
            <?

$sql = "SELECT * FROM megasena order by numero asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$numero = $linha[1];


?>
            <tr>
              <td bgcolor="#cacaca"><? echo "$numero"; ?></td>
              <td bgcolor="#cacaca"><form name="form5" method="post" action="index.php">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "$numero"; ?>">
                <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
                <input class="class01" type="submit" name="submit" id="submit" value="Selecionar">
              </form></td>
            </tr>
            <? } ?>
          </tbody>
        </table></td>
        <td width="4%">&nbsp;</td>
        <td width="73%" valign="top"><table width="100%" border="0" align="left">
          <tbody>
            <tr>
              <th width="55%" bgcolor="#cacaca" scope="col"><?
				  
				  $sql = "SELECT * FROM megasena_numerosencontrados order by numero asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_num_encontrados++;
}
				  echo "$reg_num_encontrados ";
				  ?>Numeros Selecionados</th>
              <th width="45%" bgcolor="#cacaca" scope="col">#</th>
            </tr>
            <?

$sql = "SELECT * FROM megasena_numerosencontrados order by numero asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_num_encontrados++;
	
$codigonumeroaexcluir = $linha[0];
$numeroencontrado = $linha[1];



?>
            <tr>
              <td bgcolor="#cacaca"><? echo "$numeroencontrado"; ?></td>
              <td bgcolor="#cacaca"><form name="form5" method="post" action="index.php">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="codigonumeroaexcluir" type="hidden" id="codigonumeroexcluir" value="<? echo "$codigonumeroaexcluir"; ?>">
                <input name="solicitacao" type="hidden" id="solicitacao" value="excluirnumero">
                <input class="class01" type="submit" name="submit2" id="submit2" value="X">
              </form></td>
            </tr>
            <? } ?>
          </tbody>
        </table>
	    </td>
      </tr>
    </tbody>
</table></th>
        <th width="18%" scope="col">&nbsp;</th>
        <th width="51%" valign="top" scope="col">
			<div style="overflow: auto; height: 300px">
			<table width="95%"  border="0" align="center">
    <tr>
      <td colspan="6" align="center" valign="top"> TOTAL DE COMBINA&Ccedil;&Otilde;ES
        <?
$sql = "SELECT * FROM megasena_combinacoespossiveis order by codigo asc";
$res = mysql_query($sql);
$registro_combinacao = mysql_num_rows($res);
	  echo "$registro_combinacao";
$totaldosjogos = bcmul($registro_combinacao,3.50,2);
	echo " TOTAL DOS JOGOS R$ $totaldosjogos";
	  ?></td>
    </tr>
    <tr>
      <td width="13%" valign="top"><div align="center">
        <input name="solicitacao" type="hidden" id="solicitacao" value="verificacombinacao">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      DZ1</div></td>
      <td width="18%" valign="top"><div align="center">DZ2</div></td>
      <td width="16%" valign="top"><div align="center">DZ3</div></td>
      <td width="14%" valign="top"><div align="center">DZ4</div></td>
      <td width="13%" valign="top"><div align="center">DZ5</div></td>
      <td width="13%" valign="top"><div align="center">DZ6</div></td>
    </tr>
    <?
	
	$sql = "SELECT * FROM megasena_combinacoespossiveis order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registro_combinacao = mysql_num_rows($res);

	$dz1_sorteada = $linha[1];
	$dz2_sorteada = $linha[2];
	$dz3_sorteada = $linha[3];
	$dz4_sorteada = $linha[4];
	$dz5_sorteada = $linha[5];
	$dz6_sorteada = $linha[6];
	
?>
    <tr>
      <td align="center" valign="top"><? echo "$dz1_sorteada"; ?></td>
      <td align="center" valign="top"><? echo "$dz2_sorteada"; ?></td>
      <td align="center" valign="top"><? echo "$dz3_sorteada"; ?></td>
      <td align="center" valign="top"><? echo "$dz4_sorteada"; ?></td>
      <td align="center" valign="top"><? echo "$dz5_sorteada"; ?></td>
      <td align="center" valign="top"><? echo "$dz6_sorteada"; ?></td>
    </tr>
    <? } ?>
  </table>
			</div>
				</th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  
  

<p>
    
  </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
<p>
	  
</p>
</body>

</html>

