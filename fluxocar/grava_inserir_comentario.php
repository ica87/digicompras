<?

error_reporting(E_ALL);



require 'conect/conect.php';



$nome = $_POST['nome'];

$cidade = $_POST['cidade'];

$comentario = $_POST['comentario'];





$comando = "insert into comentarios(nome,cidade,comentario,aprovado) values('$nome','$cidade','$comentario','Não')";





mysql_query($comando,$conexao) or die("Erro ao gravar os dados no servidor!");





echo "Comentário enviado com sucesso!<br><br> Agradecemos seu comentário!";



?>



<?

$sql = "SELECT * FROM comentarios order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

$codigo = $linha[0];

$nome2 = $linha[1];

$cidade2 = $linha[2];

$comentario2 = $linha[3];

$aprovado = $linha[4];



?>



<? } ?>



<?

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$email_empresa = $linha[14];

$site = $linha[15];



}

	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens   =  "Seu cliente ".$nome2.", da cidade ".$cidade2."   \n";

	$mens  .=  "Postou este conentário no seu site \n";	

	$mens  .=  "Código do comentário: ".$codigo."                                                    \n";

	$mens  .=  "Comentário: ".$comentario2."                                                       \n";

	$mens  .=  "Aprovado: ".$aprovado."                                                   \n";

	$mens  .=  "Acesse sua área administrativa para decidir o que fazer com esse comentário!                                                    \n";



	//DISPARA O EMAIL

	$envia  =  mail($email_dest, "Comentário postado no site!  ".$nome2." de ".$cidade2, $mens,"From:".$email_dest."\n");



?>





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

-->

</style></head>

<?

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor_fundo_navegacao = $linha[1];



}

?>





<body bgcolor="#<? echo $cor_fundo_navegacao; ?>" 

  

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$background = $linha[1];

}





?>



background="imagens_sistema/<? echo $background; ?>" bgproperties="fixed">

<br>

<form name="form1" method="post" action="navegacao.php">

  <input class='class01' type="submit" name="Submit" value="Voltar">

</form>

</body>

</html>

<?

mysql_close($conexao);

?>