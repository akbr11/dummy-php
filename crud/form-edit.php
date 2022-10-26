<?php
include_once "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM `data-user` WHERE id=$id");
$obj = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<a href="index.php">Kembali ke Home</a><br><br>
  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $obj['id'] ?>" />
    <span>Nama</span>
    <input type="text" name="nama" value="<?php echo $obj['nama'] ?>"><br><br>
    <span>Email</span>
    <input type="email" name="email" value="<?php echo $obj['email'] ?>"><br><br>
    <span>Pesan</span>
    <textarea name="pesan" id="" cols="30" rows="10"><?php echo $obj['pesan'] ?></textarea><br><br>
    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>

</html>