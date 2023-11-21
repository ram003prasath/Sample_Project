<?php
    include 'dbconn.php';
    global $name,$address,$phno,$email;
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phno=$_POST['number'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $sql="SELECT username FROM login";
    $result = $conn->query($sql);
    global $f;
    $f=0;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            if($row['username']==$username)
            {
                $f=1;
                include("registeranuser.php");
            } 
        }
    }
    if($f==0)
    {
        $sql="INSERT INTO login (name,address,username,password,email,phno) VALUES('$name','$address','$username','$pass','$email','$phno')";
        if($conn->query($sql)==TRUE)
        {
            //echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $sql = "CREATE TABLE $username (username varchar(20),item varchar(20),weightorcount varchar(20),ourprice int(100),qty int(200),rate int(255),date date,status varchar(20));";
        if($conn->query($sql)==TRUE)
            {
                //echo "New record created successfully";
            }    
        else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        include "loginsuccess.html";
    }
?>