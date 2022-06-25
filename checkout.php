 <?php include "tamplate/connect1.php";
    ?>
 <title>Checkout</title>
 </head>

 <body>
     <div class="container">
         <?php include "tamplate/header.php";
            ?>
         <div class="contant">
             <div class="productinfo">
                 <?php
                    include "php/config.php";
                    $cartid = $_GET['id'];
                    $sql = "SELECT * FROM cart WHERE id = $cartid";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $productid = $row['productid'];
                    $sql1 = "SELECT * FROM product WHERE id=$productid";
                    $result1 = mysqli_query($con, $sql1);
                    $row1 = mysqli_fetch_assoc($result1);
                    ?>
                 <div class="image">
                     <img src="image/<?php echo $row1['img']; ?>" alt="">
                 </div>
                 <div class="info">
                     <div class="name"><?php echo $row1['nam']; ?></div>
                     <div class="quantity"><?php echo $row['quantity']; ?></div>
                     <div class="price">$<?php echo $row1['price']; ?>/-</div>
                     <?php
                        $price = $row1['price'];
                        $quantity = $row['quantity'];
                        $total = $price * $quantity;
                        ?>
                     <div class="price">Total: $<?php echo $total; ?>/-</div>
                 </div>
             </div>
             <?php date_default_timezone_set("Asia/Dhaka"); ?>
             <form class="cform" action="php/orderinsert.php" method="post">
             <input type="hidden" id="uid" name="uid" value="<?php echo $row['buyerid'] ?> ">
             <input type="hidden" id="pid" name="pid" value="<?php echo $row['productid'] ?> ">
             <input type="hidden" id="quantity" name="quantity" value="<?php echo $row['quantity'] ?> ">
             <input type="hidden" id="price" name="price" value="<?php echo $row1['price'] ?> ">
             <input type="hidden" id="totalprice" name="totalprice" value="<?php echo $total; ?> ">
             <input type="hidden" id="cartid" name="cartid" value="<?php echo $row['id'] ?> ">
                
             <input type="hidden" id="time" name="time" value="<?php echo date(" h:i || d-m-y"); ?> ">
                 <input type="text" name="name" id="name" placeholder="your name" required>
                 <input type="number" name="number" id="number" placeholder="your number" required>
                 <input type="text" name="road" id="road" placeholder="your area Road name" required>
                 <input type="text" name="area" id="area" placeholder="your area name" required>
                 --------------------------- payment ---------------------------
                 <p>Send Money In This Number : 01999923354</p>
                 <label for="paymethod">Which Method You using ?</label>
                 <select name="paymethod" id="paymethod">
                     <option value="bkash">Bkash</option>
                     <option value="nagad">Nagad</option>
                     <option value="rocket">Rocket</option>
                 </select>
                 <input type="number" name="snumber" id="snumber" placeholder="payment number" required>
                 <input type="text" name="tid" id="tid" placeholder="Transition id" required>
                 <input type="submit" value="Checkout" id="checkout" name="checkout">
             </form>
         </div>
     </div>
 </body>

 </html>