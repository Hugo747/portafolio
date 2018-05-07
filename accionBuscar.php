

<?php

 require_once "php_action/conexion.php";

$conex=conectarse();

session_start();
//session_destroy()

//header("Location: index.html");



 if (!isset($_SESSION['user']))
{	
    header("Location: error99.html");
    
}

?>

<!DOCTYPE html><html><head>

<title>Portafolio web</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body background="img/background.jpg">

<?php
include_once 'includes/nav.php'; 
?>

<br><br><br><br><br>

	<div class="container">
		
		<div class="row vertical">
		
			<div style="with:100%;">
			
				<div class="panel panel-info">
				
				<div align="center">
				
				<br><br><br>
				
				Bienvenido : <?php echo " " . $_SESSION['user']  ?>
				<br>
					<br>








 <?php 
 
   
 require_once  "php_action/conexion.php";

 $conex=conectarse();
 
 $sql = "SELECT from user where nom='" .$_POST['nom']."' ";
         
 $ing = mysqli_query($conex,$sql);
 
 echo "RESUTADOS\n\n";
 
 ///////////////////////////////////////////
 
	
$result = mysqli_query($conex,"SELECT * FROM user  WHERE nom like '" .$_POST['nom']. "%'");

echo "Datos Encontrados";

echo "<div class='table-responsive'>";
echo "<h1>USUARIOS</h1><br><br>";

echo "<table  class='table table-hover table-bordered' >";  
echo "<tr>";  

 echo "<th id=id_font3> ID </th>"; 
echo "<th id=id_font3> Nombre </th>";  
echo "<th id=id_font3> Contraseña</th>"; 
echo "<th id=id_font3> Correo</th>"; 
echo "<th id=id_font3> privilegio</th>"; 
echo "<th id=id_font3> Fecha de Registro</th>"; 
echo "</tr>";  

while ($row = mysqli_fetch_row($result)){   
    echo "<tr >";  
    echo "<td  id=id_font3>$row[0]</td>";  
    echo "<td  id=id_font3>$row[1]</td>";  
    echo "<td  id=id_font3>$row[2]</td>"; 
    echo "<td  id=id_font3>$row[3]</td>";   
    echo "<td  id=id_font3>$row[4]</td>";
    echo "<td  id=id_font3>$row[5]</td>";

}   
    

echo "</table>";  
 echo "</div>";
 


 ?>








						<br>
				<br>
				
					<a href="buscar.php"><button type="submit"  class="btn btn-default" ><i class="glyphicon glyphicon-log-out" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ></i> Buscar Otro</button></a>
				     
				</div>
				
					<div class="panel-body" >
									
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>
<?php require_once 'includes/footer.php'; ?>






	