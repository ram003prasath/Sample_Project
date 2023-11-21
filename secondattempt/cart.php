<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title> Items added to your cart</title>
        <link rel="stylesheet" href="cartstyle.css">
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
                    <li><a href="order.php">Add More</a></li>
                </ul>
            </div>
            <h1>List of items added to your cart</h1>
            <div class="content">
                <table border="1">
                    <tr>
                        <td>ITEM</td>
                        <td>WEIGHT/COUNT</td>
                        <td>OUR PRICE</td>
                        <td>QUANTITY</td>
                        <td>RATE</td>
                    </tr>
                    <?php
                        global $total;
                        $total=0;
                        include 'dbconn.php';
                        $sql = "SELECT item,weightorcount,ourprice,qty,rate FROM cuorder";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $total=$total+$row["rate"];
                                echo '<tr>
                                            <td>'.$row["item"].'</td>
                                            <td>'.$row["weightorcount"].'</td>
                                            <td>'.$row["ourprice"].'</td>
                                            <td>'.$row["qty"].'</td>
                                            <td>'.$row["rate"].'</td>
                                    </tr>';
                            }
                        }
                    ?>
                </table>
            </div>
            <div>
                <?php
                    echo '<p style="margin-left:1006px;font-size:large;">Total:'.$total;
                    $sql="INSERT INTO totaltbl (total) VALUES('$total')";
                    if($conn->query($sql)==TRUE)
                    {
                        //echo "New record created successfully";
                    } 
                    else 
                    {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                ?>
            </div>
            <div class="sub">
                <a href="payment.php"><button>Purchase</button></a>
            </div>
        </div>
    </body>
</html>