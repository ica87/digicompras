
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

require '../../conect/conect.php';

$hoje = date('d/m/Y')+1;


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>



<style type="text/css">
<!--
.style2 {font-weight: bold}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #000000}
.style6 {color: #000000; font-weight: bold; }
-->
</style>
<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0"></body> 
  
<? } ?>




      
<table width="100%"  border="0">
  <?
			


$sql = "SELECT * FROM clientes  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);


$codigo = $linha[0];



?>
<?
$sql2 = "select * from db";
$res2 = mysql_query($sql2);
while($linha=mysql_fetch_row($res2)) {


$comando = "update `$linha[1]`.`clientes` set `codigo` = '$codigo',`status_cliente` = 'Ativo' where `clientes`. `codigo` = '$codigo'";
}

mysql_query($comando,$conexao);



?>

		
        
          
<tr>
          <? echo $codigo; ?> -  <br><br>
  </tr>



<? } ?>
		  
	<? echo $registros; ?>	  
</table>
