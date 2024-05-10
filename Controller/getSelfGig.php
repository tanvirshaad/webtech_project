<?php

session_start();
require '../Model/gig.php';

$selfgigs = getSelfGig($_SESSION['userId']);

?>