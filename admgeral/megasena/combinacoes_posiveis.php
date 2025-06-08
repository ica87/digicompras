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

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>MENU PRINCIPAL DE TELEMARKETING</title>



<style type="text/css">

<!--



.style2 {	color: #0000FF;

	font-weight: bold;

}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
.style6 {color: #FF0000}



-->

</style>

</head>



<?



require '../../conect/conect.php';
	
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$db = $linha[1];	
}


$limite = $_POST['limite'];


$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

		

$sql = "SELECT * FROM fundo_navegacao";

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
  <? } ?>
</p>
<table width="100%" border="0" align="left">
  <tbody>
    <tr>
      <th width="49%" bgcolor="#cacaca" scope="col">&nbsp;</th>
    </tr>
    
    
  </tbody>
</table>
<p>&nbsp; </p>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="100%" colspan="5" align="left" valign="top"><p>&nbsp;</p>
        <form name="form1" method="post" action="analise.php">
        <table width="95%"  border="1" align="center">
			
          <tr>
            <td width="11%" valign="top">Concurso</td>
            <td width="11%" valign="top">Data</td>
            <td width="11%" valign="top"><div align="center">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          
              DZ1</div></td>
            <td width="15%" valign="top"><div align="center">DZ2</div></td>
            <td width="13%" valign="top"><div align="center">DZ3</div></td>
            <td width="12%" valign="top"><div align="center">DZ4</div></td>
            <td width="10%" valign="top"><div align="center">DZ5</div></td>
            <td width="17%" valign="top"><div align="center">DZ6</div></td>
          </tr>
			
			
<?
$contagem_combinacoes = 1;
	
while ($contagem_combinacoes <= 50063860){
	
$contagem_combinacoes++;
	
	
// Inicializamos uma variável array que ira armazenar os números sorteados.
$arr_numeros_sorteados = array(); 
//Vamos usar um laço while para que enquanto não tivermos os 6 números, continuar a sortear.
while (count($arr_numeros_sorteados) < 6){
  $numero_sorteado = mt_rand(1,60); // Irá sortear um numero dentro do intervalo de 1 até 60

//Antes de salvar o numero sorteado, verificamos se ele já foi sorteado anteriormente
  if( !in_array($numero_sorteado, $arr_numeros_sorteados) ){
    $arr_numeros_sorteados[] = $numero_sorteado; //Armazena o numero sorteado no array.
	  
	 //echo "<br>$numero_sorteado";
  }
}

//echo 'Números Sorteados: '. implode(', ', $arr_numeros_sorteados);
			
$dezenas_concatenadas = implode(',', $arr_numeros_sorteados);
		
$data2 = explode(",", $dezenas_concatenadas);

$dz1_pesquisar = $data2[0];

$dz2_pesquisar = $data2[1];

$dz3_pesquisar = $data2[2];
			
$dz4_pesquisar = $data2[3];
			
$dz5_pesquisar = $data2[4];
			
$dz6_pesquisar = $data2[5];
			
			
	
$sql3 = "SELECT * FROM megasena_todosresultados where bola1 = '$dz1_pesquisar' and  bola2 = '$dz2_pesquisar' and bola3 = '$dz3_pesquisar' and bola4 = '$dz4_pesquisar' and bola5 = '$dz5_pesquisar' and bola6 = '$dz6_pesquisar' limit 1";
$res3 = mysql_query($sql3);
$registro_combinacao1 = mysql_num_rows($res3);
		
		
$sql4 = "SELECT * FROM megasena_todosresultados where bola2 = '$dz2_pesquisar' and bola3 = '$dz3_pesquisar' and bola4 = '$dz4_pesquisar' and bola5 = '$dz5_pesquisar' and bola6 = '$dz6_pesquisar' and bola1 = '$dz1_pesquisar' limit 1";
$res4 = mysql_query($sql4);
$registro_combinacao2 = mysql_num_rows($res4);
		
$sql5 = "SELECT * FROM megasena_todosresultados where bola3 = '$dz3_pesquisar' and bola4 = '$dz4_pesquisar' and bola5 = '$dz5_pesquisar' and bola6 = '$dz6_pesquisar' and bola1 = '$dz1_pesquisar' and bola2 = '$dz2_pesquisar' limit 1";
$res5 = mysql_query($sql5);
$registro_combinacao3 = mysql_num_rows($res5);
		
$sql6 = "SELECT * FROM megasena_todosresultados where bola4 = '$dz4_pesquisar' and bola5 = '$dz5_pesquisar' and bola6 = '$dz6_pesquisar' and bola1 = '$dz1_pesquisar' and bola2 = '$dz2_pesquisar' and bola3 = '$dz3_pesquisar' limit 1";
$res6 = mysql_query($sql6);
$registro_combinacao4 = mysql_num_rows($res6);
		
$sql7 = "SELECT * FROM megasena_todosresultados where bola5 = '$dz5_pesquisar' and bola6 = '$dz6_pesquisar' and bola1 = '$dz1_pesquisar' and bola2 = '$dz2_pesquisar' and bola3 = '$dz3_pesquisar' and bola4 = '$dz4_pesquisar' limit 1";
$res7 = mysql_query($sql7);
$registro_combinacao5 = mysql_num_rows($res7);
		
$sql8 = "SELECT * FROM megasena_todosresultados where bola6 = '$dz6_pesquisar' and bola1 = '$dz1_pesquisar' and bola2 = '$dz2_pesquisar' and bola3 = '$dz3_pesquisar' and bola4 = '$dz4_pesquisar' and bola5 = '$dz5_pesquisar' limit 1";
$res8 = mysql_query($sql8);
$registro_combinacao6 = mysql_num_rows($res8);


	
if(($registro_combinacao1>=1) or ($registro_combinacao2>=1) or ($registro_combinacao3>=1) or ($registro_combinacao4>=1) or ($registro_combinacao5) or ($registro_combinacao6>=1)){

if($registro_combinacao1>=1){ $combinacao =  "<br>Combinação 1";}
if($registro_combinacao2>=1){ $combinacao =  "<br>Combinação 2";}
if($registro_combinacao3>=1){ $combinacao =  "<br>Combinação 3";}
if($registro_combinacao4>=1){ $combinacao =  "<br>Combinação 4";}
if($registro_combinacao5>=1){ $combinacao =  "<br>Combinação 5";}
if($registro_combinacao6>=1){ $combinacao =  "<br>Combinação 6";}
	


	
}
else{
	
$comando = "insert into megasena_combinacoespossiveis_naosorteadas(dz1,dz2,dz3,dz4,dz5,dz6)
values('$dz1_pesquisar','$dz2_pesquisar','$dz3_pesquisar','$dz4_pesquisar','$dz5_pesquisar','$dz6_pesquisar')";
mysql_query($comando,$conexao);
	
}



}
?>
			
<?
	
$sql = "SELECT * FROM megasena_combinacoespossiveis_naosorteadas order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registro_combinacao = mysql_num_rows($res);

	$bolaposicao1 = $linha[1];
	$bolaposicao2 = $linha[2];
	$bolaposicao3 = $linha[3];
	$bolaposicao4 = $linha[4];
	$bolaposicao5 = $linha[5];
	$bolaposicao6 = $linha[6];
	
?>
          <tr>
            <td align="center" valign="top"><? echo "$concurso"; ?></td>
            <td align="center" valign="top"><? echo "$datasorteio"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao1"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao2"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao3"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao4"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao5"; ?></td>
            <td align="center" valign="top"><? echo "$bolaposicao6"; ?></td>
          </tr>
<? 
}
	

			
?>
          <tr>
            <td colspan="8" align="center" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
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

