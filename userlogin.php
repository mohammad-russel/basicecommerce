<?php
session_start();
if(isset($_SESSION["userid"] )){
    header("location:user.php");
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
            <div class="form logform">
                <h1>Login</h1>
                <form class="logform" action="php/userlogin.php" method="post">
                    <input type="email" name="email" id="email" placeholder="Email"required>
                    <input type="password" name="password" id="password" placeholder="Password"required>
                    <input type="submit" value="Login" id="login" name="login">
                    <a class="signup" href="usersignup.php">Signup</a>
                </form>
            </div>
            </div>
        </div>
</body>
<?php include "tamplate/script.php";
?>

</html>