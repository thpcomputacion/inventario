<?php include ("Conexion.php")?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SUCURSALES</title>
<style type="text/css">
<!--
tr {
	font-size: 11px;
	font-family: Verdana, Geneva, sans-serif;
}
-->
h2 {
	color:green;
	}
</style>
</head>
<body bgcolor="#C0C0C0">
<?php

Conectarse();
$result=mysql_query("SELECT * FROM n_sucursales order by SUCURSAL");
if ($_GET["campo_orden"]) {
                $campo=$_GET["campo_orden"];
                $orden=" ORDER BY $campo";
$result=mysql_query("SELECT * FROM n_sucursales $orden");
}
if ($_GET["sucu"]) { $filtro="WHERE SUCURSAL='".$_GET["sucu"]."'";	

$result=mysql_query("SELECT * FROM n_sucursales $filtro order by sucursal");}
 if ($_GET["borrar"]) { $filtro="";      
 $result=mysql_query("SELECT * FROM n_sucursales $filtro ");
 }  

?>

<div> <center> <h2> LISTA DE SUCURSALES </h2> </center> </div></BR></BR>
<table width="100%" border="0">
   <tr>
    <td width="100%"><p><div align="center"> <p>
      <table align="center" border=1 bordercolor="#CCCCCC">
      <div align="center"> 
<tr>
<tD width="47"><b><u><a href="index.php?sec=Consultas/sucursales&campo_orden=NRO">NRO</a></b></u></td>
<tD width="150"><b><u><a href="index.php?sec=Consultas/sucursales&campo_orden=SUCURSAL">SUCURSAL</a></b></u></td>
<tD width="300"><b><u>TELEFONO</b></u></td>
<tD width="10"><b><u>RPV</b></u></td>
<tD width="400"><b><u>DIRECCION</b></u></td>
<tD width="64"><b><u><a href="index.php?sec=Consultas/sucursales&campo_orden=ENLACE">ENLACE</a></b></u></td>
<tD width="133"><b><u><a href="index.php?sec=Consultas/sucursales&campo_orden=TECNOLOGIA">TECNOLOGIA</a></b></u></td>

</TR>
 </div>

<form method="GET" action="index.php">
<?php
	$result3=mysql_query("SELECT * FROM n_sucursales order by sucursal");
	echo "<select size='1' name='sucu'>";
	while ($row2 = mysql_fetch_array($result3) ){
		if ($row2["SUCURSAL"]<>"") { echo "<CENTER><option>".$row2["SUCURSAL"]."</option></center>>"; }
	}
	echo "</select>";

?>
  <input type="submit" value="Filtrar" name="B1">
  <input type="submit" id="borrar" name="borrar" value="Borrar Busqueda" />
  <input type="hidden" value="Consultas\sucursales" name="sec">

</form>
<?php 
while ($row = mysql_fetch_array($result) ) {
					echo 
					'<tr>
					      <td>'.$row["NRO"].'&nbsp</td>';
					echo '<td>'.$row["SUCURSAL"].'&nbsp</td>';
					echo '<td>'.$row["TELEFONO"].'&nbsp</td>';
					echo '<td>'.$row["RPV_SUC"].'&nbsp</td>';
					echo '<td>'.$row["DIRECCION"].'&nbsp</td>';
					echo '<td>'.$row["ENLACE"].'&nbsp</td>';
					echo '<td>'.$row["TECNOLOGIA"].'&nbsp</td>';
					
					'</tr>';
			}
?>
</table>       </div>
      
</td>
  </tr>
  
</table>

</body>
</html>