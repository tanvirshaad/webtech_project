<?php

function loggedIn()
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

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("s", $_SESSION['username']);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetching row
        $row = $result->fetch_assoc();
        return $row;

    } else {
        echo "0 results";
    }

    $stmt->close();
    $conn->close();
}

function createUser($fname, $lname, $uname, $cpassword)
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
  
    $sql = "INSERT INTO users (firstName, lastName, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("ssss", $fname, $lname, $uname, $cpassword);

    
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();

}

function credentials($username, $password)
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

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetching row
        $row = $result->fetch_assoc();
        $uname = $row['username'];
        $pass = $row['password'];

        // Check if the provided credentials match
        if ($username == $uname && $password == $pass) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "0 results";
    }

    $stmt->close();
    $conn->close();
  }

  // function updateUser($fname, $lname, $uname, $password)
  // {
  //   return true
  // }
?>