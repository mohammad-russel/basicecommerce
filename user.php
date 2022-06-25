<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("location:userlogin.php");
}
$userid = $_SESSION["userid"];
?>
<?php include "tamplate/connect1.php";
?>
<title>User</title>
</head>

<body>
    <div class="container">
        <?php include "tamplate/header.php";
        ?>
        <div class="contant">
            <?php
            include "php/config.php";
            $sql = "SELECT * FROM user WHERE id = $userid";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_assoc($result);
            ?>
                <div class="userinfo">
                    <div class="info name"><?php echo $row['nam']; ?></div>
                    <div class="info email"><?php echo $row['mail']; ?></div>
                    <div class="info number"><?php echo $row['num']; ?></div>
                    <div class="info city"><?php echo $row['city']; ?></div>
                    <div class="info zip"><?php echo $row['zip']; ?></div>
                    <div class="info edit">EDIT</div>
                </div>
                <div class="btnbox">
                    <a href="php/userlogout.php">Logout</a>
                    <a href="cart.php">See Your Cart</a>
                    <h3 style="text-align:center; width:100%; background:black ;color:whitesmoke;">Your Order</h3>
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        <?php
                        include "php/config.php";
                        $sql2 = "SELECT * FROM checkout WHERE uid=$userid";
                        $result2 = mysqli_query($con, $sql2);
                        if (mysqli_num_rows($result2)) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $pid = $row2['pid'];
                                $sql3 = "SELECT * FROM product WHERE id=$pid ";
                                $result3 = mysqli_query($con, $sql3);
                                if (mysqli_num_rows($result3)) {
                                    $row3 =mysqli_fetch_assoc($result3);
                        ?>
                                    <tr>
                                        <td><img src="image/<?php echo $row3['img'] ?>" alt=""></td>
                                        <td><?php echo $row3['nam'] ?></td>
                                        <td><?php echo $row2['quantity'] ?></td>
                                        <td>$<?php echo $row2['perprice'] ?>/-</td>
                                        <td>$<?php echo $row2['fullprice'] ?>/-</td>
                                    </tr>

                        <?php }
                            }
                        } ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>