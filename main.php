<?php
//  ***
include "includes/common.php";
include "includes/database.php";
include "includes/templates.php";


session_start();
if ($_SESSION["logedin"] != 1) { redirect("timeout.php"); }

echo "Usuario: ".$_SESSION["UserName"];

$objCon = new DB_Sql;
$objCon->connect();

$objTemp = new Template(".");

	$objTemp->set_file(array(
				  "PAGINA"  => TEMPLATES_DIR . "main.htm",
	));

$nombre=$_GET["nombre"];

			$objTemp->set_block("PAGINA","BLQ_TABLA","blq_tabla");
			$objTemp->set_block("PAGINA","BLQ_LISTA","blq_lista");
			$objTemp->parse("blq_tabla","BLQ_TABLA",true);


if ($nombre) {
      $sql = "SELECT * FROM titulos WHERE nombre LIKE '%$nombre%' ORDER BY codigo";  
}
else {
      $sql = "SELECT * FROM titulos ORDER BY nombre";  
}

		$query = mysql_query($sql);

			while($row = mysql_fetch_array($query)) {

                if ($row["nombre"]) {
                        $objTemp->set_var(array(
                          "ID_TITULO"	=> $row["id_titulo"],
                          "CODIGO"	=> $row["codigo"],
                          "NOMBRE"		=> $row["nombre"],
                          "ORIGINAL"  => $row["original"],
                          "FECHA_DE_COMPRA" => $row["fecha_de_compra"],
                          "CANT_LICENCIAS" => $row["cant_licencias"],
                          "CANT_COPIAS" => $row["cant_copias"],
                          ));

                        $objTemp->parse("blq_lista","BLQ_LISTA",true);
							}
			 }
		 
			 
$objTemp->parse("out", "PAGINA");
$objTemp->p("out",false);

?>
