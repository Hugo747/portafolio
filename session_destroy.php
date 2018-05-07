<?php
session_start();
session_destroy();
header("Location: index.php");
    
if (!isset($_SESSION['user']))
{	
    header("Location: error.php");
    
}
  

?>