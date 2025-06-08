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

<title>EDI&Ccedil;&Atilde;O DE OPERADORES</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>




<?
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>





<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit3" value="Voltar">

</form>

<?



$nome = $_POST['nome'];





$sql = "SELECT * FROM operadores where nome = '$nome'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$usuario_op = $linha[40];

$senha_op = $linha[41];

$grupo = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



$salario = $linha[48];

$vale_alimentacao = $linha[49];

$gratificacao = $linha[50];

$comissao = $linha[51];

$emprestimo = $linha[52];

$admissao = $linha[53];

$demissao = $linha[54];

$meta = $linha[55];

$status = $linha[56];

$areaproducao = $linha[57];

$tempo_almoco = $linha[58];

$cbo = $linha[59];

$secao = $linha[60];

$classificacao = $linha[61];

$sindical = $linha[63];
$valor_sindicato = $linha[64];


?>

<? } ?>

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

<? } ?>

<form name="form1" method="post" action="grava_editar_operador.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td>Data Cadastro </td>

      <td><strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>

      <td>Status</td>

      <td><select name="status" id="status">

        <option selected><? echo $status; ?></option>

        <option>Ativo</option>

        <option>Inativo</option>

      </select> 

      Acessar area da Produ&ccedil;&atilde;o? 

      <select name="areaproducao" id="areaproducao">

        <option selected><? echo $areaproducao; ?></option>

        <option>Não</option>

        <option>Sim</option>
      </select></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Grupo a que Pertence</td>

      <td><select name="grupo" id="grupo">

          <option selected><? echo $grupo; ?></option>

          <?





    $sql = "select * from grupos order by grupo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['grupo']."</option>";

    }

?>

      </select></td> 

      <td>C&oacute;digo</td>

      <td><strong><font color="#0000FF"><? echo $codigo; ?></font>

          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">

      </strong></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Estabelecimento</td>

      <td><strong><font color="#0000FF">              <select name="estab_pertence" id="select6">

                <option selected><? echo $estab_pertence; ?></option>

                <?





    $sql = "select * from estabelecimentos order by nfantasia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nfantasia']."</option>";

    }

?>

              </select>

      </font></strong></td>

      <td>Cidade</td>

      <td><strong><font color="#0000FF"><? echo $cidade_estab_pertence; ?>

              <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo $cidade_estab_pertence; ?>">

      </font></strong></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Telefone</td>

      <td><strong><font color="#0000FF"><? echo $tel_estab_pertence; ?>

              <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $tel_estab_pertence; ?>">

      </font></strong></td>

      <td>E_Mail</td>

      <td><strong><font color="#0000FF"><? echo $email_estab_pertence; ?>

              <input name="email_estab_pertence" type="hidden" id="estab_pertence3" value="<? echo $email_estab_pertence; ?>">

      </font></strong></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td>Nome

      <input name="nome_antigo" type="hidden" id="nome3" value="<? echo $nome; ?>"></td>

      <td>      <input name="nome" type="text" id="nome" value="<? echo $nome; ?>" size="50" maxlength="50"></td>

      <td>Fun&ccedil;&atilde;o</td>

      <td><strong>

        <select name="funcao" id="funcao">

          <option selected><? echo $funcao; ?></option>

          <?





    $sql = "select * from funcao order by funcao asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['funcao']."</option>";

    }

?>
        </select>

      </strong>        </td>

      <td>&nbsp;</td>
    </tr>

    <tr>
      <td>CBO</td>
      <td><input name="cbo" type="text" id="cbo" value="<? echo $cbo; ?>"></td>
      <td>Se&ccedil;&atilde;o</td>
      <td><strong>
        <select name="secao" id="secao">
          <option selected><? echo $secao; ?></option>
          <?





    $sql = "select * from secoes order by secao asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['secao']."</option>";

    }

?>
        </select>
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 

      <td width="12%">Data Nasc </td>

      <td width="33%"><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10"></td>

      <td width="21%">Sexo</td>

      <td width="33%"><select name="sexo" id="sexo">

	    <option selected><? echo $sexo; ?></option>

        <option>Masculino</option>

        <option>Feminino</option>

      </select>        

        <font color="#0000FF">&nbsp; </font></td>

      <td width="1%">&nbsp;</td>
    </tr>

    <tr> 

      <td>Estado Civil </td>

      <td><select name="estadocivil" id="select3">

        <option selected><? echo $estadocivil; ?></option>

        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>

      </select>        </td>

      <td>CPF</td>

      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>" size="18" maxlength="14">      </td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>RG</td>

      <td><input name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25"> 

        &Oacute;rg&atilde;o 

        <input name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>

      <td>Emiss&atilde;o</td>

      <td><input name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10"> 

        dd/mm/aaaa </td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Pai</td>

      <td><input name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50"></td>

      <td>M&atilde;e</td>

      <td><input name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50"></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td>Endere&ccedil;o</td>

      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50">      </td>

      <td>N&uacute;mero</td>

      <td><input name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10">      </td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td><p>Bairro</p></td>

      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50">      </td>

      <td>Complemento</td>

      <td><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Cidade</td>

      <td><input name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>

      <td>Estado</td>

      <td><select name="estado" id="select7">

        <option selected><? echo $estado; ?></option>

        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>

      </select></td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td>Cep</td>

      <td><input name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9">

