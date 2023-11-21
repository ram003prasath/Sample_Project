<?php
    $servername="localhost";
    $usname="root";
    $password="";
    $db="second";
    $conn = new mysqli($servername, $usname, $password,$db);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully<br>";
?>