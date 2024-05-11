<?php

function createNewJob($g_id, $c_id, $status)
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
    
        $sql = "INSERT INTO jobs (g_id, c_id, status) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        
        $stmt->bind_param("iis", $g_id, $c_id, $status);

        
        if ($stmt->execute()) {
            echo "created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }

        $stmt->close();
        $conn->close();
}

?>