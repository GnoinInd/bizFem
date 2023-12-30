<?php
session_start();
session_unset();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header('location: ../index.php');
exit();
