<?php

session_start();


 if (!isset($_SESSION['user']))
{	
    header("Location: error.php");
    
}

else{	
 
	header("Location: wellcome.php");
	echo "Hola " . $_SESSION['user'];
}


?>