<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <title>Register</title>
        <link href="registyle.css" rel="stylesheet">
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
                </ul>
            </div>
            <div class="container">
                <h1>Register</h1>
                <form action="signup.php" method="post">
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Enter name" required>
                    <p>Address</p>
                    <input type="text" name="address" placeholder="Enter address" required>
                    <p>Ph.no</p>
                    <input type="number" name="number" placeholder="Enter phone number" required>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Enter email id" required>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter desired username" required>
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Enter desired password" required><br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </body>
</html>