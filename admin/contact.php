<?php include 'authentication/loginhandle.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/header.php' ?>
</head>
<body class="sb-nav-fixed">
    <?php include 'components/navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include 'components/sidenav.php' ?>
        <div id="layoutSidenav_content">
            <main class="container-fluid">
                <h2 class="my-4 main-title">Contact Entries</h2>     
                <div class="mb-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit Contact Us Entries
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date / Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'config.php';
                                    $sql = "SELECT * FROM `contacts`";
                                    $result = mysqli_query($conn, $sql);
                                    $i = 1;
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            $user_id = $row['user_id'];
                                            $name = $row['name'];
                                            $email = $row['email'];
                                            $subject = $row['subject'];
                                            $desc = $row['description'];
                                            $datetime = $row['date_time'];
                                            echo '<tr>
                                                <td>'.$i++.'</td>
                                                <td title="'.$name.'">'.$name.'</td>
                                                <td title="'.$email.'">'.$email.'</td>
                                                <td title="'.$subject.'">'.$subject.'</td>
                                                <td title="'.$desc.'">'.$desc.'</td>
                                                <td title="'.$datetime.'">'.$datetime.'</td>
                                                <td>
                                                    <a title="delete" href="delete-contact.php?userid='.$user_id.'" class="text-danger fs-5"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>';
                                        }
                                    }
                                ?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>
</html>