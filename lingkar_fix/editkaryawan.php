<?php
require('./config.php');
$id = $_GET['id'];
$nama = $_POST['nama'];
$foto = $_POST['foto'];
$tglmasuk = $_POST['tgl_masuk'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];


if (isset($_POST['submit'])) {
    $sql = mysqli_query($koneksi, "UPDATE `karyawan` SET nama='$nama', foto='$foto', tgl_masuk='$tglmasuk', nohp='$nohp', alamat='$adress', email='$email' WHERE id='$id'");   
    if ($sql) {
        header('location:karyawan.php');
    }
} elseif (isset($_POST['close'])) {
    header("location: karyawan.php");
}