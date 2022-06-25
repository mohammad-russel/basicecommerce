<?php
session_start();
include "config.php";
if(isset($_POST['login'])){
    $email =  mysqli_real_escape_string($con,$_POST['email']);
$password =  mysqli_real_escape_string($con,$_POST['password']);
    $sql ="SELECT * FROM adminlog WHERE mail='$email' AND pass='$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
$_SESSION["adminid"] = $row['id'];
if (mysqli_num_rows($result) > 0) {
    header("location:../admin.php");
} else {
    header("location:../adminlogin.php");
}
}


?>