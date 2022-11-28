<?php
require("./config.php");
if (isset($_GET['id'])) {
    $sql_hapus = "delete from karyawan where id='" . $_GET['id'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        header("location: karyawan.php");
    } else {
        header("location: karyawan.php");
    }
} elseif (isset($_POST['submit'])) {
    header("location: karyawan.php");
} else {
    header("location: karyawan.php");
}