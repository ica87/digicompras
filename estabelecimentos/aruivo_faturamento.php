<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%" border="0" cellspacing="4">
  <tr>
    <td width="27%"><strong> Faturamento do m&ecirc;s </strong> <br>
        <strong>
        <?
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$estab_pertence_op' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
if($valor_total==0){
echo "R$ "."0.00";
}else{

echo "R$ ".bcadd($valor_total,0,2);
}

$comissao_digicompras = bcmul($valor_total,0.06,2);

?>
        <font color="#0000FF"> </font></strong></td>
    <td width="24%"><font color="#000000"><strong>Comiss&atilde;o Digicompras</strong><br>
          <strong><? echo "R$ ".$comissao_digicompras ; ?></strong> </font></td>
    <td><strong><font color="#000000">Tarifa DOC / TED </font><font color="#000000"><br>
            <strong>
            <? 
$subtotal = bcsub($valor_total,$comissao_digicompras,2);
if($subtotal<=5000.00){
$doc_ted = "6.00";
}else{
$doc_ted = "12.00";
}
if($valor_total==0){
$liquido_a_receber = "0.00";
}else{
$liquido_a_receber = bcsub($subtotal,$doc_ted,2);
}
echo "R$ ".$doc_ted;
?>
          </strong> </font></strong></td>
    <td><strong><font color="#000000">TOTAL LIQUIDO A RECEBER </font><font color="#000000"><br>
            <strong>
            <? 
echo "R$ ".$liquido_a_receber;			
?>
          </strong> </font></strong></td>
  </tr>
  <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>
  <? } ?>
</table>
</body>
</html>
