<?php
include "config.php";
$email =  mysqli_real_escape_string($con,$_POST['email']);
$password =  mysqli_real_escape_string($con,$_POST['password']);
$name =  mysqli_real_escape_string($con,$_POST['name']);
$number =  mysqli_real_escape_string($con,$_POST['number']);
$city =  mysqli_real_escape_string($con,$_POST['city']);
$zip =  mysqli_real_escape_string($con,$_POST['zip']);

$sql = "SELECT * FROM user WHERE mail ='$email' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location:../usersignup.php");
} else {
 $sql = "INSERT INTO user(nam,pass,num,mail,city,zip) VALUES ('$name','$password',$number ,'$email','$city','$zip')";
$result = mysqli_query($con, $sql);
header("location:../userlogin.php");
}


?>