<?php include 'authentication/loginhandle.php' ?>
<?php include 'config.php' ?>
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
                <h2 class="my-4 main-title">Rooms</h2>
                <div class="card mb-4" id="uploaded">
                    <div class="card-header">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit Rooms
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Room Title</th>
                                    <th>Room Address</th>
                                    <th>Price / Night</th>
                                    <th>Default Image</th>
                                    <th>Guests</th>
                                    <th>Beds</th>
                                    <th>Bedrooms</th>
                                    <th>Bathrooms</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM `rooms`";
                            $result = mysqli_query($conn, $sql); 
                            $i = 1;      
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    $address = $row['address'];
                                    $price = $row['price'];
                                    $default_image = $row['default_image'];
                                    $guests = $row['guests'];
                                    $beds = $row['beds'];
                                    $bedrooms = $row['bedrooms'];
                                    $bathrooms = $row['bathrooms'];
                                    echo '<tr>
                                        <td>'.$i++.'</td>
                                        <td title="'.$title.'">'.$title.'</td>
                                        <td title="'.$address.'">'.$address.'</td>
                                        <td title="'.$price.'">'.$price.'</td>
                                        <td><img src="'.$default_image.'" width="50px"></td>
                                        <td title="'.$guests.'">'.$guests.'</td>
                                        <td title="'.$beds.'">'.$beds.'</td>
                                        <td title="'.$bedrooms.'">'.$bedrooms.'</td>
                                        <td title="'.$bathrooms.'">'.$bathrooms.'</td>
                                        <td>
                                            <a href="edit-room.php?roomid='.$id.'" class="text-dark fs-5"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="delete-room.php?roomid='.$id.'" class="text-danger ms-1 fs-5"><i class="fa-solid fa-trash-can"></i></a>
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
    <?php include 'components/scripts.php'; ?>
</body>
</html>