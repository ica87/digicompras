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

<style type="text/css">

<!--

.style1 {	color: #0000FF;

	font-weight: bold;

}

-->

</style>

</head>



<?



require '../../../conect/conect.php';

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$hoje = date('d-m-Y');

	



		

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="3"><?

error_reporting(E_ALL);



?>





<?

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$nome_op = $linha[1];

$celular_op = $linha[19];

$email_op = $linha[20];

$estabelecimento_op = $linha[24];

$cidade_estabelecimento_op = $linha[25];

$tel_estabelecimento_op = $linha[26];

$email_estabelecimento_op = $linha[27];

$estab_pertence_op = $linha[44];

$cidade_estab_pertence_op = $linha[45];

$tel_estab_pertence_op = $linha[46];

$email_estab_pertence_op = $linha[47];

}





?>



<?

$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$datacadastro = $linha[3];

}





?>      </td>
    </tr>

    <tr>

      <td width="19%">&nbsp;</td>

      <td colspan="2"><strong><font color="#0000FF" size="4">O que deseja fazer no caixa <span class="style1"><? echo $nome_op; ?></span> ?</font></strong></td>
    </tr>

    <tr>

      <td><form name="form1" method="post" action="../principal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit22" value="Voltar ao menu principal">

      </form></td>

      <td width="38%">&nbsp;</td>

      <td width="43%">&nbsp;</td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form action="abertura_de_caixa.php" method="post" name="form2">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <?

if(mysql_num_rows($res)==0){

        echo'<input type="submit" name="Submit2" value="Abertura de caixa">';

		}

?>
      </form>	  </td>

      <td rowspan="2" valign="top"><form action="imprimir_caixa_por_data.php" method="post" name="form4" target="_blank">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        

        <?

if(mysql_num_rows($res)>=1){



		echo "Informe a data que deseja<br>";

		echo '<input name="datacadastro" type="text" id="datacadastro" size="15" maxlength="10">';

        echo'<input type="submit" name="Submit32" value="Verifica caixa">';

		}

		?>

                              </form></td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><form name="form5" method="post" action="lancamento_entradas.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

<?

if(mysql_num_rows($res)>=1){



  echo'<input type="submit" name="Submit" value="Lan&ccedil;amento de entradas">';

  }

		

		?>

      </form></td>
    </tr>

    <tr>

      <td><div align="center"></div></td> 

      <td><form name="form4" method="post" action="lancamento_saidas.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

<?

if(mysql_num_rows($res)>=1){



        echo'<input type="submit" name="Submit3" value="Lan&ccedil;amento de Sa&iacute;das">';

		}

		

		?>

      </form></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><form name="form4" method="post" action="relatorio_geral_cx_diario.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

<?

if(mysql_num_rows($res)>=1){



        echo'<input type="submit" name="Submit32" value="Verifica caixa do dia">';

		}

		?>

      </form></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><form name="form4" method="post" action="verifica_caixa_mensal.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

<?

if(mysql_num_rows($res)>=1){



        echo'<input type="submit" name="Submit33" value="Verifica caixa mensal">';

		}

		?>

<input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">

<input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">

      </form></td>

      <td>&nbsp;</td>
    </tr>
  </table>

<p>&nbsp; </p>

</body>

</html>

