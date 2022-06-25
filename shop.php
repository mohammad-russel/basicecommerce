<?php
session_start();
$userid =$_SESSION["userid"] ;
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
            <div class="catagory">
                <div class="box">all</div>
                <div class="box">Veg</div>
                <div class="box">non-veg</div>
                <div class="box">Fast food</div>
                <div class="box">cake</div>
            </div>
            <div class="products">
                <?php
                include "php/config.php";
                $sql = "SELECT * FROM product ORDER BY id DESC";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="product">
                            <div class="image">
                                <a href="#">
                                    <img src="image/<?php echo $row['img']; ?>" alt="">
                                </a>
                            </div>
                            <div class="name"><?php echo $row['nam']; ?></div>
                            <div class="price">$<?php echo $row['price']; ?>/-</div>
                            <?php date_default_timezone_set("Asia/Dhaka"); ?>
                            <form action="php/addcart.php" method="post">
                            <input type="hidden" id="time" name="time" value="<?php echo date(" h:i || d-m-y"); ?>">
                                <input type="hidden" id="productid" name="productid" value="<?php echo $row['id']; ?>">
                                <input type="hidden" id="quantity" name="quantity" value="1">
                                <input type="hidden" id="buyerid" name="buyerid" value="<?php echo $userid ?>">
                                <input type="submit" value="ADD CART" id="addcart" name="addcart">
                            </form>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
</body>

</html>