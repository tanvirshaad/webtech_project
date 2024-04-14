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
    <h1>Total user: <?php echo print_r($allUsers); ?></h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>User Id</th>
            <th>Action</th>
        </tr>
        <?php
            foreach($allUsers as $user)
            {
                echo $user['username'] . "<br>";
                // echo "<tr";
                //     echo "<td>" . ['username'] .  "<td>";
                // echo "<tr>";
            }
        ?>
    </table>
</body>
</html>
