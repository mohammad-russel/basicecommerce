<?php 
include "config.php";
$quantity = $_POST['number'];
$cartid = $_POST['cartid'];
$sql = "UPDATE cart SET quantity= $quantity WHERE id=$cartid";
$result = mysqli_query($con, $sql);
header("location:../cart.php")
?>