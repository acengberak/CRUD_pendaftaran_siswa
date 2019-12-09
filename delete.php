<?php
require_once('connection.php');

$id = $_GET['id'];
$res = $database->delete($id);
if ($res) {
    header("location:show_table.php");
}else{
    echo 'Failed Deleted';
}


?>