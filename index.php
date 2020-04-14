<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
<title>SUCURSALES</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
h6 {
	font-size: 9px;
	}
h6 {
	color: #000000;

	}ok
<!--

h1 {
	color:#FFF;
}
tr {
	font-size: 11px;
	font-family: Verdana, Geneva, sans-serif;
}

-->
.button {
   border-top: 1px solid #96d1f8;
   background: #adc2bc;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e8504), to(#adc2bc));
   background: -moz-linear-gradient(top, #3e8504, #adc2bc);
   padding: 5px 10px;
   -webkit-border-radius: 40px;
   -moz-border-radius: 40px;
   border-radius: 40px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 11px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #069e06;
   background: #069e06;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }

 

   
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
function maximizar(){
window.moveTo(0,0);
window.resizeTo(screen.width,screen.height);
}
</script>
<script language="JavaScript1.2"> 


// Maximizar Ventana por Nick Lowe (nicklowe@ukonline.co.uk) 

window.moveTo(0,0); 
if (document.all) { 
top.window.resizeTo(screen.availWidth,screen.availHeight); 
} 
else if (document.layers||document.getElementById) { 
if (top.window.outerHeight<screen.availHeight||top.window.outerWidth<screen.availWidth){ 
top.window.outerHeight = screen.availHeight; 
top.window.outerWidth = screen.availWidth; 
} 
} 

</script>
</head>
<body bgcolor="#CCCCCC" onLoad="window.moveTo(0,0); window.resizeTo(screen.availWidth,screen.availHeight)">
<table border="0"  style="float:left;" cellspacing="5" cellpadding="0"  >
<tr><td bgcolor="#cccccc" align="left" width="150">
<img border="0" width="100%"src="imagenes/logo.jpg" />
<br/>

<?php

 include "includes/common.php";
 include "includes/database.php";
 include "includes/templates.php";


 session_start();
if ($_SESSION["logedin"] != 1) { }   

echo "Usuario: ".$_SESSION["UserName"];

?> </br></br>
<?php 
 //$total = "11"; // Numero total de imagenes 
 $extension = ".jpg";// Definimos la extension, puede ser .jpg, gif, bmp, etc. 
 //$carpeta = "imagenes";//Carpeta con las imagenes 
  // De aqui para abajo no es necesario modificar nada 
 //$start = "1"; 
 //$random = mt_rand($start, $total); 
 $image_name =$_SESSION["UserName"].$extension; 
 // if ($image_name=="nascone" ) {
  //echo "<img src='http://portal//templates/nacion_seguros_purity/images/silueta100.jpg' width='80' height='80'>";}
  //if ($image_name=="dhsanchez" ) {
  //echo "<img src='http://portal//templates/nacion_seguros_purity/images/silueta100.jpg' width='80' height='80'>";}
  //else 
// if  ($image_name != "") { echo "<img src='http://portal/images/usuarios/".$image_name."' width='50' height='50' alt='SIN FOTO' align='center' border='1'>"; }
// echo "<img src='http://portal//templates/nacion_seguros_purity/images/silueta100.jpg' width='80' height='80' border='10'>";
  ?> 

<!-- <img border="0" width="100"src="imagenes/sanraf.jpg" /><br/> <br/> 
 <img border="0" width="50"src="imagenes/MFRANCO.jpg" />  <img border="0" width="50"src="imagenes/mactis.jpg" />-->

</td>
</TR>



<tr><td bgcolor="#CCCCCC" >
<font color="#000000" align="center" size="3">
<br/><!--
<div class="menu bubplastic vertical lime">
	<ul>
		<li><span class="menu_r"><a href="index.php"><span class="menu_ar">Home</span></a></span></li>
		<li><span class="menu_r"><a href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Sucursales Fotos" ><span class="menu_ar">Fotos</span></a></span></li>
		<li><span class="menu_r"><a href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Layout"><span class="menu_ar">Layout</span></a></span></li>
		<li><span class="menu_r"><a href="index.php?sec=diego"><span class="menu_ar">Cristiano</span></a></span></li>
		<li><span class="menu_r"><a href="imagenes/mapa.PDF"><span class="menu_ar">Mapa</span></a></span></li>
		<li><span class="menu_r"><a href="http://portal/documentos/sucursales/CRONOGRAMA_DE_SUC_16-01-12.pdf"><span class="menu_ar">Cronograma</span></a></span></li>
		<li><span class="menu_r"><a href="\\fileserver\sistema\Inventario\Stock_CPU_MON_IMP.xls"><span class="menu_ar">Inventario</span></a></span></li>
		<li><span class="menu_r"><a href="http://portal/lista-de-sucursales.html"><span class="menu_ar">Lista de Sucursales</span></a></span></li>
		<li><span class="menu_r"><a href="index.php?sec=diego">Cristiano</span></a></span></li>
	</ul>
	<br class="clearit" />
</div>
-->
<div id="menu">
<ul>

<li><a href="index.php">Home</a></li>
<li><a href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Sucursales Fotos" >Fotos</a></li>
<li><a href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Layout">Layout</a></li>
<li><a href="index.php?sec=diego">Cristiano</a></li>
<li><a href="imagenes/mapa.PDF">Mapa</a></li>
<li><a href="http://portal/documentos/sucursales/cronograma-sucursales-17-04-2012.xlsx.pdf">Cronograma</a></li>
<li><a href="\\fileserver\sistema\Inventario\Stock_CPU_MON_IMP.xls">Inventario excel</a></li>
<li><a href="http://portal/lista-de-sucursales.html">Lista Suc</a></li>
<li><a href="index.php?sec=consultas/Sop_Tec">Soporte Tecnico</a></li>
<li><a href="http://portal/blog/133-articulos/1713-cambios-de-numeracion-telefonica.html">Cambio numeracion!</a></li>
<li><a href="http://elcolo/idc">Inventario Web</a></li>


</ul>
</div>

</td>
</TR>
<!--
<tr><td ><img border="0" width="25"src="imagenes/home.jpg" />
<a  class="button" href="index.php"><b>HOME</b> </a>
<br/><br/>
</td>
</TR>

<tr><td ><img border="0" width="25"src="imagenes/mactis.jpg" />
<a  class="button" href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Sucursales Fotos">FOTOS</a>
<br/><br/>
</td>
</TR>

<tr><td ><img border="0" width="25"src="imagenes/layout.jpg" />
<a   class="button" href="\\fileserver\SubGcia_Ingenieria\Ingsist\Infraestructura de Computos\Documentacion\Sucursales\Layout">LAYOUT</A>

<br/><br/>
</td>
</TR>
<tr><td bgcolor="#CCCCCC" >
<img border="0" width="25"src="imagenes/cr.jpg" />
<a  class="button" href="index.php?sec=diego">CRISTIANO</A>
<br/><br/>
</td>
</TR>

<tr><td > <img border="0" width="25"src="imagenes/mapa.jpg" />
<a  class="button" href="imagenes/mapa.PDF">MAPA</a>
<br/><br/>
</td>
</TR>

<tr><td ><img border="0" width="25"src="imagenes/crono.jpg" />
<a  class="button" href="http://portal/documentos/sucursales/Cronograma_de_Aperturas_06-12-2011.pdf">CRONO</a>
<br/><br/>
</td>
</TR>

<tr><td><img border="0" width="25"src="imagenes/inventario.jpg" />
<a  class="button" href="\\fileserver\sistema\Inventario\Stock_CPU_MON_IMP.xls">INVENTARIO</a>
<br/><br/>
</td>
</TR>
<!--
<tr><td bgcolor="#CCCCCC" >
<img border="0" width="25"src="imagenes/ip.jpg" />
<a  class="button" href="index.php?sec=modificaciones/ip">RELEVAMIENTO IP</A>
<br/><br/>
</td>
</TR>

<tr><td bgcolor="#CCCCCC" >
 <img border="0" width="25"src="imagenes/SANRAF.jpg" /> 
<a  class="button" href="http://portal/lista-de-sucursales.html">LISTA SUC PORTAL</A>
<br/><br/>
</td>
</TR>

<tr><td bgcolor="#CCCCCC" >
 <img border="0" width="25"src="imagenes/LCITTADINI.jpg" /> 
<a  class="button" href="index.php?sec=consultas/new_users">ALTAS LEAN</A>
<br/><br/>
</td>
</TR>

<tr><td bgcolor="#CCCCCC" >
 <img border="0" width="25"src="imagenes/soporte.jpg" /> 
<a  class="button" href="index.php?sec=consultas/Sop_Tec">SOPORTE TECNICO</A>
<br/><br/>
</td>
</TR>

 -->

<!--
<tr>
<td width="100"  bgcolor="#000000" >
    <h6> <u>Autor:</u> </br> Federico Cesarano  </br>Infraestructura_de_computos Dpto. de Ingeniería int:3667</h6></td>

</TR>
-->
</table>

<table width="65%" bgcolor="#FFFFFF" style="float:left;">
<tr colspan="2">
     
     <td width="100%"  bgcolor="#FFFFFF" ><img  height="50" align="top" src="imagenes/red3.jpg" />
       </td>
       
	   

	  
      </tr>
      <tr><td colspan="11">
	  <div>
<ul class="menu">
	
	<li class="top"><a href="#" class="top_link"><span>ABM</span></a>
		<ul class="sub">
	
	<li ><a href="#"><span>ALTAS</span></a>
		<ul class="sub-menu">
			<li><a href="index.php?sec=Altas/form_alta_usuario">USUARIO</a></li>
            <li><a href="index.php?sec=Altas/form_alta_suc">SUCURSAL</a></li>
            <li><a href="index.php?sec=Altas/form_alta_tc">THIN CLIENT</a></li>
			<li><a href="index.php?sec=Altas/form_alta_pc">PC</a></li>
			<li><a href="index.php?sec=Altas/form_alta_monitor">MONITOR</a></li>
			<li><a href="index.php?sec=Altas/form_alta_notebook">NOTEBOOK</a></li>
		</ul>
	</li>
	
	<li ><a href="#" ><span>BAJAS</span></a>
		<ul class="sub-menu">
			<li><a href="index.php?sec=Bajas/form_baja_usuarios">USUARIO</a></li>
            <li><a href="index.php?sec=Bajas/form_baja_suc">SUCURSAL</a></li>
            <li><a href="index.php?sec=Bajas/form_baja_tc">THIN CLIENT</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_pc">PC</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_monitor">MONITOR</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_notebook">NOTEBOOK</a></li>
		</ul>
	</li>
	
	<li ><a href="#" ><span>MODIFICACION</span></a>
	<ul class="sub-menu">
				<li><a href="index.php?sec=Modificaciones/form_modif_usuarios">USUARIO</a></li>
                <li><a href="index.php?sec=Modificaciones/form_modif_suc">SUCURSAL</a></li>
                <li><a href="index.php?sec=Modificaciones/form_modif_tc">THIN CLIENT</a></li>
				<li><a href="index.php?sec=Modificaciones/form_modif_pc">PC</a></li>
				<li><a href="index.php?sec=Modificaciones/form_modif_notebook">NOTEBOOK</a></li>
		</ul>
	</li>
	</ul>
	</li>
	
	<li class="top"><a href="#" class="top_link"><span>CONSULTAS</span></a>
	<ul class="sub">
			 <!--<li><a href="index.php?sec=Consultas/usuarios">USUARIOS 2011</a></li>-->
			 <li><a href="index.php?sec=Consultas/dotacion2013">USUARIOS 2013</a></li>
            <li><a href="index.php?sec=Consultas/sucursales">SUCURSALES</a></li>
            <li><a href="index.php?sec=Consultas/Ver_TC">THIN CLIENTS</a></li>
	    <li><a href="index.php?sec=Consultas/pc">PC</a></li>
	    <li><a href="index.php?sec=Consultas/adsl">ADSL</a></li>
		<li><a href="index.php?sec=Consultas/ver_monitor">MONITORES</a></li>
		<li><a href="index.php?sec=Consultas/ver_notebook">NOTEBOOK</a></li>
		</ul>
	</li>
	<li class="top"><a href="#" class="top_link"><span>APERTURAS</span></a>
	<ul class="sub">
				<li><a href="index.php?sec=Consultas/aperturas/resumen">Domicilios</a></li>
				<li><a href="index.php?sec=Consultas/aperturas/contratistas">Contratistas</a></li>
			<li><a href="index.php?sec=Consultas/aperturas/datosytelefonia">PEDIDOS</a></li>
			<li><a href="index.php?sec=Consultas/aperturas/tcymon">ENVIO DE TC Y MON</a></li>
			<li><a href="index.php?sec=Consultas/aperturas/equipos">ENVIO DE PBX, SWITCH Y ROUTER</a></li>
		</ul>
	</li>
	<li class="top"><a href="#" class="top_link"><span>MUDANZAS</span></a>
	<ul class="sub">
				
			
			<li><a href="index.php?sec=Consultas/mudanzas/resumen" >Domicilios</a></li>
			 <li><a href="index.php?sec=Consultas/mudanzas/contratistas">Contratistas</a></li>
			<li><a href="index.php?sec=Consultas/mudanzas/datosytelefonia">PEDIDOS</a></li>
			<li><a href="index.php?sec=Consultas/mudanzas/equipos">ENVIO DE PBX, SWITCH Y ROUTER</a></li>

		</ul>
	</li><!--
	<li class="top"><a href="#" class="top_link"><span>MIGRACION MPLS</span></a>
	<ul class="sub">
				
			    <li><a href="index.php?sec=consultas/mig_mpls/telecom">TELECOM</a></li>
				<li><a href="index.php?sec=consultas/mig_mpls/telefonica">TELEFONICA</a></li>
            
           </ul>
        </li>
			-->
		<li class="top"><a href="#" class="top_link"><span>MIG TELEFONIA</span></a>
          <ul class="sub">
            
                <li><a href="index.php?sec=consultas/mig_telefonia/telecom">TELECOM</a></li>
				<li><a href="index.php?sec=consultas/mig_telefonia/telefonica">TELEFONICA</a></li>
            
           </ul>
        </li>
		
		
		<li class="top"><a href="#" class="top_link"><span>SOLICITUD ADSL</span></a>
	<ul class="sub">
				
			    <li><a href="index.php?sec=consultas/pedidos_adsl/telecom">TELECOM</a></li>
				<li><a href="index.php?sec=consultas/pedidos_adsl/telefonica">TELEFONICA</a></li>
            
           </ul>
        </li>
		<li class="top"><a href="#" class="top_link"><span>VARIOS</span></a>
	<ul class="sub">
				
			    <li><a href="index.php?sec=consultas/horarios">Horarios Suc</a></li>
				<li><a href="index.php?sec=consultas/flota">Telefonos Flota</a></li>
				
            
           </ul>
        </li>
		
</ul>
</div>
	  <!--
	  <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a class="MenuBarItemSubmenu" >ALTAS</a>
          <ul>
            <li><a href="index.php?sec=Altas/form_alta_usuario">USUARIO</a></li>
            <li><a href="index.php?sec=Altas/form_alta_suc">SUCURSAL</a></li>
            <li><a href="index.php?sec=Altas/form_alta_tc">THIN CLIENT</a></li>
			<li><a href="index.php?sec=Altas/form_alta_pc">PC</a></li>
			<li><a href="index.php?sec=Altas/form_alta_monitor">MONITOR</a></li>
			<li><a href="index.php?sec=Altas/form_alta_notebook">NOTEBOOK</a></li>
          </ul>
        </li>
        <li><a class="MenuBarItemSubmenu">BAJAS</a>
        <ul>
            <li><a href="index.php?sec=Bajas/form_baja_usuarios">USUARIO</a></li>
            <li><a href="index.php?sec=Bajas/form_baja_suc">SUCURSAL</a></li>
            <li><a href="index.php?sec=Bajas/form_baja_tc">THIN CLIENT</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_pc">PC</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_monitor">MONITOR</a></li>
			<li><a href="index.php?sec=Bajas/form_baja_notebook">NOTEBOOK</a></li>
          </ul>
        </li>
		
        <li><a class="MenuBarItemSubmenu" >MODIFICACION</a>
          <ul>
            
                <li><a href="index.php?sec=Modificaciones/form_modif_usuarios">USUARIO</a></li>
                <li><a href="index.php?sec=Modificaciones/form_modif_suc">SUCURSAL</a></li>
                <li><a href="index.php?sec=Modificaciones/form_modif_tc">THIN CLIENT</a></li>
				<li><a href="index.php?sec=Modificaciones/form_modif_pc">PC</a></li>
				<li><a href="index.php?sec=Modificaciones/form_modif_notebook">NOTEBOOK</a></li>
           </ul>
        </li>
        <li><a class="MenuBarItemSubmenu">CONSULTAS</a>
          <ul>
            <li><a href="index.php?sec=Consultas/usuarios">USUARIOS</a></li>
            <li><a href="index.php?sec=Consultas/sucursales">SUCURSALES</a></li>
            <li><a href="index.php?sec=Consultas/Ver_TC">THIN CLIENTS</a></li>
	    <li><a href="index.php?sec=Consultas/pc">PC</a></li>
	    <li><a href="index.php?sec=Consultas/adsl">ADSL</a></li>
		<li><a href="index.php?sec=Consultas/ver_monitor">MONITORES</a></li>
		<li><a href="index.php?sec=Consultas/ver_notebook">NOTEBOOK</a></li>
          </ul>
        </li>
		<li><a class="MenuBarItemSubmenu">APERTURAS</a>
          <ul>
            <li><a class="MenuBarItemSubmenu">Sucursales</a></li>
			 <ul>
			<li><a href="index.php?sec=Consultas/aperturas/contratistas">Contratistas</a></li>
			<li><a href="index.php?sec=Consultas/aperturas/resumen" >Resumen</a></li>
			<!--<li><a href="index.php?sec=Consultas/ap_contratistas">RECLAMOS</a></li>
			<li><a href="index.php?sec=Consultas/ap_contratistas">AVANCE DE OBRA</a></li>
			<li><a href="index.php?sec=Consultas/aperturas/datosytelefonia">PEDIDOS</a></li>
			</ul>
			</li>
       
          </ul>
        </li>
		<li><a class="MenuBarItemSubmenu">MUDANZAS</a>
          <ul>
            <li><a class="MenuBarItemSubmenu">Sucursales</a></li>
			<ul>
			<li><a href="index.php?sec=Consultas/mudanzas/resumen" >Resumen</a></li>
			 <li><a href="index.php?sec=Consultas/mudanzas/contratistas">Contratistas</a></li>
			 <!--
			
			<li><a href="index.php?sec=Consultas/ap_contratistas">RECLAMOS</a></li>
			<li><a href="index.php?sec=Consultas/mudanzas/obra">AVANCE DE OBRA</a></li>
			<li><a href="index.php?sec=Consultas/mudanzas/datosytelefonia">PEDIDOS</a></li>
			</ul>
			</li>
        
          </ul>
        </li>
		<li><a class="MenuBarItemSubmenu" >MIG. MPLS</a>
          <ul>
            
                <li><a href="index.php?sec=consultas/mig_mpls/telecom">TELECOM</a></li>
				<li><a href="index.php?sec=consultas/mig_mpls/telefonica">TELEFONICA</a></li>
            
           </ul>
        </li>
		<li><a class="MenuBarItemSubmenu" >MIG. TELEFONIA</a>
          <ul>
            
                <li><a href="index.php?sec=consultas/mig_telefonia/index">ESTADO</a></li>
				<!--<li><a href="index.php?sec=consultas/mig_mpls">TELEFONICA</a></li>
            
           </ul>
        </li>
		<!--<li><a class="MenuBarItemSubmenu">BUSCAR</a>
        <ul>
        <li><a href="">USUARIOS</a></li>
        <li><a href="">SUCURSAL</a></li>
        <li><a href="">TC</a></li>
        </ul>
        </li>
	
		
  </ul>-->
  
  
  
  </td></tr>
      
      <tr >
       <td  bgcolor="#FFFFFF" colspan="6">

          <?php

$sec=$_GET["sec"];

if (empty ($sec))
{
        include ("consultas/sucursales.php");
}
else
{
        if (file_exists($sec.".php"))
        include($sec.".php");
		        }
?>
       </td>
	   
      </tr>

         
      
</table>

<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
