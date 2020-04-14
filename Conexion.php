<?php
function Conectarse()
{
if
(!($link=mysql_connect("127.0.0.1","root","nsvr","conexion1")))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysql_select_db("sucursales",$link))
{
echo "Error seleccionando la base de datos.";
exit();
}
return $link;
}
?>
