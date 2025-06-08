<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<title>categorias</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

<base target="parte inferior">

</head>

			<?

			

require 'conect/conect.php';

			

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_intermediaria";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

$reg++;

?>







<body bgcolor="#<? printf("$linha[1]"); ?>">

<?

if($reg==1){

echo "</td>";

$reg=0;

}

?>

<? } ?>

<table width="100%"  border="0" height="32">



          

                <tr><td width="12%" height="28">                

                  

                    <form action="index.php" method="post" name="form1" target="_top">

                      <div align="center">        <input class='class02' type="submit" name="Submit3" value="Inicio">              </div>

                  </form>

                  

                    

                      

                    

                  <td width="13%"><form action="aempresa.php" method="post" name="form4" target="navegacao">

                    <input class='class02' type="submit" name="Submit32" value="A Empresa">

                  </form>                  

                  <td width="13%"><form action="contato.PHP" method="post" name="form5" target="navegacao">

                    <input class='class02' type="submit" name="Submit43" value="Fale Conosco">

                  </form>                  

                  <td width="16%"><form action="login_concessionarias.php" method="post" name="form2" target="navegacao">

                    <div align="center">

                      <input class='class02' type="submit" name="Submit4" value="Concession&aacute;rias">

                    </div>

                  </form>                  

                  <td width="16%"><form action="cadastrese/inserir_estabelecimento.php" method="post" name="form3" target="navegacao">
                    <div align="center">
                      <input class='class02' type="submit" name="Submit" value="Cadastre-se">
                    </div>
                  </form>
                  <td width="14%"><form action="localizacao.php" method="post" name="form3" target="navegacao">
                    <div align="center">
                      <input class='class02' type="submit" name="Submit5" value="Nossa Localiza&ccedil;&atilde;o">
                    </div>
                  </form>
                  <td width="16%"><form action="comentarios.php" method="post" name="form1" target="navegacao">
    <div align="center">
      <input class='class02' type="submit" name="Submit2" value="Coment&aacute;rios">
    </div>
  </form>  </tr>

        </table>

        <p>&nbsp;</p>

</body>

</html>