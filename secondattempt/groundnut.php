<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="groundnutstyle.css">
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
                    <li><a href="order.php">Order</a></li>
                </ul>
            </div>
            <div class="container">
                <img class="item" src="photos/pic1.jpg" alt="groundnutsweet">
                <h1>Groundnut Sweets</h1>
                <form action="groundnutphp.php" method="post">
                    <label>Net Weight:
                        <select class="sel" name="weight">
                            <option class="opt" value="50g">50g</option>
                            <option class="opt" value="150g">150g</option>
                            <option class="opt" value="350g">350g</option>
                        </select>
                    </label><br>
                    <label>Quantity:<input type="number" name="quantity" min="1" required></label>
                    <input type="submit" value="Add To Cart" name="submit">
                </form>
            </div>
        </div>
    </body>
</html>
