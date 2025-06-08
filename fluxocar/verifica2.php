<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["nome"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.



?>
<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$data_hoje = date('d-m-Y');
$nome = $_SESSION['nome'];

require 'conect/conect.php';


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$nome_operador = $linha[1];
}



$sql = "SELECT * FROM ponto where nome = '$nome_operador' and data = '$data_hoje'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_ponto = $linha[0];
$nome = $linha[1];
$data = $linha[2];
$ent_m = $linha[3];
$sai_m = $linha[4];
$ent_t = $linha[5];
$sai_t = $linha[6];

}


if($sai_t==" "){

    $_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	Header("Location: sistem/index.php");

}


else{

	echo "Prezado(a) $nome você já encerrou suas atividades no dia de hoje as $sai_t <br><br> Por esse motivo não é possível você acessar o sistema! <br><br> Boa noite e até amanhã!";


}

?> 
