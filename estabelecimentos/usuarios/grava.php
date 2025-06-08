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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 35px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';
include '../../css/botoes.css';


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_op = $linha[0];
$nome_op = $linha[1];
$funcao = $linha[43];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
  <div align="center">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
    
  <? } ?>
  <?
// dados do operador


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

//estabelecimento a que pertence
$estab_pertence = $_POST['estab_pertence'];
$cidade_estab_pertence = $_POST['cidade_estab_pertence'];
$tel_estab_pertence = $_POST['tel_estab_pertence'];
$email_estab_pertence = $_POST['email_estab_pertence'];





//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];

$senha = $_POST['cpf'];

//$senha = $_POST['senha'];
$status = $_POST['status'];
$status_de_envio = $_POST['status_de_envio'];


// Observações

$obs = $_POST['obs'];
$funcao = $_POST['funcao'];
$operador_atende = $_POST['operador_atende'];
$salario = $_POST['salario'];
$calculo = bcdiv($salario, 3, 2);
if($calculo<=199.99){
$limite = 200.00;
}else{
$limite = bcadd($calculo,0,2);
}


$sql = "SELECT * FROM usuarios where cpf = '$cpf'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

$num_cartao_existente = $linha[0];

$nome = $linha[1];
$cpf = $linha[4];

}

if($registros>=1){

echo "ATENÇÃO!!!... <br>CPF $cpf ja cadastrado!<br>Nome: $nome<br> Número do cartão $num_cartao_existente<br><br>";	
	
	
}
else{

$comando = "insert into usuarios(nome,sexo,estadocivil,cpf,rg,orgao,emissao,data_nasc,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,datacadastro,horacadastro,senha,funcao,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,status,salario,limite,operador_atende,status_de_envio) values('$nome','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$data_nasc','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$datacadastro','$horacadastro','$senha','$funcao','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$status','$salario','$limite','$operador_atende','$status_de_envio')";

mysql_query($comando,$conexao) or die("Erro ao gravar usuário!");


echo "Usuário cadastrado com sucesso!<br> Foi enviado um e-mail ao usuário informando-o que está cadastrado no cartão fidelidade Digicompras! <br><br>Imprima essa tela e entregue ao usuário pois ele já pode começar a solicitar que as lojas pontuem suas compras, acumulando assim os pontos para receber brindes ou descontos.<br><br>";

}
?>
    
    
  <?
$sql = "SELECT * FROM usuarios order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$num_cartao_gerado = $linha[0];

$nome_usuario = $linha[1];
$status_usuario = $linha[46];



$codigo = $linha[0];
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
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$email_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[44];
$senha = $linha[40];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];
$status_de_envio = $linha[52];

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
	$mens   =  "Olá! $nome você foi cadastrado como usuário do cartão $nfantasia!   \n";
	$mens  .=  "Seja muito bem vindo a Digicompras! \n";
	$mens  .=  "Nosso site para você visualizar seu saldo e nos enviar sugestoes $site \n\n";
	$mens  .=  "Nº do seu cartão: ".$num_cartao_gerado."                                                       \n";	
	$mens  .=  "Status do seu cartão: ".$status."                                                       \n";	
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Sua senha: ".$senha."                                                    \n";
	$mens  .=  "Salário Informado: ".$salario."                                                    \n";
	$mens  .=  "Seu limite no cartão: ".$limite."                                                    \n";
	$mens  .=  "Empresa conveniada: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E_Mail: ".$email_estab_pertence."                                                    \n";	
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n\n";
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Empresa conveniada: ".$estab_pertence."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estab_pertence."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estab_pertence."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estab_pertence."                                                    \n";


	if($registros>=1){
		
	}
	else{
		
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "$nome cadastrado(a) na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	
	}
	
?>
    
  <?
$data_compra = date('d-m-Y');
$mes_ano = date('m-Y');
$hora_compra = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');


//$comando = "insert into compras(nome,cpf,endereco,numero,bairro,cep,telefone,celular,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,valor_compra,data_compra,hora_compra,dia,mes,ano,mes_ano,num_cartao,estab_pertence_com,tel_estab_pertence_com,cidade_estab_pertence_com,email_estab_pertence_com,operador_atende,operador_realizou,cel_operador_realizou,email_operador_realizou) values('$nome','$cpf','$endereco','$numero','$bairro','$cep','$telefone','$celular','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','20.00','$data_compra','$hora_compra','$dia','$mes','$ano','$mes_ano','$codigo','DIGICOMPRAS','16-9739-1418','Franca','digicompras@digicompras.com.br','Ivan Campos de Araújo','$operador','$cel_operador','$email_operador')";

//mysql_query($comando,$conexao) or die("Erro ao cadastrar usuário! Tente novamente");


?>
    
    
  </div>
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="22%"><div align="center">
      <form name="form1" method="post" action="../orcamentos/orcamento.php">
      <?
	  if($funcao=="TELEVENDAS"){
        echo "<input type='submit' class='class01' name='Submit2' value='Efetuar Venda'>";
	  }
		?>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <span class="style1">
          <input name="solicitacao" type="hidden" id="solicitacao" value="abrir_orcamento">
          </span>
      </form>
    </div></td>
    <td width="35%"><div align="center">
      <form action="impressao.php" method="post" name="form5" target="_blank">
        <strong>
          <?
if($registros>=1){
$sql2 = "select sum(quant_impressao) as total_impressoes from impressao_de_cartao where num_cartao = '$num_cartao_existente'";
}
else{
$sql2 = "select sum(quant_impressao) as total_impressoes from impressao_de_cartao where num_cartao = '$num_cartao_gerado'";
}
$resultado2=mysql_query($sql2, $conexao);
$linha=mysql_fetch_array($resultado2);

$quant_impressao = bcadd($linha['total_impressoes'],1,0);

?>
          </strong>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="codigo" type="hidden" id="codigo" value="<? if($registros>=1){ echo "$num_cartao_existente"; }else{ echo "$num_cartao_gerado"; } ?>">
        <input type="submit" class='class01' name="button3" id="button3" value="<? if($quant_impressao<=0){
echo "Imprimir 1&ordm; Via";
}else{
echo "Imprimir Via $quant_impressao";
} ?>"">
      </form>
    </div></td>
    <td width="35%"><div align="center">
      <form name="form1" method="post" action="inserir.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" class='class01' name="Submit" value="Cadastrar outro Usu&aacute;rio">
      </form>
    </div></td>
    <td width="35%"><div align="center">
      <form name="form1" method="post" action="menu.php">
        <input type="submit" class='class01' name="Submit3" value="Voltar">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </form>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>