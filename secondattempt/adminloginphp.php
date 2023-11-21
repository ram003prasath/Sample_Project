<?php
    include 'dbconn.php';
    $sql = "SELECT adminname,password FROM admin";
    $result = $conn->query($sql);
    $adname=$_POST['adname'];
    $pass=$_POST['Password'];
    $f=0;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            //echo "username: " . $row["adminname"]."<br>"."password: " . $row["password"];
            if($adname==$row['adminname']) 
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
        include "admin.php";
    }
    else
    {
        include "adloginfailed.html";
    }