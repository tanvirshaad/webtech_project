<?php
require '../Controller/adminHome.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Home</title>
</head>
<body>
    <h1>Total user: <?php echo count($allUsers); ?></h1>
    <?php
    echo var_dump($_SESSION);
    echo "<table border=1>";
        
        echo "<tr>";
            echo "<th>" . "Userid" . "</th>";
            echo "<th>" . "Username" . "</th>";
            echo "<th>" . "email" . "</th>";
            echo "<th>" . "Name" . "</th>";
            echo "<th>" . "Action" . "</th>";
            
        echo "</tr>";
        
            foreach($allUsers as $user)
            {
                echo "<tr>";
                    echo "<td>" . $user['id'] . "<br>" .  "</td>";
                    echo "<td>" . $user['username'] . "<br>" .  "</td>";
                    echo "<td>" . $user['email'] . "<br>" .  "</td>";
                    echo "<td>" . $user['firstName'] . " " . $user['lastName'] . "<br>" .  "</td>";
                    
                echo "<tr>";
                // echo $user['username'] . "<br>";
            }
            
    echo "</table>";
    ?>
</body>
</html>
