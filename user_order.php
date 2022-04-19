<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
        <title>View Users</title>
        <link rel="stylesheet" type="text/css" href="css_files/order_info.css">
        <link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
        
    </head>
<body>
<header>
        <div class="header">
        
        <nav>
            <img id="logo" src="images/Marz'_Place.png">
            <ul>
    <li>    <a href="homepage.php" title="Home">HOME</a> </li>
    <li>    <a href="menu.php" title="Menu">MENU</a> </li>
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
<?php
    require("connection.php");
    $user_name = $_SESSION["user"];
$sql_select="SELECT * FROM order_items WHERE user_name='$username'";

if($result = mysqli_query($conn, $sql_select)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-fluid' id='myTable'>";

        echo "<thread>" ;
            echo "<tr>";
                echo "<th>Order Items ID</th>";
                echo "<th>Order ID</th>";
                echo "<th>User Name</th>";
                echo "<th>Food ID</th>";
                echo "<th>Food Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
                echo "<th>More info</th>";
            echo "</tr>";
            echo "</thread";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['order_items_id'] . "</td>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['Food_ID'] . "</td>";
                echo "<td>" . $row['Food_name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td><a href=user_order_info.php?order_id=" .$row['order_id']. ">Info</a>" . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
       ?> <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <?php
        mysqli_free_result($result);
    } else{
        echo "No records found.";
    }
} else{
    echo "ERROR " . mysqli_error($conn);
}

?>

</main>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
