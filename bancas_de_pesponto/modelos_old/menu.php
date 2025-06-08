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

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';

?>



</td>

    </tr>

    <tr>

      <td width="23%">&nbsp;</td>

      <td width="77%"><strong><font color="#0000FF" size="4">O que deseja fazer com os Modelos?</font></strong></td>

    </tr>

    <tr>

      <td><form name="form1" method="post" action="../principal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Voltar ao menu principal">

      </form></td>

      <td><? //$valor_unit_empresa = "0.77"; 
	  
	  //$percentual = "0.5";
	  //$percentual_decimal = $percentual/100;
	  
	  //$preco_empresa = $valor_unit_empresa + bcmul($valor_unit_empresa,$percentual_decimal,5);
	  
	  //echo "$valor_unit_empresa<br>";
	  //echo "$percentual<br>";
	  //echo "$percentual_decimal<br>";
	  //echo "$preco_empresa<br>";
	  //echo round ($preco_empresa,4)."<br>";
	  
	  //$preco_empresa = round($valor_unit_empresa + bcmul($valor_unit_empresa,$percentual_decimal,5),4);

	  //echo $preco_empresa;
	  
	   ?></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form2" method="post" action="inserir.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Inserir Modelo">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form3" method="post" action="selecione_codigo_edicao.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit3" value="Editar Modelo">

      </form></td>

    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="selecione_codigo_exclusao.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit4" value="Excluir Modelo">

      </form></td>

    </tr>

  </table>

  <p align="center"><font size="4"><strong><font color="#0000FF">Pesquisa de modelos por referencia</font></strong></font></p>
  <form name="form5" method="post" action="menu.php">
    <div align="center"><strong><font color="#0000FF">Modelo</font></strong>
      <input type="text" name="modelo" id="modelo">
      <input type="submit" name="button" id="button" value="Pesquisar">
    </div>
  </form>
  <p align="left">
    <?

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS

$modelo = $_POST['modelo'];
 

$sql = "select * from modelos where modelo = '$modelo' order by modelo asc";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$nivel_dificuldade = $linha[13];
$costura_manual = $linha[19];
$trice = $linha[20];


?>
  </p>
  <table width="100%" border="0">
    <tr>
      <td width="17%"><div align="center"><strong><font color="#0000FF">Modelo Pesquisado</font></strong></div></td>
      <td width="12%"><form name="form6" method="post" action="modelos.php">
        <strong><font color="#0000FF"><? echo $modelo; ?></font></strong>
              <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
              <input type="submit" name="button2" id="button2" value="Editar">
      </form>      </td>
      <td width="13%">&nbsp;</td>
      <td width="15%">&nbsp;</td>
      <td width="17%">&nbsp;</td>
      <td width="16%">&nbsp;</td>
      <td width="10%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><strong>Pre&ccedil;o Empresa</strong></div></td>
      <td><div align="center"><strong>Pre&ccedil;o Pespontador</strong></div></td>
      <td><div align="center"><strong>Pre&ccedil;o Coladeira 1</strong></div></td>
      <td><div align="center"><strong>Pre&ccedil;o Coladeira 2</strong></div></td>
      <td><div align="center"><strong>N&iacute;vel de Dificuldade</strong></div></td>
      <td><div align="center"><strong>Costura Manual</strong></div></td>
      <td><div align="center"><strong>Tric&ecirc;</strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><font color="#0000FF"><strong><? echo " R$ $preco_empresa"; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo "R$ $preco_pespontador"; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo "R$ $preco_coladeira1"; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo "R$ $preco_coladeira2"; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo $nivel_dificuldade; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo $costura_manual; ?></strong></font></div></td>
      <td><div align="center"><font color="#0000FF"><strong><? echo $trice; ?></strong></font></div></td>
    </tr>
  </table>
<? } ?>
  <p>&nbsp; </p>
</body>

</html>

