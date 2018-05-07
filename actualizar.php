

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














<div id=id_font>
<p>DATOS PERSONALES: </p>
<form action="php_action/accionActualizar.php" method="post"  >


	<br>Seleccione Usuario a Editar: 
<select name="select1">
 
 <?php
           $mysqli = new mysqli('localhost', 'root', '', 'proyecto3');
          $query = $mysqli -> query ("SELECT * FROM user");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nom].'">'.$valores[nom].'</option>';
          }
 ?>

</select>
<br><br>
<input type="text" name="nom" placeholder="Nombre" /><br>
<input type="text" name="pass" placeholder="Password" /><br>
 <input type="text" name="mail" placeholder="Correo" /> 
 
<br><br>
 <label>Privilegio:Seleccione 1:   </label>  <select name="priv"  placeholder="SELECCIONE 1">
  
 <option value="0">user</option>
  <option value="1">admin</option>
  
</select>




 
 <p><input type="submit" value="Actualizar" /></p> 
 

</form>
<div id=id_font4>
  
 <?php
include 'tablaUsers.php';
?>

</div></div>
















				<br>
				
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

