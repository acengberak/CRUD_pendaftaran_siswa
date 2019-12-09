<?php
require_once('connection.php');
$sql = $database->read();






?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- mobile style -->
    <link rel="stylesheet" href="css/mobile-style.css">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/4d5d34d37d.js" crossorigin="anonymous"></script>


    <title>Tabel</title>
</head>

<body>


    <div class="table container text-center">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Umur</th>

                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = mysqli_fetch_assoc($sql)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['nama_depan'] ?></td>
                                <td><?php echo $data['nama_belakang'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['gender'] ?></td>
                                <td><?php echo $data['umur'] ?></td>
                                <!-- Edit -->
                                <td><a href="update.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a></td>
                                <!-- delete -->
                                <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>