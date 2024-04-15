<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="style.css"> 
  <style>
    html, body {
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background-color: white;
    /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
    align-items: start;
}
    header {
      background-color: #A36E4A;
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
    }

    .about-us-content {
    padding: 65px;
    margin-top: -92px;
}

    .about-us-content h2 {
      font-size: 24px;
      margin-top: 20px;
    }

    .about-us-content p {
      font-size: 16px;
      margin-bottom: 10px;
    }
    .menu1{
  background-color: #DD9A17;
  border-radius:10px;
  color:#fff;
  text-align:center;
  height:50px;
  width:10%;
  padding:10px;
}
  </style>
</head>
<body>
<div class="menu"  >
    
    <div class="leftmenu">
        <h3> SMALL SCALE SERVICES </h3>
    </div>

    <div class="rightmenu">
        <ul>
            <li id="firstlist"><a onclick="window.location.href='home.php'">Home</li></a>
            <li> <a onclick="window.location.href='profile.php'">Profile</li></a>
            <li> <a onclick="window.location.href='about.php '">About Us</li></a>
            <li><a onclick="window.location.href='contact.php '">Contact</li></a>
            <li><a onclick="window.location.href='login.php'">Logout</li></a>
        </ul>
    </div>
</div>
<div class="menu1">
    <div class="leftmenu1">
      <h4>About Us</h4>
      
    </div>
    </div>
  
 
   </div>
  <section class="about-us-content">
  <h2>Our Team:</h2>
    <p>We have a dedicated team of volunteers who work tirelessly to...</p>
    <h2>Our Mission:</h2>
    <p>"At Small Scale Services, we believe that no idea is too small to make a big impact. Let's work together to turn your dreams into digital realities."
        ...</p>
    <h2>Our vision:</h2>
    <p>"Our vision at Small Scale Services is to be the go-to development partner for small businesses and individuals, making advanced technology accessible to all. We envision a world where every creative idea can be realized through beautifully crafted applications."
...</p>
  </section>
</body>
</html>