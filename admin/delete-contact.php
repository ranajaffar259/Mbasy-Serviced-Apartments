<?php
    include 'config.php';
    $user_id = $_GET['userid'];        
    $sql = "DELETE FROM `contacts` WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
    
    header("Location: contact.php");
    mysqli_close($conn);
?>