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


$solicitacao = $_POST['solicitacao'];
	
$quant_cartelas = $_POST['quant_cartelas'];

//$limite = bcmul($quant_cartelas,6);
$limite = $_POST['limite'];
$ordem = $_POST['ordem'];
	
	$fixardezenas = $_POST['fixardezenas'];
	
	if($fixardezenas=="fixar"){
		
	
	$dz1fixa = $_POST['dz1fixa'];
	$dz3fixa = $_POST['dz3fixa'];
	$dz5fixa = $_POST['dz5fixa'];
		
		
		$comando = "update `$db`.`megasena_dezenasfixas` set `dz1` = '$dz1fixa',`dz3` = '$dz3fixa',`dz5` = '$dz5fixa',`fixardezenas` = '$fixardezenas' where `megasena_dezenasfixas`. `codigo` = '1'";
mysql_query($comando,$conexao);
		
		
	}
	
	if($fixardezenas=="desafixar"){
		
		$comando = "update `$db`.`megasena_dezenasfixas` set `dz1` = '',`dz3` = '',`dz5` = '',`fixardezenas` = '$fixardezenas' where `megasena_dezenasfixas`. `codigo` = '1'";
mysql_query($comando,$conexao);
	}
	
	
$sql = "SELECT * FROM megasena_dezenasfixas";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$dz1fixa = $linha[1];
$dz3fixa = $linha[3];
$dz5fixa = $linha[5];
	$fixardezenas = $linha[7];
}
	
	
	$dz1_pesquisar = $_POST['dz1_pesquisar'];
	$dz2_pesquisar = $_POST['dz2_pesquisar'];
	$dz3_pesquisar = $_POST['dz3_pesquisar'];
	$dz4_pesquisar = $_POST['dz4_pesquisar'];
	$dz5_pesquisar = $_POST['dz5_pesquisar'];
	$dz6_pesquisar = $_POST['dz6_pesquisar'];

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



if($solicitacao=="registrarsorteio"){


$concurso = $_POST['concurso'];
$datasorteio = $_POST['datasorteio'];
$bola1 = $_POST['bola1'];
$bola2 = $_POST['bola2'];
$bola3 = $_POST['bola3'];
$bola4 = $_POST['bola4'];
$bola5 = $_POST['bola5'];
$bola6 = $_POST['bola6'];



$comando = "insert into megasena_todosresultados(concurso,data,bola1,bola2,bola3,bola4,bola5,bola6)
values('$concurso','$datasorteio','$bola1','$bola2','$bola3','$bola4','$bola5','$bola6')";
mysql_query($comando,$conexao);


$sql = "SELECT * FROM megasena order by numero asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

	
$codigoatualizar = $linha[0];
$dezena = $linha[1];
	
	
	
$sql30 = "SELECT * FROM megasena_todosresultados where bola1 = '$dezena'";
$resultado30 = mysql_query($sql30);
$total_vezes_sorteado_bola1 = mysql_num_rows($resultado30);


	
	
	$sql31 = "SELECT * FROM megasena_todosresultados where bola2 = '$dezena'";
$resultado31 = mysql_query($sql31);
$total_vezes_sorteado_bola2 = mysql_num_rows($resultado31);

	
	
	$sql32 = "SELECT * FROM megasena_todosresultados where bola3 = '$dezena'";
$resultado32 = mysql_query($sql32);
$total_vezes_sorteado_bola3 = mysql_num_rows($resultado32);
	
	
	
	$sql33 = "SELECT * FROM megasena_todosresultados where bola4 = '$dezena'";
$resultado33 = mysql_query($sql33);
$total_vezes_sorteado_bola4 = mysql_num_rows($resultado33);
	
	
	
	$sql34 = "SELECT * FROM megasena_todosresultados where bola5 = '$dezena'";
$resultado34 = mysql_query($sql34);
$total_vezes_sorteado_bola5 = mysql_num_rows($resultado34);
	
	
	
	$sql35 = "SELECT * FROM megasena_todosresultados where bola6 = '$dezena'";
$resultado35 = mysql_query($sql35);
$total_vezes_sorteado_bola6 = mysql_num_rows($resultado35);
	
	
	$quant_total_de_vezes_que_foi_sorteado = $total_vezes_sorteado_bola1+$total_vezes_sorteado_bola2+$total_vezes_sorteado_bola3+$total_vezes_sorteado_bola4+$total_vezes_sorteado_bola5+$total_vezes_sorteado_bola6;


$comando = "update `$db`.`megasena` set `quantidade` = '$quant_total_de_vezes_que_foi_sorteado',`quantbola1` = '$total_vezes_sorteado_bola1',`quantbola2` = '$total_vezes_sorteado_bola2',`quantbola3` = '$total_vezes_sorteado_bola3',`quantbola4` = '$total_vezes_sorteado_bola4',`quantbola5` = '$total_vezes_sorteado_bola5',`quantbola6` = '$total_vezes_sorteado_bola6' where `megasena`. `codigo` = '$codigoatualizar'";

mysql_query($comando,$conexao);
	
}

}


