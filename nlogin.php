<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Small Scale Services</title>
  <link rel="stylesheet" href="style4.css">
  <style>
     html, body {
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  align-items: center;
  margin: 0;
  background: url('bg1.png'); /* Replace 'bfore.jpg' with the actual relative path to your image */
  background-size: cover; /* Ensure the background image covers the entire screen */
  background-position: center; /* Center the background image */
}
    .wrapper {
      background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the form */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .field {
      margin-bottom: 15px;
    }

    .field input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    .signup-link {
      margin-top: 15px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="title">
      Login
    </div>
    <form action="nloginbk.php" method="post">
      <div class="field">
  
        <input type="Email" name="Emailaddress" placeholder="Emailaddress" autocomplete="off" required>
      
      </div>
      <div class="field">

        <input type="Password" name="Password" placeholder="Password" autocomplete="off" required>
     
      </div>
      <div class="field">
        <input type="submit" value="Login">
      </div>
      <div class="signup-link">
        Don't have an account? <a href="#" onclick="window.location.href='nsignup.php'">Sign up</a>
      </div>
    </form>
  </div>

</body>
</html>
