<?php
    include 'config.php';
    $room_id = $_GET['roomid'];
    $sql = "DELETE FROM `rooms` WHERE room_id='$room_id'";
    $result = mysqli_query($conn, $sql);
    
    header("Location: rooms.php");
    mysqli_close($conn);
?>