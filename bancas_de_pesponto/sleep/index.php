<?php 
// Incluimos o arquivo de conexão com o banco
require '../../conect/conect.php';
?>
<?php 
// selecionando os emails no banco de dados
mysql_select_db($database_conn2, $conn2);
$query_RSemails = "SELECT * FROM emails";
$RSemails = mysql_query($query_RSemails, $conn2) or die(mysql_error());
$totalRows_RSemails = mysql_num_rows($RSemails);

// assunto e mensagem para ser enviada.
// mensagem resgatada de um formulário padrão de envio,
// através do método POST
$assunto = "Meu envio de emails";
$mensagem = $_POST['mensagem'];

// contador de emails que servirá para a função sleep
$cont = 0;

// abertura do while de envio dos emails cadastrados
// previamente em um banco de dados mysql
while ($row_RSemails = mysql_fetch_assoc($RSemails)) {
   $paraemail = $row_RSemails['email'];
   $nome      = $row_RSemails['nome'];

// função sleep
// assim que a variável $cont, chegar em 300, 
// o script irá ser atrasado em 500 segundos
$cont = $cont + 1;
if ($cont == 300)
{
    flush();

    sleep (500);
    $cont = 0;
}

mail("$paraemail","$assunto","$mensagem");  
} // fecha o while de envio dos emails
?>