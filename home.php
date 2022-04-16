<?php 
require 'partials/_nav.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("location:home2.php");
}
$user = $_SESSION['user_account'];
session_destroy();
session_start();
$_SESSION['user_account'] = $user;
ob_start(); 
$conn = connect();
?>