<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="adminstyle.css">
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
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="adminlogin.html">Signout</a></li>
                    <li><a href="todayorders.php">Today Orders</a></li>
                    <li><a href="searchby.php">Search username/status</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="search">
                    <form action="#" method="post">
                        <label>Search by date :</label>
                        <input type="date" name="date" placeholder="yy-mm-dd" style="height:25px;color:black;font-size:large;">
                        <button type="submit" style="color:green;font-size:large;cursor:pointer;">Go</button>
                    </form>
                </div>
                <table border="1">
                    <tr>
                        <td>S.NO</td>
                        <td>USERNAME</td>
                        <td>ITEM</td>
                        <td>WEIGHT/COUNT</td>
                        <td>OUR PRICE</td>
                        <td>QUANTITY</td>
                        <td>RATE</td>
                        <td>DATE</td>
                        <td>STATUS</td>
                    </tr>
                    <?php
                    if(isset($_POST['date']))
                    {
                        $sno=0;
                        include 'dbconn.php';
                        $date=$_POST['date'];
                        echo '<h1>Orders on '.$date.'</h1>';
                        $sql="SELECT * FROM confimedord WHERE date='$date' ORDER BY date DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $sno=$sno+1;
                                echo '<tr>
                                            <td>'.$sno.'</td>
                                            <td>'.$row["username"].'</td>
                                            <td>'.$row["item"].'</td>
                                            <td>'.$row["weightorcount"].'</td>
                                            <td>'.$row["ourprice"].'</td>
                                            <td>'.$row["qty"].'</td>
                                            <td>'.$row["rate"].'</td>
                                            <td>'.$row["date"].'</td>
                                            <td>'.$row["status"].'</td>
                                    </tr>';
                            }
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>