<?php
session_start();

require '../Controller/customerGigView.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Gig View</title>
    <link rel="stylesheet" href="../styles/selfGigs.css">
</head>
<body>
    <h1>Total Gigs: <?php  echo count($allAvailableGigs); ?></h1>
    <?php
        echo '<div class="gigs-section">';
        foreach($allAvailableGigs as $gigs)
        {
            echo '<div class = "item">';
            echo "<h3>" . $gigs['title'] . "</h3>";
            // echo "<br>";
            echo "<h5>" . "Car Type: " . $gigs['car_type'] . "</h5>";
            echo "<h2>" . "Hourly Rate: " . $gigs['hourly_rate'] . "</h2>";
            if($gigs['available'])
            {
                echo "Staus: Available";
            }
            else{
                echo "Staus: Unavailable";
            }

            echo "</div>";
        }
        echo '</div>';
        ?>
</body>
</html>