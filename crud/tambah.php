<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $query = mysqli_query($conn, "INSERT INTO `data-user` (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");

  if ($query) {
    header('Location: index.php?status=sukses');
  } else {
    header('Location: tambah-data.php?status=gagal');
  }
}