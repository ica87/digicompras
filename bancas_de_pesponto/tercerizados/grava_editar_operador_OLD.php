<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");




?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?

//require("conect/conect.php"); or die("erro na requisição");

require '../../conect/conect.php';






?>
<?

$estab_pertence = $_POST['estab_pertence'];



		  

$sql = "SELECT * FROM estabelecimentos where nfantasia = '$estab_pertence'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$cidade_estab_pertence = $linha[10];

$email_estab_pertence = $linha[14];

$tel_estab_pertence = $linha[12];

}

		  



$codigo = $_POST['codigo'];

$nome_antigo = $_POST['nome_antigo'];

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

$numero = $_POST['numero'];

$bairro = $_POST['bairro'];

$complemento = $_POST['complemento'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$telefone = $_POST['telefone'];

$celular = $_POST['celular'];

$email = $_POST['email'];

$obs = $_POST['obs'];

$dataalteracao = $_POST['dataalteracao'];

$horaalteracao = $_POST['horaalteracao'];

$operador_alterou = $_POST['operador_alterou'];

$cel_operador_alterou = $_POST['cel_operador_alterou'];

$email_operador_alterou = $_POST['email_operador_alterou'];

$estabelecimento_alterou = $_POST['estabelecimento_alterou'];

$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];

$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];

$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];

$usuario = $_POST['usuario'];

$senha = $_POST['senha'];

$grupo = $_POST['grupo'];

$funcao = $_POST['funcao'];

$cbo = $_POST['cbo'];

$secao = $_POST['secao'];

$estab_pertence = $_POST['estab_pertence'];

$salario = $_POST['salario'];

$classificacao = $_POST['classificacao'];

$vale_alimentacao = $_POST['vale_alimentacao'];

$gratificacao = $_POST['gratificacao'];

$comissao = $_POST['comissao'];

$emprestimo = $_POST['emprestimo'];

$admissao = $_POST['admissao'];

$demissao = $_POST['demissao'];

$meta = $_POST['meta'];

$status = $_POST['status'];

$bloqueio_parcial = $_POST['bloqueio_parcial'];

$tempo_almoco = $_POST['tempo_almoco'];



$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`operadores` set `codigo` = '$codigo',`nome` = '$nome',`sexo` = '$sexo',`estadocivil` = '$estadocivil',`cpf` = '$cpf',`rg` = '$rg',`orgao` = '$orgao',`emissao` = '$emissao',`data_nasc` = '$data_nasc',`pai` = '$pai',`mae` = '$mae',`endereco` = '$endereco',`numero` = '$numero',`bairro` = '$bairro',`complemento` = '$complemento',`cidade` = '$cidade',`estado` = '$estado',`cep` = '$cep',`telefone` = '$telefone',`celular` = '$celular',`grupo`= '$grupo',

`email` = '$email',`obs` = '$obs',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou',`usuario` = '$usuario',`senha` = '$senha',`funcao` = '$funcao',`estab_pertence` = '$estab_pertence',`cidade_estab_pertence` = '$cidade_estab_pertence',`tel_estab_pertence` = '$tel_estab_pertence',`email_estab_pertence` = '$email_estab_pertence',`salario` = '$salario',`vale_alimentacao` = '$vale_alimentacao',`gratificacao` = '$gratificacao',`comissao` = '$comissao',`emprestimo` = '$emprestimo',`admissao` = '$admissao',`demissao` = '$demissao',`meta` = '$meta',`status` = '$status',`bloqueio_parcial` = '$bloqueio_parcial',`tempo_almoco` = '$tempo_almoco',`cbo` = '$cbo',`secao` = '$secao',`classificacao` = '$classificacao' where `operadores`. `codigo` = '$codigo' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações desse operador");





echo "Dados do operador alterados no banco de dados com sucesso<br>";

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

	$mens   =  "Olá! seus dados foram atualizados na $nfantasia!   \n";

	$mens  .=  "Visite-nos $site \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "Grupo: ".$grupo."                                                    \n";

	$mens  .=  "Data da alteração: ".$dataalteracao."                                                    \n";

	$mens  .=  "Hora da alteração: ".$horaalteracao."                                                    \n";

	$mens  .=  "Operador que efetuou a alteração: ".$operador_alterou."                                                    \n";

	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";

	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";

	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";

	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";

	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";



	

	//DISPARA O EMAIL

	//$envia  =  mail($email_dest, "Funcionário atualizado no sistema em ".$dataalteracao, $mens,"From:".$email_dest."\r\nBcc:".$email);

	



?>
<?

mysql_close($conexao);

?>

<form name="form1" method="post" action="menu.php">
  <input name="usuario" type="hidden" id="usuario" value="<? echo $usuario; ?>">
<input name="senha" type="hidden" id="senha" value="<? echo $senha; ?>">
<input type="submit" name="button" id="button" value="Voltar">
</form>
</body>
</html>
