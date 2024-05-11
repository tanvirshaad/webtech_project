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

function getCurrentJobId()
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

    $sql = "SELECT j_id FROM jobs";
    $result = $conn->query($sql);
    $allJobsId = array();
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($allJobsId, $row['j_id']);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    $count = 0;
    
    //print_r($allJobsId);
    
    echo end($allJobsId);
    return end($allJobsId);
}


function bindDriverWithJob($j_id, $d_id, $c_id)
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
    
        $sql = "INSERT INTO jobDriver (j_id, d_id, c_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        
        $stmt->bind_param("iii", $j_id, $d_id, $c_id);

        
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