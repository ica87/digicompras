<html>
<head>
<title>categorias</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link href="file:///D|/1_webs/1_digicompras/busca_produtos_codigo.php" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

			<?
			
require 'conect/conect.php';

$data_hoje = date('d-m-Y');
$dia = date('d');
if($dia>=26){
$mes = date('m')+1;
if($mes>=13){
$mes = date('01');
}
}else{
$mes = date('m');
}
if($mes==01){
$ano = date('Y')+1;
}else{
$ano = date('Y');
}
$mes_ano = "$mes"."-"."$ano";

			
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

<table width="100%"  border="0">

          
                <tr><td colspan="5">                
              </tr>
				  
          <tr>
            <td width="26%"><form action="busca_produtos.php" method="post" name="form1" target="navegacao">
              <?php
$categoria = $_POST['categoria'];	
		  
//$variavel = $categoria["resultado_query"];
?>
<input name="categoria" type="hidden" value="<? echo $categoria; ?>" />
<select name="sub_categoria" id="select6">
  <option selected></option>
  <?


    $sql = "select * from sub_categorias where categoria = '$categoria' order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
</select>
<input type="submit" name="Submit" value="Buscar Produtos">
            </form></td>
            <td width="16%"><form action="login_ec.php" method="post" name="form1" target="navegacao">
              <div align="center">
                <input type="submit" name="Submit4" value="&Aacute;rea Empresarial">
                <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
                <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
                <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
                <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
                <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
</div>
            </form></td>
            <td width="15%"><form action="login_lojista.php" method="post" name="form1" target="navegacao">
              <div align="center">
                <input type="submit" name="Submit3" value="&Aacute;rea do Lojista">
                <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
                <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
                <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
                <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
                <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
              </div>
            </form></td>
            <td width="19%"><form action="login.php" method="post" name="form3" target="navegacao">
              <div align="center">
                <input type="submit" name="Submit32" value="&Aacute;rea do Usu&aacute;rio">
                <input name="data_hoje" type="hidden" id="data_hoje3" value="<? echo $data_hoje; ?>">
                <input name="dia" type="hidden" id="dia3" value="<? echo $dia; ?>">
                <input name="mes" type="hidden" id="mes3" value="<? echo $mes; ?>">
                <input name="ano" type="hidden" id="ano3" value="<? echo $ano; ?>">
                <input name="mes_ano" type="hidden" id="mes_ano3" value="<? echo $mes_ano; ?>">
</div>
            </form></td>
            <td width="24%"><form action="busca_produtos_codigo.php" method="post" name="form2" target="navegacao">
              <div align="right">
                <select name="referencia" id="referencia">
                  <option selected>Buscar por referencia </option>
							              <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
                </select>
                <input type="submit" name="Submit2" value="Buscar">
              </div>
            </form></td>
          </tr>
        </table>
        <p>&nbsp;</p>
</body>
</html>
