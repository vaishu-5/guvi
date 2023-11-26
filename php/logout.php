<?php
session_start(); 
$_SESSION = array();
session_destroy();
header("Location: http://localhost/test_guvi/login.html");
exit;
?>
