<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index1</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">Small Scale Services</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
        <li><a class="active" href="index1.php">Home</a></li>
        <li><a href="index1.php">Services</a></li>
        <li><a href="index1.php">About us</a></li>
        <li><a href="index1.php">Contact</a></li>
        <li><a href="nlogin.php">Logout</a></li>
        </ul>
        <div id="mobile">
            <a href="Cart.html"><i class="fas fa-bell"></i></a>
            <i id="bar" class="fas fa-bars"></i>
        </div>
    
      </nav>
    </header>

 
<body>
    <!-- <section id="header">
      
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
    </section> -->

    <section id="service" class="section-p1"style="margin-top:100px">
        <div >
        <h3>Automobile Services</h3>
        </div>
        
    </section>
   
    <section id="Land" class="section-p1">
        <div class="Land-adv"> 


            <?php
            $sql = "SELECT * FROM addservice where sub_service='Automobile Service'";
            $result = $conn->query($sql);

            ?>
            <?php 
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){

                    $product_id =$row['id'];
                    $service_details = $row['service_details'];
                    $image = $row['image'];
                    ?>
                    <?php 
                    // $sql = "SELECT * FROM addservice where category='0'";
                    // $result = $conn->query($sql);
                    
                    // // if ($result === false) {
                    // //     die("Error in SQL query: " . $conn->error);
                    // // }
                    
                    // if ($result->num_rows > 0) {
                    //     while ($row = $result->fetch_assoc()) {  
                    //         $product_id =$row['id']; 
                   

                   ?>
                    <a href="info.php?id=<?php echo $product_id; ?>" >
                    <?php
                    echo ' <div>
                    <img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="">
                    <h4>'.$service_details.'</h4>
                </div>'; 
             
                }
        
            }
            else{
                echo'no products found in data base';
            }
        // }
    // }
    
            ?>
               </a>

            <?php 
            $conn->close();
            ?>






           




            <!-- <div>
                <img src="Bunjee.jpg" alt="">
                <h2>Bungee jumping</h2>
            </div>
            <div>
                <img src="hot.jpg" alt="">
                <h2>Hot Air Balloon</h2>
            </div>
            <div>
                <img src="helicopter.jpg" alt="">
                <h2>Helicopter Ride</h2>
            </div>
            <div>
                <img src="skydiving.jpg" alt="">
                <h2>Skydiving</h2>
            </div>
            <div>
                <img src="paramotor.jpg" alt="">
                <h2>Paramotoring</h2>
            </div>
            <div>
                <img src="rock.jpg" alt="">
                <h2>Rock Climbing</h2>
            </div> -->
        </div>
    </section>


    <script src="script.js"></script>
</body>

</html>