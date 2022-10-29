<?php include 'authentication/loginhandle.php' ?>
<?php include 'config.php' ?>
<?php
    // data insert to the database
    $upload = false;
    if (isset($_POST['uploadfacilities'])) {
        $fac_name = $_POST['fac_name'];
        $fac_img = $_FILES['fac_img']['name'];
        $fac_imgpath = $_FILES['fac_img']['tmp_name'];
        $facfolder = 'img/facilities/'.$fac_img;
        
        move_uploaded_file($fac_imgpath, $facfolder);
        
        $facSql = "INSERT INTO `facilities` (`facilities_name`,`facilities_image`) VALUES ('$fac_name','$facfolder')";
        $facResult = mysqli_query($conn, $facSql);

        if($facResult){
            $upload = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/header.php' ?>
</head>
<body class="sb-nav-fixed">
    <?php include 'components/navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include 'components/sidenav.php'; ?>
        <div id="layoutSidenav_content" class="justify-content-start">
            <?php 
            if ($upload) {
                echo '<div class="alert-success alert rounded-0 alert-dismissible fade show" role="alert">
                    Facilities Added Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            ?>
            <main class="container-fluid">    
                <h2 class="my-4 main-title">Upload Facilities</h2>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <input class="form-control mb-2" name="fac_name" type="text" required placeholder="Facilities Name">
                    <label class="form-label mt-2" onselectstart="return false">
                        Upload Facilities Icon<a class="text-dark ms-2" href="https://www.flaticon.com/free-icons/facilities" target="_blank">Download Icons</a>
                    </label>
                    <input class="form-control mb-2" name="fac_img" accept="png, jpg, jpeg" type="file" required>
                    <button type="submit" name="uploadfacilities" class="btn btn-success my-2">Upload Facilities</button>
                </form>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>
</html>
