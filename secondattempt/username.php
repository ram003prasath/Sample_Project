<?php
    global $username;
    include 'dbconn.php';
    $sql="SELECT * FROM `currentlog` WHERE 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $username=$row['username'];
        }
    }
?>