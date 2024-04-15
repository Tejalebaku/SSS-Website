<?php
session_start();
// Initialize the error message
$error_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Emailaddress = $_POST["Emailaddress"];
    $Password = $_POST["Password"];
	$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    // Change DB name 
    $dbname = "SSS"; 
	
    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $CheckUserQuery = "SELECT * FROM signup WHERE Emailaddress = '$Emailaddress' AND Password = '$Password'";
    // Execute the query
    $result = $conn->query($CheckUserQuery);

    // Check if a user with the given credentials exists
    if ($result->num_rows == 1) {
        // User is authenticated, set session variable to indicate login
        $_SESSION["logged_in"] = true;
        $userInfo = $result->fetch_assoc();
        $_SESSION["id"] = $userInfo["id"];
        $_SESSION["fullname"] = $userInfo["fullname"];
        // Redirect to a protected page (e.g., home.php)
        echo "<script>alert; window.location.href = 'main.php';</script>";
        exit();
    } else {
        // Invalid credentials, set the error message
        $_SESSION["bioid"] = "Unknown";
        echo "<script>alert; window.location.href = 'nlogin.php';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>