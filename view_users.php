<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
        <title>View Users</title>
        <link rel="stylesheet" type="text/css" href="css_files/view_users2.css">
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
            <li><a href=admin.php>Home</a></li>
            <li><a href="view_users.php">View Users</a></li>
            <li><a href="add_admin.php">Add Admin</a></li>
            <li><a href="upload_image.php">Add Food</a></li>
            <li><a href="view_food.php">View Food</a></li>
            <li><a href="admin_view_orders.php">View Orders</a></li>
        </ul>
</div>
</div>
<?php
    require("connection.php");
$sql_select="SELECT * FROM Users";

if($result = mysqli_query($conn, $sql_select)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-fluid' id='myTable'>";

        echo "<thread>" ;
            echo "<tr>";
                echo "<th>User ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email Address</th>";
                echo "<th>Password</th>";
                echo "<th>DOB</th>";
                echo "<th>Gender</th>";
                echo "<th>Role</th>";
                echo "<th>Delete</th>";
                echo "<th>Edit</th>";
            echo "</tr>";
            echo "</thread";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td><a href=deletedata.php?customer_id=" .$row['customer_id']. ">Delete</a>" . "</td>";
                echo "<td><a href=updatedata.php?customer_id=" .$row['customer_id']. ">Edit</a>" . "</td>";
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
