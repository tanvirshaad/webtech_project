<?php
// session_abort();
// session_start();
require '../Controller/credentials.php';
$currentUser = loggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <ul>
                <li><a href="">Driver Chai</a></li>
            </ul>
        </div>
        <div class="navoption">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="Register.php">Profile</a></li>
                <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
            </ul>
            <!-- <a href="#about">About</a> -->
        </div>
    </div>
    <div class="section">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <!-- <?php print_r($currentUser) ?> -->
        <label for="uname">For the Username: </label>
            <input type="text" name="uname" id="" value="<?php echo $currentUser['username']; ?>" />
            <br>
            <br>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="" value="<?php echo $currentUser['firstName']; ?>" />
            <br>
            <br>
            
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="" value="<?php echo $currentUser['lastName'];?>" />
            <br>
            <br>
     

    </div>
</body>
</html>