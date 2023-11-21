<?php
include 'dbconn.php';
                     if(isset($_POST['status']))
                        {
                            $status=$_POST['status'];
                            $date=$_POST['date'];
                            $sql = "SELECT username FROM totaltbl";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $user=$row['username'];      
                                }
                            }
                            $sql="UPDATE $user SET status='$status' WHERE username='$user' AND date='$date'";
                            if($conn->query($sql)==TRUE)
                            {
                                //echo "updated successfully";
                            } 
                            else 
                            {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $sql="UPDATE confimedord SET status='$status' WHERE username='$user' AND date='$date'";
                            if($conn->query($sql)==TRUE)
                            {
                                //echo "updated successfully";
                            } 
                            else 
                            {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                        include 'admin.php';
                    ?>