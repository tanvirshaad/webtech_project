<?php
session_start();
require '../Model/connect.php';
$loggedIn = loggedIn();
if(isset($_POST['update']))
{
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        echo $fname;
        // updateUser($fname, $lname, $uname, $password);
        // Location()
    }
}
?>