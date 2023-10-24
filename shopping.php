<!DOCTYPE html>
<html>
<head>
   <title>ONLINE SHOPPING SYSTEM</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
   $name=$_POST['name'];
   $ph_no = $_POST['ph_no'];
   $items = $_POST['items'];
   $cart = $_POST['cart'];
   $payment= $_POST['payment'];
   $DOD=$_POST['DOD'];
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "shopping";
 $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `shopping details` (`name`, `ph_no`, `items`, `cart`, `payment`,`DOD`) VALUES ('$name', '$ph_no', '$items', '$cart',  '$payment',`DOD`);";

  $result = mysqli_query($con, $sql);

  if ($result)
 {
    echo "Data inserted successfully";

  } 
else
 {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/practice1/shopping.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>

  phone number:<br>
  <input type="text" id="ph_no" name="ph_no" ><br><br>

  items:<br>
  <input type="text" id="items" name="items" ><br><br>

  cart:<br>
  <input type="text" id="cart" name="cart" ><br><br>

  
  payment:<br>
  <input type="text" id="payment" name="payment" ><br><br>

  DOD:<br>
  <input type="text" id="DOD" name="DOJ" ><br><br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>
