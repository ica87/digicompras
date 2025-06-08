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

<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style2 {

	color: #0000FF;

	font-weight: bold;

}

.style3 {font-size: 10px}

.style4 {

	font-size: 16px;

	font-weight: bold;

}
.style5 {font-size: 9px}

-->

</style>

</head>

<?



require '../../conect/conect.php';





	  

$nome_operador = $_POST['nome_operador'];

$mes_ano = $_POST['mes_ano'];

$campanha_filtro = $_POST['campanha'];





$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];



$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>











      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <form name="form1" method="post" action="relatorio_de_producao_periodico_por_operador_sintetico_novo.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <span class="style7 style13">

        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

        <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

        <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">

        <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">

        <input name="mes_final" type="hidden" id="dia_final" value="<? echo $mes_final; ?>">

        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

        </span>        

        <input type="submit" name="Submit2" value="Voltar ao sint&eacute;tico">

</form>

      <table width="100%"  border="0">

        <tr>

          <td colspan="6"><div align="left"><span class="style2">

            <?

$nome_operador = $_POST['nome_operador'];

			

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$nome_operador = $linha[1];







?>

          Listando todas as propostas do operador:</span> <span class="style2"><? echo $nome_operador; ?>

          <? } ?>

          </span></div></td>

        </tr>

        <tr>

          <td colspan="6">&nbsp;</td>

        </tr>

        <tr>

          <td width="8%">&nbsp;</td>

          <td width="14%"><div align="center">Total 

  



   Spread

  

        </div></td>

          <td width="18%"><div align="center">

            <strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

            </strong>          </div></td>

          <td width="24%"><div align="right">Total L&iacute;quido de Opera&ccedil;&otilde;es </div></td>

          <td width="22%">

            <div align="center"><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

            </strong> </div></td>

          <td width="14%">&nbsp;</td>

        </tr>

        <tr>

          <td>&nbsp;</td>

          <td><div align="center">Total Premia&ccedil;&atilde;o </div></td>

          <td><div align="center">

            <strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

</strong>          </div></td>

          <td><div align="right">Valor bruto de opera&ccedil;&atilde;o </div></td>

          <td class="style4">            <div align="center"><strong>

          <strong>

          <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </strong> </strong> </div></td>

          <td>&nbsp;</td>

        </tr>

        <tr>

          <td>&nbsp;</td>

          <td>Comiss&atilde;o Empresa </td>

          <td><div align="center"><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_a_receber) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_a_receber) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

</strong></div></td>

          <td><div align="right">Valor liquido cliente </div></td>

          <td><div align="center"><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_liquido_cliente = $linha['total'];



echo "R$ ".$valor_liquido_cliente;

?>

          </strong></div></td>

          <td>&nbsp;</td>

        </tr>

</table>

      <br>

	  <?

	  $nome_operador = $_POST['nome_operador'];

$data_inicial = $_POST['data_inicial'];

$data_final = $_POST['data_final'];



	  ?>

      Per&iacute;odo de <? echo $mes_ano;?><br>

<table width="100%"  border="0">

              <tr>

                <td width="26%" valign="middle"><div align="right"><strong>Selecione a campanha que deseja filtrar</strong></div></td>

				<td width="34%" valign="middle"><form name="form3" method="post" action="relatorio_de_producao_periodico_por_operador_novo.php">

				  <strong><font color="#0000FF">

				  <select name="campanha" id="campanha">

                    <option selected>selecione</option>

                    <?





    $sql = "select * from campanhas order by campanha asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['campanha']."</option>";

    }

?>

                  </select>

			    </font></strong>

				  <input type="submit" name="Submit" value="Filtrar">

                  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

                  <span class="style7 style13">

                  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">

                  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">

                  <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">

                  <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">

                  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">

                  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">

                  </span>                  </form></td>

				<td width="40%">&nbsp;</td>

  </tr>

</table>            

      <?



if($campanha_filtro=="selecione"){

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by bco_operacao,nome asc";



}

else{

		



$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by bco_operacao,nome asc";



}

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$nome_operador = $linha[1];

$bco_operacao = $linha[86];



$valor_a_receber = $linha[87];

$comissao_op = $linha[101];

$tabela = $linha[109];

$valor_total = $linha[113];

$valor_liquido_cliente = $linha[115];



