<?php

require '../Controller/update.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="../Controller/update.php" method="post" novalidate>
        
            <label for="uname">For the Username: </label>
            <input type="text" name="uname" id="" value="<?php echo $loggedIn['username']; ?>" />
            <br>
            <br>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="" value="<?php echo $loggedIn['firstName']; ?>" />
            <br>
            <br>
            
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="" value="<?php echo $loggedIn['lastName'];?>" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="" value="<?php echo $loggedIn['password'];?>"/>
            <br>
            <br>
            <input type="hidden" name="id" value = "<?php $loggedIn['id']?>">
            <br>
            <br>
            <input type="submit" name="update" value="update">
    </form>
</body>
</html>