<?php


function getAlluser()
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

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $allUsers = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($allUsers, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $allUsers;
}

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

function forgotPass($username)
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
    $sql = "SELECT ans FROM users WHERE username = ?";
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
        return $row;

    }

    $stmt->close();
    $conn->close();


}

function changePass($username, $password)
{

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE users set password = '$password' where username = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $x);
	$x = $username;
	$result = $stmt->execute();
	if($result)
	{
	echo ".";

	}else
	{
		echo "Failed to update password";
	}

}

function createUser($fname, $lname, $email, $uname, $cpassword , $secQuestion , $ans)
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
  
    $sql = "INSERT INTO users (firstName, lastName, email, username, password , secQuestion , ans) VALUES (?, ?, ?, ?, ? ,?, ?)";
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("sssssss", $fname, $lname, $email, $uname, $cpassword, $secQuestion, $ans);

    
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

  function updateUser($id, $uname , $fname, $lname, $password)
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
    
    
    $sql = "UPDATE users SET username = ?, firstName=?, lastName=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    
  
    $stmt->bind_param("ssssi",$uname, $fname, $lname, $password, $id);

    
    if ($stmt->execute()) {
        echo "User updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>