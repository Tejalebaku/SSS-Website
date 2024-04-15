<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>snaplearn</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title" > 
            Welcome
         </div>
         <form action="signupbk.php" method="post">
            <div class="field">
               <input type="Email" name="Email" placeholder="Email" required>
              
            </div>
            <div class="field">
               <input type="password" name="password" placeholder="password" required>
             
            </div>
            <div class="field">
                <input type="confirmpassword" name="confirmpassword" placeholder="confirmpassword" required>
               
             </div>
            <div class="field" >
               <input type="submit" value="Signup" onclick="window.location.href='login.php'">
            </div>
            <div class="signup-link">Already have an account? <a href="#" onclick="window.location.href='login.php'">Login</a>
            </div>
         </form>
      </div>
   </body>
</html>