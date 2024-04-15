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
          <li><a href="index1.php">Home</a></li>
          <li><a href="index1.php">Services</a></li>
          <!-- <li><a href="profile.php">Profile</a></li> -->
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="index1.php">About Us</a></li>
          <li><a href="index1.php">Contact Us</a></li>
          <li><a href="nlogin.php">Logout</a></li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
        <div id="mobile">
            <a href="Cart.html"><i class="fas fa-bell"></i></a>
            <i id="bar" class="fas fa-bars"></i>
        </div>
        <!-- <div>
            <ul id="navbar" class="all-links">
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
        </div> -->
      </nav>
    </header>