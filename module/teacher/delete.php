<?php
if(isset($_GET['id'])) {
    require_once('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id='$id'";
    $result = mysqli_query($config, $sql);

    if($result) {
        echo "<script>location='?m=teacher&s=view';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); location='?m=teacher&s=view';</script>";
    }
} 