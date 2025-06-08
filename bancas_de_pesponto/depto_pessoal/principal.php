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

<title>Menu principal do Administrador</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style11 {font-size: 9px; color: #000000; font-weight: bold; }
.style13 {font-weight: bold}
.style14 {font-weight: bold}
.style15 {font-size: 18px}
.style2 {	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style5 {color: #0000FF}
.style6 {font-size: 9px; font-weight: bold; }
.style7 {color: #000000}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?



require '../../conect/conect.php';


$dia_atual = date('d');
$mes_atual = date('m');
$ano_atual = date('Y');

$ano_anterior = bcsub($ano_atual,1);


$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#ffffff"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>
<form name="form1" method="post" action="../principal.php"><span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>


<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$funcao = $linha[43];
$cidade = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}
?>

<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit21" value="Voltar ao menu Principal">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<form name="form1" method="post" action="cad_admin/editar.php">









  <table width="100%" border="0" cellspacing="4">

    <tr> 

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $nome; ?> 

            <input name="nome" type="hidden" id="razaosocial2" value="<? echo $nome; ?>">

</font></strong></td>

      <td width="41%"><strong>Estabelecimento:</strong> <br><strong><font color="#0000FF"><? echo $estab_pertence; ?></font></strong><strong><font color="#0000FF">      </font></strong></td>

      <td width="14%"><strong>Celular:<font color="#0000FF"><br> <? echo $celular; ?></font><font color="#0000FF">

      </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong>Cidade: <br><font color="#0000FF"><? echo $cidade; ?></font><font color="#0000FF">      </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

        <? echo $linha[26]; ?></font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

            <? echo $email_estab_pertence; ?></font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">      </font></strong></td>

      <td>&nbsp;</td>

      <td><?

//echo date('localtime()'); ?>

</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>


  </table>

  

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>



</form>

<table width="100%"  border="0">

  <tr>
    <td width="4%"><div align="center"></div></td>
    <td width="19%"><form action="bonus/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit11" value="Bonus">
      </div>
    </form></td>
    <td width="8%"><div align="center"></div></td>
    <td width="20%"><div align="center">
      <form action="../operadores/menu.php" method="post" name="form20">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit20" value="Funcion&aacute;rios">
      </form>
    </div></td>
    <td width="6%"><div align="center"></div></td>
    <td width="32%"><form action="relatorios/relatorio_periodico_de_rendimentos_de_funcionarios.php" method="post" name="form2" target="_blank">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        De
        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo "TODOS"; ?>">
        <select name="dia_inicial" id="dia_inicial">
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
        <select name="mes_inicial" id="mes_inicial">
          <?





    $sql = "select * from horas_extras where mes <> '' group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
                </select>
        <select name="ano_inicial" id="ano_inicial">
          <?





    $sql = "select * from horas_extras where ano <> '' group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
                </select>
at&eacute;
<select name="dia_final" id="dia_final">
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
</select>
<select name="mes_final" id="mes_final">
  <?





    $sql = "select * from horas_extras group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
</select>
<select name="ano_final" id="ano_final">
  <?





    $sql = "select * from horas_extras group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
</select>

        <input type="submit" name="Submit18" value="Relat&oacute;rio Final para Escrit&oacute;rio">
      </div>
    </form></td>
    <td width="11%">&nbsp;</td>
  </tr>
  <tr>

    <td><div align="center"></div></td>
    <td><form action="ferias/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit2" value="FERIAS">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="../dependentes/menu.php" method="post" name="form20">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit25" value="Dependentes">
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>

    <td><div align="center"></div></td>
    <td><form action="horasextras/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit7" value="Controle de Horas Extras">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="../tercerizados/menu.php" method="post" name="form20">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit16" value="Terceirizados">
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td><form action="cad_empresa/editar_estabelecimento.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit22" value="Mensagem da Folha de Pagto">
      </div>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit13" value="13&ordm; - 1&ordf; PARCELA">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><form action="tabela_inss/tabela.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit8" value="TABELA INSS">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td rowspan="2"><div align="center">
      <form action="encerramento.php" method="post" name="form2" target="_blank">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <select name="mes_referencia" id="select4">
            <option selected><? echo $mes_atual; ?></option>
            <?





    $sql = "select * from tabela_meses order by num_mes asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['num_mes']."</option>";

    }

?>
          </select>
          <select name="ano_referencia" id="select5">
            <option selected><? echo $ano_atual; ?></option>
            <option><? echo $ano_anterior; ?></option>
          </select>
          <input type="submit" name="Submit17" value="FOLHA DE PAGTO - ENCERRAMENTO">
        </div>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit14" value="13&ordm; - 2&ordf; PARCELA">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit9" value="TABELA IRRF">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit" value="Contribui&ccedil;&atilde;o Assistencial">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="tabela_salario_familia/tabela.php" method="post" name="form2">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit10" value="TABELA SALARIO FAMILIA">
        </div>
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="horasextras/encerramento_horas_extras.php" method="post" name="form3" target="_blank">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



?>
          De
          <select name="dia_inicial" id="select3">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <select name="mes_inicial" id="mes_inicial">
            <?





    $sql = "select * from horas_extras where mes <> '' group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
          </select>
          <select name="ano_inicial" id="ano_inicial">
            <?





    $sql = "select * from horas_extras where ano <> '' group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
          </select>
          at&eacute;
          <select name="dia_final" id="select11">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <select name="mes_final" id="select12">
            <?





    $sql = "select * from horas_extras group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
          </select>
          <select name="ano_final" id="select13">
            <?





    $sql = "select * from horas_extras group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
          </select>
          <br>
          <input type="submit" name="button" id="button" value="HORAS EXTRAS - ENCERRAMENTO">
        </div>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit15" value="Contribui&ccedil;&atilde;o Confederativa">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="tabela_meses/tabela.php" method="post" name="form2">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit12" value="TABELA DE MESES">
        </div>
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="relatorios/relatorio_periodico_horas_extras.php" method="post" name="form3">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



?>
          De
          <select name="dia_inicial" id="dia_inicial">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <select name="mes_inicial" id="mes_inicial">
            <?





    $sql = "select * from horas_extras where mes <> '' group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
          </select>
          <select name="ano_inicial" id="ano_inicial">
            <?





    $sql = "select * from horas_extras where ano <> '' group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
          </select>
          at&eacute;
          <select name="dia_final" id="dia_final">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <select name="mes_final" id="mes_final">
            <?





    $sql = "select * from horas_extras group by mes order by mes desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes']."</option>";

    }

?>
          </select>
          <select name="ano_final" id="ano_final">
            <?





    $sql = "select * from horas_extras group by ano order by ano desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano']."</option>";

    }

