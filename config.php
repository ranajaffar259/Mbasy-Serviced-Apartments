<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mbasy_db";
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Connection checking...
    if(!$conn){
        die("Failed to connect the DB");
    }
?>