$sql = "SELECT * FROM megasena_todosresultados order by concurso desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$total_permissoes = mysql_num_rows($res);


$concurso = $linha[1];
$datasorteio = $linha[2];
$bolaposicao1 = $linha[3];
$bolaposicao2 = $linha[4];
$bolaposicao3 = $linha[5];
$bolaposicao4 = $linha[6];
$bolaposicao5 = $linha[7];
$bolaposicao6 = $linha[8];


}



			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>


<?
if($solicitacao=="permitirsubcategoria"){
	
$numeropermitido = $_POST['numeropermitido'];
	

$comando = "insert into megasena_numerosencontrados(numero)
values('$numeropermitido')";
mysql_query($comando,$conexao);


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

<table width="101%" border="2" cellpadding="0" cellspacing="0">

    <tr>

      <td><form name="form4" method="post" action="index.php">
        <?

error_reporting(E_ALL);



?>
        <?
		  
		  
		  if($solicitacao=="zerar"){
			  
			  
		  $comando = "DELETE FROM megasena_numerosencontrados";
			  mysql_query($comando,$conexao);
			  
		  }
		  
		  
			  if($solicitacao=="zerarcombinacoes"){
			  
			  
		  $comando = "DELETE FROM megasena_combinacoes";
			  mysql_query($comando,$conexao);
			  
		  }
		  
		  if($solicitacao=="zerarcombinacoes2"){
			  
			  
		  $comando = "DELETE FROM megasena_combinacoespossiveis";
			  mysql_query($comando,$conexao);
			  
		  }
		  
		  if($solicitacao=="liberarparasorteio"){
			  
			  $comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n'";
mysql_query($comando,$conexao);
		  
			  
		  }
		  
		  
		  
		  
		  ?>
        <?
			if($solicitacao=="gerarcombinacao"){
			
//$sql = "select * from megasena_numeroparou";
//$res = mysql_query($sql);
//$reg = 0;
//while($linha=mysql_fetch_row($res)) {
//$reg++;


//$numeroparou = $linha[1];
//$numerocombinando = $linha[2];
//	$dz1 = $linha[2];
//}


				//-----------------PRIMEIRA DEZENA---------------------
				
	if($fixardezenas=="fixar"){
		$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz1` = '$dz1fixa' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				
if($dz1fixa % 2 == 0){
$classificacao = "par";
}
else{
$classificacao = "impar";
}
		
$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `numero` = '$dz1fixa'";
mysql_query($comando,$conexao);
					
	}
	else{
		
$sql14 = "select * from megasena_numerosencontrados where numero in(01,02,03,04,05,06,07,08,09,10) order by rand() limit 1";
$res14 = mysql_query($sql14);
while($linha=mysql_fetch_row($res14)) {

	$codigodz1 = $linha[0];
	
$dz1 = $linha[1];

if($dz1 % 2 == 0){
$classificacao = "par";
}
else{
$classificacao = "impar";
}
				

				
		
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz1` = '$dz1' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				
$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz1'";
mysql_query($comando,$conexao);
		
				
}

	}

	            //-----------------PRIMEIRA DEZENA---------------------

				//-----------------SEGUNDA DEZENA---------------------

					
	if($classificacao=="par"){
		
		if($fixardezenas=="fixar"){
$sql9 = "select * from megasena_numerosencontrados where numero in(01,02,03,04,05,06,07,08,09,10,11,13,15,17,19,21,23,25,27,29) order by rand() limit 1";
		}
		else{
$sql9 = "select * from megasena_numerosencontrados where numero in(11,13,15,17,19,21,23,25,27,29) order by rand() limit 1";
		}
	}
	else{
		if($fixardezenas=="fixar"){
$sql9 = "select * from megasena_numerosencontrados where numero in(01,02,03,04,05,06,07,08,09,10,12,14,16,18,20,22,24,26,28,30) order by rand() limit 1";
		}
		else{
$sql9 = "select * from megasena_numerosencontrados where numero in(12,14,16,18,20,22,24,26,28,30) order by rand() limit 1";
		}
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
				
if($fixardezenas=="fixar"){
		$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz3` = '$dz3fixa' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				

					
	}
	else{
				
				
				if($classificacao=="par"){
					//SELECIONA NUMEROS PARES DEZENA 3
$sql10 = "select * from megasena_numerosencontrados where numero in(31,33,35,41,43,45) order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql10 = "select * from megasena_numerosencontrados where numero in(32,34,42,44) order by rand() limit 1";
				}
$res10 = mysql_query($sql10);
while($linha=mysql_fetch_row($res10)) {

	$codigodz3 = $linha[0];
	
$dz3 = $linha[1];
	
	
	if($fixardezenas=="fixar"){
		$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz1` = '$dz3fixa' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				

					
	}
	else{
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz3` = '$dz3' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz3'";
mysql_query($comando,$conexao);
		
	}

}
	}
				
				//-----------------TERCEIRA DEZENA---------------------
				
				
				
				//-----------------QUARTA DEZENA---------------------
				
				if($classificacao=="par"){
					if($fixardezenas=="fixar"){
$sql11 = "select * from megasena_numerosencontrados where numero in(31,32,33,34,35,37,39,41,42,43,44,45,47,49) order by rand() limit 1";
					}
					else{
$sql11 = "select * from megasena_numerosencontrados where numero in(37,39,47,49) order by rand() limit 1";
					}
				}
				else{
					if($fixardezenas=="fixar"){
$sql11 = "select * from megasena_numerosencontrados where numero in(31,32,33,34,35,36,38,40,41,42,43,44,45,46,48,50) order by rand() limit 1";
					}
					else{
$sql11 = "select * from megasena_numerosencontrados where numero in(36,38,40,46,48,50) order by rand() limit 1";
					}
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
				
if($fixardezenas=="fixar"){
		$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz5` = '$dz5fixa' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				

					
	}
	else{
				
	if($classificacao=="par"){
					//SELECIONA NUMEROS PARES DEZENA 3
$sql12 = "select * from megasena_numerosencontrados where numero in(51,53,55) order by rand() limit 1";
				}
				else{
					//SELECIONA NUMEROS IMPARES DEZENA 3
$sql12 = "select * from megasena_numerosencontrados where numero in(52,54) order by rand() limit 1";
				}
$res12 = mysql_query($sql12);
while($linha=mysql_fetch_row($res12)) {

	$codigodz5 = $linha[0];
	
$dz5 = $linha[1];
				
	
	
	if($fixardezenas=="fixar"){
		$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz1` = '$dz5fixa' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
				

					
	}
	else{
	
$comando = "update `$db`.`megasena_cartelatemporaria2` set `dz5` = '$dz5' where `megasena_cartelatemporaria2`. `codigo` = '1'";
mysql_query($comando,$conexao);
	
	$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 's' where `megasena_numerosencontrados`. `codigo` = '$codigodz5'";
mysql_query($comando,$conexao);
		
	}
		
		
}
			}
				
				//-----------------QUINTA DEZENA---------------------
				
				
				
	           //-----------------SEXTA DEZENA---------------------
				
				
	if($classificacao=="par"){
					if($fixardezenas=="fixar"){
$sql13 = "select * from megasena_numerosencontrados where numero in(51,52,53,54,55,57,59) order by rand() limit 1";
					}else{
$sql13 = "select * from megasena_numerosencontrados where numero in(51,52,53,54,55,57,59) order by rand() limit 1";
					}
				}
				else{
					if($fixardezenas=="fixar"){
$sql13 = "select * from megasena_numerosencontrados where numero in(51,52,53,54,55,56,58,60) order by rand() limit 1";
					}
					else{
$sql13 = "select * from megasena_numerosencontrados where numero in(51,52,53,54,55,56,58,60) order by rand() limit 1";
					}
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
	
//echo "<script>

//alert('ATENCAO!!!... COMBINACAO JA REGISTRADA! $dz1 - $dz2 - $dz3 - $dz4 - $dz5 - $dz6');


//</script>";
	
}
else{
	
$comando = "insert into megasena_combinacoespossiveis(dz1,dz2,dz3,dz4,dz5,dz6)
values('$dz1','$dz2','$dz3','$dz4','$dz5','$dz6')";
mysql_query($comando,$conexao);
	
}
	
//$comando = "update `$db`.`megasena_numeroparou` set `numeroparou` = '$dz2' where `megasena_numeroparou`. `codigo` = '0'";
//mysql_query($comando,$conexao);


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
				
				$comando = "update `$db`.`megasena_numerosencontrados` set `sorteado` = 'n'";
mysql_query($comando,$conexao);

		
	
	
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
      </form>
      <td width="29%" rowspan="3" align="center" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "01"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit3" id="submit3" value="01">
            </form></td>
            <td width="22%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "02"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit4" id="submit4" value="02">
            </form></td>
            <td width="16%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "03"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit5" id="submit5" value="03">
            </form></td>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "06"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit6" id="submit6" value="06">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "07"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit7" id="submit7" value="07">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "09"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit8" id="submit8" value="09">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "11"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit9" id="submit9" value="11">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "12"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit10" id="submit10" value="12">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "13"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit11" id="submit11" value="13">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "16"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit12" id="submit12" value="16">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "17"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit13" id="submit13" value="17">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "19"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit14" id="submit14" value="19">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "21"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit15" id="submit15" value="21">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "22"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit16" id="submit16" value="22">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "23"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit17" id="submit17" value="23">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "26"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit18" id="submit18" value="26">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "27"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit19" id="submit19" value="27">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "29"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit20" id="submit20" value="29">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "31"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit21" id="submit21" value="31">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "32"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit22" id="submit22" value="32">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "33"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit23" id="submit23" value="33">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "36"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit24" id="submit24" value="36">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "37"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit25" id="submit25" value="37">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "39"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit26" id="submit26" value="39">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "41"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit27" id="submit27" value="41">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "42"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit28" id="submit28" value="42">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "43"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit29" id="submit29" value="43">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "46"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit30" id="submit30" value="46">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "47"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit31" id="submit31" value="47">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "49"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit32" id="submit32" value="49">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "51"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit33" id="submit33" value="51">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "52"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit34" id="submit34" value="52">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "53"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit35" id="submit35" value="53">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "56"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit36" id="submit36" value="56">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "57"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit37" id="submit37" value="57">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "59"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit38" id="submit38" value="59">
            </form></td>
          </tr>
        </tbody>
      </table>      
      <td width="3%" rowspan="3" align="center" valign="top">      
      <td width="29%" rowspan="3" align="center" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "02"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit3" id="submit3" value="02">
            </form></td>
            <td width="22%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "04"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit4" id="submit4" value="04">
            </form></td>
            <td width="16%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "05"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit5" id="submit5" value="05">
            </form></td>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "06"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit6" id="submit6" value="06">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "08"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit7" id="submit7" value="08">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "10"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit8" id="submit8" value="10">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "12"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit9" id="submit9" value="12">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "14"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit10" id="submit10" value="14">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "15"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit11" id="submit11" value="15">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "16"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit12" id="submit12" value="16">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "18"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit13" id="submit13" value="18">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "20"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit14" id="submit14" value="20">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "22"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit15" id="submit15" value="22">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "24"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit16" id="submit16" value="24">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "25"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit17" id="submit17" value="25">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "26"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit18" id="submit18" value="26">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "28"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit19" id="submit19" value="28">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "30"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit20" id="submit20" value="30">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "32"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit21" id="submit21" value="32">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "34"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit22" id="submit22" value="34">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "35"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit23" id="submit23" value="35">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "36"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit24" id="submit24" value="36">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "38"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit25" id="submit25" value="38">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "40"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit26" id="submit26" value="40">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "42"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit27" id="submit27" value="42">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "44"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit28" id="submit28" value="44">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "45"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit29" id="submit29" value="45">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "46"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit30" id="submit30" value="46">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "48"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit31" id="submit31" value="48">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "50"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit32" id="submit32" value="50">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "52"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit33" id="submit33" value="52">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "54"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit34" id="submit34" value="54">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "55"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit35" id="submit35" value="55">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "56"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit36" id="submit36" value="56">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "58"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit37" id="submit37" value="58">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "60"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit38" id="submit38" value="60">
            </form></td>
          </tr>
        </tbody>
      </table>      
      <td width="4%" rowspan="3" align="center" valign="top">      
      <td width="29%" rowspan="3" align="center" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "03"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit3" id="submit3" value="03">
            </form></td>
            <td width="22%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "04"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit4" id="submit4" value="04">
            </form></td>
            <td width="16%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "05"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit5" id="submit5" value="05">
            </form></td>
            <td width="14%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "07"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit6" id="submit6" value="07">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "08"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit7" id="submit7" value="08">
            </form></td>
            <td width="17%" align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "10"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit8" id="submit8" value="10">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "13"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit9" id="submit9" value="13">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "14"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit10" id="submit10" value="14">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "15"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit11" id="submit11" value="15">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "17"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit12" id="submit12" value="17">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "18"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit13" id="submit13" value="18">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "20"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit14" id="submit14" value="20">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "23"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit15" id="submit15" value="23">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "24"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit16" id="submit16" value="24">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "25"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit17" id="submit17" value="25">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "27"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit18" id="submit18" value="27">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "28"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit19" id="submit19" value="28">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "30"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit20" id="submit20" value="30">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "33"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit21" id="submit21" value="33">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "34"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit22" id="submit22" value="34">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "35"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit23" id="submit23" value="35">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "37"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit24" id="submit24" value="37">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "38"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit25" id="submit25" value="38">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "40"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit26" id="submit26" value="40">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "43"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit27" id="submit27" value="43">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "44"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit28" id="submit28" value="44">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "45"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit29" id="submit29" value="45">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "47"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit30" id="submit30" value="47">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "48"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit31" id="submit31" value="48">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "50"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit32" id="submit32" value="50">
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "53"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit33" id="submit33" value="53">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "54"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit34" id="submit34" value="54">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "55"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit35" id="submit35" value="55">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "57"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit36" id="submit36" value="57">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "58"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit37" id="submit37" value="58">
            </form></td>
            <td align="center" valign="top" bgcolor="#3C63F8"><form name="form5" method="post" action="index.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="numeropermitido" type="hidden" id="numeropermitido" value="<? echo "60"; ?>">
              <input name="solicitacao" type="hidden" id="solicitacao" value="permitirsubcategoria">
              <input class="class01" type="submit" name="submit38" id="submit38" value="60">
            </form></td>
          </tr>
        </tbody>
      </table>      
  </tr>

    <tr>

      <td width="6%"></td>
    </tr>

    <tr>
      <td valign="top"><?
		  
		  

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
		
		//echo "$dz1 - $dz2 - $dz3 - $dz4 - $dz5 - $dz6"; 
	
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
	
echo "<script>

alert('ATENCAO!!!... COMBINACAO JA SORTEADA! $dz1_pesquisar - $dz2_pesquisar - $dz3_pesquisar - $dz4_pesquisar - $dz5_pesquisar - $dz6_pesquisar -->> $combinacao');



</script>";

	
}
else{
	
$comando = "insert into megasena_combinacoespossiveis(dz1,dz2,dz3,dz4,dz5,dz6)
values('$dz1_pesquisar','$dz2_pesquisar','$dz3_pesquisar','$dz4_pesquisar','$dz5_pesquisar','$dz6_pesquisar')";
mysql_query($comando,$conexao);
	
}
}

}
?>
        <form action="analise.php" method="post" name="form4" target="_blank">
          <input type="submit" name="Submit10" value="Analise">
      </form>
        <form action="ultimos resultados.php" method="post" name="form4" target="_blank">
          <input type="submit" name="Submit11" value="Ultimos Resultados">
        </form>
        <form action="combinacoes_posiveis.php" method="post" name="form4" target="_blank">
          <input type="submit" name="Submit12" value="Comb Possiveis">
        </form>
      <p>&nbsp;</p></td>
    </tr>
</table>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td colspan="5" align="left" valign="top"><form name="form1" method="post" action="index.php">
        <table width="95%"  border="1">
          <tr>
            <td width="13%" valign="top">Concurso</td>
            <td width="13%" valign="top">Data</td>
            <td width="13%" valign="top"><div align="center">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="solicitacao" type="hidden" id="solicitacao" value="registrarsorteio">
              DZ1</div></td>
            <td width="18%" valign="top"><div align="center">DZ2</div></td>
            <td width="16%" valign="top"><div align="center">DZ3</div></td>
            <td width="14%" valign="top"><div align="center">DZ4</div></td>
            <td width="13%" valign="top"><div align="center">DZ5</div></td>
            <td width="13%" valign="top"><div align="center">DZ6</div></td>
          </tr>
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
          <tr>
            <td align="center" valign="top"><input name="concurso" type="text" id="concurso" size="10"></td>
            <td align="center" valign="top"><input name="datasorteio" type="text" id="datasorteio" size="10"></td>
            <td align="center" valign="top"><input name="bola1" type="text" id="bola1" value="<? echo "$dz1_pesquisar"; ?>" size="5"></td>
            <td align="center" valign="top"><input name="bola2" type="text" id="bola2" value="<? echo "$dz2_pesquisar"; ?>" size="5"></td>
            <td align="center" valign="top"><input name="bola3" type="text" id="bola3" value="<? echo "$dz3_pesquisar"; ?>" size="5"></td>
            <td align="center" valign="top"><input name="bola4" type="text" id="bola4" value="<? echo "$dz4_pesquisar"; ?>" size="5"></td>
            <td align="center" valign="top"><input name="bola5" type="text" id="bola5" value="<? echo "$dz5_pesquisar"; ?>" size="5"></td>
            <td align="center" valign="top"><input name="bola6" type="text" id="bola6" value="<? echo "$dz6_pesquisar"; ?>" size="5"></td>
          </tr>
          <tr>
            <td colspan="8" align="center" valign="top"><input class="class01"  type="submit" name="Submit9" value="Registrar Sorteio"></td>
          </tr>
        </table>
      </form></td>
    </tr>
    <tr>
      <td width="44%" align="left" valign="top">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="29%">&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="95%" border="0" align="center">
  <tbody>
      <tr>
        <th width="18%" valign="top" scope="col">&nbsp;</th>
        <th width="43%" valign="top" scope="col">&nbsp;</th>
        <th width="39%" valign="top" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
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