?>

      <table width="100%"  border="0">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style3">N&ordm; Proposta </div></td>

          <td><div align="center" class="style3">Valor Solicitado </div></td>

          <td><div align="center" class="style3">Valor liq cliente </div></td>

          <td><div align="center"><span class="style3">Valor Total </span></div></td>

          <td><div align="center"><span class="style3">Tabela</span></div></td>

          <td><div align="center" class="style3">Cliente</div></td>

          <td><div align="center" class="style3">CPF</div></td>

          <td width="2%"><div align="center" class="style3">Prazo</div></td>

          <td width="4%"><div align="center" class="style3">R$ Parcelas </div></td>

          <td><div align="center" class="style3">Tipo de Proposta </div></td>

          <td><div align="center" class="style3">Bco Opera&ccedil;&atilde;o </div></td>

          <td><div align="center" class="style3">Status</div></td>

          <td><div align="center" class="style3"> Spread </div></td>

          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>

          <td><div align="center"><span class="style5">Comiss&atilde;o Empresa</span></div></td>
        </tr>

		

        <tr>

          <td width="5%">               <form name="form2" method="post" action="altera_comissoes.php">
            <div align="center" class="style3">

              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

              

  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">

            <input name="campanha" type="hidden" id="campanha" value="<? echo $campanha_filtro; ?>">
            <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
            <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
            <input name="ano_inicial" type="hidden" id="dia_inicial5" value="<? echo $ano_inicial; ?>">
            <input name="dia_final" type="hidden" id="dia_inicial6" value="<? echo $dia_final; ?>">
            <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
            <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
            <? echo $num_proposta;?>            </div>
          </form></td>

          <td width="7%"><div align="center" class="style3"><? printf("R$ $linha[25]");?> </div></td>

          <td width="6%"><div align="center"><span class="style3"><? echo "R$ ".$valor_liquido_cliente;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3"><? echo $valor_total;?></span></div></td>

          <td width="6%"><div align="center"><span class="style3"><? echo $tabela;?></span></div></td>

          <td width="14%">

          <div align="center" class="style3"><? printf("$linha[4]");?> </div></td>

          <td width="8%"><div align="center" class="style3"><? printf("$linha[7]");?> </div></td>

          <td><div align="center" class="style3"><? printf("$linha[26]"); ?> </div></td>

          <td><div align="center" class="style3"><? printf("$linha[27]"); ?> </div></td>

          <td width="6%"><div align="center" class="style3"><? printf("$linha[83]"); ?> </div></td>

          <td width="7%"><div align="center" class="style3"><? echo $bco_operacao;?></div></td>

          <td width="9%"><div align="center" class="style3"><? printf("$linha[51]");?></div></td>

          <td width="5%"><div align="center" class="style3"><? printf("$linha[85]");?></div></td>

          <td width="7%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>

          <td width="8%"><div align="center"><span class="style3"><? echo "R$ ".$valor_a_receber;?></span></div></td>
          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>


<? } ?>
        <tr>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center" class="style5"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td><strong>Banco:</strong></td>
          <td colspan="2"><div align="center"><strong>
          
<? 
$sql = "select * from propostas where bco_operacao = '$bco_operacao' group by bco_operacao";;
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$bco_operacao_group = $linha[86];


echo $bco_operacao_group;
  
     ?>
          </strong></div>            <div align="center"></div></td>
          <td colspan="2"><div align="center"><strong>
            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_a_receber) as total_bco_operacao from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and bco_operacao = '$bco_operacao' order by nome asc";

}

else{

$sql = "select sum(valor_a_receber) as total_bco_operacao from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' and bco_operacao = '$bco_operacao' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_bco_operacao = $linha['total_bco_operacao'];



echo "R$ ".$valor_total_bco_operacao;

}

?>
          </strong></div>            <div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
          
        <tr>

          <td><span class="style3">Total</span></td>

          <td><div align="center" class="style3">

            <strong>

              <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
            </strong>          </div></td>

          <td><div align="center"><span class="style3"><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_liquido_cliente) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_liquido_cliente = $linha['total'];



echo "R$ ".$valor_liquido_cliente;

?>

          </strong></span></div></td>

          <td><div align="center"><span class="style3"><strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>

          </strong></span></div></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><span class="style3"></span></td>

          <td><div align="center"><span class="style3"></span></div></td>

          <td><div align="right" class="style3">Total Speed </div></td>

          <td><div align="center" class="style3">

            <strong>

            <?

if($campanha_filtro=="selecione"){

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' order by nome asc";

}

