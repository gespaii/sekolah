<?php
if (isset($_POST['update'])) {
    include('config.php');
    $id = $_POST['id'];
    $teacher = $_POST['teacher'];
    $hour = $_POST['hours'];

    $sql = "UPDATE teachers SET teacher='$teacher', hours='$hour' WHERE id='$id'";
    if (mysqli_query($config, $sql)) {
        echo '<script>alert("Data Berhasil diUpdate!"); window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo '<script>alert("Data Gagal diUpdate!"); window.location.href="?m=teacher&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
