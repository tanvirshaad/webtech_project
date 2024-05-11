<?php
session_abort();
session_start();
require '../Model/gig.php';
require '../Model/job.php';
$allAvailableGigs = getAllAvailableGigs();
if(isset($_POST['request']))
{
    $g_id = $_POST['g_id'];
    $status = "pending";
    $c_id = $_SESSION['userId'];
    createNewJob($g_id, $c_id, $status);
}
?>