?>
          </select>
          <br>
          <input type="submit" name="button3" id="button3" value="HORAS EXTRAS - ENCERRAMENTO INDIVIDUAL">
        </div>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="vales/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit19" value="Adiantamento Fora do Prazo(Vales)">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="encerramento_quinzena.php" method="post" name="form2" target="_blank">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <select name="mes_referencia" id="mes_referencia">
            <option selected><? echo $mes_atual; ?></option>
            <?





    $sql = "select * from tabela_meses order by num_mes asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['num_mes']."</option>";

    }

?>
          </select>
          <select name="ano_referencia" id="ano_referencia">
            <option selected><? echo $ano_atual; ?></option>
            <option><? echo $ano_anterior; ?></option>
          </select>
          <input type="submit" name="Submit24" value="FOLHA DE PAGTO - QUINZENA">
        </div>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="faltas/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit3" value="Controle de Faltas">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="encerramento_premiacoes.php" method="post" name="form2" target="_blank">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <select name="mes_referencia" id="mes_referencia">
            <option selected><? echo $mes_atual; ?></option>
            <?





    $sql = "select * from tabela_meses order by num_mes asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['num_mes']."</option>";

    }

?>
          </select>
          <select name="ano_referencia" id="ano_referencia">
            <option selected><? echo $ano_atual; ?></option>
            <option><? echo $ano_anterior; ?></option>
          </select>
          <input type="submit" name="Submit23" value="PREMIA&Ccedil;&Otilde;ES - RECIBO">
        </div>
      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit6" value="Conv&ecirc;nio Sa&uacute;de">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="center">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit5" value="Conv&ecirc;nio Odontol&oacute;gico">
      </div>
    </form></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form action="depto_pessoal/principal.php" method="post" name="form2">
        <div align="center">
          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
          <input type="submit" name="Submit4" value="Conv&ecirc;nio Fam&aacute;cias">
        </div>
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center">
      <form name="form4" method="post" action="principal.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <?

$percentual = $_POST['percentual'];

if(empty($percentual)){

}
else{


$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$comando = "update `$linha[1]`.`percentual_de_quinzena` set `percentual` = '$percentual' where `percentual_de_quinzena`. `codigo` = '0'";




mysql_query($comando,$conexao);

}
}
?>
        <select name="percentual" id="percentual">
          <?
$sql = "SELECT * FROM percentual_de_quinzena";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$percentual = $linha[1];

}
?>
          <option selected><? echo $percentual; ?></option>
          <option>40</option>
          <option>50</option>
        </select>
        <input type="submit" name="button2" id="button2" value="Percentual de Quinzena">
      </form>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>

</p>
</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>