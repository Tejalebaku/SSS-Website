<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SSS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Mobilenumber = $_POST['Mobilenumber'];
$Emailaddress = $_POST['Emailaddress'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];

$stmt = $conn->prepare("INSERT INTO signup (Firstname, Lastname, Mobilenumber, Emailaddress, Password, Confirmpassword) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $Firstname, $Lastname, $Mobilenumber, $Emailaddress, $Password, $Confirmpassword);

if ($stmt->execute()) {
  // Registration successful, redirect to main.php
  header("Location: login.php");
  exit; // Ensure that the script terminates after the redirection
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
