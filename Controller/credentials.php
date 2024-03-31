<?php
session_start();
require '../Model/connect.php';
if(isset($_POST['register']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $cpassword = $_POST['cpassword'];
    }
    createUser($fname, $lname, $uname, $cpassword);
    header('Location: http://localhost/project/View/Login.php');
}

if(isset($_POST['login']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        if(credentials($username, $password))
        {
            $_SESSION['username'] = $username;
            header('Location: http://localhost/project/View/welcome.php');
        }
        else
        {
            echo "wrong";
        }
    }
}

?>