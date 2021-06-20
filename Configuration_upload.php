<?php
  
 
 $db_name = "id17092421_webapp";  
 $mysql_user = "id17092421_srujansagar";  
 $mysql_pass = "Hello@123sruj";  
 $server_name = "localhost";  
 $db = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
   
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
?>