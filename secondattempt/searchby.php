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
                    <li><a href="searchdate.php">Search date</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="search">
                    <form action="searchby.php" method="post">
                        <label>Search by date :</label>
                        <!--<input type="text" name="search" placeholder="Enter Username" style="height:25px;color:black;font-size:large;">!-->
                        <?php
                            include 'dbconn.php';
                            global $username,$f;
                            echo '<select name="search" style="height:25px;color:black;font-size:large;">
                            <option value="Username" selected disabled>Username</option>';
                                $sql = "SELECT username FROM login";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        $username=$row['username'];
                                       
                                        echo '<option value="'.$username.'">'.$username.'</option>';
                                    }
                                }
                            
                        echo '</select>
                        <button type="submit" style="color:green;font-size:large;cursor:pointer;">Go</button>
                    </form>
                </div>';
                if(isset($_POST['search']))
                {   
                    $f=1;
                    $username=$_POST['search'];
                    $sql="INSERT INTO totaltbl (username) VALUES('$username')";
                    if($conn->query($sql)==TRUE)
                    {
                        //echo "New record created successfully";
                    } 
                    else 
                    {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                echo'<h1>Orders done by '.ucfirst($username).'</h1>
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
                    </tr>';
                        $sno=0;
                        include 'dbconn.php';
                        $sql = "SELECT * FROM confimedord where username='$username' ORDER BY date DESC;";
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
                                    $username=$row['username'];
                            }
                        }
                    }
                if($f==1)
                {
                 echo   '<form action="status.php" method="post">
                        <label><br>Update Status :</label>
                        <select name="status" style="height:25px;color:black;font-size:large;padding-left:15px;">
                            <option value="Status" selected disabled>Status</option>
                            <option value="Preparing">Preparing</option>
                            <option value="Packing">Packing</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                        <label>Enter date:</label>
                        <input type="date" name="date" placeholder="Enter the date" style="height:25px;color:black;font-size:large;">
                        <button type="submit" style="color:green;font-size:large;cursor:pointer;">Go</button>
                    </form>';
                }
                ?>
                </table>
            </div>
        </div>
    </body>
</html>