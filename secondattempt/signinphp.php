<?php
    include 'dbconn.php';
    $username=$_POST['uname'];
    $pass=$_POST['Password'];
    $sql = "SELECT username,password FROM login";
    $result = $conn->query($sql);
    $f=0;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            //echo "username: " . $row["username"]."<br>"."password: " . $row["password"];
            if($username==$row['username']) 
            {
                if($pass==$row['password'])
                {
                    //echo "loged in";
                    $f=1;
                    break;
                }
            }
        }
    } 
    if($f==1)
    {
        include "order.php";
    }
    else
    {
        include "loginfailed.html";
    }
    $sql="TRUNCATE TABLE totaltbl;";
    if($conn->query($sql)==TRUE)
    {
        //echo "truncated successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql="TRUNCATE TABLE currentlog;";
    if($conn->query($sql)==TRUE)
    {
        //echo "truncated successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql="TRUNCATE TABLE totaltbl;";
    if($conn->query($sql)==TRUE)
    {
        //echo "truncated successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql="INSERT INTO currentlog (username) VALUES('$username')";
    if($conn->query($sql)==TRUE)
    {
        //echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>