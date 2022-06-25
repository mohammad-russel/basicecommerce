<?php
include "config.php";
$productid = $_POST['productid'];
$buyerid = $_POST['buyerid'];
$quantity = $_POST['quantity'];
$time = $_POST['time'];
$sql = "INSERT INTO cart(productid,buyerid,quantity,carttime) VALUES ($productid,$buyerid,$quantity,'$time')";
$result = mysqli_query($con,$sql);
header("location:../cart.php");
?>