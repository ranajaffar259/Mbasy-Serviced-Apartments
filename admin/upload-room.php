<?php include 'authentication/loginhandle.php' ?>
<?php include 'config.php' ?>
<?php
$showAlert = false;

if (isset($_POST['uploadroom'])){
    
    // basic room details
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
    $chooseguests = $_POST['chooseguests'];
    $choosebeds = $_POST['choosebeds'];
    $choosebedrooms = $_POST['choosebedrooms'];
    $choosebathrooms = $_POST['choosebathrooms'];
    
    // default img
    move_uploaded_file($roomdefaultpath, $folder);
    
    // slider img
    move_uploaded_file($sliderimagepath1, $folderslider1);
    move_uploaded_file($sliderimagepath2, $folderslider2);
    move_uploaded_file($sliderimagepath3, $folderslider3);

    // insert into the table
    $sql = "INSERT INTO `rooms` (`title`, `address`, `price`, `description`, `default_image`, `slider_image1`, `slider_image2`, `slider_image3`, `guests`, `beds`, `bedrooms`, `bathrooms`) VALUES ('$roomtitle','$roomaddress','$roompricepernight','$roomdescription','$folder','$folderslider1','$folderslider2','$folderslider3','$chooseguests','$choosebeds','$choosebedrooms','$choosebathrooms')";

    $result = mysqli_query($conn, $sql);
    
    if ($result) {
      // if room upload successfully then we will show alert in under the navbar
        $showAlert = true;
    }
                            
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/header.php'; ?>
</head>

<body class="sb-nav-fixed">
    <?php include 'components/navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include 'components/sidenav.php'; ?>
        <div id="layoutSidenav_content">
            <?php
            if ($showAlert) {
            echo '<div class="alert-success alert rounded-0 alert-dismissible fade show" role="alert">
            Room Uploaded Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
            ?>
            <main class="container-fluid">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <h2 class="my-4 main-title">Upload Room</h2>
                    <div class="basic-details">
                        <label class="my-2 fw-bold fst-italic fs-5"><small>Basic Details</small></label>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" name="roomtitle" type="text" id="title1"
                                    placeholder="Room Title" required>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" name="roomaddress" type="text" id="address1"
                                    placeholder="Room Address / Location" required>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" name="roompricepernight" type="text" id="price1"
                                    placeholder="Room Price / Per Night" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-md-0 mb-3">
                                <textarea class="form-control" name="roomdescription" id="Textarea1" rows="4"
                                    placeholder="Room Description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="room-images">
                        <label class="my-2 fw-bold fst-italic fs-5"><small>Room Images</small></label>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-md-0 mb-3 d-flex justify-content-center flex-column">
                                <label class="mb-2 fw-bold"><small>Default</small></label>
                                <input class="form-control" name="roomdefaultimage" type="file" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mb-md-0 mb-3">
                                <label class="fw-bold"><small>Slider</small></label>
                                <div class="d-flex flex-column flex-md-row">
                                    <input class="form-control my-2 me-2" name="roomsliderimage1" type="file" required>
                                    <input class="form-control my-2 me-2" name="roomsliderimage2" type="file" required>
                                    <input class="form-control my-2" name="roomsliderimage3" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other-details">
                        <label class="my-2 fw-bold fst-italic fs-5"><small>Other Details</small></label>
                        <div class="row mb-3">
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="validationTooltip04" class="form-label fw-bold"
                                    onselectstart="return false"><small>Total
                                        Guests Capacity</small></label>
                                <select class="form-select" id="validationTooltip04" required name="chooseguests">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="validationTooltip05" class="form-label fw-bold"
                                    onselectstart="return false"><small>Total
                                        Beds</small></label>
                                <select class="form-select" id="validationTooltip05" required name="choosebeds">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="validationTooltip06" class="form-label fw-bold"
                                    onselectstart="return false"><small>Total
                                        Bedrooms</small></label>
                                <select class="form-select" id="validationTooltip06" required name="choosebedrooms">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="validationTooltip07" class="form-label fw-bold"
                                    onselectstart="return false"><small>Total
                                        Bathrooms</small></label>
                                <select class="form-select" id="validationTooltip07" required name="choosebathrooms">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-4">
                        <a href="upload-facilities.php" class="text-dark fw-bold fs-6"><small>Upload
                                Facilities</small></a>
                    </div>
                    <button class="btn btn-success mb-5" name="uploadroom">Publish Room</button>
                </form>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php'; ?>
</body>

</html>