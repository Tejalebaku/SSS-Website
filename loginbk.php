 <?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Initialize the error message
$error_message = "";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Emailaddress = $_POST["Emailaddress"];
    $Password = $_POST["Password"];



    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "SSS";

    // Create connection
    $conn =  mysqli_connect($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $CheckUserQuery = "SELECT * FROM signup WHERE Emailaddress = '$Emailaddress' AND Password = '$Password'";

    $CheckUserQueryResults = mysqli_query($conn,$CheckUserQuery);

    if (mysqli_num_rows($CheckUserQueryResults) > 0) 
    {
        while($record = mysqli_fetch_assoc($CheckUserQueryResults)) 
        {
            $_SESSION["bioid"] = $record["id"];
            $_SESSION["logged_in"] = true;
        }

        header("Location: main.php");

    }else{
        $_SESSION["bioid"] = "Unknown";
    }

}
?>








