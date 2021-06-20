<?php  
 $db_name = "id17092421_webapp";  
 $mysql_user = "id17092421_srujansagar";  
 $mysql_pass = "Hello@123sruj";  
 $server_name = "localhost";  
 $connect = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
   
 $query ="SELECT * FROM orderstable ORDER BY ID DESC";  
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
           <div align="right">
    
    <a href="insertimg.php" type="button" name="add" id="add" class="btn btn-success">Add new Items</a>
   </div> 
                <h3 align="center">Wall Poster Orders</h3>  
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