Use o formato 00000-000</td>

      <td>Telefone</td>

      <td><input name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14"> </td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td>Celular</td>

      <td><input name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14"></td>

      <td>E-Mail</td>

      <td><input name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50"></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Obs</td>

      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Usu&aacute;rio</td>

      <td><input name="usuario" type="text" id="usuario" value="<? echo $usuario_op; ?>"></td>

      <td>Meta</td>

      <td>R$ 

      <input name="meta" type="text" id="meta" value="<? echo $meta; ?>"></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Senha</td>

      <td><input name="senha" type="text" id="senha" value="<? echo $senha_op; ?>"></td>

      <td>Gratifica&ccedil;&atilde;o</td>

      <td><input name="gratificacao" type="text" id="gratificacao" value="<? echo $gratificacao; ?>"></td>

      <td>&nbsp;</td>
    </tr>

    <tr>

      <td>Sal&aacute;rio</td>

      <td><input name="salario" type="text" id="salario" value="<? echo $salario; ?>"></td>

      <td>Vale Alimenta&ccedil;&atilde;o </td>

      <td><input name="vale_alimentacao" type="text" id="vale_alimentacao" value="<? echo $vale_alimentacao; ?>"></td>

      <td>&nbsp;</td>
    </tr>

    <tr>
      <td>Classifica&ccedil;&atilde;o do Sal&aacute;rio</td>
      <td><select name="classificacao" id="estadocivil">
        <option selected><? echo $classificacao; ?></option>
        <?





    $sql = "select * from classificacao_salario order by classificacao asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['classificacao']."</option>";

    }

?>
      </select></td>
      <td>Comiss&atilde;o</td>
      <td><input name="comissao" type="text" id="comissao" value="<? echo $comissao; ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Contribui&ccedil;&atilde;o Sindical</td>
      <td><select name="sindical" id="sindical">
          <option selected><? echo $sindical; ?></option>
          <option>Não</option>
          <option>Sim</option>
        </select>
        Valor
  <input name="valor_sindicato" type="text" id="valor_sindicato" value="<? echo $valor_sindicato; ?>"></td>

      <td>D&eacute;bito Emprestimo </td>

      <td><input name="emprestimo" type="text" id="emprestimo" value="<? echo $emprestimo; ?>"></td>

      <td>&nbsp;</td>
    </tr>


    <tr>

      <td>Data Admiss&atilde;o </td>

      <td><input name="admissao" type="text" id="admissao" value="<? echo $admissao; ?>"></td>

      <td>Data Demis&atilde;o </td>

      <td><input name="demissao" type="text" id="demissao" value="<? echo $demissao; ?>"></td>

      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Tempo Almo&ccedil;o</td>
      <td><input name="tempo_almoco" type="text" id="tempo_almoco" value="<? echo $tempo_almoco; ?>" size="4" maxlength="2"> 
      Em minutos</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">

        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo $hora_atual; ?>">

        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">

      </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Alterar dados do Operador"> 

          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>
  </table>

</form>

<form name="form1" method="post" action="">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Cadastro efetuado por <br>

        </strong><strong><font color="#0000FF"><? echo $operador; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento; ?>

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong>Data do Cadastro <br>

              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>

      <td><strong>Hora que foi efetuado o Cadastro <br>

              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

<form name="form1" method="post" action="">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where nome = '$nome'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

?>



  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Cadastro <br>

            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado o Cadastro <br>

            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>

      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>

      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

  <? } ?>

</form>

<form name="form1" method="post" action="">

  <?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {





$operador_alterou = $linha[1];

$cel_operador_alterou = $linha[19];

$email_operador_alterou = $linha[20];

$estabelecimento_alterou = $linha[24];

$cidade_estabelecimento_alterou = $linha[25];

$tel_estabelecimento_alterou = $linha[26];

$email_estabelecimento_alterou = $linha[27];



?>

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>

      <td>&nbsp;</td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

<? } ?>

</form>

</body>

</html>