else{

$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dia_alteracao_status between '$dia_inicial'and '$dia_final' and mes_alteracao_status between '$mes_inicial'and '$mes_final' and ano_alteracao_status between '$ano_inicial'and '$ano_final' and status = 'PAGO AO CLIENTE' and tabela = '$campanha_filtro' order by nome asc";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
            </strong>          </div></td>

          <td><span class="style3"></span></td>

          <td>&nbsp;</td>
</table>



<p align="center"><strong>VEICULOS</strong></p>
      <table width="100%"  border="0">
        <tr>
          <td colspan="6"><div align="left"><span class="style2">
              <?

$nome_operador = $_POST['nome_operador'];

			

$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$nome_operador = $linha[1];







?>
            Listando todas as propostas de ve&iacute;culos do operador:</span> <span class="style2"><? echo $nome_operador; ?>
              <? } ?>
            </span></div></td>
        </tr>
        <tr>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="25%"><div align="center">Total L&iacute;quido de Opera&ccedil;&otilde;es (Valor a Financiar)</div></td>
          <td width="15%"><div align="center"><strong>
            <?


$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></div></td>
          <td width="16%"><div align="right">Total Premia&ccedil;&atilde;o </div></td>
          <td width="22%"><div align="center"><strong>
            <?


$sql = "select sum(comissao_op) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></div></td>
          <td width="14%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="right"></div></td>
          <td class="style4"><div align="center"></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="right"></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p align="center">&nbsp;</p>
      <?




$sql = "SELECT * FROM propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";



$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

$dataproposta = $linha[1];

$horaproposta = $linha[2];

$mes_ano = $linha[3];

$estabelecimento_proposta = $linha[4];

$operador_atendente = $linha[5];

$status = $linha[6];

$tipo = $linha[7];

$tipo_proposta = $linha[8];

$nome = $linha[9];

$tipo_pessoa = $linha[10];

$data_nasc = $linha[11];

$cpf = $linha[12];

$rg = $linha[13];

$orgao = $linha[14];

$emissao = $linha[15];

$sexo = $linha[16];

$estadocivil = $linha[17];

$nacionalidade = $linha[18];

$quant_dependente = $linha[19];

$pai = $linha[20];

$mae = $linha[21];

$conjuge = $linha[22];

$data_nasc_conjuge = $linha[23];

$endereco = $linha[24];

$numero = $linha[25];

$bairro = $linha[26];

$complemento = $linha[27];

$cidade = $linha[28];

$estado = $linha[29];

$cep = $linha[30];

$correspondencia = $linha[31];

$tipo_residencia = $linha[32];

$valor_aluguel = $linha[33];

$tempo_residencia = $linha[34];

$telefone = $linha[35];

$celular = $linha[36];

$tipo_telefone = $linha[37];

$residencia_anterior = $linha[38];

$bairro_anterior = $linha[39];

$cidade_anterior = $linha[40];

$estado_anterior = $linha[41];

$tempo_residencia_anterior = $linha[42];

$email = $linha[43];

$empresa = $linha[44];

$porte_empresa = $linha[45];

$data_admissao = $linha[46];

$inicio_atividade = $linha[47];

$end_empresa = $linha[48];

$numero_empresa = $linha[49];

$complemento_empresa = $linha[50];

$bairro_empresa = $linha[51];

$cep_empresa = $linha[52];

$cidade_empresa = $linha[53];

$estado_empresa = $linha[54];

$telefone_empresa = $linha[55];

$cpt = $linha[56];

$serie = $linha[57];

$cargo = $linha[58];

$natureza_operacao = $linha[59];

$salario = $linha[60];

$atividade_principal = $linha[61];

$data_constituicao = $linha[62];

$cnpj = $linha[63];

$inscr_est = $linha[64];

$tel_contador = $linha[65];

$atividade_anterior = $linha[66];

$data_admissao_anterior = $linha[67];

$data_saida = $linha[68];

$cargo_anterior = $linha[69];

$telefone_empresa_anterior = $linha[70];

$outras_rendas = $linha[71];

$ref_pessoal = $linha[72];

$tel_ref_pessoal = $linha[73];

$ref_pessoal2 = $linha[74];

$tel_ref_pessoal2 = $linha[75];

$ref_comercial = $linha[76];

$tel_ref_comercial = $linha[77];

$ref_banco = $linha[78];

$ref_agencia = $linha[79];

$ref_conta = $linha[80];

$ref_tipo_conta = $linha[81];

$ref_conta_desde = $linha[82];

$cartao_credito = $linha[83];

$automovel = $linha[84];

$valor_automoveis = $linha[85];

$residencia = $linha[86];

$valor_residencia = $linha[87];

$outras_propriedades = $linha[88];

$valor_outras_propriedades = $linha[89];

$veiculo = $linha[90];

