<?php
if (isset($_POST['updatefacilities'])) {
    include 'config.php';
    $fac_id = $_POST['updatefacid'];
    $fac_name = $_POST['updatefacname'];
    $fac_img = $_FILES['updatefacimg']['name'];
    $fac_imgpath = $_FILES['updatefacimg']['tmp_name'];
    $facfolder = 'img/facilities/'.$fac_img;
    
    move_uploaded_file($fac_imgpath, $facfolder);
    
    $facSql = "UPDATE `facilities` SET `facilities_name`='$fac_name',`facilities_image`='$facfolder' WHERE facilities_id='$fac_id'";
    $facResult = mysqli_query($conn, $facSql);

    if($facResult){
        header("Location: facilities.php");
    }
}
?>