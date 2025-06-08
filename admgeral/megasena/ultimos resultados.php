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
      <th width="49%" bgcolor="#cacaca" scope="col"><form name="resultadospesquisados" method="post" action="ultimos resultados.php">
        &Uacute;ltimos
        <input name="limite" type="text" id="limite" value="<? echo "$limite"; ?>" size="4">
        sorteios
        <input type="submit" name="Submit8" value="Pesquisar">
		  <script language='JavaScript' type='text/javascript'>
document.resultadospesquisados.limite.focus()
</script>
      </form></th>
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
            <td colspan="8" align="center" valign="top">&nbsp;</td>
            </tr>
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

$sql = "SELECT * FROM megasena_todosresultados order by concurso desc limit $limite";
$res = mysql_query($sql);
			$var1 = 0;
			$var2 = 0;
			$var3 = 0;
			$var4 = 0;
			$var5 = 0;
			$var6 = 0;
while($linha=mysql_fetch_row($res)) {
	
$concurso = $linha[1];
	
	$datasorteio = $linha[2];

	$bolaposicao1 = $linha[3];
	$var1 += $bolaposicao1;

	$bolaposicao2 = $linha[4];
	$var2 += $bolaposicao2;

	$bolaposicao3 = $linha[5];
	$var3 += $bolaposicao3;

	$bolaposicao4 = $linha[6];
	$var4 += $bolaposicao4;

	$bolaposicao5 = $linha[7];
	$var5 += $bolaposicao5;

	$bolaposicao6 = $linha[8];
	$var6 += $bolaposicao6;

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
			<? } ?>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
				<? 
	echo "$var1";
				?>
			  </td>
            <td align="center" valign="top"><? 
	echo "$var2";
				?></td>
            <td align="center" valign="top"><? 
	echo "$var3";
				?></td>
            <td align="center" valign="top"><? 
	echo "$var4";
				?></td>
            <td align="center" valign="top"><? 
	echo "$var5";
				?></td>
            <td align="center" valign="top"><? 
	echo "$var6";
				?></td>
          </tr>
			
          <tr>
            <td colspan="8" align="center" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<table width="95%"  border="1" align="center">
  <tr>
    <td colspan="7" align="center" valign="top"><? $sql = "SELECT * FROM megasena_todosresultados order by concurso desc limit $limite";
$res = mysql_query($sql);

$registros_encontrados = mysql_num_rows($res);
	
	echo " N $registros_encontrados";
	?></td>
  </tr>
  <tr>
    <td width="11%" valign="top">&nbsp;</td>
    <td width="11%" valign="top"><div align="center">
    X</div></td>
    <td width="11%" align="center" valign="top">Y</td>
    <td width="13%" align="center" valign="top">X.Y</td>
    <td width="12%" align="center" valign="top">X&sup2;</td>
    <td width="10%" align="center" valign="top">Y&sup2;</td>
    <td width="17%" valign="top">&nbsp;</td>
  </tr>
  <?

$sql = "SELECT * FROM megasena_todosresultados order by concurso desc limit $limite";
$res = mysql_query($sql);
			$var1_1 = 0;
			$var_data_sem_hifen1 = 0;
			$var_xy = 0;
			$var_x_ao_quadrado = 0;
			$var_y_ao_quadrado = 0;
while($linha=mysql_fetch_row($res)) {
	
$concurso = $linha[1];
	
	$datasorteio = $linha[2];
	
	$arr = explode("-", $datasorteio);
 
$anoinicio = $arr[2];
$mesinicio = $arr[1];
$diainicio = $arr[0];

$data_sem_hifen1 = "$diainicio$mesinicio$anoinicio";
	$var_data_sem_hifen1 += $data_sem_hifen1;

	$bolaposicao1_1 = $linha[3];
	$var1_1 += $bolaposicao1_1;

	
?>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top"><? echo "$bolaposicao1_1"; ?></td>
    <td align="center" valign="top"><? echo "$data_sem_hifen1"; ?></td>
    <td align="center" valign="top"><? $xy = bcmul($bolaposicao1_1,$data_sem_hifen1); echo "$xy";
		$var_xy += $xy;
		?></td>
    <td align="center" valign="top"><? $x_ao_quadrado = bcmul($bolaposicao1_1,$bolaposicao1_1); echo "$x_ao_quadrado";
	$var_x_ao_quadrado += $x_ao_quadrado;	
	
		?></td>
    <td align="center" valign="top"><? $y_ao_quadrado = bcmul($data_sem_hifen1,$data_sem_hifen1); echo "$y_ao_quadrado";
		$var_y_ao_quadrado += $y_ao_quadrado;
		?></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <? } ?>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" class="style6"><strong>
      <? 
	echo "$var1_1";
				?>
    </strong></td>
    <td align="center" valign="top" class="style6"><strong>
      <? 
	echo "$var_data_sem_hifen1";
				?>
    </strong></td>
    <td align="center" valign="top" class="style6"><strong>
      <? 
	echo "$var_xy";
				?>
    </strong></td>
    <td align="center" valign="top" class="style6"><strong>
      <? 
	echo "$var_x_ao_quadrado";
				?>
    </strong></td>
    <td align="center" valign="top" class="style6"><strong>
      <? 
	echo "$var_y_ao_quadrado";
				?>
    </strong></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" align="center" valign="top">&nbsp;</td>
  </tr>
