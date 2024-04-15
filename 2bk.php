<?php
session_start();
// Initialize the error message
$error_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Email = $_POST["Email"];
    $password = $_POST["password"];

	  $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    // Change DB name 
    $dbname = "snaplearn"; 
	
    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from signup where Email = '$Email' AND password = '$password'";  

    // Execute the query
    $result = $conn->query($sql);

    // Check if a user with the given credentials exists
    if ($result->num_rows == 1) {
        // User is authenticated, set session variable to indicate login
        $_SESSION["logged_in"] = true;
        $userInfo = $result->fetch_assoc();
        $_SESSION["bioid"] = $userInfo["bioid"];
        // Redirect to a protected page (e.g., home.php)
        echo "<script>alert('Login Successfully.'); window.location.href = 'home.php';</script>";
        exit();
    } else {
        // Invalid credentials, set the error message
        $_SESSION["bioid"] = "Unknown";
        $error_message = "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>