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

$limite = $_POST['limite'];
$numerosorteado = $_POST['numerosorteado'];
$posicao = $_POST['posicao'];
$ordem = $_POST['ordem'];
	

	
	

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

  

<? } ?>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="100%" colspan="5" align="left" valign="top"><form name="form1" method="post" action="analise.php">
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
			<?
			
$sql = "SELECT * FROM megasena_todosresultados order by concurso desc limit 3";
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
  </tbody>
</table>
<table width="95%" border="0" align="center">
  <tbody>
      <tr>
        <td width="100%" colspan="3"><table width="100%" border="0" align="left">
          <tbody>
            <tr>
              <th bgcolor="#cacaca" scope="col"><form name="form4" method="post" action="analise.php">
                Posi&ccedil;&atilde;o
                <select name="posicao" id="posicao">
                  <option selected><? echo "$posicao"; ?></option>
                  <option>bola1</option>
                  <option>bola2</option>
                  <option>bola3</option>
                  <option>bola4</option>
                  <option>bola5</option>
                  <option>bola6</option>
                </select>
                Numero Sorteado
<input name="numerosorteado" type="text" id="numerosorteado" value="<? echo "$numerosorteado"; ?>" size="4">
                <label for="ordem">Ordenar:</label>
                <select name="ordem" id="ordem">
                  <option>desc</option>
				  <option>asc</option>
                  <option selected><? echo "$ordem"; ?></option>
                </select>
                Limite 
                <input name="limite" type="text" id="limite" value="<? echo "$limite"; ?>" size="4">
<input type="submit" name="Submit8" value="Pesquisar">
              </form></th>
            </tr>
            <tr>
              <th width="49%" bgcolor="#cacaca" scope="col"><?
				  

				  ?>
                Selecionados</th>
            </tr>
            <?



$sql = "SELECT * FROM megasena_todosresultados where $posicao = '$numerosorteado' order by concurso $ordem limit $limite";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_num_encontrados++;
	
$concurso = $linha[1];
	
if($posicao=="bola1"){
	$dz_pesquisada = $linha[3];
}
	if($posicao=="bola2"){
	$dz_pesquisada = $linha[4];
}
	if($posicao=="bola3"){
	$dz_pesquisada = $linha[5];
}
	if($posicao=="bola4"){
	$dz_pesquisada = $linha[6];
}
	if($posicao=="bola5"){
	$dz_pesquisada = $linha[7];
}
	if($posicao=="bola6"){
	$dz_pesquisada = $linha[8];
}
	

	$concursoanterior = bcsub($concurso,1);
	
$sql2 = "SELECT * FROM megasena_todosresultados where concurso = '$concursoanterior'";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {
$reg_num_encontrados_anterior++;
	
$concursoanterior = $linha[1];
	
if($posicao=="bola1"){
	$dezena_pesquisada_anterior = $linha[3];
}
	if($posicao=="bola2"){
	$dezena_pesquisada_anterior = $linha[4];
}
	if($posicao=="bola3"){
	$dezena_pesquisada_anterior = $linha[5];
}
	if($posicao=="bola4"){
	$dezena_pesquisada_anterior = $linha[6];
}
	if($posicao=="bola5"){
	$dezena_pesquisada_anterior = $linha[7];
}
	if($posicao=="bola6"){
	$dezena_pesquisada_anterior = $linha[8];
}

	
	$concursoposterior = bcadd($concurso,1);
	
$sql40 = "SELECT * FROM megasena_todosresultados where concurso = '$concursoposterior'";
$res40 = mysql_query($sql40);
while($linha=mysql_fetch_row($res40)) {
$reg_num_encontrados_posterior++;
	
$concursoposterior = $linha[1];
	
if($posicao=="bola1"){
	$dz_pesquisada_posterior = $linha[3];
}
	if($posicao=="bola2"){
	$dz_pesquisada_posterior = $linha[4];
}
	if($posicao=="bola3"){
	$dz_pesquisada_posterior = $linha[5];
}
	if($posicao=="bola4"){
	$dz_pesquisada_posterior = $linha[6];
}
	if($posicao=="bola5"){
	$dz_pesquisada_posterior = $linha[7];
}
	if($posicao=="bola6"){
	$dz_pesquisada_posterior = $linha[8];
}
?>
            <tr>
              <td align="center" bgcolor="#cacaca"><? echo "$concursoanterior - $dezena_pesquisada_anterior <<---- $concurso -  $dz_pesquisada --->>> $concursoposterior - $dz_pesquisada_posterior <br><br>"; ?></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#cacaca">&nbsp;</td>
            </tr>
            <? } } } ?>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
<p></p>
<p>
    
  </p>
	<?
	$sql = "SELECT * FROM megasena order by quantidade desc limit 30";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

	
$dezena = $linha[1];
$quantidade = $linha[2];
	
	echo "Dezena: $dezena quantidade $quantidade<br><br>";
	
}
	?>
<p>&nbsp;</p>
<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
<p>
	  
</p>
</body>

</html>

