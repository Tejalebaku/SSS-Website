<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SSS";
$message = "Register successful";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from POST
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Mobilenumber = $_POST['Mobilenumber'];
$Emailaddress = $_POST['Emailaddress'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];

// Prepare statement
$sql = $conn->prepare("INSERT INTO signup (Firstname, Lastname, Mobilenumber, Emailaddress, Password, Confirmpassword) VALUES (?, ?, ?, ?, ?, ?)");

// Bind parameters
$sql->bind_param("ssssss", $Firstname, $Lastname, $Mobilenumber, $Emailaddress, $Password, $Confirmpassword);

// Execute query
if ($sql->execute()) {
    echo "<script type='text/javascript'>alert('$message');window.location.href='nlogin.php';</script>";
} else {
    echo "Error: " . $sql->error;
}

// Close statement
$sql->close();

// Close connection
$conn->close();
?>
