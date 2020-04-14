<?php include ("Conexion.php")?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DIEGO</title>
<style type="text/css">

a:link {
		color: white;
	}
h2 {
	color:green;
	}
	#titulo 
{
	background-color:#000000
	}
</style>

</head>
<body bgcolor="#FFFFFF" >
<?php 
Conectarse();
$result=mysql_query("SELECT * FROM diego order by Sucursal"); 
if ($_GET["campo_orden"]) { 
                $campo=$_GET["campo_orden"];
                $orden=" ORDER BY $campo";
$result=mysql_query("SELECT * FROM diego $orden");                
}

 if ($_GET["suc"]) { $filtro=" where SUCURSAL='".$_GET["suc"]."'";  
$result=mysql_query("SELECT * FROM diego $filtro ");}
 if ($_GET["suc2"]) { $filtro=" where TECNOLOGIA='".$_GET["suc2"]."'";  
$result=mysql_query("SELECT * FROM diego $filtro ");}
if ($_GET["suc3"]) { $filtro=" where PROVEEDOR='".$_GET["suc3"]."'";  
$result=mysql_query("SELECT * FROM diego $filtro ");}
 if ($_GET["borrar"]) { $filtro="";      
 $result=mysql_query("SELECT * FROM diego $filtro ");
 }       
        
              
        
        
?><div ><center>  </center> </div>
 <!-- <div ><center>   <img bordercolor="#ff0000" height="80"  src="imagenes/l.jpg" /> </center> </div> -->

<table width="100%" border="0" bgcolor="#FFFFFF" align="center">
<table style="float:left;"  border="0" >
<tr>
<td>
<b> ENLACE:</b> 
<form method="GET" action="index.php">
<?php
        $result3=mysql_query("SELECT * FROM enlaces");
        echo "<select size='1' name='suc2'>";
        while ($row3 = mysql_fetch_array($result3) ){
                if ($row3["Tipo"]<>"") { echo "<CENTER><option>".$row3["Tipo"]."</option></center>"; }
        }
        echo "</select>";

?>

  <input type="submit" value="Filtrar" name="B1">
  <input type="hidden" value="diego" name="sec">
</form>
</td></tr>

</table>
<table style="float:left;" >
<tr>
<td>
<b> PROVEEDOR: </b> 

<form method="GET" action="index.php">
<?php
        $result3=mysql_query("SELECT * FROM proveedor order by Proveedor");
        echo "<select size='1' name='suc3'>";
        while ($row3 = mysql_fetch_array($result3) ){
                if ($row3["PROVEEDOR"]<>"") { echo "<CENTER><option>".$row3["PROVEEDOR"]."</option></center>"; }
        }
        echo "</select>";

?>

  <input type="submit" value="Filtrar" name="B1">
  <input type="hidden" value="diego" name="sec">
</form></td></tr>
</table>
<table style="float:center;" >
<tr>
<td>
<b> SUCURSAL: </b> 

<form method="GET" action="index.php">
<?php
        $result2=mysql_query("SELECT * FROM diego order by sucursal");
        echo "<select size='1' name='suc'>";
        while ($row2 = mysql_fetch_array($result2) ){
                if ($row2["SUCURSAL"]<>"") { echo "<CENTER><option>".$row2["SUCURSAL"]."</option></center>"; }
        }
        echo "</select>";

?>

  <input type="submit" value="Filtrar" name="B1">
  <input type="submit" id="borrar" name="borrar" value="Borrar Busqueda" />
  <input type="hidden" value="diego" name="sec">
</form></td></tr>
</table>

	<tr>
    <td width="100%">

    <div align="center"> <table align="center" border=1 font="comic" bordercolor="#069e06">
<tD width="300" bgcolor="#069e06" ><font color="#ffffff"><b/><u/>SUCURSAL</a></b></u></font></td>
<tD width="400" bgcolor="#069e06"><font color="#ffffff"><b/><u/>GERENTE</a></b></u></font></td>
<tD width="300" bgcolor="#069e06"><font color="#ffffff"><b/><u/>CELULAR</b></u></font></td>
<tD width="400"  bgcolor="#069e06"><font color="#ffffff"><b/><u>LINEAS</b></u></font></td>
<tD width="40"  bgcolor="#069e06"><font color="#ffffff"><b/><u>PROVEEDOR</a></b></u></font></td>
<tD width="40"  bgcolor="#069e06"><font color="#ffffff"><b/><u>REFERENCIA</b></u></font></td>
<tD width="20"  bgcolor="#069e06"><font color="#ffffff"><b/><u>TECNOLOGIA</b></u></font></td>
<tD width="100"  bgcolor="#069e06"><font color="#ffffff"><b/><u>LINEA DIG</b></u></font></td>
<tD width="20" bgcolor="#069e06"><font color="#ffffff"><b/><u>RED</b></u></font></td>

</TR>

<?php
while ($row = mysql_fetch_array($result) ){
                                        echo '<tr><td>'.$row["SUCURSAL"].'&nbsp</td>';
                                        echo '<td>'.$row["GERENTE"].'&nbsp</td>';
                                        echo '<td>'.$row["CELULAR"].'&nbsp</td>';
                                        
					echo '<td>'.$row["LINEAS"].'&nbsp</td>';
					echo '<td>'.$row["PROVEEDOR"].'&nbsp</td>';
					echo '<td>'.$row["REF"].'&nbsp</td>';
					echo '<td>'.$row["TECNOLOGIA"].'&nbsp</td>';
					echo '<td>'.$row["ADSL"].'&nbsp</td>';
					echo '<td>'.$row["RED"].'&nbsp</td>';
					
                                        '</tr>';
                }        
?>
</table>
          </div>
		    <div align="center"> <a href="HTTP://elcolo/suc/index.php">VOLVER</a> </div>
</td>

  </tr>

</table>


</body>

</html>
