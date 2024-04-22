<?php
session_start();
if (!isset($_SESSION['username'])) {
		header("Location: Login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/welcome.css">
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
                        <li><a href="Register.php">Register</a></li>
                        <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
                    </ul>
                    <!-- <a href="#about">About</a> -->
                </div>
            </div>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

    <a class="btn" href="../Controller/logout.php">Logout</a>
    <br>
    <a href="update.php">Update user details</a>

    <?php print_r($_SESSION); ?>
</body>
</html>