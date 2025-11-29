<?php      
    $host = "localhost";  
    $user = "u765974444_vsps";  
    $password = ''Vsps@123";  
    $db_name = "u765974444_vspstpoint";  
      
   // Create connection
$conn = new mysqli($host, $user, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>  
