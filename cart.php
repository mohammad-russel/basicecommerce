<?php
session_start();
$userid = $_SESSION["userid"];
?>

<?php include "tamplate/connect1.php";
?>
<title>Cart</title>
</head>

<body>
    <div class="container">
        <?php include "tamplate/header.php";
        ?>
        <div class="contant">
            <?php
            include "php/config.php";
            $sql = "SELECT * FROM cart WHERE buyerid = $userid";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
            ?>
                <table>
                    <tr>
                        <th>image</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Checkout</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productid = $row['productid'];
                        include "php/config.php";
                        $sql1 = "SELECT * FROM product WHERE id = $productid";
                        $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1)) {
                            $row1 = mysqli_fetch_assoc($result1);
                    ?>

                            <tr>
                                <td><img src="image/<?php echo $row1['img']; ?>" alt=""></td>
                                <td><?php echo $row1['nam']; ?></td>
                                <td>$<?php echo $row1['price']; ?>/-</td>
                                <td>
                                    <form action="php/updatequantity.php" method="post">
                                        <input type="number" id="number" name="number" value="<?php echo $row['quantity']; ?>">
                                        <input type="hidden" id="cartid" name="cartid" value="<?php echo $row['id']; ?>">
                                        <input type="submit" class="update" value="Update">
                                </td>
                                </form>

                                <td>
                                    <a href="checkout.php?id=<?php echo $row['id']; ?>">Checkout</a>
                                    <a href="php/cartdelete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php include "tamplate/script.php"; ?>
                <?php }
                    }
                } ?>
                </table>
        </div>
    </div>
</body>

</html>