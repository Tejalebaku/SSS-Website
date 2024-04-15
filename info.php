
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <?php
    include "includes/header.php"; 
    
    // $service_details=$_SESSION['service_details'];
    // $product_id = isset($_GET["id"]) ? $_GET["id"] : null;WHERE id = '$product_id'"
    $sql = "SELECT * FROM addservice WHERE id = ".$_GET['id'];
    // -- $ProductImages = array();$
    $Result =mysqli_query($conn, $sql);


    if ($Result->num_rows > 0) {
        while($row = $Result->fetch_assoc()) 
        {
            $service_details = $row["service_details"];  
            $ProductImageLink = $row["image_name"];  
            $ProductImages = explode(",", $ProductImageLink);
            $price = $row["price"];
            $description = $row["description"];
            $name = $row["name"];
            $email = $row["email"];
            $phone_number = $row["phone_number"];
            $contact_way = $row["contact_way"];
            $location = $row["location"];
        }
    }
    else{
        echo"nothing";
    }
    ?>
    
    <style>
        body {
            background-color: #ffffff;
        }

        .product-page {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #ffffff;
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
            width: 500px;
            height: 550px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-left: 30px;
            margin-top: 30px;
            border-radius: 20px;
        }
        a {
    color: white;
    text-decoration: none;
    background-color: transparent;
}
a:hover{
    color: white;
    text-decoration: none;
    background-color: transparent;
}
        .scrolling-container {
            display: flex;
            overflow-x: scroll;
        }

        .scrolling-container img {
            max-width: 100%;
            height: auto;
            margin-right: 5px;
        }

        .product-details-container {
            width: 700px;
            height: auto;
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
            background-color: #45b6fedb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 0px;
        }

        .buy-button-container {
            text-align: right;
        }

        #buy-button:hover, #chat-button:hover, #call-button:hover {
            background-color: #45b6fedb;
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
            width: 100px;
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

        .carousel-item img {
            width: 80%;
        }

        #add-to-cart-button {
            background-color: #45b6fedb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 0px;
        }

        #add-to-cart-button:hover {
            background-color: #009900;
        }

        #buy-button {
            background-color: #45b6fedb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 0px;
        }

        #buy-button:hover {
            background-color: #0056b3;
        }

        .button-container {
            text-align: right;
        }

        .product-details-container h1 {
            font-size: 24px;
        }

        .product-details-container h2 {
            font-size: 18px;
        }

        /* Modal styles */
        #inquiryModal {
            display: none;
            background: rgba(0, 0, 0, 0.5);
        }

        .modal-dialog {
            margin-top: 10%;
        }
        
    </style>
</head>
<body>

<div class="product-page" style="margin-top:100px">
    <div class="image-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <div class="carousel-inner">
                            <?php
                            $DisplayIndex = 0;
                            foreach ($ProductImages as $Images) {
                                if ($DisplayIndex == 0) {
                                    echo "<div class='carousel-item active'><img src='uploads/$Images'></div>";
                                } else {
                                    echo "<div class='carousel-item'><img src='uploads/$Images'></div>";
                                }
                                ++$DisplayIndex;
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-details-container">
        <div class="padding-box">
            <?php 
//&product_id='.$product_id.'
            echo'<h1>'.$service_details.'</h1>
            <p>Price: ₹'.$price.'/-</p>
            <p>Location: '.$location.'</p>
            <div class="button-container">
                <a href="cart.php?action=add       & product_name='.urlencode($service_details).'; &product_price='.$price.'" class="add-to-cart" data-id="1">
                <a href="javascript:void(0)" class=" btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="'.$price.'" data-id="1" style="    text-decoration: none;margin-top:-30px;">Pay now</a> 
                



             </a>
            </div>
        </div>
        <div class="padding-box">
            <h2>Description</h2>
            <p>'.$description.'</p>
        </div>
        <div class="padding-box">
            <h2>Contact  Details</h2>
            <p><b>Owner:</b> '.$name .'</p>
            <p><b>Email:</b> '.$email.'</p>
            <p><b>phone_number:</b> '.$phone_number.'</p>
            <p><b>Preferable contact way:</b> '.$contact_way.'</p>
        </div>';
        ?>
        <div class="padding-box">
            <h2>Make an Offer</h2><br>
            <button class=" btn-sm btn-primary  " data-target=""><a href='../ChatApp/login.php'>Chat</a></button>
           
            <!-- <a href="contact.php"><button class="btn btn-primary open-inquiry-modal" data-target="#inquiryModal">Call</a></button> -->
        </div>
    </div>
</div>
                
                 



<!-- Inquiry Modal -->
<div class="modal" id="inquiryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Inquiry</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="inquiryForm">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">phone_number:</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "SMALL SCALE SERVICE",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'proccess_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
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
<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "SMALL SCALE SERVICE",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'process_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment_success.php';
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
<!-- <script>
    $(document).ready(function () {
        $(".open-inquiry-modal").click(function () {
            var targetModal = $(this).data("target");
            $(targetModal).modal("show");
        });

        $("#inquiryForm").submit(function (e) {
            e.preventDefault();
            $("#inquiryModal").modal("hide");
            // Handle form submission logic here
        });
    });
</script> -->

</body>
</html>