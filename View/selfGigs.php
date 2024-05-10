<?php
require '../Controller/getSelfGig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Gigs</title>
</head>
<body>
    <h1>Gigs for: <?php  echo $_SESSION['username']; ?></h1>
    <?php
        foreach($selfgigs as $gigs)
        {
            echo $gigs['title'];
        }
        
    ?>
</body>
</html>