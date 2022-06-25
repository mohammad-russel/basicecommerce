<?php
session_start();
if (!isset($_SESSION["adminid"])) {
    header("location:adminlogin.php");
}
?>
<?php include "tamplate/connect1.php";
?>
<title>Admin Panel</title>
<style>
    .logout {
        padding: 10px;
        font-size: 1.3rem;
        text-align: center;
        margin: auto;
        width: max-content;
    }
</style>
</head>

<body>
    <div class="container">
        <?php include "tamplate/header.php";
        ?>
        <div class="contant">
            <div class="post">
                <?php date_default_timezone_set("Asia/Dhaka"); ?>
                <form action="php/productinsert.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="time" name="time" value="<?php echo date(" h:i || d-m-y"); ?> ">
                    <input type="text" id="name" name="name" placeholder="Product Name" required>
                    <input type="text" id="price" name="price" placeholder="Product Price" required>
                    <input type="file" name="img" id="img" required>
                    <input type="submit" value="POST" name="post" id="post">
                </form>
            </div>
            <div class="logout">
                <a href="php/adminlogout.php">Logout</a>
            </div>
            <div class="list">
                <?php
                include "php/config.php";
                $sql = "SELECT * FROM product ORDER BY id DESC";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="product">
                            <div class="image">
                                <img src="image/<?php echo $row['img']; ?>" alt="">
                            </div>
                            <div class="name"><?php echo $row['nam']; ?></div>
                            <div class="price">$<?php echo $row['price']; ?>/-</div>
                            <div class="btns">
                                <a href="" class="edit">Edit</a>
                                <a href="php/deleteproduct.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</body>

</html>