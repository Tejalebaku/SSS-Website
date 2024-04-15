<?php
include "includes/config.php";

$product_id = isset($_GET["id"]) ? $_GET["id"] : null;
$GetProductDetails = "SELECT * FROM addservice WHERE product_id = '$id'";
$ProductImages = array();
$Result = mysqli_query($conn,$GetProductDetails);

if (mysqli_num_rows($Result) > 0) {
    while($records = mysqli_fetch_assoc($Result)) 
    {$ProductName = $records["service_details"]; 
        $Category = $records["category"]; 
        $Experience = $records["experience"];  
        $price = $records["price"];
        $description = $records["description"];
        $ProductImageLink = $records["image_name"];  
        $ProductImages = explode(",", $ProductImageLink);
        $name = $records["name"];
        $email = $records["email"];
        $phone_number = $records["phone_number"];
        $contact_way = $records["contact_way"];
        $location = $records["location"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f2f2f2;
        }

        .header {
            display: flex;
            align-items: center;
            background-color: rgba(69, 182, 254, 0.68); /* Amazon's header background color */
            color: #FFFFFF;
            padding: 10px 20px;
        }

        .header-logo {
            flex: 1;
        }
        .header-logo img {
            max-width: 120px; /* Reduce the logo size as needed */
        }

        .header-search {
            width: 700px; /* Fixed width for the search bar */
            display: flex;
            align-items: center;
            background-color: #FFFFFF; /* Change the search bar's background color */
            border: 1px solid #3F4D5E; /* Amazon's search bar border color */
            border-radius: 30px; /* Amazon's search bar border radius */
            padding: 8px;
        }

        .header-search input {
            border: none;
            outline: none;
            background-color: #FF9900;
            width: 100%;
            font-size: 16px;
            padding: 5px;
            background: none; /* Make the input background transparent */
            color: #000000; /* Text color in the search bar */
        }

        .header-search button {
            background-color: #FF9900; /* Amazon's search button color */
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 30px;
            margin-left: 10px; /* Add some spacing between input and button */
        }

        .header-user-cart {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .header-user-cart a {
            text-decoration: none;
            color: #FFFFFF;
            font-weight: 600;
            font-size: 16px;
            margin-left: 30px; /* Add some spacing between user, cart, and text */
        }

        .product-page {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .image-container {
            max-width: 60%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .scrolling-container {
            display: flex;
            overflow-x: scroll;
        }

        .scrolling-container img {
            max-width: 100%; /* Adjust the max-width as needed */
            height: auto;
            margin-right: 5px;
        }
        .image-container {
    width: 500px; /* Set the desired width */
    height: 500px; /* Set the desired height */
    /* ... (other styles) */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 30px; 
    margin-top: 30px;
    border-radius: 20px;
}

        .product-details-container {
            width: 600px; /* Set the desired width */
            height: 900px;
            padding: 20px;
            margin-right: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        .padding-box {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #buy-button, #chat-button, #call-button {
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .buy-button-container {
    text-align: right;
}
        

        #buy-button:hover, #chat-button:hover, #call-button:hover {
            background-color: #0056b3;
        }

        .carousel-inner img {
      width: 100%;
      height: 100%;
  }

#custCarousel .carousel-indicators {
    position: static;
    margin-top:20px;
}

#custCarousel .carousel-indicators > li {
  width:100px;
}

 #custCarousel .carousel-indicators li img {
    display: block;
    opacity: 0.5;
 }

  #custCarousel .carousel-indicators li.active img {
    opacity: 1;
  }

  #custCarousel .carousel-indicators li:hover img {
    opacity: 0.75;
  }

  .carousel-item img{

    width:80%;
  }
  /* Style for the Add to Cart button */
#add-to-cart-button {
    background-color: #00cc00; /* Change the color as needed */
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
}

#add-to-cart-button:hover {
    background-color: #009900; /* Change the color on hover as needed */
}

/* Style for the Buy button (No changes) */
#buy-button {
    background-color: #000000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
}

#buy-button:hover {
    background-color: #0056b3;
}

.button-container {
    text-align: right;
}

.product-details-container {
    width: 600px;
    height: 900px;
    padding: 20px;
    margin-right: 30px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
}

    </style>
