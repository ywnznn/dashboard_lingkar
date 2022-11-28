<?php

require('./config.php');
// session_start();
error_reporting(1);
if (isset($_POST['add-user'])) {
  $userNama = $_POST['txt_nama'];
  $userNoHp = $_POST['txt_nohp'];
  $userMail = $_POST['txt_mail'];
  $tglmasuk = $_POST['txt_tgl'];
  $alamat = $_POST['txt_alamat'];
  

  $foto = $_FILES['foto']['name'];
  $file_tmp = $_FILES['foto']['tmp_name'];
  move_uploaded_file($file_tmp, '../foto/user/' . $foto);

  $query    = "INSERT INTO karyawan SET nama = '$userNama', foto = '$foto', nohp = '$userNoHp', email = '$userMail', tgl_masuk = '$tglmasuk', alamat = '$alamat'";
  $result   = mysqli_query($koneksi, $query);


  if ($result) {
    echo "<script>
		Swal.fire({title: 'Data Berhasil Disimpan',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = '';}
		})</script>";
  } else {

    echo "<script>
			Swal.fire({title: 'Data Gagal Disimpan',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = '';}
			})</script>";
  }
}

?>