<!DOCTYPE html>
<html lang="en">
<head>
    <title>VACANCIES FOR JOBS</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['name'];
    $ph_no = $_POST['ph_no'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $grad_year= $_POST['grad_year'];
    $payment= $_POST['payment'];
    $role=$_POST['role'];
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "practice1";

  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `shopping details` (`name`, `ph_no`, `DOB`, `email`, `grad_year`,`payment`,`role`) VALUES ('$name', '$ph_no', '$DOB', '$email', '$grad_year', '$payment',`role`);";

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
<form action="/practice/details.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>

  phone number:<br>
  <input type="text" id="ph_no" name="ph_no" ><br><br>

  DOB:<br>
  <input type="text" id="DOB" name="DOB" ><br><br>

  email:<br>
  <input type="text" id="email" name="email" ><br><br>


  graduation year:<br>
  <input type="text" id="grad_year" name="grad_year" ><br><br>

 
  payment:<br>
  <input type="text" id="payment" name="payment" ><br><br>

  role:<br>
  <input type="text" id="role" name="role" ><br><br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>