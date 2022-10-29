<?php
    // Logout

    // starting session
    session_start();
    
    // destroy session
    session_destroy();
    
    // location after logged out
    header("Location: login.php");
?>