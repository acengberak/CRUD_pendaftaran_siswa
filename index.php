<?php
require_once('connection.php');

if (isset($_POST) & !empty($_POST)) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];

    $res = $database->create($id, $fname, $lname, $alamat,$gender,$umur);
    if ($res) {
        echo '<script> alert("DATA UPDATE"); </script>';
        header("location:show_table.php");
    } else {
        echo "Data Gagal Disimpan";
    }
}



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


    <title>Form Daftar</title>
</head>

<body>




    <div class="formdaftar container">
        <div class="isiform row">
            <div class="col">
                <div class="card shadow-lg mt-5">
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputFname">First Name</label>
                                    <input name="fname" type="type" class="form-control" id="inputFname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputLname">Last Name</label>
                                    <input name="lname" type="type" class="form-control" id="inputLname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group" class="radio">
                                <label for="input1">Jenis Kelamin</label><br>
                                <input type="radio" name="gender" id="optionsRadio1" value="pria" checked>Pria
                                <br>
                                <input type="radio" name="gender" id="optionsRadio1" value="wanita" checked>wanita
                            </div>

                            <div class="form-group">
                                <label for="input1">Umur</label>
                                <select name="umur" class="form-control">
                                    <option>Pilih Umur</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah</button>

                        </form>

                    </div>
                </div>
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