<?php
    include 'dbconn.php'; 
    include 'username.php'; 
    if(isset($_POST['submit']))
    {
        $weight=$_POST['weight'];
        $qty=$_POST['quantity'];
        if($weight=="50g")
        {
            $price=18;
        }
        if($weight=="150g")
        {
            $price=35;
        }
        if($weight=="350g")
        {
            $price=70;
        }
        $rate=$qty*$price;
        $sql="SELECT item,weightorcount FROM cuorder";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                if ($row["item"]=='Manila Cake')
                {
                    if($row["weightorcount"]==$weight)
                    {
                        $sql="DELETE FROM `cuorder` WHERE item='Manila Cake'AND weightorcount='$weight';";
                        if($conn->query($sql)==TRUE)
                        {
                            //echo "<p>record deleted successfully</p>";
                        } 
                        else 
                        {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        
                    }
                }

            }
        }
        $sql="INSERT INTO cuorder (username,item,weightorcount,qty,ourprice,rate)VALUES('$username','Manila Cake','$weight','$qty','$price','$rate');";
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
