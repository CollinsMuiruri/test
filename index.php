<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <title>Collins</title>
</head>
<style>
body{
    background-image: url(https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1829&q=1440);
    background-repeat: no-repeat;
}
</style>
<body>
        <nav>
                <div class="logo">
                    <h4>hotel</h4>
                </div>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="staff.html">Staff</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <!-- <li><a href="projects.html">Projects</a></li> -->
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
            <script src="app.js"></script>    
    <h1 class="header-site" style="text-align:center;font-size: 50px;">Welcome to the best hotel in Town !</h1>

<?php 
$query = "SELECT * FROM `Address Of Order`";
mysqli_query($conn, $query) or die('Error querying hotel database');

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
    echo $row['street'].' '.$row['city'].' '.$row['county'].'<br />';
}
mysqli_close($conn);
?>    
    <!-- <img class="image"
     src="https://images.unsplash.com/photo-1559769228-fa811c9a60f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="">
    <p style="text-align:center; font-size: 30px">This is the Login Page</p>
    <p style="text-align:center;font-size: 30px;">Input your username: </p> <input type="text">
    <p style="text-align:center;font-size: 30px;">Input your password: </p> <input type="password">
    <p style="text-align:center;font-size: 30px;">Visit my instagram here and follow me => <a href="https://instagram.com/collo_om_aza/">Conto</a> </p> -->
</body>
</html>