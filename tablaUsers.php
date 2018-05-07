<?php 
    
 require_once "php_action/conexion.php";

 $conex=conectarse();
 
$result5 = mysqli_query($conex,"SELECT * FROM user ");
 
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

while ($row = mysqli_fetch_row($result5)){   
    echo "<tr >";  
    echo "<td  id=id_font3>$row[0]</td>";  
    echo "<td  id=id_font3>$row[1]</td>";  
    echo "<td  id=id_font3>$row[2]</td>"; 
    echo "<td  id=id_font3>$row[3]</td>";   
    echo "<td  id=id_font3>$row[4]</td>";
    echo "<td  id=id_font3>$row[5]</td>";

}   
    
/*   
while ($row = mysqli_fetch_row($result2)){   
    
    echo "<td  id=id_font3>$row[0]</td>";  
    echo "<td  id=id_font3>$row[1]</td>";  
    echo "<td  id=id_font3>$row[2]</td>"; 
    echo "<td  id=id_font3>$row[3]</td>";   
    echo "<td  id=id_font3>$row[4]</td>";  
    
  

while ($row = mysqli_fetch_row($result3)){  
     
    echo "<td  id=id_font3>$row[0]</td>";  
    echo "<td  id=id_font3>$row[1]</td>";       
        

while ($row = mysqli_fetch_row($result4)){   
    
    echo "<td  id=id_font3>$row[0]</td>";  
    echo "<td  id=id_font3>$row[1]</td>";  
    echo "<td  id=id_font3>$row[2]</td>";   
    echo "</tr>";  
    
}}}}*/
echo "</table>";  
 echo "</div>";

?> 