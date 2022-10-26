<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $query = mysqli_query($conn, "UPDATE `data-user` SET nama='$nama', email='$email', pesan='$pesan' WHERE id=$id");

  if($query) {
    header("location: index.php?status=update");
  } else {
    die("Gagal Menyimpan");
  }
}
?>