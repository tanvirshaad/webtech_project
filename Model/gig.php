<?php
function createGig($userId, $username, $title, $hourly_rate, $car_type)
{
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "my_app";
  
  
  // Create connection
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
    $sql = "INSERT INTO gigs (id, title, username, car_type , hourly_rate) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("isssi", $userId, $title, $username, $car_type, $hourly_rate);

    
    if ($stmt->execute()) {
        echo "created";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return false;
    }

    $stmt->close();
    $conn->close();

}

function getSelfGig($id)
{
 
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM gigs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $selfgigs = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($selfgigs, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $selfgigs;

}
?>