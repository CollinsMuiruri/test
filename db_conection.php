<?php

function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "1234";
    $db = "hotel";

    // Create connection
    $conn = new mysqli_connect($dbhost,$dbuser,$dbpassword,$db);

    // Check connection
    if(!$conn) {
        die("The Conection Has Failed : ".mysqli_connect_error());
    }
    echo "Connected to Database Successfully !";

};
?>