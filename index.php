<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/header.php'; ?>
</head>

<body>
    <!-- navbar -->
    <?php include 'components/navbar.php'; ?>
    <!-- Banner -->
    <div class="banner"></div>
    <!-- About us -->
    <div id="about">
        <div class="container">
            <h2 class="mb-4">Our Vision</h2>
            <div class="row justify-content-center g-0">
                <div class="col-md-7">
                    <p class="wide mx-auto text-center">We at MBASY flourish on understanding the importance of
                        delivering the highest quality of hospitality to our guests. We deliver sort after
                        properties available in prime locations finished to the highest standards in order to
                        fulfill the requirements of our guests.Our properties are catered for all your needs whether
                        you are looking for a romantic getaway, business trip, or well-deserved time alone, we at
                        MBASY will provide you accommodation to ensure your stay is an unforgettable one.AT MBASY
                        our team is highly experienced and professional, in order to provide our guests with
                        exceptional service who are able to help you 24/7.MBASY is the perfect choice for your stay.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- rooms -->
    <div id="rooms">
        <div class="container-fluid">
            <div class="suggested-serice mb-5">
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
                                        <div class="services-info flex-column me-2 d-flex">
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
                            echo '<h5 class="text-center text-capitalize my-3">no rooms found</h5>';
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us -->
    <div id="contact">
        <h2 class="mb-3 mb-md-4 text-center">CONTACT US</h2>
        <div id="contact-section">
            <?php
                $insert = false;
                if (isset($_POST['submitform'])) {
                    $name =  $_POST["name"];
                    $email = $_POST["email"];
                    $subject = $_POST["subject"];
                    $description = $_POST["description"];

                    $sql = "INSERT INTO `contacts` (`name`, `email`, `subject`, `description`, `date_time`) 
                    VALUES ('$name', '$email', '$subject', '$description', current_timestamp())";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $insert = true;
                    }
                }
            ?>
            <?php
                if ($insert) {
                    echo '<div class="thanks my-5 d-flex justify-content-center align-items-center flex-column">
                    <img src="img/form_sent_success.svg" alt="">
                    <h2>Thanks</h2>
                    <p>Your request has been successfully sent. We will get back to you shortly</p>
                    </div>';
                }
                else{                   
                    echo '
                    <form action="index.php#contact" method="POST" class="container contact-form">
                        <p class="text-center bg-dark rounded fs-6 mb-3">Feel free to contact us and we will get back to you shortly</p>
                        <div class="row g-0">
                            <div class="form-group mb-3">
                                <input class="form-control form-control-lg" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control form-control-lg" name="email" placeholder="Email" required>
                            </div>
                   
                            <div class="form-group mb-3">
                                <input class="form-control form-control-lg" name="subject" placeholder="Subject" required>
                            </div>
                  
                            <div class="form-group mb-3">
                                <textarea placeholder="Message (Optional)" class="form-control form-control-lg" name="description" rows="10"></textarea>
                            </div>
                            <button type="submit" name="submitform">SUBMIT</button>
                        </div>
                    </form>
                    ';
                }
            ?>

        </div>
    </div>
    <!--Footer-->
    <?php include 'components/footer.php' ?>
    <!-- Scripts -->
    <?php include 'components/scripts.php' ?>
</body>

</html>