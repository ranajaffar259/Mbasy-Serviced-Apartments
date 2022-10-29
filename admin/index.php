<?php include 'authentication/loginhandle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/header.php' ?>
</head>
<body class="sb-nav-fixed">
    <!--navbar-->
    <?php include 'components/navbar.php' ?>
    <!--sidenav + main + footer-->
    <div id="layoutSidenav">
        <?php include 'components/sidenav.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="my-4 main-title">Dashboard</h2>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-light  mb-4">
                                <div class="card-body">Total Payments $523</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small stretched-link text-dark" href="#">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-light  mb-4">
                                <div class="card-body">Total Rooms Booked 8</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small stretched-link text-dark" href="#">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-light mb-4">
                                <div class="card-body">Total Room Avaliable 4</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small stretched-link text-dark" href="#">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-light mb-4">
                                <div class="card-body">Total Sales 12</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small stretched-link text-dark" href="#">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>
</html>
