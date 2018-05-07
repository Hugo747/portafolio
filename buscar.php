

<?php

require "php_action/conexion.php";

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
				<br><br><br>











<form id=id_font action="accionBuscar.php" method="post">



 <p>Ingrese Nombre a Buscar : <input type="text" name="nom" /></p> 
 
 
 <p><input type="submit" value="Buscar" /></p>  
 
 
</form>











				
				<br>
				
					<a href="session_destroy.php"><button type="submit"  class="btn btn-default" ><i class="glyphicon glyphicon-log-out" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ></i> CERRAR SESION</button></a>
				     
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






	