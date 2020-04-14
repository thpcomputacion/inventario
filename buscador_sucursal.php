<?php
// Buscador para tablas MySQL escrito en PHP. Por Alex para www.webtaller.com
// Creado el 13-10-2003


////////////////////////////
// Configuración
///////////////////////////

//modifica estas variables según tu servidor de MySQL

$bd_servidor = "localhost";
$bd_usuario = "root";
$bd_contrasenya = "";
$bd_bdname = "sucursales";
$bd_tabla = "n_sucursales"; // Tabla donde se harán las búsquedas
// Conexión y selección de la base de datos

$link = mysql_connect($bd_servidor,$bd_usuario,$bd_contrasenya);

mysql_select_db($bd_bdname,$link);

////////////////////////////
// Formulario
///////////////////////////

?>

<center>
<p>
<h2>Introduce las palabras para la busqueda</h2></p>
<form name="buscador" method="get" action="index.php"><br>
Buscar en:
<select name="campo">
<?php

//Con este query obtendremos los campos por los cuales el usuario puede buscar

$result = mysql_query("SHOW FIELDS FROM $bd_tabla",$link);

while($row = mysql_fetch_row($result)) {

// en $row[0] tenemos el nombre del campo
// de esta manera no necesitamos conocer el nombre de los campos
// por lo que cualquier tabla nos valdrá

?>
<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
<?php

}

?>
</select>
Palabra(s): <input type="text" name="palabra"><br>
<input type="submit" value="Enviar" name="enviar">
<input type="hidden" name="sec" value="buscador_sucursal" />
</form></p>
</center>

<?php

////////////////////////////
// Proceso del Formulario
///////////////////////////

if(isset($_GET['enviar'])) {

// Solo se ejecuta si se ha enviado el formulario

$query = "SELECT * from $bd_tabla WHERE `{$_GET['campo']}` LIKE '%{$_GET['palabra']}%'";

$result = mysql_query($query,$link);



$found = false; // Si el query ha devuelto algo pondrá a true esta variable
?> <table align="center" border="1" cellpadding="0" cellspacing="0" ><?php
while ($row = mysql_fetch_array($result)) {

$found = true;

echo "<p>";

foreach($row as $nombre_campo => $valor_campo) {

// Tenemos que mostrar todos los campos de las filas donde se haya
// encontrado la búsqueda.


if(is_int($nombre_campo)) {

continue; //Cuando hacemos mysql_fetch_array, php genera un array
// con todos los valores guardados dos veces, uno con
// índice numérico y otro con índice el nombre del campo.
// Solo nos interesa el del nombre del campo.

}?>
<tr><td align="left"><?php
echo "<b>".$nombre_campo."</b> : ".$valor_campo."<br>";
}
?></td></tr><?php 
echo "</p>";

}

if(!$found) {

echo "No se encontró la palabra introducida";

}?>
</table><?php
}
?>