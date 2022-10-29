<?php
if (isset($_POST['login'])) {
    include '../config.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM `admin_login_user` WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($result) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user;
            // link will change on production
            header("Location: /mbasyservicedapartments/admin/index.php");
        } else {
            // link will change on production
            header("Location: /mbasyservicedapartments/admin/authentication/login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--data tables cdn-->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--style sheets-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/custom-style.css" rel="stylesheet" />
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <!--font awesome icons cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!--title-->
    <title>Mbasy - Admin</title>
</head>

<body class="bg-light">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content" class="d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="card shadow-sm border rounded mx-3 px-0" style="width:360px;">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2 fs-3">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fa-solid fa-user position-absolute bg-light border"
                                        style="padding: 12px;"></i>
                                    <input type="text" class="form-control py-2 ps-5 bg-light" name="username"
                                        placeholder="Username" required>
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fa-solid fa-key position-absolute bg-light border"
                                        style="padding: 12px;"></i>
                                    <input class="form-control py-2 ps-5 bg-light" type="password" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4 mb-0">
                                    <button type="submit" name="login"
                                        class="btn btn-outline-secondary btn-sm">Login</button>
                                    <a href="" class="fs-6 text-dark"><small>Forgot Password?</small></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/scripts.js"></script>
    <!-- chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="demo/chart-area-demo.js"></script>
    <script src="demo/chart-bar-demo.js"></script>
    <!-- data tables -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>