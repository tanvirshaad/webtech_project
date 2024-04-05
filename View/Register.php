<?php
session_start();
if(isset($_SESSION['passwordmatched']))
{
    $passerrmsg = $_SESSION['passwordmatched'];
}
else{
    $passerrmsg = "";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
    </head>
    <body>
        <form action="../Controller/credentials.php" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="" />
            <br>
            <br>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="" />
            <br>
            <br>
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="" />
            <br>           
            <br>
            <label for="secQuestion">Secret Question:</label>
            <select name="secQuestion" id="secQuestion">
            <option value="What is the name of the city you were born?">What is the name of the city you were born?</option>
            <option value="What was the name of your first pet?">What was the name of your first pet?</option>
            <option value="What is the name of your best friend?">What is the name of your best friend?</option>
            <option value="What is your favourite color?">What is your favourite color?</option>
            </select>
            <br>
            <label for="ans">Ans:</label>
            <input type="ans" name="ans" id="" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="" />
            <br>
            <br>
            <label for="password">Confirm Password:</label>
            <input type="password" name="cpassword" id="" />
            <br>
            <?php echo $passerrmsg;  ?>
            <br>
            <input type="submit" name="register" value="Register">
        </form>
            <p>Already have an account? go to <a href="Login.php">login</a> </p>
            
    </body>
</html>
