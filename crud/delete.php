<?php
include "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM `data-user` WHERE id=$id");
if ($query) {
  header('location: index.php?status=hapus');
} else {
  die ("Gagal Menghapus.");
}
