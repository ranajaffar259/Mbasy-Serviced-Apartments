<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // then you can visit the dashboard
}
else{
    header("Location: authentication/login.php");
}
?>