<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
        <title>User view</title>
        <link rel="stylesheet" type="text/css" href="css_files/user_home.css">
        <link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
        
    </head>
<body class="body">
<header>
        <div class="header">
        
        <nav>
            <img id="logo" src="images/Marz'_Place.png">
            <ul>
    <li>    <a href="homepage.php" title="Home">HOME</a> </li>
    <li>    <a href="menu.php"+ SID title="Menu">MENU</a> </li>
    
    <li>    <a href="logout.php" title="Logout">LOGOUT</a> </li>
    <?php require_once('processlogin.php');echo $_SESSION['user'];?>
    </ul>
    </nav>

</div>
</header>
<main>
<div class="wrapper">
    <div class="sidenav">
        <h3>Welcome</h3>
        <ul>
            <li><a href=profile.php>Profile</a></li>
            <li><a href="user_order.php">Orders</a></li>
        </ul>
</div>
</div>
</main>
</body>
<br><br><br><br><br><br><br>
<footer class="footer">
    <div class="importantlinks">
        <h3>IMPORTANT</h3>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and conditions</a></li>
        </ul>
    </div>
    <div class="form">
                <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                    <form action="#" method="post">
                    <label for="mail">Sign up to receive the latest news <br> and information by email</label><br><br>
                <input type="email" id="mail" placeholder="Enter your email id"><br><br>
                <button type="submit">SUBSCRIBE</button>
            </form>
            </div>
            <div class="copyright">
    <p>Copyright 2021 Marz | All rights reserved.</p>
</div>
</footer>
</html>
