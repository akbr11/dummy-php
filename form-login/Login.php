<?php
include "koneksi.php";

$username = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($con, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
$q = mysqli_num_rows($query);

if($q > 0 ) {
  echo "<script>alert('Asup Monyet');</script>";
  header("location: home.php");
} else {
  echo "<script>alert('Gagal');</script>";
  header("location: index.php");
}
?>