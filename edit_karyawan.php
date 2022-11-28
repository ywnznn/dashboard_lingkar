<body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>



<?php
require('config.php');
error_reporting(1);
$id = $_GET['id'];
$nama = $_POST['nama'];
$tglmasuk = date('Y-m-d', strtotime($_POST['tgl_masuk']));
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/user/' . $foto);


if (isset($_POST['edit'])) {
    if (isset($_POST['edit'])) {
        if ($foto == "") {
            $sql = mysqli_query($koneksi, "UPDATE `karyawan` SET nama='$nama',nohp='$nohp',email='$email',tgl_masuk='$tglmasuk' WHERE id='$id'");
            echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'karyawan.php';}
            })</script>";
        } else {
            $sql = mysqli_query($koneksi, "UPDATE `karyawan` SET nama='$nama', foto='$foto', nohp='$nohp',email='$email', tgl_masuk='$tglmasuk' WHERE id='$id'");
            echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'karyawan.php';}
            })</script>";
        }
    } else {
        echo "<script>
            Swal.fire({title: 'Data Berhasil Diubah',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'karyawan.php';}
            })</script>";
    }
}
