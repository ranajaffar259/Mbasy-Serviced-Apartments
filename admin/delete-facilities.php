<?php
    include 'config.php';
    $facilities_id = $_GET['delete'];        
    $sql = "DELETE FROM `facilities` WHERE facilities_id='$facilities_id'";
    $result = mysqli_query($conn, $sql);
    
    header("Location: facilities.php");
    mysqli_close($conn);
?>