<?php
    include 'dbconn.php'; 
    include 'username.php'; 
    if(isset($_POST['submit']))
    {
        $price=16;
        $weight="90g";
        $qty=$_POST['quantity'];
        $rate=$qty*$price;
        $sql="DELETE FROM `cuorder` WHERE item='Puffed Rice Masala';";
        if($conn->query($sql)==TRUE)
        {
            //echo "<p>record deleted successfully</p>";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql="INSERT INTO cuorder (username,item,weightorcount,qty,ourprice,rate)VALUES('$username','Puffed Rice Masala','$weight','$qty','$price','$rate');";
        if($conn->query($sql)==TRUE)
        {
            //echo "<p>Order is placed successfully</p>";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        global $cart;
        $cart=1;
        include 'order.php';
    }
?>