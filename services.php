<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header -->
    <?php include 'components/header.php' ?>
</head>

<body>
    <?php include 'components/navbar.php' ?>
    <div class="container min-h-100">
        <div class="row">

            <?php
            $sql = "SELECT * FROM `rooms`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $default_image = $row['default_image'];
                    $guests = $row['guests'];
                    $bedrooms = $row['bedrooms'];
                    // displaying the services
                    echo ' <a href="service-view.php?roomserviceview=' . $id . '" class="services px-sm-3 text-decoration-none d-flex col-lg-6 text-dark" tabindex="0">
                        <div class="img-service" style="background-image:url(admin/' . $default_image . ')"></div>
                        <div class="details align-items-center mt-3 d-flex justify-content-between">
                            <div class="services-info me-2 d-flex">
                                <div class="font-weight-bold listing-title title text-start" title="' . $title . '">' . $title . '</div>
                                <div class="font-weight-light title-2 text-start">' . $guests . ' guests | ' . $bedrooms . ' bedrooms</div>
                            </div>
                            <div class="price d-flex align-items-end flex-column">
                                <div style="font-size: 14px; font-weight:300;">From</div>
                                <div class="text-right col-auto text-tall fs-3 ms-2 title-2 my-1" style="font-weight: 300;">' . $price . '</div>
                                <div style="font-size: 14px; font-weight:300;">Per night</div>
                            </div>
                        </div>
                    </a>';
                }
            }
            else {
                echo '<h5 class="text-center text-capitalize my-3">no rooms found</h5>';
            }
        ?>

        </div>
    </div>
    <!--footer-->
    <?php include 'components/footer.php' ?>
    <!-- scripts -->
    <?php include 'components/scripts.php' ?>
</body>

</html>