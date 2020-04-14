<?  include ("Conexion.php")
//actualizar.php 
Conectarse();
if($_POST) { 

//conexión a mysql 

$usr = $_POST['usuario'] 
$sql = "UPDATE ins_imp SET [TOSHIBA] WHERE ";

for($i=0;$i<count($usr);$i++) { 
$sql.= "id =".$usr[$i]; 
if(i<count($usr)-1) $sql." || "; 
} 

//obtenemos: $sql = "UPDATE usuarios SET [loqsea] WHERE id = 1 || id = 45 || id = 9 ..."; 

$res = mysql_query($sql); 

} 
?>