</table>
<p></p>
<table width="60%" border="0" align="center">
  <tbody>
    <tr>
      <th colspan="5" scope="col">COEFICIENTE DE CORRELA&Ccedil;&Atilde;O </th>
    </tr>
    <tr>
      <th width="8%" scope="row">&nbsp;</th>
      <td width="66%">n . <img src="sigma.jpg" width="15" height="20" alt=""/>x . y - <img src="sigma.jpg" width="15" height="20" alt=""/>x . <img src="sigma.jpg" width="15" height="20" alt=""/>y</td>
      <td width="18%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r = </th>
      <td><img src="radical.jpg" width="39" height="24" alt=""/>[n . <img src="sigma.jpg" width="15" height="20" alt=""/>x&sup2; - (<img src="sigma.jpg" width="15" height="20" alt=""/>x)&sup2;] . [n . <img src="sigma.jpg" width="15" height="20" alt=""/>y&sup2; - (<img src="sigma.jpg" width="15" height="20" alt=""/>y)&sup2;]</td>
      <td> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><? echo "$registros_encontrados"; ?> . <? echo "$var_xy"; ?> - <? echo "$var1_1"; ?> . <? echo "$var_data_sem_hifen1"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><img src="radical.jpg" width="39" height="24" alt=""/>[<? echo "$registros_encontrados"; ?> . <? echo "$var_x_ao_quadrado"; ?> - (<? echo "$var1_1"; ?>)&sup2;] .[ <? echo "$registros_encontrados"; ?> . <? echo "$var_data_sem_hifen1"; ?> - (<? echo "$var_data_sem_hifen1"; ?>)&sup2;]</td>
      <td> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><? $n_vezes_y = bcmul($registros_encontrados,$var_xy); echo "$n_vezes_y"; ?> - 
      <? $x_vezes_y = bcmul($var1_1,$var_data_sem_hifen1); echo "$x_vezes_y"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><img src="radical.jpg" width="39" height="24" alt=""/>[<? $n_x_ao_quadrado = bcmul($registros_encontrados,$var_x_ao_quadrado); echo "$n_x_ao_quadrado"; ?> - <? $valor_de_x_ao_quadrado = bcmul($var1_1,$var1_1); echo "$valor_de_x_ao_quadrado"; ?>] . [
        <? $quadrado_novamente_de_var_y_ao_quadrado = bcmul($var_y_ao_quadrado,$var_y_ao_quadrado);  $n_y_ao_quadrado_novo_valor = bcmul($registros_encontrados,$quadrado_novamente_de_var_y_ao_quadrado); echo "$n_y_ao_quadrado_novo_valor"; ?> - <? $valor_y_ao_quadrado = bcmul($var_data_sem_hifen1,$var_data_sem_hifen1); echo "$valor_y_ao_quadrado"; ?>
]</td>
      <td> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><? $n_vezes_y_menos_x_vezes_y = bcmul($n_vezes_y,$x_vezes_y); echo "$n_vezes_y_menos_x_vezes_y"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><img src="radical.jpg" width="39" height="24" alt=""/>
        <? $n_x_ao_quadrado_menos_valor_de_x_ao_quadrado = bcsub($n_x_ao_quadrado,$valor_de_x_ao_quadrado); echo "$n_x_ao_quadrado_menos_valor_de_x_ao_quadrado"; ?> . 
      <? $n_y_ao_quadrado_menos_valor_y_ao_quadrado = bcsub($n_y_ao_quadrado_novo_valor,$valor_y_ao_quadrado); echo "$n_y_ao_quadrado_menos_valor_y_ao_quadrado"; ?></td>
      <td> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><? $n_vezes_y_menos_x_vezes_y = bcmul($n_vezes_y,$x_vezes_y); echo "$n_vezes_y_menos_x_vezes_y"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><img src="radical.jpg" width="39" height="24" alt=""/>
      <? $multiplica_os_dois_ultimos_denominadores = bcmul($n_x_ao_quadrado_menos_valor_de_x_ao_quadrado,$n_y_ao_quadrado_menos_valor_y_ao_quadrado); echo "$multiplica_os_dois_ultimos_denominadores"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r = </th>
      <td><? $n_vezes_y_menos_x_vezes_y = bcmul($n_vezes_y,$x_vezes_y); echo "$n_vezes_y_menos_x_vezes_y"; ?></td>
      <td> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><? // valor cuja raiz quadrada será obtida
  $valor = $multiplica_os_dois_ultimos_denominadores;
   
  // vamos obter a raiz quadrada do valor acima
  $raiz_quadrada = sqrt($valor);
 
		  echo "$raiz_quadrada";
  // vamos exibir o resultado
  //echo "A raiz quadrada de " . $valor . " é: " . $raiz_quadrada; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><? $divisao_final = bcdiv($n_vezes_y_menos_x_vezes_y,$raiz_quadrada); echo "$divisao_final"; ?> . 100</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">r =</th>
      <td><? $resultado_da_divisao_final_vezes_cem = bcmul($divisao_final,100); echo "$resultado_da_divisao_final_vezes_cem"; ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
<p>
	  
</p>
</body>

</html>

