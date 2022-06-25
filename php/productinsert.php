<?php
include "config.php";
if (isset($_POST['post'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $file = mysqli_real_escape_string($con, $_FILES["img"]["name"]);
    $filetmp = $_FILES["img"]["tmp_name"];
    $folder = "image/";
    $sql = "INSERT INTO product(nam,price,img,uploadtime) VALUE ('$name',$price ,'$file','$time') ";
    $result = mysqli_query($con, $sql);
}
move_uploaded_file($filetmp,  "../image/" . $file);
header("location:../admin.php");
