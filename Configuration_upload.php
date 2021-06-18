<?php
  $db_name = "id8600993_webapp";  
 $mysql_user = "id8600993_sriram";  
 $mysql_pass = "sriram";  
 $server_name = "localhost";  
 $db = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
   
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
?>