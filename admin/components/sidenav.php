<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Dashboard</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-gauge"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Room</div>    
                <a class="nav-link" href="rooms.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-door-closed"></i></div>
                    Rooms
                </a>
                <a class="nav-link" href="upload-room.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    Upload Room
                </a>
                <div class="sb-sidenav-menu-heading">Facilities</div>
                <a class="nav-link" href="facilities.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-house-medical"></i></div>
                    Facilities
                </a>
                <a class="nav-link" href="upload-facilities.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    Upload Facilities
                </a>
                <div class="sb-sidenav-menu-heading">Contact</div>
                <a class="nav-link" href="contact.php">
                    <div class="sb-nav-link-icon d-flex justify-content-center align-items-center" style="width: 20px;"><i class="fa-solid fa-address-book"></i></div>
                    Contact Entries
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: <?php echo $_SESSION['username']; ?></div>
        </div>
    </nav>
</div>
