<?php
session_start();
include "_dbconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])){

$email= $_POST['email'];
$password= $_POST['password'];
$sql = "select * from user_account where email='$email' and password='$password'" ;
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result) != 0){
    $_SESSION['email']=$email;
    header("Location: home.php");
}
}

else {
    header("Location: login.php");
}
?>