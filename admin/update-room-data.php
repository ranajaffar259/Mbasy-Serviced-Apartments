<?php
if(isset($_POST['updateroom'])){
    include 'config.php'; 

    // basic room details
    $updateroomid = $_POST['updateroomid'];
    $roomtitle = $_POST['roomtitle'];
    $roomaddress = $_POST['roomaddress'];
    $roompricepernight = $_POST['roompricepernight'];
    $roomdescription = $_POST['roomdescription'];

    // default images
    $roomdefaultimage = $_FILES['roomdefaultimage']['name'];
    $roomdefaultpath = $_FILES['roomdefaultimage']['tmp_name'];
    $folder = 'img/default-room-image/'.$roomdefaultimage;

    // slider images
    $roomsliderimage1 = $_FILES['roomsliderimage1']['name'];
    $sliderimagepath1 = $_FILES['roomsliderimage1']['tmp_name'];
    $folderslider1 = 'img/slider/'.$roomsliderimage1;

    $roomsliderimage2 = $_FILES['roomsliderimage2']['name'];
    $sliderimagepath2 = $_FILES['roomsliderimage2']['tmp_name'];
    $folderslider2 = 'img/slider/'.$roomsliderimage2;

    $roomsliderimage3 = $_FILES['roomsliderimage3']['name'];
    $sliderimagepath3 = $_FILES['roomsliderimage3']['tmp_name'];
    $folderslider3 = 'img/slider/'.$roomsliderimage3;

    // other details
    $guests = $_POST['guests'];
    $beds = $_POST['beds'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];

    // default img
    move_uploaded_file($roomdefaultpath, $folder);

    // slider img
    move_uploaded_file($sliderimagepath1, $folderslider1);
    move_uploaded_file($sliderimagepath2, $folderslider2);
    move_uploaded_file($sliderimagepath3, $folderslider3);

    // update sql query
    $sql = "UPDATE rooms SET `title`='$roomtitle', `address`='$roomaddress', `price`='$roompricepernight',`description`='$roomdescription', `default_image`='$folder', `slider_image1`='$folderslider1', `slider_image2`='$folderslider2',`slider_image3`='$folderslider3',`guests`='$guests',`beds`='$beds',`bedrooms`='$bedrooms',`bathrooms`='$bathrooms' WHERE id='$updateroomid'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: rooms.php");
    }
    else{
        echo "error in your code";
    }
}
?>