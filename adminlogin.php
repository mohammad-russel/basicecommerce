<?php
session_start();
if(isset($_SESSION["adminid"] )){
    header("location:admin.php");
}
?>
<?php include "tamplate/connect1.php";
?>
<title>Shop</title>
</head>

<body>
    <div class="container">
        <?php include "tamplate/header.php";
        ?>
        <div class="contant">
            <div class="form">
                <form class="logform" action="php/adminlogin.php" method="post">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" value="Login" id="login" name="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>







