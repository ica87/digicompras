<?
$conexao = mysql_connect("localhost","dcivan","20792079") or die("falha na conexão");
mysql_select_db("digicomp_loja",$conexao) or die("Falha ao selecionar a database");
?>

<style type="text/css">
	
.style01 {font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
}

.class01 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #1328c9; 
	border-radius: 8px; 
	border: 3px solid #aaa; 
	color: #FFF; 
	cursor: pointer; 
	padding: 4px;
}
.class01:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #09EF15;
	color: #000000;
	font-weight: bold;
}

.class02 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #ffffff; 
	border-radius: 8px; 
	border: 3px solid #0404B4; 
	color: #000000; 
	cursor: pointer; 
	padding: 4px;
}
.class02:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #000000;
	color: #ffffff;
	font-weight: bold;
}

.class03 {
    font: bold arial, helvetica, sans-aerif;
	font-weight: bold;
	background-color: #1328c9; 
	border-radius: 8px; 
	border: 3px solid #00ff00; 
	color: #FFF; 
	cursor: pointer; 
	padding: 4px;
}
.class03:hover {
    font: bold arial, helvetica, sans-aerif;
	background-color: #000000;
	color: #ffcc00;
	font-weight: bold;
}

.class04 {
    font: bold arial, helvetica, sans-aerif;
	font-size: 40px;
	font-weight: bold;
	background-color: #1328c9; 
	border-radius: 20px; 
	border: 3px solid #aaa; 
	color: #FFFFFF; 
	cursor: pointer; 
	padding: 4px;
}
	.class04:hover {
    font: bold arial, helvetica, sans-aerif;
	font-size: 40px;
	font-weight: bold;
	background-color: #09EF15;
	color: #000000;
	font-weight: bold;
	}
.class05 {
    font: bold arial, helvetica, sans-aerif;
	font-size: 40px;
	font-weight: bold;
	background-color: #460B0B; 
	border-radius: 8px; 
	border: 3px solid #aaa; 
	color: #FFFFFF; 
	cursor: pointer; 
	padding: 4px;
}
	.class06 {
    font: bold arial, helvetica, sans-aerif;
	font-size: 14px;
	font-weight: bold;
	background-color: #ffffff; 
	border-radius: 8px; 
	border: 3px solid #0404B4; 
	color: #000000; 
	cursor: pointer; 
	padding: 4px;
}
.class06:hover {
    font: bold arial, helvetica, sans-aerif;
	font-size: 14px;
	font-weight: bold;
	background-color: #000000;
	color: #ffffff;
	font-weight: bold;
}

#div01 {
	color: #000;
	font-size: 40px;
	font-weight: bold;
	height: 100px;
	position: absolute;
	top: 40px;
	left: 50px;
	width: 100px;
}

</style>