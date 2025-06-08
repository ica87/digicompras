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
<table width="100%"  border="0" height="32">

          
                <tr><td width="33%" height="28"><form action="login_ec.php" method="post" name="form1" target="navegacao">
                  <div align="center">
                    <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
                    <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
                    <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
                    <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
                    <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
                    <input type="submit" name="button" id="button" value="Empresas Conveniadas">
                  </div>
                </form>                
                  <td width="34%"><form action="login_lojista.php" method="post" name="form1" target="navegacao">
                    <div align="center">
                      <input type="submit" name="Submit32" value="Lojista">
                      <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
                      <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
                      <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
                      <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
                      <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
</div>
                  </form>
                  <td width="33%"><form action="login_usuario.php" method="post" name="form3" target="navegacao">
                    <div align="center">
                      <input type="submit" name="Submit" value="Usu&aacute;rio">
                      <input name="data_hoje" type="hidden" id="data_hoje3" value="<? echo $data_hoje; ?>">
                      <input name="dia" type="hidden" id="dia3" value="<? echo $dia; ?>">
                      <input name="mes" type="hidden" id="mes3" value="<? echo $mes; ?>">
                      <input name="ano" type="hidden" id="ano3" value="<? echo $ano; ?>">
                      <input name="mes_ano" type="hidden" id="mes_ano3" value="<? echo $mes_ano; ?>">
                    </div>
                </form>                  </tr>
        </table>
<p>&nbsp;</p>
</body>
</html>