<?php
    include 'dbconn.php'; 
    include 'username.php'; 
    if(isset($_POST['submit']))
    {
        $weight=$_POST['weight'];
        $qty=$_POST['quantity'];
        if($weight=="90g")
        {
            $price=17;
        }
        if($weight=="10balls")
        {
            $price=35;
        }
        $rate=$qty*$price;
        $sql="SELECT item,weightorcount FROM cuorder";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                if ($row["item"]=='Fried Gram Balls')
                {
                    if($row["weightorcount"]==$weight)
                    {
                        $sql="DELETE FROM `cuorder` WHERE item='Fried Gram Balls'AND weightorcount='$weight';";
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
        $sql="INSERT INTO cuorder (username,item,weightorcount,qty,ourprice,rate)VALUES('$username','Fried Gram Balls','$weight','$qty','$price','$rate');";
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