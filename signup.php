<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>SSS</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title" > 
            Welcome
         </div>
         <form action="signupbk.php" method="post">
         <div class="field">
               <input type="Firstname" name="Firstname" placeholder="Firstname" required>
             
            </div>
            <div class="field">
               <input type="Lastname" name="Lastname" placeholder="Lastname" required>
             
            </div>
            <div class="field">
               <input type="Mobilenumber" name="Mobilenumber" placeholder="Mobilenumber" required>
             
            </div>

            <div class="field">
               <input type="Email" name="Emailaddress" placeholder="Email" required>
               <i class="fas fa-envelope"></i>
            </div>
            <div class="field">
               <input type="Password" name="Password" placeholder="password" required>
             
            </div>
            <div class="field">
                <input type="confirmpassword" name="Confirmpassword" placeholder="Confirmpassword" required>
               
             </div>
            <div class="field" >
               <input type="submit" value="Signup" >
            </div>
            <div class="signup-link">Already have an account? <a href="login.php">Login</a>
            </div>
         </form>
      </div>
   </body>
</html>