<?php
    include 'dbconn.php'; 
    include 'username.php'; 
    if(isset($_POST['submit']))
    {
        $price=16;
        $count="20balls";
        $qty=$_POST['quantity'];
        $rate=$qty*$price;
        $sql="DELETE FROM `cuorder` WHERE item='Honey Candy';";
        if($conn->query($sql)==TRUE)
        {
            //echo "<p>record deleted successfully</p>";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql="INSERT INTO cuorder (username,item,weightorcount,qty,ourprice,rate)VALUES('$username','Honey Candy','$count','$qty','$price','$rate');";
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