<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Payment</title>
        <link rel="stylesheet" href="payment.css">
    </head>
    <body>
        <div class="banner">
            <div class="marq">
                <marquee direction="left" scrollamount="10s" behavior=alternate>
                    Mayil Mark Kadalai Mittai,Manufactued And Marketed By Ravi Agencies
                </marquee>
            </div>
            <div class="navbar">
                <img src="photos/logo.jpeg" class="logo">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="order.php">Order</a></li>
                </ul>
            </div>
            <h1 style="text-align:center;color:#fff;">Transaction Amount:
                <?php
                    include('dbconn.php');
                    $sql="SELECT total FROM totaltbl";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
                            $total=$row['total'];
                        }
                    } 
                    echo $total;
                ?>
            </h1>
            <div class="container">
                <div class="card">
                    <div class="front">
                        <div class="image">
                            <img src="photos/chipicon.jpg" alt="" style="border-radius: 10px;">
                            <img src="photos/visaicon.jpg" alt="" style="border-radius: 10px;">
                        </div>
                        <div class="cardnumberbox"> ################</div>
                        <div class="flexbox">
                            <div class="box">
                                <span>card holder</span>
                                <div class="cardholdername">full name</div>
                            </div>
                            <div class="box">
                                <span>expires</span>
                                <div class="expiration">
                                    <span class="expmonth">mm</span>
                                    <span class="expyear">yy</span>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="back">
                        <div class="stripe"></div>
                        <div class="box">
                            <span>CVV</span>
                            <div class="cvvbox">
                                
                            </div>
                            <img src="photos/visaicon.jpg" alt="img" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
                <form action="confirmorder.php" method="post">
                    <div class="inputbox">
                        <span>Card number</span>
                        <input type="number" minlength="1000000000000000" maxlength="9999999999999999" class="cardnumber" required placeholder="Enter card number">
                    </div>
                    <div class="inputbox">
                        <span>Card holder</span>
                        <input type="text" class="cardholder" required placeholder="Enter card holder name">
                    </div>
                    <div class="flexbox">
                        <div class="inputbox">
                            <span>Expiration mm</span>
                            <select name="" id="" class="month" required aria-placeholder="select month">
                                <option value="month" selected disabled>Month</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="inputbox">
                            <span>Expiration yy</span>
                            <select name="" id="" class="year" required aria-placeholder="select year">
                                <option value="month" selected disabled>Month</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                            </select>
                        </div>
                        <div class="inputbox">
                            <span>CVV</span>
                            <input type="number" minlength="100" maxlength="9999" class="cvv" required placeholder="Enter cvv">
                        </div>
                    </div>
                    <input type="submit" value="submit" class="submit">
                </form>
            </div>
        </div>
        <script>
            document.querySelector('.cardnumber').oninput=()=>{
                document.querySelector('.cardnumberbox').innerText=document.querySelector('.cardnumber').value;
            }
            document.querySelector('.cardholder').oninput=()=>{
                document.querySelector('.cardholdername').innerText=document.querySelector('.cardholder').value;
            }
            document.querySelector('.month').oninput=()=>{
                document.querySelector('.expmonth').innerText=document.querySelector('.month').value;
            }
            document.querySelector('.year').oninput=()=>{
                document.querySelector('.expyear').innerText=document.querySelector('.year').value;
            }
            document.querySelector('.cvv').onmouseenter=()=>{
                document.querySelector('.front').style.transform='perspective(1000px) rotateY(-180deg)';
                document.querySelector('.back').style.transform='perspective(1000px) rotateY(0deg)';
            }
            document.querySelector('.cvv').onmouseleave=()=>{
                document.querySelector('.front').style.transform='perspective(1000px) rotateY(0deg)';
                document.querySelector('.back').style.transform='perspective(1000px) rotateY(180deg)';
            }
            
            document.querySelector('.cvv').oninput=()=>{
                document.querySelector('.cvvbox').innerText=document.querySelector('.cvv').value;
            }
        </script>
    </body>
</html>