<?

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>
<?

//require("conexao.php"); or die("erro na requisição");

require '../../conect/conect.php';


?>
<?

// dados do operador



$grupo = $_POST['grupo'];



$nome = $_POST['nome'];

$sexo = $_POST['sexo'];

$estadocivil = $_POST['estadocivil'];

$cpf = $_POST['cpf'];

$rg = $_POST['rg'];

$orgao = $_POST['orgao'];

$emissao = $_POST['emissao'];

$data_nasc = $_POST['data_nasc'];

$pai = $_POST['pai'];

$mae = $_POST['mae'];

$endereco = $_POST['endereco'];

$numero  = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$email = $_POST['email'];

$datacadastro = $_POST['datacadastro'];

$horacadastro = $_POST['horacadastro'];

$salario = $_POST['salario'];

$classificacao = $_POST['classificacao'];

$vale_alimentacao = $_POST['vale_alimentacao'];

$gratificacao = $_POST['gratificacao'];

$comissao = $_POST['comissao'];

$emprestimo = $_POST['emprestimo'];

$admissao = $_POST['admissao'];

$demissao = $_POST['demissao'];



//estabelecimento a que pertence

$estab_pertence = $_POST['estab_pertence'];

$cidade_estab_pertence = $_POST['cidade_estab_pertence'];

$tel_estab_pertence = $_POST['tel_estab_pertence'];

$email_estab_pertence = $_POST['email_estab_pertence'];











//dados do operador



$operador = $_POST['operador'];

$cel_operador = $_POST['cel_operador'];

$email_operador = $_POST['email_operador'];



//dados do estabelecimento



$estabelecimento = $_POST['estabelecimento'];

$cidade_estabelecimento = $_POST['cidade_estabelecimento'];

$tel_estabelecimento = $_POST['tel_estabelecimento'];

$email_estabelecimento = $_POST['email_estabelecimento'];

$usuario_op = $_POST['usuario'];

$senha_op = $_POST['senha'];

$frase_secreta = $_POST['frase_secreta'];

// Observações



$obs = $_POST['obs'];

$funcao = $_POST['funcao'];
$cbo = $_POST['cbo'];
$secao = $_POST['secao'];

$meta = $_POST['meta'];

$status = $_POST['status'];

$bloqueio_parcial = $_POST['bloqueio_parcial'];

$tempo_almoco = $_POST['tempo_almoco'];





$comando = "insert into terceirizados(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,usuario,senha,funcao,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,grupo,salario,vale_alimentacao,gratificacao,comissao,emprestimo,admissao,demissao,meta,status,bloqueio_parcial,tempo_almoco,cbo,secao,classificacao) values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$usuario_op','$senha_op','$funcao','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$grupo','$salario','$vale_alimentacao','$gratificacao','$comissao','$emprestimo','$admissao','$demissao','$meta','$status','$bloqueio_parcial','$tempo_almoco','$cbo','$secao','$classificacao')";



mysql_query($comando,$conexao) or die("Erro ao gravar terceirizado!");





echo "Terceirizado cadastrado com sucesso!<br> Foi enviado um e-mail ao terceirizado avisando ele que está cadastrado na empresa e uma cópia a você <br><br>";



?>
<?

$sql = "SELECT * FROM terceirizados order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

printf("Código do terceirizado é: $linha[0]");

$nome = $linha[1];

$cpf = $linha[4];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

//$usuario = $linha[40];

//$senha = $linha[41];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$email_estab_pertence = $linha[47];

$tel_estab_pertence = $linha[46];




}
?>
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

	$mens   =  "Olá! você foi cadastrado como terceirizado na $nfantasia!   \n";

	$mens  .=  "Seja muito bem vindo em nossa equipe! \n";

	$mens  .=  "Nosso site para você nos visite $site \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "Grupo: ".$grupo."                                                    \n";

	$mens  .=  "Ligado ao estabelecimento: ".$estab_pertence."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";

	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	

	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";

	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";

	$mens  .=  "Seu Usuário: ".$usuario."                                                    \n";

	$mens  .=  "Sua Senha: ".$senha."                                                    \n";

	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";





	

	//DISPARA O EMAIL

	$envia  =  mail($email_dest, "Terceirizado cadastrado no sistema em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

	



?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="menu.php">
<?
$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
<input type="submit" name="button" id="button" value="Voltar">
</form>
</body>
</html>
<?

mysql_close($conexao);

?>
