<!DOCTYPE html>
<html>

<head>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif; /* Set the default font-family to Inter */
            background-color: #f2f2f2;
        }

        .header {
            background-color: rgba(221, 154, 23, 1)
;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo img {
            max-width: 100px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li:last-child {
            margin-right: 0;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 16px;
        }

        .container {
            display: flex;
            margin: 20px;
        }

        .sidebar {
            background-color: #f2f2f2;
            width: 250px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .category-options {
            list-style-type: none;
            padding: 0;
        }

        .category-options li {
            margin-bottom: 10px;
        }

        .category-options a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            font-size: 16px;
            display: block;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .product-card {
            display: flex;
            border: 1px solid #ddd;
            background-color: #fff;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .image-container {
            max-width: 250px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .product-details {
            flex: 1;
            padding: 20px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #000000;
        }

        /* Search bar styling */
        .search-bar {
            display: flex;
            align-items: center;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 8px;
            width: 40%; /* Adjusted width */
        }

        .search-bar input {
            border: none;
            outline: none;
            width: 100%; /* Adjusted width */
            font-size: 16px;
            padding: 5px;
        }

        .search-bar button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px; /* Set the font size to 24px */
        }

        /* User and Cart */
        .user, .cart {
            display: flex;
            align-items: center;
            margin-left: 10px; /* Adjusted margin-left to increase gap */
        }

        .user a, .cart a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 16px;
            margin-left: 5px; /* Adjusted margin-left to increase gap */
        }
    </style>
</head>

<body>
<header class="header">
<div class="image-label" style="background-image: none;">Small Scale Service 
    </div>
    <nav class="navbar">
        <ul>
            <!-- Removed "Home," "Contact," "Products," and "About Us" links -->
        </ul>
    </nav>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><img src="search.png" alt="Search" style="width: 24px; height: 24px;"></button>
    </div>
    <div class="user">
        <a href="#"><img src="user.png" alt="User" style="width: 24px; height: 24px;"></a>
        <a href="#">Hello</a>
    </div>
    <div class="cart" style="margin-right:20px;">
        <a href="cart.php"><img src="cart.png" alt="Cart" style="width: 24px; height: 24px;"></a>
        <a href="cart.php">Cart</a>
    </div>
</header>

<div class="container">
<aside class="sidebar">
            <h1>Services</h1><br>
           
            <ul class="category-options">
                <li><a href="#">Home service</a></li>
                <li><a href="#">Electric service</a></li>
                <li><a href="#">Plumber service</a></li>
                <li><a href="#">Automobile service</a></li>
                <li><a href="#">Laptop technician</a></li>
            </ul><br>

        </aside>
        <main class="content">
            <div class="sort-dropdown">
                <label for="sort">Sort by:</label>
                <select id="sort" name="sort">
                    <option value="default">Relevance</option>
                    <option value="price-low-high">Price Low to High</option>
                    <option value="price-high-low">Price High to Low</option>
                    <option value="price-high-low">Latest</option>
                </select>
            </div>
            
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

                // Query to select all images from the table
                // Query to select all images from the table
$sql = "SELECT * FROM addservice where category='0'";
$result = $conn->query($sql);

// if ($result === false) {
//     die("Error in SQL query: " . $conn->error);
// }

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {               
        $image = $row['image'];
        $service_details = $row['service_details'];
        $price = $row['price'];
        $product_id =$row['id'];
        ?>
        <a href="info.php?id=<?php echo $product_id; ?>" >
        <?php
        echo '<div class="product-card">';
        echo '<div class="image-container">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image"/>';
        echo '</div>';
        echo '<div class="product-details">';
        echo '   <h2>' . $service_details . '</h2><br>';
        echo '    <p>₹' . $price . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No services found in the table with the category "Home Services".';
}           
                $conn->close();
                ?>          
                </a>  
            <!-- Add more product cards as needed -->
        </main>
</div>
</body>

</html>