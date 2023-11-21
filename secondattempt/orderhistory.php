<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Order history</title>
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
                    <li><a href="order.php">Order</a></li>
                    <li><a href="signin.html">Signout</a></li>
                </ul>
            </div>
            <h1>Order History</h1>
            <div class="content">
                <table border="1">
                    <tr>
                        <td>ITEM</td>
                        <td>WEIGHT/COUNT</td>
                        <td>OUR PRICE</td>
                        <td>QUANTITY</td>
                        <td>RATE</td>
                        <td>DATE</td>
                        <td>STATUS</td>
                    </tr>
                    <?php
                        include 'dbconn.php';
                        $sql = "SELECT username FROM currentlog";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) 
                                    {
                                        $username=$row["username"];
                                    }
                            } 
                        $sql = "SELECT item,weightorcount,ourprice,qty,rate,date,status FROM $username";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                echo '<tr>
                                            <td>'.$row["item"].'</td>
                                            <td>'.$row["weightorcount"].'</td>
                                            <td>'.$row["ourprice"].'</td>
                                            <td>'.$row["qty"].'</td>
                                            <td>'.$row["rate"].'</td>
                                            <td>'.$row["date"].'</td>
                                            <td>'.$row["status"].'
                                    </tr>';
                            }
                        }
                    ?>
                </table>
            </div>
    </body>
</html>