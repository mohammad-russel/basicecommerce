<?php include "tamplate/connect1.php";
?>
<title>Shop</title>
</head>

<body>
    <div class="container">
        <?php include "tamplate/header.php";
        ?>
        <div class="contant">
                <div class="form signform">
                    <h1>Sign Up</h1>
                    <form class="signform" action="php/usersignup.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="number" name="number" id="number" placeholder="Number"required>
                        <input type="email" name="email" id="email" placeholder="Email"required>
                        <input type="password" name="password" id="password" placeholder="Password"required>
                        <input type="text" name="city" id="city" placeholder="city"required>
                        <input type="text" name="zip" id="zip" placeholder="zip"required>
                        <input type="submit" value="signup" id="signup" name="signup">
                        <a class="login" href="userlogin.php">Login</a>
                    </form>
                </div>
            </div>
        </div>
</body>
<?php include "tamplate/script.php";
?>

</html>