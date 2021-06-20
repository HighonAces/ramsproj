<?php

session_start();
error_reporting(E_ERROR);
require "connection.php";

$emmm = $_SESSION['email'];
echo "".$emmm;
?>
<center><h1>Your order is placed successfully</h1></center><br><br><br>

<center><form name="form1" method="post" action="logout-user.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</center>
<center><form name="form2" method="post" action="index.php">
  <label class="logoutLblPos">
  <input name="submit3" type="submit" id="submit2" value="Order new items">
  </label>
</form>
</center>

<?php  
 $db_name = "id17092421_webapp";  
 $mysql_user = "id17092421_srujansagar";  
 $mysql_pass = "Hello@123sruj";  
 $server_name = "localhost";  
 $connect = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
   
 $query ="SELECT * FROM orderstable where useremail='$emmm'";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>User Orders</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">WallPoster Orders</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>Orders</td>  
                                    <td>Total Price</td>  
                                    <td>Order Date</td>  
                                    
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["useremail"].'</td>  
                                    <td>'.$row["orders"].'</td>  
                                    <td>'.$row["totalprice"].'</td>  
                                    <td>'.$row["date"].'</td>  
                                      
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>