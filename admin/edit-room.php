<?php include 'authentication/loginhandle.php' ?>
<?php include 'config.php' ?>
<?php
    $room_id = $_GET['roomid'];
    $editSql = "SELECT * FROM `rooms` WHERE id='$room_id'";
    $editResult = mysqli_query($conn, $editSql); 
    if(mysqli_num_rows($editResult) > 0) {
        while($row = mysqli_fetch_assoc($editResult)){      
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
            <main class="container-fluid">
                <form action="update-room-data.php" method="POST" enctype="multipart/form-data">
                    <h2 class="my-4 main-title">Update Room</h2>
                    <div class="basic-details">
                        <label class="my-2 fw-bold fst-italic fs-5"><small>Basic Details</small></label>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" value="<?php echo $room_id; ?>" name="updateroomid"
                                    type="hidden">
                                <input class="form-control" name="roomtitle" type="text" id="title1"
                                    placeholder="Room Title" value="<?php echo $row['title']; ?>" required />
                            </div>
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" name="roomaddress" type="text" id="address1"
                                    placeholder="Room Address / Location" value="<?php echo $row['address']; ?>"
                                    required>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-3">
                                <input class="form-control" name="roompricepernight"
                                    value="<?php echo $row['price']; ?>" type="text" id="price1"
                                    placeholder="Room Price / Per Night" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 mb-md-0 mb-3">
                                <textarea class="form-control" name="roomdescription" id="Textarea1" rows="4"
                                    placeholder="Room Description"
                                    required><?php echo $row['description']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="room-images">
                        <label class="my-2 fw-bold fst-italic fs-5"><small>Upload New Room Images</small></label>
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
                                    onselectstart="return false">
                                    <small>Total Guests Capacity</small>
                                </label>
                                <select class="form-select" id="validationTooltip04" name="guests">
                                    <?php echo '<option selected disabled>'. $row['guests'] .'</option>'; ?>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="beds" class="form-label fw-bold"
                                    onselectstart="return false">
                                    <small>Total Beds</small>
                                </label>
                                <select class="form-select" id="beds" name="beds">
                                    <?php echo '<option selected disabled>'. $row['beds'] .'</option>'; ?>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="bedrooms" class="form-label fw-bold"
                                    onselectstart="return false">
                                    <small>Total Bedrooms</small>
                                </label>
                                <select class="form-select" id="bedrooms" name="bedrooms">
                                    <?php echo '<option selected disabled>'. $row['bedrooms'] .'</option>'; ?>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-3">
                                <label for="bathrooms" class="form-label fw-bold"
                                    onselectstart="return false">
                                    <small>Total Bathrooms</small>
                                </label>
                                <select class="form-select" id="bathrooms" name="bathrooms">
                                    <?php echo '<option selected disabled>'. $row['bathrooms'] .'</option>'; ?>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" name="updateroom">Update Room</button>
                    <a href="rooms.php" class="btn btn-danger">Cancel</a>
                </form>
                <?php
                // update data closes brackets
                    }
                }
                ?>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php'; ?>
</body>

</html>