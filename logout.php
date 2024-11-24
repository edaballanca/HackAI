<?php
session_start();

// Set a session variable indicating the user has logged out
$_SESSION['logged_out'] = true;

// Destroy the session
session_unset();
session_destroy();

// Redirect to the homepage
header("Location: index.php");
exit();
?>
