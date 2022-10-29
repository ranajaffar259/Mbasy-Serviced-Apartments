<?php include 'authentication/loginhandle.php' ?>
<?php include 'config.php' ?>
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
            <main class="container-fluid">
                <h2 class="my-4 main-title">Update Facilities</h2>
                <?php
                    $fac_id = $_GET['editfac'];
                    $sql = "SELECT * FROM `facilities` WHERE facilities_id='$fac_id'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <form action="update-facilities-data.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="updatefacid" value="<?php echo $row['facilities_id'];?>">
                    <input class="form-control mb-2" name="updatefacname" type="text"
                        value="<?php echo $row['facilities_name'];?>" required placeholder="Facilities Name">
                    <label class="form-label mt-2" onselectstart="return false">
                        Upload New Facilities Icon<a class="text-dark ms-2"
                            href="https://www.flaticon.com/free-icons/facilities" target="_blank">Download Icons</a>
                    </label>
                    <input class="form-control mb-2" name="updatefacimg" accept="png, jpg, jpeg" type="file" required>
                    <button type="submit" name="updatefacilities" class="btn btn-success my-2">Update
                        Facilities</button>
                    <a href="facilities.php" class="btn btn-danger">Cancel</a>
                </form>
                <?php
                    }
                }
                ?>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>

</html>