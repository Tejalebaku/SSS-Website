<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>snaplearn</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="loginbk.php" method="post">
            <div class="field">
               <input type="Email" name="Email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            <div class="field">
               <input type="submit" value="Login" onclick="window.location.href='main.php'">
            </div>
            <div class="signup-link">
               Don't have an account? <a href="#" onclick="window.location.href='signup.php'">Signup</a>
            </div>
         </form>
      </div>
   </body>
</html>