<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gig</title>
</head>
<body>
    <h1>Create your Gig:</h1>
    <form action="../Controller/createGig.php" method="POST">
        <label for="title">Title: </label>
        <input type="text" name="title" id="">
        <br>
        <label for="car_type">Car Type: </label>
        <select name="car_type" id="car_type">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        <br>
        <label for="hourly_rate">Hourly Rate: </label>
        <input type="text" name="hourly_rate" id="">
        <br>
        <input type="submit" value="Submit">
        <?php 
        session_start();
        print_r($_SESSION); ?>
        
    </form>
</body>
</html>