<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px}
-->
</style></head>

<body>
<p>        
<?
error_reporting(E_ALL);

require '../../conect/conect.php';

?>
</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<form action="selecione_num_pedido_para_alterar_status.php" method="post" name="form2" target="navegacao">
  <input type="submit" name="Submit2" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?


//recebe os dados do cliente para efetuar o pedido
$num_pedido = $_POST['num_pedido'];
$status = $_POST['status'];
?>
<br><br>
<?

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
$reg++;


$comando = "update `$linha[1]`.`pedidos` set `num_pedido` = '$num_pedido',`status` = '$status' where `pedidos`. `num_pedido` = '$num_pedido' limit 1 ";
}


mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Status do pedido alterado com sucesso<br>";

?>
<?
printf("O número do pedido alterado é: $num_pedido");
?>


<?
$sql = "SELECT * FROM pedidos where num_pedido = '$num_pedido' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>


<?
$num_pedido = $linha[0];
$status = $linha[347];
$email = $linha[13];

?>



<? } ?>

<?
    
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   "digicompras@digicompras.com.br";
	
	//PREPARA O PEDIDO
	$mens   =  "Seu pedido evoluiu! Confira abaixo a sessão em que ele se encontra.  \n";
	$mens  .=  "Nº de seu pedido: ".$num_pedido."                                                    \n";
	$mens  .=  "Agora ele se encontra em: ".$status."                                                    \n";
	$mens  .=  "Assim que tivermos novas informações sobre o seu pedido, lhe comunicaremos!  \n";
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Comunicado! evolução do pedido Nº ".$num_pedido, $mens,"From:".$email_dest."\r\nBcc:".$email);
	

?>

     




<?
mysql_close($conexao);
?>