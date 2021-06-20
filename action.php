<?php
//action.php
if(isset($_POST["action"]))
{
 
 $db_name = "id17092421_webapp";  
 $mysql_user = "id17092421_srujansagar";  
 $mysql_pass = "Hello@123sruj";  
 $server_name = "localhost";  
 
 $connect = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
/* $connect = mysqli_connect("localhost", "root", "", "testing");
 */
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM imagestable ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="images/'.$row['imagename'].'" height="60" width="75" class="img-thumbnail" />
      
      
      
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
$aprice = $_POST['aprice'];
$nm = $_POST['nm'];
  $Get_image_name = $_FILES['image']['name'];
  	$code = rand(999999, 111111);
  	// image Path
  	$image_Path = "images/".basename($Get_image_name);

  	$query = "INSERT INTO imagestable (imagename, name, price, code) VALUES ('$Get_image_name', '$nm', '$aprice', '$code')";
//start
 $ServerURL = "https://wallposterstore.000webhostapp.com/$image_Path";
$queryk = "INSERT INTO imagestable (imagename, name, price) VALUES ('$ServerURL', 'USA', '456', '789')";

// end 	
	// Run SQL query
  	mysqli_query($connect, $query);
//extra
//mysqli_query($connect, $queryk);
//extra
  if(move_uploaded_file($_FILES['image']['tmp_name'], $image_Path))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
     $aprice = $_POST['aprice'];
$nm = $_POST['nm'];
      $Get_image_name = $_FILES['image']['name'];
  	
  	// image Path
  	$image_Path = "images/".basename($Get_image_name);

  
  	$query = "UPDATE imagestable SET imagename = '$Get_image_name' WHERE id = '".$_POST["image_id"]."'";
	$queryn = "UPDATE imagestable SET name = '$nm' WHERE id = '".$_POST["image_id"]."'";
	$queryp = "UPDATE imagestable SET price = '$aprice' WHERE id = '".$_POST["image_id"]."'";
	// Run SQL query
  	mysqli_query($connect, $query);mysqli_query($connect, $queryp);mysqli_query($connect, $queryn);
  if(move_uploaded_file($_FILES['image']['tmp_name'], $image_Path))
  {
   echo 'Image Inserted into Database';
  }
  /*$query = "UPDATE tbl_images SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Updated into Database';
  }*/
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM imagestable WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>