<?php
require_once('connection.php');
$id = $_GET['id'];
$res = $database->read($id);
$data = mysqli_fetch_assoc($res);


if (isset($_POST) & !empty($_POST)) {
    $fname = $_POST['nama_depan'];
    $lname = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];
    $res = $database->update($fname, $lname, $alamat, $gender, $umur, $id);
    if ($res) {
        echo "Data berhasil diubah";
        header("location:show_table.php");
    } else {
        echo "Data gagal diubah";
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
                <form method="POST">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_depan">First Name</label>
                                    <input name="nama_depan" type="type" class="form-control" id="nama_depan" value="<?php echo $data['nama_depan']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama_belakang">Last Name</label>
                                    <input name="nama_belakang" type="type" class="form-control" id="nama_belakang" value="<?php echo $data['nama_belakang']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Address</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $data['alamat']; ?>">
                            </div>
                            <div class="form-group" class="radio">
                                <label for="input1">Jenis Kelamin</label><br>
                                <input type="radio" name="gender" id="optionsRadio1" value="pria"<?php if($data['gender'] == 'pria'){echo "checked";} ?> >Pria
                                <br>
                                <input type="radio" name="gender" id="optionsRadio1" value="wanita" <?php if($data['gender'] == 'wanita'){echo "checked";} ?> >wanita
                            </div>

                            <div class="form-group">
                                <label for="input1">Umur</label>
                                <select name="umur" class="form-control">
                                    <option>Pilih Umur</option>
                                    <option value="20"<?php if($data['umur'] == '20'){echo "selected";} ?>>20</option>
                                    <option value="21"<?php if($data['umur'] == '21'){echo "selected";} ?>>21</option>
                                    <option value="22"<?php if($data['umur'] == '22'){echo "selected";} ?>>22</option>
                                    <option value="23"<?php if($data['umur'] == '23'){echo "selected";} ?>>23</option>
                                    <option value="24"<?php if($data['umur'] == '24'){echo "selected";} ?>>24</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" value="update">Tambah</button>

                        </div>
                    </div>
                </form>
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