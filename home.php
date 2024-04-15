<?php

$start_time = microtime(true);
$end_time = microtime(true);

// Calculate response time
$response_time = ($end_time - $start_time) * 1000;

// Output response time
echo "<p>Response Time: " . number_format($response_time, 2) . " milliseconds</p>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>SSS</title>
   <style>
.Desktop1 {
    position: relative;
    width: 100%;
    height: 1024px;
    overflow: hidden; /* Ensure the blurred overlay doesn't overflow */

    /* Background image */
    background: url('bg1.png');
    background-size: cover;
}

.Desktop1::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('bg1.png');
    background-size: cover;
    filter: blur(5px); /* Adjust the blur radius as needed */
}



      .Image150 {
         width: 3888px;
         height: 2592px;
         left: -1224px;
         top: -784px;
         position: absolute;
      }

      .Rectangle184 {
         width: 100%;
         height: 115px;
         left: 0;
         top: 0;
         position: absolute;
         background: #DD9A17;
         border: 1px solid black;
      }

      .Logout, .Sss, .Home, .EditProfile, .AboutUs, .Contact, .HomeServices, .ElectricServices, .AutomobileServices, .PlumberServices, .LaptopTechnician {
         color: white;
         font-size: 25px;
         font-family: Inter;
         font-weight: 700;
         word-wrap: break-word;
         position: absolute;
      }

      .Logout {
         left: 1257px;
         top: 43px;
      }

      .Sss {
         left: 76px;
         top: 43px;
      }

      .Home {
         left: 482px;
         top: 43px;
      }

      .EditProfile {
         left: 622px;
         top: 43px;
      }

      .AboutUs {
         left: 852px;
         top: 43px;
      }

      .Contact {
         left: 1046px;
         top: 43px;
      }

      .Image145 {
         width: 250px;
         height: 250.25px;
         left: 112px;
         border-radius : 35px;
         top: 232px;
         position: absolute;
         box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .Image146 {
         width: 250px;
         height: 250.06px;
         left: 575px;
         top: 232px;
         border-radius : 35px;
         position: absolute;
         box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .Image148 {
         width: 250px;
         height: 221.59px;
         border-radius : 35px;
         left: 307px;
         top: 630px;
         position: absolute;
         box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .Image149 {
         width: 250px;
         height: 265.83px;
         border-radius : 35px;
         left: 861px;
         top: 608px;
         position: absolute;
         box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .Image147 {
         width: 250px;
         height: 250px;
         border-radius : 35px;
         left: 1078px;
         top: 239px;
         position: absolute;
         box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); /* Add shadow effect */
      }

      .HomeServices {
         left: 149px;
         top: 526px;
         color: black;
         font-size: 25px;
         font-family: Inter;
         font-weight: 400;
         word-wrap: break-word;
         position: absolute;
      }

      .ElectricServices {
         left: 609px;
         top: 526px;
         color: black;
         font-size: 25px;
         font-family: Inter;
         font-weight: 400;
         word-wrap: break-word;
         position: absolute;
      }

      .AutomobileServices {
         left: 1083px;
         top: 526px;
         color: black;
         font-size: 25px;
         font-family: Inter;
         font-weight: 400;
         word-wrap: break-word;
         position: absolute;
      }

      .PlumberServices {
         left: 325px;
         top: 902px;
         color: black;
         font-size: 25px;
         font-family: Inter;
         font-weight: 400;
         word-wrap: break-word;
         position: absolute;
      }

      .LaptopTechnician {
         left: 880px;
         top: 908px;
         color: black;
         font-size: 25px;
         font-family: Inter;
         font-weight: 400;
         word-wrap: break-word;
         position: absolute;
      }
   </style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel Quest</title>
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <section id="header">
      
        <a href="home.php" >SERVICE Z</a>
        
        
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="profile.php">PROFILE</a></li>
               
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="login.php">LOGOUT</a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="Cart.html"><i class="fas fa-bell"></i></a>
            <i id="bar" class="fas fa-bars"></i>
        </div>
    </section>
<body>
   <div class="Desktop1">
      <!-- <a href="login.php"><div class="Logout">LOGOUT</div></a>
      <div class="Sss">SERVICE Z</div>
      <div class="Home">HOME</div>
      <a href="profile.php"><div class="EditProfile"> PROFILE</div></a>
      <a href="aboutus.php"><div class="AboutUs">ABOUT US</div></a>
      <a href="contact.php"><div class="Contact">CONTACT</div></a> -->
      <a href="home_sub_services.php"><img class="Image145" src="house.jpg" /></a>
      <a href="electric_sub_services.php"><img class="Image146" src="celec.jpg" /></a>
      <a href="plumber_sub_services.php"><img class="Image148" src="plumber.jpg" /></a>
      <a href="lap_sub_services.php"><img class="Image149" src="5.jpg" /></a>
      <a href="Automobile_sub_services.php"><img class="Image147" src="automobile.jpg" /></a>
      <div class="HomeServices">Home services</div>
      <div class="ElectricServices">Electric services</div>
      <div class="AutomobileServices">Automobile services</div>
      <div class="PlumberServices">Plumber services</div>
      <div class="LaptopTechnician">Laptop Technician</div> 
   </div>
</body>
</html>
