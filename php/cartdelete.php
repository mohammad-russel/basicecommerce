<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM cart WHERE id=$id";
$result =mysqli_query($con, $sql);
header("location:../cart.php");
?>