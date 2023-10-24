<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms get</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $location = $_POST['location'];
    $destination = $_POST['destination'];
    
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "dest";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  if (!$con) {
      die("Sorry, we failed to connect: " . mysqli_connect_error());
  } else {
      echo "Connection was successful";
  }

 
  $sql = "INSERT INTO `details` (`location`, `destination`) VALUES ('$location', '$destination');";


  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";

  } else {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/dest1/dest1.php" method="post">

<center><h1><Hello world></h1></center>
<br><br>  Location:
  <input type="text" id="location" name="location" ><br><br>


Destination:
  <input type="text" id="destination" name="destination" ><br><br>

  

  <input type="submit" value="Insert">


</form> 
</body>
</html>