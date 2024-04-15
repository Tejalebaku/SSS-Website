<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'SSS';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/';

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_details = $_POST['service_details'];
    $category = $_POST['category'];
    
    $sub_service = $_POST['sub_service'];
    $experience = $_POST['experience'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $contact_way = $_POST['contact_way'];
    $location = $_POST['location'];

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Check if file is uploaded successfully
    if (move_uploaded_file($image_tmp, $uploadDirectory . $image_name)) {

        $image = file_get_contents($uploadDirectory . $image_name);

        $sql = "INSERT INTO addservice (image, image_name, service_details,sub_service, category, experience, price, description, name, email, phone_number, contact_way, location) VALUES (?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error in SQL query: " . $conn->error);
        }

        // Bind parameters with appropriate data types
        //$stmt->bind_param('ssssssssssss', $image, $image_name, $service_details, $category, $experience, $price, $description, $name, $email, $phone_number, $contact_way, $location);
        $stmt->bind_param('sssssssssssss', $image, $image_name,$sub_service, $service_details, $category, $experience, $price, $description, $name, $email, $phone_number, $contact_way, $location);


        if ($stmt->execute()) {
            // Move the uploaded file to the specified directory
            $uploadedFilePath = $uploadDirectory . $image_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);

            echo "uploaded";
            // header( "location: add.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading image.";
    }
}

$conn->close();
?>
