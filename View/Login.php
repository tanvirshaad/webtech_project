<?php
require '../Controller/credentials.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" href="../styles/login.css">
    </head>
    <body>
        <section class="loginform">
            <form action="../Controller/credentials.php" method="POST">
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="" />
            
            <br>
            <br>
            <div>
                
            </div>
            <input type="submit" name = "login" value="Login" class="btn">
            <a class="link" href="ForgotPass.php">Forgot Password?</a>
        </form>

        </section>
        
    </body>
</html>
