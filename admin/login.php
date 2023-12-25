<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <link rel="icon" href="../src/inployed.png">
      <meta charset="utf-8">
      <title>Admin | InPloyed</title>
      <link rel="stylesheet" href="../css/login.css">
   </head>
   <body>

      <img src="../src/logo.png">
      <div class="wrapper" style="margin-top: -200px;">
         <div class="title">
            Login
         </div>
         <form action="../control/loginctrl.php" method="post">
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" id="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <!-- checkbox for showing/hiding the password -->
               <label>
               <input style="margin-right: 10px; margin-top: 10px;" type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">Show Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>

      <script>
         function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var checkbox = document.getElementById("showPassword");

            // Change the type of the password field based on checkbox state
            passwordField.type = checkbox.checked ? "text" : "password";
         }
      </script>
   </body>
</html>
