

<?php
//Este php es el que muestra las estaditicas generales de los departamento y por intervalos de fecha
require_once("conexion.php");//Manda a llamar el archivo de conexion de la base de datos
 $conexion = conectar();//variable a la cual retorna la cadena de conexion de la base de datos
$VarExport=0;
$VarExportAgente=0;
$VarExport =  $_COOKIE["VarCookieDestino"];


?>


<html>
<body>

<div class="MarcoPrincipal">
<div class="MarcoEncabezado">

<?php
   require_once("Utilidad.php");
?>

<title>Detalles </title> <!--Titulo del archivo de indextab.php-->

  <div class="subTituloEstadi0"><!--clases para ser utilizada en el archivo de css-->
         <H1><legend>Tickets del Empleado <?php echo $VarExport; ?> Emitidos por  Departamentos de Origen </legend></H1><!--Titulo que se muestra en la presentacion de la pagina web-->
  </div>
    </br></br>


<div class="AyudaIndividualDetalle">

 <form name="atrass" method="POST"  action="EstadisticasEmpl.php">
        
       
         <p>Atras  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style='background:url("img/atrasimg.png");' type="submit" name="BTNatras" id="BTNatras" value=" &nbsp;" onclick="self.location.href ='EstadisticasEmpl.php'" onkeypress="self.location.href ='EstadisticasEmpl.php'" Title="ir a resultados anteriores"/></P>  
        
        
  </form>



</div>


<!--<div class="TablaDetalleAgentes">-->

<?php



require_once("ConIndividualEmpleadoOrigen.php");
?>
<!--</div>-->

</div>
</div>
 </body>
  
</html>