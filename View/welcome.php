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
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

    <a href="../Controller/logout.php">Logout</a>
    <br>
    <a href="update.php">Update</a>

    
</body>
</html>