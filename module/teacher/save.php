<?php
if (isset($_POST['save'])) {
    include('config.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $subject_id = $_POST['subject_id'];
    $location = $_FILES['photo']['tmp_name'];
    $filename = $_FILES['photo']['name'];
    $filetype = $_FILES['photo']['type'];

    $sql = "INSERT INTO teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id'";
    if (mysqli_query($config, $sql)) {
        echo '<script>alert("Data Berhasil disimpan!"); window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo '<script>alert("Data Gagal disimpan!"); window.location.href="?m=teacher&s=add"</script>';
        //var_dump($sql);
    }
} else {
    echo '<script>window.history.back()</script>';
}