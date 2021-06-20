<?php
session_start();
require_once 'config.php';
//echo "".$_SESSION['email'];
$userem = $_SESSION['email'];
if($_SESSION['email']==null)
{
    echo"<script>alert('Please login to proceed...');window.location.href='login.php';</script>";
    header('location:login.php');
    exit();
}
  $finn="";
            $fb2="";
            $namesofitems = array();
            $interm= array();$sepp=":";
            $tot=0;
// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM imagestable WHERE id=" . $pid;
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['code'] => [
                            'name' => $product['name'],
                            'code' => $product['code'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'imagename' => $product['imagename']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['code'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['code'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['code'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
        case 'checkout':
             //session_start();
        ?>        <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
            $finn="";
            $namesofitems = array();
            $interm= array();$sepp=":"
        ?>
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Code</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>

            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    /*start*/
                    array_push($interm,"Name:".$item['name'],"Quantity:".$item['quantity'],"price of individual item: ".$item['price'],"quantity_total_price: ".$item_price,"||");
                    array_push($namesofitems,$item['name'])
                    /*end*/
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="images/<?= $item['imagename']; ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                            <?= $item['name'] ?>
                        </td>
                        <td class="text-left"><?= $item['name'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">$<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">$<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="index.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                    
                }
                
                $finn=implode(",",$interm);
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $finn ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
    </div>
   <?php         break;
   case 'confirm':
       
       $date = date("Y-m-d");
       $day = date("l");
       $ord= $_GET['code'];
       $tprice = $_GET['code1'];
       $totaldate = $date.$day;
  	$query = "INSERT INTO orderstable (useremail, orders, totalprice, date) VALUES ('$userem', '$ord', '$tprice', '$date')";
  	$result = mysqli_query($con, $query);
     if($result){
    // echo 'Success';
     unset($_SESSION['cart_item']);
    // echo "<h1>Order Placed Successfully</h1>";
    
     header('location:new.php');
     exit();
         
     }
     else{
     //echo 'failure'.$con->error;
     echo "<script>
alert('Something went wrong, please try again...');
</script>";
     }
    break;
            
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cartstyles.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.logoutLblPos{
    background-color: coral;
   position:fixed;
   right:10px;
   top:5px;
}
</style>
</head>
<body>
<header>
   <center> <h1>Welcome to WallPoster Store</h1> </center>
      <form align="right" name="form1" method="post" action="logout-user.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>
</header>
<div class="container py-5">
    <div class="d-flex justify-content-between mb-3">
        <h3>Cart</h3>
    <!--    <a class="btn btn-danger" href="index.php?action=checkout">Checkout</a>-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Checkout</button>
        <a class="btn btn-danger btn-lg" href="index.php?action=empty">Remove all from cart</a>
    </div>
    <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Code</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>

            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="images/<?= $item['imagename']; ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                            <?= $item['name'] ?>
                        </td>
                        <td class="text-left"><?= $item['name'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">$<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">$<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="index.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
    </div>


    <!-- first done this -->
    <div class="row">
        <div class="col-md-12">
           <center> <h1>Products List</h1></center>
            <div class="d-flex">
                <div class="card-deck">
                    <?php
                    $query = "SELECT * FROM imagestable";
                    $product = mysqli_query($con, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="index.php?action=add&pid=<?= $row['id']; ?>" method="post">
                                <div class="card" style="width:18rem">
                                    <img class="img-thumbnail"
                                         src="images/<?= $row['imagename']; ?>"
                                         alt="<?= $row['name']; ?>"
                                         >
                                    <div class="card-header d-flex justify-content-between">
                                        <span><?= $row['name']; ?></span>
                                        <span>$<?= number_format($row['price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <input type="text" name="quantity" value="1" size="2">
                                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">
                                    </div>
                                </div>
                            </form>
                        <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<!--  <h2>Modal Example</h2>-->
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                <div class="row">
        <?php
             $total_quantity = 0;
            $total_price = 0;
            // $finn="";
            // $fb2="";
            // $namesofitems = array();
            // $interm= array();$sepp=":"
        ?>
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Wallposter</th>
                <th class="text-left"></th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>

            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){?>
                
                <?php
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    /*start*/
                    array_push($interm,"Name:".$item['name'],"Quantity:".$item['quantity'],"price of individual item: ".$item['price'],"quantity_total_price: ".$item_price,"||");
                    array_push($namesofitems,$item['name'])
                    /*end*/
                    ?>
                    <br>
                    <tr>
                        <td class="text-left">
                            <img src="images/<?= $item['imagename']; ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                            <?= $item['name'] ?>
                        </td>
                        <td class="text-left"></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">$<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">$<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="index.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                    $tot += $total_price;
                }
                
                $finn=implode(",",$interm);
                $fb2 = substr($finn,0,-3);
                
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total Price:</td>
                    <!--<td align="right"><strong><?= $fb2 ?></strong></td>
                    --><td></td>
                    <td align="right"><strong>$<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>
<center><td class="text-right"><a class="btn btn-success" href="index.php?action=confirm&code=<?= $fb2; ?>&code1=<?= $total_price; ?>">Confirm my order</td></a></center>
            <?php }

                ?>
                
            </tbody>
        </table>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  


</body>
</html>

