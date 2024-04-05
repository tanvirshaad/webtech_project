<?php
require '../Controller/ResetPass.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Forgot Password</title>
    </head>
    <body>
        <form action="../Controller/ResetPass.php" method="POST">
        <br>
            <br>
            <label for="uname">Enter User Name:</label>
            <input type="uname" name="uname" id="" />
            <br>
            <br>
            <label for="secQuestion">Secret your secret Question:</label>
            <select name="secQuestion" id="secQuestion">
            <option value="What is the name of the city you were born?">What is the name of the city you were born?</option>
            <option value="What was the name of your first pet?">What was the name of your first pet?</option>
            <option value="What is the name of your best friend?">What is the name of your best friend?</option>
            <option value="What is your favourite color?">What is your favourite color?</option>
            </select>
            <br>
            <br>
            <label for="ans">Ans:</label>
            <input type="ans" name="ans" id="" />
            <br>
            <br>
            <label for="newPassword">Enter New Password:</label>
            <input type="newPassword" name="newPassword" id="" />
            <br>
            <br>
            <label for="cpassword">Confirm Password:</label>
            <input type="cpassword" name="cpassword" id="" />
            <br>
            <br>
            <input type="submit" name = "fpass" value="Change Password">
        </form>
    </body>
</html>
