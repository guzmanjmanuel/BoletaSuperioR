
<?php 
require_once 'conexion.php';
//session_start();
if(isset($_SESSION['usuario'])):
    $nombres =($_SESSION['usuario']['NOMBRES']);
    $apellidos =($_SESSION['usuario']['APELLIDOS']);
    $codigo=($_SESSION['usuario']['CODIGO']); 
  
    $sql ="SELECT DIAS,VALORDIAS,HORAS_EXTRAS,VIATICOS,ALIMENTACION,
    VACACIONES,BONIFICACION,SUELDOLIQUIDO FROM tblpago WHERE CODIGOEMPLEADO='$codigo'";
    $sqlDes="SELECT AFP,ISSS,RENTA,OTROSDESCUENTOS FROM tblpago WHERE CODIGOEMPLEADO='$codigo'";
    $sqlGlobal ="SELECT DISTINCT SUELDOLIQUIDO,MES,QUINCENA,FECHAPAGO FROM tblpago WHERE CODIGOEMPLEADO='$codigo'";
    
    
$ingresos=mysqli_query($conexion,$sql);
$descuentos=mysqli_query($conexion,$sqlDes);
$verIngresos=mysqli_fetch_row($ingresos);
$verDescuentos=mysqli_fetch_row($descuentos);
$global=mysqli_query($conexion,$sqlGlobal);

    ?>
 


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
    <!--Fontawesome CDN-->

	
	<!--Custom styles
	<link rel="stylesheet" type="text/css" href="../bootstrap/styles.css">-->
</head>
<body>
<!-- As a heading -->

<center><h5>SUPERIOR CLEANING SERVICES SA DE CV</h5></p> </center>
<center><h5>RESUMEN DE PAGO DE PLANILLA</h5></p>  
<strong>sdfsdf
<?$datos = mysqli_fetch_row($global);
echo "son".$datos[2];
?>

</strong> </center>

</hr>
<div class="card">
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
   <caption><label></label></caption>
	 	<tr>
     <td>
     <?php echo "EMPLEADO: ". $nombres. ' '.$apellidos  ?></br>
     </td> 
   
	 		<td>
       <?php
        while($verGlobal=mysqli_fetch_row($global))
      
  echo  "   FECHA DE PAGO:    ".$verGlobal[3];  

  ?>  
       </td>
       </tr>
          </table>
 
  
</br>

</div>
<h3>INGRESOS DURANTE LA PRIMERA QUINCENA DEL MES DE MAYO</h3>
<div class="card">
  <h3 class="card-header">
  <span class="badge badge-info">INGRESOS</span>
  </h3>
  <div class="card-body">
  
  <div class="table-responsive">
	 <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
   <caption><label></label></caption>
	 	<tr>
     <td>DIAS TRABAJADOS</td> 
   
	 		<td>SUELDO</td>
	 		<td>HORAS_EXTRAS</td>
	 		<td>VIATICOS</td>
	 		<td>ALIMENTACION</td>
	 		<td>VACACIONES</td>
	 	 	  

	 	</tr>

	 	 	<tr>
	 		<td><?php echo $verIngresos[0]; ?></td> 
      
	 		<td><?php echo " $". $verIngresos[1]; ?></td> 
	 		<td><?php echo " $". $verIngresos[2]; ?></td>
	 		<td><?php echo " $". $verIngresos[3]; ?></td>
	 		<td><?php echo " $". $verIngresos[4]; ?></td>
       <td><?php echo " $". $verIngresos[5]; ?></td>
	 		
	 	
       </tr>
		 </table>





  </div>
        </div>
 



      
    


 <div class="card">
  <h3 class="card-header">
  <span class="badge badge-warning">DESCUENTOS</span>
  </h3>
  <div class="card-body">

  <div class="table-responsive">
	 <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
   <caption><label></label></caption>
	 	<tr>
     <td>ISSS</td>
	 		<td>AFP</td>
	 		<td>RENTA</td>
       <td>OTROS</td>
	 	</tr>
    	 	<tr>
	 		<td><?php echo " $".$verDescuentos[0]; ?></td>
	 		<td><?php echo " $".$verDescuentos[1]; ?></td>
	 		<td><?php echo " $".$verDescuentos[2]; ?></td>
       <td><?php echo " $".$verDescuentos[3]; ?></td>		 	
       </tr>
       <tr>
       <td colspan="4"><strong>SUELDO LIQUIDO:<?php echo " $". $verIngresos[7]; ?> </strong></td>		 	
       </tr>
	 </table>


  </br>


  </div>
        </div>
                           

</body>
	</html>

  	

<?php endif; ?>