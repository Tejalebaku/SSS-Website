<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "snaplearn"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

     $Email = $_POST['Email'];

     $password = $_POST['password'];

     $confirmpassword = $_POST['confirmpassword'];

     $sql = "INSERT INTO signup(Email, password,confirmpassword) VALUES('$Email','$password','$confirmpassword')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>