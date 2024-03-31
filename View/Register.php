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
            <label for="password">Password:</label>
            <input type="password" name="password" id="" />
            <br>
            <br>
            <label for="password">Confirm Password:</label>
            <input type="password" name="cpassword" id="" />
            <br>
            <br>
            <input type="submit" name="register" value="Register">
        </form>
    </body>
</html>
