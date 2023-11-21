<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Order</title>
        <link rel="stylesheet" href="orderstyle.css">
    </head>
    <body>
        <div class="banner">
            <div class="marq">
                <marquee direction="left" scrollamount="10s" behavior=alternate>
                    Mayil Mark Kadalai Mittai,Manufactued And Marketed By Ravi Agencies
                </marquee>
            </div>
            <div class="navbar">
                <img src="photos/logo.jpeg" class="logo">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="orderhistory.php">Order History</a></li>
                    <li><a href="signin.html">Signout</a></li>
                </ul>
            </div>
            <div class="content">
                <h1> Place Your Order</h1>
                <?php
                    include 'dbconn.php'; 
                    if(isset($cart) and $cart==1)
                    {
                        echo '<a href="cart.php" class="selcart" style="text-decoration: none;position: sticky;top: 0;">Click me to see your cart</a>';
                    }
                    else
                    {
                        $sql="TRUNCATE TABLE cuorder;";
                        if($conn->query($sql)==TRUE)
                        {
                            //echo "<p>truncated successfully</p>";
                        } 
                        else 
                        {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                ?>
                <table class="tabl">
                    <tr>
                        <td>
                            <img src="photos/pic1.jpg" alt="groundnut balls" class="pic">
                            <br>Groundnut Sweet<br><br>
                            Available prices<br>
                            M.R.P: 25 , 50 , 100<br>
                            Our Price: 18 , 35 , 70<br>
                            Respectively
                            <br><a href="groundnut.php"><button class="cart">Add to cart</button></a>
                        </td>

                        <td>
                            <img src="photos/pic2.jpg" alt="Chikki" class="pic">
                            <br>Manila Cake<br><br>
                            Available prices<br>
                            M.R.P: 25 , 50 , 100<br>
                            Our Price: 18 , 35 , 70<br>
                            Respectively
                            <br><a href="manilacake.php"><button class="cart">Add to cart</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="photos/pic3.jpg" alt="groundnut balls" class="pic">
                            <br>Puffed Rice Masala<br><br>
                            M.R.P: 30<br>
                            Our Price: 16
                            <br><a href="puffedrice.php"><button class="cart">Add to cart</button></a>
                        </td>
                        <td>
                            <img src="photos/pic4.jpg" alt="groundnut balls" class="pic">
                            <br>Puffed Rice Balls<br><br>
                            M.R.P: 30<br>
                            Our Price: 16
                            <br><a href="puffedriceballs.php"><button class="cart">Add to cart</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="photos/pic5.jpg" alt="groundnut balls" class="pic">
                            <br>Honey Candy<br><br>
                            M.R.P: 20<br>
                            Our Price: 16
                            <br><a href="honey.php"><button class="cart">Add to cart</button></a>
                        </td>
                        <td>
                            <img src="photos/pic6.jpg" alt="groundnut balls" class="pic">
                            <br>Fried Gram Balls<br><br>
                            Available prices<br>
                            M.R.P: 25 , 50<br>
                            Our Price: 17 , 35<br>
                            Respectively
                            <br><a href="friedgram.php"><button class="cart">Add to cart</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="photos/pic7.jpg" alt="groundnut balls" class="pic">
                            <br>Groundnut Balls<br><br>
                            M.R.P: 25 , 50<br>
                            Our Price: 18 , 35<br>
                            Respectively
                            <br><a href="groundnutballs.php"><button class="cart">Add to cart</button></a>
                        </td>
                        <td>
                            <img src="photos/pic8.jpg" alt="groundnut balls" class="pic">
                            <br>Sesame Balls<br><br>
                            M.R.P: 25<br>
                            Our Price: 18
                            <br><a href="sesameballs.php"><button class="cart">Add to cart</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="photos/pic9.jpg" alt="groundnut balls" class="pic">
                            <br>Sesame Cake<br><br>
                            M.R.P: 25<br>
                            Our Price: 18
                            <br><a href="sesamecake.php"><button class="cart">Add to cart</button></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>