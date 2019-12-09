<?php

class Database {

    private $connection;

    public function __construct()
    {
        $this->connect_db();
    }

    function connect_db()
    {
        $this->connection = mysqli_connect('localhost','root','','sekolah');
        if(mysqli_connect_error()){
            die("Database Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }


    function create($id,$fname,$lname,$alamat,$gender,$umur)
    {
        $sql = "INSERT INTO siswa (id,nama_depan, nama_belakang, alamat, gender, umur) VALUES ('$id', '$fname','$lname','$alamat', '$gender', '$umur')";

        $res = mysqli_query($this->connection,$sql);
        if ($res) {
            return true;
        }else{
            return false;
        }
    }

    function read ( $id = null){
        $sql = "SELECT * FROM siswa";
        if($id) { $sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }



    // function update($fname,$lname,$alamat,$id)
    // {
    //     $sql = "UPDATE siswa SET nama_depan='$fname', nama_belakang='$lname', alamat='$alamat' WHERE id=$id";
    //     $res =  mysqli_query($this->connection,$sql);
    //     if ($res) {
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    public function update($fname, $lname, $alamat,$gender,$umur, $id)
    {
        $sql = "UPDATE siswa SET nama_depan='$fname', nama_belakang='$lname',
   alamat='$alamat', gender='$gender', umur='$umur' WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id){
        $sql = "DELETE FROM siswa WHERE id=$id";
        $res = mysqli_query($this->connection,$sql);
        if ($res) {
          return true;
        }else{
            return false;
        }
    }


}

$database = new Database();


?>