</head>
<body>
<header class="header">
    <div class="header-logo">
        <img src="logo.png" alt="Swapseeker Logo">
    </div>
    <div class="header-search">
        <input type="text" placeholder="Search...">
        <button><img src="search.png" alt="Search" style="width: 24px; height: 24px;"></button>
    </div>
    <div class="header-user-cart">
        <a href="#"><img src="user.png" alt="User" style="width: 24px; height: 24px;"> Hello</a>
        <a href="cart.php"><img src="cart.png" alt="Cart" style="width: 24px; height: 24px;"> Cart</a>
    </div>
</header>


    <div class="product-page">
        <div class="image-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                            <!-- slides -->
                            <div class="carousel-inner">

                                <?php

                                    $DisplayIndex = 0;

                                    foreach ($ProductImages as $Images) 
                                    {
                                        if ($DisplayIndex < sizeof($ProductImages))
                                        {
                                            if($DisplayIndex == 0){
                                                echo "<div class='carousel-item active'><img src='$Images'></div>";

                                            }else{
                                                echo "<div class='carousel-item'><img src='$Images'></div>";

                                            }
                                        }
                                        
                                        ++$DisplayIndex;
                                    }

                                ?>
                                
                            </div>

                            <!-- Left right -->
                            <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                            <!-- Thumbnails -->
                            <ol class="carousel-indicators list-inline">
                                <?php
                                    $ThumbIndex = 0;

                                    foreach ($ProductImages as $Images) 
                                    {
                                        if ($ThumbIndex < sizeof($ProductImages))
                                        {

                                            if($ThumbIndex == 0){
                                                echo "<li class='list-inline-item active'>
                                                <a id='carousel-selector-$ThumbIndex' class='selected' data-slide-to='$ThumbIndex' data-target='#custCarousel'>
                                                <img src='$Images' class='img-fluid'>
                                                </a></li>";
                                            }else{
                                                echo "<li class='list-inline-item'>
                                                <a id='carousel-selector-$ThumbIndex' data-slide-to='$ThumbIndex' data-target='#custCarousel'>
                                                <img src='$Images' class='img-fluid'>
                                                </a></li>";
                                            }

                                        }
                                        
                                        ++$ThumbIndex;
                                    }
                                ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-container">
            <div class="padding-box">
                <h1><?php echo $service_details; ?></h1>
                <h1><?php echo $price; ?></h1>
    <p>location: <?php echo $location; ?></p>
    
    <div class="button-container">
        <a href="javascript:void(0)" class="add-to-cart" data-id="1">
            <button id="add-to-cart-button">Add to Cart</button>
        </a>
        <a href="javascript:void(0)" class="buy_now" data-img="//www.example.com/product.jpg" data-amount="<?php echo $price; ?>" data-id="1">
            <button id="buy-button">Buy</button>
        </a>
    </div>
</div>
<div class="padding-box">
    <h2>Description</h2>
    <p><?php echo $description; ?></p>
</div>
            <div class="padding-box">
                <h2>Contact  Details</h2>
                <p><b>Owner:</b> <?php echo $name; ?></p>
                <p><b>email:</b> <?php echo $email; ?></p>
                <p><b>Phone_number:</b> <?php echo $phone_number; ?></p>
                <p><b>Preferable contact_way:</b> <?php echo $contact_way; ?></p>
            </div>
            <div class="padding-box">
                <h2>Make an Offer</h2><br>
                <button id="chat-button">Chat</button>
                <button id="call-button">Call</button>
            </div>
        </div>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $('body').on('click', '.buy_now', function(e) {
        var prodimg = $(this).attr("data-img");
        var totalAmount = $(this).attr("data-amount");
        var product_id = $(this).attr("data-id");
        var options = {
            "key": "YOUR_RAZORPAY_API_KEY", // Replace with your actual Razorpay API key
            "amount": (totalAmount * 100),
            "name": "Your Company Name", // Replace with your company name
            "description": "Payment",
            "handler": function(response) {
                // Handle the response after the payment is successful
                $.ajax({
                    url: 'payment-process.php', // Replace with the URL for processing the payment
                    type: 'post',
                    dataType: 'json',
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        totalAmount: totalAmount,
                        product_id: product_id
                    },
                    success: function(msg) {
                        window.location.href = 'payment-success.php'; // Redirect to the success page
                    }
                });
            },
            "theme": {
                "color": "#528FF0"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>

