$ano_modelo = $linha[91];

$renavam = $linha[92];

$num_portas = $linha[93];

$combustivel = $linha[94];

$placa = $linha[95];

$valor_venda = $linha[96];

$valor_entrada = $linha[97];

$tarifa_cadastro = $linha[98];

$valor_financiar = $linha[99];

$coeficiente = $linha[100];

$codigo_tabela = $linha[101];

$num_parcelas = $linha[102];

$valor_parcelas = $linha[103];

$vencto_1_parcela = $linha[104];

$r = $linha[105];

$valor_liberado = $linha[106];

$pagto_serv_terc = $linha[107];

$obs = $linha[108];

$operador = $linha[109];

$cel_operador = $linha[110];

$email_operador = $linha[111];

$estab_pertence = $linha[112];

$cidade_estab_pertence = $linha[113];

$tel_estab_pertence = $linha[114];

$email_estab_pertence = $linha[115];

$operador_alterou = $linha[116];

$cel_operador_alterou = $linha[117];

$email_operador_alterou = $linha[118];

$estab_alterou = $linha[119];

$cidade_estab_alterou = $linha[120];

$tel_estab_alterou = $linha[121];

$email_estab_alterou = $linha[122];

$dataalteracao = $linha[123];

$horaalteracao = $linha[124];

$recebido = $linha[125];

$comissao_op = $linha[126];

$meses = $linha[127];

$trinta = $linha[128];

$quarenta_cinco = $linha[129];

$meses_residencia = $linha[130];

$ddd_tel = $linha[131];

$ddd_cel = $linha[132];

$ddd_tel_empresa = $linha[133];

$ddd_tel_contador = $linha[134];

$ddd_tel_empresa_anterior = $linha[135];

$ddd_ref_pessoal = $linha[136];

$ddd_ref_pessoal2 = $linha[137];

$ddd_ref_comercial = $linha[138];

$digito_agencia = $linha[139];

$digito_conta = $linha[140];

$ano_ref_conta = $linha[141];

$modelo = $linha[142];

$estado_emissao = $linha[143];

$mista = $linha[144];

$parecer_credito = $linha[145];

$bem = $linha[146];

$status_pagto_cliente = $linha[159];


?>
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style3">N&ordm; Proposta </div></td>
          <td><div align="center"><span class="style3">Cliente</span></div></td>
          <td><div align="center" class="style3">CPF</div></td>
          <td><div align="center" class="style3">Valor a Financiar</div></td>
          <td width="4%"><div align="center" class="style3">Prazo</div></td>
          <td width="7%"><div align="center" class="style3">R$ Parcelas </div></td>
          <td><div align="center" class="style3">Status</div></td>
          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>
        </tr>
        <tr>
          <td width="8%"><form name="form2" method="post" action="editar_proposta_por_num_proposta.php">
            <div align="center" class="style3">
                <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                <input name="num_proposta2" type="hidden" id="num_proposta2" value="<? echo $linha[0]; ?>">
                <? echo $num_proposta; ?> </div>
          </form></td>
          <td width="17%"><div align="center"><span class="style3"><? echo $nome;?></span></div></td>
          <td width="9%"><div align="center" class="style3"><? echo $cpf;?></div></td>
          <td width="11%"><div align="center" class="style3"><? echo $valor_financiar;?></div></td>
          <td><div align="center" class="style3"><? echo $num_parcelas; ?> </div></td>
          <td><div align="center" class="style3"><? echo $valor_parcelas; ?> </div></td>
          <td width="10%"><div align="center" class="style3"><? echo $status_pagto_cliente;?></div></td>
          <td width="9%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>
          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>
          <? } ?>
        <tr>
          <td><span class="style3"></span></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center"><span class="style3">Total</span></div></td>
          <td><div align="center"><span class="style3"></span><span class="style3"><strong>
            <?


$sql = "select sum(valor_financiar) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></span></div></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><div align="right" class="style3">Total  </div></td>
          <td><div align="center"><span class="style3"></span><strong>
            <?


$sql = "select sum(comissao_op) as total from propostas_veiculos where operador_atendente = '$nome_operador' and dia_pagto_cliente between '$dia_inicial'and '$dia_final' and mes_pagto_cliente between '$mes_inicial'and '$mes_final' and ano_pagto_cliente between '$ano_inicial'and '$ano_final' and status_pagto_cliente = 'Pago_ao_cliente' order by nome asc";


$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total'];



echo "R$ ".$valor_total;

?>
          </strong></div></td>
</table>
</body>

</html>

