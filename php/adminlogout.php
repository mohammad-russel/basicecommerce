<?php
session_start();
unset( $_SESSION["adminid"]);
header("location:../adminlogin.php");
?>