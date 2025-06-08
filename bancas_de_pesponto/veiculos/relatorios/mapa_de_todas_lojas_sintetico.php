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

<title>MAPA DE PRODU&Ccedil;&Atilde;O DE VE&Iacute;CULOS - ALLCRED FINANCEIRA</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style4 {font-size: 18px}

.style5 {font-size: 24px}

.style7 {

	font-size: 9px;

	font-weight: bold;

}

.style9 {
	font-size: 10
}

-->

</style>

</head>

<?



require '../../../conect/conect.php';



$mes_ano = $_POST['mes_ano'];

//$ano_pagto = $_POST['ano_pagto'];





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

      <form name="form1" method="post" action="../index.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Voltar">

</form>

<p class="style4"><strong>Total monet&aacute;rio realizado  - <span class="style5"><strong>

  <?

$sql = "select sum(valor_financiar) as total from propostas_veiculos where mes_ano = '$mes_ano' and status = 'Aprovado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_producao = $linha['total'];

$valor_total_producao_formatada = number_format($valor_total_producao, 2, ",", ".");





echo "R$ ".$valor_total_producao_formatada;

?> </strong></span></strong></p>

      <p><span class="style4"><strong>Total de contratos Aprovados - 

            <span class="style5">

            <strong>

            <?

$sql = "select * from propostas_veiculos where mes_ano = '$mes_ano' and status = 'Aprovado'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>

            </strong></span> </strong></span><br>

    </p>

      <table width="100%"  border="1">

        <tr>

          <td><div align="center" class="style7">Nome</div></td>

          <td><div align="center" class="style7">Aprovados</div></td>

          <td><div align="center" class="style7">Quant</div></td>

          <td><div align="center" class="style7">Reprovados</div></td>

          <td><div align="center" class="style7">Quant</div></td>

          <td><div align="center" class="style7">Em Analise</div></td>

          <td><div align="center" class="style7">Quant</div></td>

          <td><div align="center" class="style7">Re-Analise</div></td>

          <td><div align="center" class="style7">Quant</div></td>

          <td><div align="center" class="style7">N&atilde;o Cadastrada</div></td>

          <td><div align="center" class="style7">Quant</div></td>
        </tr>

        <tr>

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

		      <?



			

$sql = "SELECT * FROM estabelecimentos where status = 'Ativo' order by nfantasia asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];


?>            

        <tr>

          <td width="17%">
            <form action="relatorio_geral_por_loja.php" method="post" name="form2" class="style9">
              <div align="center" class="style7">
              <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
                        <input name="estabelecimento_proposta" type="hidden" id="estabelecimento_proposta" value="<? echo $nfantasia; ?>">
                        <input type="submit" name="button" id="button" value="<? echo $nfantasia; ?>">
            </div></form>
          </td>

          <td width="11%"><div align="center" class="style7">

            <?

$sql = "select sum(valor_financiar) as total_aprovado from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and mes_ano = '$mes_ano' and status = 'Aprovado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_aprovado = $linha['total_aprovado'];

$valor_total_aprovado_formatada = number_format($valor_total_aprovado, 2, ",", ".");



if($valor_total_aprovado==0){ echo "-"; }



else{

echo "R$ ".$valor_total_aprovado_formatada;

}

?>

          </div></td>

          <td width="6%"><div align="center" class="style7">

            <?

$sql = "select * from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Aprovado'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>

           </div></td>

          <td width="10%"><div align="center" class="style7">
            <?

$sql = "select sum(valor_financiar) as total_reprovado from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Reprovado'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_reprovado = $linha['total_reprovado'];

$valor_total_reprovado_formatada = number_format($valor_total_reprovado, 2, ",", ".");



if($valor_total_reprovado==0){ echo "-"; }



else{

echo "R$ ".$valor_total_reprovado_formatada;

}

?>
          </div></td>

          <td width="6%"><div align="center" class="style7">
            <?

$sql = "select * from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Reprovado'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>
          </div></td>

          <td width="10%"><div align="center" class="style7">
            <?

$sql = "select sum(valor_financiar) as total_em_analise from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Em Analise'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_em_analise = $linha['total_em_analise'];

$valor_total_em_analise_formatada = number_format($valor_total_em_analise, 2, ",", ".");



if($valor_total_em_analise==0){ echo "-"; }



else{

echo "R$ ".$valor_total_em_analise_formatada;

}

?>
          </div></td>

          <td width="6%"><div align="center" class="style7">
            <?

$sql = "select * from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Em Analise'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>
          </div></td>

          <td width="11%"><div align="center" class="style7">
            <?

$sql = "select sum(valor_financiar) as total_reanalise from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Re-Analise'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_reanalise = $linha['total_reanalise'];

$valor_total_reanalise_formatada = number_format($valor_total_reanalise, 2, ",", ".");



if($valor_total_reanalise==0){ echo "-"; }



else{

echo "R$ ".$valor_total_reanalise_formatada;

}

?>
          </div></td>

          <td width="6%"> <div align="center" class="style7">
            <?

$sql = "select * from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Re-Analise'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>
          </div></td>

          <td width="11%"><div align="center" class="style7">
            <?

$sql = "select sum(valor_financiar) as total_nao_cadastrada from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Não Cadastrada'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total_nao_cadastrada = $linha['total_nao_cadastrada'];

$valor_total_nao_cadastrada_formatada = number_format($valor_total_nao_cadastrada, 2, ",", ".");



if($valor_total_nao_cadastrada==0){ echo "-"; }



else{

echo "R$ ".$valor_total_nao_cadastrada_formatada;

}

?>
          </div></td>

          <td width="6%"><div align="center" class="style7">
            <?

$sql = "select * from propostas_veiculos where estabelecimento_proposta = '$nfantasia' and  mes_ano = '$mes_ano' and status = 'Não Cadastrada'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>
          </div></td>
        </tr>

<? } ?>
</table>



<p align="center">

<?

$sql = "SELECT * FROM allcred limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email_empresa = $linha[14];

$site = $linha[15];



}



?>

<br>

<span class="style4"><strong><? echo $site; ?></strong></span>

<br>

<? echo $endereco; ?>

,

<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>

<br>

<? echo "Telefone / Fax: ". $telefone." "; ?>

/ <? echo $fax; ?>

<br>
<? echo "E-Mail: ". $email_empresa; ?></p>

<p align="center"><span class="style7">

  <? echo $meta_inss; ?>

</span><span class="style4"><strong><span class="style5"><strong>

</strong></span></strong></span> </p>

</body>

</html>

