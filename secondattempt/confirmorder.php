<?php
    include "dbconn.php";
    $sql = "SELECT username FROM currentlog";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $username=$row["username"];
        }
    }
    $sql="INSERT INTO $username(username,item,weightorcount,qty,ourprice,rate,date) SELECT username,item,weightorcount,qty,ourprice,rate,now() FROM cuorder;";
    if($conn->query($sql)==TRUE)
        {
            //echo "New record created successfully";
        } 
    else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    $sql="INSERT INTO confimedord(username,item,weightorcount,qty,ourprice,rate,date) SELECT username,item,weightorcount,qty,ourprice,rate,date FROM $username;";
    if($conn->query($sql)==TRUE)
        {
            //echo "New record created successfully";
            include "order.php";
        } 
    else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
?>