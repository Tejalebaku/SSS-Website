<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            background-color: #A36E4A;;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            display: flex;
            width: 90%;
            justify-content: space-around;
            padding: 20px;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 45%;
        }

        .contact-form h2 {
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label, input, textarea {
            margin: 10px 0;
        }

        button {
            background-color: #DD9A17;;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .contact-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px  rgba(221, 154, 23, 1);
            width: 45%;
        }

        .contact-info h2 {
            margin-top: 0;
        }

        .contact-info p {
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
            }

            .contact-form, .contact-info {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
<!-- <div class="bgimage" style="margin-bottom:5px;"> -->
            <div class="menu"  >
    
                <div class="leftmenu">
                    <h3> SMALL SCALE SERVICES </h3>
                </div>
    
                <div class="rightmenu">
                    <ul>
                        <li id="firstlist"><a onclick="window.location.href='home.php'">Home</li></a>
                        <li> <a onclick="window.location.href='profile.php'">Profile</li></a>
                        <li> <a onclick="window.location.href='aboutus.php '">About Us</li></a>
                        <li><a onclick="window.location.href='contact.php '">Contact</li></a>
                        <li><a onclick="window.location.href='login.php'">Logout</li></a>
                    </ul>
                </div>
            </div>
            <!-- <div class="pass-link"> -->
                  <!-- <a href="home1.php" onclick="window.location.href='home1.php'">HOME</a> -->
               <!-- </div> -->
        <!-- </div> -->
    <header >
        <h4>Contact Us</h4>
    </header>
    <main>
       
        
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> saikrishnatejalebaku@gmail.com</p>
            <p><strong>Phone:</strong> +1 (123) 456-7890</p>
            <p><strong>Address:</strong>settigunta, Rlykodur, Andhra pradesh, India</p>
        </section>
    </main>
</body>
</html>