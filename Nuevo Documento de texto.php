<html>
<body>
<?php $sql = "select * from proyectos WHERE id = '$_GET[id]'";
$resultados = mysql_query($sql,"sucursales");
while($row = mysql_fetch_array($resultados)) {?>
<span style="font-family:'Trebuchet MS', Arial, Tahoma; font-size:12px;">
<form action="index.php?sec=adm_not5&id=<?PHP echo $row["id"];?>" method="post" enctype="multipart/form-data" name="form1">
<input name="titulo" type="text" id="titulo" style="width:100%; font-family:'Trebuchet MS', Arial, Tahoma; font-size:12px; height:20px;" onfocus="if(this.value=='Titulo') this.value='';" onblur="if(this.value=='') this.value='Titulo';" value="<?PHP echo ''.$row["titulo"].''; ?>">
<input name="autor" type="text" id="autor" style="width:100%; font-family:'Trebuchet MS', Arial, Tahoma; font-size:12px; height:20px;" onfocus="if(this.value=='Autor') this.value='';" onblur="if(this.value=='') this.value='Autor';" value="<?PHP echo ''.$row["autor"].''; ?>">
<input name="fecha" type="text" id="fecha" style="width:100%; font-family:'Trebuchet MS', Arial, Tahoma; font-size:12px; height:20px;" onfocus="if(this.value=='<?PHP echo date("d.m.y - H:i:s"); ?>') this.value='';" onblur="if(this.value=='') this.value='<?PHP echo date("d.m.y - H:i:s"); ?>';" value="<?PHP echo ''.$row["fecha"].''; ?>" >
Contenido
<textarea name="contenido" id="contenido" style="width:100%; font-family:'Trebuchet MS', Arial, Tahoma; font-size:12px; height:200px;"><?PHP echo $row["contenido"];?></textarea>
<br>
Imagen
<hr>
<div align="center">
<a href="ver2.php?id=<?PHP echo ''.$row["id"].''; ?>" target="_blank">
<img src="ver.php?id=<?PHP echo ''.$row["id"].''; ?>" border="1" alt="<?PHP echo ''.$row["nimagne"].''; ?>"></a></div>
<input name="nombre" type="text" value="<?PHP echo ''.$row["nimagne"].''; ?>" maxlength="100"><br>
<input type="file" name="imagen">
<?PHP } ?>
<hr>
<?
$sql = "select * from categorias order by nombre";
$resultados = mysql_query($sql,$db);
while($row = mysql_fetch_array($resultados)) {?>
<input name="categoria" type="radio" value="<?PHP echo $row["nombre"]; ?>"><?PHP echo $row["nombre"]; ?><br>
 }
<input type="submit" name="Submit" value="Editar">
</form>
</body>
</html>