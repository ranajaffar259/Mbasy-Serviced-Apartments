<?php

include 'config.php';

$id = $_GET['roomserviceview'];
$sql = "SELECT * FROM `rooms` WHERE id='$id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $title = $row['title'];
    $address = $row['address'];
    $price = $row['price'];
    $description = $row['description'];
    $default_image = $row['default_image'];
    $slider_image1 = $row['slider_image1'];
    $slider_image2 = $row['slider_image2'];
    $slider_image3 = $row['slider_image3'];
    $guests = $row['guests'];
    $beds = $row['beds'];
    $bedrooms = $row['bedrooms']; 
    $bathrooms = $row['bathrooms'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/header.php'; ?>
</head>

<body>
    <!--header-->
    <?php include 'components/navbar.php' ?>

    <div class="container-md g-0">
        <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="admin/<?php echo $default_image; ?>" class="h-100 w-100 d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="admin/<?php echo $slider_image1; ?>" class="h-100 w-100 d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="admin/<?php echo $slider_image2; ?>" class="h-100 w-100 d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="admin/<?php echo $slider_image3; ?>" class="h-100 w-100 d-block">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <!-- other content + facilities -->
        <div class="row g-0">
            <div class="col-md-12">
                <div class="mt-sm-5 bg-faded-2 listing-general-info">
                    <div class="row g-0 separator">
                        <div class="col-xl p-sm-5 pt-5 px-2 listing-general-info-row separator">
                            <div class="d-flex justify-content-between">
                                <div class="listing-general-info-item me-0 me-md-4 mb-4 mb-md-0">
                                    <div class="icon-label d-flex align-items-center flex-column contained">
                                        <div style="width:40px;height:40px;" class="icon-wrap mb-2"><img
                                                class="w-100 h-100"
                                                src="https://pmwebsite-a8eae.firebaseapp.com/static/media/listing_guests.b6f69025.svg"
                                                alt="listing_guests"></div>
                                        <div class="wide">
                                            <div class="line-height-12"><small class="d-block d-sm-inline text-center">
                                                    <?php echo $guests; ?>
                                                </small> <small>guests</small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-general-info-item me-0 me-md-4 mb-4 mb-md-0">
                                    <div class="icon-label d-flex align-items-center flex-column contained">
                                        <div style="width:40px;height:40px;" class="icon-wrap mb-2"><img
                                                class="w-100 h-100"
                                                src="https://pmwebsite-a8eae.firebaseapp.com/static/media/listing_bedrooms.7ddd6a2a.svg"
                                                alt="listing_bedrooms"></div>
                                        <div class="wide">
                                            <div class="line-height-12"><small class="d-block d-sm-inline text-center">
                                                    <?php echo $bedrooms; ?>
                                                </small> <small>bedrooms</small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-general-info-item me-0 me-md-4 mb-4 mb-md-0">
                                    <div class="icon-label d-flex align-items-center flex-column contained">
                                        <div style="width:40px;height:40px;" class="icon-wrap mb-2"><img
                                                class="w-100 h-100"
                                                src="https://pmwebsite-a8eae.firebaseapp.com/static/media/listing_beds.7143f54e.svg"
                                                alt="listing_beds"></div>
                                        <div class="wide">
                                            <div class="line-height-12"><small class="d-block d-sm-inline text-center">
                                                    <?php echo $beds; ?>
                                                </small> <small>beds</small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-general-info-item">
                                    <div class="icon-label d-flex align-items-center flex-column contained">
                                        <div style="width:40px;height:40px;" class="icon-wrap mb-2"><img
                                                class="w-100 h-100"
                                                src="https://pmwebsite-a8eae.firebaseapp.com/static/media/listing_bathroom.31f189cc.svg"
                                                alt="listing_bathroom"></div>
                                        <div class="wide">
                                            <div class="line-height-12"><small class="d-block d-sm-inline text-center">
                                                    <?php echo $bathrooms; ?>
                                                </small> <small>bathrooms</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl py-5 text-center listing-address">
                            <div class="icon-label d-flex align-items-center flex-column contained">
                                <div class="icon-wrap mb-2"><img
                                        src="https://pmwebsite-a8eae.firebaseapp.com/static/media/listing_location.75e1758b.svg"
                                        alt="listing_location"></div>
                                <small class="fw-light">
                                    <?php echo $address; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-12">
                            <iframe class="w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77762.85290000484!2d-1.9336708544705792!3d52.47752147716896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870942d1b417173%3A0xca81fef0aeee7998!2sBirmingham%2C%20UK!5e0!3m2!1sen!2s!4v1656096527510!5m2!1sen!2s"
                                loading="fast" height="450" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator pt-5 px-2 px-md-5">
            <div>
                <div>
                    <div>
                        <h5>Check in and out</h5>
                        <p>Check in: 15:00<br>Check out: 11:00</p>
                    </div>
                    <div>
                        <h5>Prices</h5>
                        <div>
                            <p class="fs-6">
                                <?php echo $price; ?> /Day
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator pt-5">
                <div class="pt-3 p-lg-0">
                    <h5 class="mb-3">Facilities</h5>
                    <div class="row no-gutters">
                        <?php
                    $sql = "SELECT * FROM `facilities`";
                    $result = mysqli_query($conn, $sql);
                    $i = 1;
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            $facilities_id = $row['facilities_id'];
                            $facilities_name = $row['facilities_name'];
                            $facilities_image = $row['facilities_image'];
                            echo '
                            <div class="amenity col-md-4 col-sm-6 mb-3">
                                <div class="icon-label d-flex align-items-center flex-row">
                                    <div class="icon-wrap">
                                        <img width="30px" src="admin/'.$facilities_image.'">
                                    </div>
                                    <div class="ms-1">
                                        '.$facilities_name.'
                                    </div>
                                </div>
                            </div> 
                            ';
                        }
                    }  
                    else {
                        echo '<h6 class="text-capitalize my-3">no facilities found</h6>';
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="separator pt-5">
                <div>
                    <div class="row">
                        <div class="col-sm">
                            <h5 class="mb-3">Description</h5>
                            <div>
                                <p class="white-space-pre-wrap my-3">
                                    <?php echo $description; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- room -->
    <div class="container-fluid">
        <div class="mb-5">
            <h2 class="text-center my-5">Our Rooms</h2>
            <div class="container-md g-0">
                <div class="owl-carousel owl-theme">
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
                                echo '
                                <div class="item">
                                <a href="service-view.php?roomserviceview=' . $id . '" class="services flex-column text-decoration-none d-flex justify-content-center col-sm-4 text-dark" tabindex="0">
                                  <div class="suggested-item mb-3" style="background-image: url(admin/'.$default_image.');"></div>
                                  <div class="details d-flex justify-content-between">
                                        <div class="services-info flex-column me-2 d-flex" style="width: 150px;">
                                           <div class="font-weight-bold listing-title title text-start" title="' . $title . '">
                                                 <p class="text-overflow-hidden">' . $title . '</p>
                                             </div>
                                             <div class="font-weight-light title-2 text-start">' . $guests . ' guests | ' . $bedrooms . ' bedrooms</div>
                                         </div>
                                         <div class="price d-flex align-items-end">
                                             <div style="font-size: 14px; font-weight:300;">From</div>
                                             <div class="text-right col-auto text-tall fs-5 ms-2 title-2" style="font-weight: 300;">'.$price.'</div>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                                ';
                            }
                        }
                        else {
                            echo '<h4 class="text-center text-danger my-3">No Rooms Added</h4>';
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php /* closes while loop */ } ?>
    <!--Footer-->
    <?php include 'components/footer.php' ?>
    <!-- Scripts -->
    <?php include 'components/scripts.php' ?>
</body>

</html>