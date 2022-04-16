<?php
include "_dbconnect.php";

if (!empty($_POST['email']) && !empty($_POST['password'])){

$email= $_POST['email'];
$password= $_POST['password'];
$sql = "insert into user_account values('$email','$password')";
$result= mysqli_query($conn, $sql);
if($result){
    header("Location: login.php");
}
}

else {
    header("Location: signup.php");
}
?>