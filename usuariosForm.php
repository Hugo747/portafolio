<?php 

require_once "php_action/conexion.php";

$conexion=conectarse();



if ($conexion -> connect_errno) {
die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno() 
. ") " . $conexion -> mysqli_connect_error());
}

$alumnos="SELECT * FROM user order by id_user";

$queryAlumnos= $conexion->query($alumnos);

?>

<html>

<head>


<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 

<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" href="css/estilos.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">


		
<script src="jquery-3.2.1.js" type="text/javascript"></script>

<script src="script.js" type="text/javascript"></script>

<script src="funciones.js" type="text/javascript"></script>


</head>

<body link="#ffffcc" vlink="#ffffcc" alink="#ffffcc">

<header>
			<div class="alert alert-info">
			<h2>Insertar Registros a la BD con PHP y JQUERY</h2>
			</div>
</header>

<div id="tabla_u">

<table class="table">
	<tr class="info">
		<th>ID</th>
		<th>Usuario</th>
		<th>Pass</th>
		<th>mail</th>
		<th>Privilegio</th>
		<th>Fecha Registro</th>
    </tr>
<?php
		while($registroAlumno  = $queryAlumnos->fetch_array( MYSQLI_BOTH)) 
		{
	   echo '<tr>
		    <td>'.$registroAlumno['id_user'].'</td>
			<td>'.$registroAlumno['nom'].'</td>
			<td>'.$registroAlumno['pass'].'</td>
			<td>'.$registroAlumno['mail'].'</td>
			<td>'.$registroAlumno['priv'].'</td>
			<td>'.$registroAlumno['log'].'</td>
			</tr>';
		}
?>

</table>
</div>
<div id=id_font4>

 <p>INGRESO DE USUARIOS </p>
 
<form  method="post"  >

<input type="text" required name="nom" id="nom" placeholder="Nombre de Usuario" /><br><br>
<input type="text" required name="pass" id="pass" placeholder="Contraseña" /><br><br>
<input type="text" required name="mail" id="mail" placeholder="mail" /><br><br>

<select required name="privilegio" id="priv" placeholder="Seleccione">

  <option value=""></option>

 <option value="1">admin</option>
  <option value="0">user</option>
</select>

 <p> <input type="submit" name="insertar" value="Agregar Usuario" onclick="funcion1()" />  </p> 
 

</form>

<div id="mostrardatos">

</div>
 
</div>
</body>

</html>
