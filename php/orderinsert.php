<?php
include "config.php";
$time =$_POST['time'];
$name =$_POST['name'];
$number =$_POST['number'];
$road =$_POST['road'];
$area =$_POST['area'];
$paymethod =$_POST['paymethod'];
$snumber =$_POST['snumber'];
$tid =$_POST['tid'];
$uid =$_POST['uid'];
$pid =$_POST['pid'];
$quantity =$_POST['quantity'];
$price =$_POST['price'];
$totalprice =$_POST['totalprice'];
$cartid =$_POST['cartid'];

$sql = "INSERT INTO checkout(pid,uid,quantity,perprice,fullprice,nam,num,road,area,paymethod,tcode,pnumber,ordertime)VALUES($pid,$uid,$quantity,$price,$totalprice,'$name',$number,'$road','$area','$paymethod','$tid',$snumber,'$time')";
$result = mysqli_query($con, $sql);
if($result){
    $sql1 ="DELETE FROM cart WHERE id=$cartid";
    $result1 = mysqli_query($con,$sql1);
    header("location:../user.php");
}

?>