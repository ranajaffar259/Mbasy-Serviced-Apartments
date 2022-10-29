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
        <div id="layoutSidenav_content">
            <main class="container-fluid"> 
                <h2 class="my-4 main-title">Facilities</h2>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit Facilities
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Facilities Name</th>
                                    <th>Facilities Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT * FROM `facilities`";
                                $result = mysqli_query($conn, $sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $facilities_id = $row['facilities_id'];
                                        $facilities_name = $row['facilities_name'];
                                        $facilities_image = $row['facilities_image'];
                                        echo '<tr>
                                            <td>'.$i++.'</td>
                                            <td>'.$facilities_name.'</td>
                                            <td><img width="30px" src="'.$facilities_image.'"></td>
                                            <td>
                                                <a href="edit-facilities.php?editfac='.$facilities_id.'" class="text-dark fs-5"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="delete-facilities.php?delete='.$facilities_id.'" class="text-danger ms-1 fs-5"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>';
                                    }
                                }
                            ?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>
</html>