<?php 

require "php_action/conexion.php";

$conexion=conectarse();

 $sql5 = "INSERT INTO user (nom,pass,mail,priv) VALUES ('" .$_POST['nom']."', '" .$_POST['pass']. "' , '" .$_POST['mail']. "' , '" .$_POST['priv']. "') ";
      
		
 mysqli_query($conexion,$sql5);
 
 //echo "DATOS INGRESADOS CON EXITO!!\n Presione Enter para continuar";

$alumnos="SELECT * user usuarios order by id_user";

$queryAlumnos= $conexion->query($alumnos);
echo '<table class="table">
	<tr class="info">
		<th>ID</th>
		<th>Usuario</th>
		<th>Pass</th>
		<th>mail</th>
		<th>Privilegio</th>
		<th>Fecha Registro</th>
    </tr>';
while($registroAlumno  = $queryAlumnos->fetch_array( MYSQLI_BOTH)) 
{
   echo '<tr>
		   	<td>'.$registroAlumno['id_user'].'</td>
			<td>'.$registroAlumno['user'].'</td>
			<td>'.$registroAlumno['pass'].'</td>
			<td>'.$registroAlumno['mail'].'</td>
			<td>'.$registroAlumno['priv'].'</td>
			<td>'.$registroAlumno['log'].'</td>
			</tr>';
}
echo '</table>';
 
///////////Muestra base de datos

 //$result = mysqli_query($conex,"SELECT * FROM `dat_per`");  
 ?>
 